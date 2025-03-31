<?php // -*-mode: PHP; coding:utf-8;-*-

/* This is the config for MRBS.
 * Feel free to edit this file to customize your install.
 * It already includes some of the most important settings.
 * See systemdefaults.inc.php and areadefaults.inc.php for more,
 * you can copy lines from there and paste them here.
 */

// Load the base config that makes MRBS work with YunoHost
// Don't remove this line!
require "__INSTALL_DIR__/web/config-ynh.inc.php";

/* Add lines from systemdefaults.inc.php and areadefaults.inc.php below here
   to change the default configuration. Do _NOT_ modify systemdefaults.inc.php
   or areadefaults.inc.php.  */

$default_name_display_name = true;
$weekstarts = 1;
$view_week_number = true;
$show_slot_endtime = true;
$column_labels_both_ends = true;

