<?php require('dbconnect.php'); ?>

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
if (isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
  $id = $_REQUEST['id'];

  $memos = $db->prepare('SELECT * FROM memos WHERE id=?');
  $memos->execute(array($id));
  $memo = $memos->fetch();
}

?>

<form action="update_do.php" method="post">
  <input type="hidden" name="id" value="<?php print($id); ?>">
  <textarea name="memo" id="" cols="50" rows="10"><?php print($memo['memo']); ?></textarea><br>
  <button type="submit">登録する</button>
</form>
</main>
    
</body>
</html>