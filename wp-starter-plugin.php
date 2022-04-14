<?php

namespace Starter;

if ( !defined( 'ABSPATH' ) ) {
    exit;
}

/*
Plugin Name: Starter plugin
Plugin URI: https://webwolf.dev/
Description: Simple plugin boilerplate
Author: Kamil Łazarz
Author URI: https://webwolf.dev/
Version: 1.0.0
Requires PHP: 7.4
Text Domain: starter
Domain Path: /languages
*/

require_once "config/general.php";
require_once "app/bootstrap.php";

App::getInstance();
