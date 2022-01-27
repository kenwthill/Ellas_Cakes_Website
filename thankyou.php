<?php session_start(); ?>

 <?php
 include ('connection.php');
 ?>

 <?php

if (!empty($result)){
    die("Connection failed:" . mysqli_connect_error());
}
echo "Connected Successfully";


$sql = "SELECT cake, tier, colour, writing FROM producttbl";
$result=mysqli_query($conn, $sql);

if (mysqli_num_rows($result) >0) {

    while ($row = mysqli_fetch_assoc($result)) {
    /*    echo "<table>";
        echo "<tr>
            <th> Cake Type </th>
            <th> Tiers </th>
            <th> Colour </th>
            <th> Message On Cake </th>
         </tr>";*/
        echo "<tr>
          <td>" . $row['cake'] . "</td>
          <td>" . $row['tier'] . "</td>
          <td>" . $row['colour'] . "</td>
          <td>" . $row['writing'] . "</td>
        </tr>";

        echo "</table>";
    }
    if (mysqli_query($conn, $result))
        echo 'You have successfully completed your order we will be in contact soon';

else {
        echo '0 results';
        echo mysqli_error($conn);
    }
    mysqli_close($conn);
}
  ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"><!--Title on the tab for the browser-->
<title>Ella's Cakes</title><!--Linking the CSS / cascading style sheets to the page -->
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<h1>Thank you for your order we will be in touch shortly to finalise the order and price.</h1><br>

<h1>Your order receipt</h1>or Your Order </h1><br>

<input type="submit" value="Proceed To Home">-->



</body>
</html>
