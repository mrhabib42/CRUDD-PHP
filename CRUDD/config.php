<?php
$host = "localhost";
$username = "root";
$pass = "";
$db = "product";

$con = new mysqli($host, $username, $pass, $db) or die ("<script>alert('Unable to connect to database')</script>");