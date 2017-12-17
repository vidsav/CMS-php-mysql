<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include('functions.php');

$db = mysqli_connect("localhost", "root", "root", "cms_blog")
      or die("Error in database");

mysqli_set_charset($db, "UTF8");

define('BASE_URL', 'localhost/');


?>