<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>

<!-- // ceil,floor,round - 少数を整数に切り上げ、切り下げる -->

３０００円のモノから、１００円値引きした場合、<?php print(floor(100 / 3000 * 100)); ?>％引きです。


その他の計算
切り上げ（ceil） <?php print(ceil(100 / 3000 * 100)); ?>

四捨五入（round） <?php print(round(100 / 3000 * 100, 3)); ?>



</pre>
</main>
</body>    
</html>