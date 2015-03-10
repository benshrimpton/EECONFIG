<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['tz_country'] = 'us';
$config['debug'] = '0';
$config['hidden_template_indicator'] = '.';
$config['enable_online_user_tracking'] = "n";
$config['enable_hit_tracking'] = "n";
$config['enable_entry_view_tracking'] = "n";
$config['dynamic_tracking_disabling'] = "";
$config['index_page'] = "";
/*
|--------------------------------------------------------------------------
| ExpressionEngine Config Items
|--------------------------------------------------------------------------
|
| The following items are for use with ExpressionEngine.  The rest of
| the config items are for use with CodeIgniter, some of which are not
| observed by ExpressionEngine, e.g. 'permitted_uri_chars'
|
*/



/*
|--------------------------------------------------------------------------
| Database Config Override.
|--------------------------------------------------------------------------
*/
//System Preferences, these 4 all all that is required by the core system
$config['site_url'] = 'http://staging.aerin.com/'; //public url, used in the "site_url" var tag
$config['theme_folder_url'] = 'http://staging.aerin.com/themes/'; //add your URL, required by system
$config['theme_folder_path'] = '/var/www/public_html/themes/';	//add server path, required by system

//Template Preferences
$config['tmpl_file_basepath'] = '/var/www/public_html/templates'; //add server path, required by system


  
  
  
  
  
  
  
  
  
  
  
   
$config['app_version'] = '290';
$config['license_number'] = "0000-0000-0000-0000";
$config['debug'] = '0';
// $config['cp_url'] = 'http://staging.aerin.com/skynet/index.php';
$config['doc_url'] = "http://ellislab.com/expressionengine/user-guide/";
$config['is_system_on'] = "y";
$config['allow_extensions'] = 'y';
$config['cookie_prefix'] = '';
$config['cookie_httponly'] = 'y';
#$config['compress_output'] = 'n';

/*
| Amazon S3 settings and optional headers. For use with the option AWS
| extension. See the installation instructions for more details on how
| to install the extension.
*/
$config['ce_image_aws_key'] = '';
$config['ce_image_aws_secret_key'] = '';
$config['ce_image_bucket'] = 'bbcache';
$config['ce_image_aws_request_headers'] = array();
$config['ce_image_aws_request_headers']['Cache-Control'] = 'max-age=' . (30 * 24 * 60 * 60);
$config['ce_image_aws_request_headers']['Expires'] = gmdate("D, d M Y H:i:s T", strtotime('+1 month') );
$config['ce_image_aws_storage_class'] = 'STANDARD';


/* Automin extension config overrides (for compressing less/css/js) */
$config['automin_automin_enabled'] = 'y';
$config['automin_cache_enabled'] = 'y';
// $config['automin_compress_markup'] = (ENV == 'prod') ? 'y' : 'n';
$config['automin_cache_server_path'] = "{$_SERVER['DOCUMENT_ROOT']}/assets/";
$config['automin_cache_url'] = '/assets/';




/*
|-----------------------------
| CE Image Basic Config Items
|-----------------------------
|
| The following items are for use with CE Image. They are all optional,
| as the defaults in the actual plugin will be used if not specified below.
*/
/*
| The *relative path* (to your web root) of the directory to cache images
| in. This path will override the $cache_dir variable in the plugin file,
| and can optionally be overridden via the cache_dir= plugin parameter.
*/
$config['ce_image_cache_dir'] = '/assets/';

/*
| The *relative path* (to your web root) of the folder to download remote
| images. This path will override the $remote_dir variable in the plugin
| file, and can optionally be overridden via the remote_dir= plugin
| parameter.
*/
$config['ce_image_remote_dir'] = '/assets/';

/*
| The ce_image_memory_limit sets the amount of memory (in megabytes) PHP can
| use for the script (64 is generally sufficient). If the PHP memory_limit
| is set to a greater value, then this setting will not override it.
*/
$config['ce_image_memory_limit'] = 128;



