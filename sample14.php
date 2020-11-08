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
<?php
$news = file_get_contents('../../news_date/news.txt');
$news .= "2020-12-29 ニュースを追加しました!!!!";
file_put_contents('../../news_date/news.txt', $news);
print($news);

// $s = $s . 'abc'; 
// $s .= 'abc';　上と同じ事

// readfile('../../news_date/news.txt');  //file_get_contentsと同じ。戻り値を使わなくもできる、しかし編集などが出来ない
?>

</pre>
</main>
</body>    
</html>