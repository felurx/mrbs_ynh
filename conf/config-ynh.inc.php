<?php // -*-mode: PHP; coding:utf-8;-*-

/* This file has the basic settings to make MRBS work with YunoHost.
 * You should not edit it directly, since it will be overwritten
 * when the MRBS package is upgraded.
 * If you know what you're doing, you can override the settings made here
 * by copy-pasting lines to config.inc.php and editing them there.
 */

declare(strict_types=1);
namespace MRBS;

use IntlDateFormatter;

require_once 'lib/autoload.inc';

/**********
 * Timezone
 **********/

// The timezone your meeting rooms run in. It is especially important
// to set this if you're using PHP 5 on Linux. In this configuration
// if you don't, meetings in a different DST than you are currently
// in are offset by the DST offset incorrectly.
//
// Note that timezones can be set on a per-area basis, so strictly speaking this
// setting should be in areadefaults.inc.php, but as it is so important to set
// the right timezone it is included here.
//
// When upgrading an existing installation, this should be set to the
// timezone the web server runs in.  See the INSTALL document for more information.
//
// A list of valid timezones can be found at http://php.net/manual/timezones.php
// Is set to the server timezone during install
$timezone = "__TIMEZONE__";


/*******************
 * Database settings
 ******************/
// Which database system: "pgsql"=PostgreSQL, "mysql"=MySQL
$dbsys = "pgsql";
// Hostname of database server. For pgsql, can use "" instead of localhost
// to use Unix Domain Sockets instead of TCP/IP. For mysql "localhost"
// tells the system to use Unix Domain Sockets, and $db_port will be ignored;
// if you want to force TCP connection you can use "127.0.0.1".
$db_host = "localhost";
// If you need to use a non standard port for the database connection you
// can uncomment the following line and specify the port number
// $db_port = 1234;
// Database name:
$db_database = "__DB_NAME__";
// Schema name.  This only applies to PostgreSQL and is only necessary if you have more
// than one schema in your database and also you are using the same MRBS table names in
// multiple schemas.
//$db_schema = "public";
// Database login user name:
$db_login = "__DB_USER__";
// Database login password:
$db_password = '__DB_PWD__';
// Prefix for table names.  This will allow multiple installations where only
// one database is available
$db_tbl_prefix = "mrbs_";
// Set $db_persist to TRUE to use PHP persistent (pooled) database connections.  Note
// that persistent connections are not recommended unless your system suffers significant
// performance problems without them.   They can cause problems with transactions and
// locks (see http://php.net/manual/en/features.persistent-connections.php) and although
// MRBS tries to avoid those problems, it is generally better not to use persistent
// connections if you can.
$db_persist = false;


// AUTH
$auth["session"] = "remote_user";
//$auth['remote_user']['login_link'] = '/login/link.html';

$auth["type"] = "ldap";
$ldap_host = "localhost";
$ldap_port = 389;
$ldap_base_dn = "ou=users,dc=yunohost,dc=org";
$ldap_user_attrib = "uid";
$ldap_name_attrib = "displayname";
$ldap_filter = "&(|(objectclass=posixAccount))(permission=cn=__APP__.main,ou=permission,dc=yunohost,dc=org)";
$ldap_filter_base_dn = $ldap_base_dn;
$ldap_group_member_attrib = 'permission';
$ldap_admin_group_dn = 'cn=__APP__.admin,ou=permission,dc=yunohost,dc=org';

