<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>確認画面</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h>本当にこれで大丈夫？？</h>
  <div id="container">
    <p>
      お名前
    </p>
    <p>
      <?php echo htmlspecialchars($_POST['name']); ?>
    </p>
    <p>
      email
    </p>
    <p>
      <?php echo htmlspecialchars($_POST['email']); ?>
    </p>
    <p>
      本文
    </p>
    <p>
      <?php echo htmlspecialchars($_POST['opinion']); ?>
    </p>
    <div style="display:inline-flex">
    <form action="contact" method="post" id="confirm">
      <input type="hidden" name="name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
      <input type="hidden" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
      <input type="hidden" name="opinion" value="<?php echo htmlspecialchars($_POST['opinion']); ?>">
      <input type="submit" name="submit" value="戻る">
    </form>
    <form action="completion" method="post" id="confirm">
      <input type="hidden" name="name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
      <input type="hidden" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
      <input type="hidden" name="opinion" value="<?php echo htmlspecialchars($_POST['opinion']); ?>">
      <!-- <a href="/completion" target="_self">投稿する</a> -->
      <input type="submit" name="submit" value="投稿する">
    </form>
    </div>
  </div>
</body>
</html>