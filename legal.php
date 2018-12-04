<!DOCTYPE HTML>
<html>
<head>
<title>Sam Carrelage : le roi du carrelage</title>
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
		<div class="container-fluid">
			<div class="row">
			  <div class="col-md-12">
				 <div class="header-left">
					<div class="logo">
					<a href="index.php"><img src="images/logo.png" alt=""/></a>
					</div>
						<div class="menu">
							<a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
							<ul class="nav" id="nav">
								<li class="current"><a href="index.php">Accueil</a></li>
								<li><a href="Faience.php">Faience</a></li>
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

	<h1>MENTIONS LEGALES :</h1>

<p style="text-align:justify"><strong>1. Présentation du site :<br />
 </strong><br />
Conformément aux dispositions des articles 6-III et 19 de la Loi n° 2004-575 du 21 juin 2004 pour la Confiance dans l'économie numérique, dite L.C.E.N., nous portons à la connaissance des utilisateurs et visiteurs du site : <a href="http://www.sam-carrelage.com" target="_blank">www.sam-carrelage.com</a> les informations suivantes :</p>

<p style="text-align:justify"><strong>Informations légales : </strong></p>

<p style="text-align:justify">Statut du propriétaire : <strong>societe</strong><br />
Préfixe : <strong>SASU</strong><br />
Nom de la Société :<strong> SAM CARRELAGES</strong><br />
Adresse : <strong>AV HAROLD KLINE 34120 PEZENAS</strong><br />
Tél  : <strong>0660583535</strong><br />
Au Capital de :<strong> 100 €</strong><br />
SIRET :  <strong>841 335 946   </strong>R.C.S. :<strong> 0000</strong><br />
Numéro TVA intracommunautaire : <strong>0000</strong><br />
Adresse de courrier électronique : <strong>maya.2111@live.fr</strong> <br />
 <br />
Le Créateur du site est : <strong>SAVEE</strong><br />
Le Responsable de la  publication est : <strong>Samer MARDAN</strong><br />
Contactez le responsable de la publication : <strong>maya.2111@live.fr</strong><br />
Le responsable de la publication est une <strong>personne physique</strong><br />
<br />
Le Webmaster est  : <strong>Samer</strong><br />
Contactez le Webmaster : <strong><a href="mailto:maya.2111@live.fr?subject=Via le site www.sam-carrelage.com">maya.2111@live.fr</a></strong><br />
L’hebergeur du site est : <strong>OVH www.ovh.com 59100  Roubaix</strong><br />

<p style="text-align:justify"> </p>

<p style="text-align:justify"><strong>2. Description des services fournis :</strong><br />
<br />
Le site <a href="http://www.sam-carrelage.com" target="_blank">www.sam-carrelage.com</a> a pour objet de fournir une information concernant l’ensemble des activités de la société.<br />
Le proprietaire du site s’efforce de fournir sur le site <a href="http://www.sam-carrelage.com" target="_blank">www.sam-carrelage.com</a> des informations aussi précises que possible. Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.<br />
Tous les informations proposées sur le site <a href="http://www.sam-carrelage.com" target="_blank">www.sam-carrelage.com</a> sont données à titre indicatif, sont non exhaustives, et sont susceptibles d’évoluer. Elles sont données sous réserve de modifications ayant été apportées depuis leur mise en ligne.<br />
 </p>

<p style="text-align:justify"><strong>3. Propriété intellectuelle et contrefaçons :</strong></p>

<p style="text-align:justify"><br />
Le proprietaire du site est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels…<br />
Toute reproduction, représentation, modification, publication, adaptation totale ou partielle des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable à l'email : <a href="mailto:maya.2111@live.fr?subject=Via le site www.sam-carrelage.com"><strong>maya.2111@live.fr</strong></a> .<br />
Toute exploitation non autorisée du site ou de l’un quelconque de ces éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.<br />
 </p>

<p style="text-align:justify"><strong>4. Liens hypertextes et cookies :</strong><br />
<br />
Le site <a href="http://www.sam-carrelage.com" target="_blank">www.sam-carrelage.com</a> contient un certain nombre de liens hypertextes vers d’autres sites (partenaires, informations …) mis en place avec l’autorisation de le proprietaire du site . Cependant, le proprietaire du site n’a pas la possibilité de vérifier le contenu des sites ainsi visités  et décline donc toute responsabilité de ce fait quand aux risques éventuels de contenus illicites.<br />
<br />
L’utilisateur est informé que lors de ses visites sur le site <a href="http://www.sam-carrelage.com" target="_blank">www.sam-carrelage.com</a>, un ou des cookies sont susceptible de s’installer automatiquement sur son ordinateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures de fréquentation.<br />
<br />
Le paramétrage du logiciel de navigation permet d’informer de la présence de cookie et éventuellement, de refuser de la manière décrite à l’adresse suivante : www.cnil.fr<br />
Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son ordinateur de la manière suivante, pour refuser l’installation des cookies :<br />
Sous Internet Explorer : onglet outil / options internet. Cliquez sur Confidentialité et choisissez Bloquer tous les cookies. Validez sur Ok.<br />
Sous Netscape : onglet édition / préférences. Cliquez sur Avancées et choisissez Désactiver les cookies. Validez sur Ok.<br />
 </p>

<p style="text-align:justify"><strong>5. Protection des biens et des personnes - gestion des données personnelles :</strong><br />
<br />
Utilisateur : Internaute se connectant, utilisant le site susnommé : <a href="http://www.sam-carrelage.com" target="_blank">www.sam-carrelage.com</a><br />
En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l'article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.</p>

<p style="text-align:justify">Sur le site <a href="http://www.sam-carrelage.com" target="_blank">www.sam-carrelage.com</a>, le proprietaire du site ne collecte des informations personnelles relatives à l'utilisateur que pour le besoin de certains services proposés par le site <a href="http://www.sam-carrelage.com" target="_blank">www.sam-carrelage.com</a>. L'utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu'il procède par lui-même à leur saisie. Il est alors précisé à l'utilisateur du site <a href="http://www.sam-carrelage.com" target="_blank">www.sam-carrelage.com</a> l’obligation ou non de fournir ces informations.<br />
Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification, de suppression et d’opposition aux données personnelles le concernant. Pour l’exercer, adressez votre demande à <a href="http://www.sam-carrelage.com" target="_blank">www.sam-carrelage.com</a> par email : email du webmaster ou  en effectuant sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.</p>

<p style="text-align:justify">Aucune information personnelle de l'utilisateur du site <a href="http://www.sam-carrelage.com" target="_blank">www.sam-carrelage.com</a> n'est publiée à l'insu de l'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l'hypothèse du rachat du site <a href="http://www.sam-carrelage.com" target="_blank">www.sam-carrelage.com</a> à le proprietaire du site et de ses droits permettrait la transmission des dites informations à l'éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l'utilisateur du site <a href="http://www.sam-carrelage.com" target="_blank">www.sam-carrelage.com</a>.</p>

<p style="text-align:justify">Le site www.sam-carrelage.com est en conformité avec le RGPD voir notre politique RGPD  www.sam-carrelage.com/legal.php.</p>

<p style="text-align:justify">Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>

	</div>
	
				    <div align="center">
					   <p>All right reserved © <?php echo date('Y'); ?></p>
					   <a href="mailto:maya.2111@live.fr?subject=Via le site www.sam-carrelage.com">Contact</a>
					   <a href="legal.php">Mentions Légales</a>
					   
		            
		</div>
</body>	
</html>