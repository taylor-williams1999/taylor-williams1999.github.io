<?php
if($_POST["submit"]) {
    mail("taylor.williams1999@outlook.com", $_POST["subject"], $_POST["message"], "$_POST["email"] . $_POST["name"]);
}

if($_POST["Csubmit"]) {
	$email = $_POST["Cemail"];
	$headers = "From: $email" . $_POST["Cname"];
	mail("taylor.williams1999@outlook.com", $_POST["Csubject"], $_POST["Cmessage"], $headers);
}
?>
