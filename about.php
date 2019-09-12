<html>
	<head>
		<title>The Saloon</title>
		
			<meta charset ="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.5">
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link  href="blueberry.css" rel="stylesheet" type="text/css"/>
		<!--<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>-->
	     <script src="1.6.1jquery.min.js"></script>
	     <script src="jquery.blueberry.js"></script>
	     <script>
	    $(window).load(function(){
	             $('.blueberry').blueberry();
	         });
	     </script><!-- the script ends here!-->
	</head>
	<body>
 <header>
    <div id="logo">
	    <img src="images/logo.png"/>
	    </div>  
	    <div id="name">
	    Fresh-Up Saloon
	    </div>   
	    <div id="menu">
	      <ul id="nav">
	          <li><a href="home.php" >Home</a></li>
	          <li><a href="products.php" >Service</a></li>
	          <li><a href="contact.php" >ContactUs</a></li>
	         <li><a href="#" class="current" >About-Us</a></li>
	      </ul> 
	 </div>
	  <div id="user">
	    <?php
session_start();
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else {
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>
 
  <div class="form">

          <h3>YOUR ACCOUNT:</h3>      
          <h4><?php echo $first_name.' '.$last_name; ?></h4>
          <h5><?= $email ?></h5>
   
          <a href="logout.php"><button id="logout" name="logout"/>Log Out</button></a>
   </div> 
  </div>
 </div>
	   
	 </header>
  <body>
  <div id="wrapper">
  the infor goes here

  </div>

<footer>
        <section>
            <h3><b>Connect With Us</b></h3>
            <ul class="social">
                <li><a href="https://facebook.com"><img src="images/fb.png"/></a></li>
                <li><a href="https://twitter.com/Twitter"><img src="images/tw.png"/></a></li>
                <li><a href="https://google.com"><img src="images/gp.png"/></a></li>
                <li><a href="https://youtube.com"><img src="images/yt.jpg"/></a></li>
            </ul>
        </section>
        <section>
             <img src="images/8.jpg"/>
        </section>
    </footer> 
    <footer class="second">
        <p>@Copyright.. My Saloon. 2017</p>
    </footer>  
	</body>	
</html>