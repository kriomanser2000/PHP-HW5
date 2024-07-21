<?php
session_start();
$totalScore = $_SESSION['score1'] + $_SESSION['score2'] + $_SESSION['score3'];
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
<h1>Результати</h1>
<p>Ваш результат: <?php echo $totalScore; ?> балів</p>
<form action="HyperTestQuest.php" method="post">
    <button type="submit">Почати знову</button>
</form>
</body>
</html>