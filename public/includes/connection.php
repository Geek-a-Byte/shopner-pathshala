<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

$username = "shopnerPathshala"; // Use your username
$password = "grp4"; // and your password
$database = "localhost/XE"; // and the connect string to connect to your database

$conn = oci_connect($username, $password, $database);
if (!$conn) {
    $m = oci_error();
    trigger_error('Could not connect to database: ' . $m['message'], E_USER_ERROR);
}
