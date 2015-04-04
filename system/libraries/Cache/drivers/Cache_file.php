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
 * @since	Version 2.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter File Caching Class
=======
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 4.3.2 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2006 - 2012 EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 2.0
 * @filesource	
 */

// ------------------------------------------------------------------------

/**
 * CodeIgniter Memcached Caching Class 
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Core
<<<<<<< HEAD
 * @author		EllisLab Dev Team
 * @link
 */
class CI_Cache_file extends CI_Driver {

	/**
	 * Directory in which to save cache files
	 *
	 * @var string
	 */
	protected $_cache_path;

	/**
	 * Initialize file-based cache
	 *
	 * @return	void
=======
 * @author		ExpressionEngine Dev Team
 * @link		
 */

class CI_Cache_file extends CI_Driver {

	protected $_cache_path;

	/**
	 * Constructor
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	public function __construct()
	{
		$CI =& get_instance();
		$CI->load->helper('file');
<<<<<<< HEAD
		$path = $CI->config->item('cache_path');
		$this->_cache_path = ($path === '') ? APPPATH.'cache/' : $path;
=======
		
		$path = $CI->config->item('cache_path');
	
		$this->_cache_path = ($path == '') ? APPPATH.'cache/' : $path;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// ------------------------------------------------------------------------

	/**
	 * Fetch from cache
	 *
<<<<<<< HEAD
	 * @param	string	$id	Cache ID
	 * @return	mixed	Data on success, FALSE on failure
	 */
	public function get($id)
	{
		$data = $this->_get($id);
		return is_array($data) ? $data['data'] : FALSE;
=======
	 * @param 	mixed		unique key id
	 * @return 	mixed		data on success/false on failure
	 */
	public function get($id)
	{
		if ( ! file_exists($this->_cache_path.$id))
		{
			return FALSE;
		}
		
		$data = read_file($this->_cache_path.$id);
		$data = unserialize($data);
		
		if (time() >  $data['time'] + $data['ttl'])
		{
			unlink($this->_cache_path.$id);
			return FALSE;
		}
		
		return $data['data'];
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// ------------------------------------------------------------------------

	/**
	 * Save into cache
	 *
<<<<<<< HEAD
	 * @param	string	$id	Cache ID
	 * @param	mixed	$data	Data to store
	 * @param	int	$ttl	Time to live in seconds
	 * @param	bool	$raw	Whether to store the raw value (unused)
	 * @return	bool	TRUE on success, FALSE on failure
	 */
	public function save($id, $data, $ttl = 60, $raw = FALSE)
	{
		$contents = array(
			'time'		=> time(),
			'ttl'		=> $ttl,
			'data'		=> $data
		);

		if (write_file($this->_cache_path.$id, serialize($contents)))
		{
			chmod($this->_cache_path.$id, 0640);
			return TRUE;
=======
	 * @param 	string		unique key
	 * @param 	mixed		data to store
	 * @param 	int			length of time (in seconds) the cache is valid 
	 *						- Default is 60 seconds
	 * @return 	boolean		true on success/false on failure
	 */
	public function save($id, $data, $ttl = 60)
	{		
		$contents = array(
				'time'		=> time(),
				'ttl'		=> $ttl,			
				'data'		=> $data
			);
		
		if (write_file($this->_cache_path.$id, serialize($contents)))
		{
			@chmod($this->_cache_path.$id, 0777);
			return TRUE;			
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		return FALSE;
	}

	// ------------------------------------------------------------------------

	/**
	 * Delete from Cache
	 *
<<<<<<< HEAD
	 * @param	mixed	unique identifier of item in cache
	 * @return	bool	true on success/false on failure
	 */
	public function delete($id)
	{
		return file_exists($this->_cache_path.$id) ? unlink($this->_cache_path.$id) : FALSE;
	}

	// ------------------------------------------------------------------------

	/**
	 * Increment a raw value
	 *
	 * @param	string	$id	Cache ID
	 * @param	int	$offset	Step/value to add
	 * @return	New value on success, FALSE on failure
	 */
	public function increment($id, $offset = 1)
	{
		$data = $this->_get($id);

		if ($data === FALSE)
		{
			$data = array('data' => 0, 'ttl' => 60);
		}
		elseif ( ! is_int($data['data']))
		{
			return FALSE;
		}

		$new_value = $data['data'] + $offset;
		return $this->save($id, $new_value, $data['ttl'])
			? $new_value
			: FALSE;
	}

	// ------------------------------------------------------------------------

	/**
	 * Decrement a raw value
	 *
	 * @param	string	$id	Cache ID
	 * @param	int	$offset	Step/value to reduce by
	 * @return	New value on success, FALSE on failure
	 */
	public function decrement($id, $offset = 1)
	{
		$data = $this->_get($id);

		if ($data === FALSE)
		{
			$data = array('data' => 0, 'ttl' => 60);
		}
		elseif ( ! is_int($data['data']))
		{
			return FALSE;
		}

		$new_value = $data['data'] - $offset;
		return $this->save($id, $new_value, $data['ttl'])
			? $new_value
			: FALSE;
=======
	 * @param 	mixed		unique identifier of item in cache
	 * @return 	boolean		true on success/false on failure
	 */
	public function delete($id)
	{
		return unlink($this->_cache_path.$id);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// ------------------------------------------------------------------------

	/**
	 * Clean the Cache
	 *
<<<<<<< HEAD
	 * @return	bool	false on failure/true on success
	 */
	public function clean()
	{
		return delete_files($this->_cache_path, FALSE, TRUE);
=======
	 * @return 	boolean		false on failure/true on success
	 */	
	public function clean()
	{
		return delete_files($this->_cache_path);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// ------------------------------------------------------------------------

	/**
	 * Cache Info
	 *
	 * Not supported by file-based caching
	 *
<<<<<<< HEAD
	 * @param	string	user/filehits
	 * @return	mixed	FALSE
=======
	 * @param 	string	user/filehits
	 * @return 	mixed 	FALSE
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	public function cache_info($type = NULL)
	{
		return get_dir_file_info($this->_cache_path);
	}

	// ------------------------------------------------------------------------

	/**
	 * Get Cache Metadata
	 *
<<<<<<< HEAD
	 * @param	mixed	key to get cache metadata on
	 * @return	mixed	FALSE on failure, array on success.
=======
	 * @param 	mixed		key to get cache metadata on
	 * @return 	mixed		FALSE on failure, array on success.
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	public function get_metadata($id)
	{
		if ( ! file_exists($this->_cache_path.$id))
		{
			return FALSE;
		}

<<<<<<< HEAD
		$data = unserialize(file_get_contents($this->_cache_path.$id));
=======
		$data = read_file($this->_cache_path.$id);
		$data = unserialize($data);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

		if (is_array($data))
		{
			$mtime = filemtime($this->_cache_path.$id);

			if ( ! isset($data['ttl']))
			{
				return FALSE;
			}

			return array(
<<<<<<< HEAD
				'expire' => $mtime + $data['ttl'],
				'mtime'	 => $mtime
=======
				'expire'	=> $mtime + $data['ttl'],
				'mtime'		=> $mtime
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			);
		}

		return FALSE;
	}

	// ------------------------------------------------------------------------

	/**
	 * Is supported
	 *
	 * In the file driver, check to see that the cache directory is indeed writable
<<<<<<< HEAD
	 *
	 * @return	bool
=======
	 * 
	 * @return boolean
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	public function is_supported()
	{
		return is_really_writable($this->_cache_path);
	}

	// ------------------------------------------------------------------------
<<<<<<< HEAD

	/**
	 * Get all data
	 *
	 * Internal method to get all the relevant data about a cache item
	 *
	 * @param	string	$id	Cache ID
	 * @return	mixed	Data array on success or FALSE on failure
	 */
	protected function _get($id)
	{
		if ( ! file_exists($this->_cache_path.$id))
		{
			return FALSE;
		}

		$data = unserialize(file_get_contents($this->_cache_path.$id));

		if ($data['ttl'] > 0 && time() > $data['time'] + $data['ttl'])
		{
			unlink($this->_cache_path.$id);
			return FALSE;
		}

		return $data;
	}

}
=======
}
// End Class

/* End of file Cache_file.php */
/* Location: ./system/libraries/Cache/drivers/Cache_file.php */
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
