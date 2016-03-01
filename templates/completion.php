<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>お問い合わせを受け付けました。</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div id="container">
      <p>
        <?php echo htmlspecialchars($_SESSION['name']); ?>様
      </p>
      <p>
        お問い合わせありがとうございました。
      </p>
      <p>
        お問い合わせ受付完了のメールが自動的に送信されます。
      </p>
      <a href = "/contact">
        戻る
      </a>
  </div>

</body>
</html>