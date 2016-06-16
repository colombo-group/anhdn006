<?php

/**
 * @author GallerySoft.info
 * @copyright 2016
 */

define("DB_HOST", '127.0.0.1');
define("DATABASE", 'profile');
define("DB_PORT", '3306');
define("DB_USER", 'root');
define("DB_PASSWORD", '');

function db_query($sql) {
   $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DATABASE, DB_PORT);
   if ($mysqli->connect_errno) {
    die('Connect Error: ' . $mysqli->connect_error);
   }
   $result = $mysqli->query($sql);
   if ($mysqli->errno) {
	   die('Query error: ' . $mysqli->error);
   }
   return $result;
}
