<?php
if($_POST["message"]) {
    mail("taylor.williams1999@outlook.com", $_POST["subject"], $_POST["message"], "$_POST["email"] . $_POST["name"]);
}

if($_POST["Cmessage"]) {
    $headers = "From: $_POST[Cemail]" . $_POST["Cname"];
    mail("taylor.williams1999@outlook.com", $_POST["Csubject"], $_POST["Cmessage"], $headers);
}
?>
