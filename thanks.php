<?php
//入力内容の取得
$nickname = $_POST['nickname2'];
$email = $_POST['email'];
$content = $_POST['content'];
//表示
// echo $nickname;
// echo '<br>';
// echo $email;
// echo '<br>';
// echo $content;
// echo '<br>';

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>送信完了</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>お問い合わせありがとうございました！</h1>
    <p><?php echo $nickname; ?></p>
    <p><?php echo $email; ?></p>
    <p><?php echo $content; ?></p>
</body>
</html>