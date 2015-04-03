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

class Test2 extends REST_Controller
{
	private $constructorParams = array("client_id" => "ZSHVA02GGC5YRCWQIAWPOJULYHPSVC0FNTX5DOCCXRILE4OJ",
			"client_secret" => "TJVGUYC5U0S0DWEEQEZTR0MGTUXCBJ1NHTIEDB1RLVSBZ2G1");
	
	
			
	function __construct()
    {
        // Construct our parent class
        parent::__construct();
        
        // Configure limits on our controller methods. Ensure
        // you have created the 'limits' table and enabled 'limits'
        // within application/config/rest.php
        //$this->methods['venues_get']['limit'] = 500; //500 requests per hour per user/key
        //$this->methods['user_post']['limit'] = 100; //100 requests per hour per user/key
        //$this->methods['user_delete']['limit'] = 50; //50 requests per hour per user/key
    }
    
    function stripslashes_deep($value)
	{
		if(isset($value)) {
			$value = is_array($value) ?
				array_map('stripslashes_deep', $value) :
				stripslashes($value);
		}
		return $value;
	}
	
    function venues_get()
    {	
		
			$location = "Athens, GR";
		    
		    $this->load->library('foursquareapi', $this->constructorParams);
		
		// Generate a latitude/longitude pair using Google Maps API
		list($lat,$lng) = $this->foursquareapi->GeoLocate($location);
	
	
	// Prepare parameters
	$params = array("ll"=>"$lat,$lng",
	"radius" => "5000", "categoryId"=>"4bf58dd8d48988d181941735");
	//$params = array("ll"=>"37.97,23.72");
	// Perform a request to a public resource
	$venues = $this->foursquareapi->GetPublic("venues/search",$params);
		/*$params = array(
			"near" => "$town",
		);*/
		
		//$venues = $this->foursquareapi->GetPublic("venues/search");
		
    	
        if($venues)
        {
			//$data['venues'] = json_decode($venues);
			//$data['location'] = $location;
		    //$this->load->view('venues_view', $data);
			
            $this->response($venues, 200); // 200 being the HTTP response code
        }

        else
        {
            $this->response(array('error' => 'User could not be found'), 404);
        }
    }
    
    
    function venuedetail($venue_id)
    {	 
		
	    $this->load->library('foursquareapi', $this->constructorParams);
    	// Perform a request to a public resource
		$ven = $this->foursquareapi->GetPublic("venues/" . $venue_id);
		if($ven)
		{
			//$this->response(json_decode($venue), 200); // 200 being the HTTP response code
			$ret = json_decode($ven);
			
		}
    }
    
	function venuesexplore_get()
    {	
		//header('content-type: application/json; charset=utf-8');
        
        if (!$this->get('location')) {
			$location = "Athens, GR";
		}
		else {
			$location = $this->get('location');
		}
		    
	    $this->load->library('foursquareapi', $this->constructorParams);
		
		// Generate a latitude/longitude pair using Google Maps API
		list($lat,$lng) = $this->foursquareapi->GeoLocate($location);
	
	
		// Prepare parameters
		$params = array("ll"=>"$lat,$lng",
						"radius" => "5000", 
						"categoryId"=>"4bf58dd8d48988d181941735",
						"limit"=>"50");
		
		// Perform a request to a public resource
		$venues = $this->foursquareapi->GetPublic("venues/search",$params);
			
			
		if($venues)
		{
			$myvenues = json_decode($venues);
			$finaljson = '{"results":';
			$final_v = array();
			$index = 0;
			foreach ($myvenues->response->venues as $place) {
				$q = "venues/";
				$q .= $place->id;
				
				$venue_detail = $this->foursquareapi->GetPublic($q);
				$venue_d = json_decode($venue_detail, TRUE);
				//echo $venue_d['response']['venue']['hours']['status'];
				//$this->response($final_v, 200);
				//$this->response($venue_detail, 200);
				//var_dump($venue_d);
				//json_decode($this->venuedetail($place->id));
				//var_dump($venue_detail);
				//echo $venue_detail->response->venue->rating;
				$final_v[] = array(
				"id" => $place->id,
				"name" => isset($place->name) ? $place->name : "",
				"distance" => isset($place->location->distance) ? $place->location->distance : "",
				//"lat" => isset($place->location->lat) ? $place->location->lat : "",
				//"long" => isset($place->location->lng) ? $place->location->lng : "",
				//"id" => isset($place->id) ? $place->id : "",
				//"source" => "Foursquare",
				"rating" => isset($venue_d['response']['venue']['rating']) ? $venue_d['response']['venue']['rating'] : "",
				"hours" => isset($venue_d['response']['venue']['hours']['status']) ? $venue_d['response']['venue']['hours']['status'] : "",
				"index" => $index
				);
				$index += 1;
			}
			//$finaljson .= stripslashes_deep(json_encode($final_v, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)) . '}'; 
			//$test = json_encode($final_v);
			//var_dump($final_v);
			//echo "\n\n\n\n";
			//$test = str_replace('\"','"',$test);
			//$finaljson .=  $final_v. '}'; 
			////$data['venues'] = $finaljson;
			//$data['location'] = $location;
			//$this->load->view('venuesexplore_view', $data);
			
			$this->response($final_v, 200); // 200 being the HTTP response code
		}

		else
		{
			$this->response(array('error' => 'User could not be found'), 404);
		}
    }
    
    
}
