<<<<<<< HEAD
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

=======
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
/*
| -------------------------------------------------------------------
| AUTO-LOADER
| -------------------------------------------------------------------
| This file specifies which systems should be loaded by default.
|
| In order to keep the framework as light-weight as possible only the
| absolute minimal resources are loaded by default. For example,
| the database is not connected to automatically since no assumption
| is made regarding whether you intend to use it.  This file lets
| you globally define which systems you would like loaded with every
| request.
|
| -------------------------------------------------------------------
| Instructions
| -------------------------------------------------------------------
|
| These are the things you can load automatically:
|
| 1. Packages
| 2. Libraries
<<<<<<< HEAD
| 3. Drivers
| 4. Helper files
| 5. Custom config files
| 6. Language files
| 7. Models
=======
| 3. Helper files
| 4. Custom config files
| 5. Language files
| 6. Models
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
|
*/

/*
| -------------------------------------------------------------------
<<<<<<< HEAD
|  Auto-load Packages
=======
|  Auto-load Packges
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
| -------------------------------------------------------------------
| Prototype:
|
|  $autoload['packages'] = array(APPPATH.'third_party', '/usr/local/shared');
|
*/

$autoload['packages'] = array();


/*
| -------------------------------------------------------------------
|  Auto-load Libraries
| -------------------------------------------------------------------
| These are the classes located in the system/libraries folder
| or in your application/libraries folder.
|
| Prototype:
|
<<<<<<< HEAD
|	$autoload['libraries'] = array('database', 'email', 'session');
|
| You can also supply an alternative library name to be assigned
| in the controller:
|
|	$autoload['libraries'] = array('user_agent' => 'ua');
=======
|	$autoload['libraries'] = array('database', 'session', 'xmlrpc');
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
*/

$autoload['libraries'] = array();


/*
| -------------------------------------------------------------------
<<<<<<< HEAD
|  Auto-load Drivers
| -------------------------------------------------------------------
| These classes are located in the system/libraries folder or in your
| application/libraries folder within their own subdirectory. They
| offer multiple interchangeable driver options.
|
| Prototype:
|
|	$autoload['drivers'] = array('cache');
*/

$autoload['drivers'] = array();


/*
| -------------------------------------------------------------------
=======
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
|  Auto-load Helper Files
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['helper'] = array('url', 'file');
*/

$autoload['helper'] = array();


/*
| -------------------------------------------------------------------
|  Auto-load Config files
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['config'] = array('config1', 'config2');
|
| NOTE: This item is intended for use ONLY if you have created custom
| config files.  Otherwise, leave it blank.
|
*/

$autoload['config'] = array();


/*
| -------------------------------------------------------------------
|  Auto-load Language files
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['language'] = array('lang1', 'lang2');
|
| NOTE: Do not include the "_lang" part of your file.  For example
| "codeigniter_lang.php" would be referenced as array('codeigniter');
|
*/

$autoload['language'] = array();


/*
| -------------------------------------------------------------------
|  Auto-load Models
| -------------------------------------------------------------------
| Prototype:
|
<<<<<<< HEAD
|	$autoload['model'] = array('first_model', 'second_model');
|
| You can also supply an alternative model name to be assigned
| in the controller:
|
|	$autoload['model'] = array('first_model' => 'first');
*/

$autoload['model'] = array();
=======
|	$autoload['model'] = array('model1', 'model2');
|
*/

$autoload['model'] = array();


/* End of file autoload.php */
/* Location: ./application/config/autoload.php */
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
