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
    
    function venues_get()
    {	
		if ( $this->get('location') ) {
			$location = $this->get('location');
		}
		else {
			$location = "Athens, GR";
		}
		    
		    /*
        	echo get_class($this)."\n";          //YourProject\YourFile\YourClass
			echo isset($this)."\n";              //true
			echo get_parent_class($this);    //YourBundle\YourStuff\YourParentClass
			foreach($this->constructorParams as $key => $value) {
				echo "Key=$key, value=$value \n";
			}*/
			
		    $this->load->library('foursquareapi', $this->constructorParams);
		
		// Generate a latitude/longitude pair using Google Maps API
		list($lat,$lng) = $this->foursquareapi->GeoLocate($location);
	
	
	// Prepare parameters
	$params = array("ll"=>"$lat,$lng",
	"radius" => "5000", "categoryId"=>"4bf58dd8d48988d181941735");
	//$params = array("ll"=>"37.4,25.6");
	// Perform a request to a public resource
	$venues = $this->foursquareapi->GetPublic("venues/search",$params);
		/*$params = array(
			"near" => "$town",
		);*/
		
		//$venues = $this->foursquareapi->GetPublic("venues/search");
		
    	
        if($venues)
        {
			$data['venues'] = json_decode($venues);
			$data['location'] = $location;
		    $this->load->view('venues_view', $data);
			
            //$this->response($venues, 200); // 200 being the HTTP response code
        }

        else
        {
            $this->response(array('error' => 'User could not be found'), 404);
        }
    }
    
    function venuesexplore_get()
    {	
		if ( $this->get('location') ) {
			$location = $this->get('location');
		}
		else {
			$location = "Athens, GR";
		}
		    
		   
	    $this->load->library('foursquareapi', $this->constructorParams);
	
		// Generate a latitude/longitude pair using Google Maps API
		list($lat,$lng) = $this->foursquareapi->GeoLocate($location);


		// Prepare parameters
		$params = array("ll"=>"$lat,$lng",
		"radius" => "5000", "categoryId"=>"4bf58dd8d48988d181941735");
		//$params = array("ll"=>"37.4,25.6");
		// Perform a request to a public resource
		$venues = $this->foursquareapi->GetPublic("venues/explore",$params);
			
		//$venues = $this->foursquareapi->GetPublic("venues/search");
	
	
		if($venues)
		{
			$data['venues'] = json_decode($venues);
			$data['location'] = $location;
			$this->load->view('venues_view', $data);
			
			//$this->response($venues, 200); // 200 being the HTTP response code
		}

		else
		{
			$this->response(array('error' => 'User could not be found'), 404);
		}
    }



    function venuedetail_get()
    {	 
		// '4b0fc38bf964a520af6423e3'; // Acropolis Museum
		if ( $this->get('venueid') ) {
			$venue_id = $this->get('venueid');
		}

	    $this->load->library('foursquareapi', $this->constructorParams);
    	// Perform a request to a public resource
		$venues = $this->foursquareapi->GetPublic("venues/" . $venue_id);
		if($venues)
		{
			$this->response(json_decode($venues), 200); // 200 being the HTTP response code
		}
    }
    
    
}
