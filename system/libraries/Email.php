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
 * CodeIgniter Email Class
 *
 * Permits email to be sent using Mail, Sendmail, or SMTP.
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
<<<<<<< HEAD
 * @author		EllisLab Dev Team
=======
 * @author		ExpressionEngine Dev Team
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
 * @link		http://codeigniter.com/user_guide/libraries/email.html
 */
class CI_Email {

<<<<<<< HEAD
	/**
	 * Used as the User-Agent and X-Mailer headers' value.
	 *
	 * @var	string
	 */
	public $useragent	= 'CodeIgniter';

	/**
	 * Path to the Sendmail binary.
	 *
	 * @var	string
	 */
	public $mailpath	= '/usr/sbin/sendmail';	// Sendmail path

	/**
	 * Which method to use for sending e-mails.
	 *
	 * @var	string	'mail', 'sendmail' or 'smtp'
	 */
	public $protocol	= 'mail';		// mail/sendmail/smtp

	/**
	 * STMP Server host
	 *
	 * @var	string
	 */
	public $smtp_host	= '';

	/**
	 * SMTP Username
	 *
	 * @var	string
	 */
	public $smtp_user	= '';

	/**
	 * SMTP Password
	 *
	 * @var	string
	 */
	public $smtp_pass	= '';

	/**
	 * SMTP Server port
	 *
	 * @var	int
	 */
	public $smtp_port	= 25;

	/**
	 * SMTP connection timeout in seconds
	 *
	 * @var	int
	 */
	public $smtp_timeout	= 5;

	/**
	 * SMTP persistent connection
	 *
	 * @var	bool
	 */
	public $smtp_keepalive	= FALSE;

	/**
	 * SMTP Encryption
	 *
	 * @var	string	empty, 'tls' or 'ssl'
	 */
	public $smtp_crypto	= '';

	/**
	 * Whether to apply word-wrapping to the message body.
	 *
	 * @var	bool
	 */
	public $wordwrap	= TRUE;

	/**
	 * Number of characters to wrap at.
	 *
	 * @see	CI_Email::$wordwrap
	 * @var	int
	 */
	public $wrapchars	= 76;

	/**
	 * Message format.
	 *
	 * @var	string	'text' or 'html'
	 */
	public $mailtype	= 'text';

	/**
	 * Character set (default: utf-8)
	 *
	 * @var	string
	 */
	public $charset		= 'utf-8';

	/**
	 * Multipart message
	 *
	 * @var	string	'mixed' (in the body) or 'related' (separate)
	 */
	public $multipart	= 'mixed';		// "mixed" (in the body) or "related" (separate)

	/**
	 * Alternative message (for HTML messages only)
	 *
	 * @var	string
	 */
	public $alt_message	= '';

	/**
	 * Whether to validate e-mail addresses.
	 *
	 * @var	bool
	 */
	public $validate	= FALSE;

	/**
	 * X-Priority header value.
	 *
	 * @var	int	1-5
	 */
	public $priority	= 3;			// Default priority (1 - 5)

	/**
	 * Newline character sequence.
	 * Use "\r\n" to comply with RFC 822.
	 *
	 * @link	http://www.ietf.org/rfc/rfc822.txt
	 * @var	string	"\r\n" or "\n"
	 */
	public $newline		= "\n";			// Default newline. "\r\n" or "\n" (Use "\r\n" to comply with RFC 822)

	/**
	 * CRLF character sequence
	 *
	 * RFC 2045 specifies that for 'quoted-printable' encoding,
	 * "\r\n" must be used. However, it appears that some servers
	 * (even on the receiving end) don't handle it properly and
	 * switching to "\n", while improper, is the only solution
	 * that seems to work for all environments.
	 *
	 * @link	http://www.ietf.org/rfc/rfc822.txt
	 * @var	string
	 */
	public $crlf		= "\n";

	/**
	 * Whether to use Delivery Status Notification.
	 *
	 * @var	bool
	 */
	public $dsn		= FALSE;

	/**
	 * Whether to send multipart alternatives.
	 * Yahoo! doesn't seem to like these.
	 *
	 * @var	bool
	 */
	public $send_multipart	= TRUE;

	/**
	 * Whether to send messages to BCC recipients in batches.
	 *
	 * @var	bool
	 */
	public $bcc_batch_mode	= FALSE;

	/**
	 * BCC Batch max number size.
	 *
	 * @see	CI_Email::$bcc_batch_mode
	 * @var	int
	 */
	public $bcc_batch_size	= 200;

	// --------------------------------------------------------------------

	/**
	 * Whether PHP is running in safe mode. Initialized by the class constructor.
	 *
	 * @var	bool
	 */
	protected $_safe_mode		= FALSE;

	/**
	 * Subject header
	 *
	 * @var	string
	 */
	protected $_subject		= '';

	/**
	 * Message body
	 *
	 * @var	string
	 */
	protected $_body		= '';

	/**
	 * Final message body to be sent.
	 *
	 * @var	string
	 */
	protected $_finalbody		= '';

	/**
	 * multipart/alternative boundary
	 *
	 * @var	string
	 */
	protected $_alt_boundary	= '';

	/**
	 * Attachment boundary
	 *
	 * @var	string
	 */
	protected $_atc_boundary	= '';

	/**
	 * Final headers to send
	 *
	 * @var	string
	 */
	protected $_header_str		= '';

	/**
	 * SMTP Connection socket placeholder
	 *
	 * @var	resource
	 */
	protected $_smtp_connect	= '';

	/**
	 * Mail encoding
	 *
	 * @var	string	'8bit' or '7bit'
	 */
	protected $_encoding		= '8bit';

	/**
	 * Whether to perform SMTP authentication
	 *
	 * @var	bool
	 */
	protected $_smtp_auth		= FALSE;

	/**
	 * Whether to send a Reply-To header
	 *
	 * @var	bool
	 */
	protected $_replyto_flag	= FALSE;

	/**
	 * Debug messages
	 *
	 * @see	CI_Email::print_debugger()
	 * @var	string
	 */
	protected $_debug_msg		= array();

	/**
	 * Recipients
	 *
	 * @var	string[]
	 */
	protected $_recipients		= array();

	/**
	 * CC Recipients
	 *
	 * @var	string[]
	 */
	protected $_cc_array		= array();

	/**
	 * BCC Recipients
	 *
	 * @var	string[]
	 */
	protected $_bcc_array		= array();

	/**
	 * Message headers
	 *
	 * @var	string[]
	 */
	protected $_headers		= array();

	/**
	 * Attachment data
	 *
	 * @var	array
	 */
	protected $_attachments		= array();

	/**
	 * Valid $protocol values
	 *
	 * @see	CI_Email::$protocol
	 * @var	string[]
	 */
	protected $_protocols		= array('mail', 'sendmail', 'smtp');

	/**
	 * Base charsets
	 *
	 * Character sets valid for 7-bit encoding,
	 * excluding language suffix.
	 *
	 * @var	string[]
	 */
	protected $_base_charsets	= array('us-ascii', 'iso-2022-');

	/**
	 * Bit depths
	 *
	 * Valid mail encodings
	 *
	 * @see	CI_Email::$_encoding
	 * @var	string[]
	 */
	protected $_bit_depths		= array('7bit', '8bit');

	/**
	 * $priority translations
	 *
	 * Actual values to send with the X-Priority header
	 *
	 * @var	string[]
	 */
	protected $_priorities = array(
		1 => '1 (Highest)',
		2 => '2 (High)',
		3 => '3 (Normal)',
		4 => '4 (Low)',
		5 => '5 (Lowest)'
	);

	// --------------------------------------------------------------------
=======
	var	$useragent		= "CodeIgniter";
	var	$mailpath		= "/usr/sbin/sendmail";	// Sendmail path
	var	$protocol		= "mail";	// mail/sendmail/smtp
	var	$smtp_host		= "";		// SMTP Server.  Example: mail.earthlink.net
	var	$smtp_user		= "";		// SMTP Username
	var	$smtp_pass		= "";		// SMTP Password
	var	$smtp_port		= "25";		// SMTP Port
	var	$smtp_timeout	= 5;		// SMTP Timeout in seconds
	var	$smtp_crypto	= "";		// SMTP Encryption. Can be null, tls or ssl.
	var	$wordwrap		= TRUE;		// TRUE/FALSE  Turns word-wrap on/off
	var	$wrapchars		= "76";		// Number of characters to wrap at.
	var	$mailtype		= "text";	// text/html  Defines email formatting
	var	$charset		= "utf-8";	// Default char set: iso-8859-1 or us-ascii
	var	$multipart		= "mixed";	// "mixed" (in the body) or "related" (separate)
	var $alt_message	= '';		// Alternative message for HTML emails
	var	$validate		= FALSE;	// TRUE/FALSE.  Enables email validation
	var	$priority		= "3";		// Default priority (1 - 5)
	var	$newline		= "\n";		// Default newline. "\r\n" or "\n" (Use "\r\n" to comply with RFC 822)
	var $crlf			= "\n";		// The RFC 2045 compliant CRLF for quoted-printable is "\r\n".  Apparently some servers,
									// even on the receiving end think they need to muck with CRLFs, so using "\n", while
									// distasteful, is the only thing that seems to work for all environments.
	var $send_multipart	= TRUE;		// TRUE/FALSE - Yahoo does not like multipart alternative, so this is an override.  Set to FALSE for Yahoo.
	var	$bcc_batch_mode	= FALSE;	// TRUE/FALSE  Turns on/off Bcc batch feature
	var	$bcc_batch_size	= 200;		// If bcc_batch_mode = TRUE, sets max number of Bccs in each batch
	var $_safe_mode		= FALSE;
	var	$_subject		= "";
	var	$_body			= "";
	var	$_finalbody		= "";
	var	$_alt_boundary	= "";
	var	$_atc_boundary	= "";
	var	$_header_str	= "";
	var	$_smtp_connect	= "";
	var	$_encoding		= "8bit";
	var $_IP			= FALSE;
	var	$_smtp_auth		= FALSE;
	var $_replyto_flag	= FALSE;
	var	$_debug_msg		= array();
	var	$_recipients	= array();
	var	$_cc_array		= array();
	var	$_bcc_array		= array();
	var	$_headers		= array();
	var	$_attach_name	= array();
	var	$_attach_type	= array();
	var	$_attach_disp	= array();
	var	$_protocols		= array('mail', 'sendmail', 'smtp');
	var	$_base_charsets	= array('us-ascii', 'iso-2022-');	// 7-bit charsets (excluding language suffix)
	var	$_bit_depths	= array('7bit', '8bit');
	var	$_priorities	= array('1 (Highest)', '2 (High)', '3 (Normal)', '4 (Low)', '5 (Lowest)');

>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

