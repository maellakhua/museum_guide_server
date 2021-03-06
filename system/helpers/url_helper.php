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
 * CodeIgniter URL Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
<<<<<<< HEAD
 * @author		EllisLab Dev Team
=======
 * @author		ExpressionEngine Dev Team
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
 * @link		http://codeigniter.com/user_guide/helpers/url_helper.html
 */

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('site_url'))
{
	/**
	 * Site URL
	 *
	 * Create a local URL based on your basepath. Segments can be passed via the
	 * first parameter either as a string or an array.
	 *
	 * @param	string	$uri
	 * @param	string	$protocol
	 * @return	string
	 */
	function site_url($uri = '', $protocol = NULL)
	{
		return get_instance()->config->site_url($uri, $protocol);
=======
/**
 * Site URL
 *
 * Create a local URL based on your basepath. Segments can be passed via the
 * first parameter either as a string or an array.
 *
 * @access	public
 * @param	string
 * @return	string
 */
if ( ! function_exists('site_url'))
{
	function site_url($uri = '')
	{
		$CI =& get_instance();
		return $CI->config->site_url($uri);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('base_url'))
{
	/**
	 * Base URL
	 *
	 * Create a local URL based on your basepath.
	 * Segments can be passed in as a string or an array, same as site_url
	 * or a URL to a file can be passed in, e.g. to an image file.
	 *
	 * @param	string	$uri
	 * @param	string	$protocol
	 * @return	string
	 */
	function base_url($uri = '', $protocol = NULL)
	{
		return get_instance()->config->base_url($uri, $protocol);
=======
/**
 * Base URL
 * 
 * Create a local URL based on your basepath.
 * Segments can be passed in as a string or an array, same as site_url
 * or a URL to a file can be passed in, e.g. to an image file.
 *
 * @access	public
 * @param string
 * @return	string
 */
if ( ! function_exists('base_url'))
{
	function base_url($uri = '')
	{
		$CI =& get_instance();
		return $CI->config->base_url($uri);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('current_url'))
{
	/**
	 * Current URL
	 *
	 * Returns the full URL (including segments) of the page where this
	 * function is placed
	 *
	 * @return	string
	 */
=======
/**
 * Current URL
 *
 * Returns the full URL (including segments) of the page where this
 * function is placed
 *
 * @access	public
 * @return	string
 */
if ( ! function_exists('current_url'))
{
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	function current_url()
	{
		$CI =& get_instance();
		return $CI->config->site_url($CI->uri->uri_string());
	}
}

// ------------------------------------------------------------------------
<<<<<<< HEAD

if ( ! function_exists('uri_string'))
{
	/**
	 * URL String
	 *
	 * Returns the URI segments.
	 *
	 * @return	string
	 */
	function uri_string()
	{
		return get_instance()->uri->uri_string();
=======
/**
 * URL String
 *
 * Returns the URI segments.
 *
 * @access	public
 * @return	string
 */
if ( ! function_exists('uri_string'))
{
	function uri_string()
	{
		$CI =& get_instance();
		return $CI->uri->uri_string();
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('index_page'))
{
	/**
	 * Index page
	 *
	 * Returns the "index_page" from your config file
	 *
	 * @return	string
	 */
	function index_page()
	{
		return get_instance()->config->item('index_page');
=======
/**
 * Index page
 *
 * Returns the "index_page" from your config file
 *
 * @access	public
 * @return	string
 */
if ( ! function_exists('index_page'))
{
	function index_page()
	{
		$CI =& get_instance();
		return $CI->config->item('index_page');
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('anchor'))
{
	/**
	 * Anchor Link
	 *
	 * Creates an anchor based on the local URL.
	 *
	 * @param	string	the URL
	 * @param	string	the link title
	 * @param	mixed	any attributes
	 * @return	string
	 */
=======
/**
 * Anchor Link
 *
 * Creates an anchor based on the local URL.
 *
 * @access	public
 * @param	string	the URL
 * @param	string	the link title
 * @param	mixed	any attributes
 * @return	string
 */
if ( ! function_exists('anchor'))
{
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	function anchor($uri = '', $title = '', $attributes = '')
	{
		$title = (string) $title;

<<<<<<< HEAD
		$site_url = is_array($uri)
			? site_url($uri)
			: preg_match('#^(\w+:)?//#i', $uri) ? $uri : site_url($uri);

		if ($title === '')
=======
		if ( ! is_array($uri))
		{
			$site_url = ( ! preg_match('!^\w+://! i', $uri)) ? site_url($uri) : $uri;
		}
		else
		{
			$site_url = site_url($uri);
		}

		if ($title == '')
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$title = $site_url;
		}

<<<<<<< HEAD
		if ($attributes !== '')
		{
			$attributes = _stringify_attributes($attributes);
=======
		if ($attributes != '')
		{
			$attributes = _parse_attributes($attributes);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		return '<a href="'.$site_url.'"'.$attributes.'>'.$title.'</a>';
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('anchor_popup'))
{
	/**
	 * Anchor Link - Pop-up version
	 *
	 * Creates an anchor based on the local URL. The link
	 * opens a new window based on the attributes specified.
	 *
	 * @param	string	the URL
	 * @param	string	the link title
	 * @param	mixed	any attributes
	 * @return	string
	 */
	function anchor_popup($uri = '', $title = '', $attributes = FALSE)
	{
		$title = (string) $title;
		$site_url = preg_match('#^(\w+:)?//#i', $uri) ? $uri : site_url($uri);

		if ($title === '')
=======
/**
 * Anchor Link - Pop-up version
 *
 * Creates an anchor based on the local URL. The link
 * opens a new window based on the attributes specified.
 *
 * @access	public
 * @param	string	the URL
 * @param	string	the link title
 * @param	mixed	any attributes
 * @return	string
 */
if ( ! function_exists('anchor_popup'))
{
	function anchor_popup($uri = '', $title = '', $attributes = FALSE)
	{
		$title = (string) $title;

		$site_url = ( ! preg_match('!^\w+://! i', $uri)) ? site_url($uri) : $uri;

		if ($title == '')
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$title = $site_url;
		}

		if ($attributes === FALSE)
		{
<<<<<<< HEAD
			return '<a href="'.$site_url.'" onclick="window.open(\''.$site_url."', '_blank'); return false;\">".$title.'</a>';
=======
			return "<a href='javascript:void(0);' onclick=\"window.open('".$site_url."', '_blank');\">".$title."</a>";
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		if ( ! is_array($attributes))
		{
<<<<<<< HEAD
			$attributes = array($attributes);

			// Ref: http://www.w3schools.com/jsref/met_win_open.asp
			$window_name = '_blank';
		}
		elseif ( ! empty($attributes['window_name']))
		{
			$window_name = $attributes['window_name'];
			unset($attributes['window_name']);
		}
		else
		{
			$window_name = '_blank';
		}

		foreach (array('width' => '800', 'height' => '600', 'scrollbars' => 'yes', 'menubar' => 'no', 'status' => 'yes', 'resizable' => 'yes', 'screenx' => '0', 'screeny' => '0') as $key => $val)
		{
			$atts[$key] = isset($attributes[$key]) ? $attributes[$key] : $val;
			unset($attributes[$key]);
		}

		$attributes = _stringify_attributes($attributes);

		return '<a href="'.$site_url
			.'" onclick="window.open(\''.$site_url."', '".$window_name."', '"._stringify_attributes($atts, TRUE)."'); return false;\""
			.$attributes.'>'.$title.'</a>';
=======
			$attributes = array();
		}

		foreach (array('width' => '800', 'height' => '600', 'scrollbars' => 'yes', 'status' => 'yes', 'resizable' => 'yes', 'screenx' => '0', 'screeny' => '0', ) as $key => $val)
		{
			$atts[$key] = ( ! isset($attributes[$key])) ? $val : $attributes[$key];
			unset($attributes[$key]);
		}

		if ($attributes != '')
		{
			$attributes = _parse_attributes($attributes);
		}

		return "<a href='javascript:void(0);' onclick=\"window.open('".$site_url."', '_blank', '"._parse_attributes($atts, TRUE)."');\"$attributes>".$title."</a>";
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('mailto'))
{
	/**
	 * Mailto Link
	 *
	 * @param	string	the email address
	 * @param	string	the link title
	 * @param	mixed	any attributes
	 * @return	string
	 */
=======
/**
 * Mailto Link
 *
 * @access	public
 * @param	string	the email address
 * @param	string	the link title
 * @param	mixed	any attributes
 * @return	string
 */
if ( ! function_exists('mailto'))
{
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	function mailto($email, $title = '', $attributes = '')
	{
		$title = (string) $title;

<<<<<<< HEAD
		if ($title === '')
=======
		if ($title == "")
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$title = $email;
		}

<<<<<<< HEAD
		return '<a href="mailto:'.$email.'"'._stringify_attributes($attributes).'>'.$title.'</a>';
=======
		$attributes = _parse_attributes($attributes);

		return '<a href="mailto:'.$email.'"'.$attributes.'>'.$title.'</a>';
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('safe_mailto'))
{
	/**
	 * Encoded Mailto Link
	 *
	 * Create a spam-protected mailto link written in Javascript
	 *
	 * @param	string	the email address
	 * @param	string	the link title
	 * @param	mixed	any attributes
	 * @return	string
	 */
=======
/**
 * Encoded Mailto Link
 *
 * Create a spam-protected mailto link written in Javascript
 *
 * @access	public
 * @param	string	the email address
 * @param	string	the link title
 * @param	mixed	any attributes
 * @return	string
 */
if ( ! function_exists('safe_mailto'))
{
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	function safe_mailto($email, $title = '', $attributes = '')
	{
		$title = (string) $title;

<<<<<<< HEAD
		if ($title === '')
=======
		if ($title == "")
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$title = $email;
		}

<<<<<<< HEAD
		$x = str_split('<a href="mailto:', 1);

		for ($i = 0, $l = strlen($email); $i < $l; $i++)
		{
			$x[] = '|'.ord($email[$i]);
=======
		for ($i = 0; $i < 16; $i++)
		{
			$x[] = substr('<a href="mailto:', $i, 1);
		}

		for ($i = 0; $i < strlen($email); $i++)
		{
			$x[] = "|".ord(substr($email, $i, 1));
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		$x[] = '"';

<<<<<<< HEAD
		if ($attributes !== '')
=======
		if ($attributes != '')
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			if (is_array($attributes))
			{
				foreach ($attributes as $key => $val)
				{
<<<<<<< HEAD
					$x[] = ' '.$key.'="';
					for ($i = 0, $l = strlen($val); $i < $l; $i++)
					{
						$x[] = '|'.ord($val[$i]);
=======
					$x[] =  ' '.$key.'="';
					for ($i = 0; $i < strlen($val); $i++)
					{
						$x[] = "|".ord(substr($val, $i, 1));
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
					}
					$x[] = '"';
				}
			}
			else
			{
<<<<<<< HEAD
				for ($i = 0, $l = strlen($attributes); $i < $l; $i++)
				{
					$x[] = $attributes[$i];
=======
				for ($i = 0; $i < strlen($attributes); $i++)
				{
					$x[] = substr($attributes, $i, 1);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
				}
			}
		}

		$x[] = '>';

		$temp = array();
<<<<<<< HEAD
		for ($i = 0, $l = strlen($title); $i < $l; $i++)
=======
		for ($i = 0; $i < strlen($title); $i++)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$ordinal = ord($title[$i]);

			if ($ordinal < 128)
			{
<<<<<<< HEAD
				$x[] = '|'.$ordinal;
			}
			else
			{
				if (count($temp) === 0)
=======
				$x[] = "|".$ordinal;
			}
			else
			{
				if (count($temp) == 0)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
				{
					$count = ($ordinal < 224) ? 2 : 3;
				}

				$temp[] = $ordinal;
<<<<<<< HEAD
				if (count($temp) === $count)
				{
					$number = ($count === 3)
							? (($temp[0] % 16) * 4096) + (($temp[1] % 64) * 64) + ($temp[2] % 64)
							: (($temp[0] % 32) * 64) + ($temp[1] % 64);
					$x[] = '|'.$number;
=======
				if (count($temp) == $count)
				{
					$number = ($count == 3) ? (($temp['0'] % 16) * 4096) + (($temp['1'] % 64) * 64) + ($temp['2'] % 64) : (($temp['0'] % 32) * 64) + ($temp['1'] % 64);
					$x[] = "|".$number;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
					$count = 1;
					$temp = array();
				}
			}
		}

		$x[] = '<'; $x[] = '/'; $x[] = 'a'; $x[] = '>';

		$x = array_reverse($x);
<<<<<<< HEAD

		$output = "<script type=\"text/javascript\">\n"
			."\t//<![CDATA[\n"
			."\tvar l=new Array();\n";

		for ($i = 0, $c = count($x); $i < $c; $i++)
		{
			$output .= "\tl[".$i."] = '".$x[$i]."';\n";
		}

		$output .= "\n\tfor (var i = l.length-1; i >= 0; i=i-1) {\n"
			."\t\tif (l[i].substring(0, 1) === '|') document.write(\"&#\"+unescape(l[i].substring(1))+\";\");\n"
			."\t\telse document.write(unescape(l[i]));\n"
			."\t}\n"
			."\t//]]>\n"
			.'</script>';

		return $output;
=======
		ob_start();

	?><script type="text/javascript">
	//<![CDATA[
	var l=new Array();
	<?php
	$i = 0;
	foreach ($x as $val){ ?>l[<?php echo $i++; ?>]='<?php echo $val; ?>';<?php } ?>

	for (var i = l.length-1; i >= 0; i=i-1){
	if (l[i].substring(0, 1) == '|') document.write("&#"+unescape(l[i].substring(1))+";");
	else document.write(unescape(l[i]));}
	//]]>
	</script><?php

		$buffer = ob_get_contents();
		ob_end_clean();
		return $buffer;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('auto_link'))
{
	/**
	 * Auto-linker
	 *
	 * Automatically links URL and Email addresses.
	 * Note: There's a bit of extra code here to deal with
	 * URLs or emails that end in a period. We'll strip these
	 * off and add them after the link.
	 *
	 * @param	string	the string
	 * @param	string	the type: email, url, or both
	 * @param	bool	whether to create pop-up links
	 * @return	string
	 */
	function auto_link($str, $type = 'both', $popup = FALSE)
	{
		// Find and replace any URLs.
		if ($type !== 'email' && preg_match_all('#(\w*://|www\.)[^\s()<>;]+\w#i', $str, $matches, PREG_OFFSET_CAPTURE | PREG_SET_ORDER))
		{
			// Set our target HTML if using popup links.
			$target = ($popup) ? ' target="_blank"' : '';

			// We process the links in reverse order (last -> first) so that
			// the returned string offsets from preg_match_all() are not
			// moved as we add more HTML.
			foreach (array_reverse($matches) as $match)
			{
				// $match[0] is the matched string/link
				// $match[1] is either a protocol prefix or 'www.'
				//
				// With PREG_OFFSET_CAPTURE, both of the above is an array,
				// where the actual value is held in [0] and its offset at the [1] index.
				$a = '<a href="'.(strpos($match[1][0], '/') ? '' : 'http://').$match[0][0].'"'.$target.'>'.$match[0][0].'</a>';
				$str = substr_replace($str, $a, $match[0][1], strlen($match[0][0]));
			}
		}

		// Find and replace any emails.
		if ($type !== 'url' && preg_match_all('#([\w\.\-\+]+@[a-z0-9\-]+\.[a-z0-9\-\.]+[^[:punct:]\s])#i', $str, $matches, PREG_OFFSET_CAPTURE))
		{
			foreach (array_reverse($matches[0]) as $match)
			{
				if (filter_var($match[0], FILTER_VALIDATE_EMAIL) !== FALSE)
				{
					$str = substr_replace($str, safe_mailto($match[0]), $match[1], strlen($match[0]));
=======
/**
 * Auto-linker
 *
 * Automatically links URL and Email addresses.
 * Note: There's a bit of extra code here to deal with
 * URLs or emails that end in a period.  We'll strip these
 * off and add them after the link.
 *
 * @access	public
 * @param	string	the string
 * @param	string	the type: email, url, or both
 * @param	bool	whether to create pop-up links
 * @return	string
 */
if ( ! function_exists('auto_link'))
{
	function auto_link($str, $type = 'both', $popup = FALSE)
	{
		if ($type != 'email')
		{
			if (preg_match_all("#(^|\s|\()((http(s?)://)|(www\.))(\w+[^\s\)\<]+)#i", $str, $matches))
			{
				$pop = ($popup == TRUE) ? " target=\"_blank\" " : "";

				for ($i = 0; $i < count($matches['0']); $i++)
				{
					$period = '';
					if (preg_match("|\.$|", $matches['6'][$i]))
					{
						$period = '.';
						$matches['6'][$i] = substr($matches['6'][$i], 0, -1);
					}

					$str = str_replace($matches['0'][$i],
										$matches['1'][$i].'<a href="http'.
										$matches['4'][$i].'://'.
										$matches['5'][$i].
										$matches['6'][$i].'"'.$pop.'>http'.
										$matches['4'][$i].'://'.
										$matches['5'][$i].
										$matches['6'][$i].'</a>'.
										$period, $str);
				}
			}
		}

		if ($type != 'url')
		{
			if (preg_match_all("/([a-zA-Z0-9_\.\-\+]+)@([a-zA-Z0-9\-]+)\.([a-zA-Z0-9\-\.]*)/i", $str, $matches))
			{
				for ($i = 0; $i < count($matches['0']); $i++)
				{
					$period = '';
					if (preg_match("|\.$|", $matches['3'][$i]))
					{
						$period = '.';
						$matches['3'][$i] = substr($matches['3'][$i], 0, -1);
					}

					$str = str_replace($matches['0'][$i], safe_mailto($matches['1'][$i].'@'.$matches['2'][$i].'.'.$matches['3'][$i]).$period, $str);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
				}
			}
		}

		return $str;
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('prep_url'))
{
	/**
	 * Prep URL
	 *
	 * Simply adds the http:// part if no scheme is included
	 *
	 * @param	string	the URL
	 * @return	string
	 */
	function prep_url($str = '')
	{
		if ($str === 'http://' OR $str === '')
=======
/**
 * Prep URL
 *
 * Simply adds the http:// part if no scheme is included
 *
 * @access	public
 * @param	string	the URL
 * @return	string
 */
if ( ! function_exists('prep_url'))
{
	function prep_url($str = '')
	{
		if ($str == 'http://' OR $str == '')
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			return '';
		}

		$url = parse_url($str);

		if ( ! $url OR ! isset($url['scheme']))
		{
<<<<<<< HEAD
			return 'http://'.$str;
=======
			$str = 'http://'.$str;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		return $str;
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('url_title'))
{
	/**
	 * Create URL Title
	 *
	 * Takes a "title" string as input and creates a
	 * human-friendly URL string with a "separator" string
	 * as the word separator.
	 *
	 * @todo	Remove old 'dash' and 'underscore' usage in 3.1+.
	 * @param	string	$str		Input string
	 * @param	string	$separator	Word separator
	 *			(usually '-' or '_')
	 * @param	bool	$lowercase	Wether to transform the output string to lowercase
	 * @return	string
	 */
	function url_title($str, $separator = '-', $lowercase = FALSE)
	{
		if ($separator === 'dash')
		{
			$separator = '-';
		}
		elseif ($separator === 'underscore')
		{
			$separator = '_';
		}

		$q_separator = preg_quote($separator, '#');

		$trans = array(
			'&.+?;'			=> '',
			'[^a-z0-9 _-]'		=> '',
			'\s+'			=> $separator,
			'('.$q_separator.')+'	=> $separator
		);

		$str = strip_tags($str);
		foreach ($trans as $key => $val)
		{
			$str = preg_replace('#'.$key.'#i', $val, $str);
=======
/**
 * Create URL Title
 *
 * Takes a "title" string as input and creates a
 * human-friendly URL string with a "separator" string 
 * as the word separator.
 *
 * @access	public
 * @param	string	the string
 * @param	string	the separator
 * @return	string
 */
if ( ! function_exists('url_title'))
{
	function url_title($str, $separator = '-', $lowercase = FALSE)
	{
		if ($separator == 'dash') 
		{
		    $separator = '-';
		}
		else if ($separator == 'underscore')
		{
		    $separator = '_';
		}
		
		$q_separator = preg_quote($separator);

		$trans = array(
			'&.+?;'                 => '',
			'[^a-z0-9 _-]'          => '',
			'\s+'                   => $separator,
			'('.$q_separator.')+'   => $separator
		);

		$str = strip_tags($str);

		foreach ($trans as $key => $val)
		{
			$str = preg_replace("#".$key."#i", $val, $str);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		if ($lowercase === TRUE)
		{
			$str = strtolower($str);
		}

<<<<<<< HEAD
		return trim(trim($str, $separator));
=======
		return trim($str, $separator);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('redirect'))
{
	/**
	 * Header Redirect
	 *
	 * Header redirect in two flavors
	 * For very fine grained control over headers, you could use the Output
	 * Library's set_header() function.
	 *
	 * @param	string	$uri	URL
	 * @param	string	$method	Redirect method
	 *			'auto', 'location' or 'refresh'
	 * @param	int	$code	HTTP Response status code
	 * @return	void
	 */
	function redirect($uri = '', $method = 'auto', $code = NULL)
	{
		if ( ! preg_match('#^(\w+:)?//#i', $uri))
=======
/**
 * Header Redirect
 *
 * Header redirect in two flavors
 * For very fine grained control over headers, you could use the Output
 * Library's set_header() function.
 *
 * @access	public
 * @param	string	the URL
 * @param	string	the method: location or redirect
 * @return	string
 */
if ( ! function_exists('redirect'))
{
	function redirect($uri = '', $method = 'location', $http_response_code = 302)
	{
		if ( ! preg_match('#^https?://#i', $uri))
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$uri = site_url($uri);
		}

<<<<<<< HEAD
		// IIS environment likely? Use 'refresh' for better compatibility
		if ($method === 'auto' && isset($_SERVER['SERVER_SOFTWARE']) && strpos($_SERVER['SERVER_SOFTWARE'], 'Microsoft-IIS') !== FALSE)
		{
			$method = 'refresh';
		}
		elseif ($method !== 'refresh' && (empty($code) OR ! is_numeric($code)))
		{
			if (isset($_SERVER['SERVER_PROTOCOL'], $_SERVER['REQUEST_METHOD']) && $_SERVER['SERVER_PROTOCOL'] === 'HTTP/1.1')
			{
				$code = ($_SERVER['REQUEST_METHOD'] !== 'GET')
					? 303	// reference: http://en.wikipedia.org/wiki/Post/Redirect/Get
					: 307;
			}
			else
			{
				$code = 302;
			}
		}

		switch ($method)
		{
			case 'refresh':
				header('Refresh:0;url='.$uri);
				break;
			default:
				header('Location: '.$uri, TRUE, $code);
				break;
		}
		exit;
	}
}
=======
		switch($method)
		{
			case 'refresh'	: header("Refresh:0;url=".$uri);
				break;
			default			: header("Location: ".$uri, TRUE, $http_response_code);
				break;
		}
		exit;
	}
}

// ------------------------------------------------------------------------

/**
 * Parse out the attributes
 *
 * Some of the functions use this
 *
 * @access	private
 * @param	array
 * @param	bool
 * @return	string
 */
if ( ! function_exists('_parse_attributes'))
{
	function _parse_attributes($attributes, $javascript = FALSE)
	{
		if (is_string($attributes))
		{
			return ($attributes != '') ? ' '.$attributes : '';
		}

		$att = '';
		foreach ($attributes as $key => $val)
		{
			if ($javascript == TRUE)
			{
				$att .= $key . '=' . $val . ',';
			}
			else
			{
				$att .= ' ' . $key . '="' . $val . '"';
			}
		}

		if ($javascript == TRUE AND $att != '')
		{
			$att = substr($att, 0, -1);
		}

		return $att;
	}
}


/* End of file url_helper.php */
/* Location: ./system/helpers/url_helper.php */
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
