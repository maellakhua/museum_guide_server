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
 * Postgre Forge Class
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
class CI_DB_postgre_forge extends CI_DB_forge {

	/**
<<<<<<< HEAD
	 * UNSIGNED support
	 *
	 * @var	array
	 */
	protected $_unsigned		= array(
		'INT2'		=> 'INTEGER',
		'SMALLINT'	=> 'INTEGER',
		'INT'		=> 'BIGINT',
		'INT4'		=> 'BIGINT',
		'INTEGER'	=> 'BIGINT',
		'INT8'		=> 'NUMERIC',
		'BIGINT'	=> 'NUMERIC',
		'REAL'		=> 'DOUBLE PRECISION',
		'FLOAT'		=> 'DOUBLE PRECISION'
	);

	/**
	 * NULL value representation in CREATE/ALTER TABLE statements
	 *
	 * @var	string
	 */
	protected $_null = 'NULL';
=======
	 * Create database
	 *
	 * @access	private
	 * @param	string	the database name
	 * @return	bool
	 */
	function _create_database($name)
	{
		return "CREATE DATABASE ".$name;
	}
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Class constructor
	 *
	 * @param	object	&$db	Database object
	 * @return	void
	 */
	public function __construct(&$db)
	{
		parent::__construct($db);

		if (version_compare($this->db->version(), '9.0', '>'))
		{
			$this->create_table_if = 'CREATE TABLE IF NOT EXISTS';
		}
=======
	 * Drop database
	 *
	 * @access	private
	 * @param	string	the database name
	 * @return	bool
	 */
	function _drop_database($name)
	{
		return "DROP DATABASE ".$name;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * ALTER TABLE
	 *
	 * @param	string	$alter_type	ALTER type
	 * @param	string	$table		Table name
	 * @param	mixed	$field		Column definition
	 * @return	string|string[]
	 */
	protected function _alter_table($alter_type, $table, $field)
 	{
		if (in_array($alter_type, array('DROP', 'ADD'), TRUE))
		{
			return parent::_alter_table($alter_type, $table, $field);
		}

		$sql = 'ALTER TABLE '.$this->db->escape_identifiers($table);
		$sqls = array();
		for ($i = 0, $c = count($field); $i < $c; $i++)
		{
			if ($field[$i]['_literal'] !== FALSE)
			{
				return FALSE;
			}

			if (version_compare($this->db->version(), '8', '>=') && isset($field[$i]['type']))
			{
				$sqls[] = $sql.' ALTER COLUMN '.$this->db->escape_identifiers($field[$i]['name'])
					.' TYPE '.$field[$i]['type'].$field[$i]['length'];
			}

			if ( ! empty($field[$i]['default']))
			{
				$sqls[] = $sql.' ALTER COLUMN '.$this->db->escape_identifiers($field[$i]['name'])
					.' SET DEFAULT '.$field[$i]['default'];
			}

			if (isset($field[$i]['null']))
			{
				$sqls[] = $sql.' ALTER COLUMN '.$this->db->escape_identifiers($field[$i]['name'])
					.($field[$i]['null'] === TRUE ? ' DROP NOT NULL' : ' SET NOT NULL');
			}

			if ( ! empty($field[$i]['new_name']))
			{
				$sqls[] = $sql.' RENAME COLUMN '.$this->db->escape_identifiers($field[$i]['name'])
					.' TO '.$this->db->escape_identifiers($field[$i]['new_name']);
			}

			if ( ! empty($field[$i]['comment']))
			{
				$sqls[] = 'COMMENT ON COLUMN '
					.$this->db->escape_identifiers($table).'.'.$this->db->escape_identifiers($field[$i]['name'])
					.' IS '.$field[$i]['comment'];
			}
		}

		return $sqls;
 	}
=======
	 * Create Table
	 *
	 * @access	private
	 * @param	string	the table name
	 * @param	array	the fields
	 * @param	mixed	primary key(s)
	 * @param	mixed	key(s)
	 * @param	boolean	should 'IF NOT EXISTS' be added to the SQL
	 * @return	bool
	 */
	function _create_table($table, $fields, $primary_keys, $keys, $if_not_exists)
	{
		$sql = 'CREATE TABLE ';

		if ($if_not_exists === TRUE)
		{
			if ($this->db->table_exists($table))
			{
				return "SELECT * FROM $table"; // Needs to return innocous but valid SQL statement
			}
		}

		$sql .= $this->db->_escape_identifiers($table)." (";
		$current_field_count = 0;

		foreach ($fields as $field=>$attributes)
		{
			// Numeric field names aren't allowed in databases, so if the key is
			// numeric, we know it was assigned by PHP and the developer manually
			// entered the field information, so we'll simply add it to the list
			if (is_numeric($field))
			{
				$sql .= "\n\t$attributes";
			}
			else
			{
				$attributes = array_change_key_case($attributes, CASE_UPPER);

				$sql .= "\n\t".$this->db->_protect_identifiers($field);

				$is_unsigned = (array_key_exists('UNSIGNED', $attributes) && $attributes['UNSIGNED'] === TRUE);

				// Convert datatypes to be PostgreSQL-compatible
				switch (strtoupper($attributes['TYPE']))
				{
					case 'TINYINT':
						$attributes['TYPE'] = 'SMALLINT';
						break;
					case 'SMALLINT':
						$attributes['TYPE'] = ($is_unsigned) ? 'INTEGER' : 'SMALLINT';
						break;
					case 'MEDIUMINT':
						$attributes['TYPE'] = 'INTEGER';
						break;
					case 'INT':
						$attributes['TYPE'] = ($is_unsigned) ? 'BIGINT' : 'INTEGER';
						break;
					case 'BIGINT':
						$attributes['TYPE'] = ($is_unsigned) ? 'NUMERIC' : 'BIGINT';
						break;
					case 'DOUBLE':
						$attributes['TYPE'] = 'DOUBLE PRECISION';
						break;
					case 'DATETIME':
						$attributes['TYPE'] = 'TIMESTAMP';
						break;
					case 'LONGTEXT':
						$attributes['TYPE'] = 'TEXT';
						break;
					case 'BLOB':
						$attributes['TYPE'] = 'BYTEA';
						break;
				}

				// If this is an auto-incrementing primary key, use the serial data type instead
				if (in_array($field, $primary_keys) && array_key_exists('AUTO_INCREMENT', $attributes) 
					&& $attributes['AUTO_INCREMENT'] === TRUE)
				{
					$sql .= ' SERIAL';
				}
				else
				{
					$sql .=  ' '.$attributes['TYPE'];
				}

				// Modified to prevent constraints with integer data types
				if (array_key_exists('CONSTRAINT', $attributes) && strpos($attributes['TYPE'], 'INT') === false)
				{
					$sql .= '('.$attributes['CONSTRAINT'].')';
				}

				if (array_key_exists('DEFAULT', $attributes))
				{
					$sql .= ' DEFAULT \''.$attributes['DEFAULT'].'\'';
				}

				if (array_key_exists('NULL', $attributes) && $attributes['NULL'] === TRUE)
				{
					$sql .= ' NULL';
				}
				else
				{
					$sql .= ' NOT NULL';
				}

				// Added new attribute to create unqite fields. Also works with MySQL
				if (array_key_exists('UNIQUE', $attributes) && $attributes['UNIQUE'] === TRUE)
				{
					$sql .= ' UNIQUE';
				}
			}

			// don't add a comma on the end of the last field
			if (++$current_field_count < count($fields))
			{
				$sql .= ',';
			}
		}

		if (count($primary_keys) > 0)
		{
			// Something seems to break when passing an array to _protect_identifiers()
			foreach ($primary_keys as $index => $key)
			{
				$primary_keys[$index] = $this->db->_protect_identifiers($key);
			}

			$sql .= ",\n\tPRIMARY KEY (" . implode(', ', $primary_keys) . ")";
		}

		$sql .= "\n);";

		if (is_array($keys) && count($keys) > 0)
		{
			foreach ($keys as $key)
			{
				if (is_array($key))
				{
					$key = $this->db->_protect_identifiers($key);
				}
				else
				{
					$key = array($this->db->_protect_identifiers($key));
				}

				foreach ($key as $field)
				{
					$sql .= "CREATE INDEX " . $table . "_" . str_replace(array('"', "'"), '', $field) . "_index ON $table ($field); ";
				}
			}
		}

		return $sql;
	}

	// --------------------------------------------------------------------

	/**
	 * Drop Table
	 *
	 * @access    private
	 * @return    bool
	 */
	function _drop_table($table)
	{
		return "DROP TABLE IF EXISTS ".$this->db->_escape_identifiers($table)." CASCADE";
	}
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Field attribute TYPE
	 *
	 * Performs a data type mapping between different databases.
	 *
	 * @param	array	&$attributes
	 * @return	void
	 */
	protected function _attr_type(&$attributes)
	{
		// Reset field lenghts for data types that don't support it
		if (isset($attributes['CONSTRAINT']) && stripos($attributes['TYPE'], 'int') !== FALSE)
		{
			$attributes['CONSTRAINT'] = NULL;
		}

		switch (strtoupper($attributes['TYPE']))
		{
			case 'TINYINT':
				$attributes['TYPE'] = 'SMALLINT';
				$attributes['UNSIGNED'] = FALSE;
				return;
			case 'MEDIUMINT':
				$attributes['TYPE'] = 'INTEGER';
				$attributes['UNSIGNED'] = FALSE;
				return;
			default: return;
		}
=======
	 * Alter table query
	 *
	 * Generates a platform-specific query so that a table can be altered
	 * Called by add_column(), drop_column(), and column_alter(),
	 *
	 * @access	private
	 * @param	string	the ALTER type (ADD, DROP, CHANGE)
	 * @param	string	the column name
	 * @param	string	the table name
	 * @param	string	the column definition
	 * @param	string	the default value
	 * @param	boolean	should 'NOT NULL' be added
	 * @param	string	the field after which we should add the new field
	 * @return	object
	 */
	function _alter_table($alter_type, $table, $column_name, $column_definition = '', $default_value = '', $null = '', $after_field = '')
	{
		$sql = 'ALTER TABLE '.$this->db->_protect_identifiers($table)." $alter_type ".$this->db->_protect_identifiers($column_name);

		// DROP has everything it needs now.
		if ($alter_type == 'DROP')
		{
			return $sql;
		}

		$sql .= " $column_definition";

		if ($default_value != '')
		{
			$sql .= " DEFAULT \"$default_value\"";
		}

		if ($null === NULL)
		{
			$sql .= ' NULL';
		}
		else
		{
			$sql .= ' NOT NULL';
		}

		if ($after_field != '')
		{
			$sql .= ' AFTER ' . $this->db->_protect_identifiers($after_field);
		}

		return $sql;

>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Field attribute AUTO_INCREMENT
	 *
	 * @param	array	&$attributes
	 * @param	array	&$field
	 * @return	void
	 */
	protected function _attr_auto_increment(&$attributes, &$field)
	{
		if ( ! empty($attributes['AUTO_INCREMENT']) && $attributes['AUTO_INCREMENT'] === TRUE)
		{
			$field['type'] = ($field['type'] === 'NUMERIC')
				? 'BIGSERIAL'
				: 'SERIAL';
		}
	}

}
=======
	 * Rename a table
	 *
	 * Generates a platform-specific query so that a table can be renamed
	 *
	 * @access	private
	 * @param	string	the old table name
	 * @param	string	the new table name
	 * @return	string
	 */
	function _rename_table($table_name, $new_table_name)
	{
		$sql = 'ALTER TABLE '.$this->db->_protect_identifiers($table_name)." RENAME TO ".$this->db->_protect_identifiers($new_table_name);
		return $sql;
	}


}

/* End of file postgre_forge.php */
/* Location: ./system/database/drivers/postgre/postgre_forge.php */
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
