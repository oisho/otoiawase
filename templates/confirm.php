<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>確認画面</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
<section class="box fourcorners">
  <h1>CHECK OUT</h1>
  <p>内容に誤りがないか、マジでご確認ください！</p>
  <div id="container">
    <p>
      <label>Name：</label><?php echo htmlspecialchars($_SESSION['name']); ?>
    </p>
    <p>
      <label>E-mail：</label><?php echo htmlspecialchars($_SESSION['email']); ?>
    </p>
    <fieldset>
    <legend>本文</legend> 
      <?php echo htmlspecialchars($_SESSION['opinion']); ?>
    </fieldset>
    <br>
    <div style="display:inline-flex">
    <form action="contact" method="post" id="confirm">
      <input type="submit" name="submit" value="戻る" id="btn">
    </form>
    <form action="completion" method="post" id="confirm">
      <input type="submit" name="submit" value="投稿する" id="btn">
    </form>
      <audio autoplay src="hurry-overworld.mp3"></audio>
    </div>
  </div>
  </section>
</body>
</html>