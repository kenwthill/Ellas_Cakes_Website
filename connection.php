<!-- database connection file -->

<?php

#creating variables

$server = "localhost";
$username = "root";
$password = "";
$database = "ellas_cakes_order";

#conn is a variable to contain database connection

$conn = mysqli_connect($server,$username, $password, $database);

?>