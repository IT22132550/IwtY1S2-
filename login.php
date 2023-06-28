<?php
require_once 'Include/connection.php';

session_start();
?>


<?php
$errors = array();

if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $quary = "SELECT * FROM registered_user WHERE email ='{$email}' AND password = '{$password}' LIMIT 1 ";
    $result = mysqli_query($connection, $quary);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        
        $_SESSION['userId'] = $row['Userid'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];

        if ($row['usertype'] == 'freeuser') {
            echo "Review submitted successfully.";
            mysqli_close($connection);
            echo '<script>alert("login successfully.");</script>';
            echo '<script>window.location.href = "FreeUser2.php";</script>';
            exit;
        } 
        elseif ($row['usertype'] == 'prouser') {
            echo "Review submitted successfully.";
            mysqli_close($connection);
            echo '<script>alert("login successfully.");</script>';
            echo '<script>window.location.href = "ProUser2.php";</script>';
            exit;
        } 

        elseif ($row['usertype'] == 'contributor') {    
            echo "Review submitted successfully.";
            mysqli_close($connection);
            echo '<script>alert("login successfully.");</script>';
            echo '<script>window.location.href = "Contributor2.php";</script>';
            exit;
        }
    } 
    
    else {
        $errors[] = "<h1 class = \"error\">Username or Password is invalid</h1>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale1.0">
    <link rel="stylesheet" href="login.css">
    <title>Log-In Form</title>
</head>

<body>
    <?php include 'header.php' ?>
    <br>
    <div class="login-card">
        <!-- edit in this -->

        <div class="col co2">
            <?php
            echo  "<div>";
            foreach ($errors as $message) {
                echo $message;
            }
            echo "</div>";
            ?>
            <div class="heading">Log In</div>
            <form action="./login.php" method="post">
                <div class="conta">
                    <label for="email1"><b> E mail</b></label>
                    <input type="email" class="log-input" placeholder="Email" name="email"></input>
                </div>
                <div class="conta">
                    <label for="password1"><b> Password</b></label>
                    <input type="password" class="log-input" placeholder="password" name="password"></input>
                </div>
                <div class="btn-conta">
                    <a href="login.php"><button type="submit" class="log-submit-btn" name="signin">login</button></a>
                    <div class="btn-wrap">
                        <div class="tagliner">still don't have an account</div>
                        <a href="signup.php"><button type="submit" class="log-submit-btn">sign up</button></a>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <br>
    <?php include 'footer.php' ?>
</body>

</html>