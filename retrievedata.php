<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"><!--Title on the tab for the browser-->
    <title>Ella's Cakes</title><!--Linking the CSS / cascading style sheets to the page -->
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ellas_cakes_order";

$conn = mysqli_connect ($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed:" .mysqli_connect_error());
    }
    echo "Connected Successfully";

    ?>
</body>
</html>

