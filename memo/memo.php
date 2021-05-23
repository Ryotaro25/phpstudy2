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
require('dbconnect.php'); 
$id = $_REQUEST['id'];
if (!is_numeric($id) || $id <= 0) {
  print('1以上の数字で指定してください');
  exit();
} 

$memos = $db->prepare('SELECT * FROM memos WHERE id=?');
$memos->execute(array($id));
$memo = $memos->fetch();
?>
<article>
  <pre><?php print($memo['memo']); ?></pre>
  <a href="index.php">戻る</a>
</article>
</main>
    
</body>
</html>