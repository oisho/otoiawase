<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>お問い合わせフォーム</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  ご意見、ご苦情、愛の告白、ええ意見などございましたらこちらから
  <div id="container">
    <form action="" method="post" id="contact">
      <p>
        <input type="text" name="name" placeholder="name" value="">
      </p>
      <p>
      <!-- お名前エラーメッセージ -->
      </p>
      <p>
        <input type="email" name="email" placeholder="email" value="">
      </p>
      <!-- emailエラーメッセージ -->
      <p>
        <textarea name="opinion" rows="4" cols="40" placeholder="こちらに本文を記入してください"></textarea>
      </p>
      <p class="next"><a href="/confirm">次へ</a></p>
    </form>
  </div>
</body>
</html>
