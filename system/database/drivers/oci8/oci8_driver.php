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
 * oci8 Database Adapter Class
 *
 * Note: _DB is an extender class that the app controller
<<<<<<< HEAD
 * creates dynamically based on whether the query builder
=======
 * creates dynamically based on whether the active record
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
 * class is being used or not.
 *
 * @package		CodeIgniter
 * @subpackage  Drivers
 * @category	Database
<<<<<<< HEAD
 * @author		EllisLab Dev Team
=======
 * @author		ExpressionEngine Dev Team
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
 * @link		http://codeigniter.com/user_guide/database/
 */

/**
 * oci8 Database Adapter Class
 *
 * This is a modification of the DB_driver class to
 * permit access to oracle databases
 *
 * @author	  Kelly McArdle
<<<<<<< HEAD
 */
class CI_DB_oci8_driver extends CI_DB {

	/**
	 * Database driver
	 *
	 * @var	string
	 */
	public $dbdriver = 'oci8';

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
	 * Commit mode flag
	 *
	 * @var	int
	 */
	public $commit_mode = OCI_COMMIT_ON_SUCCESS;

	/**
	 * Limit used flag
	 *
	 * If we use LIMIT, we'll add a field that will
	 * throw off num_fields later.
	 *
	 * @var	bool
	 */
	public $limit_used;
=======
 *
 */

class CI_DB_oci8_driver extends CI_DB {

	var $dbdriver = 'oci8';

	// The character used for excaping
	var $_escape_char = '"';

	// clause and character used for LIKE escape sequences
	var $_like_escape_str = " escape '%s' ";
	var $_like_escape_chr = '!';

	/**
	 * The syntax to count rows is slightly different across different
	 * database engines, so this string appears in each driver and is
	 * used for the count_all() and count_all_results() functions.
	 */
	var $_count_string = "SELECT COUNT(1) AS ";
	var $_random_keyword = ' ASC'; // not currently supported

	// Set "auto commit" by default
	var $_commit = OCI_COMMIT_ON_SUCCESS;

	// need to track statement id and cursor id
	var $stmt_id;
	var $curs_id;

	// if we use a limit, we will add a field that will
	// throw off num_fields later
	var $limit_used;

	/**
	 * Non-persistent database connection
	 *
	 * @access  private called by the base class
	 * @return  resource
	 */
	public function db_connect()
	{
		return @oci_connect($this->username, $this->password, $this->hostname, $this->char_set);
	}
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * List of reserved identifiers
	 *
	 * Identifiers that must NOT be escaped.
	 *
	 * @var	string[]
	 */
	protected $_reserved_identifiers = array('*', 'rownum');

	/**
	 * ORDER BY random keyword
	 *
	 * @var	array
	 */
	protected $_random_keyword = array('ASC', 'ASC'); // not currently supported

	/**
	 * COUNT string
	 *
	 * @used-by	CI_DB_driver::count_all()
	 * @used-by	CI_DB_query_builder::count_all_results()
	 *
	 * @var	string
	 */
	protected $_count_string = 'SELECT COUNT(1) AS ';
=======
	 * Persistent database connection
	 *
	 * @access  private called by the base class
	 * @return  resource
	 */
	public function db_pconnect()
	{
		return @oci_pconnect($this->username, $this->password, $this->hostname, $this->char_set);
	}

	// --------------------------------------------------------------------

