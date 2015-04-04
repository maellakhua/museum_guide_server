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

// ------------------------------------------------------------------------
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

/**
 * Form Validation Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Validation
<<<<<<< HEAD
 * @author		EllisLab Dev Team
=======
 * @author		ExpressionEngine Dev Team
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
 * @link		http://codeigniter.com/user_guide/libraries/form_validation.html
 */
class CI_Form_validation {

<<<<<<< HEAD
	/**
	 * Reference to the CodeIgniter instance
	 *
	 * @var object
	 */
	protected $CI;

	/**
	 * Validation data for the current form submission
	 *
	 * @var array
	 */
	protected $_field_data		= array();

	/**
	 * Validation rules for the current form
	 *
	 * @var array
	 */
	protected $_config_rules	= array();

	/**
	 * Array of validation errors
	 *
	 * @var array
	 */
	protected $_error_array		= array();

	/**
	 * Array of custom error messages
	 *
	 * @var array
	 */
	protected $_error_messages	= array();

	/**
	 * Start tag for error wrapping
	 *
	 * @var string
	 */
	protected $_error_prefix	= '<p>';

	/**
	 * End tag for error wrapping
	 *
	 * @var string
	 */
	protected $_error_suffix	= '</p>';

	/**
	 * Custom error message
	 *
	 * @var string
	 */
	protected $error_string		= '';

	/**
	 * Whether the form data has been validated as safe
	 *
	 * @var bool
	 */
	protected $_safe_form_data	= FALSE;

	/**
	 * Custom data to validate
	 *
	 * @var array
	 */
	public $validation_data	= array();

	/**
	 * Initialize Form_Validation class
	 *
	 * @param	array	$rules
	 * @return	void
=======
	protected $CI;
	protected $_field_data			= array();
	protected $_config_rules		= array();
	protected $_error_array			= array();
	protected $_error_messages		= array();
	protected $_error_prefix		= '<p>';
	protected $_error_suffix		= '</p>';
	protected $error_string			= '';
	protected $_safe_form_data		= FALSE;

	/**
	 * Constructor
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	public function __construct($rules = array())
	{
		$this->CI =& get_instance();

<<<<<<< HEAD
		// applies delimiters set in config file.
		if (isset($rules['error_prefix']))
		{
			$this->_error_prefix = $rules['error_prefix'];
			unset($rules['error_prefix']);
		}
		if (isset($rules['error_suffix']))
		{
			$this->_error_suffix = $rules['error_suffix'];
			unset($rules['error_suffix']);
		}

=======
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		// Validation rules can be stored in a config file.
		$this->_config_rules = $rules;

		// Automatically load the form helper
		$this->CI->load->helper('form');

<<<<<<< HEAD
		log_message('info', 'Form Validation Class Initialized');
=======
		// Set the character encoding in MB.
		if (function_exists('mb_internal_encoding'))
		{
			mb_internal_encoding($this->CI->config->item('charset'));
		}

		log_message('debug', "Form Validation Class Initialized");
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Set Rules
	 *
	 * This function takes an array of field names and validation
<<<<<<< HEAD
	 * rules as input, any custom error messages, validates the info,
	 * and stores it
	 *
	 * @param	mixed	$field
	 * @param	string	$label
	 * @param	mixed	$rules
	 * @param	array	$errors
	 * @return	CI_Form_validation
	 */
	public function set_rules($field, $label = '', $rules = array(), $errors = array())
	{
		// No reason to set rules if we have no POST data
		// or a validation array has not been specified
		if ($this->CI->input->method() !== 'post' && empty($this->validation_data))
=======
	 * rules as input, validates the info, and stores it
	 *
	 * @access	public
	 * @param	mixed
	 * @param	string
	 * @return	void
	 */
	public function set_rules($field, $label = '', $rules = '')
	{
		// No reason to set rules if we have no POST data
		if (count($_POST) == 0)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			return $this;
		}

<<<<<<< HEAD
		// If an array was passed via the first parameter instead of individual string
=======
		// If an array was passed via the first parameter instead of indidual string
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		// values we cycle through it and recursively call this function.
		if (is_array($field))
		{
			foreach ($field as $row)
			{
				// Houston, we have a problem...
<<<<<<< HEAD
				if ( ! isset($row['field'], $row['rules']))
=======
				if ( ! isset($row['field']) OR ! isset($row['rules']))
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
				{
					continue;
				}

				// If the field label wasn't passed we use the field name
<<<<<<< HEAD
				$label = isset($row['label']) ? $row['label'] : $row['field'];

				// Add the custom error message array
				$errors = (isset($row['errors']) && is_array($row['errors'])) ? $row['errors'] : array();

				// Here we go!
				$this->set_rules($row['field'], $label, $row['rules'], $errors);
			}

=======
				$label = ( ! isset($row['label'])) ? $row['field'] : $row['label'];

				// Here we go!
				$this->set_rules($row['field'], $label, $row['rules']);
			}
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			return $this;
		}

		// No fields? Nothing to do...
<<<<<<< HEAD
		if ( ! is_string($field) OR $field === '')
		{
			return $this;
		}
		elseif ( ! is_array($rules))
		{
			// BC: Convert pipe-separated rules string to an array
			if (is_string($rules))
			{
				$rules = explode('|', $rules);
			}
			else
			{
				return $this;
			}
		}

		// If the field label wasn't passed we use the field name
		$label = ($label === '') ? $field : $label;

		$indexes = array();

