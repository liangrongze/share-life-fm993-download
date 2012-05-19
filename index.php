<?php
/**
 * A simple php framework
 * Created By rongze at 2012.05.16
 * Contact me by gz.liangrongze@gmail.com
 */
error_reporting(E_ALL);
set_time_limit(0);
define("EXEC",1); // Set an unique var, you just can load page from this index.php

define('PATH_BASE',dirname(__FILE__)); // Base path of this project

define('DS', DIRECTORY_SEPARATOR); // Deirestory separator

require_once(PATH_BASE.DS . 'includes' . DS . 'defines.inc.php'); // Include defines script
require_once(PATH_BASE . DS . 'includes' . DS .'database.class.php');

// Load page and method
$allowed_page = array('index'); // Set pages allowed
$p = (isset($_GET['p']) AND in_array(trim($_GET['p']), $allowed_method)) ? trim($_GET['p']) : 'index';
$m = isset($_GET['p']) AND trim($_GET['m']);

$p_file = PATH_BASE . DS . 'pages' . DS . $p.'.php';

if (! is_file($p_file)) exit('File ' . $p_file . ' no exist');
require_once($p_file);

// End of index.php
// Location ./index.php