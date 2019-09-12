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
	          <li><a href="#" class="current">ContactUs</a></li>
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
 </div>
	   
	 </header>
<br><br><br><br><br><br>
<aside id="aside">

 <h2>Our Schedule</h2>
        <ul class="tym">
            <li><h3>Monday 8:00am-6:00pm</h3></li><br>
             <li><h3>Tuesday 8:00am-6:00pm</h3></li><br>
              <li><h3>Wednesday 8:00am-6:00pm</h3></li><br>
               <li><h3>Thursday 8:00am-6:00pm</h3></li><br>
                <li><h3>Friday 8:00am-6:00pm</h3></li><br>
                 <li><h3>Saturday 9:00am-6:00pm</h3></li><br>
                  <li><h3>Sunday 11:00am-6:00pm</h3></li><br>
                  <h1>*******************************</h1>
                  <h3><b> Eor more information</b></h3>
            <p><b>Tel: 0773642743<br>
            	Email: mysalon@gnail.com<br>
            Wandegeya, Kampala<br>
            Uganda, East-Africa</b></p>
                  <p>Come visit us today for salon services</p>
        </ul>
</aside>
<div id="sec2">
<h1>My First Google Map</h1>

<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng( 0.347596, 32.582520),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
var infowindow = new google.maps.InfoWindow({
	  content:"Hello World!"
	  });

	infowindow.open(map,marker); 
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANDPM2Lyck5Q-Iq3iZx22Y3wpTgsRt39E&callback=myMap"></script>

</div>
<div id="sec2">
	<h2>For more information, contact us</h2><br>
	<div class="container">
  <form action="action_page.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Tanzania</option>
      <option value="canada">Burundi</option>
      <option value="usa">Kenya</option>
      <option value="Uganda">Uganda</option>
      <option value="Rwanda">Rwanda</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div

</div>

 <div class="clear">
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
    </footer>>  
	</body>	
</html>