<?php include 'includes/header.php';?>

<title>Connect</title>		

<!--accordian-->

<script src="js/script.js"></script> 
<link rel="stylesheet" href="css/accordian.css">                          
            
<!--mobile nav-->
	
	<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
	</script> 
            
                                      
</head>




<body>

<div id="logo">
     <h1><a href="index.php">VARUN's</a></h1>                    <h2><a href="index.php">fotography</a></h2>     
</div>


<button class="nav-button">Toggle Navigation</button>

		<ul class="primary-nav">
            <li><a href="index.php"><span>ABOUT VARUN</span></a></li>
            <li class="parent"><a href=""><span>PORTFOLIO</span></a>
				<ul>
					<li><a href="weddings.php">WEDDINGS</a></li>
					<li><a href="kids.php">KIDS</a></li>
					
				</ul>
			</li>
            <li><a href="services.php"><span>SERVICES</span></a></li>
            <li id="on"><a href="connect.php"><span>CONNECT</span></a></li>
			
		</ul> 
		
		        
		                
<div id="wrapper-inner">

<div id="nav-inner">
<div class='cssmenu'>
<ul>
 <li><a href="index.php"><span>HOME</span></a></li>
 
  <li><a href="index.php#section1"><span>ABOUT VARUN</span></a></li>
   
   <li class='has-sub'><a href=""><span>PORTFOLIO</span></a>
       <ul>
         <li><a href="weddings.php">WEDDINGS</a></li>
         <li><a href="kids.php">KIDS</a></li>
         
       </ul>
   </li>
   
   <li><a href="services.php"><span>SERVICES</span></a></li>
   <li id="current"><a href="connect.php"><span>CONNECT</span></a></li>
   
</ul>
</div>

</div> <!--nav--> 
            

<div id="content-inner">

<!--<h4>HI ! PLEASE LEAVE A MESSAGE!</h4>-->
 
 <div id="info">
     <h5>VARUN SHRINGI</h5> 
     <p>785, Shastri Nagar, Dadabari</p>
     <p>Kota-324009, Rajasthan, India</p>
     <hr/>
     <h6>+91-9414187128</h6>
     <h6>varunsfotography@gmail.com</h6>    
 </div>
 

 
 <form action="formhandler.php" method="post" id="form">
<fieldset>


<label>Name : </label>
<input type="text" name="Name" id="name" placeholder="Your Name">



<label>Occasion : </label>
<input type="text" name="Occasion" id="occasion" placeholder="Wedding/Kids/Events">



<label>Date : </label>
<input type="text" name="Date" id="date" placeholder="DD/MM/YY">


<label>Location : </label>
<input type="text" name="City" id="city" placeholder="City, State">



<label>Email : </label>
<input type="email" name="Email" id="email" placeholder="Email">


<label>Phone Number : </label>
<input type="text" name="Phone" id="phone" placeholder="Phone number">


<label>Questions : </label>
<textarea name="Comments" id="comments" rows="4" placeholder="Questions/Comments"></textarea>


<input type="submit" id="submit" value="SUBMIT">

</fieldset>
</form>                    		              

	              	              
</div>  <!--content-->

   
</div> <!--wrapper-->
    
 
 <?php include 'includes/footer.php';?>
 
 
<li><a href="http://validator.w3.org/check?uri=http%3A%2F%2Fedison.seattlecentral.edu%2F~sagraw01%2Fweb120%2Ffinal%2Fconnect.php" target="_blank">HTML5 Valid</a></li> 
<li><a href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fedison.seattlecentral.edu%2F~sagraw01%2Fweb120%2Ffinal%2Fconnect.php" target="_blank">CSS3 Valid</a></li>    
</ul> 
  
</footer>   		                                		                                

    
</body>
</html>