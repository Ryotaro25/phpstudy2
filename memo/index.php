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

$memos = $db->querY('SELECT * FROM memos ORDER BY id DESC');
?>


<article>
  <?php while ($memo = $memos -> fetch()): ?>
    <p><a href="memo.php?id=<?php print($memo['id']); ?>"><?php print(mb_substr($memo['memo'], 0, 50)); ?></a></p>
    <time><?php print($memo['created_at']); ?></time>
  <?php endwhile; ?>  
</article>

</main>
    
</body>
</html>