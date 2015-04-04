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
 * @since	Version 1.4.1
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
 * @copyright   Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

/**
 * oci8 Result Class
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
class CI_DB_oci8_result extends CI_DB_result {

<<<<<<< HEAD
	/**
	 * Statement ID
	 *
	 * @var	resource
	 */
	public $stmt_id;

	/**
	 * Cursor ID
	 *
	 * @var	resource
	 */
	public $curs_id;

	/**
	 * Limit used flag
	 *
	 * @var	bool
	 */
	public $limit_used;

	/**
	 * Commit mode flag
	 *
	 * @var	int
	 */
	public $commit_mode;

	// --------------------------------------------------------------------

	/**
	 * Class constructor
	 *
	 * @param	object	&$driver_object
	 * @return	void
	 */
	public function __construct(&$driver_object)
	{
		parent::__construct($driver_object);

		$this->stmt_id = $driver_object->stmt_id;
		$this->curs_id = $driver_object->curs_id;
		$this->limit_used = $driver_object->limit_used;
		$this->commit_mode =& $driver_object->commit_mode;
		$driver_object->stmt_id = FALSE;
=======
	public $stmt_id;
	public $curs_id;
	public $limit_used;

	/**
	 * Number of rows in the result set.
	 *
	 * Oracle doesn't have a graceful way to retun the number of rows
	 * so we have to use what amounts to a hack.
	 *
	 * @return  integer
	 */
	public function num_rows()
	{
		if ($this->num_rows === 0 && count($this->result_array()) > 0)
		{
			$this->num_rows = count($this->result_array());
			@oci_execute($this->stmt_id);

			if ($this->curs_id)
			{
				@oci_execute($this->curs_id);
			}
		}

		return $this->num_rows;
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
		$count = oci_num_fields($this->stmt_id);

		// if we used a limit we subtract it
		return ($this->limit_used) ? $count - 1 : $count;
=======
	 * @access  public
	 * @return  integer
	 */
	public function num_fields()
	{
		$count = @oci_num_fields($this->stmt_id);

		// if we used a limit we subtract it
		if ($this->limit_used)
		{
			$count = $count - 1;
		}

		return $count;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Fetch Field Names
	 *
	 * Generates an array of column names
	 *
<<<<<<< HEAD
=======
	 * @access	public
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	array
	 */
	public function list_fields()
	{
		$field_names = array();
		for ($c = 1, $fieldCount = $this->num_fields(); $c <= $fieldCount; $c++)
		{
			$field_names[] = oci_field_name($this->stmt_id, $c);
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
=======
	 * @access  public
	 * @return  array
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	public function field_data()
	{
		$retval = array();
		for ($c = 1, $fieldCount = $this->num_fields(); $c <= $fieldCount; $c++)
		{
<<<<<<< HEAD
			$F		= new stdClass();
			$F->name	= oci_field_name($this->stmt_id, $c);
			$F->type	= oci_field_type($this->stmt_id, $c);
			$F->max_length	= oci_field_size($this->stmt_id, $c);
=======
			$F			= new stdClass();
			$F->name		= oci_field_name($this->stmt_id, $c);
			$F->type		= oci_field_type($this->stmt_id, $c);
			$F->max_length		= oci_field_size($this->stmt_id, $c);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

			$retval[] = $F;
		}

		return $retval;
	}

	// --------------------------------------------------------------------

	/**
	 * Free the result
	 *
<<<<<<< HEAD
	 * @return	void
=======
	 * @return	null
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	public function free_result()
	{
		if (is_resource($this->result_id))
		{
			oci_free_statement($this->result_id);
			$this->result_id = FALSE;
		}
<<<<<<< HEAD

		if (is_resource($this->stmt_id))
		{
			oci_free_statement($this->stmt_id);
		}

		if (is_resource($this->curs_id))
		{
			oci_cancel($this->curs_id);
			$this->curs_id = NULL;
		}
=======
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Result - associative array
	 *
	 * Returns the result set as an array
	 *
<<<<<<< HEAD
	 * @return	array
=======
	 * @access  protected
	 * @return  array
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	protected function _fetch_assoc()
	{
		$id = ($this->curs_id) ? $this->curs_id : $this->stmt_id;
		return oci_fetch_assoc($id);
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
		$row = ($this->curs_id)
			? oci_fetch_object($this->curs_id)
			: oci_fetch_object($this->stmt_id);

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
=======
	 * @access  protected
	 * @return  object
	 */
	protected function _fetch_object()
	{
		$id = ($this->curs_id) ? $this->curs_id : $this->stmt_id;
		return @oci_fetch_object($id);
	}

	// --------------------------------------------------------------------

	/**
	 * Query result.  "array" version.
	 *
	 * @access  public
	 * @return  array
	 */
	public function result_array()
	{
		if (count($this->result_array) > 0)
		{
			return $this->result_array;
		}

		$row = NULL;
		while ($row = $this->_fetch_assoc())
		{
			$this->result_array[] = $row;
		}

		return $this->result_array;
	}

	// --------------------------------------------------------------------

	/**
	 * Data Seek
	 *
	 * Moves the internal pointer to the desired offset.  We call
	 * this internally before fetching results to make sure the
	 * result set starts at zero
	 *
	 * @access	protected
	 * @return	array
	 */
	protected function _data_seek($n = 0)
	{
		return FALSE; // Not needed
	}

}


/* End of file oci8_result.php */
/* Location: ./system/database/drivers/oci8/oci8_result.php */
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
