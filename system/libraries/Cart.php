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
 * @copyright	Copyright (c) 2006 - 2012, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

/**
 * Shopping Cart Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Shopping Cart
<<<<<<< HEAD
 * @author		EllisLab Dev Team
 * @link		http://codeigniter.com/user_guide/libraries/cart.html
 * @deprecated	3.0.0	This class is too specific for CI.
 */
class CI_Cart {

	/**
	 * These are the regular expression rules that we use to validate the product ID and product name
	 * alpha-numeric, dashes, underscores, or periods
	 *
	 * @var string
	 */
	public $product_id_rules = '\.a-z0-9_-';

	/**
	 * These are the regular expression rules that we use to validate the product ID and product name
	 * alpha-numeric, dashes, underscores, colons or periods
	 *
	 * @var string
	 */
	public $product_name_rules = '\w \-\.\:';

	/**
	 * only allow safe product names
	 *
	 * @var bool
	 */
	public $product_name_safe = TRUE;

	// --------------------------------------------------------------------------

	/**
	 * Reference to CodeIgniter instance
	 *
	 * @var object
	 */
	protected $CI;

	/**
	 * Contents of the cart
	 *
	 * @var array
	 */
	protected $_cart_contents = array();
=======
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/libraries/cart.html
 */
class CI_Cart {

	// These are the regular expression rules that we use to validate the product ID and product name
	var $product_id_rules	= '\.a-z0-9_-'; // alpha-numeric, dashes, underscores, or periods
	var $product_name_rules	= '\.\:\-_ a-z0-9'; // alpha-numeric, dashes, underscores, colons or periods

	// Private variables.  Do not change!
	var $CI;
	var $_cart_contents	= array();

>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

	/**
	 * Shopping Class Constructor
	 *
	 * The constructor loads the Session class, used to store the shopping cart contents.
<<<<<<< HEAD
	 *
	 * @param	array
	 * @return	void
=======
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 */
	public function __construct($params = array())
	{
		// Set the super object to a local variable for use later
		$this->CI =& get_instance();

		// Are any config settings being passed manually?  If so, set them
<<<<<<< HEAD
		$config = is_array($params) ? $params : array();

		// Load the Sessions class
		$this->CI->load->driver('session', $config);

		// Grab the shopping cart array from the session table
		$this->_cart_contents = $this->CI->session->userdata('cart_contents');
		if ($this->_cart_contents === NULL)
		{
			// No cart exists so we'll set some base values
			$this->_cart_contents = array('cart_total' => 0, 'total_items' => 0);
		}

		log_message('info', 'Cart Class Initialized');
=======
		$config = array();
		if (count($params) > 0)
		{
			foreach ($params as $key => $val)
			{
				$config[$key] = $val;
			}
		}

		// Load the Sessions class
		$this->CI->load->library('session', $config);

		// Grab the shopping cart array from the session table, if it exists
		if ($this->CI->session->userdata('cart_contents') !== FALSE)
		{
			$this->_cart_contents = $this->CI->session->userdata('cart_contents');
		}
		else
		{
			// No cart exists so we'll set some base values
			$this->_cart_contents['cart_total'] = 0;
			$this->_cart_contents['total_items'] = 0;
		}

		log_message('debug', "Cart Class Initialized");
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Insert items into the cart and save it to the session table
	 *
<<<<<<< HEAD
	 * @param	array
	 * @return	bool
	 */
	public function insert($items = array())
	{
		// Was any cart data passed? No? Bah...
		if ( ! is_array($items) OR count($items) === 0)
=======
	 * @access	public
	 * @param	array
	 * @return	bool
	 */
	function insert($items = array())
	{
		// Was any cart data passed? No? Bah...
		if ( ! is_array($items) OR count($items) == 0)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			log_message('error', 'The insert method must be passed an array containing data.');
			return FALSE;
		}

		// You can either insert a single product using a one-dimensional array,
		// or multiple products using a multi-dimensional one. The way we
		// determine the array type is by looking for a required array key named "id"
		// at the top level. If it's not found, we will assume it's a multi-dimensional array.

		$save_cart = FALSE;
		if (isset($items['id']))
		{
			if (($rowid = $this->_insert($items)))
			{
				$save_cart = TRUE;
			}
		}
		else
		{
			foreach ($items as $val)
			{
<<<<<<< HEAD
				if (is_array($val) && isset($val['id']))
=======
				if (is_array($val) AND isset($val['id']))
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
				{
					if ($this->_insert($val))
					{
						$save_cart = TRUE;
					}
				}
			}
		}

		// Save the cart data if the insert was successful
<<<<<<< HEAD
		if ($save_cart === TRUE)
=======
		if ($save_cart == TRUE)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$this->_save_cart();
			return isset($rowid) ? $rowid : TRUE;
		}

		return FALSE;
	}

