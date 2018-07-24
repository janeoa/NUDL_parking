<?php
/**
 * Created by PhpStorm.
 * User: assetmalik
 * Date: 7/25/18
 * Time: 1:56 AM
 */

//$to = "info@k-p-s.kz";
$to = "asetmalik@gmail.com";
$subject = "Заявка на звонок на сайте";
$name = $_POST["name"];
$tel = $_POST["tel"];

$message = "
<html>
    <head>
        <title>Заявка на звонок на сайте</title>
    </head>
    <body>
        <h1>Заявка на звонок на сайте</h1>
        <p>На номер $tel</p>
        <p>Представился как \"$name\"</p>
    </body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
//$headers .= 'From: <webmaster@k-p-s.kz>' . "\r\n";
$headers .= 'From: <webmaster@parking.nudl.kz>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);

header('Location: /');

?>