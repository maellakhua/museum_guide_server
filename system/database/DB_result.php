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
 * Database Result Class
 *
 * This is the platform-independent result class.
 * This class will not be called directly. Rather, the adapter
 * class for the specific database will extend and instantiate it.
 *
 * @category	Database
<<<<<<< HEAD
 * @author		EllisLab Dev Team
=======
 * @author		ExpressionEngine Dev Team
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
 * @link		http://codeigniter.com/user_guide/database/
 */
class CI_DB_result {

<<<<<<< HEAD
	/**
	 * Connection ID
	 *
	 * @var	resource|object
	 */
	public $conn_id;

	/**
	 * Result ID
	 *
	 * @var	resource|object
	 */
	public $result_id;

	/**
	 * Result Array
	 *
	 * @var	array[]
	 */
	public $result_array			= array();

	/**
	 * Result Object
	 *
	 * @var	object[]
	 */
	public $result_object			= array();

	/**
	 * Custom Result Object
	 *
	 * @var	object[]
	 */
	public $custom_result_object		= array();

	/**
	 * Current Row index
	 *
	 * @var	int
	 */
	public $current_row			= 0;

	/**
	 * Number of rows
	 *
	 * @var	int
	 */
	public $num_rows;

	/**
	 * Row data
	 *
	 * @var	array
	 */
	public $row_data;

	// --------------------------------------------------------------------

	/**
	 * Constructor
	 *
	 * @param	object	$driver_object
	 * @return	void
	 */
	public function __construct(&$driver_object)
	{
		$this->conn_id = $driver_object->conn_id;
		$this->result_id = $driver_object->result_id;
	}

	// --------------------------------------------------------------------

	/**
	 * Number of rows in the result set
	 *
	 * @return	int
	 */
	public function num_rows()
	{
		if (is_int($this->num_rows))
		{
			return $this->num_rows;
		}
		elseif (count($this->result_array) > 0)
		{
			return $this->num_rows = count($this->result_array);
		}
		elseif (count($this->result_object) > 0)
		{
			return $this->num_rows = count($this->result_object);
		}

		return $this->num_rows = count($this->result_array());
	}

	// --------------------------------------------------------------------

