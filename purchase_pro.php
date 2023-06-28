<?php
session_start();
?>
<?php require_once 'include/connection.php';

$cardNameErr = $cardNumberErr = $expiryErr = $cvvErr = "";

function validateCvv($cvv){
	if($cvv == '350'){
		return true;
	} else {
		return false;	
	}
}

function validatecard($number)
 {
    if($number == '1111-2222-3333-4444'){
		return true;
	} 
	
	return false;
 }

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $name = $_POST['card-name'];
  $cardNumber = $_POST['card-number'];
  $expiry = $_POST['expiry'];
  $cvv = $_POST['cvv'];
  $cardType = $_POST['payment-method'];
  $amount= $_SESSION["recipePrice"];
  // Perform basic form validation
  $isValid = true;
  if (empty($name)) {
    $cardNameErr = "Card Name is required.";
	$isValid = false;
  }
 
  if (empty($cardNumber)) {
    $cardNumberErr = "Card Number is required.";
	$isValid = false;
  }
  else if (validatecard($cardNumber) == false) {
	  $cardNumberErr = "Invalid Credit Card Number";
	  $isValid = false;
  }
  
  if (empty($expiry)) {
    $expiryErr = "Expiry Date is required.";
	$isValid = false;
  }
  if (empty($cvv)) {
    $cvvErr = "CVV is required.";
	$isValid = false;
  } else if(validateCvv($cvv) == false){
	  $cvvErr = "Incorrect CVV";
	  $isValid = false;
  } 
  // If there are no errors, process the form
  if ($isValid) {
	$payment_id = uniqid('payment_');
    // Here, you can perform further processing like inserting the data into the database or handling the payment.
	$query="INSERT INTO  payment(Pay_ID,User_ID,Card_Type,Card_Name,Card_Number,Expiray_Date,CVV,Amount) VALUES ('$payment_id','U1','$cardType', '$name', '$cardNumber', '$expiry', '$cvv','$amount')";
$check = mysqli_query($connection,$query);
    // Redirect to a success page
    header('Location: boughtpro.php');
    exit;
  }
}

?>

?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Recipe world | Contact us
        </title>
        <link rel="stylesheet" href="purchase.css">
        <script type="text/JavaScript" src="purchase.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    </head>

    <body >
	<?php include 'header.php';?>
    <br><br><br><br><br><br><br><br>
	<div class="container">
    <h1 style="color:black">Purchase</h1>
    <form method="POST" id="creditCardForm">
	  <div class="form-group">
        <label for="payment-method">Payment Method:</label>
        <select name="payment-method" id="payment-method">
        <option value="visa">Visa</option>
        <option value="mastercard">Master Card</option>
        <option value="american_express">American Express</option>
      </select>
      </div>
      <div class="form-group">
        <label for="name">Card Name:</label>
        <input type="text" id="name" name="card-name">
		<span class="error"><?php echo $cardNameErr;?></span>
      </div>
      <div class="form-group">
        <label for="card-number">Card Number:</label>
        <input type="text" id="card-number" name="card-number">
		<span class="error"><?php echo $cardNumberErr;?></span>
      </div>
      <div class="form-group">
        <label for="expiry">Expiry Date:</label>
        <input type="date" id="expiry" name="expiry">
		<br>
		<span class="error"><?php echo $expiryErr;?></span>
      </div>
      <div class="form-group">
        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv">
		<span class="error"><?php echo $cvvErr;?></span>
      </div>
      <div class="sentence">
    <input type="checkbox" value="Check" required>
    <p class="p2">I have read and accept the terms of use, rules of flight, and conditions privacy policy</p>
  </div>
	  <button type="submit">Upgrade to Pro Account</button>
	
	</form>
  </div>
  <br><br>
<?php include 'footer.php';?>

    </body>

</html>
<?php mysqli_close($connection);?>