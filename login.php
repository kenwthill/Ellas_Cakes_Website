 <?php /* starting the session for the security reasons */
 session_start(); ?>

 <?php /* link to the connection of the database in php */
 include ('connection.php');
 echo "connection made";
 ?>

 <?php /* if the form is not empty post the results of the form using the variables of the form into the relevant fields of the database using SQL */
 if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
     echo "writing data";
     $cake=$_POST['cake'];
     $tier=$_POST['tier'];
     $colour=$_POST['colour'];
     $writing=$_POST['writing'];
     $querycake="INSERT INTO producttbl (cake, tier, colour, writing) VALUES ('$cake', '$tier', '$colour', '$writing')";

     /* if the data is inserted in the database, display a pop up prompt box */
     echo "</br>",$querycake;
     if (mysqli_query($conn, $querycake))
     {
         echo "redirect";
         echo"<script>alert('Registered your cake order, thank you.')</script>";
         echo"<script>window.location='thankyoufor.php'</script>";
     }
     else
         /* if the data is not entered into the database show error message */
     {
         echo "Error registering your cake order";
     }
 }
 else
    {echo "no data";}
 ?>
 <!-- start of the web page -->
    <!DOCTYPE html>
    <html>
    <head>

        <meta charset="UTF-8"><!--Title on the tab for the browser-->
        <title>Ella's Cakes</title><!--Linking the CSS / cascading style sheets to the page -->
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- as there is no logo on this page there is just a title and a selection for the customer to make final personalisations -->
    </head>
    <body>
    <h1>Your Order</h1>
    <form method="post" action="login.php">
        <label for="cake">Cake Type:</label><br>
        <select id="cake" name="cake" required="">
            <option value="wedding">Wedding Cake</option>
            <option value="birthday">Birthday Cake</option>
        </select><br>
            <label for="tier">Amount Of Tiers:</label><br>
            <select id="tier" name="tier" required="">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
        </select><br>
        <label for="colour">Cake Colour:</label><br>
            <input type="text" id="colour" name="colour" value="" required=""><br>
        <label for="writing">Any Writing On The Cake?</label><br>
            <input type="text" id="writing" name="writing" value="" required=""><br>
        <br>
        <input type="submit" value="Proceed With Order">


</body>
</html>


