

<?php

include_once("connect.php");

$thread_array = array();

$sql = "SELECT * FROM thread";
$statement = $pdo->prepare($sql);
$statement->execute();
$thread_array = $statement;
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>entry</title>
</head>
<body>
  <header>
    <h1 class="title">hope</h1>
    <hr>
  </header>
  <h1 class="entryTitle">情報</h1>

<section>
  <?php foreach($thread_array as $thread) : ?>
  <article>
  <div class="mainWrapper">
    <form class="formWrapper">

      <span>名前：</span>
      <p class="userName"><?php echo $thread["username"];?></p>
      <br>
      <span>性別：</span>
      <p class="gender"><?php echo $thread["gender"];?></p>
      <br>
      <span>年齢：</span>
      <p class="age"><?php echo $thread["age"];?></p>
      <br>
      <span>健康状態：</span>
      <p class="health"><?php echo $thread["health"];?></p>
      <br>
      <span>居場所：</span>
      <p class="place"><?php echo $thread["place"];?></p>
      <br>
      <span>連絡先：</span>
      <p class="contact"><?php echo $thread["contact"];?></p>
      <br>



      <div>
        <span>メモ：</span>
        <p class="body"><?php echo $thread["body"];?></p>
      </div>
      <hr>
      <div class="creatorWrapper">
        <div>
          <label>投稿者：</label>
          <p class="creator"><?php echo $thread["creator"];?></p>
          <label>投稿者連絡先：</label>
          <p class="creatorContact"><?php echo $thread["creatorContact"]; ?></p>
          <label>投稿日時</label>
          <time>：<?php echo $thread["post_date"]; ?></time>
        </div>

      </div>
  </article>
  <?php endforeach ?>

</section>
