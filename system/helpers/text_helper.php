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
 * CodeIgniter Text Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
<<<<<<< HEAD
 * @author		EllisLab Dev Team
=======
 * @author		ExpressionEngine Dev Team
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
 * @link		http://codeigniter.com/user_guide/helpers/text_helper.html
 */

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('word_limiter'))
{
	/**
	 * Word Limiter
	 *
	 * Limits a string to X number of words.
	 *
	 * @param	string
	 * @param	int
	 * @param	string	the end character. Usually an ellipsis
	 * @return	string
	 */
	function word_limiter($str, $limit = 100, $end_char = '&#8230;')
	{
		if (trim($str) === '')
=======
/**
 * Word Limiter
 *
 * Limits a string to X number of words.
 *
 * @access	public
 * @param	string
 * @param	integer
 * @param	string	the end character. Usually an ellipsis
 * @return	string
 */
if ( ! function_exists('word_limiter'))
{
	function word_limiter($str, $limit = 100, $end_char = '&#8230;')
	{
		if (trim($str) == '')
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			return $str;
		}

		preg_match('/^\s*+(?:\S++\s*+){1,'.(int) $limit.'}/', $str, $matches);

<<<<<<< HEAD
		if (strlen($str) === strlen($matches[0]))
=======
		if (strlen($str) == strlen($matches[0]))
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$end_char = '';
		}

		return rtrim($matches[0]).$end_char;
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('character_limiter'))
{
	/**
	 * Character Limiter
	 *
	 * Limits the string based on the character count.  Preserves complete words
	 * so the character count may not be exactly as specified.
	 *
	 * @param	string
	 * @param	int
	 * @param	string	the end character. Usually an ellipsis
	 * @return	string
	 */
	function character_limiter($str, $n = 500, $end_char = '&#8230;')
	{
		if (mb_strlen($str) < $n)
=======
/**
 * Character Limiter
 *
 * Limits the string based on the character count.  Preserves complete words
 * so the character count may not be exactly as specified.
 *
 * @access	public
 * @param	string
 * @param	integer
 * @param	string	the end character. Usually an ellipsis
 * @return	string
 */
if ( ! function_exists('character_limiter'))
{
	function character_limiter($str, $n = 500, $end_char = '&#8230;')
	{
		if (strlen($str) < $n)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			return $str;
		}

<<<<<<< HEAD
		// a bit complicated, but faster than preg_replace with \s+
		$str = preg_replace('/ {2,}/', ' ', str_replace(array("\r", "\n", "\t", "\x0B", "\x0C"), ' ', $str));

		if (mb_strlen($str) <= $n)
=======
		$str = preg_replace("/\s+/", ' ', str_replace(array("\r\n", "\r", "\n"), ' ', $str));

		if (strlen($str) <= $n)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			return $str;
		}

<<<<<<< HEAD
		$out = '';
=======
		$out = "";
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		foreach (explode(' ', trim($str)) as $val)
		{
			$out .= $val.' ';

<<<<<<< HEAD
			if (mb_strlen($out) >= $n)
			{
				$out = trim($out);
				return (mb_strlen($out) === mb_strlen($str)) ? $out : $out.$end_char;
=======
			if (strlen($out) >= $n)
			{
				$out = trim($out);
				return (strlen($out) == strlen($str)) ? $out : $out.$end_char;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			}
		}
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('ascii_to_entities'))
{
	/**
	 * High ASCII to Entities
	 *
	 * Converts high ASCII text and MS Word special characters to character entities
	 *
	 * @param	string	$str
	 * @return	string
	 */
	function ascii_to_entities($str)
	{
		$out = '';
		for ($i = 0, $s = strlen($str) - 1, $count = 1, $temp = array(); $i <= $s; $i++)
=======
/**
 * High ASCII to Entities
 *
 * Converts High ascii text and MS Word special characters to character entities
 *
 * @access	public
 * @param	string
 * @return	string
 */
if ( ! function_exists('ascii_to_entities'))
{
	function ascii_to_entities($str)
	{
		$count	= 1;
		$out	= '';
		$temp	= array();

		for ($i = 0, $s = strlen($str); $i < $s; $i++)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$ordinal = ord($str[$i]);

			if ($ordinal < 128)
			{
				/*
					If the $temp array has a value but we have moved on, then it seems only
					fair that we output that entity and restart $temp before continuing. -Paul
				*/
<<<<<<< HEAD
				if (count($temp) === 1)
				{
					$out .= '&#'.array_shift($temp).';';
=======
				if (count($temp) == 1)
				{
					$out  .= '&#'.array_shift($temp).';';
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
					$count = 1;
				}

				$out .= $str[$i];
			}
			else
			{
<<<<<<< HEAD
				if (count($temp) === 0)
=======
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
=======
				if (count($temp) == $count)
				{
					$number = ($count == 3) ? (($temp['0'] % 16) * 4096) + (($temp['1'] % 64) * 64) + ($temp['2'] % 64) : (($temp['0'] % 32) * 64) + ($temp['1'] % 64);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

					$out .= '&#'.$number.';';
					$count = 1;
					$temp = array();
				}
<<<<<<< HEAD
				// If this is the last iteration, just output whatever we have
				elseif ($i === $s)
				{
					$out .= '&#'.implode(';', $temp).';';
				}
=======
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			}
		}

		return $out;
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('entities_to_ascii'))
{
	/**
	 * Entities to ASCII
	 *
	 * Converts character entities back to ASCII
	 *
	 * @param	string
	 * @param	bool
	 * @return	string
	 */
=======
/**
 * Entities to ASCII
 *
 * Converts character entities back to ASCII
 *
 * @access	public
 * @param	string
 * @param	bool
 * @return	string
 */
if ( ! function_exists('entities_to_ascii'))
{
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	function entities_to_ascii($str, $all = TRUE)
	{
		if (preg_match_all('/\&#(\d+)\;/', $str, $matches))
		{
<<<<<<< HEAD
			for ($i = 0, $s = count($matches[0]); $i < $s; $i++)
			{
				$digits = $matches[1][$i];
=======
			for ($i = 0, $s = count($matches['0']); $i < $s; $i++)
			{
				$digits = $matches['1'][$i];

>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
				$out = '';

				if ($digits < 128)
				{
					$out .= chr($digits);

				}
				elseif ($digits < 2048)
				{
<<<<<<< HEAD
					$out .= chr(192 + (($digits - ($digits % 64)) / 64)).chr(128 + ($digits % 64));
				}
				else
				{
					$out .= chr(224 + (($digits - ($digits % 4096)) / 4096))
						.chr(128 + ((($digits % 4096) - ($digits % 64)) / 64))
						.chr(128 + ($digits % 64));
				}

				$str = str_replace($matches[0][$i], $out, $str);
=======
					$out .= chr(192 + (($digits - ($digits % 64)) / 64));
					$out .= chr(128 + ($digits % 64));
				}
				else
				{
					$out .= chr(224 + (($digits - ($digits % 4096)) / 4096));
					$out .= chr(128 + ((($digits % 4096) - ($digits % 64)) / 64));
					$out .= chr(128 + ($digits % 64));
				}

				$str = str_replace($matches['0'][$i], $out, $str);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			}
		}

		if ($all)
		{
<<<<<<< HEAD
			return str_replace(
				array('&amp;', '&lt;', '&gt;', '&quot;', '&apos;', '&#45;'),
				array('&', '<', '>', '"', "'", '-'),
				$str
			);
=======
			$str = str_replace(array("&amp;", "&lt;", "&gt;", "&quot;", "&apos;", "&#45;"),
								array("&","<",">","\"", "'", "-"),
								$str);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		return $str;
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('word_censor'))
{
	/**
	 * Word Censoring Function
	 *
	 * Supply a string and an array of disallowed words and any
	 * matched words will be converted to #### or to the replacement
	 * word you've submitted.
	 *
	 * @param	string	the text string
	 * @param	string	the array of censoered words
	 * @param	string	the optional replacement value
	 * @return	string
	 */
=======
/**
 * Word Censoring Function
 *
 * Supply a string and an array of disallowed words and any
 * matched words will be converted to #### or to the replacement
 * word you've submitted.
 *
 * @access	public
 * @param	string	the text string
 * @param	string	the array of censoered words
 * @param	string	the optional replacement value
 * @return	string
 */
if ( ! function_exists('word_censor'))
{
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	function word_censor($str, $censored, $replacement = '')
	{
		if ( ! is_array($censored))
		{
			return $str;
		}

		$str = ' '.$str.' ';

		// \w, \b and a few others do not match on a unicode character
		// set for performance reasons. As a result words like über
		// will not match on a word boundary. Instead, we'll assume that
		// a bad word will be bookeneded by any of these characters.
		$delim = '[-_\'\"`(){}<>\[\]|!?@#%&,.:;^~*+=\/ 0-9\n\r\t]';

		foreach ($censored as $badword)
		{
<<<<<<< HEAD
			if ($replacement !== '')
=======
			if ($replacement != '')
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			{
				$str = preg_replace("/({$delim})(".str_replace('\*', '\w*?', preg_quote($badword, '/')).")({$delim})/i", "\\1{$replacement}\\3", $str);
			}
			else
			{
				$str = preg_replace("/({$delim})(".str_replace('\*', '\w*?', preg_quote($badword, '/')).")({$delim})/ie", "'\\1'.str_repeat('#', strlen('\\2')).'\\3'", $str);
			}
		}

		return trim($str);
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('highlight_code'))
{
	/**
	 * Code Highlighter
	 *
	 * Colorizes code strings
	 *
	 * @param	string	the text string
	 * @return	string
	 */
	function highlight_code($str)
	{
		/* The highlight string function encodes and highlights
		 * brackets so we need them to start raw.
		 *
		 * Also replace any existing PHP tags to temporary markers
		 * so they don't accidentally break the string out of PHP,
		 * and thus, thwart the highlighting.
		 */
		$str = str_replace(
			array('&lt;', '&gt;', '<?', '?>', '<%', '%>', '\\', '</script>'),
			array('<', '>', 'phptagopen', 'phptagclose', 'asptagopen', 'asptagclose', 'backslashtmp', 'scriptclose'),
			$str
		);

		// The highlight_string function requires that the text be surrounded
		// by PHP tags, which we will remove later
		$str = highlight_string('<?php '.$str.' ?>', TRUE);

		// Remove our artificially added PHP, and the syntax highlighting that came with it
		$str = preg_replace(
			array(
				'/<span style="color: #([A-Z0-9]+)">&lt;\?php(&nbsp;| )/i',
				'/(<span style="color: #[A-Z0-9]+">.*?)\?&gt;<\/span>\n<\/span>\n<\/code>/is',
				'/<span style="color: #[A-Z0-9]+"\><\/span>/i'
			),
			array(
				'<span style="color: #$1">',
				"$1</span>\n</span>\n</code>",
				''
			),
			$str
		);

		// Replace our markers back to PHP tags.
		return str_replace(
			array('phptagopen', 'phptagclose', 'asptagopen', 'asptagclose', 'backslashtmp', 'scriptclose'),
			array('&lt;?', '?&gt;', '&lt;%', '%&gt;', '\\', '&lt;/script&gt;'),
			$str
		);
=======
/**
 * Code Highlighter
 *
 * Colorizes code strings
 *
 * @access	public
 * @param	string	the text string
 * @return	string
 */
if ( ! function_exists('highlight_code'))
{
	function highlight_code($str)
	{
		// The highlight string function encodes and highlights
		// brackets so we need them to start raw
		$str = str_replace(array('&lt;', '&gt;'), array('<', '>'), $str);

		// Replace any existing PHP tags to temporary markers so they don't accidentally
		// break the string out of PHP, and thus, thwart the highlighting.

		$str = str_replace(array('<?', '?>', '<%', '%>', '\\', '</script>'),
							array('phptagopen', 'phptagclose', 'asptagopen', 'asptagclose', 'backslashtmp', 'scriptclose'), $str);

		// The highlight_string function requires that the text be surrounded
		// by PHP tags, which we will remove later
		$str = '<?php '.$str.' ?>'; // <?

		// All the magic happens here, baby!
		$str = highlight_string($str, TRUE);

		// Prior to PHP 5, the highligh function used icky <font> tags
		// so we'll replace them with <span> tags.

		if (abs(PHP_VERSION) < 5)
		{
			$str = str_replace(array('<font ', '</font>'), array('<span ', '</span>'), $str);
			$str = preg_replace('#color="(.*?)"#', 'style="color: \\1"', $str);
		}

		// Remove our artificially added PHP, and the syntax highlighting that came with it
		$str = preg_replace('/<span style="color: #([A-Z0-9]+)">&lt;\?php(&nbsp;| )/i', '<span style="color: #$1">', $str);
		$str = preg_replace('/(<span style="color: #[A-Z0-9]+">.*?)\?&gt;<\/span>\n<\/span>\n<\/code>/is', "$1</span>\n</span>\n</code>", $str);
		$str = preg_replace('/<span style="color: #[A-Z0-9]+"\><\/span>/i', '', $str);

		// Replace our markers back to PHP tags.
		$str = str_replace(array('phptagopen', 'phptagclose', 'asptagopen', 'asptagclose', 'backslashtmp', 'scriptclose'),
							array('&lt;?', '?&gt;', '&lt;%', '%&gt;', '\\', '&lt;/script&gt;'), $str);

		return $str;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('highlight_phrase'))
{
	/**
	 * Phrase Highlighter
	 *
	 * Highlights a phrase within a text string
	 *
	 * @param	string	$str		the text string
	 * @param	string	$phrase		the phrase you'd like to highlight
	 * @param	string	$tag_open	the openging tag to precede the phrase with
	 * @param	string	$tag_close	the closing tag to end the phrase with
	 * @return	string
	 */
	function highlight_phrase($str, $phrase, $tag_open = '<mark>', $tag_close = '</mark>')
	{
		return ($str !== '' && $phrase !== '')
			? preg_replace('/('.preg_quote($phrase, '/').')/i'.(UTF8_ENABLED ? 'u' : ''), $tag_open.'\\1'.$tag_close, $str)
			: $str;
=======
/**
 * Phrase Highlighter
 *
 * Highlights a phrase within a text string
 *
 * @access	public
 * @param	string	the text string
 * @param	string	the phrase you'd like to highlight
 * @param	string	the openging tag to precede the phrase with
 * @param	string	the closing tag to end the phrase with
 * @return	string
 */
if ( ! function_exists('highlight_phrase'))
{
	function highlight_phrase($str, $phrase, $tag_open = '<strong>', $tag_close = '</strong>')
	{
		if ($str == '')
		{
			return '';
		}

		if ($phrase != '')
		{
			return preg_replace('/('.preg_quote($phrase, '/').')/i', $tag_open."\\1".$tag_close, $str);
		}

		return $str;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('convert_accented_characters'))
{
	/**
	 * Convert Accented Foreign Characters to ASCII
	 *
	 * @param	string	$str	Input string
	 * @return	string
	 */
	function convert_accented_characters($str)
	{
		static $array_from, $array_to;

		if ( ! is_array($array_from))
		{
			if (file_exists(APPPATH.'config/foreign_chars.php'))
			{
				include(APPPATH.'config/foreign_chars.php');
			}

			if (file_exists(APPPATH.'config/'.ENVIRONMENT.'/foreign_chars.php'))
			{
				include(APPPATH.'config/'.ENVIRONMENT.'/foreign_chars.php');
			}

			if (empty($foreign_characters) OR ! is_array($foreign_characters))
			{
				$array_from = array();
				$array_to = array();

				return $str;
			}

			$array_from = array_keys($foreign_characters);
			$array_to = array_values($foreign_characters);
		}

		return preg_replace($array_from, $array_to, $str);
=======
/**
 * Convert Accented Foreign Characters to ASCII
 *
 * @access	public
 * @param	string	the text string
 * @return	string
 */
if ( ! function_exists('convert_accented_characters'))
{
	function convert_accented_characters($str)
	{
		if (defined('ENVIRONMENT') AND is_file(APPPATH.'config/'.ENVIRONMENT.'/foreign_chars.php'))
		{
			include(APPPATH.'config/'.ENVIRONMENT.'/foreign_chars.php');
		}
		elseif (is_file(APPPATH.'config/foreign_chars.php'))
		{
			include(APPPATH.'config/foreign_chars.php');
		}

		if ( ! isset($foreign_characters))
		{
			return $str;
		}

		return preg_replace(array_keys($foreign_characters), array_values($foreign_characters), $str);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('word_wrap'))
{
	/**
	 * Word Wrap
	 *
	 * Wraps text at the specified character. Maintains the integrity of words.
	 * Anything placed between {unwrap}{/unwrap} will not be word wrapped, nor
	 * will URLs.
	 *
	 * @param	string	$str		the text string
	 * @param	int	$charlim = 76	the number of characters to wrap at
	 * @return	string
	 */
	function word_wrap($str, $charlim = 76)
	{
		// Set the character limit
		is_numeric($charlim) OR $charlim = 76;

		// Reduce multiple spaces
		$str = preg_replace('| +|', ' ', $str);
=======
/**
 * Word Wrap
 *
 * Wraps text at the specified character.  Maintains the integrity of words.
 * Anything placed between {unwrap}{/unwrap} will not be word wrapped, nor
 * will URLs.
 *
 * @access	public
 * @param	string	the text string
 * @param	integer	the number of characters to wrap at
 * @return	string
 */
if ( ! function_exists('word_wrap'))
{
	function word_wrap($str, $charlim = '76')
	{
		// Se the character limit
		if ( ! is_numeric($charlim))
			$charlim = 76;

		// Reduce multiple spaces
		$str = preg_replace("| +|", " ", $str);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

		// Standardize newlines
		if (strpos($str, "\r") !== FALSE)
		{
			$str = str_replace(array("\r\n", "\r"), "\n", $str);
		}

		// If the current word is surrounded by {unwrap} tags we'll
		// strip the entire chunk and replace it with a marker.
		$unwrap = array();
<<<<<<< HEAD
		if (preg_match_all('|\{unwrap\}(.+?)\{/unwrap\}|s', $str, $matches))
		{
			for ($i = 0, $c = count($matches[0]); $i < $c; $i++)
			{
				$unwrap[] = $matches[1][$i];
				$str = str_replace($matches[0][$i], '{{unwrapped'.$i.'}}', $str);
=======
		if (preg_match_all("|(\{unwrap\}.+?\{/unwrap\})|s", $str, $matches))
		{
			for ($i = 0; $i < count($matches['0']); $i++)
			{
				$unwrap[] = $matches['1'][$i];
				$str = str_replace($matches['1'][$i], "{{unwrapped".$i."}}", $str);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			}
		}

		// Use PHP's native function to do the initial wordwrap.
		// We set the cut flag to FALSE so that any individual words that are
<<<<<<< HEAD
		// too long get left alone. In the next step we'll deal with them.
		$str = wordwrap($str, $charlim, "\n", FALSE);

		// Split the string into individual lines of text and cycle through them
		$output = '';
=======
		// too long get left alone.  In the next step we'll deal with them.
		$str = wordwrap($str, $charlim, "\n", FALSE);

		// Split the string into individual lines of text and cycle through them
		$output = "";
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		foreach (explode("\n", $str) as $line)
		{
			// Is the line within the allowed character count?
			// If so we'll join it to the output and continue
<<<<<<< HEAD
			if (mb_strlen($line) <= $charlim)
=======
			if (strlen($line) <= $charlim)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			{
				$output .= $line."\n";
				continue;
			}

			$temp = '';
<<<<<<< HEAD
			while (mb_strlen($line) > $charlim)
			{
				// If the over-length word is a URL we won't wrap it
				if (preg_match('!\[url.+\]|://|www\.!', $line))
=======
			while ((strlen($line)) > $charlim)
			{
				// If the over-length word is a URL we won't wrap it
				if (preg_match("!\[url.+\]|://|wwww.!", $line))
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
				{
					break;
				}

				// Trim the word down
<<<<<<< HEAD
				$temp .= mb_substr($line, 0, $charlim - 1);
				$line = mb_substr($line, $charlim - 1);
=======
				$temp .= substr($line, 0, $charlim-1);
				$line = substr($line, $charlim-1);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			}

			// If $temp contains data it means we had to split up an over-length
			// word into smaller chunks so we'll add it back to our current line
<<<<<<< HEAD
			if ($temp !== '')
			{
				$output .= $temp."\n".$line."\n";
			}
			else
			{
				$output .= $line."\n";
			}
=======
			if ($temp != '')
			{
				$output .= $temp."\n".$line;
			}
			else
			{
				$output .= $line;
			}

			$output .= "\n";
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		// Put our markers back
		if (count($unwrap) > 0)
		{
			foreach ($unwrap as $key => $val)
			{
<<<<<<< HEAD
				$output = str_replace('{{unwrapped'.$key.'}}', $val, $output);
			}
		}

=======
				$output = str_replace("{{unwrapped".$key."}}", $val, $output);
			}
		}

		// Remove the unwrap tags
		$output = str_replace(array('{unwrap}', '{/unwrap}'), '', $output);

>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		return $output;
	}
}

// ------------------------------------------------------------------------

<<<<<<< HEAD
if ( ! function_exists('ellipsize'))
{
	/**
	 * Ellipsize String
	 *
	 * This function will strip tags from a string, split it at its max_length and ellipsize
	 *
	 * @param	string	string to ellipsize
	 * @param	int	max length of string
	 * @param	mixed	int (1|0) or float, .5, .2, etc for position to split
	 * @param	string	ellipsis ; Default '...'
	 * @return	string	ellipsized string
	 */
=======
/**
 * Ellipsize String
 *
 * This function will strip tags from a string, split it at its max_length and ellipsize
 *
 * @param	string		string to ellipsize
 * @param	integer		max length of string
 * @param	mixed		int (1|0) or float, .5, .2, etc for position to split
 * @param	string		ellipsis ; Default '...'
 * @return	string		ellipsized string
 */
if ( ! function_exists('ellipsize'))
{
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	function ellipsize($str, $max_length, $position = 1, $ellipsis = '&hellip;')
	{
		// Strip tags
		$str = trim(strip_tags($str));

		// Is the string long enough to ellipsize?
<<<<<<< HEAD
		if (mb_strlen($str) <= $max_length)
=======
		if (strlen($str) <= $max_length)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			return $str;
		}

<<<<<<< HEAD
		$beg = mb_substr($str, 0, floor($max_length * $position));
=======
		$beg = substr($str, 0, floor($max_length * $position));

>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		$position = ($position > 1) ? 1 : $position;

		if ($position === 1)
		{
<<<<<<< HEAD
			$end = mb_substr($str, 0, -($max_length - mb_strlen($beg)));
		}
		else
		{
			$end = mb_substr($str, -($max_length - mb_strlen($beg)));
=======
			$end = substr($str, 0, -($max_length - strlen($beg)));
		}
		else
		{
			$end = substr($str, -($max_length - strlen($beg)));
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		return $beg.$ellipsis.$end;
	}
}
<<<<<<< HEAD
=======

/* End of file text_helper.php */
/* Location: ./system/helpers/text_helper.php */
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
