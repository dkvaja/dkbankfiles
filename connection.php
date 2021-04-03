<?php
$servername = "localhost";
$username = "root";
$dbname="dkbank";
$password = "";
$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

