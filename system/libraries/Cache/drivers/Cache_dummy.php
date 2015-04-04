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
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

/**
 * CodeIgniter Dummy Caching Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Core
<<<<<<< HEAD
 * @author		EllisLab Dev Team
 * @link
 */
=======
 * @author		ExpressionEngine Dev Team
 * @link
 */

>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
class CI_Cache_dummy extends CI_Driver {

	/**
	 * Get
	 *
	 * Since this is the dummy class, it's always going to return FALSE.
	 *
<<<<<<< HEAD
	 * @param	string
	 * @return	bool	FALSE
=======
	 * @param 	string
	 * @return 	Boolean		FALSE
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	public function get($id)
	{
		return FALSE;
	}

	// ------------------------------------------------------------------------

	/**
	 * Cache Save
	 *
<<<<<<< HEAD
	 * @param	string	Unique Key
	 * @param	mixed	Data to store
	 * @param	int	Length of time (in seconds) to cache the data
	 * @param	bool	Whether to store the raw value
	 * @return	bool	TRUE, Simulating success
	 */
	public function save($id, $data, $ttl = 60, $raw = FALSE)
=======
	 * @param 	string		Unique Key
	 * @param 	mixed		Data to store
	 * @param 	int			Length of time (in seconds) to cache the data
	 *
	 * @return 	boolean		TRUE, Simulating success
	 */
	public function save($id, $data, $ttl = 60)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	{
		return TRUE;
	}

	// ------------------------------------------------------------------------

	/**
	 * Delete from Cache
	 *
<<<<<<< HEAD
	 * @param	mixed	unique identifier of the item in the cache
	 * @return	bool	TRUE, simulating success
=======
	 * @param 	mixed		unique identifier of the item in the cache
	 * @param 	boolean		TRUE, simulating success
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	public function delete($id)
	{
		return TRUE;
	}

	// ------------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Increment a raw value
	 *
	 * @param	string	$id	Cache ID
	 * @param	int	$offset	Step/value to add
	 * @return	mixed	New value on success or FALSE on failure
	 */
	public function increment($id, $offset = 1)
	{
		return TRUE;
	}

	// ------------------------------------------------------------------------

	/**
	 * Decrement a raw value
	 *
	 * @param	string	$id	Cache ID
	 * @param	int	$offset	Step/value to reduce by
	 * @return	mixed	New value on success or FALSE on failure
	 */
	public function decrement($id, $offset = 1)
	{
		return TRUE;
	}

	// ------------------------------------------------------------------------

	/**
	 * Clean the cache
	 *
	 * @return	bool	TRUE, simulating success
=======
	 * Clean the cache
	 *
	 * @return 	boolean		TRUE, simulating success
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	public function clean()
	{
		return TRUE;
	}

	// ------------------------------------------------------------------------

	/**
	 * Cache Info
	 *
<<<<<<< HEAD
	 * @param	string	user/filehits
	 * @return	bool	FALSE
=======
	 * @param 	string		user/filehits
	 * @return 	boolean		FALSE
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	 public function cache_info($type = NULL)
	 {
		 return FALSE;
	 }

	// ------------------------------------------------------------------------

	/**
	 * Get Cache Metadata
	 *
<<<<<<< HEAD
	 * @param	mixed	key to get cache metadata on
	 * @return	bool	FALSE
=======
	 * @param 	mixed		key to get cache metadata on
	 * @return 	boolean		FALSE
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	public function get_metadata($id)
	{
		return FALSE;
	}

	// ------------------------------------------------------------------------

	/**
	 * Is this caching driver supported on the system?
	 * Of course this one is.
	 *
<<<<<<< HEAD
	 * @return	bool	TRUE
=======
	 * @return TRUE;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	public function is_supported()
	{
		return TRUE;
	}

<<<<<<< HEAD
}
=======
	// ------------------------------------------------------------------------

}
// End Class

/* End of file Cache_dummy.php */
/* Location: ./system/libraries/Cache/drivers/Cache_dummy.php */
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
