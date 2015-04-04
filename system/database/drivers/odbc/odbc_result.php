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
 * @since	Version 1.3.0
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
 * ODBC Result Class
 *
 * This class extends the parent result class: CI_DB_result
 *
<<<<<<< HEAD
 * @package		CodeIgniter
 * @subpackage	Drivers
 * @category	Database
 * @author		EllisLab Dev Team
=======
 * @category	Database
 * @author		ExpressionEngine Dev Team
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
 * @link		http://codeigniter.com/user_guide/database/
 */
class CI_DB_odbc_result extends CI_DB_result {

	/**
	 * Number of rows in the result set
	 *
<<<<<<< HEAD
	 * @return	int
	 */
	public function num_rows()
	{
		if (is_int($this->num_rows))
		{
			return $this->num_rows;
		}
		elseif (($this->num_rows = odbc_num_rows($this->result_id)) !== -1)
		{
			return $this->num_rows;
		}

		// Work-around for ODBC subdrivers that don't support num_rows()
		if (count($this->result_array) > 0)
		{
			return $this->num_rows = count($this->result_array);
		}
		elseif (count($this->result_object) > 0)
		{
			return $this->num_rows = count($this->result_object);
		}

		return $this->num_rows = count($this->result_array());
=======
	 * @access	public
	 * @return	integer
	 */
	function num_rows()
	{
		return @odbc_num_rows($this->result_id);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Number of fields in the result set
	 *
<<<<<<< HEAD
	 * @return	int
	 */
	public function num_fields()
	{
		return odbc_num_fields($this->result_id);
=======
	 * @access	public
	 * @return	integer
	 */
	function num_fields()
	{
		return @odbc_num_fields($this->result_id);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Fetch Field Names
	 *
	 * Generates an array of column names
	 *
<<<<<<< HEAD
	 * @return	array
	 */
	public function list_fields()
	{
		$field_names = array();
		$num_fields = $this->num_fields();

		if ($num_fields > 0)
		{
			for ($i = 1; $i <= $num_fields; $i++)
			{
				$field_names[] = odbc_field_name($this->result_id, $i);
			}
=======
	 * @access	public
	 * @return	array
	 */
	function list_fields()
	{
		$field_names = array();
		for ($i = 0; $i < $this->num_fields(); $i++)
		{
			$field_names[]	= odbc_field_name($this->result_id, $i);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		return $field_names;
	}

	// --------------------------------------------------------------------

	/**
	 * Field data
	 *
	 * Generates an array of objects containing field meta-data
	 *
<<<<<<< HEAD
	 * @return	array
	 */
	public function field_data()
	{
		$retval = array();
		for ($i = 0, $odbc_index = 1, $c = $this->num_fields(); $i < $c; $i++, $odbc_index++)
		{
			$retval[$i]			= new stdClass();
			$retval[$i]->name		= odbc_field_name($this->result_id, $odbc_index);
			$retval[$i]->type		= odbc_field_type($this->result_id, $odbc_index);
			$retval[$i]->max_length		= odbc_field_len($this->result_id, $odbc_index);
			$retval[$i]->primary_key	= 0;
			$retval[$i]->default		= '';
=======
	 * @access	public
	 * @return	array
	 */
	function field_data()
	{
		$retval = array();
		for ($i = 0; $i < $this->num_fields(); $i++)
		{
			$F				= new stdClass();
			$F->name		= odbc_field_name($this->result_id, $i);
			$F->type		= odbc_field_type($this->result_id, $i);
			$F->max_length	= odbc_field_len($this->result_id, $i);
			$F->primary_key = 0;
			$F->default		= '';

			$retval[] = $F;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		return $retval;
	}

	// --------------------------------------------------------------------

	/**
	 * Free the result
	 *
<<<<<<< HEAD
	 * @return	void
	 */
	public function free_result()
=======
	 * @return	null
	 */
	function free_result()
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	{
		if (is_resource($this->result_id))
		{
			odbc_free_result($this->result_id);
			$this->result_id = FALSE;
		}
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Result - associative array
	 *
	 * Returns the result set as an array
	 *
	 * @return	array
	 */
	protected function _fetch_assoc()
	{
		return odbc_fetch_array($this->result_id);
=======
	 * Data Seek
	 *
	 * Moves the internal pointer to the desired offset.  We call
	 * this internally before fetching results to make sure the
	 * result set starts at zero
	 *
	 * @access	private
	 * @return	array
	 */
	function _data_seek($n = 0)
	{
		return FALSE;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Result - object
	 *
	 * Returns the result set as an object
	 *
	 * @param	string	$class_name
	 * @return	object
	 */
	protected function _fetch_object($class_name = 'stdClass')
	{
		$row = odbc_fetch_object($this->result_id);

		if ($class_name === 'stdClass' OR ! $row)
		{
			return $row;
		}

		$class_name = new $class_name();
		foreach ($row as $key => $value)
		{
			$class_name->$key = $value;
		}

		return $class_name;
	}

}

// --------------------------------------------------------------------

if ( ! function_exists('odbc_fetch_array'))
{
	/**
	 * ODBC Fetch array
	 *
	 * Emulates the native odbc_fetch_array() function when
	 * it is not available (odbc_fetch_array() requires unixODBC)
	 *
	 * @param	resource	&$result
	 * @param	int		$rownumber
	 * @return	array
	 */
	function odbc_fetch_array(&$result, $rownumber = 1)
	{
		$rs = array();
		if ( ! odbc_fetch_into($result, $rs, $rownumber))
		{
			return FALSE;
		}

		$rs_assoc = array();
		foreach ($rs as $k => $v)
		{
			$field_name = odbc_field_name($result, $k+1);
			$rs_assoc[$field_name] = $v;
		}

		return $rs_assoc;
	}
}

// --------------------------------------------------------------------

if ( ! function_exists('odbc_fetch_object'))
{
	/**
	 * ODBC Fetch object
	 *
	 * Emulates the native odbc_fetch_object() function when
	 * it is not available.
	 *
	 * @param	resource	&$result
	 * @param	int		$rownumber
	 * @return	object
	 */
	function odbc_fetch_object(&$result, $rownumber = 1)
	{
		$rs = array();
		if ( ! odbc_fetch_into($result, $rs, $rownumber))
		{
			return FALSE;
		}

		$rs_object = new stdClass();
		foreach ($rs as $k => $v)
		{
			$field_name = odbc_field_name($result, $k+1);
			$rs_object->$field_name = $v;
		}

		return $rs_object;
	}
}
=======
	 * Result - associative array
	 *
	 * Returns the result set as an array
	 *
	 * @access	private
	 * @return	array
	 */
	function _fetch_assoc()
	{
		if (function_exists('odbc_fetch_object'))
		{
			return odbc_fetch_array($this->result_id);
		}
		else
		{
			return $this->_odbc_fetch_array($this->result_id);
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Result - object
	 *
	 * Returns the result set as an object
	 *
	 * @access	private
	 * @return	object
	 */
	function _fetch_object()
	{
		if (function_exists('odbc_fetch_object'))
		{
			return odbc_fetch_object($this->result_id);
		}
		else
		{
			return $this->_odbc_fetch_object($this->result_id);
		}
	}


	/**
	 * Result - object
	 *
	 * subsititutes the odbc_fetch_object function when
	 * not available (odbc_fetch_object requires unixODBC)
	 *
	 * @access	private
	 * @return	object
	 */
	function _odbc_fetch_object(& $odbc_result) {
		$rs = array();
		$rs_obj = FALSE;
		if (odbc_fetch_into($odbc_result, $rs)) {
			foreach ($rs as $k=>$v) {
				$field_name= odbc_field_name($odbc_result, $k+1);
				$rs_obj->$field_name = $v;
			}
		}
		return $rs_obj;
	}


	/**
	 * Result - array
	 *
	 * subsititutes the odbc_fetch_array function when
	 * not available (odbc_fetch_array requires unixODBC)
	 *
	 * @access	private
	 * @return	array
	 */
	function _odbc_fetch_array(& $odbc_result) {
		$rs = array();
		$rs_assoc = FALSE;
		if (odbc_fetch_into($odbc_result, $rs)) {
			$rs_assoc=array();
			foreach ($rs as $k=>$v) {
				$field_name= odbc_field_name($odbc_result, $k+1);
				$rs_assoc[$field_name] = $v;
			}
		}
		return $rs_assoc;
	}

}


/* End of file odbc_result.php */
/* Location: ./system/database/drivers/odbc/odbc_result.php */
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