/*
|--------------------------------------------------------------------------
| URI PROTOCOL
|--------------------------------------------------------------------------
|
| This item determines which server global should be used to retrieve the
| URI string.  The default setting of "AUTO" works for most servers.
| If your links do not seem to work, try one of the other delicious flavors:
|
| 'AUTO'			Default - auto detects
| 'PATH_INFO'		Uses the PATH_INFO
| 'QUERY_STRING'	Uses the QUERY_STRING
| 'REQUEST_URI'		Uses the REQUEST_URI
| 'ORIG_PATH_INFO'	Uses the ORIG_PATH_INFO
|
*/
$config['uri_protocol']	= 'AUTO';

/*
|--------------------------------------------------------------------------
| Default Character Set
|--------------------------------------------------------------------------
|
| This determines which character set is used by default in various methods
| that require a character set to be provided.
|
*/
$config['charset'] = 'UTF-8';


/*
|--------------------------------------------------------------------------
| Class Extension Prefix
|--------------------------------------------------------------------------
|
| This item allows you to set the filename/classname prefix when extending
| native libraries.  For more information please see the user guide:
|
| http://codeigniter.com/user_guide/general/core_classes.html
| http://codeigniter.com/user_guide/general/creating_libraries.html
|
*/
$config['subclass_prefix'] = 'EE_';

/*
|--------------------------------------------------------------------------
| Error Logging Threshold
|--------------------------------------------------------------------------
|
| If you have enabled error logging, you can set an error threshold to
| determine what gets logged. Threshold options are:
|
|	0 = Disables logging, Error logging TURNED OFF
|	1 = Error Messages (including PHP errors)
|	2 = Debug Messages
|	3 = Informational Messages
|	4 = All Messages
|
| For a live site you'll usually only enable Errors (1) to be logged otherwise
| your log files will fill up very fast.
|
*/
$config['log_threshold'] = 0;

/*
|--------------------------------------------------------------------------
| Error Logging Directory Path
|--------------------------------------------------------------------------
|
| Leave this BLANK unless you would like to set something other than the
| default system/expressionengine/logs/ directory. Use a full server path
| with trailing slash.
|
| Note: You may need to create this directory if your server does not
| create it automatically.
|
*/
$config['log_path'] = '';

/*
|--------------------------------------------------------------------------
| Date Format for Logs
|--------------------------------------------------------------------------
|
| Each item that is logged has an associated date. You can use PHP date
| codes to set your own date formatting
|
*/
$config['log_date_format'] = 'Y-m-d H:i:s';

/*
|--------------------------------------------------------------------------
| Cache Directory Path
|--------------------------------------------------------------------------
|
| Leave this BLANK unless you would like to set something other than the
| default system/expressionengine/cache/ directory. Use a full server path
| with trailing slash.
|
*/
$config['cache_path'] = '';

//add back up
$config['cache_driver_backup'] = 'file';

//add emmechached
$config['cache_driver'] = 'memcached';
/*
|--------------------------------------------------------------------------
| Encryption Key
|--------------------------------------------------------------------------
|
| If you use the Encryption class or the Sessions class with encryption
| enabled you MUST set an encryption key.  See the user guide for info.
|
*/
$config['encryption_key'] = '';


/*
|--------------------------------------------------------------------------
| Rewrite PHP Short Tags
|--------------------------------------------------------------------------
|
| If your PHP installation does not have short tag support enabled CI
| can rewrite the tags on-the-fly, enabling you to utilize that syntax
| in your view files.  Options are TRUE or FALSE (boolean)
|
*/
$config['rewrite_short_tags'] = TRUE;


/* End of file config.php */
/* Location: ./system/expressionengine/config/config.php */

/**
 * Require the Focus Lab, LLC Master Config file
 https://github.com/focuslabllc/ee-master-config/blob/master/system/expressionengine/config/config.php
 */
