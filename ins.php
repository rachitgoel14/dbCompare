<?php
$con=mysqli_connect("localhost","root","rachit");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Create database
$sql="CREATE DATABASE benchmark";
if (mysqli_query($con,$sql))
  {
  echo "Database benchmark created successfully";
  }
else
  {
  echo "Error creating database: " . mysqli_error();
  }
?>