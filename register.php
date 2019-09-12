<?php
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */

// Set session variables to be used on profile.php page
$_SESSION['email'] = $_POST['email'];
$_SESSION['first_name'] = $_POST['firstname'];
$_SESSION['last_name'] = $_POST['lastname'];

// Escape all $_POST variables to protect against SQL injections
$first_name = ($_POST['firstname']);
$last_name = ($_POST['lastname']);
$email = ($_POST['email']);
$password =(password_hash($_POST['password'], PASSWORD_BCRYPT));
$confirm_password=(password_hash($_POST['confirm_password'], PASSWORD_BCRYPT));
$hash = ( md5( rand(0,1000) ) );

if ($_POST["password"] === $_POST["confirm_password"]) {
    header("location:home.php");
}
else {
    echo 'passwords dont match';
}
// Check if user with that email already exists
$sql = ("SELECT * FROM registration WHERE email='$email'") or die(mysqli_error($conn));
$result=mysqli_query($conn, $sql);

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'User with this email already exists!';
    header("location: error.php");
    
}
else { // Email doesn't already exist in a database, proceed...

    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO registration (first_name, last_name, email, password, confirm_password, hash)
            VALUES ('$first_name','$last_name','$email','$password','$confirm_password', '$hash')";
  
    // Add user to the database
    if (mysqli_query($conn,$sql)){
        $_SESSION['active']=1;
        $_SESSION['logged_in']=true;
        $_SESSION['message']="Thanks for signing up";
        header("location:home.php");
        
    }
    else {
        $_SESSION['message']='Registration failed';
        header("location:error.php");
    }
    

    }
?>