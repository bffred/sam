<!DOCTYPE HTML>
<html>
<head>
<title>Sam Carrelage : Mosaïque</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
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
								<li><a href="index.php">Accueil</a></li>
								<li><a href="Faience.php">Faience</a></li>
								<li class="current"><a href="Mosaique.php">Mosaique</a></li>
								<li><a href="Piscine.php">Piscine</a></li>
								<li><a href="Sallebain.php">Salle de bain</a></li>
								<li><a href="SolInt.php">Sol Interieur</a></li>
								<li><a href="SolExt.php">Sol Exterieur</a></li>
								<li><a href="ColleJoints.php">Colle et Joints</a></li>
								<li><a href="mailto:maya.2111@live.fr?subject=Via le site www.sam-carrelage.com">Contact</a></li>							
								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>							
	    		    <div class="clear"></div>
	    	    </div>
	            <div class="header_right">
	    		  
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
				    
		        <div class="clear"></div>
	       </div>
	      </div>
		 </div>
	    </div>
	  </div>
	  <div class="border">
	  <?php
	  include('db.php');
	  
        $image_query = mysqli_query($connect,"select url_mosaique, prix_mosaique from mosaique");
        while($rows = mysqli_fetch_array($image_query))
        {
            $img_prix = $rows['prix_mosaique'];
            $img_src = $rows['url_mosaique'];
        ?>
			<div class="main">
			<div class="shop_top">
				<div class="container">
					<div class="row shop_box-top">
						<div class="col-md-6 shop_box"><a href="single.html">
							<img src="<?php echo $img_src; ?>" class="img-responsive" />
							<!-- <span class="new-box">
								<span class="new-label">New</span>
							</span>
							<span class="sale-box">
								<span class="sale-label">Sale!</span>
							</span> -->
							</div>
							<div class="col-md-6">
							<div class="shop_desc">
								<!-- <h3><a href="#">aliquam volutp</a></h3>
								<p>Lorem ipsum consectetuer adipiscing </p> -->
								<!-- <span class="reducedfrom">$66.00</span> -->
								<span class="actual"><?php echo $img_prix; ?> € / m²</span><br>
								<ul class="buttons">
									<li>
										<span>Quantity:</span>
										<select>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
										</select>
									</li>
									<li class="cart"><br><button href="#">Ajouter au panier</button></li>
									<div class="clear"> </div>
								</ul><br>
								
							</div>
						   </div>
						</a>
					</div>
					</div>
				</div>
			</div>
			</div>
					<?php
				}
			?>
		</div>

								    <div align="center">
					   <p>All right reserved © <?php echo date('Y'); ?></p>
					   <a href="mailto:maya.2111@live.fr?subject=Via le site www.sam-carrelage.com">Contact</a>
					   <a href="legal.php">Mentions Légales</a>
					   <a href="cg.php">Conditions générales de vente</a>
		            
		</div>
</body>	
</html>