<?php
if($_POST["message"]) {
    mail("taylor.williams1999@outlook.com", $_POST["subject"], $_POST["message"], "$_POST["email"] . $_POST["name"]);
}

if($_POST["Cmessage"]) {
    $headers = "From: $_POST[Cemail]" . $_POST["Cname"];
    mail("taylor.williams1999@outlook.com", $_POST["Csubject"], $_POST["Cmessage"], $headers);
}
?>

<!doctype HTML>
<html>
	<head>
		<title>Contact | Taylor Williams</title>
		<link rel="stylesheet" type="text/css" href="css/contact-style.css">
		<h1>Taylor Williams</h1>
		
		<ul>
			<li><a href="index.html">Welcome</a></li>
			<li><a href="contact.html">Contact</a></li>
			<li><a href="stuff.html">Stuff I've Worked On</a></li>
			<li><a href="resume.html">Resume</a></li>
		</ul>
	</head>
		
		<br><br><br><br><br>
		
	<body>
		<div class="contactContainer">
			<div id="bigPictureMe">
				<img src="Images/Taylor_Senior_Pic.jpg">
			</div>
			<div id="contactMe">
				<h1>Get in Touch</h1>
				<p>Feel free to send me a message, and I'll respond back as soon as I<br>can!</p>
				
				<form action="contact.php" method="post">
					<input type="text" id="Cname" name="Cname" size="43.5">
					<input type="text" id="Cemail" name="Cemail" size="43.5"><br>
					<input type="text" id="Csubject" name="Csubject" size = "98"><br>
					<textarea rows="5" cols="100" id="Cmessage" name="Cmessage"></textarea><br><br>
					<input type="submit" class="button" name="submit" value="Submit">
				</form>
				
			</div>
			
		</div>
			</div><br><br><br>
		<script>
		
		var nameField = document.getElementById("Cname").defaultValue = "Name";
		var emailField = document.getElementById("Cemail").defaultValue = "Email";
		var subjectField = document.getElementById("Csubject").defaultValue = "Subject";
		var messageField = document.getElementById("Cmessage").defaultValue = "Type your message here...";
		
		</script>
		
	</body>
	
	<footer>
		<div id="footer";>
				<p style="color:#080808;">you cant read this </p>
				<p>937-572-8203</p><br>
				<p>@2020 by Taylor Williams</p><br>
		</div>
	</footer>
</html>
