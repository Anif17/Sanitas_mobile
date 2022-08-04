<?php
$host = "localhost";
$username = "root";
$password = "";
$link = mysqli_connect($host, $username, $password) or die("Could not connect");

$db = mysqli_select_db($link, "sanitas") or die("Could not select database");
