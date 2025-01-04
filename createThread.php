<?php
include_once("connect.php");

if (isset($_POST["submitButton"])) {

  $userName = $_POST["userName"];
}
if (isset($_POST["submitButton"])) {

  $gender = $_POST["gender"];
}
if (isset($_POST["submitButton"])) {

  $age = $_POST["age"];
}
if (isset($_POST["submitButton"])) {

  $health = $_POST["health"];
}
if (isset($_POST["submitButton"])) {

  $place = $_POST["place"];
}
if (isset($_POST["submitButton"])) {

  $contact = $_POST["contact"];
}
if (isset($_POST["submitButton"])) {

  $body = $_POST["body"];
}
if (isset($_POST["submitButton"])) {

  $creator = $_POST["creator"];
}
if (isset($_POST["submitButton"])) {

  $creatorContact = $_POST["creatorContact"];
}


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
  <h1 class="entryTitle">情報登録フォーム</h1>
  <div class="mainWrapper">
    <form class="formWrapper" method="POST">

      <label class="item">名前：</label>
      <input type="text" name="userName" value="">
      <br>
      <label class="item">性別：</label>
      <input type="text" name="gender" value="">
      <br>
      <label class="item">年齢：</label>
      <input type="text" name="age" value="">
      <br>
      <label class="item">健康状態：</label>
      <input type="text" name="health" value="">
      <br>
      <label class="item">居場所：</label>
      <input type="text" name="place" value="">
      <br>
      <label class="item">連絡先：</label>
      <input type="text" name="contact" value="">
      <br>
      <div>
        <label class="item">メモ：</label>
        <textarea class="body" name="body"></textarea>
      </div>
      <div class="creatorWrapper">
        <div>
          <label>投稿者：</label>
          <input type="text" name="creator" value="">
          <label>連絡先：</label>
          <input type="text" name="creatorContact" value="">
        </div>

      </div>
      <div class="submitWrapper">
        <input type="submit" class="submitButton" name="submitButton" value="送信">
      </div>
    </form>


  </div>


</body>
</html>
