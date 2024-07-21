<?php
session_start();
$_SESSION["score1"] = 0;
$_SESSION["score2"] = 0;
$_SESSION["score3"] = 0;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Hyper Test Quest Web Php</h1>
<form action="HyperTestQuest2.php" method="post">
    <button type="submit">Start Test</button>
</form>
</body>
</html>