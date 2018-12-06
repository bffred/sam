<!DOCTYPE HTML>
<html>
<head>
<title>Sam Carrelage : Faïence</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
							<li class="current"><a href="Faience.php">Faience</a></li>
							<li><a href="Mosaique.php">Mosaique</a></li>
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
	       		</div>
	      </div>
		</div>
	</div>
	</div>
	  
	  	<?php
		include('db.php');
		$limit = 10;  // nombre d'article par page
		if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
		$start_from = ($page-1) * $limit; 
		$image_query = mysqli_query($connect,"SELECT id, url_faience, prix_faience FROM faience ORDER BY id DESC LIMIT $start_from, $limit");				
		while($rows = mysqli_fetch_array($image_query))
        {
            $img_prix = $rows['prix_faience'];
			$img_src = $rows['url_faience'];
        ?>
		<table class="table table-bordered table-striped"> 
			<div class="main">
				<div class="shop_top">
					<div class="container">
						<div class="row shop_box-top">
							<div class="col-md-6 shop_box"><a href="#">
								<img src="<?php echo $img_src; ?>" class="img-responsive" /></div>
								<div class="col-md-4">
								<div class="shop_desc">	
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
						</div>
					</div>
				</div>
			</div>
		</table>	
		<?php		
		}
		?>
		<?php  
			$sql = "SELECT COUNT(id) FROM faience";  
			$rs_result = mysqli_query($connect, $sql);  
			$row = mysqli_fetch_array($rs_result);  
			$total_records = $row[0];  
			$total_pages = ceil($total_records / $limit);  
			$pagLink = "<div class='pagination'>";  
			for ($i=1; $i<=$total_pages; $i++) {  
						$pagLink .= "<li><a href='Faience.php?page=".$i."'>".$i."</a></li>";  
			};  
			echo $pagLink . "</div>";  
		?>
		
</body>	
	<br><br><br>
	<div align="center">
		<p>All right reserved © <?php echo date('Y'); ?></p>
		<a href="mailto:maya.2111@live.fr?subject=Via le site www.sam-carrelage.com">Contact</a>
		<a href="legal.php">Mentions Légales</a>
		<a href="cg.php">Conditions générales de vente</a>        
	</div>
</html>