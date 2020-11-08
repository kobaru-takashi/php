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
    $age ='２０';
    $age = mb_convert_kana($age, 'n', 'UTF-8'); //mb_convert_kana 'n' 半角の英数字に変更する
    if(is_numeric($age)){ //is_numericは$ageが数値を判断する 数値ならtrue
        print($age . '歳');
    } else {
        print('※ 年齢が数字ではありません');
    }
    ?>
</pre>
</main>
</body>    
</html>