		// Is the field name an array? If it is an array, we break it apart
		// into its components so that we can fetch the corresponding POST data later
		if (($is_array = (bool) preg_match_all('/\[(.*?)\]/', $field, $matches)) === TRUE)
		{
			sscanf($field, '%[^[][', $indexes[0]);

			for ($i = 0, $c = count($matches[0]); $i < $c; $i++)
			{
				if ($matches[1][$i] !== '')
				{
					$indexes[] = $matches[1][$i];
				}
			}
=======
		if ( ! is_string($field) OR  ! is_string($rules) OR $field == '')
		{
			return $this;
		}

		// If the field label wasn't passed we use the field name
		$label = ($label == '') ? $field : $label;

		// Is the field name an array?  We test for the existence of a bracket "[" in
		// the field name to determine this.  If it is an array, we break it apart
		// into its components so that we can fetch the corresponding POST data later
		if (strpos($field, '[') !== FALSE AND preg_match_all('/\[(.*?)\]/', $field, $matches))
		{
			// Note: Due to a bug in current() that affects some versions
			// of PHP we can not pass function call directly into it
			$x = explode('[', $field);
			$indexes[] = current($x);

			for ($i = 0; $i < count($matches['0']); $i++)
			{
				if ($matches['1'][$i] != '')
				{
					$indexes[] = $matches['1'][$i];
				}
			}

			$is_array = TRUE;
		}
		else
		{
			$indexes	= array();
			$is_array	= FALSE;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		// Build our master array
		$this->_field_data[$field] = array(
<<<<<<< HEAD
			'field'		=> $field,
			'label'		=> $label,
			'rules'		=> $rules,
			'errors'	=> $errors,
			'is_array'	=> $is_array,
			'keys'		=> $indexes,
			'postdata'	=> NULL,
			'error'		=> ''
=======
			'field'				=> $field,
			'label'				=> $label,
			'rules'				=> $rules,
			'is_array'			=> $is_array,
			'keys'				=> $indexes,
			'postdata'			=> NULL,
			'error'				=> ''
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		);

		return $this;
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * By default, form validation uses the $_POST array to validate
	 *
	 * If an array is set through this method, then this array will
	 * be used instead of the $_POST array
	 *
	 * Note that if you are validating multiple arrays, then the
	 * reset_validation() function should be called after validating
	 * each array due to the limitations of CI's singleton
	 *
	 * @param	array	$data
	 * @return	CI_Form_validation
	 */
	public function set_data(array $data)
	{
		if ( ! empty($data))
		{
			$this->validation_data = $data;
		}

		return $this;
	}

	// --------------------------------------------------------------------

	/**
	 * Set Error Message
	 *
	 * Lets users set their own error messages on the fly. Note:
	 * The key name has to match the function name that it corresponds to.
	 *
	 * @param	array
	 * @param	string
	 * @return	CI_Form_validation
=======
	 * Set Error Message
	 *
	 * Lets users set their own error messages on the fly.  Note:  The key
	 * name has to match the  function name that it corresponds to.
	 *
	 * @access	public
	 * @param	string
	 * @param	string
	 * @return	string
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	public function set_message($lang, $val = '')
	{
		if ( ! is_array($lang))
		{
			$lang = array($lang => $val);
		}

		$this->_error_messages = array_merge($this->_error_messages, $lang);
<<<<<<< HEAD
=======

>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		return $this;
	}

	// --------------------------------------------------------------------

	/**
	 * Set The Error Delimiter
	 *
	 * Permits a prefix/suffix to be added to each error message
	 *
<<<<<<< HEAD
	 * @param	string
	 * @param	string
	 * @return	CI_Form_validation
=======
	 * @access	public
	 * @param	string
	 * @param	string
	 * @return	void
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	public function set_error_delimiters($prefix = '<p>', $suffix = '</p>')
	{
		$this->_error_prefix = $prefix;
		$this->_error_suffix = $suffix;
<<<<<<< HEAD
=======

>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		return $this;
	}

	// --------------------------------------------------------------------

	/**
	 * Get Error Message
	 *
	 * Gets the error message associated with a particular field
	 *
<<<<<<< HEAD
	 * @param	string	$field	Field name
	 * @param	string	$prefix	HTML start tag
	 * @param 	string	$suffix	HTML end tag
	 * @return	string
	 */
	public function error($field, $prefix = '', $suffix = '')
	{
		if (empty($this->_field_data[$field]['error']))
=======
	 * @access	public
	 * @param	string	the field name
	 * @return	void
	 */
	public function error($field = '', $prefix = '', $suffix = '')
	{
		if ( ! isset($this->_field_data[$field]['error']) OR $this->_field_data[$field]['error'] == '')
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			return '';
		}

<<<<<<< HEAD
		if ($prefix === '')
=======
		if ($prefix == '')
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$prefix = $this->_error_prefix;
		}

<<<<<<< HEAD
		if ($suffix === '')
=======
		if ($suffix == '')
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$suffix = $this->_error_suffix;
		}

		return $prefix.$this->_field_data[$field]['error'].$suffix;
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Get Array of Error Messages
	 *
	 * Returns the error messages as an array
	 *
	 * @return	array
	 */
	public function error_array()
	{
		return $this->_error_array;
	}

	// --------------------------------------------------------------------

	/**
=======
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * Error String
	 *
	 * Returns the error messages as a string, wrapped in the error delimiters
	 *
<<<<<<< HEAD
	 * @param	string
	 * @param	string
	 * @return	string
	 */
	public function error_string($prefix = '', $suffix = '')
	{
		// No errors, validation passes!
=======
	 * @access	public
	 * @param	string
	 * @param	string
	 * @return	str
	 */
	public function error_string($prefix = '', $suffix = '')
	{
		// No errrors, validation passes!
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		if (count($this->_error_array) === 0)
		{
			return '';
		}

<<<<<<< HEAD
		if ($prefix === '')
=======
		if ($prefix == '')
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$prefix = $this->_error_prefix;
		}

<<<<<<< HEAD
		if ($suffix === '')
=======
		if ($suffix == '')
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$suffix = $this->_error_suffix;
		}

		// Generate the error string
		$str = '';
		foreach ($this->_error_array as $val)
		{
<<<<<<< HEAD
			if ($val !== '')
=======
			if ($val != '')
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			{
				$str .= $prefix.$val.$suffix."\n";
			}
		}

		return $str;
	}

	// --------------------------------------------------------------------

	/**
	 * Run the Validator
	 *
	 * This function does all the work.
	 *
<<<<<<< HEAD
	 * @param	string	$group
=======
	 * @access	public
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	bool
	 */
	public function run($group = '')
	{
		// Do we even have any data to process?  Mm?
<<<<<<< HEAD
		$validation_array = empty($this->validation_data) ? $_POST : $this->validation_data;
		if (count($validation_array) === 0)
=======
		if (count($_POST) == 0)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			return FALSE;
		}

