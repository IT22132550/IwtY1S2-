<?php
session_start();
?>
<?php require_once 'include/connection.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Recipe world | Contact us
        </title>
        <link rel="stylesheet" href="checkout.css">
        <script type="text/JavaScript" src="checkout.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="footer.css">
    </head>

    <body >
        <!-----header start---->
	<?php include 'header.php';?>

	<div class="root-container">
        <!-----checkout items---->
  <?php include 'checkout_items.php';?>
  <!-----footer start---->
<?php include 'footer.php';?>
<script>
document.getElementById('btnA').addEventListener('click', function() {
    alert('Buy button clicked!');
</script>
    </body>

</html>
<?php mysqli_close($connection);?>