<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * REST Server for Museums
 *
 * Expected input:
 * 		location: eg. Athens
 * 		lat: latitude
 * 		lng: longtitude
 * 		radius: radius from current location to search
 * 		limit: limit results (max=50)
 * 		method: distance, rating, weight
 * 
 * Output: A JSON list with the following fields:
 * 		id			: 	Venue ID
 * 		name		:	Venue name
 * 		lat			:	Latitude
 * 		lng			:	Longtitude
 * 		rating		: 	Rating
 * 		distance	:	Distance
 * 		hours		:	Hours open
 * 		isopen		:	If is open now
 *
 * Uses REST Server Library by Phil Sturgeon
 * 
 * @subpackage	Rest Server
 * @category	Controller
 * @author		Chris Tsolkas, Tasos Spiliopoulos, Ioannis Mitropoulos, Panagiotis Gemos
 * @link		http://62.217.125.30/~ellakuser/museumapp/mymuseums/venues/
*/

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH.'/libraries/REST_Controller.php';

class Mymuseums extends REST_Controller
{
	// Use your own client_id, client_secret to connect to Foursquare API
	private $constructorParams = array("client_id" => "ZSHVA02GGC5YRCWQIAWPOJULYHPSVC0FNTX5DOCCXRILE4OJ",
			"client_secret" => "TJVGUYC5U0S0DWEEQEZTR0MGTUXCBJ1NHTIEDB1RLVSBZ2G1");
	
	// Take the constructor from REST_Controller		
	function __construct()
    {
        // Construct our parent class
        parent::__construct();
    }
    
    // Make an API call to Foursquare to take venue details
    function venuedetail($venue_id)
    {	 
		// Load Foursquare library
	    $this->load->library('foursquareapi', $this->constructorParams);
    	
    	// Perform a request to a public resource
		$ven = $this->foursquareapi->GetPublic("venues/" . $venue_id);
		
		// If we 've got a successful answer return it else NULL 
		if($ven) 
			return json_decode($ven);
		else 
			return NULL;
    }
    
    // Make an API call to Foursquare to get machine readable hours for the venue
    function venuehours($venue_id)
    {	 
		// Load Foursquare library
	    $this->load->library('foursquareapi', $this->constructorParams);
    	
    	// Perform a request to a public resource
		$hours = $this->foursquareapi->GetPublic("venues/" . $venue_id . "/hours");
		
		if($hours)
		{
			$res = json_decode($hours);
			// Cast object to array and check for emptiness
			if ( count((array)$res->response->hours)) {
				// Get timeframes
				foreach ($res->response->hours->timeframes as $tf) {
					// Get only the hours for today
					if (property_exists($tf, 'includesToday')) {
						return ($tf->open);
					}
				}
			}
			// Continue search to popular hours if it does not find hours 
			// Cast object to array and check for emptiness
			if (count((array)$res->response->popular)) {
				// Get timeframes
				foreach ($res->response->popular->timeframes as $tf) {
					// Get only the hours for today
					if (property_exists($tf, 'includesToday')) {
						return ($tf->open);
					}
				}
			}
			// No hours or popular hours present
			return array();
		}
    }
    
    // Sort list in rating descenting order
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
    
    // Sort list in rating ascending order
    function sort_distance($a, $b)
	{
		if ($a['distance'] > $b['distance']) {
			return true;
		} elseif ($a['distance'] < $b['distance']) {
			return false;
		} else {
			return 0;
		}
	}
	
	// Sort list in weight descenting order
	function sort_weight($a, $b)
	{
		if ($a['weight'] < $b['weight']) {
			return true;
		} elseif ($a['weight'] > $b['weight']) {
			return false;
		} else {
			return 0;
		}
	}
	
	// Calculate weights by combining rating and distance
	function calc_weight( $rating, $distance, $maxrating, $maxdistance) {
		$weight =  0.6*($rating / $maxrating) +
                    0.4*( 1 - $distance / $maxdistance);
        return $weight;
	}
	
