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
    <form action="confirm" method="post" id="contact">
      <p>
        <input type="text" name="name" placeholder="name" value="<?php echo htmlspecialchars($_POST['name']); ?>" required>
      </p>
      <p>
      <!-- お名前エラーメッセージ -->
      </p>
      <p>
        <input type="email" name="email" placeholder="email" value="<?php echo htmlspecialchars($_POST['email']); ?>" required>
      </p>
      <!-- emailエラーメッセージ -->
      <p>
        <textarea name="opinion" rows="4" cols="40" placeholder="こちらに本文を記入してください" required><?php echo htmlspecialchars($_POST['opinion']); ?></textarea>
      </p>
      <p>
      <input type="submit" name="submit" value="次へ">
      </p>
      <!-- <div class="btn" onclick="document.getElementById('contact').submit();">次へ</div> -->
      <input type="hidden" name="token" value="<?php htmlspecialchars($_SESSION['token']); ?>">
    </form>
  </div>
</body>
</html>
