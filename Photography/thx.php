<?php include 'includes/header.php';?>
	
<title>Thank you!</title>	

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
            <li><a href="connect.php"><span>CONNECT</span></a></li>
			
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
   <li><a href="connect.php"><span>CONNECT</span></a></li>
   
</ul>
</div>

</div> <!--nav--> 
            

<div id="content-inner">

<div id="thx">
    <h4>THANK YOU!</h4>
    <p>I appreciate you choosing me to shoot your big day. Thanks for getting in touch. I will get back to you shortly with your quote!</p>    
</div>
 
	              	              
</div>  <!--content-->

   
</div> <!--wrapper-->
    
 
 <?php include 'includes/footer.php';?>
 
 
<li><a href="http://validator.w3.org/check?uri=http%3A%2F%2Fedison.seattlecentral.edu%2F~sagraw01%2Fweb120%2Ffinal%2Fthx.php" target="_blank">HTML5 Valid</a></li> 
<li><a href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fedison.seattlecentral.edu%2F~sagraw01%2Fweb120%2Ffinal%2Fthx.php" target="_blank">CSS3 Valid</a></li>    
</ul> 
  
</footer>   		                                		                                

    
</body>
</html>