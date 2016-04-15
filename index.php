<?php
//Setting default time zone

date_default_timezone_set('Asia/Calcutta');

defined('APP_PATH') || define('APP_PATH', dirname(__FILE__).'/application');
defined('APP_PUBLIC') || define('APP_PUBLIC', dirname(__FILE__).'/public');
//var_dump("Initialized libraries 0");return;
//Session stuff
if (!isset($_SESSION)){
  ini_set('session.cookie_domain', '');
  ini_set('session.save_handler', 'redis');
  ini_set('session.save_path', 'tcp://localhost:6379?auth=vivenfarms');
  ini_set('session.cookie_lifetime', 60 * 60 * 24 * 7);
  ini_set('session.gc_maxlifetime', 60 * 60 * 24 * 7);
  session_name('lclhst');
  session_start();
}
require 'library/Bootstrap.php';
require 'library/Controller.php';
require 'library/View.php';
require 'library/Model.php';

$application = new Bootstrap();