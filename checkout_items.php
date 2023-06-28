<?php
//get recipe id
$Recipe_ID = $_SESSION["recipeId"];
//execute query
$result = mysqli_execute_query($connection, "SELECT * FROM recipe WHERE Recipe_ID = '$Recipe_ID'");

foreach ($result as $row) {
    $name = $row['Recipe_Name'];
    $price = $row['price'];
    $_SESSION["recipePrice"] = $price;
    $imageUrl = $row['imageUrl'];

    echo "<div class='items-container'>
            <div class='item-card'>
  <img src=$imageUrl alt='Item Image' style='object-fit:cover;'>
  <div class='item-details'>
    <h3 class='item-title'>$name</h3>
		<p class='item-description'>Quantity</p>
    <span class='item-price'>1</span>
	<p class='item-description'>Price</p>
    <span class='item-price'>$price</span>

  </div>



</div>

 </div>


		   <div class='items-container2'>


 <hr>
 <b><p class='Order-card'>Order Summary</p></b>
 <b><p>Items Total</p></b>  <p class='Order1'>1</p>
 <b><p>Total Payment</p></b> <p class='Order'>$price</p>
<form method='GET' action='purchase.php'>
 <div id='Place-Order'>
 <button type='submit' value='Place Order' id='btn'>Place Order</button>
 </div>
 </form>
 </div>
	</div>

        ";
}
?>
