<?
/*
Plugin Name: Prijslijst voor Jitty's
Plugin URI: https://odil.io
Description: Maakt de prijslijst via een shortcode volgens het ontwerp.
Author: Odilio Witteveen
Version: 0.0.9
Author URI: https://odil.io
Text Domain: jitty-plugin
*/

// This is very messy code. Sorry for that. One day i'll have time to make this pretty

$files = [
  'lib/setup.php',
  'lib/posttype.php',
  'lib/shortcode.php',
  'lib/mobielmenu.php',
];

foreach ($files as $file):

  if (!$filepath = locate_template($file)):

    trigger_error(sprintf(__('Error locating %s for inclusion', 'imaga'), $file), E_USER_ERROR);

  endif;

  require_once $filepath;

endforeach;

unset($file, $filepath);
