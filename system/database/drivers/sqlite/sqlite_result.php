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
 * SQLite Result Class
 *
 * This class extends the parent result class: CI_DB_result
 *
 * @category	Database
<<<<<<< HEAD
 * @author		EllisLab Dev Team
=======
 * @author		ExpressionEngine Dev Team
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
 * @link		http://codeigniter.com/user_guide/database/
 */
class CI_DB_sqlite_result extends CI_DB_result {

	/**
	 * Number of rows in the result set
	 *
<<<<<<< HEAD
	 * @return	int
	 */
	public function num_rows()
	{
		return is_int($this->num_rows)
			? $this->num_rows
			: $this->num_rows = @sqlite_num_rows($this->result_id);
=======
	 * @access	public
	 * @return	integer
	 */
	function num_rows()
	{
		return @sqlite_num_rows($this->result_id);
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
=======
	 * @access	public
	 * @return	integer
	 */
	function num_fields()
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	{
		return @sqlite_num_fields($this->result_id);
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
		for ($i = 0, $c = $this->num_fields(); $i < $c; $i++)
		{
			$field_names[$i] = sqlite_field_name($this->result_id, $i);
=======
	 * @access	public
	 * @return	array
	 */
	function list_fields()
	{
		$field_names = array();
		for ($i = 0; $i < $this->num_fields(); $i++)
		{
			$field_names[] = sqlite_field_name($this->result_id, $i);
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
		for ($i = 0, $c = $this->num_fields(); $i < $c; $i++)
		{
			$retval[$i]			= new stdClass();
			$retval[$i]->name		= sqlite_field_name($this->result_id, $i);
			$retval[$i]->type		= NULL;
			$retval[$i]->max_length		= NULL;
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
			$F->name		= sqlite_field_name($this->result_id, $i);
			$F->type		= 'varchar';
			$F->max_length	= 0;
			$F->primary_key = 0;
			$F->default		= '';

			$retval[] = $F;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		return $retval;
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Data Seek
	 *
	 * Moves the internal pointer to the desired offset. We call
	 * this internally before fetching results to make sure the
	 * result set starts at zero.
	 *
	 * @param	int	$n
	 * @return	bool
	 */
	public function data_seek($n = 0)
=======
	 * Free the result
	 *
	 * @return	null
	 */
	function free_result()
	{
		// Not implemented in SQLite
	}

	// --------------------------------------------------------------------

	/**
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
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	{
		return sqlite_seek($this->result_id, $n);
	}

	// --------------------------------------------------------------------

	/**
	 * Result - associative array
	 *
	 * Returns the result set as an array
	 *
<<<<<<< HEAD
	 * @return	array
	 */
	protected function _fetch_assoc()
=======
	 * @access	private
	 * @return	array
	 */
	function _fetch_assoc()
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	{
		return sqlite_fetch_array($this->result_id);
	}

	// --------------------------------------------------------------------

	/**
	 * Result - object
	 *
	 * Returns the result set as an object
	 *
<<<<<<< HEAD
	 * @param	string	$class_name
	 * @return	object
	 */
	protected function _fetch_object($class_name = 'stdClass')
	{
		return sqlite_fetch_object($this->result_id, $class_name);
	}

}
=======
	 * @access	private
	 * @return	object
	 */
	function _fetch_object()
	{
		if (function_exists('sqlite_fetch_object'))
		{
			return sqlite_fetch_object($this->result_id);
		}
		else
		{
			$arr = sqlite_fetch_array($this->result_id, SQLITE_ASSOC);
			if (is_array($arr))
			{
				$obj = (object) $arr;
				return $obj;
			} else {
				return NULL;
			}
		}
	}

}


/* End of file sqlite_result.php */
/* Location: ./system/database/drivers/sqlite/sqlite_result.php */
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
