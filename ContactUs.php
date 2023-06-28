
<?php
        
        include_once ('Include/connection.php');
        // Check if the form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

          // Retrieve the form data
          $fstname = $_POST['firstname'];
          $lstname = $_POST['lastname'];
          $tel = $_POST['tel'];
          $subject = $_POST['subject'];
          
          // Validate the form data 
          if (empty($fstname) || empty($lstname) || empty($tel) || empty($subject)) {
              echo "Please fill in all fields.";
          }
                  // Prepare and execute the SQL statement to insert the review 
                  $query = "INSERT INTO contactus(fname, lname, tel, text) VALUES ('{$fstname}', '{$lstname}', '{$tel}', '{$subject}')";
                  $result = mysqli_query($connection, $query);{ 
                  // Check if the insertion was successful
                  if ($result) {
                    //successfull message 
                    echo " submitted successfully.";
                    mysqli_close($connection);
                    echo '<script>alert("contact form submitted successfully.");</script>';
                    echo '<script>window.location.href = "ContactUs.php";</script>';
                    exit;
                  } else {
                      echo "Error submitting the review.";
                  }

                  // Close the database connection
                  mysqli_close($connection);
              }
            }
          
    ?>



<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Recipe world | Contact us
        </title>
        <link rel="stylesheet" href="ContactUs.CSS">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
   
<body>
  <!--include header-->
  <?php include_once 'header.php'?>
    
        <div class="container">
          <h1 style="text-align: center;">Contact Us</h1>
            <form method="POST" action="ContactUs.php" >
          
              <label for="fname">First Name</label>
              <input type="text" id="firstname" name="firstname" placeholder="Your name..">
          
              <label for="lname">Last Name</label>
              <input type="text" id="lastname" name="lastname" placeholder="Your last name..">

              <label for="tel">Tel No</label>
              <input type="text" id="tel" name="tel" placeholder="Your tel no...">
          
              <label for="subject">Subject</label>
              <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
          
              <input type="submit" value="Submit" >
          
            </form>
          </div>
        <div class="container1">
                <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=450&amp;hl=en&amp;q=sliit malabe&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://capcuttemplate.org/">Capcuttemplate.org</a></div></div>
             
        </div>
        <?php include_once './footer.php';?>
        </body>
</html>
