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

/**
 * Benchmark Class
 *
 * This class enables you to mark points and calculate the time difference
 * between them. Memory consumption can also be displayed.
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

/**
 * CodeIgniter Benchmark Class
 *
 * This class enables you to mark points and calculate the time difference
 * between them.  Memory consumption can also be displayed.
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
<<<<<<< HEAD
 * @author		EllisLab Dev Team
=======
 * @author		ExpressionEngine Dev Team
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
 * @link		http://codeigniter.com/user_guide/libraries/benchmark.html
 */
class CI_Benchmark {

	/**
<<<<<<< HEAD
	 * List of all benchmark markers
	 *
	 * @var	array
	 */
	public $marker = array();
=======
	 * List of all benchmark markers and when they were added
	 *
	 * @var array
	 */
	var $marker = array();

	// --------------------------------------------------------------------
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

	/**
	 * Set a benchmark marker
	 *
	 * Multiple calls to this function can be made so that several
<<<<<<< HEAD
	 * execution points can be timed.
	 *
	 * @param	string	$name	Marker name
	 * @return	void
	 */
	public function mark($name)
	{
		$this->marker[$name] = microtime(TRUE);
=======
	 * execution points can be timed
	 *
	 * @access	public
	 * @param	string	$name	name of the marker
	 * @return	void
	 */
	function mark($name)
	{
		$this->marker[$name] = microtime();
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Elapsed time
	 *
=======
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * Calculates the time difference between two marked points.
	 *
	 * If the first parameter is empty this function instead returns the
	 * {elapsed_time} pseudo-variable. This permits the full system
	 * execution time to be shown in a template. The output class will
	 * swap the real value for this variable.
	 *
<<<<<<< HEAD
	 * @param	string	$point1		A particular marked point
	 * @param	string	$point2		A particular marked point
	 * @param	int	$decimals	Number of decimal places
	 *
	 * @return	string	Calculated elapsed time on success,
	 *			an '{elapsed_string}' if $point1 is empty
	 *			or an empty string if $point1 is not found.
	 */
	public function elapsed_time($point1 = '', $point2 = '', $decimals = 4)
	{
		if ($point1 === '')
=======
	 * @access	public
	 * @param	string	a particular marked point
	 * @param	string	a particular marked point
	 * @param	integer	the number of decimal places
	 * @return	mixed
	 */
	function elapsed_time($point1 = '', $point2 = '', $decimals = 4)
	{
		if ($point1 == '')
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			return '{elapsed_time}';
		}

		if ( ! isset($this->marker[$point1]))
		{
			return '';
		}

		if ( ! isset($this->marker[$point2]))
		{
<<<<<<< HEAD
			$this->marker[$point2] = microtime(TRUE);
		}

		return number_format($this->marker[$point2] - $this->marker[$point1], $decimals);
=======
			$this->marker[$point2] = microtime();
		}

		list($sm, $ss) = explode(' ', $this->marker[$point1]);
		list($em, $es) = explode(' ', $this->marker[$point2]);

		return number_format(($em + $es) - ($sm + $ss), $decimals);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Memory Usage
	 *
<<<<<<< HEAD
	 * Simply returns the {memory_usage} marker.
	 *
=======
	 * This function returns the {memory_usage} pseudo-variable.
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * This permits it to be put it anywhere in a template
	 * without the memory being calculated until the end.
	 * The output class will swap the real value for this variable.
	 *
<<<<<<< HEAD
	 * @return	string	'{memory_usage}'
	 */
	public function memory_usage()
=======
	 * @access	public
	 * @return	string
	 */
	function memory_usage()
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	{
		return '{memory_usage}';
	}

}
<<<<<<< HEAD
=======

// END CI_Benchmark class

/* End of file Benchmark.php */
/* Location: ./system/core/Benchmark.php */
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
