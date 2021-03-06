<<<<<<< HEAD
<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2015, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');
=======
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

if ( ! function_exists('xml_parser_create'))
{
	show_error('Your PHP installation does not support XML');
}

<<<<<<< HEAD
if ( ! class_exists('CI_Xmlrpc', FALSE))
=======
if ( ! class_exists('CI_Xmlrpc'))
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
{
	show_error('You must load the Xmlrpc class before loading the Xmlrpcs class in order to create a server.');
}

// ------------------------------------------------------------------------

/**
 * XML-RPC server class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	XML-RPC
<<<<<<< HEAD
 * @author		EllisLab Dev Team
 * @link		http://codeigniter.com/user_guide/libraries/xmlrpc.html
 */
class CI_Xmlrpcs extends CI_Xmlrpc {

	/**
	 * Array of methods mapped to function names and signatures
	 *
	 * @var array
	 */
	public $methods = array();

	/**
	 * Debug Message
	 *
	 * @var string
	 */
	public $debug_msg = '';

	/**
	 * XML RPC Server methods
	 *
	 * @var array
	 */
	public $system_methods	= array();

	/**
	 * Configuration object
	 *
	 * @var object
	 */
	public $object = FALSE;

	/**
	 * Initialize XMLRPC class
	 *
	 * @param	array	$config
	 * @return	void
	 */
	public function __construct($config = array())
=======
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/libraries/xmlrpc.html
 */
class CI_Xmlrpcs extends CI_Xmlrpc
{
	var $methods		= array();	//array of methods mapped to function names and signatures
	var $debug_msg		= '';		// Debug Message
	var $system_methods = array();	// XML RPC Server methods
	var $controller_obj;

	var $object			= FALSE;

