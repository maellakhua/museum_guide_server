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
 * CodeIgniter Inflector Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
<<<<<<< HEAD
 * @author		EllisLab Dev Team
 * @link		http://codeigniter.com/user_guide/helpers/inflector_helper.html
 */

// --------------------------------------------------------------------

if ( ! function_exists('singular'))
{
	/**
	 * Singular
	 *
	 * Takes a plural word and makes it singular
	 *
	 * @param	string	$str	Input string
	 * @return	string
	 */
=======
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/helpers/directory_helper.html
 */


// --------------------------------------------------------------------

/**
 * Singular
 *
 * Takes a plural word and makes it singular
 *
 * @access	public
 * @param	string
 * @return	str
 */
if ( ! function_exists('singular'))
{
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	function singular($str)
	{
		$result = strval($str);

<<<<<<< HEAD
		if ( ! is_countable($result))
		{
			return $result;
		}

		$singular_rules = array(
			'/(matr)ices$/'		=> '\1ix',
			'/(vert|ind)ices$/'	=> '\1ex',
			'/^(ox)en/'		=> '\1',
			'/(alias)es$/'		=> '\1',
			'/([octop|vir])i$/'	=> '\1us',
			'/(cris|ax|test)es$/'	=> '\1is',
			'/(shoe)s$/'		=> '\1',
			'/(o)es$/'		=> '\1',
			'/(bus|campus)es$/'	=> '\1',
			'/([m|l])ice$/'		=> '\1ouse',
			'/(x|ch|ss|sh)es$/'	=> '\1',
			'/(m)ovies$/'		=> '\1\2ovie',
			'/(s)eries$/'		=> '\1\2eries',
			'/([^aeiouy]|qu)ies$/'	=> '\1y',
			'/([lr])ves$/'		=> '\1f',
			'/(tive)s$/'		=> '\1',
			'/(hive)s$/'		=> '\1',
			'/([^f])ves$/'		=> '\1fe',
			'/(^analy)ses$/'	=> '\1sis',
			'/((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/' => '\1\2sis',
			'/([ti])a$/'		=> '\1um',
			'/(p)eople$/'		=> '\1\2erson',
			'/(m)en$/'		=> '\1an',
			'/(s)tatuses$/'		=> '\1\2tatus',
			'/(c)hildren$/'		=> '\1\2hild',
			'/(n)ews$/'		=> '\1\2ews',
			'/([^us])s$/'		=> '\1'
		);

=======
		$singular_rules = array(
			'/(matr)ices$/'         => '\1ix',
			'/(vert|ind)ices$/'     => '\1ex',
			'/^(ox)en/'             => '\1',
			'/(alias)es$/'          => '\1',
			'/([octop|vir])i$/'     => '\1us',
			'/(cris|ax|test)es$/'   => '\1is',
			'/(shoe)s$/'            => '\1',
			'/(o)es$/'              => '\1',
			'/(bus|campus)es$/'     => '\1',
			'/([m|l])ice$/'         => '\1ouse',
			'/(x|ch|ss|sh)es$/'     => '\1',
			'/(m)ovies$/'           => '\1\2ovie',
			'/(s)eries$/'           => '\1\2eries',
			'/([^aeiouy]|qu)ies$/'  => '\1y',
			'/([lr])ves$/'          => '\1f',
			'/(tive)s$/'            => '\1',
			'/(hive)s$/'            => '\1',
			'/([^f])ves$/'          => '\1fe',
			'/(^analy)ses$/'        => '\1sis',
			'/((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/' => '\1\2sis',
			'/([ti])a$/'            => '\1um',
			'/(p)eople$/'           => '\1\2erson',
			'/(m)en$/'              => '\1an',
			'/(s)tatuses$/'         => '\1\2tatus',
			'/(c)hildren$/'         => '\1\2hild',
			'/(n)ews$/'             => '\1\2ews',
			'/([^u])s$/'            => '\1',
		);
		
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		foreach ($singular_rules as $rule => $replacement)
		{
			if (preg_match($rule, $result))
			{
				$result = preg_replace($rule, $replacement, $result);
				break;
			}
		}

		return $result;
	}
}

// --------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('plural'))
{
	/**
	 * Plural
	 *
	 * Takes a singular word and makes it plural
	 *
	 * @param	string	$str	Input string
	 * @return	string
	 */
	function plural($str)
	{
		$result = strval($str);

		if ( ! is_countable($result))
		{
			return $result;
		}

=======
/**
 * Plural
 *
 * Takes a singular word and makes it plural
 *
 * @access	public
 * @param	string
 * @param	bool
 * @return	str
 */
if ( ! function_exists('plural'))
{
	function plural($str, $force = FALSE)
	{
		$result = strval($str);
	
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		$plural_rules = array(
			'/^(ox)$/'                 => '\1\2en',     // ox
			'/([m|l])ouse$/'           => '\1ice',      // mouse, louse
			'/(matr|vert|ind)ix|ex$/'  => '\1ices',     // matrix, vertex, index
			'/(x|ch|ss|sh)$/'          => '\1es',       // search, switch, fix, box, process, address
			'/([^aeiouy]|qu)y$/'       => '\1ies',      // query, ability, agency
			'/(hive)$/'                => '\1s',        // archive, hive
			'/(?:([^f])fe|([lr])f)$/'  => '\1\2ves',    // half, safe, wife
			'/sis$/'                   => 'ses',        // basis, diagnosis
			'/([ti])um$/'              => '\1a',        // datum, medium
			'/(p)erson$/'              => '\1eople',    // person, salesperson
			'/(m)an$/'                 => '\1en',       // man, woman, spokesman
			'/(c)hild$/'               => '\1hildren',  // child
			'/(buffal|tomat)o$/'       => '\1\2oes',    // buffalo, tomato
			'/(bu|campu)s$/'           => '\1\2ses',    // bus, campus
<<<<<<< HEAD
			'/(alias|status|virus)$/'  => '\1es',       // alias
=======
			'/(alias|status|virus)/'   => '\1es',       // alias
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			'/(octop)us$/'             => '\1i',        // octopus
			'/(ax|cris|test)is$/'      => '\1es',       // axis, crisis
			'/s$/'                     => 's',          // no change (compatibility)
			'/$/'                      => 's',
		);

		foreach ($plural_rules as $rule => $replacement)
		{
			if (preg_match($rule, $result))
			{
				$result = preg_replace($rule, $replacement, $result);
				break;
			}
		}

		return $result;
	}
}

// --------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('camelize'))
{
	/**
	 * Camelize
	 *
	 * Takes multiple words separated by spaces or underscores and camelizes them
	 *
	 * @param	string	$str	Input string
	 * @return	string
	 */
	function camelize($str)
	{
		return strtolower($str[0]).substr(str_replace(' ', '', ucwords(preg_replace('/[\s_]+/', ' ', $str))), 1);
=======
/**
 * Camelize
 *
 * Takes multiple words separated by spaces or underscores and camelizes them
 *
 * @access	public
 * @param	string
 * @return	str
 */
if ( ! function_exists('camelize'))
{
	function camelize($str)
	{
		$str = 'x'.strtolower(trim($str));
		$str = ucwords(preg_replace('/[\s_]+/', ' ', $str));
		return substr(str_replace(' ', '', $str), 1);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}
}

// --------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('underscore'))
{
	/**
	 * Underscore
	 *
	 * Takes multiple words separated by spaces and underscores them
	 *
	 * @param	string	$str	Input string
	 * @return	string
	 */
	function underscore($str)
	{
		return preg_replace('/[\s]+/', '_', trim(MB_ENABLED ? mb_strtolower($str) : strtolower($str)));
=======
/**
 * Underscore
 *
 * Takes multiple words separated by spaces and underscores them
 *
 * @access	public
 * @param	string
 * @return	str
 */
if ( ! function_exists('underscore'))
{
	function underscore($str)
	{
		return preg_replace('/[\s]+/', '_', strtolower(trim($str)));
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}
}

// --------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('humanize'))
{
	/**
	 * Humanize
	 *
	 * Takes multiple words separated by the separator and changes them to spaces
	 *
	 * @param	string	$str		Input string
	 * @param 	string	$separator	Input separator
	 * @return	string
	 */
	function humanize($str, $separator = '_')
	{
		return ucwords(preg_replace('/['.$separator.']+/', ' ', trim(MB_ENABLED ? mb_strtolower($str) : strtolower($str))));
	}
}

// --------------------------------------------------------------------

if ( ! function_exists('is_countable'))
{
	/**
	 * Checks if the given word has a plural version.
	 *
	 * @param	string	$word	Word to check
	 * @return	bool
	 */
	function is_countable($word)
	{
		return ! in_array(
			strtolower($word),
			array(
				'equipment', 'information', 'rice', 'money',
				'species', 'series', 'fish', 'meta'
			)
		);
	}
}
=======
/**
 * Humanize
 *
 * Takes multiple words separated by underscores and changes them to spaces
 *
 * @access	public
 * @param	string
 * @return	str
 */
if ( ! function_exists('humanize'))
{
	function humanize($str)
	{
		return ucwords(preg_replace('/[_]+/', ' ', strtolower(trim($str))));
	}
}


/* End of file inflector_helper.php */
/* Location: ./system/helpers/inflector_helper.php */
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
