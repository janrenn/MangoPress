<?php

require_once dirname(__FILE__) . '/init.php';

define('WP_HOME', rtrim($Url->baseUrl, '/'));
define('WP_SITEURL', WP_HOME. '/wp-core');

define('COOKIEPATH', $Url->basePath);
define('SITECOOKIEPATH', $Url->basePath);
define('ADMIN_COOKIE_PATH', $Url->basePath);

define('WP_CONTENT_DIR', WWW_DIR . '/wp-content');
define('WP_CONTENT_URL', WP_HOME . '/wp-content');
//define('WPMU_PLUGIN_DIR', WP_CONTENT_DIR . '/mu-plugins');
//define('WPMU_PLUGIN_URL', WP_CONTENT_URL . '/mu-plugins');
define('WP_DEFAULT_THEME', 'theme');

// define('WP_DEBUG_DISPLAY', FALSE); // Do not display error messages

define('DISALLOW_FILE_EDIT', TRUE); // Disable the Plugin and Theme Editor
// define('DISALLOW_FILE_MODS', true); // Disable Plugin and Theme Update and Installation
// define('AUTOMATIC_UPDATER_DISABLED', true); // Disable all automatic updates
// define('WP_AUTO_UPDATE_CORE', 'minor'); // Enable core updates for minor releases (default); true - Enable all core updates, including minor and major; false - Disable all core updates
// define('FORCE_SSL_LOGIN', true); // Require SSL for Admin and Logins

$params = $App->parameters;
$db = $params['database'];

define('DB_NAME', $db['database']);
define('DB_USER', $db['username']);
define('DB_PASSWORD', $db['password']);
define('DB_HOST', $db['host']);
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         '{{ put your random salt here }}');
define('SECURE_AUTH_KEY',  '{{ put your random salt here }}');
define('LOGGED_IN_KEY',    '{{ put your random salt here }}');
define('NONCE_KEY',        '{{ put your random salt here }}');
define('AUTH_SALT',        '{{ put your random salt here }}');
define('SECURE_AUTH_SALT', '{{ put your random salt here }}');
define('LOGGED_IN_SALT',   '{{ put your random salt here }}');
define('NONCE_SALT',       '{{ put your random salt here }}');

$table_prefix  = 'wp_';

define('WP_DEBUG', !Tracy\Debugger::$productionMode);

require_once WP_DIR . '/wp-settings.php';
