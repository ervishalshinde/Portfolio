<?php
if($_POST["message"]) {
    mail("vishalranjitshinde@gmail.com", "Message from Porfolio", $_POST["name"],$_POST["email"],$_POST["subject"],$_POST["message"], "From: mail.portfolio");
}
?>