		// Does the _field_data array containing the validation rules exist?
		// If not, we look to see if they were assigned via a config file
<<<<<<< HEAD
		if (count($this->_field_data) === 0)
		{
			// No validation rules?  We're done...
			if (count($this->_config_rules) === 0)
=======
		if (count($this->_field_data) == 0)
		{
			// No validation rules?  We're done...
			if (count($this->_config_rules) == 0)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			{
				return FALSE;
			}

<<<<<<< HEAD
			if (empty($group))
			{
				// Is there a validation rule for the particular URI being accessed?
				$group = trim($this->CI->uri->ruri_string(), '/');
				isset($this->_config_rules[$group]) OR $group = $this->CI->router->class.'/'.$this->CI->router->method;
			}

			$this->set_rules(isset($this->_config_rules[$group]) ? $this->_config_rules[$group] : $this->_config_rules);

			// Were we able to set the rules correctly?
			if (count($this->_field_data) === 0)
			{
				log_message('debug', 'Unable to find validation rules');
=======
			// Is there a validation rule for the particular URI being accessed?
			$uri = ($group == '') ? trim($this->CI->uri->ruri_string(), '/') : $group;

			if ($uri != '' AND isset($this->_config_rules[$uri]))
			{
				$this->set_rules($this->_config_rules[$uri]);
			}
			else
			{
				$this->set_rules($this->_config_rules);
			}

			// We're we able to set the rules correctly?
			if (count($this->_field_data) == 0)
			{
				log_message('debug', "Unable to find validation rules");
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
				return FALSE;
			}
		}

		// Load the language file containing error messages
		$this->CI->lang->load('form_validation');

<<<<<<< HEAD
		// Cycle through the rules for each field and match the corresponding $validation_data item
		foreach ($this->_field_data as $field => $row)
		{
			// Fetch the data from the validation_data array item and cache it in the _field_data array.
			// Depending on whether the field name is an array or a string will determine where we get it from.
			if ($row['is_array'] === TRUE)
			{
				$this->_field_data[$field]['postdata'] = $this->_reduce_array($validation_array, $row['keys']);
			}
			elseif (isset($validation_array[$field]) && $validation_array[$field] !== '')
			{
				$this->_field_data[$field]['postdata'] = $validation_array[$field];
			}
		}

		// Execute validation rules
		// Note: A second foreach (for now) is required in order to avoid false-positives
		//	 for rules like 'matches', which correlate to other validation fields.
		foreach ($this->_field_data as $field => $row)
		{
			// Don't try to validate if we have no rules set
			if (empty($row['rules']))
			{
				continue;
			}

			$this->_execute($row, $row['rules'], $this->_field_data[$field]['postdata']);
=======
		// Cycle through the rules for each field, match the
		// corresponding $_POST item and test for errors
		foreach ($this->_field_data as $field => $row)
		{
			// Fetch the data from the corresponding $_POST array and cache it in the _field_data array.
			// Depending on whether the field name is an array or a string will determine where we get it from.

			if ($row['is_array'] == TRUE)
			{
				$this->_field_data[$field]['postdata'] = $this->_reduce_array($_POST, $row['keys']);
			}
			else
			{
				if (isset($_POST[$field]) AND $_POST[$field] != "")
				{
					$this->_field_data[$field]['postdata'] = $_POST[$field];
				}
			}

			$this->_execute($row, explode('|', $row['rules']), $this->_field_data[$field]['postdata']);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		// Did we end up with any errors?
		$total_errors = count($this->_error_array);
<<<<<<< HEAD
=======

>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		if ($total_errors > 0)
		{
			$this->_safe_form_data = TRUE;
		}

		// Now we need to re-set the POST data with the new, processed data
		$this->_reset_post_array();

<<<<<<< HEAD
		return ($total_errors === 0);
=======
		// No errors, validation passes!
		if ($total_errors == 0)
		{
			return TRUE;
		}

		// Validation fails
		return FALSE;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Traverse a multidimensional $_POST array index until the data is found
	 *
<<<<<<< HEAD
	 * @param	array
	 * @param	array
	 * @param	int
=======
	 * @access	private
	 * @param	array
	 * @param	array
	 * @param	integer
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	mixed
	 */
	protected function _reduce_array($array, $keys, $i = 0)
	{
<<<<<<< HEAD
		if (is_array($array) && isset($keys[$i]))
		{
			return isset($array[$keys[$i]]) ? $this->_reduce_array($array[$keys[$i]], $keys, ($i+1)) : NULL;
		}

		// NULL must be returned for empty fields
		return ($array === '') ? NULL : $array;
=======
		if (is_array($array))
		{
			if (isset($keys[$i]))
			{
				if (isset($array[$keys[$i]]))
				{
					$array = $this->_reduce_array($array[$keys[$i]], $keys, ($i+1));
				}
				else
				{
					return NULL;
				}
			}
			else
			{
				return $array;
			}
		}

		return $array;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Re-populate the _POST array with our finalized and processed data
	 *
<<<<<<< HEAD
	 * @return	void
=======
	 * @access	private
	 * @return	null
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	protected function _reset_post_array()
	{
		foreach ($this->_field_data as $field => $row)
		{
<<<<<<< HEAD
			if ($row['postdata'] !== NULL)
			{
				if ($row['is_array'] === FALSE)
				{
					if (isset($_POST[$row['field']]))
					{
						$_POST[$row['field']] = $row['postdata'];
=======
			if ( ! is_null($row['postdata']))
			{
				if ($row['is_array'] == FALSE)
				{
					if (isset($_POST[$row['field']]))
					{
						$_POST[$row['field']] = $this->prep_for_form($row['postdata']);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
					}
				}
				else
				{
					// start with a reference
					$post_ref =& $_POST;

					// before we assign values, make a reference to the right POST key
<<<<<<< HEAD
					if (count($row['keys']) === 1)
=======
					if (count($row['keys']) == 1)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
					{
						$post_ref =& $post_ref[current($row['keys'])];
					}
					else
					{
						foreach ($row['keys'] as $val)
						{
							$post_ref =& $post_ref[$val];
						}
					}

					if (is_array($row['postdata']))
					{
						$array = array();
						foreach ($row['postdata'] as $k => $v)
						{
<<<<<<< HEAD
							$array[$k] = $v;
=======
							$array[$k] = $this->prep_for_form($v);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
						}

						$post_ref = $array;
					}
					else
					{
<<<<<<< HEAD
						$post_ref = $row['postdata'];
=======
						$post_ref = $this->prep_for_form($row['postdata']);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
					}
				}
			}
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Executes the Validation routines
	 *
<<<<<<< HEAD
	 * @param	array
	 * @param	array
	 * @param	mixed
	 * @param	int
=======
	 * @access	private
	 * @param	array
	 * @param	array
	 * @param	mixed
	 * @param	integer
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	mixed
	 */
	protected function _execute($row, $rules, $postdata = NULL, $cycles = 0)
	{
		// If the $_POST data is an array we will run a recursive call
		if (is_array($postdata))
		{
			foreach ($postdata as $key => $val)
			{
<<<<<<< HEAD
				$this->_execute($row, $rules, $val, $key);
=======
				$this->_execute($row, $rules, $val, $cycles);
				$cycles++;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			}

			return;
		}

<<<<<<< HEAD
		// If the field is blank, but NOT required, no further tests are necessary
		$callback = FALSE;
		if ( ! in_array('required', $rules) && ($postdata === NULL OR $postdata === ''))
		{
			// Before we bail out, does the rule contain a callback?
			foreach ($rules as &$rule)
			{
				if (is_string($rule))
				{
					if (strncmp($rule, 'callback_', 9) === 0)
					{
						$callback = TRUE;
						$rules = array(1 => $rule);
						break;
					}
				}
				elseif (is_callable($rule))
				{
					$callback = TRUE;
					$rules = array(1 => $rule);
					break;
				}
			}

			if ( ! $callback)
=======
		// --------------------------------------------------------------------

		// If the field is blank, but NOT required, no further tests are necessary
		$callback = FALSE;
		if ( ! in_array('required', $rules) AND is_null($postdata))
		{
			// Before we bail out, does the rule contain a callback?
			if (preg_match("/(callback_\w+(\[.*?\])?)/", implode(' ', $rules), $match))
			{
				$callback = TRUE;
				$rules = (array('1' => $match[1]));
			}
			else
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			{
				return;
			}
		}

<<<<<<< HEAD
		// Isset Test. Typically this rule will only apply to checkboxes.
		if (($postdata === NULL OR $postdata === '') && ! $callback)
=======
		// --------------------------------------------------------------------

		// Isset Test. Typically this rule will only apply to checkboxes.
		if (is_null($postdata) AND $callback == FALSE)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			if (in_array('isset', $rules, TRUE) OR in_array('required', $rules))
			{
				// Set the message type
<<<<<<< HEAD
				$type = in_array('required', $rules) ? 'required' : 'isset';

				// Check if a custom message is defined
				if (isset($this->_field_data[$row['field']]['errors'][$type]))
				{
					$line = $this->_field_data[$row['field']]['errors'][$type];
				}
				elseif (isset($this->_error_messages[$type]))
				{
					$line = $this->_error_messages[$type];
				}
				elseif (FALSE === ($line = $this->CI->lang->line('form_validation_'.$type))
					// DEPRECATED support for non-prefixed keys
					&& FALSE === ($line = $this->CI->lang->line($type, FALSE)))
				{
					$line = 'The field was not set';
				}

				// Build the error message
				$message = $this->_build_error_msg($line, $this->_translate_fieldname($row['label']));
=======
				$type = (in_array('required', $rules)) ? 'required' : 'isset';

				if ( ! isset($this->_error_messages[$type]))
				{
					if (FALSE === ($line = $this->CI->lang->line($type)))
					{
						$line = 'The field was not set';
					}
				}
				else
				{
					$line = $this->_error_messages[$type];
				}

				// Build the error message
				$message = sprintf($line, $this->_translate_fieldname($row['label']));
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

				// Save the error message
				$this->_field_data[$row['field']]['error'] = $message;

				if ( ! isset($this->_error_array[$row['field']]))
				{
					$this->_error_array[$row['field']] = $message;
				}
			}

			return;
		}

		// --------------------------------------------------------------------

		// Cycle through each rule and run it
<<<<<<< HEAD
		foreach ($rules as $rule)
=======
		foreach ($rules As $rule)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$_in_array = FALSE;

			// We set the $postdata variable with the current data in our master array so that
			// each cycle of the loop is dealing with the processed data from the last cycle
<<<<<<< HEAD
			if ($row['is_array'] === TRUE && is_array($this->_field_data[$row['field']]['postdata']))
=======
			if ($row['is_array'] == TRUE AND is_array($this->_field_data[$row['field']]['postdata']))
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			{
				// We shouldn't need this safety, but just in case there isn't an array index
				// associated with this cycle we'll bail out
				if ( ! isset($this->_field_data[$row['field']]['postdata'][$cycles]))
				{
					continue;
				}

				$postdata = $this->_field_data[$row['field']]['postdata'][$cycles];
				$_in_array = TRUE;
			}
			else
			{
<<<<<<< HEAD
				// If we get an array field, but it's not expected - then it is most likely
				// somebody messing with the form on the client side, so we'll just consider
				// it an empty field
				$postdata = is_array($this->_field_data[$row['field']]['postdata'])
					? NULL
					: $this->_field_data[$row['field']]['postdata'];
			}

			// Is the rule a callback?
			$callback = $callable = FALSE;
			if (is_string($rule))
			{
				if (strpos($rule, 'callback_') === 0)
				{
					$rule = substr($rule, 9);
					$callback = TRUE;
				}
			}
			elseif (is_callable($rule))
			{
				$callable = TRUE;
			}
			elseif (is_array($rule) && isset($rule[0], $rule[1]) && is_callable($rule[1]))
			{
				// We have a "named" callable, so save the name
				$callable = $rule[0];
				$rule = $rule[1];
=======
				$postdata = $this->_field_data[$row['field']]['postdata'];
			}

			// --------------------------------------------------------------------

			// Is the rule a callback?
			$callback = FALSE;
			if (substr($rule, 0, 9) == 'callback_')
			{
				$rule = substr($rule, 9);
				$callback = TRUE;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			}

			// Strip the parameter (if exists) from the rule
			// Rules can contain a parameter: max_length[5]
			$param = FALSE;
<<<<<<< HEAD
			if ( ! $callable && preg_match('/(.*?)\[(.*)\]/', $rule, $match))
			{
				$rule = $match[1];
				$param = $match[2];
			}

			// Call the function that corresponds to the rule
			if ($callback OR $callable !== FALSE)
			{
				if ($callback)
				{
					if ( ! method_exists($this->CI, $rule))
					{
						log_message('debug', 'Unable to find callback validation rule: '.$rule);
						$result = FALSE;
					}
					else
					{
						// Run the function and grab the result
						$result = $this->CI->$rule($postdata, $param);
					}
				}
				else
				{
					$result = is_array($rule)
						? $rule[0]->{$rule[1]}($postdata)
						: $rule($postdata);

					// Is $callable set to a rule name?
					if ($callable !== FALSE)
					{
						$rule = $callable;
					}
				}

				// Re-assign the result to the master data array
				if ($_in_array === TRUE)
				{
					$this->_field_data[$row['field']]['postdata'][$cycles] = is_bool($result) ? $postdata : $result;
				}
				else
				{
					$this->_field_data[$row['field']]['postdata'] = is_bool($result) ? $postdata : $result;
				}

				// If the field isn't required and we just processed a callback we'll move on...
				if ( ! in_array('required', $rules, TRUE) && $result !== FALSE)
=======
			if (preg_match("/(.*?)\[(.*)\]/", $rule, $match))
			{
				$rule	= $match[1];
				$param	= $match[2];
			}

			// Call the function that corresponds to the rule
			if ($callback === TRUE)
			{
				if ( ! method_exists($this->CI, $rule))
				{
					continue;
				}

				// Run the function and grab the result
				$result = $this->CI->$rule($postdata, $param);

				// Re-assign the result to the master data array
				if ($_in_array == TRUE)
				{
					$this->_field_data[$row['field']]['postdata'][$cycles] = (is_bool($result)) ? $postdata : $result;
				}
				else
				{
					$this->_field_data[$row['field']]['postdata'] = (is_bool($result)) ? $postdata : $result;
				}

				// If the field isn't required and we just processed a callback we'll move on...
				if ( ! in_array('required', $rules, TRUE) AND $result !== FALSE)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
				{
					continue;
				}
			}
<<<<<<< HEAD
			elseif ( ! method_exists($this, $rule))
			{
				// If our own wrapper function doesn't exist we see if a native PHP function does.
				// Users can use any native PHP function call that has one param.
				if (function_exists($rule))
				{
					// Native PHP functions issue warnings if you pass them more parameters than they use
					$result = ($param !== FALSE) ? $rule($postdata, $param) : $rule($postdata);

					if ($_in_array === TRUE)
					{
						$this->_field_data[$row['field']]['postdata'][$cycles] = is_bool($result) ? $postdata : $result;
					}
					else
					{
						$this->_field_data[$row['field']]['postdata'] = is_bool($result) ? $postdata : $result;
					}
				}
				else
				{
					log_message('debug', 'Unable to find validation rule: '.$rule);
					$result = FALSE;
				}
			}
			else
			{
				$result = $this->$rule($postdata, $param);

				if ($_in_array === TRUE)
				{
					$this->_field_data[$row['field']]['postdata'][$cycles] = is_bool($result) ? $postdata : $result;
				}
				else
				{
					$this->_field_data[$row['field']]['postdata'] = is_bool($result) ? $postdata : $result;
				}
			}

			// Did the rule test negatively? If so, grab the error.
			if ($result === FALSE)
			{
				// Callable rules might not have named error messages
				if ( ! is_string($rule))
				{
					return;
				}

				// Check if a custom message is defined
				if (isset($this->_field_data[$row['field']]['errors'][$rule]))
				{
					$line = $this->_field_data[$row['field']]['errors'][$rule];
				}
				elseif ( ! isset($this->_error_messages[$rule]))
				{
					if (FALSE === ($line = $this->CI->lang->line('form_validation_'.$rule))
						// DEPRECATED support for non-prefixed keys
						&& FALSE === ($line = $this->CI->lang->line($rule, FALSE)))
					{
						$line = $this->CI->lang->line('form_validation_error_message_not_set').'('.$rule.')';
=======
			else
			{
				if ( ! method_exists($this, $rule))
				{
					// If our own wrapper function doesn't exist we see if a native PHP function does.
					// Users can use any native PHP function call that has one param.
					if (function_exists($rule))
					{
						$result = $rule($postdata);

						if ($_in_array == TRUE)
						{
							$this->_field_data[$row['field']]['postdata'][$cycles] = (is_bool($result)) ? $postdata : $result;
						}
						else
						{
							$this->_field_data[$row['field']]['postdata'] = (is_bool($result)) ? $postdata : $result;
						}
					}
					else
					{
						log_message('debug', "Unable to find validation rule: ".$rule);
					}

					continue;
				}

				$result = $this->$rule($postdata, $param);

				if ($_in_array == TRUE)
				{
					$this->_field_data[$row['field']]['postdata'][$cycles] = (is_bool($result)) ? $postdata : $result;
				}
				else
				{
					$this->_field_data[$row['field']]['postdata'] = (is_bool($result)) ? $postdata : $result;
				}
			}

			// Did the rule test negatively?  If so, grab the error.
			if ($result === FALSE)
			{
				if ( ! isset($this->_error_messages[$rule]))
				{
					if (FALSE === ($line = $this->CI->lang->line($rule)))
					{
						$line = 'Unable to access an error message corresponding to your field name.';
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
					}
				}
				else
				{
					$line = $this->_error_messages[$rule];
				}

				// Is the parameter we are inserting into the error message the name
<<<<<<< HEAD
				// of another field? If so we need to grab its "field label"
				if (isset($this->_field_data[$param], $this->_field_data[$param]['label']))
=======
				// of another field?  If so we need to grab its "field label"
				if (isset($this->_field_data[$param]) AND isset($this->_field_data[$param]['label']))
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
				{
					$param = $this->_translate_fieldname($this->_field_data[$param]['label']);
				}

				// Build the error message
<<<<<<< HEAD
				$message = $this->_build_error_msg($line, $this->_translate_fieldname($row['label']), $param);
=======
				$message = sprintf($line, $this->_translate_fieldname($row['label']), $param);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

				// Save the error message
				$this->_field_data[$row['field']]['error'] = $message;

				if ( ! isset($this->_error_array[$row['field']]))
				{
					$this->_error_array[$row['field']] = $message;
				}

				return;
			}
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Translate a field name
	 *
<<<<<<< HEAD
=======
	 * @access	private
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @param	string	the field name
	 * @return	string
	 */
	protected function _translate_fieldname($fieldname)
	{
		// Do we need to translate the field name?
		// We look for the prefix lang: to determine this
<<<<<<< HEAD
		if (sscanf($fieldname, 'lang:%s', $line) === 1)
		{
			// Were we able to translate the field name?  If not we use $line
			if (FALSE === ($fieldname = $this->CI->lang->line('form_validation_'.$line))
				// DEPRECATED support for non-prefixed keys
				&& FALSE === ($fieldname = $this->CI->lang->line($line, FALSE)))
=======
		if (substr($fieldname, 0, 5) == 'lang:')
		{
			// Grab the variable
			$line = substr($fieldname, 5);

			// Were we able to translate the field name?  If not we use $line
			if (FALSE === ($fieldname = $this->CI->lang->line($line)))
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			{
				return $line;
			}
		}

		return $fieldname;
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Build an error message using the field and param.
	 *
	 * @param	string	The error message line
	 * @param	string	A field's human name
	 * @param	mixed	A rule's optional parameter
	 * @return	string
	 */
	protected function _build_error_msg($line, $field = '', $param = '')
	{
		// Check for %s in the string for legacy support.
		if (strpos($line, '%s') !== FALSE)
		{
			return sprintf($line, $field, $param);
		}

		return str_replace(array('{field}', '{param}'), array($field, $param), $line);
	}

	// --------------------------------------------------------------------

	/**
	 * Checks if the rule is present within the validator
	 *
	 * Permits you to check if a rule is present within the validator
	 *
	 * @param	string	the field name
	 * @return	bool
	 */
	public function has_rule($field)
	{
		return isset($this->_field_data[$field]);
	}

	// --------------------------------------------------------------------

	/**
=======
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * Get the value from a form
	 *
	 * Permits you to repopulate a form field with the value it was submitted
	 * with, or, if that value doesn't exist, with the default
	 *
<<<<<<< HEAD
	 * @param	string	the field name
	 * @param	string
	 * @return	string
	 */
	public function set_value($field = '', $default = '')
	{
		if ( ! isset($this->_field_data[$field], $this->_field_data[$field]['postdata']))
=======
	 * @access	public
	 * @param	string	the field name
	 * @param	string
	 * @return	void
	 */
	public function set_value($field = '', $default = '')
	{
		if ( ! isset($this->_field_data[$field]))
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			return $default;
		}

		// If the data is an array output them one at a time.
<<<<<<< HEAD
		//	E.g: form_input('name[]', set_value('name[]');
=======
		//     E.g: form_input('name[]', set_value('name[]');
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		if (is_array($this->_field_data[$field]['postdata']))
		{
			return array_shift($this->_field_data[$field]['postdata']);
		}

		return $this->_field_data[$field]['postdata'];
	}

	// --------------------------------------------------------------------

	/**
	 * Set Select
	 *
	 * Enables pull-down lists to be set to the value the user
	 * selected in the event of an error
	 *
<<<<<<< HEAD
	 * @param	string
	 * @param	string
	 * @param	bool
=======
	 * @access	public
	 * @param	string
	 * @param	string
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	string
	 */
	public function set_select($field = '', $value = '', $default = FALSE)
	{
<<<<<<< HEAD
		if ( ! isset($this->_field_data[$field], $this->_field_data[$field]['postdata']))
		{
			return ($default === TRUE && count($this->_field_data) === 0) ? ' selected="selected"' : '';
		}

		$field = $this->_field_data[$field]['postdata'];
		$value = (string) $value;
		if (is_array($field))
		{
			// Note: in_array('', array(0)) returns TRUE, do not use it
			foreach ($field as &$v)
			{
				if ($value === $v)
				{
					return ' selected="selected"';
				}
			}

			return '';
		}
		elseif (($field === '' OR $value === '') OR ($field !== $value))
		{
			return '';
=======
		if ( ! isset($this->_field_data[$field]) OR ! isset($this->_field_data[$field]['postdata']))
		{
			if ($default === TRUE AND count($this->_field_data) === 0)
			{
				return ' selected="selected"';
			}
			return '';
		}

		$field = $this->_field_data[$field]['postdata'];

		if (is_array($field))
		{
			if ( ! in_array($value, $field))
			{
				return '';
			}
		}
		else
		{
			if (($field == '' OR $value == '') OR ($field != $value))
			{
				return '';
			}
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		return ' selected="selected"';
	}

	// --------------------------------------------------------------------

	/**
	 * Set Radio
	 *
	 * Enables radio buttons to be set to the value the user
	 * selected in the event of an error
	 *
<<<<<<< HEAD
	 * @param	string
	 * @param	string
	 * @param	bool
=======
	 * @access	public
	 * @param	string
	 * @param	string
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	string
	 */
	public function set_radio($field = '', $value = '', $default = FALSE)
	{
<<<<<<< HEAD
		if ( ! isset($this->_field_data[$field], $this->_field_data[$field]['postdata']))
		{
			return ($default === TRUE && count($this->_field_data) === 0) ? ' checked="checked"' : '';
		}

		$field = $this->_field_data[$field]['postdata'];
		$value = (string) $value;
		if (is_array($field))
		{
			// Note: in_array('', array(0)) returns TRUE, do not use it
			foreach ($field as &$v)
			{
				if ($value === $v)
				{
					return ' checked="checked"';
				}
			}

			return '';
		}
		elseif (($field === '' OR $value === '') OR ($field !== $value))
		{
			return '';
=======
		if ( ! isset($this->_field_data[$field]) OR ! isset($this->_field_data[$field]['postdata']))
		{
			if ($default === TRUE AND count($this->_field_data) === 0)
			{
				return ' checked="checked"';
			}
			return '';
		}

		$field = $this->_field_data[$field]['postdata'];

		if (is_array($field))
		{
			if ( ! in_array($value, $field))
			{
				return '';
			}
		}
		else
		{
			if (($field == '' OR $value == '') OR ($field != $value))
			{
				return '';
			}
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		return ' checked="checked"';
	}

	// --------------------------------------------------------------------

	/**
	 * Set Checkbox
	 *
	 * Enables checkboxes to be set to the value the user
	 * selected in the event of an error
	 *
<<<<<<< HEAD
	 * @param	string
	 * @param	string
	 * @param	bool
=======
	 * @access	public
	 * @param	string
	 * @param	string
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	string
	 */
	public function set_checkbox($field = '', $value = '', $default = FALSE)
	{
<<<<<<< HEAD
		// Logic is exactly the same as for radio fields
		return $this->set_radio($field, $value, $default);
=======
		if ( ! isset($this->_field_data[$field]) OR ! isset($this->_field_data[$field]['postdata']))
		{
			if ($default === TRUE AND count($this->_field_data) === 0)
			{
				return ' checked="checked"';
			}
			return '';
		}

		$field = $this->_field_data[$field]['postdata'];

		if (is_array($field))
		{
			if ( ! in_array($value, $field))
			{
				return '';
			}
		}
		else
		{
			if (($field == '' OR $value == '') OR ($field != $value))
			{
				return '';
			}
		}

		return ' checked="checked"';
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Required
	 *
<<<<<<< HEAD
=======
	 * @access	public
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @param	string
	 * @return	bool
	 */
	public function required($str)
	{
<<<<<<< HEAD
		return is_array($str) ? (bool) count($str) : (trim($str) !== '');
=======
		if ( ! is_array($str))
		{
			return (trim($str) == '') ? FALSE : TRUE;
		}
		else
		{
			return ( ! empty($str));
		}
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Performs a Regular Expression match test.
	 *
<<<<<<< HEAD
	 * @param	string
	 * @param	string	regex
=======
	 * @access	public
	 * @param	string
	 * @param	regex
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	bool
	 */
	public function regex_match($str, $regex)
	{
<<<<<<< HEAD
		return (bool) preg_match($regex, $str);
=======
		if ( ! preg_match($regex, $str))
		{
			return FALSE;
		}

		return  TRUE;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Match one field to another
	 *
<<<<<<< HEAD
	 * @param	string	$str	string to compare against
	 * @param	string	$field
=======
	 * @access	public
	 * @param	string
	 * @param	field
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	bool
	 */
	public function matches($str, $field)
	{
<<<<<<< HEAD
		return isset($this->_field_data[$field], $this->_field_data[$field]['postdata'])
			? ($str === $this->_field_data[$field]['postdata'])
			: FALSE;
	}

	// --------------------------------------------------------------------

	/**
	 * Differs from another field
	 *
	 * @param	string
	 * @param	string	field
	 * @return	bool
	 */
	public function differs($str, $field)
	{
		return ! (isset($this->_field_data[$field]) && $this->_field_data[$field]['postdata'] === $str);
	}

	// --------------------------------------------------------------------

	/**
	 * Is Unique
	 *
	 * Check if the input value doesn't already exist
	 * in the specified database field.
	 *
	 * @param	string	$str
	 * @param	string	$field
=======
		if ( ! isset($_POST[$field]))
		{
			return FALSE;
		}

		$field = $_POST[$field];

		return ($str !== $field) ? FALSE : TRUE;
	}
	
	// --------------------------------------------------------------------

	/**
	 * Match one field to another
	 *
	 * @access	public
	 * @param	string
	 * @param	field
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	bool
	 */
	public function is_unique($str, $field)
	{
<<<<<<< HEAD
		sscanf($field, '%[^.].%[^.]', $table, $field);
		return isset($this->CI->db)
			? ($this->CI->db->limit(1)->get_where($table, array($field => $str))->num_rows() === 0)
			: FALSE;
	}
=======
		list($table, $field)=explode('.', $field);
		$query = $this->CI->db->limit(1)->get_where($table, array($field => $str));
		
		return $query->num_rows() === 0;
    }
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

	// --------------------------------------------------------------------

	/**
	 * Minimum Length
	 *
<<<<<<< HEAD
	 * @param	string
	 * @param	string
=======
	 * @access	public
	 * @param	string
	 * @param	value
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	bool
	 */
	public function min_length($str, $val)
	{
<<<<<<< HEAD
		if ( ! is_numeric($val))
=======
		if (preg_match("/[^0-9]/", $val))
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			return FALSE;
		}

<<<<<<< HEAD
		return ($val <= mb_strlen($str));
=======
		if (function_exists('mb_strlen'))
		{
			return (mb_strlen($str) < $val) ? FALSE : TRUE;
		}

		return (strlen($str) < $val) ? FALSE : TRUE;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Max Length
	 *
<<<<<<< HEAD
	 * @param	string
	 * @param	string
=======
	 * @access	public
	 * @param	string
	 * @param	value
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	bool
	 */
	public function max_length($str, $val)
	{
<<<<<<< HEAD
		if ( ! is_numeric($val))
=======
		if (preg_match("/[^0-9]/", $val))
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			return FALSE;
		}

<<<<<<< HEAD
		return ($val >= mb_strlen($str));
	}

	// --------------------------------------------------------------------

	/**
	 * Exact Length
	 *
	 * @param	string
	 * @param	string
	 * @return	bool
	 */
	public function exact_length($str, $val)
	{
		if ( ! is_numeric($val))
		{
			return FALSE;
		}

		return (mb_strlen($str) === (int) $val);
=======
		if (function_exists('mb_strlen'))
		{
			return (mb_strlen($str) > $val) ? FALSE : TRUE;
		}

		return (strlen($str) > $val) ? FALSE : TRUE;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Valid URL
	 *
	 * @param	string	$str
	 * @return	bool
	 */
	public function valid_url($str)
	{
		if (empty($str))
		{
			return FALSE;
		}
		elseif (preg_match('/^(?:([^:]*)\:)?\/\/(.+)$/', $str, $matches))
		{
			if (empty($matches[2]))
			{
				return FALSE;
			}
			elseif ( ! in_array($matches[1], array('http', 'https'), TRUE))
			{
				return FALSE;
			}

			$str = $matches[2];
		}

		$str = 'http://'.$str;

		// There's a bug affecting PHP 5.2.13, 5.3.2 that considers the
		// underscore to be a valid hostname character instead of a dash.
		// Reference: https://bugs.php.net/bug.php?id=51192
		if (version_compare(PHP_VERSION, '5.2.13', '==') OR version_compare(PHP_VERSION, '5.3.2', '=='))
		{
			sscanf($str, 'http://%[^/]', $host);
			$str = substr_replace($str, strtr($host, array('_' => '-', '-' => '_')), 7, strlen($host));
		}

		return (filter_var($str, FILTER_VALIDATE_URL) !== FALSE);
=======
	 * Exact Length
	 *
	 * @access	public
	 * @param	string
	 * @param	value
	 * @return	bool
	 */
	public function exact_length($str, $val)
	{
		if (preg_match("/[^0-9]/", $val))
		{
			return FALSE;
		}

		if (function_exists('mb_strlen'))
		{
			return (mb_strlen($str) != $val) ? FALSE : TRUE;
		}

		return (strlen($str) != $val) ? FALSE : TRUE;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Valid Email
	 *
<<<<<<< HEAD
=======
	 * @access	public
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @param	string
	 * @return	bool
	 */
	public function valid_email($str)
	{
<<<<<<< HEAD
		if (function_exists('idn_to_ascii') && $atpos = strpos($str, '@'))
		{
			$str = substr($str, 0, ++$atpos).idn_to_ascii(substr($str, $atpos));
		}

		return (bool) filter_var($str, FILTER_VALIDATE_EMAIL);
=======
		return ( ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Valid Emails
	 *
<<<<<<< HEAD
=======
	 * @access	public
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @param	string
	 * @return	bool
	 */
	public function valid_emails($str)
	{
		if (strpos($str, ',') === FALSE)
		{
			return $this->valid_email(trim($str));
		}

		foreach (explode(',', $str) as $email)
		{
<<<<<<< HEAD
			if (trim($email) !== '' && $this->valid_email(trim($email)) === FALSE)
=======
			if (trim($email) != '' && $this->valid_email(trim($email)) === FALSE)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			{
				return FALSE;
			}
		}

		return TRUE;
	}

	// --------------------------------------------------------------------

	/**
	 * Validate IP Address
	 *
<<<<<<< HEAD
	 * @param	string
	 * @param	string	'ipv4' or 'ipv6' to validate a specific IP format
	 * @return	bool
=======
	 * @access	public
	 * @param	string
	 * @param	string "ipv4" or "ipv6" to validate a specific ip format
	 * @return	string
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	public function valid_ip($ip, $which = '')
	{
		return $this->CI->input->valid_ip($ip, $which);
	}

	// --------------------------------------------------------------------

	/**
	 * Alpha
	 *
<<<<<<< HEAD
=======
	 * @access	public
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @param	string
	 * @return	bool
	 */
	public function alpha($str)
	{
<<<<<<< HEAD
		return ctype_alpha($str);
=======
		return ( ! preg_match("/^([a-z])+$/i", $str)) ? FALSE : TRUE;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Alpha-numeric
	 *
<<<<<<< HEAD
=======
	 * @access	public
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @param	string
	 * @return	bool
	 */
	public function alpha_numeric($str)
	{
<<<<<<< HEAD
		return ctype_alnum((string) $str);
=======
		return ( ! preg_match("/^([a-z0-9])+$/i", $str)) ? FALSE : TRUE;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Alpha-numeric w/ spaces
	 *
	 * @param	string
	 * @return	bool
	 */
	public function alpha_numeric_spaces($str)
	{
		return (bool) preg_match('/^[A-Z0-9 ]+$/i', $str);
=======
	 * Alpha-numeric with underscores and dashes
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
	public function alpha_dash($str)
	{
		return ( ! preg_match("/^([-a-z0-9_-])+$/i", $str)) ? FALSE : TRUE;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Alpha-numeric with underscores and dashes
	 *
	 * @param	string
	 * @return	bool
	 */
	public function alpha_dash($str)
	{
		return (bool) preg_match('/^[a-z0-9_-]+$/i', $str);
=======
	 * Numeric
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
	public function numeric($str)
	{
		return (bool)preg_match( '/^[\-+]?[0-9]*\.?[0-9]+$/', $str);

>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Numeric
	 *
	 * @param	string
	 * @return	bool
	 */
	public function numeric($str)
	{
		return (bool) preg_match('/^[\-+]?[0-9]*\.?[0-9]+$/', $str);

=======
	 * Is Numeric
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
	public function is_numeric($str)
	{
		return ( ! is_numeric($str)) ? FALSE : TRUE;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Integer
	 *
<<<<<<< HEAD
=======
	 * @access	public
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @param	string
	 * @return	bool
	 */
	public function integer($str)
	{
		return (bool) preg_match('/^[\-+]?[0-9]+$/', $str);
	}

	// --------------------------------------------------------------------

	/**
	 * Decimal number
	 *
<<<<<<< HEAD
=======
	 * @access	public
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @param	string
	 * @return	bool
	 */
	public function decimal($str)
	{
		return (bool) preg_match('/^[\-+]?[0-9]+\.[0-9]+$/', $str);
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Greater than
	 *
	 * @param	string
	 * @param	int
=======
	 * Greather than
	 *
	 * @access	public
	 * @param	string
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	bool
	 */
	public function greater_than($str, $min)
	{
<<<<<<< HEAD
		return is_numeric($str) ? ($str > $min) : FALSE;
	}

	// --------------------------------------------------------------------

	/**
	 * Equal to or Greater than
	 *
	 * @param	string
	 * @param	int
	 * @return	bool
	 */
	public function greater_than_equal_to($str, $min)
	{
		return is_numeric($str) ? ($str >= $min) : FALSE;
=======
		if ( ! is_numeric($str))
		{
			return FALSE;
		}
		return $str > $min;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Less than
	 *
<<<<<<< HEAD
	 * @param	string
	 * @param	int
=======
	 * @access	public
	 * @param	string
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	bool
	 */
	public function less_than($str, $max)
	{
<<<<<<< HEAD
		return is_numeric($str) ? ($str < $max) : FALSE;
	}

	// --------------------------------------------------------------------

	/**
	 * Equal to or Less than
	 *
	 * @param	string
	 * @param	int
	 * @return	bool
	 */
	public function less_than_equal_to($str, $max)
	{
		return is_numeric($str) ? ($str <= $max) : FALSE;
	}

	// --------------------------------------------------------------------

	/**
	 * Value should be within an array of values
	 *
	 * @param	string
	 * @param	string
	 * @return	bool
	 */
	public function in_list($value, $list)
	{
		return in_array($value, explode(',', $list), TRUE);
=======
		if ( ! is_numeric($str))
		{
			return FALSE;
		}
		return $str < $max;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Is a Natural number  (0,1,2,3, etc.)
	 *
<<<<<<< HEAD
=======
	 * @access	public
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @param	string
	 * @return	bool
	 */
	public function is_natural($str)
	{
<<<<<<< HEAD
		return ctype_digit((string) $str);
=======
		return (bool) preg_match( '/^[0-9]+$/', $str);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Is a Natural number, but not a zero  (1,2,3, etc.)
	 *
<<<<<<< HEAD
=======
	 * @access	public
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @param	string
	 * @return	bool
	 */
	public function is_natural_no_zero($str)
	{
<<<<<<< HEAD
		return ($str != 0 && ctype_digit((string) $str));
=======
		if ( ! preg_match( '/^[0-9]+$/', $str))
		{
			return FALSE;
		}

		if ($str == 0)
		{
			return FALSE;
		}

		return TRUE;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Valid Base64
	 *
	 * Tests a string for characters outside of the Base64 alphabet
	 * as defined by RFC 2045 http://www.faqs.org/rfcs/rfc2045
	 *
<<<<<<< HEAD
=======
	 * @access	public
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @param	string
	 * @return	bool
	 */
	public function valid_base64($str)
	{
<<<<<<< HEAD
		return (base64_encode(base64_decode($str)) === $str);
=======
		return (bool) ! preg_match('/[^a-zA-Z0-9\/\+=]/', $str);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Prep data for form
	 *
	 * This function allows HTML to be safely shown in a form.
	 * Special characters are converted.
	 *
<<<<<<< HEAD
=======
	 * @access	public
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @param	string
	 * @return	string
	 */
	public function prep_for_form($data = '')
	{
<<<<<<< HEAD
		if ($this->_safe_form_data === FALSE OR empty($data))
		{
			return $data;
		}

=======
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		if (is_array($data))
		{
			foreach ($data as $key => $val)
			{
				$data[$key] = $this->prep_for_form($val);
			}

			return $data;
		}

<<<<<<< HEAD
		return str_replace(array("'", '"', '<', '>'), array('&#39;', '&quot;', '&lt;', '&gt;'), stripslashes($data));
=======
		if ($this->_safe_form_data == FALSE OR $data === '')
		{
			return $data;
		}

		return str_replace(array("'", '"', '<', '>'), array("&#39;", "&quot;", '&lt;', '&gt;'), stripslashes($data));
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Prep URL
	 *
<<<<<<< HEAD
=======
	 * @access	public
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @param	string
	 * @return	string
	 */
	public function prep_url($str = '')
	{
<<<<<<< HEAD
		if ($str === 'http://' OR $str === '')
=======
		if ($str == 'http://' OR $str == '')
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			return '';
		}

<<<<<<< HEAD
		if (strpos($str, 'http://') !== 0 && strpos($str, 'https://') !== 0)
		{
			return 'http://'.$str;
=======
		if (substr($str, 0, 7) != 'http://' && substr($str, 0, 8) != 'https://')
		{
			$str = 'http://'.$str;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		return $str;
	}

	// --------------------------------------------------------------------

	/**
	 * Strip Image Tags
	 *
<<<<<<< HEAD
=======
	 * @access	public
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @param	string
	 * @return	string
	 */
	public function strip_image_tags($str)
	{
<<<<<<< HEAD
		return $this->CI->security->strip_image_tags($str);
=======
		return $this->CI->input->strip_image_tags($str);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Convert PHP tags to entities
	 *
	 * @param	string
	 * @return	string
	 */
	public function encode_php_tags($str)
	{
		return str_replace(array('<?', '?>'), array('&lt;?', '?&gt;'), $str);
=======
	 * XSS Clean
	 *
	 * @access	public
	 * @param	string
	 * @return	string
	 */
	public function xss_clean($str)
	{
		return $this->CI->security->xss_clean($str);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Reset validation vars
	 *
	 * Prevents subsequent validation routines from being affected by the
	 * results of any previous validation routine due to the CI singleton.
	 *
	 * @return	CI_Form_validation
	 */
	public function reset_validation()
	{
		$this->_field_data = array();
		$this->_config_rules = array();
		$this->_error_array = array();
		$this->_error_messages = array();
		$this->error_string = '';
		return $this;
	}

}
=======
	 * Convert PHP tags to entities
	 *
	 * @access	public
	 * @param	string
	 * @return	string
	 */
	public function encode_php_tags($str)
	{
		return str_replace(array('<?php', '<?PHP', '<?', '?>'),  array('&lt;?php', '&lt;?PHP', '&lt;?', '?&gt;'), $str);
	}

}
// END Form Validation Class

/* End of file Form_validation.php */
/* Location: ./system/libraries/Form_validation.php */
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
