<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Varun's Fotography</title>
   
<meta content='width=device-width, initial-scale=1.0' name='viewport' />   
    
<link href="css/styles.css" type="text/css" rel="stylesheet">
<link href="css/media.css" type="text/css" rel="stylesheet">

<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
 
 <!--Full page slider--> 
   
<link rel="stylesheet" href="css/jquery.maximage.css" type="text/css" media="screen">
		
   
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js'></script>
		<script src="js/jquery.cycle.all.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/jquery.maximage.js" type="text/javascript" charset="utf-8"></script>
		
		<script type="text/javascript">
			$(function(){
				// Trigger maximage
				jQuery('#maximage').maximage({
            cycleOptions: {
                prev: '#arrow_left',
                next: '#arrow_right'
                },
             });
        });
		</script> 
		
<!--One page scroll-->		
		
<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
<!--<link rel="stylesheet" type="text/css" href="css/examples.css" />-->
  

	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
	
<script type="text/javascript" src="js/jquery.fullPage.js"></script>
	<script type="text/javascript" src="js/examples.js"></script>
	
<script type="text/javascript" src="js/jquery.slimscroll.min.js"></script>	

	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({  
			  continuousVertical:false,
            scrollOverflow: true    
                
			});
		});
	</script> 
  
<!--accordian-->

<script src="js/script.js"></script> 
<link rel="stylesheet" href="css/accordian.css">                          
            
<!--mobile nav-->
            
<!--<link rel="stylesheet" type="text/css" media="screen" href="css/mobilemenu.css"/>-->
	
	<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
	</script>                                    
             
</head>


<body>
  
<div id="fullpage">

	<div class="section" id="section0">
		
            <div id="maximage">
			    <img src="images/couple.jpg" alt="">
			    <img src="images/bride.jpg"
			     alt="">
			    <img src="images/haldi.jpg" alt="">
			    <img src="images/mehndi.jpg" alt="">
			</div> <!--maximage--> 

            <div id="arrows">
                <a href="" id="arrow_left">
                <img src="images/arrow_left.png" alt="Slide Left" />
                </a>
                <a href="" id="arrow_right">
                <img src="images/arrow_right.png" alt="Slide Right" />
                </a>
            </div>   <!--arrows-->
            
             <div id="enter">
                 <i class="fa fa-sort-desc fa-3x"></i>
<!--                 <p>Scroll for more!</p>-->
             </div> 
             
             <div class="logo">
                 <h1><a href="index.php">VARUN's</a></h1>
                 <h2><a href="index.php">fotography</a></h2>     
             </div>
        
	</div> <!--section0-->
	
	
	<div class="section" id="section1">
  
   <div class="logo">
                 <h1><a href="index.php">VARUN's</a></h1>
                 <h2><a href="index.php">fotography</a></h2>     
             </div>
             
    <button class="nav-button">Toggle Navigation</button>

		<ul class="primary-nav">
            <li id="on"><a href="index.php"><span>ABOUT VARUN</span></a></li>
            <li class="parent"><a href="weddings.php"><span>PORTFOLIO</span></a>
				<ul>
					<li><a href="weddings.php">WEDDINGS</a></li>
					<li><a href="kids.php">KIDS</a></li>
					
				</ul>
			</li>
            <li><a href="services.php"><span>SERVICES</span></a></li>
            <li><a href="connect.php"><span>CONNECT</span></a></li>
			
		</ul> 
		
		        
		<div id="banner">
	       <img src="images/bride.jpg" alt="Bride">    
	       </div>
	       
	       <div id="gal">
               <h4><a href="weddings.php">PORTFOLIO</a></h4>  
	       </div>
	       
	                                                       
   
	   <div id="wrapper">
       
	   
<div id="nav">
<div class='cssmenu'>
<ul>
 <li><a href="index.php"><span>HOME</span></a></li>
 
  <li id="current"><a href="index.php#section1"><span>ABOUT VARUN</span></a></li>
   
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
            
<div id="content">

<div id="pic">
 <img src="images/varun.jpg" alt="Photographer">   
</div>

<div id="matter">
    <h3>ABOUT VARUN</h3>
<p> We are a 14 year old professional photography services company based in Kota, Rajashthan.
    I concentrate mainly on wedding photography, fashion portfolio, events and kids portfolio. I also work on commercial photography. I cover events in Rajasthan, North West India and North India.</p>
    
    <p>I am a part of Canvera, which is an online photography company. You can find me on their website at <a href="http://photographers.canvera.com/north/rajasthan/kota/varuns-fotography">My Canvera Profile</a></p>
    
    <p>If interested in having me shoot your big day please <a href="connect.php">Contact Me</a> and I will get back to you shortly!</p> 
                         
</div>
</div>  <!--content-->


                                                 
</div>  <!--wrapper--> 
              


<?php include 'includes/footer.php';?>


<li><a href="http://validator.w3.org/check?uri=http%3A%2F%2Fedison.seattlecentral.edu%2F~sagraw01%2Fweb120%2Ffinal%2Findex.php" target="_blank">HTML5 Valid</a></li> 
<li><a href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fedison.seattlecentral.edu%2F~sagraw01%2Fweb120%2Ffinal%2Findex.php" target="_blank">CSS3 Valid</a></li>    
</ul> 
  
</footer>                                       
               
</div>  <!--section1-->
	
</div> <!--fullpage-->
    

    
</body>
</html>