	/**
	 * Query result. Acts as a wrapper function for the following functions.
	 *
	 * @param	string	$type	'object', 'array' or a custom class name
	 * @return	array
	 */
	public function result($type = 'object')
	{
		if ($type === 'array')
		{
			return $this->result_array();
		}
		elseif ($type === 'object')
		{
			return $this->result_object();
		}
		else
		{
			return $this->custom_result_object($type);
		}
=======
	var $conn_id				= NULL;
	var $result_id				= NULL;
	var $result_array			= array();
	var $result_object			= array();
	var $custom_result_object	= array();
	var $current_row			= 0;
	var $num_rows				= 0;
	var $row_data				= NULL;


	/**
	 * Query result.  Acts as a wrapper function for the following functions.
	 *
	 * @access	public
	 * @param	string	can be "object" or "array"
	 * @return	mixed	either a result object or array
	 */
	public function result($type = 'object')
	{
		if ($type == 'array') return $this->result_array();
		else if ($type == 'object') return $this->result_object();
		else return $this->custom_result_object($type);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Custom query result.
	 *
<<<<<<< HEAD
	 * @param	string	$class_name
	 * @return	array
	 */
	public function custom_result_object($class_name)
	{
		if (isset($this->custom_result_object[$class_name]))
		{
			return $this->custom_result_object[$class_name];
		}
		elseif ( ! $this->result_id OR $this->num_rows === 0)
=======
	 * @param class_name A string that represents the type of object you want back
	 * @return array of objects
	 */
	public function custom_result_object($class_name)
	{
		if (array_key_exists($class_name, $this->custom_result_object))
		{
			return $this->custom_result_object[$class_name];
		}

		if ($this->result_id === FALSE OR $this->num_rows() == 0)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			return array();
		}

<<<<<<< HEAD
		// Don't fetch the result set again if we already have it
		$_data = NULL;
		if (($c = count($this->result_array)) > 0)
		{
			$_data = 'result_array';
		}
		elseif (($c = count($this->result_object)) > 0)
		{
			$_data = 'result_object';
		}

		if ($_data !== NULL)
		{
			for ($i = 0; $i < $c; $i++)
			{
				$this->custom_result_object[$class_name][$i] = new $class_name();

				foreach ($this->{$_data}[$i] as $key => $value)
				{
					$this->custom_result_object[$class_name][$i]->$key = $value;
				}
			}

			return $this->custom_result_object[$class_name];
		}

		is_null($this->row_data) OR $this->data_seek(0);
		$this->custom_result_object[$class_name] = array();

		while ($row = $this->_fetch_object($class_name))
		{
			$this->custom_result_object[$class_name][] = $row;
		}

		return $this->custom_result_object[$class_name];
=======
		// add the data to the object
		$this->_data_seek(0);
		$result_object = array();

		while ($row = $this->_fetch_object())
		{
			$object = new $class_name();

			foreach ($row as $key => $value)
			{
				$object->$key = $value;
			}

			$result_object[] = $object;
		}

		// return the array
		return $this->custom_result_object[$class_name] = $result_object;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Query result. "object" version.
	 *
	 * @return	array
=======
	 * Query result.  "object" version.
	 *
	 * @access	public
	 * @return	object
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	public function result_object()
	{
		if (count($this->result_object) > 0)
		{
			return $this->result_object;
		}

<<<<<<< HEAD
		// In the event that query caching is on, the result_id variable
		// will not be a valid resource so we'll simply return an empty
		// array.
		if ( ! $this->result_id OR $this->num_rows === 0)
=======
		// In the event that query caching is on the result_id variable
		// will return FALSE since there isn't a valid SQL resource so
		// we'll simply return an empty array.
		if ($this->result_id === FALSE OR $this->num_rows() == 0)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			return array();
		}

<<<<<<< HEAD
		if (($c = count($this->result_array)) > 0)
		{
			for ($i = 0; $i < $c; $i++)
			{
				$this->result_object[$i] = (object) $this->result_array[$i];
			}

			return $this->result_object;
		}

		is_null($this->row_data) OR $this->data_seek(0);
=======
		$this->_data_seek(0);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		while ($row = $this->_fetch_object())
		{
			$this->result_object[] = $row;
		}

		return $this->result_object;
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Query result. "array" version.
	 *
=======
	 * Query result.  "array" version.
	 *
	 * @access	public
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	array
	 */
	public function result_array()
	{
		if (count($this->result_array) > 0)
		{
			return $this->result_array;
		}

<<<<<<< HEAD
		// In the event that query caching is on, the result_id variable
		// will not be a valid resource so we'll simply return an empty
		// array.
		if ( ! $this->result_id OR $this->num_rows === 0)
=======
		// In the event that query caching is on the result_id variable
		// will return FALSE since there isn't a valid SQL resource so
		// we'll simply return an empty array.
		if ($this->result_id === FALSE OR $this->num_rows() == 0)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			return array();
		}

<<<<<<< HEAD
		if (($c = count($this->result_object)) > 0)
		{
			for ($i = 0; $i < $c; $i++)
			{
				$this->result_array[$i] = (array) $this->result_object[$i];
			}

			return $this->result_array;
		}

		is_null($this->row_data) OR $this->data_seek(0);
=======
		$this->_data_seek(0);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		while ($row = $this->_fetch_assoc())
		{
			$this->result_array[] = $row;
		}

		return $this->result_array;
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Row
	 *
	 * A wrapper method.
	 *
	 * @param	mixed	$n
	 * @param	string	$type	'object' or 'array'
	 * @return	mixed
=======
	 * Query result.  Acts as a wrapper function for the following functions.
	 *
	 * @access	public
	 * @param	string
	 * @param	string	can be "object" or "array"
	 * @return	mixed	either a result object or array
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	public function row($n = 0, $type = 'object')
	{
		if ( ! is_numeric($n))
		{
			// We cache the row data for subsequent uses
<<<<<<< HEAD
			is_array($this->row_data) OR $this->row_data = $this->row_array(0);

			// array_key_exists() instead of isset() to allow for NULL values
			if (empty($this->row_data) OR ! array_key_exists($n, $this->row_data))
			{
				return NULL;
			}

			return $this->row_data[$n];
		}

		if ($type === 'object') return $this->row_object($n);
		elseif ($type === 'array') return $this->row_array($n);
=======
			if ( ! is_array($this->row_data))
			{
				$this->row_data = $this->row_array(0);
			}

			// array_key_exists() instead of isset() to allow for MySQL NULL values
			if (array_key_exists($n, $this->row_data))
			{
				return $this->row_data[$n];
			}
			// reset the $n variable if the result was not achieved
			$n = 0;
		}

		if ($type == 'object') return $this->row_object($n);
		else if ($type == 'array') return $this->row_array($n);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		else return $this->custom_row_object($n, $type);
	}

	// --------------------------------------------------------------------

	/**
	 * Assigns an item into a particular column slot
	 *
<<<<<<< HEAD
	 * @param	mixed	$key
	 * @param	mixed	$value
	 * @return	void
=======
	 * @access	public
	 * @return	object
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	public function set_row($key, $value = NULL)
	{
		// We cache the row data for subsequent uses
		if ( ! is_array($this->row_data))
		{
			$this->row_data = $this->row_array(0);
		}

		if (is_array($key))
		{
			foreach ($key as $k => $v)
			{
				$this->row_data[$k] = $v;
			}
<<<<<<< HEAD
			return;
		}

		if ($key !== '' && $value !== NULL)
=======

			return;
		}

		if ($key != '' AND ! is_null($value))
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$this->row_data[$key] = $value;
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Returns a single result row - custom object version
	 *
<<<<<<< HEAD
	 * @param	int	$n
	 * @param	string	$type
=======
	 * @access	public
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	object
	 */
	public function custom_row_object($n, $type)
	{
<<<<<<< HEAD
		isset($this->custom_result_object[$type]) OR $this->custom_result_object($type);

		if (count($this->custom_result_object[$type]) === 0)
		{
			return NULL;
		}

		if ($n !== $this->current_row && isset($this->custom_result_object[$type][$n]))
=======
		$result = $this->custom_result_object($type);

		if (count($result) == 0)
		{
			return $result;
		}

		if ($n != $this->current_row AND isset($result[$n]))
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$this->current_row = $n;
		}

<<<<<<< HEAD
		return $this->custom_result_object[$type][$this->current_row];
	}

	// --------------------------------------------------------------------

	/**
	 * Returns a single result row - object version
	 *
	 * @param	int	$n
=======
		return $result[$this->current_row];
	}

	/**
	 * Returns a single result row - object version
	 *
	 * @access	public
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	object
	 */
	public function row_object($n = 0)
	{
		$result = $this->result_object();
<<<<<<< HEAD
		if (count($result) === 0)
		{
			return NULL;
		}

		if ($n !== $this->current_row && isset($result[$n]))
=======

		if (count($result) == 0)
		{
			return $result;
		}

		if ($n != $this->current_row AND isset($result[$n]))
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$this->current_row = $n;
		}

		return $result[$this->current_row];
	}

