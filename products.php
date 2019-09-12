<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
	<link  href="blueberry.css" rel="stylesheet" type="text/css"/>
		<link  href="style.css" rel="stylesheet" type="text/css"/>
	     <script src="1.6.1jquery.min.js"></script>
	     <script src="jquery.blueberry.js"></script>
	     <script>
	    $(window).load(function(){
	             $('.blueberry').blueberry();
	         });
	     </script>


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
	          <li><a href="#"class="current" >Service</a></li>
	          <li><a href="contact.php" >ContactUs</a></li>
	         <li><a href="aboutus.php" >About-Us</a></li>
	      </ul> 
	 </div> <div id="user">
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
</header>
<br>
	     <!-- THIS IS WHERE PRODUCT MENU STARTS FROM-->
<div id="wrapper"> 
<section id="sec1">
	<h1>Hair Services</h1>
	<div id="cuts">
		<h2>1.Hair cuts</h2><br>
		 <h3>Ladies' Hair Cuts</h3>
	<div id="hair">
		<a href="#">
		<img src="images/cuts/15.jpg">Price: Ugshs. 35000</a>
		</div>
	<div id="hair"><a href="#">
		<img src="images/cuts/16.jpg">Price: Ugshs. 35000</a>
		
	</div>
	<div id="hair"><a href="#">
		<img src="images/cuts/18.jpg">Price: Ugshs. 35000</a>
		
	</div>
	<div id="hair"><a href="#">
		<img src="images/cuts/17.jpg">Price: Ugshs. 35000</a>
		
	</div>
	
	<br>
	<p>******************************************************************************************************</p>
	<h3>Gents' Hair Cuts</h3>
	<div id="hair"><a href="#">
		<img src="images/cuts/1.jpg">Price: Ugshs. 35000</a>
		
	</div>
	<div id="hair"><a href="#">
		<img src="images/cuts/3.jpg">Price: Ugshs. 35000</a>
		
	</div>
	<div id="hair"><a href="#">
		<img src="images/cuts/6.jpg">Price: Ugshs. 35000</a>
		
	</div>
	<div id="hair"><a href="#">
		<img src="images/cuts/8.jpg">Price: Ugshs. 35000</a>
		
	
  </div>
  <p>****************************************************************************************************</p>
	<div id="cuts">
		<h2>2. Hair Perming</h2><br>
	<div id="hair">
		<a href="#">
		<img src="images/perms/1.jpg">Price: Ugshs. 35000</a>
		</div>
	<div id="hair"><a href="#">
		<img src="images/perms/2.jpg">Price: Ugshs. 35000</a>
		
	</div>
	<div id="hair"><a href="#">
		<img src="images/perms/3.jpg">Price: Ugshs. 35000</a>
		
	</div>
	<div id="hair"><a href="#">
		<img src="images/perms/4.jpg">Price: Ugshs. 35000</a>
		
	</div>
	
	<br>
	<p>*******************************************************************************************************</p>
	<h2>3. Hair Retouch</h2>
	<div id="hair"><a href="#">
		<img src="images/retouch/1.jpg">Price: Ugshs. 35000</a>
		
	</div>
	<div id="hair"><a href="#">
		<img src="images/retouch/8.jpg">Price: Ugshs. 35000</a>
		
	</div>
	<div id="hair"><a href="#">
		<img src="images/retouch/6.jpg">Price: Ugshs. 35000</a>
		
	</div>
	<div id="hair"><a href="#">
		<img src="images/retouch/5.jpg">Price: Ugshs. 35000</a>
		
	</div>

  </div>		
</section>

<section id="sec2">
	<h1>Nail Services</h1>
	
	<div class="nails">
		<h2>Manicure</h2>
		<a href="#"><img src="images/nails/56.jpg">Treatin Nails</a>
	</div><br>
	
	
	<div class="nails">
		<h2>Pedicure</h2>
		<a href="#"><img src="images/nails/ped.jpg">Treatin Nails</a>
	</div><br>
	
	<div class="nails">
		<h2>Nail Sculpting</h2>
		<a href="#"><img src="images/nails/6.jpg">Treatin Nails</a>
	</div>
		
</section>

<aside id="aside">
	<h1>Skin Care</h1>
	<div class="skin">
		<h2> Facials</h2>
		<a href="#"><img src="images/skin/n4.jpg">Beautifying you</a>
		
	</div>
	<div class="skin">
		<h2> Massaging</h2>
		<a href="#"><img src="images/skin/massa.jpg">Beautifying you</a>
	</div>
	<div class="skin">
		<h2> Body Waxing</h2>
		<a href="#"><img src="images/skin/l2.jpg">Beautifying you</a>
	</div>
</aside>
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
