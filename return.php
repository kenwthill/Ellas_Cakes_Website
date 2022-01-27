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


$sql = "SELECT customer_id, fname, sname, address, address2, city, postcode, telephone FROM contacttbl";
$result=mysqli_query($conn, $sql);

if (mysqli_num_rows($result) >0) {

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<table>";
        echo "<tr>
            <th> Customer ID</th>
            <th> First Name </th>
            <th> Surname </th>
            <th> Address Line 1 </th>
            <th> Address Line 2 </th>
            <th> City </th>
            <th> Postcode </th>
            <th> Telephone </th>
         </tr>";
        echo"<tr>
          <td>" . $row['customer_id'] . "</td>
          <td>" . $row['fname'] . "</td>
          <td>" . $row['sname'] . "</td>
          <td>" . $row['address'] . "</td>
          <td>" . $row['address2'] . "</td>
          <td>" . $row['city'] . "</td>
          <td>" . $row['postcode'] . "</td>
          <td>" . $row['telephone'] . "</td>
        </tr>";

        echo "</table>";

    }    if (mysqli_query($conn, $result))
        echo 'You have successfully completed your order we will be in contact soon';
else {
        echo '0 results';
        echo mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
<h1> Thank You For Your Order </h1><br>

<input type="submit" value="Proceed To Home">


</body>
</html>

