<!doctype html>
<html lang="fr">
	<head>
		<title>HeartFeel - Contact</title>
		<link rel="stylesheet" href="style.css" />
		<meta charset="utf-8" />
	</head>
	<body>
		<table id="top">
			<td class="column">
				<a href="index.html">
					home
				</a>
			</td>
			<td class="column">
				<a href="about.html">
					about
				</a>
			</td>
			<td class="column">
				<a href="team.html">
					team
				</a>
			</td>
			<td class="column">
				<a href="contact.php">
					contact
				</a>
			</td>
		</table>
		
		<div id="main">
			<div id="title">
				<a href="index.html"><img src="imagesWeb/Small/Logo.gif" alt="Logo Heartfeel"/></a>
			</div>
			<div id="subtitle"><h4>Always feel it!</h4></div>

			<!--Partie centrale-->
			<div id="sectionTitle"><u>Contact</u></div>

			<form method="post" action="contact2.php">
  				<label>Name</label><br>
   				<input name="name" placeholder="Your Name Here"><br>
 				<label>Email</label><br>
				<input name="email" type="email" placeholder="Your e-Mail Here"><br>
				<label>Message</label><br>
				<textarea name="message" placeholder="Your Message Here" type="text"></textarea><br>
				<input id="submit" name="submit" type="submit" value="First, Validate Content" >
        
			</form>

			<?php
    			$name = $_POST['name'];
   				$email = $_POST['email'];
    			$message = $_POST['message'];

    			mail("flavien.everaert@uha.fr","objet","message","From: flavien.everaert@gmail.com");
			?>
			<button id="button"><a href="mailto:flavien.everaert@gmail.com?subject=HeartFeel - Message de <?php echo$name?>&body=<?php echo$message?>
			%0A 
			%0A
			Répondre à <?php echo$email?>"> Then Send Message</a></button>
			

			
					
			<br>
			<br>
			<br>


		</div>

		<div>
			<a class="imgFooter" href="http://www.appstore.com" target="_blank">
				<img class="imgFooter" src="imagesWeb/AppStore.png" alt="Image AppStore"/>
			</a>
			<a class="imgFooter" href="https://play.google.com/store?hl=fr" target="_blank">
				<img class="imgFooter" src="imagesWeb/GooglePlay.png" alt="Image GooglePlay"/>
			</a>
			<br>
			<br>
		</div>


		<footer id="footer">
			<p>© Copyright RedPulse - 2016</p>
		</footer>
	</body>
</html>