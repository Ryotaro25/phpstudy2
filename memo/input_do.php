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
  $statement = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
  $statement->execute(array($_POST['memo']));
  echo 'message has registered';
?>
</pre>
</main>
    
</body>
</html>