	// --------------------------------------------------------------------

	/**
	 * Returns a single result row - array version
	 *
<<<<<<< HEAD
	 * @param	int	$n
=======
	 * @access	public
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	array
	 */
	public function row_array($n = 0)
	{
		$result = $this->result_array();
<<<<<<< HEAD
		if (count($result) === 0)
		{
			return NULL;
		}

		if ($n !== $this->current_row && isset($result[$n]))
=======

		if (count($result) == 0)
		{
			return $result;
		}

		if ($n != $this->current_row AND isset($result[$n]))
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$this->current_row = $n;
		}

		return $result[$this->current_row];
	}

<<<<<<< HEAD
=======

>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	// --------------------------------------------------------------------

	/**
	 * Returns the "first" row
	 *
<<<<<<< HEAD
	 * @param	string	$type
	 * @return	mixed
=======
	 * @access	public
	 * @return	object
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	public function first_row($type = 'object')
	{
		$result = $this->result($type);
<<<<<<< HEAD
		return (count($result) === 0) ? NULL : $result[0];
=======

		if (count($result) == 0)
		{
			return $result;
		}
		return $result[0];
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Returns the "last" row
	 *
<<<<<<< HEAD
	 * @param	string	$type
	 * @return	mixed
=======
	 * @access	public
	 * @return	object
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	public function last_row($type = 'object')
	{
		$result = $this->result($type);
<<<<<<< HEAD
		return (count($result) === 0) ? NULL : $result[count($result) - 1];
=======

		if (count($result) == 0)
		{
			return $result;
		}
		return $result[count($result) -1];
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Returns the "next" row
	 *
<<<<<<< HEAD
	 * @param	string	$type
	 * @return	mixed
=======
	 * @access	public
	 * @return	object
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	public function next_row($type = 'object')
	{
		$result = $this->result($type);
<<<<<<< HEAD
		if (count($result) === 0)
		{
			return NULL;
		}

		return isset($result[$this->current_row + 1])
			? $result[++$this->current_row]
			: NULL;
=======

		if (count($result) == 0)
		{
			return $result;
		}

		if (isset($result[$this->current_row + 1]))
		{
			++$this->current_row;
		}

		return $result[$this->current_row];
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Returns the "previous" row
	 *
<<<<<<< HEAD
	 * @param	string	$type
	 * @return	mixed
=======
	 * @access	public
	 * @return	object
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	public function previous_row($type = 'object')
	{
		$result = $this->result($type);
<<<<<<< HEAD
		if (count($result) === 0)
		{
			return NULL;
=======

		if (count($result) == 0)
		{
			return $result;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		if (isset($result[$this->current_row - 1]))
		{
			--$this->current_row;
		}
		return $result[$this->current_row];
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Returns an unbuffered row and move pointer to next row
	 *
	 * @param	string	$type	'array', 'object' or a custom class name
	 * @return	mixed
	 */
	public function unbuffered_row($type = 'object')
	{
		if ($type === 'array')
		{
			return $this->_fetch_assoc();
		}
		elseif ($type === 'object')
		{
			return $this->_fetch_object();
		}

		return $this->_fetch_object($type);
	}

	// --------------------------------------------------------------------

	/**
	 * The following methods are normally overloaded by the identically named
	 * methods in the platform-specific driver -- except when query caching
	 * is used. When caching is enabled we do not load the other driver.
	 * These functions are primarily here to prevent undefined function errors
	 * when a cached result object is in use. They are not otherwise fully
	 * operational due to the unavailability of the database resource IDs with
	 * cached results.
	 */

	// --------------------------------------------------------------------

	/**
	 * Number of fields in the result set
	 *
	 * Overridden by driver result classes.
	 *
	 * @return	int
	 */
	public function num_fields()
	{
		return 0;
	}

	// --------------------------------------------------------------------

	/**
	 * Fetch Field Names
	 *
	 * Generates an array of column names.
	 *
	 * Overridden by driver result classes.
	 *
	 * @return	array
	 */
	public function list_fields()
	{
		return array();
	}

	// --------------------------------------------------------------------

	/**
	 * Field data
	 *
	 * Generates an array of objects containing field meta-data.
	 *
	 * Overridden by driver result classes.
	 *
	 * @return	array
	 */
	public function field_data()
	{
		return array();
	}

	// --------------------------------------------------------------------

	/**
	 * Free the result
	 *
	 * Overridden by driver result classes.
	 *
	 * @return	void
	 */
	public function free_result()
	{
		$this->result_id = FALSE;
	}

	// --------------------------------------------------------------------

	/**
	 * Data Seek
	 *
	 * Moves the internal pointer to the desired offset. We call
	 * this internally before fetching results to make sure the
	 * result set starts at zero.
	 *
	 * Overridden by driver result classes.
	 *
	 * @param	int	$n
	 * @return	bool
	 */
	public function data_seek($n = 0)
	{
		return FALSE;
	}

	// --------------------------------------------------------------------

	/**
	 * Result - associative array
	 *
	 * Returns the result set as an array.
	 *
	 * Overridden by driver result classes.
	 *
	 * @return	array
	 */
	protected function _fetch_assoc()
	{
		return array();
	}

	// --------------------------------------------------------------------

	/**
	 * Result - object
	 *
	 * Returns the result set as an object.
	 *
	 * Overridden by driver result classes.
	 *
	 * @param	string	$class_name
	 * @return	object
	 */
	protected function _fetch_object($class_name = 'stdClass')
	{
		return array();
	}

}
=======
	 * The following functions are normally overloaded by the identically named
	 * methods in the platform-specific driver -- except when query caching
	 * is used.  When caching is enabled we do not load the other driver.
	 * These functions are primarily here to prevent undefined function errors
	 * when a cached result object is in use.  They are not otherwise fully
	 * operational due to the unavailability of the database resource IDs with
	 * cached results.
	 */
	public function num_rows() { return $this->num_rows; }
	public function num_fields() { return 0; }
	public function list_fields() { return array(); }
	public function field_data() { return array(); }
	public function free_result() { return TRUE; }
	protected function _data_seek() { return TRUE; }
	protected function _fetch_assoc() { return array(); }
	protected function _fetch_object() { return array(); }

}
// END DB_result class

/* End of file DB_result.php */
/* Location: ./system/database/DB_result.php */
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
