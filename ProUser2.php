<?php require_once('Include/connection.php'); ?>
<?php
session_start();
?>
<?php
  
  $UserType=$First_NameErr=$Last_NameErr= $EmailErr=$DOBErr=$CountryErr=$UsernameErr=$PasswordErr="";

  $UserType = "Pro_User";
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Email = $_POST['Email'];
    $DOB = $_POST['DOB'];
    $Country = $_POST['Country'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];

	  // Perform basic form validation
  $isValid = true;
  if (empty($First_Name)) {
    $First_NameErr = "Recipe Name is required.";
	$isValid = false;
  }
 
  if (empty($Last_Name)) {
    $Last_NameErr = "Last_Name is required.";
	$isValid = false;
  }
  
  if (empty($Email)) {
    $EmailErr = "Email is required.";
	$isValid = false;
  }
  
  if (empty($DOB)) {
    $DOBErr = "DOB is required.";
	$isValid = false;
	
  }

  if (empty($Country)) {
    $CountryErr = "Country is required.";
	$isValid = false;
	
  }

  if (empty($Username)) {
    $UsernameErr = "Username is required.";
	$isValid = false;
	
  }

  if (empty($Password)) {
    $PasswordErr = "Password is required.";
	$isValid = false;
	
  }

    // If there are no errors, process the form
    if ($isValid) {
      // Prepare and execute the SQL query
      $sql = "INSERT INTO useraccount (First_Name, Last_Name, Email, DOB, Country, Username, Password, UserType) VALUES ('$First_Name', '$Last_Name', '$Email', '$DOB', '$Country', '$Username', '$Password', '$UserType' )";
      $result  = mysqli_query($connection, $sql);
    echo '<script language="javascript">';
    echo 'alert("Profile Updated Successfully !!!")';
    echo '</script>';
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>
      Recipe World-Profile
    </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>

    <!-- header start -->

    <header>

      <div class="topnav" id="myTopnav">

        <a href="#default" id="logo">Recipe World</a>

        <div class="navbar">
          <a href="home.php" class="active">Home</a>
          <a href="blog.php">Blog</a>
          <a href="recipes.php">Recipes</a>
          <a href="about.php">About</a>
          <a href="review.php">Review</a>
          <form id="form1" action="search.php" method="get">
            <input type="text" placeholder="Search..." name="query" />
            <button type="submit">Search</button>
          </form>          
        </div>

        <div class="dropdown">
          <button class="dropbtn">Profile 
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a style="color: cadetblue;" href="#">Pro User Account</a>
            <a href="logout.php">Log out</a>
          </div>
        </div> 

        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        
      </div>

    </header>

    <!--header end-->

    <div class="transbox">
      <div class="btn-group">
        <a href="recipes.php">
        <button class="button" id="but1">Buy a recipe</button>
        </a>
        <a href="join meeting.php">
        <button class="button" id="but2">Join a meeting</button>
        </a>
      </div>
      <h1>Hello !</h1>
      <p> 
        Want to edit your profile? Find an old recipes? Put off <br>
        work for a while? You can do it all here.
      </p>
    </div>

    <!--Vertical Tabs-->
    <div class="tab">
      <button class="tablinks" onclick="openTabs(event, 'Overview')" id="defaultOpen">Account Overview</button>
      <button class="tablinks" onclick="openTabs(event, 'Plans')">Available Plans</button>
      <button class="tablinks" onclick="openTabs(event, 'Redeem')">Redeem</button>
    </div>
    
    <div id="Overview" class="tabcontent">
      <h2 style="text-align:center; color: #ddd;">Account Overview</h2>
      
      <div class="container">
        <form id="form2" action="/action_page.php">
          
          <div class="row">
            <div class="col-25">
              <label for="fname">Username</label>
            </div>
            <div class="col-75">
              <input type="text" id="usrname" name="username" placeholder="Your Username..">
              <span class="error"><?php echo $UsernameErr ;?></span>
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="fname">Password</label>
            </div>
            <div class="col-75">
              <input type="password" id="passw" name="password" placeholder="Your password..">
              <span class="error"><?php echo $PasswordErr ;?></span>
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="fname">Firstname</label>
            </div>
            <div class="col-75">
              <input type="text" id="fname" name="firstname" placeholder="Your Firstname..">
              <span class="error"><?php echo $First_NameErr ;?></span>
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="fname">Lastname</label>
            </div>
            <div class="col-75">
              <input type="text" id="lname" name="lastname" placeholder="Your lastname..">
              <span class="error"><?php echo $Last_NameErr ;?></span>
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="Email">Email</label>
            </div>
            <div class="col-75">
              <input type="email" id="email" name="email" placeholder="Your email address..">
              <span class="error"><?php echo $EmailErr ;?></span>
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="country">Country</label>
            </div>
            <div class="col-75">
              <select id="country" name="country">
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
                <option value="usa">Sri Lanka</option>
              </select>
              <span class="error"><?php echo $CountryErr ;?></span>
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="DOB">Date of birth</label>
            </div>
            <div class="col-75">
              <input type="date" id="Birthday" name="DateBirth" placeholder="Your Bithday..">
              <span class="error"><?php echo $DOBErr ;?></span>
            </div>
          </div>

          <div class="row">
            <input type="submit" value="Edit Profile">
          </div>

        </form>

        <div class="yourPlan">
          <h3 style="text-align:center; color: #ddd;">Pro User</h3>

          <p style="text-align:center; color: #ddd;">
            You can view various recipes and the respective ingredients, <br> while also having the ability to buy recipes uploaded onto the website and further access videos of the recipe procedures uploaded.
          </p>

          <button type="button" id="planBut">Change Plan</button>

        </div>
      </div>
    </div>
    
    <div id="Plans" class="tabcontent">
      <h2 style="text-align:center; color: #ddd;">Available Plans</h2>
      
      <div class="AvaPlans">
        <!-- Current Plan -->
        <div class="containerPlans" style="background-color:#00121b">
          <div class="rowPlans">
            <div class="column-66">
              <h1 class="xlarge-font" style="color: #ddd;"><b>Pro User</b></h1>
              <h1 class="large-font" style="color:MediumSeaGreen;"><b>Current Plan</b></h1>
              <p style="color: #ddd;"><span style="font-size:36px; color: #ddd">Cook like a pro.</span> Has the privilege of viewing various recipes and the respective ingredients, while also having the ability to buy recipes uploaded onto the website. This user can further access videos of the recipe procedures uploaded</p>
            </div>
          </div>
        </div>

        <!-- contributor plans -->
        <div class="containerPlans" style="background-color:#f1f1f1">
          <div class="rowPlans">
            <div class="column-66">
              <h1 class="xlarge-font"><b>Contributor</b></h1>
              <h1 class="large-font" style="color:red;"><b>Why buy it?</b></h1>
              <p><span style="font-size:24px">Inspiring others by your ideas.</span> Has the ability to view recipes, ingrediants and to buy recipes uploaded. A contributor can further upload his/her own recipes to the website for other users to access</p>
              <p>LKR 697.00 / month</p>
              <a href="purchase_con.php">
              <button type="button" id="selectBut">Select</button>
              </a>
            </div>
          </div>
        </div>

        <!-- free Plans -->
        <div class="containerPlans" style="background-color:#00121b">
          <div class="rowPlans">
            <div class="column-66">
              <h1 class="xlarge-font" style="color: #ddd;"><b>Free User</b></h1>
              <h1 class="large-font" style="color:MediumSeaGreen;"><b>If you want!</b></h1>
              <p style="color: #ddd;"><span style="font-size:36px; color: #ddd">Stay free stay safe.</span> Has the privilege of viewing multiple recipes uploaded by various contributors and can access the ingredients of the respective recipes</p>
              <p style="color: #ddd;">LKR 849.00 / month</p>
              <a href="FreeUser2.php">
              <button type="button" id="selectBut">Select</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="Redeem" class="tabcontent">
      <h2 style="text-align:center; color: #ddd;">Redeem your code</h2>
      <p style="color: #ddd;">Enter the PIN on the back of your gift card, or enter the premium code from <br>your in-store receipt.</p>
      <p style="color: #ddd;"><strong>Enter your premium code</strong></p>
      <input type="text" id="reenum" name="reenum">
      <p></p>
      <button type="button" id="continue">Continue</button>
    </div>

    
    <script type="text/javascript" src="Javascript/script.js"></script>

    <!--footer start-->      
    <footer>
      
      <div class="inner-footer">

      <!--  for company name and description -->
          <div class="footer-items">
            <h1>Recipe World</h1>
            <p>Welcome to Web-Recipe World, your culinary inspiration hub.
                Explore our diverse collection of recipes from around the globe, 
                Join our community, ignite your passion for cooking, 
                and indulge in flavors that will delight your taste buds. 
                Get ready for a flavorful adventure!</p>
          </div>

      <!--  for quick links  -->
          <div class="footer-items">
            <h3><u>Quick Links</u></h3>
              <ul class="qlink">
                <a href="#"><li class="qlink">Home</li></a>
                <a href="#"><li class="qlink">Search</li></a>
                <a href="#"><li class="qlink">Contact</li></a>
                <a href="#"><li class="qlink">About</li></a>
              </ul>
          </div>

      <!--  for some other links -->
          <div class="footer-items">
            <h3><u>Recipes</u></h3>
              <ul class="qlink">
                <a href="#"><li class="qlink">Indian</li></a>
                <a href="#"><li class="qlink">Chinese</li></a>
                <a href="#"><li class="qlink">Mexican</li></a>
                <a href="#"><li class="qlink">Italian</li></a>
              </ul>
          </div>

      <!--  for contact us info -->
          <div class="footer-items">
            <h3><u>Contact us</u></h3>
              <ul class="qlink">
                <li class="qlink"><i class="fa fa-phone" aria-hidden="true"></i>123456789</li>
                <li class="qlink"><i class="fa fa-envelope" aria-hidden="true"></i>xyz@gmail.com</li>
                <hr>
                <li class="qlink"><i class="fa fa-dollar" aria-hidden="true"></i>payment methods</li>
                <img src="CSS/payment_op.png" class="imgcenter" >
              </ul> 
            
          </div>
      </div>
        
      
      <!--   Footer Bottom start  -->
        <div class="footer-bottom">
          Copyright &copy; Recipe World 2023.
        </div>

      <!--footer end-->
  </footer>
    
  </body>
</html>

<?php mysqli_close($connection); ?>