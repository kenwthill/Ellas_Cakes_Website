<?php /* starting the session for the security reasons */
session_start(); ?>

<?php /* link to the connection of the database in php */
include ('connection.php');
?>
<!-- start of webpage -->
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <!--Title on the tab for the browser-->
<title>Ella's Cakes</title>
    <link rel="stylesheet" href= "style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<style>
</style>
<!-- the title of the page -->
<h1>Thank you for your order we will be in touch shortly to finalise the order and price. </h1>

<!-- return to home button -->
<a href= "index.html">
    <input type="submit" name="submit" background-color="white"  value="Return Home">
</a>

</body>
</html>
