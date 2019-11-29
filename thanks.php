<?php
require_once('dbconnect.php');
require_once('function.php');

//入力内容の取得
$nickname = $_POST['nickname2'];
$email = $_POST['email'];
$content = $_POST['content'];


$stmt = $dbh->prepare('INSERT INTO surveys (nickname, email, content) VALUES (?, ?, ?)');
$stmt->execute([$nickname, $email, $content]);//?を変数に置き換えてSQLを実行


//表示
// echo $nickname;
// echo '<br>';
// echo $email;
// echo '<br>';
// echo $content;
// echo '<br>';


// if($SERVER['REQUEST_METHOD'] !== 'POST'){
//     header('Location: index.php');
// }

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>送信完了</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>お問い合わせありがとうございました！</h1>
    <p><?php echo h($nickname); ?></p>
    <p><?php echo h($email); ?></p>
    <p><?php echo h($content); ?></p>
</body>
</html>