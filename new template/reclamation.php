<?php

// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();
// On récupère nos variables de session
if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) 
{
// On teste pour voir si nos variables ont bien été enregistrées
echo '<br />';
}
else {
// Le visiteur n a pas été reconnu comme étant membre de notre site. On utilise
//alors un petit javascript lui signalant ce fait
echo '<body onLoad="alert(\'you must login first.....\')">';
// puis on le redirige vers la page d'accueil
echo '<meta http-equiv="refresh" content="0;URL=login.html">';
exit();
}
?>

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
											<li><a href="reclamation.php">Reclamation</a></li>
											<li><a href="login.php">Log In</a></li>
											<li><a href="logout.php">Log Out</a></li>
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

								<section>
								<?PHP
                                include "reclamationC.php";
                                $reclamation1C=new reclamationC();
                                $listeReclamations=$reclamation1C->afficherReclamations($_SESSION['login']);
                                //var_dump($listeEmployes->fetchAll());
                                ?>
	<table border="1" width="80%" align="center">
      <th><a href="seance.php?tri=1">ID</a></th>
      <th><a href="seance.php?tri=2">Client</a></th>
      <th><a href="seance.php?tri=3">Motif</a></th>
      <th><a href="seance.php?tri=4">message</th>
      <th><a href="seance.php?tri=5">Date</th>
      <th><a href="seance.php?tri=6">Etat</th>
      <th>Modif.</th>
      <th>Suppr.</th> 

      <?php foreach($listeReclamations as $T) : ?>
      <tr>
        <td><?php echo ($T["id_reclamation"]); ?></td>
        <td><?php echo ($T["nomprenom"]); ?></td>
        <td><?php echo ($T["motif"]); ?></td>
        <td><?php echo ($T["message"]); ?></td>
        <td><?php echo ($T["date"]); ?></td>
        <td><?php echo ($T["etat"]); ?></td>
	    <td align="center"><a href="modifReclamation.php?id_reclamation=<?php echo ($T["id_reclamation"]); ?>"><img src="./images/btn_modif.png" height="35" width="35"></a></td>
        <td align="center"><a href="supprimerReclamation.php?id_reclamation=<?php echo ($T["id_reclamation"]); ?>"><img src="./images/btn_supp.png" height="35" width="35"></a></td>
      </tr>
    <?php endforeach; ?>
</table>


									

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
</html>