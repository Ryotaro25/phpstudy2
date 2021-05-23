<!DOCTYPE html>
<!-- saved from url=(0038)http://localhost:8888/php/sample21.php -->
<html lang="ja"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Required meta tags -->

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../.././PHP_files/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>

  <?php 
  try {
    $db = new PDO('mysql:dbname=mydb;host=localhost;charaset=utf8',
    'root', 'root');
  } catch(PDOException $e) {
    echo 'DB接続エラー: '.$e->getMessage();
  }

$memos = $db->querY('SELECT * FROM memos WHERE id=2');
$memo = $memos->fetch();
?>
<article>
  <pre><?php print($memo['memo']); ?></pre>
  <a href="index.php">戻る</a>
</article>
</main>
    
</body>
</html>