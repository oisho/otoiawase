<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>お問い合わせを受け付けました。</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  お問い合わせありがとうございました。
  <div id="container">
      <p>
        <?php echo $_POST['name'] ?>様
      </p>
      <p>
        お問い合わせありがとうございました。
      </p>
      <p>
        お問い合わせ受付完了のメールを送信いたしました。
      </p>
      <a href="/contact" target="_self">戻る</a>
  </div>
</body>
</html>