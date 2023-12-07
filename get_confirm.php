// GETで送られてきた名前とアドレスのデータを受け取る


// (演習)名前、アドレス以外の情報を追加して送ってみましょう（性別、年齢などなど）

<?php
$name = $_GET['name']; //GETで受け取ることができる
$email = $_GET['email'];
$number = $_GET['number'];
$comment = $_GET['comment'];
$score = $_GET['score'];


?>

<html>

<head>
    <meta charset="utf-8">
    <title>GET練習（受信）</title>
</head>

<body>
    <p>お名前： <?php echo $name; ?></p><br>
    <p>Mail: <?php echo $email; ?></p>
    <p>働きやすさ：<?php echo $number; ?></p>
    <p>会社の正直な感想：<?php echo $comment; ?></p>
    <p>スコア：<?php echo $score; ?></p>
   


    <ul>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>

</html>