    // Basic rest method
	function venues_get()
    {	
        header('content-type: application/json; charset=utf-8');
        header("access-control-allow-origin: *");
        //The above are needed for browser viewing to allow cross site transfers
        // ATTENTION: Must be the first lines in function, thus the comments
        // come right after them and NOT BEFORE
        
		// Load Foursquare library        
		$this->load->library('foursquareapi', $this->constructorParams);
        
        // Get lat and lng from GET request
        if ($this->get('lat') && $this->get('lng')) {
			$lat = $this->get('lat');
			$lng = $this->get('lng');
		}
		// or the location and turn it to lat. lng pair
		else if ($this->get('location')){
			$location = $this->get('location');
			// Generate a latitude/longitude pair using Google Maps API
			list($lat,$lng) = $this->foursquareapi->GeoLocate($location);
		}
		// or default to Athens (the place we live)
        else {
			$location = "Athens, GR";
			// Generate a latitude/longitude pair using Google Maps API
			list($lat,$lng) = $this->foursquareapi->GeoLocate($location);
		}    
	    
	    // Get radius from GET request
	    if ($this->get('radius')) {
			$radius = $this->get('radius');
		}
		else {
			$radius = 5000; // default value
		}
	    
	    // Get limit from GET request
	    if ($this->get('limit')) {
			$limit = $this->get('limit');
		}
		else {
			$limit = 10; // default value
		}
	    
	    // Get method from GET request
	    if ($this->get('method')) {
			$method = $this->get('method');
		}
		else {
			$method = "weight"; //default value
		}
	    
	    
		// Prepare parameters for API call
		$params = array("ll"=>"$lat,$lng",   // location
						"radius" => $radius,  // radius
						"categoryId"=>"4bf58dd8d48988d181941735", //Museum
						"limit"=>"$limit" // Limit answers
						);
		
		// Perform a request to a public resource using parameters
		$venues = $this->foursquareapi->GetPublic("venues/search",$params);
			
			
		if($venues)
		{
			// decode response to an object
			$myvenues = json_decode($venues);
			// initialize answer array
			$final_v = array();
			// Iterate through venues in response
			foreach ($myvenues->response->venues as $place) {
				// Set distance
				$distance = isset($place->location->distance) ? $place->location->distance : 100000;
				// Set rating
				$rating = isset($venue_d->response->venue->rating) ? $venue_d->response->venue->rating : 0.0;
				// initialize isopen to unknown
				$isopen = -1;
				// Get venuedetails
				$venue_d = $this->venuedetail($place->id);
				
				// If we have hours and isOpen field set $isopen accordingly
				if (property_exists($venue_d->response->venue, 'hours') ) {
					if (property_exists($venue_d->response->venue->hours, 'isOpen'))
						$isopen = $venue_d->response->venue->hours->isOpen ? 1 : 0;
				}
				else if (property_exists($venue_d->response->venue, 'popular') ) {
					if (property_exists($venue_d->response->venue->popular, 'isOpen'))
						$isopen = $venue_d->response->venue->popular->isOpen ? 1 : 0;
				}
				
				// Add array element with attributes
				$final_v[] = array(
					"id" => $place->id,
					"name" => isset($place->name) ? $place->name : "",
					"lat" => $lat,
					"lng" => $lng,
					"distance" => $distance,
					"rating" => $rating,
					"hours" => $this->venuehours($place->id),
					"weight" => $this->calc_weight($rating, $distance, 10, $radius),
					"isopen" => $isopen 
				);
				
			}
			
			// Sort array based on method
			usort($final_v, array($this, 'sort_'.$method));
			// Send Response through the REST server which is configured to output JSON
			$this->response($final_v, 200); // 200 being the HTTP response code
		}
		// Error Response
		else
		{
			$this->response(array('error' => 'Venues could not be found'), 404);
		}
    }
    
    
}
