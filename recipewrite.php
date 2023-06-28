<?php 
include_once 'Include/connection.php';
include_once 'header.php';
?> 
<?php



// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Get the form data
  $recipeName = $_POST['recipeName'];
  $ingredients = $_POST['ingredients'];
  $instructions = $_POST['instructions'];
  $description = $_POST['description'];
  $category = $_POST['category'];
  $price = $_POST['price'];
  $image = $_FILES['image'];

  // Validate the form data
  if (empty($recipeName)) {
    echo "Please enter a recipe name.";
    exit;
  }

  if (empty($ingredients)) {
    echo "Please enter the ingredients.";
    exit;
  }

  if (empty($instructions)) {
    echo "Please enter the instructions.";
    exit;
  }



  // Insert the data into the database
  $sql = "INSERT INTO recipe(Recipe_Name, Ingredients, Description,Instructions,Category,price) VALUES ('{$recipeName}', '{$ingredients}','{$description}', '{$instructions}','{$category}','{$price}')";
  $result = mysqli_query($connection, $sql);

  if ($result) {
    echo "Recipe successfully uploaded.";
    header("Location:recipes.php");
  } else {
    echo "Error uploading recipe.";
  }

}

?>



<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Recipe world | Recipe Write
        </title>
        
        <link rel="stylesheet" href="recipe_c.css">
        
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="sign_up.js"></script>

    </head>

    <body >
    
    <div class="upload-form">
        <h1 style="text-align:center; padding: 30px;">Write your recipe</h1>
    <form id="recipeForm" enctype="multipart/form-data" action="recipewrite.php" method="post">
        <div>
          <label for="recipeName">Recipe Name:</label>
          <input type="text" id="recipeName" name="recipeName" required>
        </div>
        <div>
          <label for="ingredients">Ingredients:</label>
          <textarea id="ingredients" name="ingredients" rows="5" required></textarea>
        </div>
        <div>
          <label for="description">Description:</label>
          <textarea id="description" name="description" rows="5" required></textarea>
        </div>
        <div>
          <label for="instructions">Instructions:</label>
          <textarea id="instructions" name="instructions" rows="10" required></textarea>
        </div>
        <div>
          <label for="category">category:</label>
          <textarea id="category" name="category" rows="1" required></textarea>
        </div>
        <div>
          <label for="price">Recipe Name:</label>
          <input type="text" id="price" name="price" required>
        </div>
        <div>
          <label for="image">Image:</label>
          <input type="file" id="image" name="image" accept="image/*" >
        </div>
        <button type="submit">Upload Recipe</button>
      </form>
    </div>

    </body>

</html>
<?php
include_once 'footer.php';
?>