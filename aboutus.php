

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
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- ####################################################################################################### -->
    <!-- ####################################################################################################### -->
    <!-- ####################################################################################################### -->
    <!-- ####################################################################################################### -->
    <div id="about-us" class="clear">
      <!-- ####################################################################################################### -->
      <section id="about-intro" class="clear">
        <div class="three_fifth first"><img class="imgholder" src="images/demo/548x430.gif" alt=""></div>
        <div class="two_fifth">
          <h2>Vivamuslibero Auguer</h2>
          <p>Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
          <p>Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          <h2>Vivamuslibero Auguer</h2>
          <ul>
            <li>Aliquam venenatis leo et orci.</li>
            <li>Pellentesque eleifend vulputate massa.</li>
            <li>Vivamus eleifend sollicitudin eros.</li>
            <li>Maecenas vitae nunc.</li>
            <li>Ut pretium odio eu nisi.</li>
            <li>Nam condimentum mi id magna.</li>
            <li>Pellentesque consectetuer, felis vel rhoncus.</li>
          </ul>
        </div>
      </section>
      <!-- ####################################################################################################### -->
      <section id="client_logos">
        <ul class="clear">
          <li class="one_fifth first"><img src="images/demo/logo.gif" alt=""></li>
          <li class="one_fifth"><img src="images/demo/logo.gif" alt=""></li>
          <li class="one_fifth"><img src="images/demo/logo.gif" alt=""></li>
          <li class="one_fifth"><img src="images/demo/logo.gif" alt=""></li>
          <li class="one_fifth"><img src="images/demo/logo.gif" alt=""></li>
        </ul>
      </section>
      <!-- ####################################################################################################### -->
      <section id="team">
        <h2>Vivamuslibero Auguer</h2>
        <ul class="clear">
          <li class="one_quarter first">
            <figure><img src="images/demo/team-member.gif" alt="">
              <figcaption>
                <p class="team_name">Name Goes Here</p>
                <p class="team_title">Job Title Here</p>
              </figcaption>
            </figure>
          </li>
          <li class="one_quarter">
            <figure><img src="images/demo/team-member.gif" alt="">
              <figcaption>
                <p class="team_name">Name Goes Here</p>
                <p class="team_title">Job Title Here</p>
              </figcaption>
            </figure>
          </li>
          <li class="one_quarter">
            <figure><img src="images/demo/team-member.gif" alt="">
              <figcaption>
                <p class="team_name">Name Goes Here</p>
                <p class="team_title">Job Title Here</p>
              </figcaption>
            </figure>
          </li>
          <li class="one_quarter">
            <figure><img src="images/demo/team-member.gif" alt="">
              <figcaption>
                <p class="team_name">Name Goes Here</p>
                <p class="team_title">Job Title Here</p>
              </figcaption>
            </figure>
          </li>
        </ul>
      </section>
      <!-- ####################################################################################################### -->
    </div>
    <!-- ####################################################################################################### -->
    <!-- ####################################################################################################### -->
    <!-- ####################################################################################################### -->
    <!-- ####################################################################################################### -->
  </div>
</div>
</body>
</html>