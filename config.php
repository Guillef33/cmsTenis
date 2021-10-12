<?php

//ini_set( "display_errors", true );
error_reporting(-1);
date_default_timezone_set( "America/Argentina/Buenos_Aires" );  // http://www.php.net/manual/en/timezones.php
define( "DB_DSN", "mysql:host=localhost;dbname=cms" );
define( "DB_USERNAME", "root" );
define( "DB_PASSWORD", "" );
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );
define( "HOMEPAGE_NUM_ARTICLES", 5 );
define( "ADMIN_USERNAME", "admin" );
define( "ADMIN_PASSWORD", "mypass" );
require( CLASS_PATH . "/Article.php" );

/*function handleException( $exception ) {
  echo "Lo lamento, ocurrio un problema. Pruebe de nuevo mas tarde.";
  error_log( $exception->getMessage() );
}*/

//set_exception_handler( 'handleException' );
?>