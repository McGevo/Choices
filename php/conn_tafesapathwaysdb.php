<!-- TAFESA Choices Project
Page : PHP Script to connect to database
Author : Lachlan Hunt
Date : 1/6/21
-->

<!--check line 13 for correct database name-->

<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "mydb1";
$link = @mysqli_connect($server,$user,$pass,$database) or die ("Couldn't connect to the database");

?>