	// --------------------------------------------------------------------

	/**
	 * Insert
	 *
<<<<<<< HEAD
	 * @param	array
	 * @return	bool
	 */
	protected function _insert($items = array())
	{
		// Was any cart data passed? No? Bah...
		if ( ! is_array($items) OR count($items) === 0)
=======
	 * @access	private
	 * @param	array
	 * @return	bool
	 */
	function _insert($items = array())
	{
		// Was any cart data passed? No? Bah...
		if ( ! is_array($items) OR count($items) == 0)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			log_message('error', 'The insert method must be passed an array containing data.');
			return FALSE;
		}

		// --------------------------------------------------------------------

		// Does the $items array contain an id, quantity, price, and name?  These are required
<<<<<<< HEAD
		if ( ! isset($items['id'], $items['qty'], $items['price'], $items['name']))
=======
		if ( ! isset($items['id']) OR ! isset($items['qty']) OR ! isset($items['price']) OR ! isset($items['name']))
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			log_message('error', 'The cart array must contain a product ID, quantity, price, and name.');
			return FALSE;
		}

		// --------------------------------------------------------------------

<<<<<<< HEAD
		// Prep the quantity. It can only be a number.  Duh... also trim any leading zeros
		$items['qty'] = (float) $items['qty'];

		// If the quantity is zero or blank there's nothing for us to do
		if ($items['qty'] == 0)
=======
		// Prep the quantity. It can only be a number.  Duh...
		$items['qty'] = trim(preg_replace('/([^0-9])/i', '', $items['qty']));
		// Trim any leading zeros
		$items['qty'] = trim(preg_replace('/(^[0]+)/i', '', $items['qty']));

		// If the quantity is zero or blank there's nothing for us to do
		if ( ! is_numeric($items['qty']) OR $items['qty'] == 0)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			return FALSE;
		}

		// --------------------------------------------------------------------

		// Validate the product ID. It can only be alpha-numeric, dashes, underscores or periods
		// Not totally sure we should impose this rule, but it seems prudent to standardize IDs.
		// Note: These can be user-specified by setting the $this->product_id_rules variable.
<<<<<<< HEAD
		if ( ! preg_match('/^['.$this->product_id_rules.']+$/i', $items['id']))
=======
		if ( ! preg_match("/^[".$this->product_id_rules."]+$/i", $items['id']))
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			log_message('error', 'Invalid product ID.  The product ID can only contain alpha-numeric characters, dashes, and underscores');
			return FALSE;
		}

		// --------------------------------------------------------------------

		// Validate the product name. It can only be alpha-numeric, dashes, underscores, colons or periods.
		// Note: These can be user-specified by setting the $this->product_name_rules variable.
<<<<<<< HEAD
		if ($this->product_name_safe && ! preg_match('/^['.$this->product_name_rules.']+$/i'.(UTF8_ENABLED ? 'u' : ''), $items['name']))
=======
		if ( ! preg_match("/^[".$this->product_name_rules."]+$/i", $items['name']))
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			log_message('error', 'An invalid name was submitted as the product name: '.$items['name'].' The name can only contain alpha-numeric characters, dashes, underscores, colons, and spaces');
			return FALSE;
		}

		// --------------------------------------------------------------------

<<<<<<< HEAD
		// Prep the price. Remove leading zeros and anything that isn't a number or decimal point.
		$items['price'] = (float) $items['price'];
=======
		// Prep the price.  Remove anything that isn't a number or decimal point.
		$items['price'] = trim(preg_replace('/([^0-9\.])/i', '', $items['price']));
		// Trim any leading zeros
		$items['price'] = trim(preg_replace('/(^[0]+)/i', '', $items['price']));

		// Is the price a valid number?
		if ( ! is_numeric($items['price']))
		{
			log_message('error', 'An invalid price was submitted for product ID: '.$items['id']);
			return FALSE;
		}

		// --------------------------------------------------------------------
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

		// We now need to create a unique identifier for the item being inserted into the cart.
		// Every time something is added to the cart it is stored in the master cart array.
		// Each row in the cart array, however, must have a unique index that identifies not only
		// a particular product, but makes it possible to store identical products with different options.
		// For example, what if someone buys two identical t-shirts (same product ID), but in
		// different sizes?  The product ID (and other attributes, like the name) will be identical for
		// both sizes because it's the same shirt. The only difference will be the size.
		// Internally, we need to treat identical submissions, but with different options, as a unique product.
		// Our solution is to convert the options array to a string and MD5 it along with the product ID.
		// This becomes the unique "row ID"
