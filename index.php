<!DOCTYPE HTML>
<html>
<head>
<title>Random</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<!--<script src="js/jquery.easydropdown.js"></script>-->
<!--start slider -->
<link rel="stylesheet" href="css/fwslider.css" media="all">
<script src="js/jquery-ui.min.js"></script>
<script src="js/fwslider.js"></script>
<!--end slider -->
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="row">
			  <div class="col-md-12">
				 <div class="header-left">
					<div class="logo">
					<a href="index.php"><img src="images/logo.png" alt=""/></a>
					</div>
						<div class="menu">
							<a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
							<ul class="nav" id="nav">
								<li class="current"><a href="index.php">Home</a></li>
								<li><a href="Faience.php">Faience</a></li>
								<li><a href="Mosaique.php">Mosaique</a></li>
								<li><a href="Piscine.php">Piscine</a></li>
								<li><a href="Sallebain.php">Salle de bain</a></li>
								<li><a href="SolInt.php">Sol Interieur</a></li>
								<li><a href="SolExt.php">Sol Exterieur</a></li>
								<li><a href="ColleJoints.php">Colle et Joints</a></li>
								<li><a href="experiance.html">Events</a></li>
								<li><a href="shop.html">Company</a></li>
								<li><a href="contact.html">Contact</a></li>								
								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
						</div>							
					<div class="clear"></div>
	    	    </div>
	            <div class="header_right">
						<!----search-scripts---->
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						<!----//search-scripts---->
				   
		           <div class="clear"></div>
	       </div>
	      </div>
		 </div>
	    </div>
	</div>
	<div class="banner">
	<!-- start slider -->
       <div id="fwslider">
         <div class="slider_container">
            <div class="slide"> 
                <!-- Slide image -->
               <img src="images/slider1.jpg" class="img-responsive" alt=""/>
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h1 class="title">Run Over<br>Everything</h1>
                    </div>
                </div>
               <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
               <img src="images/slider2.jpg" class="img-responsive" alt=""/>
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h1 class="title">Run Over<br>Everything</h1>
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
       </div>
       <!--/slider -->
      </div>
			
			<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	<div class="content-bottom">
		<div class="container">
			<div class="row content_bottom-text">
			  <div class="col-md-7">
				<h3>The Mountains<br>Snowboarding</h3>
				<p class="m_1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio.</p>
				<p class="m_2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio.</p>
			  </div>
			</div>
		</div>
	</div>
	
		<div class="footer">
			<div class="container">
				<div class="row">
				</div>
				<div class="row footer_bottom">
				    <div class="copy">
					   <p>All right reserved © <?php echo date('Y'); ?></p>
					   <a>Contact</a>
					   <a>Mentions Légales</a>
					   <a>Conditions générales de ventes</a>
		            
			</div>
		</div>
</body>	
</html>