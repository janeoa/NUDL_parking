<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Parking. Главная</title>
    <?php $dir = "main"; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"/>
    <link rel="stylesheet" href="/common/main.css"/>

</head>

<body>
<!--NAV -->
<?php
    include("$root/common/navbar.php");
?>

<div style="width: 100%; height: 100%; position: relative; background-image: url('/img/first.jpg'); background-position: center center;" class="" id="first">
    <div id="logo" class="" style="position: absolute; top: 67px; left: 10%;">
        LOGO
    </div>
</div>
<div class="w3-container">
    <h1 class="w3-text-black">PSEUDO CONTENT</h1>
</div>

<?php
include ("$root/common/footer.html");
?>

</body>
</html>