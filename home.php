<html>	
	<head>
		<title>Stunning Website</title>
		<meta charset ="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.5">
		
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
	          <li><a href="#" class="current">Home</a></li>
	          <li><a href="products.php" >Service</a></li>
	          <li><a href="contact.php" >Contact-Us</a></li>
	         <li><a href="aboutus.php" >About-Us</a></li>
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
 
</header>
	 
	<div id="doc">
	    <div id="content">
	        <div class="blueberry">
	            <ul class="slides">
	                <li><img src="images/slider1.jpg"/></li>
	                 <li><img src="images/slider2.jpg"/></li>
	                <li><img src="images/slider3.jpg"/></li>
	                 <li><img src="images/slider4.jpg"/></li>
	                  <li><img src="images/slider5.jpg"/></li>
	               
	            </ul>
	            <h3>We are priviledged to have you here feel at home as you navigate through our products that we offer</h3>
   
	        </div>
	    </div>
	</div>	
	    <aside id="aside">
        <h1>Kids' Products</h1> 
     <img src="images/kids.jpg"/> 
      <p>
       We also care for kids' saloon needs at relatively affordable prices.  
      </p>  
    </aside> 
	<section id="sec1">
	    <h1>Gents Products</h1> 
	   <div class="blueberry">
	            <ul class="slides">
	                <li><img src="images/q.jpg"/></li>
	                 <li><img src="images/massa.jpg"/></li>
	                <li><img src="images/wer.jpg"/></li>
	                 <li><img src="images/trt.jpg"/></li>
	                  <li><img src="images/slider6.jpg"/></li>
	               
	            </ul>
	    </div>        
	  <p>
	    We care about our clients so much</br>our client is offered lunch </br>or breakfast as they are being worked on  
	  </p>  
	</section>	
	<section id="sec2">
	    <h1>Ladies Products</h1> 
       <div class="blueberry">
	            <ul class="slides">
	                <li><img src="images/n1.jpg"/></li>
	                 <li><img src="images/n2.jpg"/></li>
	                <li><img src="images/n3.jpg"/></li>
	                 <li><img src="images/n4.jpg"/></li>
	                  <li><img src="images/n6.jpg"/></li>
	               
	            </ul>
	    </div>
      <p>
        We care about our clients so much</br>our client is offered lunch </br>or breakfast as they are being worked on  
      </p>  
    </section>   
    <div class="clear">
    </div>
  
    <footer>
        <section>
            
        </section>
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
		