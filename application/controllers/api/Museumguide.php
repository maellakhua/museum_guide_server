<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Example
 *
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array.
 *
 * @package		CodeIgniter
 * @subpackage	Rest Server
 * @category	Controller
 * @author		Phil Sturgeon
 * @link		http://philsturgeon.co.uk/code/
*/

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH.'/libraries/REST_Controller.php';

class Museumguide extends REST_Controller
{
	private $constructorParams = array("client_id" => "ZSHVA02GGC5YRCWQIAWPOJULYHPSVC0FNTX5DOCCXRILE4OJ",
			"client_secret" => "TJVGUYC5U0S0DWEEQEZTR0MGTUXCBJ1NHTIEDB1RLVSBZ2G1");
	
	
			
	function __construct()
    {
        // Construct our parent class
        parent::__construct();
    }
    
    function venuedetail($venue_id)
    {	 
		
	    $this->load->library('foursquareapi', $this->constructorParams);
    	// Perform a request to a public resource
		$ven = $this->foursquareapi->GetPublic("venues/" . $venue_id);
		if($ven) 
			return json_decode($ven);
		//else 
			//return NULL;
    }
    
    function venuehours($venue_id)
    {	 
		//$t=date('d-m-Y');
		//$cur_day=date("D",strtotime($t));
		
	    $this->load->library('foursquareapi', $this->constructorParams);
    	// Perform a request to a public resource
		$hours = $this->foursquareapi->GetPublic("venues/" . $venue_id . "/hours");
		if($hours)
		{
			$res = json_decode($hours);
			if ( count((array)$res->response->hours)) {
				foreach ($res->response->hours->timeframes as $tf) {
					if (property_exists($tf, 'includesToday')) {
						return ($tf->open);
					}
				}
			}
			if (count((array)$res->response->popular)) {
				foreach ($res->response->popular->timeframes as $tf) {
					if (property_exists($tf, 'includesToday')) {
						return ($tf->open);
					}
				}
			}
			return array();
		}
    }
    
    function sort_rating($a, $b)
	{
		if ($a['rating'] < $b['rating']) {
			return true;
		} elseif ($a['rating'] > $b['rating']) {
			return false;
		} else {
			return 0;
		}
	}
    
	function venues_get()
    {	
		//header('content-type: application/json; charset=utf-8');
        header('content-type: application/json; charset=utf-8');
        header("access-control-allow-origin: *");
        
        $this->load->library('foursquareapi', $this->constructorParams);
        
        if ($this->get('ll')) {
			list($lat,$lng) = explode(',', $this->get('ll'));
		}
		else if ($this->get('location')){
			$location = $this->get('location');
			// Generate a latitude/longitude pair using Google Maps API
			list($lat,$lng) = $this->foursquareapi->GeoLocate($location);
		}
		
        else {
			$location = "Athens, GR";
			// Generate a latitude/longitude pair using Google Maps API
			list($lat,$lng) = $this->foursquareapi->GeoLocate($location);
		}    
	    
		// Prepare parameters
		$params = array("ll"=>"$lat,$lng",   // location
						"radius" => "5000",  // radius of 5km
						"categoryId"=>"4bf58dd8d48988d181941735", //Museum
						"limit"=>"20" // Limit answers
						);
		
		// Perform a request to a public resource
		$venues = $this->foursquareapi->GetPublic("venues/search",$params);
			
			
		if($venues)
		{
			$myvenues = json_decode($venues);
			$final_v = array();
			$index = 0;
			foreach ($myvenues->response->venues as $place) {
				
				$venue_d = $this->venuedetail($place->id);
				$final_v[] = array(
				"id" => $place->id,
				"name" => isset($place->name) ? $place->name : "",
				"distance" => isset($place->location->distance) ? $place->location->distance : "",
				"rating" => isset($venue_d->response->venue->rating) ? $venue_d->response->venue->rating : 0.0,
				"hours" => $this->venuehours($place->id),
				"index" => $index
				);
				$index += 1;
			}
			
			usort($final_v, array($this, 'sort_rating'));

			$this->response($final_v, 200); // 200 being the HTTP response code
		}

		else
		{
			$this->response(array('error' => 'User could not be found'), 404);
		}
    }
    
    
}