	/**
	 * Constructor
	 */
	public function __construct($config=array())
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	{
		parent::__construct();
		$this->set_system_methods();

		if (isset($config['functions']) && is_array($config['functions']))
		{
			$this->methods = array_merge($this->methods, $config['functions']);
		}

<<<<<<< HEAD
		log_message('info', 'XML-RPC Server Class Initialized');
=======
		log_message('debug', "XML-RPC Server Class Initialized");
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Initialize Prefs and Serve
	 *
<<<<<<< HEAD
	 * @param	mixed
	 * @return	void
	 */
	public function initialize($config = array())
=======
	 * @access	public
	 * @param	mixed
	 * @return	void
	 */
	function initialize($config=array())
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	{
		if (isset($config['functions']) && is_array($config['functions']))
		{
			$this->methods = array_merge($this->methods, $config['functions']);
		}

		if (isset($config['debug']))
		{
			$this->debug = $config['debug'];
		}

		if (isset($config['object']) && is_object($config['object']))
		{
			$this->object = $config['object'];
		}

		if (isset($config['xss_clean']))
		{
			$this->xss_clean = $config['xss_clean'];
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Setting of System Methods
	 *
<<<<<<< HEAD
	 * @return	void
	 */
	public function set_system_methods()
	{
		$this->methods = array(
					'system.listMethods'	 => array(
										'function' => 'this.listMethods',
										'signature' => array(array($this->xmlrpcArray, $this->xmlrpcString), array($this->xmlrpcArray)),
										'docstring' => 'Returns an array of available methods on this server'),
					'system.methodHelp'	 => array(
										'function' => 'this.methodHelp',
										'signature' => array(array($this->xmlrpcString, $this->xmlrpcString)),
										'docstring' => 'Returns a documentation string for the specified method'),
					'system.methodSignature' => array(
										'function' => 'this.methodSignature',
										'signature' => array(array($this->xmlrpcArray, $this->xmlrpcString)),
										'docstring' => 'Returns an array describing the return type and required parameters of a method'),
					'system.multicall'	 => array(
										'function' => 'this.multicall',
										'signature' => array(array($this->xmlrpcArray, $this->xmlrpcArray)),
										'docstring' => 'Combine multiple RPC calls in one request. See http://www.xmlrpc.com/discuss/msgReader$1208 for details')
				);
=======
	 * @access	public
	 * @return	void
	 */
	function set_system_methods()
	{
		$this->methods = array(
					'system.listMethods'	 => array(
													'function' => 'this.listMethods',
													'signature' => array(array($this->xmlrpcArray, $this->xmlrpcString), array($this->xmlrpcArray)),
													'docstring' => 'Returns an array of available methods on this server'),
					'system.methodHelp'		 => array(
													'function' => 'this.methodHelp',
													'signature' => array(array($this->xmlrpcString, $this->xmlrpcString)),
													'docstring' => 'Returns a documentation string for the specified method'),
					'system.methodSignature' => array(
													'function' => 'this.methodSignature',
													'signature' => array(array($this->xmlrpcArray, $this->xmlrpcString)),
													'docstring' => 'Returns an array describing the return type and required parameters of a method'),
					'system.multicall'		 => array(
												'function' => 'this.multicall',
												'signature' => array(array($this->xmlrpcArray, $this->xmlrpcArray)),
												'docstring' => 'Combine multiple RPC calls in one request. See http://www.xmlrpc.com/discuss/msgReader$1208 for details')
					);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Main Server Function
	 *
<<<<<<< HEAD
	 * @return	void
	 */
	public function serve()
	{
		$r = $this->parseRequest();
		$payload = '<?xml version="1.0" encoding="'.$this->xmlrpc_defencoding.'"?'.'>'."\n".$this->debug_msg.$r->prepare_response();

		header('Content-Type: text/xml');
		header('Content-Length: '.strlen($payload));
=======
	 * @access	public
	 * @return	void
	 */
	function serve()
	{
		$r = $this->parseRequest();
		$payload  = '<?xml version="1.0" encoding="'.$this->xmlrpc_defencoding.'"?'.'>'."\n";
		$payload .= $this->debug_msg;
		$payload .= $r->prepare_response();

		header("Content-Type: text/xml");
		header("Content-Length: ".strlen($payload));
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		exit($payload);
	}

	// --------------------------------------------------------------------

	/**
	 * Add Method to Class
	 *
<<<<<<< HEAD
=======
	 * @access	public
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @param	string	method name
	 * @param	string	function
	 * @param	string	signature
	 * @param	string	docstring
	 * @return	void
	 */
<<<<<<< HEAD
	public function add_to_map($methodname, $function, $sig, $doc)
	{
		$this->methods[$methodname] = array(
			'function'	=> $function,
			'signature'	=> $sig,
			'docstring'	=> $doc
=======
	function add_to_map($methodname, $function, $sig, $doc)
	{
		$this->methods[$methodname] = array(
			'function'  => $function,
			'signature' => $sig,
			'docstring' => $doc
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		);
	}

	// --------------------------------------------------------------------

	/**
	 * Parse Server Request
	 *
<<<<<<< HEAD
	 * @param	string	data
	 * @return	object	xmlrpc response
	 */
	public function parseRequest($data = '')
	{
=======
	 * @access	public
	 * @param	string	data
	 * @return	object	xmlrpc response
	 */
	function parseRequest($data='')
	{
		global $HTTP_RAW_POST_DATA;

>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		//-------------------------------------
		//  Get Data
		//-------------------------------------

<<<<<<< HEAD
		if ($data === '')
		{
			$CI =& get_instance();
			if ($CI->input->method() === 'post')
			{
				$data = $CI->input->raw_input_stream;
			}
=======
		if ($data == '')
		{
			$data = $HTTP_RAW_POST_DATA;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		//-------------------------------------
		//  Set up XML Parser
		//-------------------------------------

		$parser = xml_parser_create($this->xmlrpc_defencoding);
<<<<<<< HEAD
		$parser_object = new XML_RPC_Message('filler');
		$pname = (string) $parser;

		$parser_object->xh[$pname] = array(
			'isf' => 0,
			'isf_reason' => '',
			'params' => array(),
			'stack' => array(),
			'valuestack' => array(),
			'method' => ''
		);

		xml_set_object($parser, $parser_object);
		xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, TRUE);
=======
		$parser_object = new XML_RPC_Message("filler");

		$parser_object->xh[$parser]					= array();
		$parser_object->xh[$parser]['isf']			= 0;
		$parser_object->xh[$parser]['isf_reason']	= '';
		$parser_object->xh[$parser]['params']		= array();
		$parser_object->xh[$parser]['stack']		= array();
		$parser_object->xh[$parser]['valuestack']	= array();
		$parser_object->xh[$parser]['method']		= '';

		xml_set_object($parser, $parser_object);
		xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, true);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		xml_set_element_handler($parser, 'open_tag', 'closing_tag');
		xml_set_character_data_handler($parser, 'character_data');
		//xml_set_default_handler($parser, 'default_handler');

<<<<<<< HEAD
		//-------------------------------------
		// PARSE + PROCESS XML DATA
=======

		//-------------------------------------
		//  PARSE + PROCESS XML DATA
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		//-------------------------------------

		if ( ! xml_parse($parser, $data, 1))
		{
<<<<<<< HEAD
			// Return XML error as a faultCode
			$r = new XML_RPC_Response(0,
				$this->xmlrpcerrxml + xml_get_error_code($parser),
				sprintf('XML error: %s at line %d',
=======
			// return XML error as a faultCode
			$r = new XML_RPC_Response(0,
			$this->xmlrpcerrxml + xml_get_error_code($parser),
			sprintf('XML error: %s at line %d',
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
				xml_error_string(xml_get_error_code($parser)),
				xml_get_current_line_number($parser)));
			xml_parser_free($parser);
		}
<<<<<<< HEAD
		elseif ($parser_object->xh[$pname]['isf'])
=======
		elseif ($parser_object->xh[$parser]['isf'])
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			return new XML_RPC_Response(0, $this->xmlrpcerr['invalid_return'], $this->xmlrpcstr['invalid_return']);
		}
		else
		{
			xml_parser_free($parser);

<<<<<<< HEAD
			$m = new XML_RPC_Message($parser_object->xh[$pname]['method']);
			$plist = '';

			for ($i = 0, $c = count($parser_object->xh[$pname]['params']); $i < $c; $i++)
			{
				if ($this->debug === TRUE)
				{
					$plist .= $i.' - '.print_r(get_object_vars($parser_object->xh[$pname]['params'][$i]), TRUE).";\n";
				}

				$m->addParam($parser_object->xh[$pname]['params'][$i]);
=======
			$m = new XML_RPC_Message($parser_object->xh[$parser]['method']);
			$plist='';

			for ($i=0; $i < count($parser_object->xh[$parser]['params']); $i++)
			{
				if ($this->debug === TRUE)
				{
					$plist .= "$i - " .  print_r(get_object_vars($parser_object->xh[$parser]['params'][$i]), TRUE). ";\n";
				}

				$m->addParam($parser_object->xh[$parser]['params'][$i]);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			}

			if ($this->debug === TRUE)
			{
<<<<<<< HEAD
				echo "<pre>---PLIST---\n".$plist."\n---PLIST END---\n\n</pre>";
=======
				echo "<pre>";
				echo "---PLIST---\n" . $plist . "\n---PLIST END---\n\n";
				echo "</pre>";
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			}

			$r = $this->_execute($m);
		}

		//-------------------------------------
<<<<<<< HEAD
		// SET DEBUGGING MESSAGE
=======
		//  SET DEBUGGING MESSAGE
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		//-------------------------------------

		if ($this->debug === TRUE)
		{
			$this->debug_msg = "<!-- DEBUG INFO:\n\n".$plist."\n END DEBUG-->\n";
		}

		return $r;
	}

	// --------------------------------------------------------------------

	/**
	 * Executes the Method
	 *
<<<<<<< HEAD
	 * @param	object
	 * @return	mixed
	 */
	protected function _execute($m)
=======
	 * @access	protected
	 * @param	object
	 * @return	mixed
	 */
	function _execute($m)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	{
		$methName = $m->method_name;

		// Check to see if it is a system call
<<<<<<< HEAD
		$system_call = (strpos($methName, 'system') === 0);

		if ($this->xss_clean === FALSE)
=======
		$system_call = (strncmp($methName, 'system', 5) == 0) ? TRUE : FALSE;

		if ($this->xss_clean == FALSE)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$m->xss_clean = FALSE;
		}

		//-------------------------------------
<<<<<<< HEAD
		// Valid Method
=======
		//  Valid Method
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		//-------------------------------------

		if ( ! isset($this->methods[$methName]['function']))
		{
			return new XML_RPC_Response(0, $this->xmlrpcerr['unknown_method'], $this->xmlrpcstr['unknown_method']);
		}

		//-------------------------------------
<<<<<<< HEAD
		// Check for Method (and Object)
		//-------------------------------------

		$method_parts = explode('.', $this->methods[$methName]['function']);
		$objectCall = (isset($method_parts[1]) && $method_parts[1] !== '');

		if ($system_call === TRUE)
		{
			if ( ! is_callable(array($this,$method_parts[1])))
=======
		//  Check for Method (and Object)
		//-------------------------------------

		$method_parts = explode(".", $this->methods[$methName]['function']);
		$objectCall = (isset($method_parts['1']) && $method_parts['1'] != "") ? TRUE : FALSE;

		if ($system_call === TRUE)
		{
			if ( ! is_callable(array($this,$method_parts['1'])))
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			{
				return new XML_RPC_Response(0, $this->xmlrpcerr['unknown_method'], $this->xmlrpcstr['unknown_method']);
			}
		}
<<<<<<< HEAD
		elseif (($objectCall && ! is_callable(array($method_parts[0], $method_parts[1])))
			OR ( ! $objectCall && ! is_callable($this->methods[$methName]['function']))
		)
		{
			return new XML_RPC_Response(0, $this->xmlrpcerr['unknown_method'], $this->xmlrpcstr['unknown_method']);
		}

		//-------------------------------------
		// Checking Methods Signature
=======
		else
		{
			if ($objectCall && ! is_callable(array($method_parts['0'],$method_parts['1'])))
			{
				return new XML_RPC_Response(0, $this->xmlrpcerr['unknown_method'], $this->xmlrpcstr['unknown_method']);
			}
			elseif ( ! $objectCall && ! is_callable($this->methods[$methName]['function']))
			{
				return new XML_RPC_Response(0, $this->xmlrpcerr['unknown_method'], $this->xmlrpcstr['unknown_method']);
			}
		}

		//-------------------------------------
		//  Checking Methods Signature
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		//-------------------------------------

		if (isset($this->methods[$methName]['signature']))
		{
			$sig = $this->methods[$methName]['signature'];
<<<<<<< HEAD
			for ($i = 0, $c = count($sig); $i < $c; $i++)
			{
				$current_sig = $sig[$i];

				if (count($current_sig) === count($m->params)+1)
				{
					for ($n = 0, $mc = count($m->params); $n < $mc; $n++)
					{
						$p = $m->params[$n];
						$pt = ($p->kindOf() === 'scalar') ? $p->scalarval() : $p->kindOf();

						if ($pt !== $current_sig[$n+1])
=======
			for ($i=0; $i<count($sig); $i++)
			{
				$current_sig = $sig[$i];

				if (count($current_sig) == count($m->params)+1)
				{
					for ($n=0; $n < count($m->params); $n++)
					{
						$p = $m->params[$n];
						$pt = ($p->kindOf() == 'scalar') ? $p->scalarval() : $p->kindOf();

						if ($pt != $current_sig[$n+1])
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
						{
							$pno = $n+1;
							$wanted = $current_sig[$n+1];

							return new XML_RPC_Response(0,
								$this->xmlrpcerr['incorrect_params'],
								$this->xmlrpcstr['incorrect_params'] .
<<<<<<< HEAD
								': Wanted '.$wanted.', got '.$pt.' at param '.$pno.')');
=======
								": Wanted {$wanted}, got {$pt} at param {$pno})");
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
						}
					}
				}
			}
		}

		//-------------------------------------
<<<<<<< HEAD
		// Calls the Function
=======
		//  Calls the Function
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		//-------------------------------------

		if ($objectCall === TRUE)
		{
<<<<<<< HEAD
			if ($method_parts[0] === 'this' && $system_call === TRUE)
			{
				return call_user_func(array($this, $method_parts[1]), $m);
			}
			elseif ($this->object === FALSE)
			{
				return get_instance()->$method_parts[1]($m);
			}
			else
			{
				return $this->object->$method_parts[1]($m);
=======
			if ($method_parts[0] == "this" && $system_call == TRUE)
			{
				return call_user_func(array($this, $method_parts[1]), $m);
			}
			else
			{
				if ($this->object === FALSE)
				{
					$CI =& get_instance();
					return $CI->$method_parts['1']($m);
				}
				else
				{
					return $this->object->$method_parts['1']($m);
					//return call_user_func(array(&$method_parts['0'],$method_parts['1']), $m);
				}
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			}
		}
		else
		{
			return call_user_func($this->methods[$methName]['function'], $m);
		}
	}
<<<<<<< HEAD

	// --------------------------------------------------------------------

	/**
	 * Server Function: List Methods
	 *
	 * @param	mixed
	 * @return	object
	 */
	public function listMethods($m)
=======
	
	// --------------------------------------------------------------------

	/**
	 * Server Function:  List Methods
	 *
	 * @access	public
	 * @param	mixed
	 * @return	object
	 */
	function listMethods($m)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	{
		$v = new XML_RPC_Values();
		$output = array();

		foreach ($this->methods as $key => $value)
		{
			$output[] = new XML_RPC_Values($key, 'string');
		}

		foreach ($this->system_methods as $key => $value)
		{
<<<<<<< HEAD
			$output[] = new XML_RPC_Values($key, 'string');
=======
			$output[]= new XML_RPC_Values($key, 'string');
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		$v->addArray($output);
		return new XML_RPC_Response($v);
	}
<<<<<<< HEAD

	// --------------------------------------------------------------------

	/**
	 * Server Function: Return Signature for Method
	 *
	 * @param	mixed
	 * @return	object
	 */
	public function methodSignature($m)
=======
	
	// --------------------------------------------------------------------

	/**
	 * Server Function:  Return Signature for Method
	 *
	 * @access	public
	 * @param	mixed
	 * @return	object
	 */
	function methodSignature($m)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	{
		$parameters = $m->output_parameters();
		$method_name = $parameters[0];

		if (isset($this->methods[$method_name]))
		{
			if ($this->methods[$method_name]['signature'])
			{
				$sigs = array();
				$signature = $this->methods[$method_name]['signature'];

<<<<<<< HEAD
				for ($i = 0, $c = count($signature); $i < $c; $i++)
				{
					$cursig = array();
					$inSig = $signature[$i];
					for ($j = 0, $jc = count($inSig); $j < $jc; $j++)
					{
						$cursig[]= new XML_RPC_Values($inSig[$j], 'string');
					}
					$sigs[] = new XML_RPC_Values($cursig, 'array');
				}

				return new XML_RPC_Response(new XML_RPC_Values($sigs, 'array'));
			}

			return new XML_RPC_Response(new XML_RPC_Values('undef', 'string'));
		}

		return new XML_RPC_Response(0, $this->xmlrpcerr['introspect_unknown'], $this->xmlrpcstr['introspect_unknown']);
=======
				for ($i=0; $i < count($signature); $i++)
				{
					$cursig = array();
					$inSig = $signature[$i];
					for ($j=0; $j<count($inSig); $j++)
					{
						$cursig[]= new XML_RPC_Values($inSig[$j], 'string');
					}
					$sigs[]= new XML_RPC_Values($cursig, 'array');
				}
				$r = new XML_RPC_Response(new XML_RPC_Values($sigs, 'array'));
			}
			else
			{
				$r = new XML_RPC_Response(new XML_RPC_Values('undef', 'string'));
			}
		}
		else
		{
			$r = new XML_RPC_Response(0,$this->xmlrpcerr['introspect_unknown'], $this->xmlrpcstr['introspect_unknown']);
		}
		return $r;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Server Function: Doc String for Method
	 *
	 * @param	mixed
	 * @return	object
	 */
	public function methodHelp($m)
=======
	 * Server Function:  Doc String for Method
	 *
	 * @access	public
	 * @param	mixed
	 * @return	object
	 */
	function methodHelp($m)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	{
		$parameters = $m->output_parameters();
		$method_name = $parameters[0];

		if (isset($this->methods[$method_name]))
		{
			$docstring = isset($this->methods[$method_name]['docstring']) ? $this->methods[$method_name]['docstring'] : '';

			return new XML_RPC_Response(new XML_RPC_Values($docstring, 'string'));
		}
		else
		{
			return new XML_RPC_Response(0, $this->xmlrpcerr['introspect_unknown'], $this->xmlrpcstr['introspect_unknown']);
		}
	}
<<<<<<< HEAD

	// --------------------------------------------------------------------

	/**
	 * Server Function: Multi-call
	 *
	 * @param	mixed
	 * @return	object
	 */
	public function multicall($m)
=======
	
	// --------------------------------------------------------------------

	/**
	 * Server Function:  Multi-call
	 *
	 * @access	public
	 * @param	mixed
	 * @return	object
	 */
	function multicall($m)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	{
		// Disabled
		return new XML_RPC_Response(0, $this->xmlrpcerr['unknown_method'], $this->xmlrpcstr['unknown_method']);

		$parameters = $m->output_parameters();
		$calls = $parameters[0];

		$result = array();

		foreach ($calls as $value)
		{
<<<<<<< HEAD
			$m = new XML_RPC_Message($value[0]);
			$plist = '';

			for ($i = 0, $c = count($value[1]); $i < $c; $i++)
=======
			//$attempt = $this->_execute(new XML_RPC_Message($value[0], $value[1]));

			$m = new XML_RPC_Message($value[0]);
			$plist='';

			for ($i=0; $i < count($value[1]); $i++)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			{
				$m->addParam(new XML_RPC_Values($value[1][$i], 'string'));
			}

			$attempt = $this->_execute($m);

<<<<<<< HEAD
			if ($attempt->faultCode() !== 0)
=======
			if ($attempt->faultCode() != 0)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			{
				return $attempt;
			}

			$result[] = new XML_RPC_Values(array($attempt->value()), 'array');
		}

		return new XML_RPC_Response(new XML_RPC_Values($result, 'array'));
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Multi-call Function: Error Handling
	 *
	 * @param	mixed
	 * @return	object
	 */
	public function multicall_error($err)
	{
		$str = is_string($err) ? $this->xmlrpcstr["multicall_${err}"] : $err->faultString();
=======
	 *  Multi-call Function:  Error Handling
	 *
	 * @access	public
	 * @param	mixed
	 * @return	object
	 */
	function multicall_error($err)
	{
		$str  = is_string($err) ? $this->xmlrpcstr["multicall_${err}"] : $err->faultString();
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		$code = is_string($err) ? $this->xmlrpcerr["multicall_${err}"] : $err->faultCode();

		$struct['faultCode'] = new XML_RPC_Values($code, 'int');
		$struct['faultString'] = new XML_RPC_Values($str, 'string');

		return new XML_RPC_Values($struct, 'struct');
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Multi-call Function: Processes method
	 *
	 * @param	mixed
	 * @return	object
	 */
	public function do_multicall($call)
	{
		if ($call->kindOf() !== 'struct')
=======
	 *  Multi-call Function:  Processes method
	 *
	 * @access	public
	 * @param	mixed
	 * @return	object
	 */
	function do_multicall($call)
	{
		if ($call->kindOf() != 'struct')
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			return $this->multicall_error('notstruct');
		}
		elseif ( ! $methName = $call->me['struct']['methodName'])
		{
			return $this->multicall_error('nomethod');
		}

<<<<<<< HEAD
		list($scalar_type, $scalar_value) = each($methName->me);
		$scalar_type = $scalar_type === $this->xmlrpcI4 ? $this->xmlrpcInt : $scalar_type;

		if ($methName->kindOf() !== 'scalar' OR $scalar_type !== 'string')
		{
			return $this->multicall_error('notstring');
		}
		elseif ($scalar_value === 'system.multicall')
=======
		list($scalar_type,$scalar_value)=each($methName->me);
		$scalar_type = $scalar_type == $this->xmlrpcI4 ? $this->xmlrpcInt : $scalar_type;

		if ($methName->kindOf() != 'scalar' OR $scalar_type != 'string')
		{
			return $this->multicall_error('notstring');
		}
		elseif ($scalar_value == 'system.multicall')
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			return $this->multicall_error('recursion');
		}
		elseif ( ! $params = $call->me['struct']['params'])
		{
			return $this->multicall_error('noparams');
		}
<<<<<<< HEAD
		elseif ($params->kindOf() !== 'array')
=======
		elseif ($params->kindOf() != 'array')
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			return $this->multicall_error('notarray');
		}

<<<<<<< HEAD
		list($a, $b) = each($params->me);

		$msg = new XML_RPC_Message($scalar_value);
		for ($i = 0, $numParams = count($b); $i < $numParams; $i++)
=======
		list($a,$b)=each($params->me);
		$numParams = count($b);

		$msg = new XML_RPC_Message($scalar_value);
		for ($i = 0; $i < $numParams; $i++)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$msg->params[] = $params->me['array'][$i];
		}

		$result = $this->_execute($msg);

<<<<<<< HEAD
		if ($result->faultCode() !== 0)
=======
		if ($result->faultCode() != 0)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			return $this->multicall_error($result);
		}

		return new XML_RPC_Values(array($result->value()), 'array');
	}

}
<<<<<<< HEAD
=======
// END XML_RPC_Server class


/* End of file Xmlrpcs.php */
/* Location: ./system/libraries/Xmlrpcs.php */
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
