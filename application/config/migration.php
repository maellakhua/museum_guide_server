<<<<<<< HEAD
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

=======
<?php defined('BASEPATH') OR exit('No direct script access allowed');
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
/*
|--------------------------------------------------------------------------
| Enable/Disable Migrations
|--------------------------------------------------------------------------
|
<<<<<<< HEAD
| Migrations are disabled by default for security reasons.
| You should enable migrations whenever you intend to do a schema migration
| and disable it back when you're done.
=======
| Migrations are disabled by default but should be enabled 
| whenever you intend to do a schema migration.
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
|
*/
$config['migration_enabled'] = FALSE;

<<<<<<< HEAD
/*
|--------------------------------------------------------------------------
| Migration Type
|--------------------------------------------------------------------------
|
| Migration file names may be based on a sequential identifier or on
| a timestamp. Options are:
|
|   'sequential' = Default migration naming (001_add_blog.php)
|   'timestamp'  = Timestamp migration naming (20121031104401_add_blog.php)
|                  Use timestamp format YYYYMMDDHHIISS.
|
| If this configuration value is missing the Migration library defaults
| to 'sequential' for backward compatibility.
|
*/
$config['migration_type'] = 'timestamp';

/*
|--------------------------------------------------------------------------
| Migrations table
|--------------------------------------------------------------------------
|
| This is the name of the table that will store the current migrations state.
| When migrations runs it will store in a database table which migration
| level the system is at. It then compares the migration level in this
| table to the $config['migration_version'] if they are not the same it
| will migrate up. This must be set.
|
*/
$config['migration_table'] = 'migrations';

/*
|--------------------------------------------------------------------------
| Auto Migrate To Latest
|--------------------------------------------------------------------------
|
| If this is set to TRUE when you load the migrations class and have
| $config['migration_enabled'] set to TRUE the system will auto migrate
| to your latest migration (whatever $config['migration_version'] is
| set to). This way you do not have to call migrations anywhere else
| in your code to have the latest migration.
|
*/
$config['migration_auto_latest'] = FALSE;
=======
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac

/*
|--------------------------------------------------------------------------
| Migrations version
|--------------------------------------------------------------------------
|
| This is used to set migration version that the file system should be on.
<<<<<<< HEAD
| If you run $this->migration->current() this is the version that schema will
=======
| If you run $this->migration->latest() this is the version that schema will
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
| be upgraded / downgraded to.
|
*/
$config['migration_version'] = 0;

<<<<<<< HEAD
=======

>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
/*
|--------------------------------------------------------------------------
| Migrations Path
|--------------------------------------------------------------------------
|
| Path to your migrations folder.
| Typically, it will be within your application path.
| Also, writing permission is required within the migrations path.
|
*/
<<<<<<< HEAD
$config['migration_path'] = APPPATH.'migrations/';
=======
$config['migration_path'] = APPPATH . 'migrations/';


/* End of file migration.php */
/* Location: ./application/config/migration.php */
>>>>>>> 4c6d7a26cdf617bfd273b76567440aba515383ac
