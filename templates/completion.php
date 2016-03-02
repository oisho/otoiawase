<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>お問い合わせ受付完了</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<section class="box fourcorners">
      <p>
        <?php echo htmlspecialchars($_SESSION['name']); ?>様
      </p>
      <p>
        お問い合わせありがとうございました。
      </p>
      <p>
        お問い合わせ受付完了のメールが自動的に送信されます。
      <div id="mario"><img src="mario.gif"/></div>
      <audio autoplay src="complete.mp3"></audio>

      </p>
</section>
      <a href = "/contact">
        戻る
      </a>
  </div>
</body>
</html>