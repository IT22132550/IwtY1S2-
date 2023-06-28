<?php
require_once 'Include/connection.php';
?>

<?php
$errors = array();
if (isset($_POST['sign-up'])) {
    $Username =  $_POST['Username'];
    $password = $_POST['password'];
    $First_name = $_POST['First_name'];
    $Last_name = $_POST['Last_name'];
    $email = $_POST['email'];
    $repass = $_POST['repass'];
    $usertype = $_POST['usertype'];

    //check username already exists
    $Username = mysqli_real_escape_string($connection, $_POST['Username']);
    $quary = "SELECT * FROM registered_user WHERE Username = '{$Username}' LIMIT 1";

    $resultset = mysqli_query($connection, $quary);
    if ($resultset) {
        if (mysqli_num_rows($resultset) == 1) {
            $errors[] = 'Username has already taken';
        }
    }

    if ($password != $repass) {
        $errors[] = 'Password are not same';
    }

    if (empty($errors)) {
        $Username = mysqli_real_escape_string($connection, $_POST['Username']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        $First_name = mysqli_real_escape_string($connection, $_POST['First_name']);
        $Last_name = mysqli_real_escape_string($connection, $_POST['Last_name']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);

        $quary = "INSERT INTO  registered_user (Username,password,First_name,Last_name,email,usertype) VALUES ('{$Username}','{$password}','{$First_name}','{$Last_name}','{$email}','{$usertype}')";
        $result = mysqli_query($connection, $quary);

        if ($result) {
            //if quary successfull redirect to the home page
            if($usertype=='prouser'){
                header('Location: purchase_pro.php');
            }else if($usertype=='contributor'){
                header('Location: purchase_con.php');
            }else{
                echo "submitted successfully.";
                mysqli_close($connection);
                echo '<script>alert("Sign Up successfully.");</script>';
                echo '<script>window.location.href = "login.php";</script>';
                exit;
            }
        } else {
            $errors[] = 'Faild to add the record';
        }
    }
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title>Sign-Up</title>
    <script src="./js/sign-up.js" defer></script>
</head>

<body>
    <?php include 'header.php' ?>
    <br>
    <div class="sign-card">
        <div class="heading">Sign Up</div>
       
        <!-- form details -->
        <form action="./signup.php" method="POST">
            <div class="conta">
                <label for="Username1"><b>User Name</b></label>
                <input type="text" class="log-input" placeholder="username" name="Username"></input>
            </div>

            <div class="conta">
                <label for="First_name1"><b>First Name</b></label>
                <input type="text" class="log-input" placeholder="First name" name="First_name"></input>
            </div>

            <div class="conta">
                <label for="Last_name1"><b>Last Name</b></label>
                <input type="text" class="log-input" placeholder="Last name" name="Last_name"></input>
            </div>

            <div class="conta">
                <label for="email1"><b> E mail</b></label>
                <input type="email" class="log-input" placeholder="email address" name="email"></input>
            </div>
            <div class="conta">
            <label for="password1"><b> password</b></label>
                <input type="password" class="log-input" placeholder="password" id="pw1" name="password"></input>
            </div>
            <div class="conta">
                <label for="repass1"><b> Re-Password</b></label>
                <input type="password" class="log-input" placeholder="re-enter password" id="pw2" name="repass"></input>
            </div>
            <div class="conta">
            <label for="usertype"><b>User Type</b></label>

            <select id="usertype" name="usertype" size="1">
                <option value="freeuser">Free user</option>
                <option value="prouser">Pro user</option>
                <option value="contributor">Contributor</option>
               

            </select>
         </div>
            <div class="val">
                <div class="tagline-validate-success">password matching</div>
                <div class="tagline-validate-unsuccess">password mismatch</div>
                <div class="tagline-validate-empty">fill the text box</div>
            </div>
            <div class="btn-conta">
                <button type="submit" class="log-submit-btn" id="sign-up" name="sign-up">sign-up</button>
                <div class="tagliner">already have an account <a href="login.php"><span>Log in </span></a></div>
            </div>
        </form>
    </div>
    </div>
    <br>
    <?php include 'footer.php' ?>
</body>

</html>