	/**
	 * Reconnect
	 *
	 * Keep / reestablish the db connection if no queries have been
	 * sent for a length of time exceeding the server's idle timeout
	 *
	 * @access	public
	 * @return	void
	 */
	public function reconnect()
	{
		// not implemented in oracle
		return;
	}
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Class constructor
	 *
	 * @param	array	$params
	 * @return	void
	 */
	public function __construct($params)
	{
		parent::__construct($params);

		$valid_dsns = array(
			'tns'	=> '/^\(DESCRIPTION=(\(.+\)){2,}\)$/', // TNS
			// Easy Connect string (Oracle 10g+)
			'ec'	=> '/^(\/\/)?[a-z0-9.:_-]+(:[1-9][0-9]{0,4})?(\/[a-z0-9$_]+)?(:[^\/])?(\/[a-z0-9$_]+)?$/i',
			'in'	=> '/^[a-z0-9$_]+$/i' // Instance name (defined in tnsnames.ora)
		);

		/* Space characters don't have any effect when actually
		 * connecting, but can be a hassle while validating the DSN.
		 */
		$this->dsn = str_replace(array("\n", "\r", "\t", ' '), '', $this->dsn);

		if ($this->dsn !== '')
		{
			foreach ($valid_dsns as $regexp)
			{
				if (preg_match($regexp, $this->dsn))
				{
					return;
				}
			}
		}

		// Legacy support for TNS in the hostname configuration field
		$this->hostname = str_replace(array("\n", "\r", "\t", ' '), '', $this->hostname);
		if (preg_match($valid_dsns['tns'], $this->hostname))
		{
			$this->dsn = $this->hostname;
			return;
		}
		elseif ($this->hostname !== '' && strpos($this->hostname, '/') === FALSE && strpos($this->hostname, ':') === FALSE
			&& (( ! empty($this->port) && ctype_digit($this->port)) OR $this->database !== ''))
		{
			/* If the hostname field isn't empty, doesn't contain
			 * ':' and/or '/' and if port and/or database aren't
			 * empty, then the hostname field is most likely indeed
			 * just a hostname. Therefore we'll try and build an
			 * Easy Connect string from these 3 settings, assuming
			 * that the database field is a service name.
			 */
			$this->dsn = $this->hostname
				.(( ! empty($this->port) && ctype_digit($this->port)) ? ':'.$this->port : '')
				.($this->database !== '' ? '/'.ltrim($this->database, '/') : '');

			if (preg_match($valid_dsns['ec'], $this->dsn))
			{
				return;
			}
		}

		/* At this point, we can only try and validate the hostname and
		 * database fields separately as DSNs.
		 */
		if (preg_match($valid_dsns['ec'], $this->hostname) OR preg_match($valid_dsns['in'], $this->hostname))
		{
			$this->dsn = $this->hostname;
			return;
		}

		$this->database = str_replace(array("\n", "\r", "\t", ' '), '', $this->database);
		foreach ($valid_dsns as $regexp)
		{
			if (preg_match($regexp, $this->database))
			{
				return;
			}
		}

		/* Well - OK, an empty string should work as well.
		 * PHP will try to use environment variables to
		 * determine which Oracle instance to connect to.
		 */
		$this->dsn = '';
=======
	 * Select the database
	 *
	 * @access  private called by the base class
	 * @return  resource
	 */
	public function db_select()
	{
		// Not in Oracle - schemas are actually usernames
		return TRUE;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Non-persistent database connection
	 *
	 * @param	bool	$persistent
	 * @return	resource
	 */
	public function db_connect($persistent = FALSE)
	{
		$func = ($persistent === TRUE) ? 'oci_pconnect' : 'oci_connect';
		return empty($this->char_set)
			? $func($this->username, $this->password, $this->dsn)
			: $func($this->username, $this->password, $this->dsn, $this->char_set);
=======
	 * Set client character set
	 *
	 * @access	public
	 * @param	string
	 * @param	string
	 * @return	resource
	 */
	public function db_set_charset($charset, $collation)
	{
		// @todo - add support if needed
		return TRUE;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Database version number
	 *
	 * @return	string
	 */
	public function version()
	{
		if (isset($this->data_cache['version']))
		{
			return $this->data_cache['version'];
		}

		if ( ! $this->conn_id OR ($version = oci_server_version($this->conn_id)) === FALSE)
		{
			return FALSE;
		}

		return $this->data_cache['version'] = $version;
=======
	 * Version number query string
	 *
	 * @access  protected
	 * @return  string
	 */
	protected function _version()
	{
		return oci_server_version($this->conn_id);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Execute the query
	 *
<<<<<<< HEAD
	 * @param	string	$sql	an SQL query
	 * @return	resource
	 */
	protected function _execute($sql)
	{
		/* Oracle must parse the query before it is run. All of the actions with
		 * the query are based on the statement id returned by oci_parse().
		 */
		$this->stmt_id = FALSE;
		$this->_set_stmt_id($sql);
		oci_set_prefetch($this->stmt_id, 1000);
		return oci_execute($this->stmt_id, $this->commit_mode);
	}

	// --------------------------------------------------------------------

	/**
	 * Generate a statement ID
	 *
	 * @param	string	$sql	an SQL query
	 * @return	void
	 */
	protected function _set_stmt_id($sql)
	{
		if ( ! is_resource($this->stmt_id))
		{
			$this->stmt_id = oci_parse($this->conn_id, $sql);
=======
	 * @access  protected  called by the base class
	 * @param   string  an SQL query
	 * @return  resource
	 */
	protected function _execute($sql)
	{
		// oracle must parse the query before it is run. All of the actions with
		// the query are based on the statement id returned by ociparse
		$this->stmt_id = FALSE;
		$this->_set_stmt_id($sql);
		oci_set_prefetch($this->stmt_id, 1000);
		return @oci_execute($this->stmt_id, $this->_commit);
	}

	/**
	 * Generate a statement ID
	 *
	 * @access  private
	 * @param   string  an SQL query
	 * @return  none
	 */
	private function _set_stmt_id($sql)
	{
		if ( ! is_resource($this->stmt_id))
		{
			$this->stmt_id = oci_parse($this->conn_id, $this->_prep_query($sql));
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Get cursor. Returns a cursor from the database
	 *
	 * @return	resource
	 */
	public function get_cursor()
	{
		return $this->curs_id = oci_new_cursor($this->conn_id);
=======
	 * Prep the query
	 *
	 * If needed, each database adapter can prep the query string
	 *
	 * @access  private called by execute()
	 * @param   string  an SQL query
	 * @return  string
	 */
	private function _prep_query($sql)
	{
		return $sql;
	}

	// --------------------------------------------------------------------

	/**
	 * getCursor.  Returns a cursor from the datbase
	 *
	 * @access  public
	 * @return  cursor id
	 */
	public function get_cursor()
	{
		$this->curs_id = oci_new_cursor($this->conn_id);
		return $this->curs_id;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Stored Procedure.  Executes a stored procedure
	 *
<<<<<<< HEAD
	 * @param	string	package name in which the stored procedure is in
	 * @param	string	stored procedure name to execute
	 * @param	array	parameters
	 * @return	mixed
=======
	 * @access  public
	 * @param   package	 package stored procedure is in
	 * @param   procedure   stored procedure to execute
	 * @param   params	  array of parameters
	 * @return  array
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 *
	 * params array keys
	 *
	 * KEY	  OPTIONAL	NOTES
<<<<<<< HEAD
	 * name		no	the name of the parameter should be in :<param_name> format
	 * value	no	the value of the parameter.  If this is an OUT or IN OUT parameter,
	 *				this should be a reference to a variable
	 * type		yes	the type of the parameter
	 * length	yes	the max size of the parameter
	 */
	public function stored_procedure($package, $procedure, $params)
	{
		if ($package === '' OR $procedure === '' OR ! is_array($params))
		{
			log_message('error', 'Invalid query: '.$package.'.'.$procedure);
			return ($this->db_debug) ? $this->display_error('db_invalid_query') : FALSE;
		}

		// build the query string
		$sql = 'BEGIN '.$package.'.'.$procedure.'(';
=======
	 * name		no		the name of the parameter should be in :<param_name> format
	 * value	no		the value of the parameter.  If this is an OUT or IN OUT parameter,
	 *					this should be a reference to a variable
	 * type		yes		the type of the parameter
	 * length	yes		the max size of the parameter
	 */
	public function stored_procedure($package, $procedure, $params)
	{
		if ($package == '' OR $procedure == '' OR ! is_array($params))
		{
			if ($this->db_debug)
			{
				log_message('error', 'Invalid query: '.$package.'.'.$procedure);
				return $this->display_error('db_invalid_query');
			}
			return FALSE;
		}

		// build the query string
		$sql = "begin $package.$procedure(";
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

		$have_cursor = FALSE;
		foreach ($params as $param)
		{
<<<<<<< HEAD
			$sql .= $param['name'].',';

			if (isset($param['type']) && $param['type'] === OCI_B_CURSOR)
=======
			$sql .= $param['name'] . ",";

			if (array_key_exists('type', $param) && ($param['type'] === OCI_B_CURSOR))
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			{
				$have_cursor = TRUE;
			}
		}
<<<<<<< HEAD
		$sql = trim($sql, ',').'); END;';
=======
		$sql = trim($sql, ",") . "); end;";
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

		$this->stmt_id = FALSE;
		$this->_set_stmt_id($sql);
		$this->_bind_params($params);
<<<<<<< HEAD
		return $this->query($sql, FALSE, $have_cursor);
=======
		$this->query($sql, FALSE, $have_cursor);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Bind parameters
	 *
<<<<<<< HEAD
	 * @param	array	$params
	 * @return	void
	 */
	protected function _bind_params($params)
=======
	 * @access  private
	 * @return  none
	 */
	private function _bind_params($params)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	{
		if ( ! is_array($params) OR ! is_resource($this->stmt_id))
		{
			return;
		}

		foreach ($params as $param)
		{
			foreach (array('name', 'value', 'type', 'length') as $val)
			{
				if ( ! isset($param[$val]))
				{
					$param[$val] = '';
				}
			}

			oci_bind_by_name($this->stmt_id, $param['name'], $param['value'], $param['length'], $param['type']);
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Begin Transaction
	 *
<<<<<<< HEAD
	 * @param	bool	$test_mode
=======
	 * @access	public
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	bool
	 */
	public function trans_begin($test_mode = FALSE)
	{
		if ( ! $this->trans_enabled)
		{
			return TRUE;
		}

		// When transactions are nested we only begin/commit/rollback the outermost ones
		if ($this->_trans_depth > 0)
		{
			return TRUE;
		}

		// Reset the transaction failure flag.
		// If the $test_mode flag is set to TRUE transactions will be rolled back
		// even if the queries produce a successful result.
<<<<<<< HEAD
		$this->_trans_failure = ($test_mode === TRUE);

		$this->commit_mode = is_php('5.3.2') ? OCI_NO_AUTO_COMMIT : OCI_DEFAULT;
=======
		$this->_trans_failure = ($test_mode === TRUE) ? TRUE : FALSE;

		$this->_commit = OCI_DEFAULT;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		return TRUE;
	}

	// --------------------------------------------------------------------

	/**
	 * Commit Transaction
	 *
<<<<<<< HEAD
=======
	 * @access	public
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	bool
	 */
	public function trans_commit()
	{
		if ( ! $this->trans_enabled)
		{
			return TRUE;
		}

		// When transactions are nested we only begin/commit/rollback the outermost ones
		if ($this->_trans_depth > 0)
		{
			return TRUE;
		}

<<<<<<< HEAD
		$this->commit_mode = OCI_COMMIT_ON_SUCCESS;
		return oci_commit($this->conn_id);
=======
		$ret = oci_commit($this->conn_id);
		$this->_commit = OCI_COMMIT_ON_SUCCESS;
		return $ret;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Rollback Transaction
	 *
<<<<<<< HEAD
=======
	 * @access	public
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	bool
	 */
	public function trans_rollback()
	{
<<<<<<< HEAD
		// When transactions are nested we only begin/commit/rollback the outermost ones
		if ( ! $this->trans_enabled OR $this->_trans_depth > 0)
=======
		if ( ! $this->trans_enabled)
		{
			return TRUE;
		}

		// When transactions are nested we only begin/commit/rollback the outermost ones
		if ($this->_trans_depth > 0)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			return TRUE;
		}

<<<<<<< HEAD
		$this->commit_mode = OCI_COMMIT_ON_SUCCESS;
		return oci_rollback($this->conn_id);
=======
		$ret = oci_rollback($this->conn_id);
		$this->_commit = OCI_COMMIT_ON_SUCCESS;
		return $ret;
	}

	// --------------------------------------------------------------------

	/**
	 * Escape String
	 *
	 * @access  public
	 * @param   string
	 * @param	bool	whether or not the string will be used in a LIKE condition
	 * @return  string
	 */
	public function escape_str($str, $like = FALSE)
	{
		if (is_array($str))
		{
			foreach ($str as $key => $val)
			{
				$str[$key] = $this->escape_str($val, $like);
			}

			return $str;
		}

		$str = remove_invisible_characters($str);

		// escape LIKE condition wildcards
		if ($like === TRUE)
		{
			$str = str_replace(	array('%', '_', $this->_like_escape_chr),
								array($this->_like_escape_chr.'%', $this->_like_escape_chr.'_', $this->_like_escape_chr.$this->_like_escape_chr),
								$str);
		}

		return $str;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Affected Rows
	 *
<<<<<<< HEAD
	 * @return	int
	 */
	public function affected_rows()
	{
		return oci_num_rows($this->stmt_id);
=======
	 * @access  public
	 * @return  integer
	 */
	public function affected_rows()
	{
		return @oci_num_rows($this->stmt_id);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Insert ID
	 *
<<<<<<< HEAD
	 * @return	int
=======
	 * @access  public
	 * @return  integer
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	public function insert_id()
	{
		// not supported in oracle
		return $this->display_error('db_unsupported_function');
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
=======
	 * "Count All" query
	 *
	 * Generates a platform-specific query string that counts all records in
	 * the specified database
	 *
	 * @access  public
	 * @param   string
	 * @return  string
	 */
	public function count_all($table = '')
	{
		if ($table == '')
		{
			return 0;
		}

		$query = $this->query($this->_count_string . $this->_protect_identifiers('numrows') . " FROM " . $this->_protect_identifiers($table, TRUE, NULL, FALSE));

		if ($query == FALSE)
		{
			return 0;
		}

		$row = $query->row();
		$this->_reset_select();
		return (int) $row->numrows;
	}

	// --------------------------------------------------------------------

	/**
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * Show table query
	 *
	 * Generates a platform-specific query string so that the table names can be fetched
	 *
<<<<<<< HEAD
	 * @param	bool	$prefix_limit
=======
	 * @access	protected
	 * @param	boolean
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	string
	 */
	protected function _list_tables($prefix_limit = FALSE)
	{
<<<<<<< HEAD
		$sql = 'SELECT "TABLE_NAME" FROM "ALL_TABLES"';

		if ($prefix_limit !== FALSE && $this->dbprefix !== '')
		{
			return $sql.' WHERE "TABLE_NAME" LIKE \''.$this->escape_like_str($this->dbprefix)."%' "
				.sprintf($this->_like_escape_str, $this->_like_escape_chr);
=======
		$sql = "SELECT TABLE_NAME FROM ALL_TABLES";

		if ($prefix_limit !== FALSE AND $this->dbprefix != '')
		{
			$sql .= " WHERE TABLE_NAME LIKE '".$this->escape_like_str($this->dbprefix)."%' ".sprintf($this->_like_escape_str, $this->_like_escape_chr);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		return $sql;
	}

	// --------------------------------------------------------------------

	/**
	 * Show column query
	 *
	 * Generates a platform-specific query string so that the column names can be fetched
	 *
<<<<<<< HEAD
	 * @param	string	$table
	 * @return	string
	 */
	protected function _list_columns($table = '')
	{
		if (strpos($table, '.') !== FALSE)
		{
			sscanf($table, '%[^.].%s', $owner, $table);
		}
		else
		{
			$owner = $this->username;
		}

		return 'SELECT COLUMN_NAME FROM ALL_TAB_COLUMNS
			WHERE UPPER(OWNER) = '.$this->escape(strtoupper($owner)).'
				AND UPPER(TABLE_NAME) = '.$this->escape(strtoupper($table));
=======
	 * @access  protected
	 * @param   string  the table name
	 * @return  string
	 */
	protected function _list_columns($table = '')
	{
		return "SELECT COLUMN_NAME FROM all_tab_columns WHERE table_name = '$table'";
	}

	// --------------------------------------------------------------------

	/**
	 * Field data query
	 *
	 * Generates a platform-specific query so that the column data can be retrieved
	 *
	 * @access  public
	 * @param   string  the table name
	 * @return  object
	 */
	protected function _field_data($table)
	{
		return "SELECT * FROM ".$table." where rownum = 1";
	}

	// --------------------------------------------------------------------

	/**
	 * The error message string
	 *
	 * @access  protected
	 * @return  string
	 */
	protected function _error_message()
	{
		// If the error was during connection, no conn_id should be passed
		$error = is_resource($this->conn_id) ? oci_error($this->conn_id) : oci_error();
		return $error['message'];
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Returns an object with field data
	 *
	 * @param	string	$table
	 * @return	array
	 */
	public function field_data($table)
	{
		if (strpos($table, '.') !== FALSE)
		{
			sscanf($table, '%[^.].%s', $owner, $table);
		}
		else
		{
			$owner = $this->username;
		}

		$sql = 'SELECT COLUMN_NAME, DATA_TYPE, CHAR_LENGTH, DATA_PRECISION, DATA_LENGTH, DATA_DEFAULT, NULLABLE
			FROM ALL_TAB_COLUMNS
			WHERE UPPER(OWNER) = '.$this->escape(strtoupper($owner)).'
				AND UPPER(TABLE_NAME) = '.$this->escape(strtoupper($table));

		if (($query = $this->query($sql)) === FALSE)
		{
			return FALSE;
		}
		$query = $query->result_object();

		$retval = array();
		for ($i = 0, $c = count($query); $i < $c; $i++)
		{
			$retval[$i]			= new stdClass();
			$retval[$i]->name		= $query[$i]->COLUMN_NAME;
			$retval[$i]->type		= $query[$i]->DATA_TYPE;

			$length = ($query[$i]->CHAR_LENGTH > 0)
				? $query[$i]->CHAR_LENGTH : $query[$i]->DATA_PRECISION;
			if ($length === NULL)
			{
				$length = $query[$i]->DATA_LENGTH;
			}
			$retval[$i]->max_length		= $length;

			$default = $query[$i]->DATA_DEFAULT;
			if ($default === NULL && $query[$i]->NULLABLE === 'N')
			{
				$default = '';
			}
			$retval[$i]->default		= $query[$i]->COLUMN_DEFAULT;
		}

		return $retval;
=======
	 * The error message number
	 *
	 * @access  protected
	 * @return  integer
	 */
	protected function _error_number()
	{
		// Same as _error_message()
		$error = is_resource($this->conn_id) ? oci_error($this->conn_id) : oci_error();
		return $error['code'];
	}

	// --------------------------------------------------------------------

	/**
	 * Escape the SQL Identifiers
	 *
	 * This function escapes column and table names
	 *
	 * @access	protected
	 * @param	string
	 * @return	string
	 */
	protected function _escape_identifiers($item)
	{
		if ($this->_escape_char == '')
		{
			return $item;
		}

		foreach ($this->_reserved_identifiers as $id)
		{
			if (strpos($item, '.'.$id) !== FALSE)
			{
				$str = $this->_escape_char. str_replace('.', $this->_escape_char.'.', $item);

				// remove duplicates if the user already included the escape
				return preg_replace('/['.$this->_escape_char.']+/', $this->_escape_char, $str);
			}
		}

		if (strpos($item, '.') !== FALSE)
		{
			$str = $this->_escape_char.str_replace('.', $this->_escape_char.'.'.$this->_escape_char, $item).$this->_escape_char;
		}
		else
		{
			$str = $this->_escape_char.$item.$this->_escape_char;
		}

		// remove duplicates if the user already included the escape
		return preg_replace('/['.$this->_escape_char.']+/', $this->_escape_char, $str);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Error
	 *
	 * Returns an array containing code and message of the last
	 * database error that has occured.
	 *
	 * @return	array
	 */
	public function error()
	{
		/* oci_error() returns an array that already contains the
		 * 'code' and 'message' keys, so we can just return it.
		 */
		if (is_resource($this->curs_id))
		{
			return oci_error($this->curs_id);
		}
		elseif (is_resource($this->stmt_id))
		{
			return oci_error($this->stmt_id);
		}
		elseif (is_resource($this->conn_id))
		{
			return oci_error($this->conn_id);
		}

		return oci_error();
=======
	 * From Tables
	 *
	 * This function implicitly groups FROM tables so there is no confusion
	 * about operator precedence in harmony with SQL standards
	 *
	 * @access	protected
	 * @param	type
	 * @return	type
	 */
	protected function _from_tables($tables)
	{
		if ( ! is_array($tables))
		{
			$tables = array($tables);
		}

		return implode(', ', $tables);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Insert batch statement
	 *
	 * Generates a platform-specific insert string from the supplied data
	 *
	 * @param	string	$table	Table name
	 * @param	array	$keys	INSERT keys
	 * @param 	array	$values	INSERT values
	 * @return	string
=======
	 * Insert statement
	 *
	 * Generates a platform-specific insert string from the supplied data
	 *
	 * @access  public
	 * @param   string  the table name
	 * @param   array   the insert keys
	 * @param   array   the insert values
	 * @return  string
	 */
	protected function _insert($table, $keys, $values)
	{
		return "INSERT INTO ".$table." (".implode(', ', $keys).") VALUES (".implode(', ', $values).")";
	}

	// --------------------------------------------------------------------

	/**
	 * Insert_batch statement
	 *
	 * Generates a platform-specific insert string from the supplied data
	 *
	 * @access      protected
	 * @param       string  the table name
	 * @param       array   the insert keys
	 * @param       array   the insert values
	 * @return      string
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	protected function _insert_batch($table, $keys, $values)
	{
		$keys = implode(', ', $keys);
		$sql = "INSERT ALL\n";

		for ($i = 0, $c = count($values); $i < $c; $i++)
		{
<<<<<<< HEAD
			$sql .= '	INTO '.$table.' ('.$keys.') VALUES '.$values[$i]."\n";
		}

		return $sql.'SELECT * FROM dual';
=======
			$sql .= '	INTO ' . $table . ' (' . $keys . ') VALUES ' . $values[$i] . "\n";
		}

		$sql .= 'SELECT * FROM dual';

		return $sql;
	}

	// --------------------------------------------------------------------

	/**
	 * Update statement
	 *
	 * Generates a platform-specific update string from the supplied data
	 *
	 * @access	protected
	 * @param	string	the table name
	 * @param	array	the update data
	 * @param	array	the where clause
	 * @param	array	the orderby clause
	 * @param	array	the limit clause
	 * @return	string
	 */
	protected function _update($table, $values, $where, $orderby = array(), $limit = FALSE)
	{
		foreach ($values as $key => $val)
		{
			$valstr[] = $key." = ".$val;
		}

		$limit = ( ! $limit) ? '' : ' LIMIT '.$limit;

		$orderby = (count($orderby) >= 1)?' ORDER BY '.implode(", ", $orderby):'';

		$sql = "UPDATE ".$table." SET ".implode(', ', $valstr);

		$sql .= ($where != '' AND count($where) >=1) ? " WHERE ".implode(" ", $where) : '';

		$sql .= $orderby.$limit;

		return $sql;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Truncate statement
	 *
	 * Generates a platform-specific truncate string from the supplied data
<<<<<<< HEAD
	 *
	 * If the database does not support the TRUNCATE statement,
	 * then this method maps to 'DELETE FROM table'
	 *
	 * @param	string	$table
=======
	 * If the database does not support the truncate() command
	 * This function maps to "DELETE FROM table"
	 *
	 * @access	protected
	 * @param	string	the table name
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	string
	 */
	protected function _truncate($table)
	{
<<<<<<< HEAD
		return 'TRUNCATE TABLE '.$table;
=======
		return "TRUNCATE TABLE ".$table;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Delete statement
	 *
	 * Generates a platform-specific delete string from the supplied data
	 *
<<<<<<< HEAD
	 * @param	string	$table
	 * @return	string
	 */
	protected function _delete($table)
	{
		if ($this->qb_limit)
		{
			$this->where('rownum <= ',$this->qb_limit, FALSE);
			$this->qb_limit = FALSE;
		}

		return parent::_delete($table);
=======
	 * @access	protected
	 * @param	string	the table name
	 * @param	array	the where clause
	 * @param	string	the limit clause
	 * @return	string
	 */
	protected function _delete($table, $where = array(), $like = array(), $limit = FALSE)
	{
		$conditions = '';

		if (count($where) > 0 OR count($like) > 0)
		{
			$conditions = "\nWHERE ";
			$conditions .= implode("\n", $this->ar_where);

			if (count($where) > 0 && count($like) > 0)
			{
				$conditions .= " AND ";
			}
			$conditions .= implode("\n", $like);
		}

		$limit = ( ! $limit) ? '' : ' LIMIT '.$limit;

		return "DELETE FROM ".$table.$conditions.$limit;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * LIMIT
	 *
	 * Generates a platform-specific LIMIT clause
	 *
	 * @param	string	$sql	SQL Query
	 * @return	string
	 */
	protected function _limit($sql)
	{
		$this->limit_used = TRUE;
		return 'SELECT * FROM (SELECT inner_query.*, rownum rnum FROM ('.$sql.') inner_query WHERE rownum < '.($this->qb_offset + $this->qb_limit + 1).')'
			.($this->qb_offset ? ' WHERE rnum >= '.($this->qb_offset + 1) : '');
=======
	 * Limit string
	 *
	 * Generates a platform-specific LIMIT clause
	 *
	 * @access  protected
	 * @param   string  the sql query string
	 * @param   integer the number of rows to limit the query to
	 * @param   integer the offset value
	 * @return  string
	 */
	protected function _limit($sql, $limit, $offset)
	{
		$limit = $offset + $limit;
		$newsql = "SELECT * FROM (select inner_query.*, rownum rnum FROM ($sql) inner_query WHERE rownum < $limit)";

		if ($offset != 0)
		{
			$newsql .= " WHERE rnum >= $offset";
		}

		// remember that we used limits
		$this->limit_used = TRUE;

		return $newsql;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Close DB Connection
	 *
<<<<<<< HEAD
	 * @return	void
	 */
	protected function _close()
	{
		oci_close($this->conn_id);
	}

}
=======
	 * @access  protected
	 * @param   resource
	 * @return  void
	 */
	protected function _close($conn_id)
	{
		@oci_close($conn_id);
	}


}



/* End of file oci8_driver.php */
/* Location: ./system/database/drivers/oci8/oci8_driver.php */
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
