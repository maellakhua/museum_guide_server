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
 * @since	Version 2.1.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');
=======
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		Esen Sagynov
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 2.0.2
 * @filesource
 */

// --------------------------------------------------------------------
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

/**
 * CUBRID Result Class
 *
 * This class extends the parent result class: CI_DB_result
 *
 * @category	Database
 * @author		Esen Sagynov
 * @link		http://codeigniter.com/user_guide/database/
 */
class CI_DB_cubrid_result extends CI_DB_result {

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
			: $this->num_rows = cubrid_num_rows($this->result_id);
=======
	 * @access	public
	 * @return	integer
	 */
	function num_rows()
	{
		return @cubrid_num_rows($this->result_id);
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
		return cubrid_num_fields($this->result_id);
=======
	 * @access	public
	 * @return	integer
	 */
	function num_fields()
	{
		return @cubrid_num_fields($this->result_id);
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
=======
	 * @access	public
	 * @return	array
	 */
	function list_fields()
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	{
		return cubrid_column_names($this->result_id);
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
			$retval[$i]->name		= cubrid_field_name($this->result_id, $i);
			$retval[$i]->type		= cubrid_field_type($this->result_id, $i);
			$retval[$i]->max_length		= cubrid_field_len($this->result_id, $i);
			$retval[$i]->primary_key	= (int) (strpos(cubrid_field_flags($this->result_id, $i), 'primary_key') !== FALSE);
=======
	 * @access	public
	 * @return	array
	 */
	function field_data()
	{
		$retval = array();

		$tablePrimaryKeys = array();

		while ($field = cubrid_fetch_field($this->result_id))
		{
			$F				= new stdClass();
			$F->name		= $field->name;
			$F->type		= $field->type;
			$F->default		= $field->def;
			$F->max_length	= $field->max_length;

			// At this moment primary_key property is not returned when
			// cubrid_fetch_field is called. The following code will
			// provide a patch for it. primary_key property will be added
			// in the next release.

			// TODO: later version of CUBRID will provide primary_key
			// property.
			// When PK is defined in CUBRID, an index is automatically
			// created in the db_index system table in the form of
			// pk_tblname_fieldname. So the following will count how many
			// columns are there which satisfy this format.
			// The query will search for exact single columns, thus
			// compound PK is not supported.
			$res = cubrid_query($this->conn_id,
				"SELECT COUNT(*) FROM db_index WHERE class_name = '" . $field->table .
				"' AND is_primary_key = 'YES' AND index_name = 'pk_" .
				$field->table . "_" . $field->name . "'"
			);

			if ($res)
			{
				$row = cubrid_fetch_array($res, CUBRID_NUM);
				$F->primary_key = ($row[0] > 0 ? 1 : null);
			}
			else
			{
				$F->primary_key = null;
			}

			if (is_resource($res))
			{
				cubrid_close_request($res);
				$this->result_id = FALSE;
			}

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
	{
		if (is_resource($this->result_id) OR
			(get_resource_type($this->result_id) === 'Unknown' && preg_match('/Resource id #/', strval($this->result_id))))
=======
	 * @return	null
	 */
	function free_result()
	{
		if(is_resource($this->result_id) ||
			get_resource_type($this->result_id) == "Unknown" &&
			preg_match('/Resource id #/', strval($this->result_id)))
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			cubrid_close_request($this->result_id);
			$this->result_id = FALSE;
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Data Seek
	 *
	 * Moves the internal pointer to the desired offset. We call
	 * this internally before fetching results to make sure the
<<<<<<< HEAD
	 * result set starts at zero.
	 *
	 * @param	int	$n
	 * @return	bool
	 */
	public function data_seek($n = 0)
=======
	 * result set starts at zero
	 *
	 * @access	private
	 * @return	array
	 */
	function _data_seek($n = 0)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	{
		return cubrid_data_seek($this->result_id, $n);
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
		return cubrid_fetch_assoc($this->result_id);
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
		return cubrid_fetch_object($this->result_id, $class_name);
	}

}
=======
	 * @access	private
	 * @return	object
	 */
	function _fetch_object()
	{
		return cubrid_fetch_object($this->result_id);
	}

}


/* End of file cubrid_result.php */
/* Location: ./system/database/drivers/cubrid/cubrid_result.php */
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
