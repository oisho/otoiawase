<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>確認画面</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>

  <h1>CHECK OUT</h1>
  <p>内容に誤りがないか、マジでご確認ください！</p>
  <div id="container">
    <p>
      <label>Name：</label><?php echo htmlspecialchars($_POST['name']); ?>
    </p>
    <p>
      <label>E-mail：</label><?php echo htmlspecialchars($_POST['email']); ?>
    </p>
    <fieldset>
    <legend>本文</legend> 
      <?php echo htmlspecialchars($_POST['opinion']); ?>
    </fieldset>
    <br>
    <div style="display:inline-flex">
    <form action="contact" method="post" id="confirm">
      <input type="hidden" name="name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
      <input type="hidden" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
      <input type="hidden" name="opinion" value="<?php echo htmlspecialchars($_POST['opinion']); ?>">
      <input type="submit" name="submit" value="戻る" id="btn">
    </form>
    　
    <form action="completion" method="post" id="confirm">
      <input type="hidden" name="name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
      <input type="hidden" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
      <input type="hidden" name="opinion" value="<?php echo htmlspecialchars($_POST['opinion']); ?>">
      <input type="hidden" name="time" value="<?php echo date("Y-m-d H:i:s"); ?>">
      <input type="submit" name="submit" value="投稿する" id="btn">
    </form>
    </div>
  </div>
  </section>
</body>
</html>