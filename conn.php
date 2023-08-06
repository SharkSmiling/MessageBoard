<?php
$servername = "localhost";
$username = "root";
$password = "3edc5tgb";
$dbname = "mentor";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->query('SET NAMES UTF8');
$conn->query('SET time_zone = "+8:00"');