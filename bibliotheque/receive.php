
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$name = $_POST['client_name'];
$type = $_POST['client_type'];
$mail = $_POST['client_mail'];
$message = $_POST['message'];
echo "$name <br> $type <br> $mail <br> $message ";
}
?>
