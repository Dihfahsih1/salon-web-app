<?php
include'db.php';
/* User login process, checks if user exists and password is correct */
// Escape email to protect against SQL injections
$password=$_POST['password'];
$email = $_POST['email'];
$sql = "SELECT * FROM registration WHERE email='$email' OR 1=1";
$result=mysqli_query($conn, $sql);

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
    header("location: error.php");
}
else { // User exists
    $user = $result->fetch_assoc();
    
    if( password_verify($_POST['password'], $user['password'])) {
        
        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['active'] = $user['active'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;
        
        header("location: home.php");
    }
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: error.php");
    }
}

                ?>

