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
        <link rel="stylesheet" href="singlerecipe.css">
        <script type="text/JavaScript" src="singlerecipepage.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="footer.css">
    </head>

    <body >
	<?php include 'header.php';?>
    <div id='container'>
    <?php 
$_SESSION["recipeId"] = $_GET['recipeId'];
$Recipe_ID = $_SESSION["recipeId"];

// Get the recipe from the database
$result  = mysqli_execute_query($connection, "SELECT * FROM recipe WHERE Recipe_ID = '$Recipe_ID'");

foreach ($result as $row) {
	$name = $row['Recipe_Name'];
  $description = $row['Description'];
  $ingredients = $row['Ingredients'];
  $instructions = $row['Instructions'];
  $imageUrl = $row['imageUrl'];
  
  echo "
	<h1 class='h1'>$name</h1>
	</center>
	<h2 class='h2'>Recipe Description</h2>
	<div class='container'>
	<p class='p1'>$description</p>
	
    <img class='image'src=$imageUrl alt='Image of recipe' width=512 height=512 style='object-fit:cover;'>   
    </div>
	<div class='item-container'>
	<b><ul class='ingredients' >Ingredients</b><br>
		<li class='item'>$ingredients</li>
	</ul>
	</div>
	
	<div class='item-container1'>
	<b><ol class='insructions'>Instructions</b>
	
	<li class='insruction1'>$instructions</li>
	</ol>
	</div>

	<form action='checkout.php' method='POST'>
	<button type='submit' id='btnA' style='width:100px;';>Buy</button>
	</form>
    </div>
	  ";
}

?>
    </div>
	
<?php include 'footer.php';?>

    </body>

</html>
<?php mysqli_close($connection);?>