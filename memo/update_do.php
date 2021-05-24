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
<pre>
  <?php 
  require('dbconnect.php');

  $statement = $db->prepare('UPDATE memos SET memo=? WHERE id =?');
  $statement->execute(array($_POST['memo'], $_POST['id']));
  ?>
  <p>メモの内容を変更しました</p>
</pre>

<p><a href="index.php">戻る</a></p>
</main>
    
</body>
</html>