	/**
	 * Constructor - Sets Email Preferences
	 *
	 * The constructor can be passed an array of config values
<<<<<<< HEAD
	 *
	 * @param	array	$config = array()
	 * @return	void
	 */
	public function __construct(array $config = array())
	{
		$this->charset = config_item('charset');

=======
	 */
	public function __construct($config = array())
	{
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		if (count($config) > 0)
		{
			$this->initialize($config);
		}
		else
		{
<<<<<<< HEAD
			$this->_smtp_auth = ! ($this->smtp_user === '' && $this->smtp_pass === '');
		}

		$this->_safe_mode = ( ! is_php('5.4') && ini_get('safe_mode'));
		$this->charset = strtoupper($this->charset);

		log_message('info', 'Email Class Initialized');
	}

	// --------------------------------------------------------------------

	/**
	 * Destructor - Releases Resources
	 *
	 * @return	void
	 */
	public function __destruct()
	{
		if (is_resource($this->_smtp_connect))
		{
			$this->_send_command('quit');
		}
=======
			$this->_smtp_auth = ($this->smtp_user == '' AND $this->smtp_pass == '') ? FALSE : TRUE;
			$this->_safe_mode = ((boolean)@ini_get("safe_mode") === FALSE) ? FALSE : TRUE;
		}

		log_message('debug', "Email Class Initialized");
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Initialize preferences
	 *
<<<<<<< HEAD
	 * @param	array
	 * @return	CI_Email
=======
	 * @access	public
	 * @param	array
	 * @return	void
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	public function initialize($config = array())
	{
		foreach ($config as $key => $val)
		{
			if (isset($this->$key))
			{
				$method = 'set_'.$key;

				if (method_exists($this, $method))
				{
					$this->$method($val);
				}
				else
				{
					$this->$key = $val;
				}
			}
		}
		$this->clear();

<<<<<<< HEAD
		$this->_smtp_auth = ! ($this->smtp_user === '' && $this->smtp_pass === '');
=======
		$this->_smtp_auth = ($this->smtp_user == '' AND $this->smtp_pass == '') ? FALSE : TRUE;
		$this->_safe_mode = ((boolean)@ini_get("safe_mode") === FALSE) ? FALSE : TRUE;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

		return $this;
	}

	// --------------------------------------------------------------------

	/**
	 * Initialize the Email Data
	 *
<<<<<<< HEAD
	 * @param	bool
	 * @return	CI_Email
	 */
	public function clear($clear_attachments = FALSE)
	{
		$this->_subject		= '';
		$this->_body		= '';
		$this->_finalbody	= '';
		$this->_header_str	= '';
		$this->_replyto_flag	= FALSE;
=======
	 * @access	public
	 * @return	void
	 */
	public function clear($clear_attachments = FALSE)
	{
		$this->_subject		= "";
		$this->_body		= "";
		$this->_finalbody	= "";
		$this->_header_str	= "";
		$this->_replyto_flag = FALSE;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		$this->_recipients	= array();
		$this->_cc_array	= array();
		$this->_bcc_array	= array();
		$this->_headers		= array();
		$this->_debug_msg	= array();

<<<<<<< HEAD
		$this->set_header('User-Agent', $this->useragent);
		$this->set_header('Date', $this->_set_date());

		if ($clear_attachments !== FALSE)
		{
			$this->_attachments = array();
=======
		$this->_set_header('User-Agent', $this->useragent);
		$this->_set_header('Date', $this->_set_date());

		if ($clear_attachments !== FALSE)
		{
			$this->_attach_name = array();
			$this->_attach_type = array();
			$this->_attach_disp = array();
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		return $this;
	}

	// --------------------------------------------------------------------

	/**
	 * Set FROM
	 *
<<<<<<< HEAD
	 * @param	string	$from
	 * @param	string	$name
	 * @param	string	$return_path = NULL	Return-Path
	 * @return	CI_Email
	 */
	public function from($from, $name = '', $return_path = NULL)
	{
		if (preg_match('/\<(.*)\>/', $from, $match))
		{
			$from = $match[1];
=======
	 * @access	public
	 * @param	string
	 * @param	string
	 * @return	void
	 */
	public function from($from, $name = '')
	{
		if (preg_match( '/\<(.*)\>/', $from, $match))
		{
			$from = $match['1'];
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		if ($this->validate)
		{
			$this->validate_email($this->_str_to_array($from));
<<<<<<< HEAD
			if ($return_path)
			{
				$this->validate_email($this->_str_to_array($return_path));
			}
		}

		// prepare the display name
		if ($name !== '')
=======
		}

		// prepare the display name
		if ($name != '')
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			// only use Q encoding if there are characters that would require it
			if ( ! preg_match('/[\200-\377]/', $name))
			{
				// add slashes for non-printing characters, slashes, and double quotes, and surround it in double quotes
				$name = '"'.addcslashes($name, "\0..\37\177'\"\\").'"';
			}
			else
			{
<<<<<<< HEAD
				$name = $this->_prep_q_encoding($name);
			}
		}

		$this->set_header('From', $name.' <'.$from.'>');

		isset($return_path) OR $return_path = $from;
		$this->set_header('Return-Path', '<'.$return_path.'>');
=======
				$name = $this->_prep_q_encoding($name, TRUE);
			}
		}

		$this->_set_header('From', $name.' <'.$from.'>');
		$this->_set_header('Return-Path', '<'.$from.'>');
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

		return $this;
	}

	// --------------------------------------------------------------------

	/**
	 * Set Reply-to
	 *
<<<<<<< HEAD
	 * @param	string
	 * @param	string
	 * @return	CI_Email
	 */
	public function reply_to($replyto, $name = '')
	{
		if (preg_match('/\<(.*)\>/', $replyto, $match))
		{
			$replyto = $match[1];
=======
	 * @access	public
	 * @param	string
	 * @param	string
	 * @return	void
	 */
	public function reply_to($replyto, $name = '')
	{
		if (preg_match( '/\<(.*)\>/', $replyto, $match))
		{
			$replyto = $match['1'];
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		if ($this->validate)
		{
			$this->validate_email($this->_str_to_array($replyto));
		}

<<<<<<< HEAD
		if ($name === '')
=======
		if ($name == '')
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$name = $replyto;
		}

<<<<<<< HEAD
		if (strpos($name, '"') !== 0)
=======
		if (strncmp($name, '"', 1) != 0)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$name = '"'.$name.'"';
		}

<<<<<<< HEAD
		$this->set_header('Reply-To', $name.' <'.$replyto.'>');
=======
		$this->_set_header('Reply-To', $name.' <'.$replyto.'>');
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		$this->_replyto_flag = TRUE;

		return $this;
	}

	// --------------------------------------------------------------------

	/**
	 * Set Recipients
	 *
<<<<<<< HEAD
	 * @param	string
	 * @return	CI_Email
=======
	 * @access	public
	 * @param	string
	 * @return	void
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	public function to($to)
	{
		$to = $this->_str_to_array($to);
		$to = $this->clean_email($to);

		if ($this->validate)
		{
			$this->validate_email($to);
		}

<<<<<<< HEAD
		if ($this->_get_protocol() !== 'mail')
		{
			$this->set_header('To', implode(', ', $to));
		}

		$this->_recipients = $to;
=======
		if ($this->_get_protocol() != 'mail')
		{
			$this->_set_header('To', implode(", ", $to));
		}

		switch ($this->_get_protocol())
		{
			case 'smtp'		:
				$this->_recipients = $to;
			break;
			case 'sendmail'	:
			case 'mail'		:
				$this->_recipients = implode(", ", $to);
			break;
		}
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

		return $this;
	}

	// --------------------------------------------------------------------

	/**
	 * Set CC
	 *
<<<<<<< HEAD
	 * @param	string
	 * @return	CI_Email
	 */
	public function cc($cc)
	{
		$cc = $this->clean_email($this->_str_to_array($cc));
=======
	 * @access	public
	 * @param	string
	 * @return	void
	 */
	public function cc($cc)
	{
		$cc = $this->_str_to_array($cc);
		$cc = $this->clean_email($cc);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

		if ($this->validate)
		{
			$this->validate_email($cc);
		}

<<<<<<< HEAD
		$this->set_header('Cc', implode(', ', $cc));

		if ($this->_get_protocol() === 'smtp')
=======
		$this->_set_header('Cc', implode(", ", $cc));

		if ($this->_get_protocol() == "smtp")
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$this->_cc_array = $cc;
		}

		return $this;
	}

	// --------------------------------------------------------------------

	/**
	 * Set BCC
	 *
<<<<<<< HEAD
	 * @param	string
	 * @param	string
	 * @return	CI_Email
	 */
	public function bcc($bcc, $limit = '')
	{
		if ($limit !== '' && is_numeric($limit))
=======
	 * @access	public
	 * @param	string
	 * @param	string
	 * @return	void
	 */
	public function bcc($bcc, $limit = '')
	{
		if ($limit != '' && is_numeric($limit))
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$this->bcc_batch_mode = TRUE;
			$this->bcc_batch_size = $limit;
		}

<<<<<<< HEAD
		$bcc = $this->clean_email($this->_str_to_array($bcc));
=======
		$bcc = $this->_str_to_array($bcc);
		$bcc = $this->clean_email($bcc);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

		if ($this->validate)
		{
			$this->validate_email($bcc);
		}

<<<<<<< HEAD
		if ($this->_get_protocol() === 'smtp' OR ($this->bcc_batch_mode && count($bcc) > $this->bcc_batch_size))
=======
		if (($this->_get_protocol() == "smtp") OR ($this->bcc_batch_mode && count($bcc) > $this->bcc_batch_size))
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$this->_bcc_array = $bcc;
		}
		else
		{
<<<<<<< HEAD
			$this->set_header('Bcc', implode(', ', $bcc));
=======
			$this->_set_header('Bcc', implode(", ", $bcc));
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		return $this;
	}

	// --------------------------------------------------------------------

	/**
	 * Set Email Subject
	 *
<<<<<<< HEAD
	 * @param	string
	 * @return	CI_Email
=======
	 * @access	public
	 * @param	string
	 * @return	void
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	public function subject($subject)
	{
		$subject = $this->_prep_q_encoding($subject);
<<<<<<< HEAD
		$this->set_header('Subject', $subject);
=======
		$this->_set_header('Subject', $subject);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		return $this;
	}

	// --------------------------------------------------------------------

	/**
	 * Set Body
	 *
<<<<<<< HEAD
	 * @param	string
	 * @return	CI_Email
	 */
	public function message($body)
	{
		$this->_body = rtrim(str_replace("\r", '', $body));
=======
	 * @access	public
	 * @param	string
	 * @return	void
	 */
	public function message($body)
	{
		$this->_body = rtrim(str_replace("\r", "", $body));
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

		/* strip slashes only if magic quotes is ON
		   if we do it with magic quotes OFF, it strips real, user-inputted chars.

		   NOTE: In PHP 5.4 get_magic_quotes_gpc() will always return 0 and
			 it will probably not exist in future versions at all.
		*/
		if ( ! is_php('5.4') && get_magic_quotes_gpc())
		{
			$this->_body = stripslashes($this->_body);
		}

		return $this;
	}

	// --------------------------------------------------------------------

	/**
	 * Assign file attachments
	 *
<<<<<<< HEAD
	 * @param	string	$file	Can be local path, URL or buffered content
	 * @param	string	$disposition = 'attachment'
	 * @param	string	$newname = NULL
	 * @param	string	$mime = ''
	 * @return	CI_Email
	 */
	public function attach($file, $disposition = '', $newname = NULL, $mime = '')
	{
		if ($mime === '')
		{
			if (strpos($file, '://') === FALSE && ! file_exists($file))
			{
				$this->_set_error_message('lang:email_attachment_missing', $file);
				return FALSE;
			}

			if ( ! $fp = @fopen($file, 'rb'))
			{
				$this->_set_error_message('lang:email_attachment_unreadable', $file);
				return FALSE;
			}

			$file_content = stream_get_contents($fp);
			$mime = $this->_mime_types(pathinfo($file, PATHINFO_EXTENSION));
			fclose($fp);
		}
		else
		{
			$file_content =& $file; // buffered file
		}

		$this->_attachments[] = array(
			'name'		=> array($file, $newname),
			'disposition'	=> empty($disposition) ? 'attachment' : $disposition,  // Can also be 'inline'  Not sure if it matters
			'type'		=> $mime,
			'content'	=> chunk_split(base64_encode($file_content))
		);

=======
	 * @access	public
	 * @param	string
	 * @return	void
	 */
	public function attach($filename, $disposition = 'attachment')
	{
		$this->_attach_name[] = $filename;
		$this->_attach_type[] = $this->_mime_types(pathinfo($filename, PATHINFO_EXTENSION));
		$this->_attach_disp[] = $disposition; // Can also be 'inline'  Not sure if it matters
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		return $this;
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Set and return attachment Content-ID
	 *
	 * Useful for attached inline pictures
	 *
	 * @param	string	$filename
	 * @return	string
	 */
	public function attachment_cid($filename)
	{
		if ($this->multipart !== 'related')
		{
			$this->multipart = 'related'; // Thunderbird need this for inline images
		}

		for ($i = 0, $c = count($this->_attachments); $i < $c; $i++)
		{
			if ($this->_attachments[$i]['name'][0] === $filename)
			{
				$this->_attachments[$i]['cid'] = uniqid(basename($this->_attachments[$i]['name'][0]).'@');
				return $this->_attachments[$i]['cid'];
			}
		}

		return FALSE;
	}

	// --------------------------------------------------------------------

	/**
	 * Add a Header Item
	 *
=======
	 * Add a Header Item
	 *
	 * @access	protected
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @param	string
	 * @param	string
	 * @return	void
	 */
<<<<<<< HEAD
	public function set_header($header, $value)
	{
		$this->_headers[$header] = str_replace(array("\n", "\r"), '', $value);
=======
	protected function _set_header($header, $value)
	{
		$this->_headers[$header] = $value;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Convert a String to an Array
	 *
<<<<<<< HEAD
=======
	 * @access	protected
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @param	string
	 * @return	array
	 */
	protected function _str_to_array($email)
	{
		if ( ! is_array($email))
		{
<<<<<<< HEAD
			return (strpos($email, ',') !== FALSE)
				? preg_split('/[\s,]/', $email, -1, PREG_SPLIT_NO_EMPTY)
				: (array) trim($email);
		}

=======
			if (strpos($email, ',') !== FALSE)
			{
				$email = preg_split('/[\s,]/', $email, -1, PREG_SPLIT_NO_EMPTY);
			}
			else
			{
				$email = trim($email);
				settype($email, "array");
			}
		}
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		return $email;
	}

	// --------------------------------------------------------------------

	/**
	 * Set Multipart Value
	 *
<<<<<<< HEAD
	 * @param	string
	 * @return	CI_Email
	 */
	public function set_alt_message($str)
	{
		$this->alt_message = (string) $str;
=======
	 * @access	public
	 * @param	string
	 * @return	void
	 */
	public function set_alt_message($str = '')
	{
		$this->alt_message = $str;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		return $this;
	}

	// --------------------------------------------------------------------

	/**
	 * Set Mailtype
	 *
<<<<<<< HEAD
	 * @param	string
	 * @return	CI_Email
	 */
	public function set_mailtype($type = 'text')
	{
		$this->mailtype = ($type === 'html') ? 'html' : 'text';
=======
	 * @access	public
	 * @param	string
	 * @return	void
	 */
	public function set_mailtype($type = 'text')
	{
		$this->mailtype = ($type == 'html') ? 'html' : 'text';
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		return $this;
	}

	// --------------------------------------------------------------------

	/**
	 * Set Wordwrap
	 *
<<<<<<< HEAD
	 * @param	bool
	 * @return	CI_Email
	 */
	public function set_wordwrap($wordwrap = TRUE)
	{
		$this->wordwrap = (bool) $wordwrap;
=======
	 * @access	public
	 * @param	string
	 * @return	void
	 */
	public function set_wordwrap($wordwrap = TRUE)
	{
		$this->wordwrap = ($wordwrap === FALSE) ? FALSE : TRUE;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		return $this;
	}

	// --------------------------------------------------------------------

	/**
	 * Set Protocol
	 *
<<<<<<< HEAD
	 * @param	string
	 * @return	CI_Email
	 */
	public function set_protocol($protocol = 'mail')
	{
		$this->protocol = in_array($protocol, $this->_protocols, TRUE) ? strtolower($protocol) : 'mail';
=======
	 * @access	public
	 * @param	string
	 * @return	void
	 */
	public function set_protocol($protocol = 'mail')
	{
		$this->protocol = ( ! in_array($protocol, $this->_protocols, TRUE)) ? 'mail' : strtolower($protocol);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		return $this;
	}

	// --------------------------------------------------------------------

	/**
	 * Set Priority
	 *
<<<<<<< HEAD
	 * @param	int
	 * @return	CI_Email
	 */
	public function set_priority($n = 3)
	{
		$this->priority = preg_match('/^[1-5]$/', $n) ? (int) $n : 3;
=======
	 * @access	public
	 * @param	integer
	 * @return	void
	 */
	public function set_priority($n = 3)
	{
		if ( ! is_numeric($n))
		{
			$this->priority = 3;
			return;
		}

		if ($n < 1 OR $n > 5)
		{
			$this->priority = 3;
			return;
		}

		$this->priority = $n;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		return $this;
	}

	// --------------------------------------------------------------------

	/**
	 * Set Newline Character
	 *
<<<<<<< HEAD
	 * @param	string
	 * @return	CI_Email
	 */
	public function set_newline($newline = "\n")
	{
		$this->newline = in_array($newline, array("\n", "\r\n", "\r")) ? $newline : "\n";
=======
	 * @access	public
	 * @param	string
	 * @return	void
	 */
	public function set_newline($newline = "\n")
	{
		if ($newline != "\n" AND $newline != "\r\n" AND $newline != "\r")
		{
			$this->newline	= "\n";
			return;
		}

		$this->newline	= $newline;

>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		return $this;
	}

	// --------------------------------------------------------------------

	/**
	 * Set CRLF
	 *
<<<<<<< HEAD
	 * @param	string
	 * @return	CI_Email
	 */
	public function set_crlf($crlf = "\n")
	{
		$this->crlf = ($crlf !== "\n" && $crlf !== "\r\n" && $crlf !== "\r") ? "\n" : $crlf;
=======
	 * @access	public
	 * @param	string
	 * @return	void
	 */
	public function set_crlf($crlf = "\n")
	{
		if ($crlf != "\n" AND $crlf != "\r\n" AND $crlf != "\r")
		{
			$this->crlf	= "\n";
			return;
		}

		$this->crlf	= $crlf;

>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		return $this;
	}

	// --------------------------------------------------------------------

	/**
	 * Set Message Boundary
	 *
<<<<<<< HEAD
=======
	 * @access	protected
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	void
	 */
	protected function _set_boundaries()
	{
<<<<<<< HEAD
		$this->_alt_boundary = 'B_ALT_'.uniqid(''); // multipart/alternative
		$this->_atc_boundary = 'B_ATC_'.uniqid(''); // attachment boundary
=======
		$this->_alt_boundary = "B_ALT_".uniqid(''); // multipart/alternative
		$this->_atc_boundary = "B_ATC_".uniqid(''); // attachment boundary
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Get the Message ID
	 *
<<<<<<< HEAD
=======
	 * @access	protected
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	string
	 */
	protected function _get_message_id()
	{
<<<<<<< HEAD
		$from = str_replace(array('>', '<'), '', $this->_headers['Return-Path']);
		return '<'.uniqid('').strstr($from, '@').'>';
=======
		$from = $this->_headers['Return-Path'];
		$from = str_replace(">", "", $from);
		$from = str_replace("<", "", $from);

		return  "<".uniqid('').strstr($from, '@').">";
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Get Mail Protocol
	 *
<<<<<<< HEAD
	 * @param	bool
	 * @return	mixed
=======
	 * @access	protected
	 * @param	bool
	 * @return	string
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	protected function _get_protocol($return = TRUE)
	{
		$this->protocol = strtolower($this->protocol);
<<<<<<< HEAD
		in_array($this->protocol, $this->_protocols, TRUE) OR $this->protocol = 'mail';

		if ($return === TRUE)
=======
		$this->protocol = ( ! in_array($this->protocol, $this->_protocols, TRUE)) ? 'mail' : $this->protocol;

		if ($return == TRUE)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			return $this->protocol;
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Get Mail Encoding
	 *
<<<<<<< HEAD
=======
	 * @access	protected
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @param	bool
	 * @return	string
	 */
	protected function _get_encoding($return = TRUE)
	{
<<<<<<< HEAD
		in_array($this->_encoding, $this->_bit_depths) OR $this->_encoding = '8bit';

		foreach ($this->_base_charsets as $charset)
		{
			if (strpos($charset, $this->charset) === 0)
=======
		$this->_encoding = ( ! in_array($this->_encoding, $this->_bit_depths)) ? '8bit' : $this->_encoding;

		foreach ($this->_base_charsets as $charset)
		{
			if (strncmp($charset, $this->charset, strlen($charset)) == 0)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			{
				$this->_encoding = '7bit';
			}
		}

<<<<<<< HEAD
		if ($return === TRUE)
=======
		if ($return == TRUE)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			return $this->_encoding;
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Get content type (text/html/attachment)
	 *
<<<<<<< HEAD
=======
	 * @access	protected
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	string
	 */
	protected function _get_content_type()
	{
<<<<<<< HEAD
		if ($this->mailtype === 'html')
		{
			return (count($this->_attachments) === 0) ? 'html' : 'html-attach';
		}
		elseif	($this->mailtype === 'text' && count($this->_attachments) > 0)
=======
		if	($this->mailtype == 'html' &&  count($this->_attach_name) == 0)
		{
			return 'html';
		}
		elseif	($this->mailtype == 'html' &&  count($this->_attach_name)  > 0)
		{
			return 'html-attach';
		}
		elseif	($this->mailtype == 'text' &&  count($this->_attach_name)  > 0)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			return 'plain-attach';
		}
		else
		{
			return 'plain';
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Set RFC 822 Date
	 *
<<<<<<< HEAD
=======
	 * @access	protected
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	string
	 */
	protected function _set_date()
	{
<<<<<<< HEAD
		$timezone = date('Z');
		$operator = ($timezone[0] === '-') ? '-' : '+';
		$timezone = abs($timezone);
		$timezone = floor($timezone/3600) * 100 + ($timezone % 3600) / 60;

		return sprintf('%s %s%04d', date('D, j M Y H:i:s'), $operator, $timezone);
=======
		$timezone = date("Z");
		$operator = (strncmp($timezone, '-', 1) == 0) ? '-' : '+';
		$timezone = abs($timezone);
		$timezone = floor($timezone/3600) * 100 + ($timezone % 3600 ) / 60;

		return sprintf("%s %s%04d", date("D, j M Y H:i:s"), $operator, $timezone);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Mime message
	 *
<<<<<<< HEAD
=======
	 * @access	protected
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	string
	 */
	protected function _get_mime_message()
	{
<<<<<<< HEAD
		return 'This is a multi-part message in MIME format.'.$this->newline.'Your email application may not support this format.';
=======
		return "This is a multi-part message in MIME format.".$this->newline."Your email application may not support this format.";
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Validate Email Address
	 *
<<<<<<< HEAD
=======
	 * @access	public
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @param	string
	 * @return	bool
	 */
	public function validate_email($email)
	{
		if ( ! is_array($email))
		{
			$this->_set_error_message('lang:email_must_be_array');
			return FALSE;
		}

		foreach ($email as $val)
		{
			if ( ! $this->valid_email($val))
			{
				$this->_set_error_message('lang:email_invalid_address', $val);
				return FALSE;
			}
		}

		return TRUE;
	}

	// --------------------------------------------------------------------

	/**
	 * Email Validation
	 *
<<<<<<< HEAD
	 * @param	string
	 * @return	bool
	 */
	public function valid_email($email)
	{
		if (function_exists('idn_to_ascii') && $atpos = strpos($email, '@'))
		{
			$email = substr($email, 0, ++$atpos).idn_to_ascii(substr($email, $atpos));
		}

		return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
=======
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
	public function valid_email($address)
	{
		return ( ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $address)) ? FALSE : TRUE;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Clean Extended Email Address: Joe Smith <joe@smith.com>
	 *
<<<<<<< HEAD
=======
	 * @access	public
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @param	string
	 * @return	string
	 */
	public function clean_email($email)
	{
		if ( ! is_array($email))
		{
<<<<<<< HEAD
			return preg_match('/\<(.*)\>/', $email, $match) ? $match[1] : $email;
=======
			if (preg_match('/\<(.*)\>/', $email, $match))
			{
				return $match['1'];
			}
			else
			{
				return $email;
			}
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		$clean_email = array();

		foreach ($email as $addy)
		{
<<<<<<< HEAD
			$clean_email[] = preg_match('/\<(.*)\>/', $addy, $match) ? $match[1] : $addy;
=======
			if (preg_match( '/\<(.*)\>/', $addy, $match))
			{
				$clean_email[] = $match['1'];
			}
			else
			{
				$clean_email[] = $addy;
			}
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		return $clean_email;
	}

	// --------------------------------------------------------------------

	/**
	 * Build alternative plain text message
	 *
<<<<<<< HEAD
	 * Provides the raw message for use in plain-text headers of
	 * HTML-formatted emails.
	 * If the user hasn't specified his own alternative message
	 * it creates one by stripping the HTML
	 *
=======
	 * This public function provides the raw message for use
	 * in plain-text headers of HTML-formatted emails.
	 * If the user hasn't specified his own alternative message
	 * it creates one by stripping the HTML
	 *
	 * @access	protected
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	string
	 */
	protected function _get_alt_message()
	{
<<<<<<< HEAD
		if ( ! empty($this->alt_message))
		{
			return ($this->wordwrap)
				? $this->word_wrap($this->alt_message, 76)
				: $this->alt_message;
		}

		$body = preg_match('/\<body.*?\>(.*)\<\/body\>/si', $this->_body, $match) ? $match[1] : $this->_body;
		$body = str_replace("\t", '', preg_replace('#<!--(.*)--\>#', '', trim(strip_tags($body))));

		for ($i = 20; $i >= 3; $i--)
		{
			$body = str_replace(str_repeat("\n", $i), "\n\n", $body);
		}

		// Reduce multiple spaces
		$body = preg_replace('| +|', ' ', $body);

		return ($this->wordwrap)
			? $this->word_wrap($body, 76)
			: $body;
=======
		if ($this->alt_message != "")
		{
			return $this->word_wrap($this->alt_message, '76');
		}

		if (preg_match('/\<body.*?\>(.*)\<\/body\>/si', $this->_body, $match))
		{
			$body = $match['1'];
		}
		else
		{
			$body = $this->_body;
		}

		$body = trim(strip_tags($body));
		$body = preg_replace( '#<!--(.*)--\>#', "", $body);
		$body = str_replace("\t", "", $body);

		for ($i = 20; $i >= 3; $i--)
		{
			$n = "";

			for ($x = 1; $x <= $i; $x ++)
			{
				$n .= "\n";
			}

			$body = str_replace($n, "\n\n", $body);
		}

		return $this->word_wrap($body, '76');
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Word Wrap
	 *
<<<<<<< HEAD
	 * @param	string
	 * @param	int	line-length limit
	 * @return	string
	 */
	public function word_wrap($str, $charlim = NULL)
	{
		// Set the character limit, if not already present
		if (empty($charlim))
		{
			$charlim = empty($this->wrapchars) ? 76 : $this->wrapchars;
		}

=======
	 * @access	public
	 * @param	string
	 * @param	integer
	 * @return	string
	 */
	public function word_wrap($str, $charlim = '')
	{
		// Se the character limit
		if ($charlim == '')
		{
			$charlim = ($this->wrapchars == "") ? "76" : $this->wrapchars;
		}

		// Reduce multiple spaces
		$str = preg_replace("| +|", " ", $str);

>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		// Standardize newlines
		if (strpos($str, "\r") !== FALSE)
		{
			$str = str_replace(array("\r\n", "\r"), "\n", $str);
		}

<<<<<<< HEAD
		// Reduce multiple spaces at end of line
		$str = preg_replace('| +\n|', "\n", $str);

		// If the current word is surrounded by {unwrap} tags we'll
		// strip the entire chunk and replace it with a marker.
		$unwrap = array();
		if (preg_match_all('|\{unwrap\}(.+?)\{/unwrap\}|s', $str, $matches))
		{
			for ($i = 0, $c = count($matches[0]); $i < $c; $i++)
			{
				$unwrap[] = $matches[1][$i];
				$str = str_replace($matches[0][$i], '{{unwrapped'.$i.'}}', $str);
			}
		}

		// Use PHP's native function to do the initial wordwrap.
		// We set the cut flag to FALSE so that any individual words that are
		// too long get left alone. In the next step we'll deal with them.
		$str = wordwrap($str, $charlim, "\n", FALSE);

		// Split the string into individual lines of text and cycle through them
		$output = '';
=======
		// If the current word is surrounded by {unwrap} tags we'll
		// strip the entire chunk and replace it with a marker.
		$unwrap = array();
		if (preg_match_all("|(\{unwrap\}.+?\{/unwrap\})|s", $str, $matches))
		{
			for ($i = 0; $i < count($matches['0']); $i++)
			{
				$unwrap[] = $matches['1'][$i];
				$str = str_replace($matches['1'][$i], "{{unwrapped".$i."}}", $str);
			}
		}

		// Use PHP's native public function to do the initial wordwrap.
		// We set the cut flag to FALSE so that any individual words that are
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
				$output .= $line.$this->newline;
				continue;
			}

			$temp = '';
<<<<<<< HEAD
			do
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
			}
			while (mb_strlen($line) > $charlim);

			// If $temp contains data it means we had to split up an over-length
			// word into smaller chunks so we'll add it back to our current line
			if ($temp !== '')
			{
				$output .= $temp.$this->newline;
			}

			$output .= $line.$this->newline;
=======
				$temp .= substr($line, 0, $charlim-1);
				$line = substr($line, $charlim-1);
			}

			// If $temp contains data it means we had to split up an over-length
			// word into smaller chunks so we'll add it back to our current line
			if ($temp != '')
			{
				$output .= $temp.$this->newline.$line;
			}
			else
			{
				$output .= $line;
			}

			$output .= $this->newline;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		// Put our markers back
		if (count($unwrap) > 0)
		{
			foreach ($unwrap as $key => $val)
			{
<<<<<<< HEAD
				$output = str_replace('{{unwrapped'.$key.'}}', $val, $output);
=======
				$output = str_replace("{{unwrapped".$key."}}", $val, $output);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			}
		}

		return $output;
	}

	// --------------------------------------------------------------------

	/**
	 * Build final headers
	 *
<<<<<<< HEAD
=======
	 * @access	protected
	 * @param	string
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	string
	 */
	protected function _build_headers()
	{
<<<<<<< HEAD
		$this->set_header('X-Sender', $this->clean_email($this->_headers['From']));
		$this->set_header('X-Mailer', $this->useragent);
		$this->set_header('X-Priority', $this->_priorities[$this->priority]);
		$this->set_header('Message-ID', $this->_get_message_id());
		$this->set_header('Mime-Version', '1.0');
=======
		$this->_set_header('X-Sender', $this->clean_email($this->_headers['From']));
		$this->_set_header('X-Mailer', $this->useragent);
		$this->_set_header('X-Priority', $this->_priorities[$this->priority - 1]);
		$this->_set_header('Message-ID', $this->_get_message_id());
		$this->_set_header('Mime-Version', '1.0');
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Write Headers as a string
	 *
<<<<<<< HEAD
=======
	 * @access	protected
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	void
	 */
	protected function _write_headers()
	{
<<<<<<< HEAD
		if ($this->protocol === 'mail')
		{
			if (isset($this->_headers['Subject']))
			{
				$this->_subject = $this->_headers['Subject'];
				unset($this->_headers['Subject']);
			}
		}

		reset($this->_headers);
		$this->_header_str = '';
=======
		if ($this->protocol == 'mail')
		{
			$this->_subject = $this->_headers['Subject'];
			unset($this->_headers['Subject']);
		}

		reset($this->_headers);
		$this->_header_str = "";
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

		foreach ($this->_headers as $key => $val)
		{
			$val = trim($val);

<<<<<<< HEAD
			if ($val !== '')
			{
				$this->_header_str .= $key.': '.$val.$this->newline;
			}
		}

		if ($this->_get_protocol() === 'mail')
=======
			if ($val != "")
			{
				$this->_header_str .= $key.": ".$val.$this->newline;
			}
		}

		if ($this->_get_protocol() == 'mail')
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$this->_header_str = rtrim($this->_header_str);
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Build Final Body and attachments
	 *
<<<<<<< HEAD
	 * @return	bool
	 */
	protected function _build_message()
	{
		if ($this->wordwrap === TRUE && $this->mailtype !== 'html')
=======
	 * @access	protected
	 * @return	void
	 */
	protected function _build_message()
	{
		if ($this->wordwrap === TRUE  AND  $this->mailtype != 'html')
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$this->_body = $this->word_wrap($this->_body);
		}

		$this->_set_boundaries();
		$this->_write_headers();

<<<<<<< HEAD
		$hdr = ($this->_get_protocol() === 'mail') ? $this->newline : '';
=======
		$hdr = ($this->_get_protocol() == 'mail') ? $this->newline : '';
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		$body = '';

		switch ($this->_get_content_type())
		{
			case 'plain' :

<<<<<<< HEAD
				$hdr .= 'Content-Type: text/plain; charset='.$this->charset.$this->newline
					.'Content-Transfer-Encoding: '.$this->_get_encoding();

				if ($this->_get_protocol() === 'mail')
=======
				$hdr .= "Content-Type: text/plain; charset=" . $this->charset . $this->newline;
				$hdr .= "Content-Transfer-Encoding: " . $this->_get_encoding();

				if ($this->_get_protocol() == 'mail')
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
				{
					$this->_header_str .= $hdr;
					$this->_finalbody = $this->_body;
				}
				else
				{
<<<<<<< HEAD
					$this->_finalbody = $hdr.$this->newline.$this->newline.$this->_body;
=======
					$this->_finalbody = $hdr . $this->newline . $this->newline . $this->_body;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
				}

				return;

<<<<<<< HEAD
=======
			break;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			case 'html' :

				if ($this->send_multipart === FALSE)
				{
<<<<<<< HEAD
					$hdr .= 'Content-Type: text/html; charset='.$this->charset.$this->newline
						.'Content-Transfer-Encoding: quoted-printable';
				}
				else
				{
					$hdr .= 'Content-Type: multipart/alternative; boundary="'.$this->_alt_boundary.'"';

					$body .= $this->_get_mime_message().$this->newline.$this->newline
						.'--'.$this->_alt_boundary.$this->newline

						.'Content-Type: text/plain; charset='.$this->charset.$this->newline
						.'Content-Transfer-Encoding: '.$this->_get_encoding().$this->newline.$this->newline
						.$this->_get_alt_message().$this->newline.$this->newline.'--'.$this->_alt_boundary.$this->newline

						.'Content-Type: text/html; charset='.$this->charset.$this->newline
						.'Content-Transfer-Encoding: quoted-printable'.$this->newline.$this->newline;
				}

				$this->_finalbody = $body.$this->_prep_quoted_printable($this->_body).$this->newline.$this->newline;

				if ($this->_get_protocol() === 'mail')
=======
					$hdr .= "Content-Type: text/html; charset=" . $this->charset . $this->newline;
					$hdr .= "Content-Transfer-Encoding: quoted-printable";
				}
				else
				{
					$hdr .= "Content-Type: multipart/alternative; boundary=\"" . $this->_alt_boundary . "\"" . $this->newline . $this->newline;

					$body .= $this->_get_mime_message() . $this->newline . $this->newline;
					$body .= "--" . $this->_alt_boundary . $this->newline;

					$body .= "Content-Type: text/plain; charset=" . $this->charset . $this->newline;
					$body .= "Content-Transfer-Encoding: " . $this->_get_encoding() . $this->newline . $this->newline;
					$body .= $this->_get_alt_message() . $this->newline . $this->newline . "--" . $this->_alt_boundary . $this->newline;

					$body .= "Content-Type: text/html; charset=" . $this->charset . $this->newline;
					$body .= "Content-Transfer-Encoding: quoted-printable" . $this->newline . $this->newline;
				}

				$this->_finalbody = $body . $this->_prep_quoted_printable($this->_body) . $this->newline . $this->newline;


				if ($this->_get_protocol() == 'mail')
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
				{
					$this->_header_str .= $hdr;
				}
				else
				{
<<<<<<< HEAD
					$this->_finalbody = $hdr.$this->newline.$this->newline.$this->_finalbody;
				}

				if ($this->send_multipart !== FALSE)
				{
					$this->_finalbody .= '--'.$this->_alt_boundary.'--';
=======
					$this->_finalbody = $hdr . $this->_finalbody;
				}


				if ($this->send_multipart !== FALSE)
				{
					$this->_finalbody .= "--" . $this->_alt_boundary . "--";
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
				}

				return;

<<<<<<< HEAD
			case 'plain-attach' :

				$hdr .= 'Content-Type: multipart/'.$this->multipart.'; boundary="'.$this->_atc_boundary.'"';

				if ($this->_get_protocol() === 'mail')
=======
			break;
			case 'plain-attach' :

				$hdr .= "Content-Type: multipart/".$this->multipart."; boundary=\"" . $this->_atc_boundary."\"" . $this->newline . $this->newline;

				if ($this->_get_protocol() == 'mail')
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
				{
					$this->_header_str .= $hdr;
				}

<<<<<<< HEAD
				$body .= $this->_get_mime_message().$this->newline
					.$this->newline
					.'--'.$this->_atc_boundary.$this->newline
					.'Content-Type: text/plain; charset='.$this->charset.$this->newline
					.'Content-Transfer-Encoding: '.$this->_get_encoding().$this->newline
					.$this->newline
					.$this->_body.$this->newline.$this->newline;
=======
				$body .= $this->_get_mime_message() . $this->newline . $this->newline;
				$body .= "--" . $this->_atc_boundary . $this->newline;

				$body .= "Content-Type: text/plain; charset=" . $this->charset . $this->newline;
				$body .= "Content-Transfer-Encoding: " . $this->_get_encoding() . $this->newline . $this->newline;

				$body .= $this->_body . $this->newline . $this->newline;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

			break;
			case 'html-attach' :

<<<<<<< HEAD
				$hdr .= 'Content-Type: multipart/'.$this->multipart.'; boundary="'.$this->_atc_boundary.'"';

				if ($this->_get_protocol() === 'mail')
=======
				$hdr .= "Content-Type: multipart/".$this->multipart."; boundary=\"" . $this->_atc_boundary."\"" . $this->newline . $this->newline;

				if ($this->_get_protocol() == 'mail')
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
				{
					$this->_header_str .= $hdr;
				}

<<<<<<< HEAD
				$body .= $this->_get_mime_message().$this->newline.$this->newline
					.'--'.$this->_atc_boundary.$this->newline

					.'Content-Type: multipart/alternative; boundary="'.$this->_alt_boundary.'"'.$this->newline.$this->newline
					.'--'.$this->_alt_boundary.$this->newline

					.'Content-Type: text/plain; charset='.$this->charset.$this->newline
					.'Content-Transfer-Encoding: '.$this->_get_encoding().$this->newline.$this->newline
					.$this->_get_alt_message().$this->newline.$this->newline.'--'.$this->_alt_boundary.$this->newline

					.'Content-Type: text/html; charset='.$this->charset.$this->newline
					.'Content-Transfer-Encoding: quoted-printable'.$this->newline.$this->newline

					.$this->_prep_quoted_printable($this->_body).$this->newline.$this->newline
					.'--'.$this->_alt_boundary.'--'.$this->newline.$this->newline;
=======
				$body .= $this->_get_mime_message() . $this->newline . $this->newline;
				$body .= "--" . $this->_atc_boundary . $this->newline;

				$body .= "Content-Type: multipart/alternative; boundary=\"" . $this->_alt_boundary . "\"" . $this->newline .$this->newline;
				$body .= "--" . $this->_alt_boundary . $this->newline;

				$body .= "Content-Type: text/plain; charset=" . $this->charset . $this->newline;
				$body .= "Content-Transfer-Encoding: " . $this->_get_encoding() . $this->newline . $this->newline;
				$body .= $this->_get_alt_message() . $this->newline . $this->newline . "--" . $this->_alt_boundary . $this->newline;

				$body .= "Content-Type: text/html; charset=" . $this->charset . $this->newline;
				$body .= "Content-Transfer-Encoding: quoted-printable" . $this->newline . $this->newline;

				$body .= $this->_prep_quoted_printable($this->_body) . $this->newline . $this->newline;
				$body .= "--" . $this->_alt_boundary . "--" . $this->newline . $this->newline;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

			break;
		}

		$attachment = array();
<<<<<<< HEAD
		for ($i = 0, $c = count($this->_attachments), $z = 0; $i < $c; $i++)
		{
			$filename = $this->_attachments[$i]['name'][0];
			$basename = ($this->_attachments[$i]['name'][1] === NULL)
				? basename($filename) : $this->_attachments[$i]['name'][1];

			$attachment[$z++] = '--'.$this->_atc_boundary.$this->newline
				.'Content-type: '.$this->_attachments[$i]['type'].'; '
				.'name="'.$basename.'"'.$this->newline
				.'Content-Disposition: '.$this->_attachments[$i]['disposition'].';'.$this->newline
				.'Content-Transfer-Encoding: base64'.$this->newline
				.(empty($this->_attachments[$i]['cid']) ? '' : 'Content-ID: <'.$this->_attachments[$i]['cid'].'>'.$this->newline);

			$attachment[$z++] = $this->_attachments[$i]['content'];
		}

		$body .= implode($this->newline, $attachment).$this->newline.'--'.$this->_atc_boundary.'--';
		$this->_finalbody = ($this->_get_protocol() === 'mail')
			? $body
			: $hdr.$this->newline.$this->newline.$body;

		return TRUE;
=======

		$z = 0;

		for ($i=0; $i < count($this->_attach_name); $i++)
		{
			$filename = $this->_attach_name[$i];
			$basename = basename($filename);
			$ctype = $this->_attach_type[$i];

			if ( ! file_exists($filename))
			{
				$this->_set_error_message('lang:email_attachment_missing', $filename);
				return FALSE;
			}

			$h  = "--".$this->_atc_boundary.$this->newline;
			$h .= "Content-type: ".$ctype."; ";
			$h .= "name=\"".$basename."\"".$this->newline;
			$h .= "Content-Disposition: ".$this->_attach_disp[$i].";".$this->newline;
			$h .= "Content-Transfer-Encoding: base64".$this->newline;

			$attachment[$z++] = $h;
			$file = filesize($filename) +1;

			if ( ! $fp = fopen($filename, FOPEN_READ))
			{
				$this->_set_error_message('lang:email_attachment_unreadable', $filename);
				return FALSE;
			}

			$attachment[$z++] = chunk_split(base64_encode(fread($fp, $file)));
			fclose($fp);
		}

		$body .= implode($this->newline, $attachment).$this->newline."--".$this->_atc_boundary."--";


		if ($this->_get_protocol() == 'mail')
		{
			$this->_finalbody = $body;
		}
		else
		{
			$this->_finalbody = $hdr . $body;
		}

		return;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Prep Quoted Printable
	 *
	 * Prepares string for Quoted-Printable Content-Transfer-Encoding
	 * Refer to RFC 2045 http://www.ietf.org/rfc/rfc2045.txt
	 *
<<<<<<< HEAD
	 * @param	string
	 * @return	string
	 */
	protected function _prep_quoted_printable($str)
	{
		// We are intentionally wrapping so mail servers will encode characters
		// properly and MUAs will behave, so {unwrap} must go!
		$str = str_replace(array('{unwrap}', '{/unwrap}'), '', $str);

		// RFC 2045 specifies CRLF as "\r\n".
		// However, many developers choose to override that and violate
		// the RFC rules due to (apparently) a bug in MS Exchange,
		// which only works with "\n".
		if ($this->crlf === "\r\n")
		{
			if (is_php('5.3'))
			{
				return quoted_printable_encode($str);
			}
			elseif (function_exists('imap_8bit'))
			{
				return imap_8bit($str);
			}
		}

		// Reduce multiple spaces & remove nulls
		$str = preg_replace(array('| +|', '/\x00+/'), array(' ', ''), $str);
=======
	 * @access	protected
	 * @param	string
	 * @param	integer
	 * @return	string
	 */
	protected function _prep_quoted_printable($str, $charlim = '')
	{
		// Set the character limit
		// Don't allow over 76, as that will make servers and MUAs barf
		// all over quoted-printable data
		if ($charlim == '' OR $charlim > '76')
		{
			$charlim = '76';
		}

		// Reduce multiple spaces
		$str = preg_replace("| +|", " ", $str);

		// kill nulls
		$str = preg_replace('/\x00+/', '', $str);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

		// Standardize newlines
		if (strpos($str, "\r") !== FALSE)
		{
			$str = str_replace(array("\r\n", "\r"), "\n", $str);
		}

<<<<<<< HEAD
		$escape = '=';
		$output = '';

		foreach (explode("\n", $str) as $line)
=======
		// We are intentionally wrapping so mail servers will encode characters
		// properly and MUAs will behave, so {unwrap} must go!
		$str = str_replace(array('{unwrap}', '{/unwrap}'), '', $str);

		// Break into an array of lines
		$lines = explode("\n", $str);

		$escape = '=';
		$output = '';

		foreach ($lines as $line)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$length = strlen($line);
			$temp = '';

			// Loop through each character in the line to add soft-wrap
			// characters at the end of a line " =\r\n" and add the newly
			// processed line(s) to the output (see comment on $crlf class property)
			for ($i = 0; $i < $length; $i++)
			{
				// Grab the next character
<<<<<<< HEAD
				$char = $line[$i];
				$ascii = ord($char);

				// Convert spaces and tabs but only if it's the end of the line
				if ($i === ($length - 1) && ($ascii === 32 OR $ascii === 9))
				{
					$char = $escape.sprintf('%02s', dechex($ascii));
				}
				elseif ($ascii === 61) // encode = signs
=======
				$char = substr($line, $i, 1);
				$ascii = ord($char);

				// Convert spaces and tabs but only if it's the end of the line
				if ($i == ($length - 1))
				{
					$char = ($ascii == '32' OR $ascii == '9') ? $escape.sprintf('%02s', dechex($ascii)) : $char;
				}

				// encode = signs
				if ($ascii == '61')
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
				{
					$char = $escape.strtoupper(sprintf('%02s', dechex($ascii)));  // =3D
				}

				// If we're at the character limit, add the line to the output,
				// reset our temp variable, and keep on chuggin'
<<<<<<< HEAD
				if ((strlen($temp) + strlen($char)) >= 76)
=======
				if ((strlen($temp) + strlen($char)) >= $charlim)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
				{
					$output .= $temp.$escape.$this->crlf;
					$temp = '';
				}

				// Add the character to our temporary line
				$temp .= $char;
			}

			// Add our completed line to the output
			$output .= $temp.$this->crlf;
		}

		// get rid of extra CRLF tacked onto the end
<<<<<<< HEAD
		return substr($output, 0, strlen($this->crlf) * -1);
=======
		$output = substr($output, 0, strlen($this->crlf) * -1);

		return $output;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Prep Q Encoding
	 *
<<<<<<< HEAD
	 * Performs "Q Encoding" on a string for use in email headers.
	 * It's related but not identical to quoted-printable, so it has its
	 * own method.
	 *
	 * @param	string
	 * @return	string
	 */
	protected function _prep_q_encoding($str)
	{
		$str = str_replace(array("\r", "\n"), '', $str);

		if ($this->charset === 'UTF-8')
		{
			if (MB_ENABLED === TRUE)
			{
				return mb_encode_mimeheader($str, $this->charset, 'Q', $this->crlf);
			}
			elseif (ICONV_ENABLED === TRUE)
			{
				$output = @iconv_mime_encode('', $str,
					array(
						'scheme' => 'Q',
						'line-length' => 76,
						'input-charset' => $this->charset,
						'output-charset' => $this->charset,
						'line-break-chars' => $this->crlf
					)
				);

				// There are reports that iconv_mime_encode() might fail and return FALSE
				if ($output !== FALSE)
				{
					// iconv_mime_encode() will always put a header field name.
					// We've passed it an empty one, but it still prepends our
					// encoded string with ': ', so we need to strip it.
					return substr($output, 2);
				}

				$chars = iconv_strlen($str, 'UTF-8');
			}
		}

		// We might already have this set for UTF-8
		isset($chars) OR $chars = strlen($str);

		$output = '=?'.$this->charset.'?Q?';
		for ($i = 0, $length = strlen($output); $i < $chars; $i++)
		{
			$chr = ($this->charset === 'UTF-8' && ICONV_ENABLED === TRUE)
				? '='.implode('=', str_split(strtoupper(bin2hex(iconv_substr($str, $i, 1, $this->charset))), 2))
				: '='.strtoupper(bin2hex($str[$i]));

			// RFC 2045 sets a limit of 76 characters per line.
			// We'll append ?= to the end of each line though.
			if ($length + ($l = strlen($chr)) > 74)
			{
				$output .= '?='.$this->crlf // EOL
					.' =?'.$this->charset.'?Q?'.$chr; // New line
				$length = 6 + strlen($this->charset) + $l; // Reset the length for the new line
			}
			else
			{
				$output .= $chr;
				$length += $l;
			}
		}

		// End the header
		return $output.'?=';
=======
	 * Performs "Q Encoding" on a string for use in email headers.  It's related
	 * but not identical to quoted-printable, so it has its own method
	 *
	 * @access	public
	 * @param	str
	 * @param	bool	// set to TRUE for processing From: headers
	 * @return	str
	 */
	protected function _prep_q_encoding($str, $from = FALSE)
	{
		$str = str_replace(array("\r", "\n"), array('', ''), $str);

		// Line length must not exceed 76 characters, so we adjust for
		// a space, 7 extra characters =??Q??=, and the charset that we will add to each line
		$limit = 75 - 7 - strlen($this->charset);

		// these special characters must be converted too
		$convert = array('_', '=', '?');

		if ($from === TRUE)
		{
			$convert[] = ',';
			$convert[] = ';';
		}

		$output = '';
		$temp = '';

		for ($i = 0, $length = strlen($str); $i < $length; $i++)
		{
			// Grab the next character
			$char = substr($str, $i, 1);
			$ascii = ord($char);

			// convert ALL non-printable ASCII characters and our specials
			if ($ascii < 32 OR $ascii > 126 OR in_array($char, $convert))
			{
				$char = '='.dechex($ascii);
			}

			// handle regular spaces a bit more compactly than =20
			if ($ascii == 32)
			{
				$char = '_';
			}

			// If we're at the character limit, add the line to the output,
			// reset our temp variable, and keep on chuggin'
			if ((strlen($temp) + strlen($char)) >= $limit)
			{
				$output .= $temp.$this->crlf;
				$temp = '';
			}

			// Add the character to our temporary line
			$temp .= $char;
		}

		$str = $output.$temp;

		// wrap each line with the shebang, charset, and transfer encoding
		// the preceding space on successive lines is required for header "folding"
		$str = trim(preg_replace('/^(.*)$/m', ' =?'.$this->charset.'?Q?$1?=', $str));

		return $str;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Send Email
	 *
<<<<<<< HEAD
	 * @param	bool	$auto_clear = TRUE
	 * @return	bool
	 */
	public function send($auto_clear = TRUE)
	{
		if ( ! isset($this->_headers['From']))
		{
			$this->_set_error_message('lang:email_no_from');
			return FALSE;
		}

		if ($this->_replyto_flag === FALSE)
=======
	 * @access	public
	 * @return	bool
	 */
	public function send()
	{
		if ($this->_replyto_flag == FALSE)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$this->reply_to($this->_headers['From']);
		}

<<<<<<< HEAD
		if ( ! isset($this->_recipients) && ! isset($this->_headers['To'])
			&& ! isset($this->_bcc_array) && ! isset($this->_headers['Bcc'])
			&& ! isset($this->_headers['Cc']))
=======
		if (( ! isset($this->_recipients) AND ! isset($this->_headers['To']))  AND
			( ! isset($this->_bcc_array) AND ! isset($this->_headers['Bcc'])) AND
			( ! isset($this->_headers['Cc'])))
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$this->_set_error_message('lang:email_no_recipients');
			return FALSE;
		}

		$this->_build_headers();

<<<<<<< HEAD
		if ($this->bcc_batch_mode && count($this->_bcc_array) > $this->bcc_batch_size)
		{
			$result = $this->batch_bcc_send();

			if ($result && $auto_clear)
			{
				$this->clear();
			}

			return $result;
		}

		if ($this->_build_message() === FALSE)
		{
			return FALSE;
		}

		$result = $this->_spool_email();

		if ($result && $auto_clear)
		{
			$this->clear();
		}

		return $result;
=======
		if ($this->bcc_batch_mode  AND  count($this->_bcc_array) > 0)
		{
			if (count($this->_bcc_array) > $this->bcc_batch_size)
				return $this->batch_bcc_send();
		}

		$this->_build_message();

		if ( ! $this->_spool_email())
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Batch Bcc Send. Sends groups of BCCs in batches
	 *
	 * @return	void
	 */
	public function batch_bcc_send()
	{
		$float = $this->bcc_batch_size - 1;
		$set = '';
		$chunk = array();

		for ($i = 0, $c = count($this->_bcc_array); $i < $c; $i++)
		{
			if (isset($this->_bcc_array[$i]))
			{
				$set .= ', '.$this->_bcc_array[$i];
			}

			if ($i === $float)
			{
				$chunk[] = substr($set, 1);
				$float += $this->bcc_batch_size;
				$set = '';
			}

			if ($i === $c-1)
=======
	 * Batch Bcc Send.  Sends groups of BCCs in batches
	 *
	 * @access	public
	 * @return	bool
	 */
	public function batch_bcc_send()
	{
		$float = $this->bcc_batch_size -1;

		$set = "";

		$chunk = array();

		for ($i = 0; $i < count($this->_bcc_array); $i++)
		{
			if (isset($this->_bcc_array[$i]))
			{
				$set .= ", ".$this->_bcc_array[$i];
			}

			if ($i == $float)
			{
				$chunk[] = substr($set, 1);
				$float = $float + $this->bcc_batch_size;
				$set = "";
			}

			if ($i == count($this->_bcc_array)-1)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			{
				$chunk[] = substr($set, 1);
			}
		}

<<<<<<< HEAD
		for ($i = 0, $c = count($chunk); $i < $c; $i++)
		{
			unset($this->_headers['Bcc']);

			$bcc = $this->clean_email($this->_str_to_array($chunk[$i]));

			if ($this->protocol !== 'smtp')
			{
				$this->set_header('Bcc', implode(', ', $bcc));
=======
		for ($i = 0; $i < count($chunk); $i++)
		{
			unset($this->_headers['Bcc']);
			unset($bcc);

			$bcc = $this->_str_to_array($chunk[$i]);
			$bcc = $this->clean_email($bcc);

			if ($this->protocol != 'smtp')
			{
				$this->_set_header('Bcc', implode(", ", $bcc));
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			}
			else
			{
				$this->_bcc_array = $bcc;
			}

<<<<<<< HEAD
			if ($this->_build_message() === FALSE)
			{
				return FALSE;
			}

=======
			$this->_build_message();
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			$this->_spool_email();
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Unwrap special elements
	 *
<<<<<<< HEAD
=======
	 * @access	protected
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	void
	 */
	protected function _unwrap_specials()
	{
<<<<<<< HEAD
		$this->_finalbody = preg_replace_callback('/\{unwrap\}(.*?)\{\/unwrap\}/si', array($this, '_remove_nl_callback'), $this->_finalbody);
=======
		$this->_finalbody = preg_replace_callback("/\{unwrap\}(.*?)\{\/unwrap\}/si", array($this, '_remove_nl_callback'), $this->_finalbody);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Strip line-breaks via callback
	 *
<<<<<<< HEAD
	 * @param	string	$matches
=======
	 * @access	protected
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	string
	 */
	protected function _remove_nl_callback($matches)
	{
		if (strpos($matches[1], "\r") !== FALSE OR strpos($matches[1], "\n") !== FALSE)
		{
			$matches[1] = str_replace(array("\r\n", "\r", "\n"), '', $matches[1]);
		}

		return $matches[1];
	}

	// --------------------------------------------------------------------

	/**
	 * Spool mail to the mail server
	 *
<<<<<<< HEAD
=======
	 * @access	protected
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	bool
	 */
	protected function _spool_email()
	{
		$this->_unwrap_specials();

<<<<<<< HEAD
		$method = '_send_with_'.$this->_get_protocol();
		if ( ! $this->$method())
		{
			$this->_set_error_message('lang:email_send_failure_'.($this->_get_protocol() === 'mail' ? 'phpmail' : $this->_get_protocol()));
			return FALSE;
=======
		switch ($this->_get_protocol())
		{
			case 'mail'	:

					if ( ! $this->_send_with_mail())
					{
						$this->_set_error_message('lang:email_send_failure_phpmail');
						return FALSE;
					}
			break;
			case 'sendmail'	:

					if ( ! $this->_send_with_sendmail())
					{
						$this->_set_error_message('lang:email_send_failure_sendmail');
						return FALSE;
					}
			break;
			case 'smtp'	:

					if ( ! $this->_send_with_smtp())
					{
						$this->_set_error_message('lang:email_send_failure_smtp');
						return FALSE;
					}
			break;

>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		$this->_set_error_message('lang:email_sent', $this->_get_protocol());
		return TRUE;
	}

	// --------------------------------------------------------------------

	/**
	 * Send using mail()
	 *
<<<<<<< HEAD
=======
	 * @access	protected
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	bool
	 */
	protected function _send_with_mail()
	{
<<<<<<< HEAD
		if (is_array($this->_recipients))
		{
			$this->_recipients = implode(', ', $this->_recipients);
		}

		if ($this->_safe_mode === TRUE)
		{
			return mail($this->_recipients, $this->_subject, $this->_finalbody, $this->_header_str);
=======
		if ($this->_safe_mode == TRUE)
		{
			if ( ! mail($this->_recipients, $this->_subject, $this->_finalbody, $this->_header_str))
			{
				return FALSE;
			}
			else
			{
				return TRUE;
			}
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}
		else
		{
			// most documentation of sendmail using the "-f" flag lacks a space after it, however
			// we've encountered servers that seem to require it to be in place.
<<<<<<< HEAD
			return mail($this->_recipients, $this->_subject, $this->_finalbody, $this->_header_str, '-f '.$this->clean_email($this->_headers['Return-Path']));
=======

			if ( ! mail($this->_recipients, $this->_subject, $this->_finalbody, $this->_header_str, "-f ".$this->clean_email($this->_headers['From'])))
			{
				return FALSE;
			}
			else
			{
				return TRUE;
			}
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Send using Sendmail
	 *
<<<<<<< HEAD
=======
	 * @access	protected
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	bool
	 */
	protected function _send_with_sendmail()
	{
<<<<<<< HEAD
		// is popen() enabled?
		if ( ! function_usable('popen')
			OR FALSE === ($fp = @popen(
						$this->mailpath.' -oi -f '.$this->clean_email($this->_headers['From'])
							.' -t -r '.$this->clean_email($this->_headers['Return-Path'])
						, 'w'))
		) // server probably has popen disabled, so nothing we can do to get a verbose error.
		{
=======
		$fp = @popen($this->mailpath . " -oi -f ".$this->clean_email($this->_headers['From'])." -t", 'w');

		if ($fp === FALSE OR $fp === NULL)
		{
			// server probably has popen disabled, so nothing we can do to get a verbose error.
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			return FALSE;
		}

		fputs($fp, $this->_header_str);
		fputs($fp, $this->_finalbody);

		$status = pclose($fp);

<<<<<<< HEAD
		if ($status !== 0)
=======
		if (version_compare(PHP_VERSION, '4.2.3') == -1)
		{
			$status = $status >> 8 & 0xFF;
		}

		if ($status != 0)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$this->_set_error_message('lang:email_exit_status', $status);
			$this->_set_error_message('lang:email_no_socket');
			return FALSE;
		}

		return TRUE;
	}

	// --------------------------------------------------------------------

	/**
	 * Send using SMTP
	 *
<<<<<<< HEAD
=======
	 * @access	protected
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	bool
	 */
	protected function _send_with_smtp()
	{
<<<<<<< HEAD
		if ($this->smtp_host === '')
=======
		if ($this->smtp_host == '')
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$this->_set_error_message('lang:email_no_hostname');
			return FALSE;
		}

<<<<<<< HEAD
		if ( ! $this->_smtp_connect() OR ! $this->_smtp_authenticate())
		{
			return FALSE;
		}
=======
		$this->_smtp_connect();
		$this->_smtp_authenticate();
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

		$this->_send_command('from', $this->clean_email($this->_headers['From']));

		foreach ($this->_recipients as $val)
		{
			$this->_send_command('to', $val);
		}

		if (count($this->_cc_array) > 0)
		{
			foreach ($this->_cc_array as $val)
			{
<<<<<<< HEAD
				if ($val !== '')
=======
				if ($val != "")
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
				{
					$this->_send_command('to', $val);
				}
			}
		}

		if (count($this->_bcc_array) > 0)
		{
			foreach ($this->_bcc_array as $val)
			{
<<<<<<< HEAD
				if ($val !== '')
=======
				if ($val != "")
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
				{
					$this->_send_command('to', $val);
				}
			}
		}

		$this->_send_command('data');

		// perform dot transformation on any lines that begin with a dot
<<<<<<< HEAD
		$this->_send_data($this->_header_str.preg_replace('/^\./m', '..$1', $this->_finalbody));
=======
		$this->_send_data($this->_header_str . preg_replace('/^\./m', '..$1', $this->_finalbody));
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

		$this->_send_data('.');

		$reply = $this->_get_smtp_data();

		$this->_set_error_message($reply);

<<<<<<< HEAD
		if (strpos($reply, '250') !== 0)
=======
		if (strncmp($reply, '250', 3) != 0)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$this->_set_error_message('lang:email_smtp_error', $reply);
			return FALSE;
		}

<<<<<<< HEAD
		if ($this->smtp_keepalive)
		{
			$this->_send_command('reset');
		}
		else
		{
			$this->_send_command('quit');
		}

=======
		$this->_send_command('quit');
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		return TRUE;
	}

	// --------------------------------------------------------------------

	/**
	 * SMTP Connect
	 *
<<<<<<< HEAD
=======
	 * @access	protected
	 * @param	string
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	string
	 */
	protected function _smtp_connect()
	{
<<<<<<< HEAD
		if (is_resource($this->_smtp_connect))
		{
			return TRUE;
		}

		$ssl = ($this->smtp_crypto === 'ssl') ? 'ssl://' : '';

		$this->_smtp_connect = fsockopen($ssl.$this->smtp_host,
							$this->smtp_port,
							$errno,
							$errstr,
							$this->smtp_timeout);

		if ( ! is_resource($this->_smtp_connect))
		{
			$this->_set_error_message('lang:email_smtp_error', $errno.' '.$errstr);
			return FALSE;
		}

		stream_set_timeout($this->_smtp_connect, $this->smtp_timeout);
		$this->_set_error_message($this->_get_smtp_data());

		if ($this->smtp_crypto === 'tls')
		{
			$this->_send_command('hello');
			$this->_send_command('starttls');

			$crypto = stream_socket_enable_crypto($this->_smtp_connect, TRUE, STREAM_CRYPTO_METHOD_TLS_CLIENT);

			if ($crypto !== TRUE)
			{
				$this->_set_error_message('lang:email_smtp_error', $this->_get_smtp_data());
				return FALSE;
			}
=======
		$ssl = NULL;
		if ($this->smtp_crypto == 'ssl')
			$ssl = 'ssl://';
		$this->_smtp_connect = fsockopen($ssl.$this->smtp_host,
										$this->smtp_port,
										$errno,
										$errstr,
										$this->smtp_timeout);

		if ( ! is_resource($this->_smtp_connect))
		{
			$this->_set_error_message('lang:email_smtp_error', $errno." ".$errstr);
			return FALSE;
		}

		$this->_set_error_message($this->_get_smtp_data());

		if ($this->smtp_crypto == 'tls')
		{
			$this->_send_command('hello');
			$this->_send_command('starttls');
			stream_socket_enable_crypto($this->_smtp_connect, TRUE, STREAM_CRYPTO_METHOD_TLS_CLIENT);
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		return $this->_send_command('hello');
	}

	// --------------------------------------------------------------------

	/**
	 * Send SMTP command
	 *
<<<<<<< HEAD
=======
	 * @access	protected
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @param	string
	 * @param	string
	 * @return	string
	 */
	protected function _send_command($cmd, $data = '')
	{
		switch ($cmd)
		{
			case 'hello' :

<<<<<<< HEAD
						if ($this->_smtp_auth OR $this->_get_encoding() === '8bit')
						{
							$this->_send_data('EHLO '.$this->_get_hostname());
						}
						else
						{
							$this->_send_data('HELO '.$this->_get_hostname());
						}
=======
					if ($this->_smtp_auth OR $this->_get_encoding() == '8bit')
						$this->_send_data('EHLO '.$this->_get_hostname());
					else
						$this->_send_data('HELO '.$this->_get_hostname());
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

						$resp = 250;
			break;
			case 'starttls'	:

						$this->_send_data('STARTTLS');
<<<<<<< HEAD
=======

>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
						$resp = 220;
			break;
			case 'from' :

						$this->_send_data('MAIL FROM:<'.$data.'>');
<<<<<<< HEAD
						$resp = 250;
			break;
			case 'to' :

						if ($this->dsn)
						{
							$this->_send_data('RCPT TO:<'.$data.'> NOTIFY=SUCCESS,DELAY,FAILURE ORCPT=rfc822;'.$data);
						}
						else
						{
							$this->_send_data('RCPT TO:<'.$data.'>');
						}
=======

						$resp = 250;
			break;
			case 'to'	:

						$this->_send_data('RCPT TO:<'.$data.'>');
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

						$resp = 250;
			break;
			case 'data'	:

						$this->_send_data('DATA');
<<<<<<< HEAD
						$resp = 354;
			break;
			case 'reset':

						$this->_send_data('RSET');
						$resp = 250;
=======

						$resp = 354;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			break;
			case 'quit'	:

						$this->_send_data('QUIT');
<<<<<<< HEAD
=======

>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
						$resp = 221;
			break;
		}

		$reply = $this->_get_smtp_data();

<<<<<<< HEAD
		$this->_debug_msg[] = '<pre>'.$cmd.': '.$reply.'</pre>';

		if ((int) substr($reply, 0, 3) !== $resp)
=======
		$this->_debug_msg[] = "<pre>".$cmd.": ".$reply."</pre>";

		if (substr($reply, 0, 3) != $resp)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$this->_set_error_message('lang:email_smtp_error', $reply);
			return FALSE;
		}

<<<<<<< HEAD
		if ($cmd === 'quit')
=======
		if ($cmd == 'quit')
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			fclose($this->_smtp_connect);
		}

		return TRUE;
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * SMTP Authenticate
	 *
=======
	 *  SMTP Authenticate
	 *
	 * @access	protected
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	bool
	 */
	protected function _smtp_authenticate()
	{
		if ( ! $this->_smtp_auth)
		{
			return TRUE;
		}

<<<<<<< HEAD
		if ($this->smtp_user === '' && $this->smtp_pass === '')
=======
		if ($this->smtp_user == ""  AND  $this->smtp_pass == "")
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$this->_set_error_message('lang:email_no_smtp_unpw');
			return FALSE;
		}

		$this->_send_data('AUTH LOGIN');

		$reply = $this->_get_smtp_data();

<<<<<<< HEAD
		if (strpos($reply, '503') === 0)	// Already authenticated
		{
			return TRUE;
		}
		elseif (strpos($reply, '334') !== 0)
=======
		if (strncmp($reply, '334', 3) != 0)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$this->_set_error_message('lang:email_failed_smtp_login', $reply);
			return FALSE;
		}

		$this->_send_data(base64_encode($this->smtp_user));

		$reply = $this->_get_smtp_data();

<<<<<<< HEAD
		if (strpos($reply, '334') !== 0)
=======
		if (strncmp($reply, '334', 3) != 0)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$this->_set_error_message('lang:email_smtp_auth_un', $reply);
			return FALSE;
		}

		$this->_send_data(base64_encode($this->smtp_pass));

		$reply = $this->_get_smtp_data();

<<<<<<< HEAD
		if (strpos($reply, '235') !== 0)
=======
		if (strncmp($reply, '235', 3) != 0)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$this->_set_error_message('lang:email_smtp_auth_pw', $reply);
			return FALSE;
		}

		return TRUE;
	}

	// --------------------------------------------------------------------

	/**
	 * Send SMTP data
	 *
<<<<<<< HEAD
	 * @param	string	$data
=======
	 * @access	protected
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	bool
	 */
	protected function _send_data($data)
	{
<<<<<<< HEAD
		$data .= $this->newline;
		for ($written = 0, $length = strlen($data); $written < $length; $written += $result)
		{
			if (($result = fwrite($this->_smtp_connect, substr($data, $written))) === FALSE)
			{
				break;
			}
		}

		if ($result === FALSE)
=======
		if ( ! fwrite($this->_smtp_connect, $data . $this->newline))
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$this->_set_error_message('lang:email_smtp_data_failure', $data);
			return FALSE;
		}
<<<<<<< HEAD

		return TRUE;
=======
		else
		{
			return TRUE;
		}
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Get SMTP data
	 *
<<<<<<< HEAD
=======
	 * @access	protected
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	string
	 */
	protected function _get_smtp_data()
	{
<<<<<<< HEAD
		$data = '';
=======
		$data = "";
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

		while ($str = fgets($this->_smtp_connect, 512))
		{
			$data .= $str;

<<<<<<< HEAD
			if ($str[3] === ' ')
=======
			if (substr($str, 3, 1) == " ")
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			{
				break;
			}
		}

		return $data;
	}

	// --------------------------------------------------------------------

	/**
	 * Get Hostname
	 *
<<<<<<< HEAD
	 * There are only two legal types of hostname - either a fully
	 * qualified domain name (eg: "mail.example.com") or an IP literal
	 * (eg: "[1.2.3.4]").
	 *
	 * @link	https://tools.ietf.org/html/rfc5321#section-2.3.5
	 * @link	http://cbl.abuseat.org/namingproblems.html
=======
	 * @access	protected
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * @return	string
	 */
	protected function _get_hostname()
	{
<<<<<<< HEAD
		if (isset($_SERVER['SERVER_NAME']))
		{
			return $_SERVER['SERVER_NAME'];
		}

		return isset($_SERVER['SERVER_ADDR']) ? '['.$_SERVER['SERVER_ADDR'].']' : '[127.0.0.1]';
=======
		return (isset($_SERVER['SERVER_NAME'])) ? $_SERVER['SERVER_NAME'] : 'localhost.localdomain';
	}

	// --------------------------------------------------------------------

	/**
	 * Get IP
	 *
	 * @access	protected
	 * @return	string
	 */
	protected function _get_ip()
	{
		if ($this->_IP !== FALSE)
		{
			return $this->_IP;
		}

		$cip = (isset($_SERVER['HTTP_CLIENT_IP']) AND $_SERVER['HTTP_CLIENT_IP'] != "") ? $_SERVER['HTTP_CLIENT_IP'] : FALSE;
		$rip = (isset($_SERVER['REMOTE_ADDR']) AND $_SERVER['REMOTE_ADDR'] != "") ? $_SERVER['REMOTE_ADDR'] : FALSE;
		$fip = (isset($_SERVER['HTTP_X_FORWARDED_FOR']) AND $_SERVER['HTTP_X_FORWARDED_FOR'] != "") ? $_SERVER['HTTP_X_FORWARDED_FOR'] : FALSE;

		if ($cip && $rip)	$this->_IP = $cip;
		elseif ($rip)		$this->_IP = $rip;
		elseif ($cip)		$this->_IP = $cip;
		elseif ($fip)		$this->_IP = $fip;

		if (strpos($this->_IP, ',') !== FALSE)
		{
			$x = explode(',', $this->_IP);
			$this->_IP = end($x);
		}

		if ( ! preg_match( "/^[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}$/", $this->_IP))
		{
			$this->_IP = '0.0.0.0';
		}

		unset($cip);
		unset($rip);
		unset($fip);

		return $this->_IP;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Get Debug Message
	 *
<<<<<<< HEAD
	 * @param	array	$include	List of raw data chunks to include in the output
	 *					Valid options are: 'headers', 'subject', 'body'
	 * @return	string
	 */
	public function print_debugger($include = array('headers', 'subject', 'body'))
=======
	 * @access	public
	 * @return	string
	 */
	public function print_debugger()
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	{
		$msg = '';

		if (count($this->_debug_msg) > 0)
		{
			foreach ($this->_debug_msg as $val)
			{
				$msg .= $val;
			}
		}

<<<<<<< HEAD
		// Determine which parts of our raw data needs to be printed
		$raw_data = '';
		is_array($include) OR $include = array($include);

		if (in_array('headers', $include, TRUE))
		{
			$raw_data = htmlspecialchars($this->_header_str)."\n";
		}

		if (in_array('subject', $include, TRUE))
		{
			$raw_data .= htmlspecialchars($this->_subject)."\n";
		}

		if (in_array('body', $include, TRUE))
		{
			$raw_data .= htmlspecialchars($this->_finalbody);
		}

		return $msg.($raw_data === '' ? '' : '<pre>'.$raw_data.'</pre>');
=======
		$msg .= "<pre>".htmlspecialchars($this->_header_str)."\n".htmlspecialchars($this->_subject)."\n".htmlspecialchars($this->_finalbody).'</pre>';
		return $msg;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Set Message
	 *
<<<<<<< HEAD
	 * @param	string	$msg
	 * @param	string	$val = ''
	 * @return	void
=======
	 * @access	protected
	 * @param	string
	 * @return	string
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	protected function _set_error_message($msg, $val = '')
	{
		$CI =& get_instance();
		$CI->lang->load('email');

<<<<<<< HEAD
		if (sscanf($msg, 'lang:%s', $line) !== 1 OR FALSE === ($line = $CI->lang->line($line)))
		{
			$this->_debug_msg[] = str_replace('%s', $val, $msg).'<br />';
		}
		else
		{
			$this->_debug_msg[] = str_replace('%s', $val, $line).'<br />';
=======
		if (substr($msg, 0, 5) != 'lang:' || FALSE === ($line = $CI->lang->line(substr($msg, 5))))
		{
			$this->_debug_msg[] = str_replace('%s', $val, $msg)."<br />";
		}
		else
		{
			$this->_debug_msg[] = str_replace('%s', $val, $line)."<br />";
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Mime Types
	 *
<<<<<<< HEAD
	 * @param	string
	 * @return	string
	 */
	protected function _mime_types($ext = '')
	{
		$ext = strtolower($ext);

		$mimes =& get_mimes();

		if (isset($mimes[$ext]))
		{
			return is_array($mimes[$ext])
				? current($mimes[$ext])
				: $mimes[$ext];
		}

		return 'application/x-unknown-content-type';
	}

}
=======
	 * @access	protected
	 * @param	string
	 * @return	string
	 */
	protected function _mime_types($ext = "")
	{
		$mimes = array(	'hqx'	=>	'application/mac-binhex40',
						'cpt'	=>	'application/mac-compactpro',
						'doc'	=>	'application/msword',
						'bin'	=>	'application/macbinary',
						'dms'	=>	'application/octet-stream',
						'lha'	=>	'application/octet-stream',
						'lzh'	=>	'application/octet-stream',
						'exe'	=>	'application/octet-stream',
						'class'	=>	'application/octet-stream',
						'psd'	=>	'application/octet-stream',
						'so'	=>	'application/octet-stream',
						'sea'	=>	'application/octet-stream',
						'dll'	=>	'application/octet-stream',
						'oda'	=>	'application/oda',
						'pdf'	=>	'application/pdf',
						'ai'	=>	'application/postscript',
						'eps'	=>	'application/postscript',
						'ps'	=>	'application/postscript',
						'smi'	=>	'application/smil',
						'smil'	=>	'application/smil',
						'mif'	=>	'application/vnd.mif',
						'xls'	=>	'application/vnd.ms-excel',
						'ppt'	=>	'application/vnd.ms-powerpoint',
						'wbxml'	=>	'application/vnd.wap.wbxml',
						'wmlc'	=>	'application/vnd.wap.wmlc',
						'dcr'	=>	'application/x-director',
						'dir'	=>	'application/x-director',
						'dxr'	=>	'application/x-director',
						'dvi'	=>	'application/x-dvi',
						'gtar'	=>	'application/x-gtar',
						'php'	=>	'application/x-httpd-php',
						'php4'	=>	'application/x-httpd-php',
						'php3'	=>	'application/x-httpd-php',
						'phtml'	=>	'application/x-httpd-php',
						'phps'	=>	'application/x-httpd-php-source',
						'js'	=>	'application/x-javascript',
						'swf'	=>	'application/x-shockwave-flash',
						'sit'	=>	'application/x-stuffit',
						'tar'	=>	'application/x-tar',
						'tgz'	=>	'application/x-tar',
						'xhtml'	=>	'application/xhtml+xml',
						'xht'	=>	'application/xhtml+xml',
						'zip'	=>	'application/zip',
						'mid'	=>	'audio/midi',
						'midi'	=>	'audio/midi',
						'mpga'	=>	'audio/mpeg',
						'mp2'	=>	'audio/mpeg',
						'mp3'	=>	'audio/mpeg',
						'aif'	=>	'audio/x-aiff',
						'aiff'	=>	'audio/x-aiff',
						'aifc'	=>	'audio/x-aiff',
						'ram'	=>	'audio/x-pn-realaudio',
						'rm'	=>	'audio/x-pn-realaudio',
						'rpm'	=>	'audio/x-pn-realaudio-plugin',
						'ra'	=>	'audio/x-realaudio',
						'rv'	=>	'video/vnd.rn-realvideo',
						'wav'	=>	'audio/x-wav',
						'bmp'	=>	'image/bmp',
						'gif'	=>	'image/gif',
						'jpeg'	=>	'image/jpeg',
						'jpg'	=>	'image/jpeg',
						'jpe'	=>	'image/jpeg',
						'png'	=>	'image/png',
						'tiff'	=>	'image/tiff',
						'tif'	=>	'image/tiff',
						'css'	=>	'text/css',
						'html'	=>	'text/html',
						'htm'	=>	'text/html',
						'shtml'	=>	'text/html',
						'txt'	=>	'text/plain',
						'text'	=>	'text/plain',
						'log'	=>	'text/plain',
						'rtx'	=>	'text/richtext',
						'rtf'	=>	'text/rtf',
						'xml'	=>	'text/xml',
						'xsl'	=>	'text/xml',
						'mpeg'	=>	'video/mpeg',
						'mpg'	=>	'video/mpeg',
						'mpe'	=>	'video/mpeg',
						'qt'	=>	'video/quicktime',
						'mov'	=>	'video/quicktime',
						'avi'	=>	'video/x-msvideo',
						'movie'	=>	'video/x-sgi-movie',
						'doc'	=>	'application/msword',
						'word'	=>	'application/msword',
						'xl'	=>	'application/excel',
						'eml'	=>	'message/rfc822'
					);

		return ( ! isset($mimes[strtolower($ext)])) ? "application/x-unknown-content-type" : $mimes[strtolower($ext)];
	}

}
// END CI_Email class

/* End of file Email.php */
/* Location: ./system/libraries/Email.php */
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