<<<<<<< HEAD
		if (isset($items['options']) && count($items['options']) > 0)
		{
			$rowid = md5($items['id'].serialize($items['options']));
=======
		if (isset($items['options']) AND count($items['options']) > 0)
		{
			$rowid = md5($items['id'].implode('', $items['options']));
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}
		else
		{
			// No options were submitted so we simply MD5 the product ID.
			// Technically, we don't need to MD5 the ID in this case, but it makes
			// sense to standardize the format of array indexes for both conditions
			$rowid = md5($items['id']);
		}

		// --------------------------------------------------------------------

		// Now that we have our unique "row ID", we'll add our cart items to the master array
<<<<<<< HEAD
		// grab quantity if it's already there and add it on
		$old_quantity = isset($this->_cart_contents[$rowid]['qty']) ? (int) $this->_cart_contents[$rowid]['qty'] : 0;

		// Re-create the entry, just to make sure our index contains only the data from this submission
		$items['rowid'] = $rowid;
		$items['qty'] += $old_quantity;
		$this->_cart_contents[$rowid] = $items;

=======

		// let's unset this first, just to make sure our index contains only the data from this submission
		unset($this->_cart_contents[$rowid]);

		// Create a new index with our new row ID
		$this->_cart_contents[$rowid]['rowid'] = $rowid;

		// And add the new items to the cart array
		foreach ($items as $key => $val)
		{
			$this->_cart_contents[$rowid][$key] = $val;
		}

		// Woot!
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		return $rowid;
	}

	// --------------------------------------------------------------------

	/**
	 * Update the cart
	 *
	 * This function permits the quantity of a given item to be changed.
	 * Typically it is called from the "view cart" page if a user makes
	 * changes to the quantity before checkout. That array must contain the
	 * product ID and quantity for each item.
	 *
<<<<<<< HEAD
	 * @param	array
	 * @return	bool
	 */
	public function update($items = array())
	{
		// Was any cart data passed?
		if ( ! is_array($items) OR count($items) === 0)
=======
	 * @access	public
	 * @param	array
	 * @param	string
	 * @return	bool
	 */
	function update($items = array())
	{
		// Was any cart data passed?
		if ( ! is_array($items) OR count($items) == 0)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			return FALSE;
		}

		// You can either update a single product using a one-dimensional array,
		// or multiple products using a multi-dimensional one.  The way we
<<<<<<< HEAD
		// determine the array type is by looking for a required array key named "rowid".
		// If it's not found we assume it's a multi-dimensional array
		$save_cart = FALSE;
		if (isset($items['rowid']))
		{
			if ($this->_update($items) === TRUE)
=======
		// determine the array type is by looking for a required array key named "id".
		// If it's not found we assume it's a multi-dimensional array
		$save_cart = FALSE;
		if (isset($items['rowid']) AND isset($items['qty']))
		{
			if ($this->_update($items) == TRUE)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			{
				$save_cart = TRUE;
			}
		}
		else
		{
			foreach ($items as $val)
			{
<<<<<<< HEAD
				if (is_array($val) && isset($val['rowid']))
				{
					if ($this->_update($val) === TRUE)
=======
				if (is_array($val) AND isset($val['rowid']) AND isset($val['qty']))
				{
					if ($this->_update($val) == TRUE)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
					{
						$save_cart = TRUE;
					}
				}
			}
		}

		// Save the cart data if the insert was successful
<<<<<<< HEAD
		if ($save_cart === TRUE)
=======
		if ($save_cart == TRUE)
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			$this->_save_cart();
			return TRUE;
		}

		return FALSE;
	}

	// --------------------------------------------------------------------

	/**
	 * Update the cart
	 *
<<<<<<< HEAD
	 * This function permits changing item properties.
	 * Typically it is called from the "view cart" page if a user makes
	 * changes to the quantity before checkout. That array must contain the
	 * rowid and quantity for each item.
	 *
	 * @param	array
	 * @return	bool
	 */
	protected function _update($items = array())
	{
		// Without these array indexes there is nothing we can do
		if ( ! isset($items['rowid'], $this->_cart_contents[$items['rowid']]))
=======
	 * This function permits the quantity of a given item to be changed.
	 * Typically it is called from the "view cart" page if a user makes
	 * changes to the quantity before checkout. That array must contain the
	 * product ID and quantity for each item.
	 *
	 * @access	private
	 * @param	array
	 * @return	bool
	 */
	function _update($items = array())
	{
		// Without these array indexes there is nothing we can do
		if ( ! isset($items['qty']) OR ! isset($items['rowid']) OR ! isset($this->_cart_contents[$items['rowid']]))
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		{
			return FALSE;
		}

		// Prep the quantity
<<<<<<< HEAD
		if (isset($items['qty']))
		{
			$items['qty'] = (float) $items['qty'];
			// Is the quantity zero?  If so we will remove the item from the cart.
			// If the quantity is greater than zero we are updating
			if ($items['qty'] == 0)
			{
				unset($this->_cart_contents[$items['rowid']]);
				return TRUE;
			}
		}

		// find updatable keys
		$keys = array_intersect(array_keys($this->_cart_contents[$items['rowid']]), array_keys($items));
		// if a price was passed, make sure it contains valid data
		if (isset($items['price']))
		{
			$items['price'] = (float) $items['price'];
		}

		// product id & name shouldn't be changed
		foreach (array_diff($keys, array('id', 'name')) as $key)
		{
			$this->_cart_contents[$items['rowid']][$key] = $items[$key];
=======
		$items['qty'] = preg_replace('/([^0-9])/i', '', $items['qty']);

		// Is the quantity a number?
		if ( ! is_numeric($items['qty']))
		{
			return FALSE;
		}

		// Is the new quantity different than what is already saved in the cart?
		// If it's the same there's nothing to do
		if ($this->_cart_contents[$items['rowid']]['qty'] == $items['qty'])
		{
			return FALSE;
		}

		// Is the quantity zero?  If so we will remove the item from the cart.
		// If the quantity is greater than zero we are updating
		if ($items['qty'] == 0)
		{
			unset($this->_cart_contents[$items['rowid']]);
		}
		else
		{
			$this->_cart_contents[$items['rowid']]['qty'] = $items['qty'];
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		}

		return TRUE;
	}

	// --------------------------------------------------------------------

	/**
	 * Save the cart array to the session DB
	 *
<<<<<<< HEAD
	 * @return	bool
	 */
	protected function _save_cart()
	{
		// Let's add up the individual prices and set the cart sub-total
		$this->_cart_contents['total_items'] = $this->_cart_contents['cart_total'] = 0;
		foreach ($this->_cart_contents as $key => $val)
		{
			// We make sure the array contains the proper indexes
			if ( ! is_array($val) OR ! isset($val['price'], $val['qty']))
=======
	 * @access	private
	 * @return	bool
	 */
	function _save_cart()
	{
		// Unset these so our total can be calculated correctly below
		unset($this->_cart_contents['total_items']);
		unset($this->_cart_contents['cart_total']);

		// Lets add up the individual prices and set the cart sub-total
		$total = 0;
		$items = 0;
		foreach ($this->_cart_contents as $key => $val)
		{
			// We make sure the array contains the proper indexes
			if ( ! is_array($val) OR ! isset($val['price']) OR ! isset($val['qty']))
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
			{
				continue;
			}

<<<<<<< HEAD
			$this->_cart_contents['cart_total'] += ($val['price'] * $val['qty']);
			$this->_cart_contents['total_items'] += $val['qty'];
			$this->_cart_contents[$key]['subtotal'] = ($this->_cart_contents[$key]['price'] * $this->_cart_contents[$key]['qty']);
		}

		// Is our cart empty? If so we delete it from the session
=======
			$total += ($val['price'] * $val['qty']);
			$items += $val['qty'];

			// Set the subtotal
			$this->_cart_contents[$key]['subtotal'] = ($this->_cart_contents[$key]['price'] * $this->_cart_contents[$key]['qty']);
		}

		// Set the cart total and total items.
		$this->_cart_contents['total_items'] = $items;
		$this->_cart_contents['cart_total'] = $total;

		// Is our cart empty?  If so we delete it from the session
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
		if (count($this->_cart_contents) <= 2)
		{
			$this->CI->session->unset_userdata('cart_contents');

			// Nothing more to do... coffee time!
			return FALSE;
		}

		// If we made it this far it means that our cart has data.
		// Let's pass it to the Session class so it can be stored
		$this->CI->session->set_userdata(array('cart_contents' => $this->_cart_contents));

		// Woot!
		return TRUE;
	}

	// --------------------------------------------------------------------

	/**
	 * Cart Total
	 *
<<<<<<< HEAD
	 * @return	int
	 */
	public function total()
=======
	 * @access	public
	 * @return	integer
	 */
	function total()
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	{
		return $this->_cart_contents['cart_total'];
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Remove Item
	 *
	 * Removes an item from the cart
	 *
	 * @param	int
	 * @return	bool
	 */
	 public function remove($rowid)
	 {
		// unset & save
		unset($this->_cart_contents[$rowid]);
		$this->_save_cart();
		return TRUE;
	 }

	// --------------------------------------------------------------------

	/**
=======
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * Total Items
	 *
	 * Returns the total item count
	 *
<<<<<<< HEAD
	 * @return	int
	 */
	public function total_items()
=======
	 * @access	public
	 * @return	integer
	 */
	function total_items()
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	{
		return $this->_cart_contents['total_items'];
	}

	// --------------------------------------------------------------------

	/**
	 * Cart Contents
	 *
	 * Returns the entire cart array
	 *
<<<<<<< HEAD
	 * @param	bool
	 * @return	array
	 */
	public function contents($newest_first = FALSE)
	{
		// do we want the newest first?
		$cart = ($newest_first) ? array_reverse($this->_cart_contents) : $this->_cart_contents;
=======
	 * @access	public
	 * @return	array
	 */
	function contents()
	{
		$cart = $this->_cart_contents;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

		// Remove these so they don't create a problem when showing the cart table
		unset($cart['total_items']);
		unset($cart['cart_total']);

		return $cart;
	}

	// --------------------------------------------------------------------

	/**
<<<<<<< HEAD
	 * Get cart item
	 *
	 * Returns the details of a specific item in the cart
	 *
	 * @param	string	$row_id
	 * @return	array
	 */
	public function get_item($row_id)
	{
		return (in_array($row_id, array('total_items', 'cart_total'), TRUE) OR ! isset($this->_cart_contents[$row_id]))
			? FALSE
			: $this->_cart_contents[$row_id];
	}

	// --------------------------------------------------------------------

	/**
=======
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	 * Has options
	 *
	 * Returns TRUE if the rowid passed to this function correlates to an item
	 * that has options associated with it.
	 *
<<<<<<< HEAD
	 * @param	string	$row_id = ''
	 * @return	bool
	 */
	public function has_options($row_id = '')
	{
		return (isset($this->_cart_contents[$row_id]['options']) && count($this->_cart_contents[$row_id]['options']) !== 0);
=======
	 * @access	public
	 * @return	array
	 */
	function has_options($rowid = '')
	{
		if ( ! isset($this->_cart_contents[$rowid]['options']) OR count($this->_cart_contents[$rowid]['options']) === 0)
		{
			return FALSE;
		}

		return TRUE;
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Product options
	 *
	 * Returns the an array of options, for a particular product row ID
	 *
<<<<<<< HEAD
	 * @param	string	$row_id = ''
	 * @return	array
	 */
	public function product_options($row_id = '')
	{
		return isset($this->_cart_contents[$row_id]['options']) ? $this->_cart_contents[$row_id]['options'] : array();
=======
	 * @access	public
	 * @return	array
	 */
	function product_options($rowid = '')
	{
		if ( ! isset($this->_cart_contents[$rowid]['options']))
		{
			return array();
		}

		return $this->_cart_contents[$rowid]['options'];
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Format Number
	 *
	 * Returns the supplied number with commas and a decimal point.
	 *
<<<<<<< HEAD
	 * @param	float
	 * @return	string
	 */
	public function format_number($n = '')
	{
		return ($n === '') ? '' : number_format( (float) $n, 2, '.', ',');
=======
	 * @access	public
	 * @return	integer
	 */
	function format_number($n = '')
	{
		if ($n == '')
		{
			return '';
		}

		// Remove anything that isn't a number or decimal point.
		$n = trim(preg_replace('/([^0-9\.])/i', '', $n));

		return number_format($n, 2, '.', ',');
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
	}

	// --------------------------------------------------------------------

	/**
	 * Destroy the cart
	 *
	 * Empties the cart and kills the session
	 *
<<<<<<< HEAD
	 * @return	void
	 */
	public function destroy()
	{
		$this->_cart_contents = array('cart_total' => 0, 'total_items' => 0);
		$this->CI->session->unset_userdata('cart_contents');
	}

}
=======
	 * @access	public
	 * @return	null
	 */
	function destroy()
	{
		unset($this->_cart_contents);

		$this->_cart_contents['cart_total'] = 0;
		$this->_cart_contents['total_items'] = 0;

		$this->CI->session->unset_userdata('cart_contents');
	}


}
// END Cart Class

/* End of file Cart.php */
/* Location: ./system/libraries/Cart.php */
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
