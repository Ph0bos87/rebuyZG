<?
$name = $_POST{'name'};
$subject = $_POST{'subject'};
$email = $_POST{'email'};
$phone = $_POST{'phone'};
$message = $_POST['message'];

$email_message = "

Ime: ".$name."
Predmet poruke: ".$subject."
Email: ".$email."
Telefon: ".$phone."
Poruka: ".$message."

";

mail ("info@rebuystars.hr" , "Novi email sa web stranice", $email_message);
header("location: ../../mail-success.html");
?>


