<?php
$host     = "b-ssnwfghhbksmav.bch.rds.gz.baidubce.com"; // Database Host
$user     = "b_ssnwfghhbksmav"; // Database Username
$password = "lyj312325824"; // Database's user Password
$database = "b_ssnwfghhbksmav"; // Database Name
$prefix   = ""; // Database Prefix for the script tables

$connect = mysqli_connect($host, $user, $password, $database);

// Checking Connection
if (mysqli_connect_errno()) {
    echo "Failed to connect with MySQL: " . mysqli_connect_error();
}

mysqli_set_charset($connect, "utf8");

$client = "";

$site_url             = "http://lvyongjian.gz01.bdysite.com";
$projectsecurity_path = "http://lvyongjian.gz01.bdysite.com/Source";
?>