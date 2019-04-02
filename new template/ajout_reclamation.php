<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>reclamation by aziz</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/mine.css" />
		<noscript><link rel="stylesheet" href="assets/css/mine.css" /></noscript>
	</head>
	<body class="is-preload">

        

		<!-- Page Wrapper -->
			<div id="page-wrapper">
                 <ul id="hey">
                 	<p align="center">
  							<a  class="button" style="font-size:16px  " href="ajout_reclamation.php">  <span> Add new reclamation </span> </a>
  							<a  class="button" style="font-size:16px  "href="mailto:aziz99arfaoui@gmail.com"> <span>You can always Send a mail</span> </a> 
                    </p>
					   	</ul>
				<!-- Header -->
					<header id="header">
						<h1><a href="index.html">Obladi !</a></h1>
						  
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="index.html">Home</a></li>
											<li><a href="generic.html">Generic</a></li>
											<li><a href="reclamation.php">Reclamation</a></li>
											<li><a href="#">Sign Up</a></li>
											<li><a href="#">Log In</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<article id="main">
						<section class="wrapper style5">
							<div class="inner">
						</section>
						


						 

						 <form id="myForm" method="POST" action="ajouter.php">
                         <label class="form_col" for="login" style="color-rendering: 12%"> Remplir ce formulaire S.V.P </label>
     					  <?PHP $base=mysqli_connect ('localhost', 'root', '');
							mysqli_select_db ($base,'obladi');

							echo("<tr>");
							echo("<td> Motif de la réclamation : </td>");
							echo("<td>");	
							$res=mysqli_query($base,"select * from motif");	
							echo('<select size="1" name="selectMotif">');
							echo('<option value="0"> choisir le motif </option>');
							while($T=mysqli_fetch_array($res))
					     	echo('<option value="'.$T['id_motif'].'">'.$T['motif'].'</option>');
					        echo('</select></td></tr>');
		                   ?>
       

        <label class="form_col" for="Reclamation">Reclamation :</label>
        <input name="Reclamation" id="rlc" type="text" style="padding-bottom: 5%; padding-top: 5%;" placeholder="( De 10 à 100 )" required pattern="[a-zA-Z-\.]{10,100}"/>
        <br /><br />

        <span class="form_col"></span>
        <input type="submit" value="Reclamer" /> <input type="reset" value="Réinitialiser le formulaire" />

    </form>		


									

				<!-- Footer -->
			<div>	
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>

	<script type="text/javascript" src="./assets/js/java.js"></script>

</html>