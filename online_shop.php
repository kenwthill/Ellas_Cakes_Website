<?php
/* starting the session for the security reasons */
session_start(); ?>

<?php
/* link to the connection of the database in php */
include ('connection.php');
?>

<?php
/* if the form is not empty post the results of the form using the variables of the form into the relevant fields of the database using SQL */
if (!empty($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $address=$_POST['address'];
    $address2=$_POST['address2'];
    $city=$_POST['city'];
    $postcode=$_POST['postcode'];
    $telephone=$_POST['telephone'];
    $querycontact="INSERT INTO contacttbl (fname, lname, address, address2, city, postcode, telephone) VALUES ('$fname', '$lname', '$address', '$address2','$city', '$postcode', '$telephone')";
  /* if the data is inserted in the database, display a pop up prompt box */
    if (mysqli_query($conn, $querycontact))
  {
   echo"<script>alert('Registered your details, thank you.')</script>";
   echo"<script>window.location='login.php'</script>";
  }
  else
/* if the data is not entered into the database show error message */
  {
      echo "Error registering your contact details";
  }
}
?>

<!-- start of the web page -->
<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8"><!--Title on the tab for the browser-->
    <title>Ella's Cakes</title><!--Linking the CSS / cascading style sheets to the page -->
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<div id="page">

    <!-- Section for the logo -->
    <div id="logo"><!-- Selecting the image for the logo and alternative in case the image cannot be opened -->
        <img src="ellas_cakes_logo.png" alt="Ella's Cakes Logo"></div><!-- Section for the banner -->

    <div id="banner"><!-- Selecting the image for the banner and alternative in case the image cannot be opened -->
        <!-- Section for the menu -->
        <div id= "menu_bar">


            <a href= "index.html">
                <img src= "menu_icon.png" style= "height:60px;width:60px;" alt= "Homepage" > Homepage
            </a>

            <a href= "product.html">
                <img src= "menu_icon.png" style= "height:60px;width:60px;" alt= "Product page" > Product Page
            </a>

            <a href= "about_us.html">
                <img src= "menu_icon.png" style= "height:60px;width:60px;" alt= "About us" > About Us
            </a>

            <a href= "contact.html">
                <img src= "menu_icon.png" style= "height:60px;width:60px;" alt= "Contact us" > Contact Us
            </a>

            <a href= "online_shop.php">
                <img src= "menu_icon.png" style= "height:60px;width:60px;" alt= "Online shop" > Online Shop
            </a>

        </div>
        <!-- Selecting the image for the banner and alternative in case the image cannot be opened -->
        <img src="banner.png" alt= "Ella’s Cakes Banner">
    </div>

    <!-- page title on the left side -->
    <div id="left_content">
        <h1>Online Shop</h1>

    </div>

    <!-- Table of the cake name, the price and a picture of the cake in the middle of the page -->
    <div id="middle_content">

        <h1>Cakes</h1>
        <table>
            <tr>
                <th>Cake</th>
                <th>Price</th>
                <th>Picture</th>
            </tr>
            <tr>
                <td>1 Tier Wedding Cake</td>
                <td>£150</td>
                <td><img src="product_wedding1.jpg" style="height:300px;width:300px;" alt="1 Tier Wedding Cake"</td>
            </tr>
            <tr>
                <td>2 Tier Wedding Cake</td>
                <td>£250</td>
                <td><img src="product_wedding2.jpg" style="height:300px;width:300px;" alt="2 Tier Wedding Cake"</td>
            </tr>
            <tr>
                <td>3 Tier Wedding Cake</td>
                <td>£350</td>
                <td><img src="product_wedding3.jpg" style="height:300px;width:300px;" alt="3 Tier Wedding Cake"</td>
            </tr>
            <tr>
                <td>4 Tier Wedding Cake</td>
                <td>£450</td>
                <td><img src="product_wedding4.jpg" style="height:300px;width:300px;" alt="4 Tier Wedding Cake"</td>
            </tr>
            <tr>
                <td>1 Tier Birthday Cake</td>
                <td>£100</td>
                <td><img src="product_birthday1.jpg" style="height:300px;width:300px;" alt="1 Tier Birthday Cake" </td>
            </tr>
            <tr>
                <td>2 Tier Birthday Cake</td>
                <td>£150</td>
                <td><img src="product_birthday2.jpg" style="height:300px;width:300px;" alt="2 Tier Birthday Cake"</td>
            </tr>
            <tr>
                <td>3 Tier Birthday Cake</td>
                <td>£200</td>
                <td><img src="product_birthday3.png" style="height:300px;width:300px;" alt="3 Tier Birthday Cake"</td>
            </tr>
            <tr>
                <td>4 Tier Birthday Cake</td>
                <td>£250</td>
                <td><img src="product_birthday4.jpg" style="height:300px;width:300px;" alt="4 Tier Birthday Cake"</td>
            </tr>
        </table>
    </div>
</div>

<!-- collecting the data from the customer using a form in HTML -->
<div id="right_content">
    <div class="right_center_shop">
        <h1>Your Order</h1>
        <form method= "post">
            <label for="fname">First Name:</label><br>
            <input type="text" id="fname" name="fname" value="" required=""><br>
            <label for="lname">Last Name:</label><br>
            <input type="text" id="lname" name="lname" value="" required=""><br>
            <label for="address">Address Line 1:</label><br>
            <input type="text" id="address" name="address" value="" required=""><br>
            <label for="address2">Address Line 2:</label><br>
            <input type="text" id="address2" name="address2" value="" required=""><br>
            <label for="city">Town / City:</label><br>
            <input type="text" id="city" name="city" value="" required=""><br>
            <label for="postcode">Postcode:</label><br>
            <input type="text" id="postcode" name="postcode" value="" required=""><br>
            <label for="telephone">Telephone:</label><br>
            <input type="number" id="telephone" name="telephone" value="" required=""><br>
            <br>
            <input type="submit" name="submit" value="Proceed With Registration">
        </form>
    </div>
</div>

</body>
</html>