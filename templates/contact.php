<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>お問い合わせフォーム</title>
  <link rel="stylesheet" href="styles.css">
 <!--  <script type="text/javascript"> 
<!-- 
function check(){
  var flag = 0;
  // 設定開始（必須にする項目を設定してください）
  if(document.form1.field1.value == ""){ // 「お名前」の入力をチェック
    flag = 1;
  }
  else if(document.form1.field2.value == ""){ // 「パスワード」の入力をチェック
    flag = 1;
  }
  else if(document.form1.field3.value == ""){ // 「コメント」の入力をチェック
    flag = 1;
  }
  // 設定終了

  if(flag){
    window.alert('必須項目に未入力があります'); // 入力漏れがあれば警告ダイアログを表示
    return false; // 送信を中止
  }
  else{
    return true; // 送信を実行
  }
}
</script> -->
</head>
<body>
<section class="box fourcorners">
  <h1>CONTACT US</h1>
  <p>ご意見、ご苦情、愛の告白などございましたらこちらから</p>
  <div id="container">
    <form action="confirm" method="post" id="contact">
      <p>
        <input type="text" name="name" placeholder="Name" value="<?php echo htmlspecialchars($_POST['name']); ?>" required id="namen">
      </p>
      <p>
      <!-- お名前エラーメッセージ -->
      </p>
      <p>
        <input type="email" name="email" placeholder="E-Mail" value="<?php echo htmlspecialchars($_POST['email']); ?>" required id="mail">
      </p>
      <!-- emailエラーメッセージ -->
      <p>
        <textarea name="opinion" rows="4" cols="40" placeholder="こちらに本文を記入してください" required id="opinion"><?php echo htmlspecialchars($_POST['opinion']); ?></textarea>
      </p>
      <p>
      <input type="submit" name="submit" value="確認画面へ" id="btn">
      </p>
       <!-- <div class="btn" onclick="document.getElementById('contact').submit();">確認画面</div> -->
       <input type="hidden" name="token" value="<?php htmlspecialchars($_SESSION['token']); ?>">
    </form>
  </div>
  <section>
</body>
</html>
