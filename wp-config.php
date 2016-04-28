<?php
/*
|--------------------------------------------------------------------------
| WordPress Configuration
|--------------------------------------------------------------------------
|
| This file has been configured for use with OpenShift.
|
| To learn more about managing WordPress on Openshift, see:
| https://developers.openshift.com/en/php-wordpress.html
|
*/

/*
|--------------------------------------------------------------------------
| OpenShift Recommended Add-on: SendGrid
|--------------------------------------------------------------------------
|
| By default, WordPress uses PHP's mail function to send emails. We
| strongly recommend using SendGrid to ensure messages are delivered to
| both you and your users.
|
| To learn more installing SendGrid, see:
| https://developers.openshift.com/en/marketplace-sendgrid.html#php-wordpress
|
*/

/**
 * Code provided for users following SendGrid instructions linked above.
 */
//define('SENDGRID_USERNAME', getenv('SENDGRID_USERNAME'));
//define('SENDGRID_PASSWORD', getenv('SENDGRID_PASSWORD'));
//define('SENDGRID_SEND_METHOD', 'api');

/*
|--------------------------------------------------------------------------
| WordPress Database Table Prefix
|--------------------------------------------------------------------------
|
| You can have multiple installations in one database if you give each a unique
| prefix. Only numbers, letters, and underscores please!
|
*/

$table_prefix  = 'wp_';

/*
|--------------------------------------------------------------------------
| WordPress Administration Panel
|--------------------------------------------------------------------------
|
| Determine whether the administration panel should be viewed over SSL. We
| prefer to be secure by default.
|
*/

define('FORCE_SSL_ADMIN', false);

/*
|--------------------------------------------------------------------------
| WordPress Debugging Mode - MODIFICATION NOT RECOMMENDED (see below)
|--------------------------------------------------------------------------
| 
| Set OpenShift's APPLICATION_ENV environment variable in order to enable 
| detailed PHP and WordPress error messaging during development.
|
| Set the variable, then restart your app. Using the `rhc` client:
|
|   $ rhc env set APPLICATION_ENV=development -a <app-name>
|   $ rhc app restart -a <app-name>
|
| Set the variable to 'production' and restart your app to deactivate error 
| reporting.
|
| For more information about the APPLICATION_ENV variable, see:
| https://developers.openshift.com/en/php-getting-started.html#development-mode
|
| WARNING: We strongly advise you NOT to run your application in this mode 
|          in production.
|
*/

//define('WP_DEBUG', getenv('APPLICATION_ENV') == 'development' ? true : false);

/*
|--------------------------------------------------------------------------
| MySQL Settings - DO NOT MODIFY
|--------------------------------------------------------------------------
|
| WordPress will automatically connect to your OpenShift MySQL database
| by making use of OpenShift environment variables configured below.
|
| For more information on using environment variables on OpenShift, see:
| https://developers.openshift.com/en/managing-environment-variables.html
|
*/

define('DB_NAME', 'wp');
define('DB_USER', 'phpmyadmin');
define('DB_PASSWORD', 'admin123');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         'h5eUQL.5:qo Dv>[T..*JvmluMmV[x|opNs0m((69kIvO]AS`Ls+y>WuIpFCsvC?');
define('SECURE_AUTH_KEY',  '9o|+R lW9(vo&/U0Y-$yJJP|dI|:@NqEQoV:p Fa_szTG(E3JnxdtD#9d#XKg>qz');
define('LOGGED_IN_KEY',    'MEL(WyyE76!gD4TWn~/{:IDLWd%][usGYrSljc7oR#n5+E]h^mp<<|{;^z^OTFjQ');
define('NONCE_KEY',        'GcaCzV&J-1XO}B)_Hz[bPSVOw|H<9A|FLV6WCz:<ayie~X-{{yrJjIo1c?2=VkO*');
define('AUTH_SALT',        '`)`p/f*<N72yO(0~Xy)apE`*]mb#+R;|-HtNG[=mj9277#}a-%(D0j nK|8vWc!2');
define('SECURE_AUTH_SALT', '};pUf)A)2M2}3zZy1{4sOb..wL *Ge`AkL?~1(Pwz:5r@8X&%F:%fe`+~v6=hg@>');
define('LOGGED_IN_SALT',   ']Mq&qI.AH:EwgDw7~+i.*@`Pt+G+2N2*#xO]|zGB#@(_toKm<zQ.-6k9z2^3_BS(');
define('NONCE_SALT',       'rF;ls6&Nk0pUJo` .0[bt9A#A,H#0d;@|iI+}6H=N}Y<O(|PKi:P6fI78+Wh;{z%');

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'thejeffrey.me');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

 // Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings 
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );

define('WP_HOME','http://thejeffrey.me');
define('WP_SITEURL','http://thejeffrey.me');

/*
|--------------------------------------------------------------------------
| That's all, stop editing! Happy blogging.
|--------------------------------------------------------------------------
*/

define('WP_ALLOW_REPAIR', true);

// absolute path to the WordPress directory
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

// sets up WordPress vars and included files
require_once(ABSPATH . 'wp-settings.php');

