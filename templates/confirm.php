<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>確認画面</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  本当にこれで大丈夫？？
  <div id="container">
      <p>
        お名前
      </p>
      <p>
        <?php echo $_POST['name'] ?>
      </p>
       
      <p>
        email
      </p>
      <p>
        <?php echo $_POST['email'] ?>
      </p>
      <p>
        本文
      </p>
      <p>
        <?php echo $_POST['opinion'] ?>
      </p>
  </div>
</body>
</html>