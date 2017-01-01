<?php 
$message = "Deixa el teu missatge aqu&iacute;. Rebr&agrave;s resposta al m&eacute;s aviat
			possible. Gr&agrave;cies.";
if(isset($_GET['thanks'])){
$message = $_GET['thanks'];
}			
if(isset($_POST['email'])){
    $to = "orboan@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
   	$message = "Mail enviat, ".  $name;
    header("Location: ?thanks=$message#contact"); 
    }
?>

<!DOCTYPE HTML>
<!--
	Big Picture by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>iaw.io</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<link rel="stylesheet" href="assets/fontcustom/fontcustom.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<a href="http://iaw.io"><h1 style="cursor:pointer">iaw.io</h1></a>
				<nav>
					<ul>
						<li><a href="#intro">Programació</a></li>
						<li><a href="#one">Activitats E.A.</a></li>
						<li><a href="#work">docker iaw.io</a></li>
						<li><a href="#contact">Contacte</a></li>
					</ul>
				</nav>
			</header>

		<!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen">
				<div class="content">
					<header>
						<h2>Implantació d'Aplicacions Web</h2>
					</header>
					<p><a class="abutton" href="http://iaw.io/programacio">Programació</a></p>
					<p> Autor: <a href="https://uk.linkedin.com/in/orboan" target="_blank">Oriol Boix Anfosso</a> | 
					&copy;&nbsp;<a href="http://iaw.io/license">Tots&nbsp;els&nbsp;drets&nbsp;reservats</a></p>
					<footer>
						<a href="#one" class="button style2 down">More</a>
					</footer>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="main style2 right dark fullscreen">
				<a href="#two" class="button style2 down anchored">Previous</a>
				<div class="content" id="pregrid">
					<div id="grid">
						<div id="aea1">
							<a href="http://iaw.io/aea1.html">
								<div>Activitat Ensenyament Aprenentatge 1</div>
								</a>
						</div>
						<div id="aea2">
							<a href="http://iaw.io/aea2.html">Activitat Ensenyament Aprenentatge 2</a>
						</div>
						<div id="aea3">
							<a href="http://iaw.io/aea3.html">Activitat Ensenyament Aprenentatge 3</a>
						</div>
						<div id="aea4">
							<a href="http://iaw.io/aea4.html">Activitat Ensenyament Aprenentatge 4</a>
						</div>
						<div id="aea5">
							<a href="http://iaw.io/aea5.html">Activitat Ensenyament Aprenentatge 5</a>
						</div>
						<div id="aea6">
							<a href="http://iaw.io/aea6.html">Activitat Ensenyament Aprenentatge 6</a>
						</div>
					</div>
				</div>
				<div class="content box style2">
					<header>
						<h2>Activitats E. A.</h2>
					</header>
					<p>Per als Mòduls Professionals de cicles LOE, cada Unitat Didàctica es correspon
					a una Activitat d'Ensenyament Aprenentatge.</p>
					<p>Aquí trobaràs sis activitats E.A. desenvolupades en detall.</p>
				</div>
				<a href="#work" class="button style2 down anchored">Next</a>
			</section>

		<!-- Work -->
			<section id="work" class="main style3 primary">
				<div class="content">
					<header>
						<h2>Implantació d'iaw.io</h2>
						<p>iaw.io ha estat implantat amb una xarxa de contenidors docker, proveint 
						quatre serveis httpd (wordpress, moodle, phpmyadmin i <em>landing page</em> 
						per a iaw.io), un servei mariadb i un reverse-proxy amb nginx. Cada contenidor
						incorpora el gestor de processos <em>supervisor</em>, un servidor ssh i shellinabox,
						per a la administració remota del contenidor sense client docker. Addicionalment, 
						disposem de dockerUI per a aquesta xarxa de contenidors.</p>
					</header>

					<!-- Gallery  -->
						<div class="grid2">
							<article class="from-left" style="min-height: 200px;">
								<a href="http://iaw.io/dockerui.html" class="image fit">
									<div>
										<img src="images/docker.png" title="Docker UI" alt="" />
										<p>Docker UI for iaw.io </p>
									</div>
								</a>
							</article>
							<article class="from-right" style="min-height: 200px;">
								<a href="http://myadmin.iaw.io/" target="_blank" class="image fit">
									<div>
										<img src="images/myadmin.png" title="Supervisor" alt="" />
										<p>phpMyAdmin</p>
									</div>
								</a>								
							</article>							
							<article class="from-left" style="min-height: 200px;">
								<a href="http://iaw.io/webserver1.html" class="image fit">
									<div>
										<img src="images/supervisor01.png" title="Supervisor" alt="" />
										<p>for Wordpress container</p>
									</div>
								</a>
							</article>
							<article class="from-right" style="min-height: 200px;">
								<a href="http://iaw.io/webserver2.html" class="image fit">
									<div>
										<img src="images/supervisor02.png" title="Supervisor" alt="" />
										<p>for Moodle container</p>
									</div>
								</a>							
							</article>
							<article class="from-left" style="min-height: 200px;">
								<a href="http://iaw.io/webserver3.html" class="image fit">
									<div>
										<img src="images/supervisor03.png" title="Supervisor" alt="" />
										<p>for phpMyAdmin container</p>
									</div>
								</a></article>
							<article class="from-right" style="min-height: 200px;">
								<a href="http://iaw.io/webserver4.html" class="image fit">
									<div>
										<img src="images/supervisor04.png" title="Supervisor" alt="" />
										<p>for this.container</p>
									</div>
								</a>								
							</article>
							<article class="from-left" style="min-height: 200px;">
								<a href="http://iaw.io/mariadb.html" class="image fit">
									<div>
										<img src="images/supervisor05.png" title="Supervisor" alt="" />
										<p>for MariaDB container</p>
									</div>
								</a>								
							</article>
							<article class="from-right" style="min-height: 200px;">
								<a href="http://iaw.io/compose.html" class="image fit">
									<div>
										<img src="images/compose.png" title="Supervisor" alt="" />
										<p>docker-compose.yml</p>
									</div>
								</a>								
							</article>							
						</div>

				</div>
				<a href="#contact" class="button style3 down anchored">Next</a>
			</section>

		<!-- Contact -->
			<section id="contact" class="main style3 secondary">
				<div class="content">
					<header>
						<h2>Contacte</h2>
						<p><?php echo "$message"?></p>
					</header>
					<div class="box">
						<form method="post" action="http://iaw.io/index.php">
							<div class="field half first"><input id="name" type="text" name="name" placeholder="Nom i Cognoms" /></div>
							<div class="field half"><input id="email" type="email" name="email" placeholder="Email" /></div>
							<div class="field"><textarea id="message" name="message" placeholder="Missatge" rows="6"></textarea></div>
							<ul class="actions">
								<li><input type="submit" id="submit" value="Envia missatge" /></li>
							</ul>
						</form>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">

				<!-- Icons -->
					<ul class="actions">
						<li><a href="https://uk.linkedin.com/in/orboan" target="_blank" 
							class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
						<li><a href="https://github.com/orboan"  target="_blank" 
							class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="https://hub.docker.com/u/orboan/" target="_blank" 
							class="icon fa-docker"><span class="label">Docker Hub</span></a></li>
						<li><a href="https://www.youtube.com/channel/UCcR3ROWkYWG4LeEGdSe_P9w/playlists" 
							target="_blank" class="icon fa-youtube"><span class="label">Youtube</span></a></li>
						<li><a href="http://orboan.com" target="_blank" 
							class="icon fa-external-link"><span class="label">orboan.com</span></a></li>
					</ul>

				<!-- Menu -->
					<ul class="menu">
						<li>&copy; <a href="http://orboan.com" target="_blank">orboan.com</a>&nbsp;2017</li>
					</ul>

			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
