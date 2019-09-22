<?php defined("APP") or die("NO DIRECT ACESS !"); ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/style-maine.css">
    <link rel="stylesheet" href="./css/style-2.css">
</head>
<body>
<header>
    <nav>
        <a  href="./index.php"><img class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.5s" src="./img/logo.png" alt=""></a>
        <ul>
            <li data-wow-duration="1s" data-wow-delay="0.5s" class="wow bounceInDown"><a href="/php/php_2?page=main">Maine</a></li>
            <li data-wow-duration="1s" data-wow-delay="0.7s" class="wow bounceInDown"><a href="/php/php_2?page=contacts">Contacts</a></li>
            <li data-wow-duration="1s" data-wow-delay="0.9s" class="wow bounceInDown" ><a href="/php/php_2?page=portfolio">Portfolio</a></li>
        </ul>
    </nav>

</header>
<div class="wrapper">
    <?php
    include "./views/".$view.".php";
    ?>
</div>
<script src="./js/wow.js"></script>
<script>
    new WOW().init();
</script>
</body>
</html>
