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
        <link rel="stylesheet" href="join meeting.css">
        <script type="text/JavaScript" src="checkout.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="footer.css">
    </head>

    <body >
	<?php include 'header.php';?>
<div class="main">
     <div class="meeting">
     <h2>Join meeting</h2>
	 <form action="meeting.php">
        <input type="submit" value="Join Meeting"
        name="submit" id="submit">
       
	   </form>
    </div>
</div>    
<br><br><br><br><br>
<?php include 'footer.php';?>
</html>






</body>








</html>