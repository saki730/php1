<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
        }
    </style>
    <title>GET練習</title>
</head>

<body>

    <!-- サンプル↓ -->
    <form action="get_confirm.php" method="get">


        お名前： <input type="text" name="name">
        EMAIL： <input type="text" name="email">
        働きやすさ：<input type="number" name="number" min="1" max="10">
        正直な感想：<input type="text" name="comment">
        <form id="scoreForm">
    点数：<input type="number" id="score" name="score" min="1" max="100">
    <input type="submit" value="送信">

</form>

    </form>

    <!-- form以外の方法でGETを送って見る。 -->
    <!-- <a href="get_confirm.php">GETを送る</a> -->

</body>

</html>
