<?php defined("APP") or die("NO DIRECT ACESS !"); ?>
<title><?=$title?></title>
<h1><?=$header?></h1>
<div class="wrapper portfolio">
    <h2>MY PORTOLIO</h2>

    <?php
    $count = 0;
    foreach($arrPortfolio as $element):

        echo '<img data-wow-duration="1s" data-wow-delay="0.'.$count.'s" class="wow bounceInUp myPortfo" src="./img/'.$element.'"/>';
        $count++;
    endforeach;
    ?>
</div>