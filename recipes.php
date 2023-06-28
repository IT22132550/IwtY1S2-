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
        <link rel="stylesheet" href="recipes.css">
       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="footer.css">
    </head>

<body>
<?php include 'header.php';?>



<br>
<br>
<br>
<br>
<div class="pos">
<center><h2 class="h">Here Are Some Our Best Recipes:</h1></center>

    <p class="p1"><b>Introducing Recipe World: Your Ultimate Online Recipe Destination. </b>
      <br><br> Welcome to Recipe World, your go-to website for all things gastronomic! 
       <br><br> Recipe World is here to inspire and lead you with a large selection of delectable recipes from around the world, whether you're a seasoned cook or just beginning your culinary journey. Our goal is to make it simpler than ever for you to discover, prepare, and enjoy delectable meals by giving you a one-stop shop for all your culinary needs.The power of tastes and the fun of cooking are two things that Recipe World fully appreciates. To bring you a wide selection of recipes covering different cuisines and dietary needs, our passionate team of chefs, food enthusiasts, and recipe curators works nonstop.
         We provide everything you need, from time-honored classics to creative fusion cuisine.<br><br>
        You can easily make the recipes using our instructions,you can purchase it and you can enjoy the recipes.</p>
    

<br>
<br>
<div class="container">

<?php 
// Get the recipe from the database
$result  = mysqli_execute_query($connection, "SELECT * FROM recipe ");

foreach ($result as $row) {
	$name = $row['Recipe_Name'];
    $id = $row['Recipe_ID'];
	$link = 'single_recipe.php?recipeId=' . $id;
  
  echo 
	"<a href=$link>
		<div class='circle'>$name</div>
	</a>";
}

?>
</div>
</div>
<br><br>
<?php include 'footer.php';?>
   

</body>
</html>
<?php mysqli_close($connection); ?>