<?php
session_start();
$questions =
    [
        ['question' => 'Питання 1', 'correct' => 'відповідь'],
    ];
shuffle($questions);
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $score = 0;
    foreach ($questions as $index => $question)
    {
        if (isset($_POST["question$index"]) && strtolower(trim($_POST["question$index"])) == strtolower($question['correct']))
        {
            $score++;
        }
    }
    $_SESSION['score3'] = $score * 5;
    header('Location: HyperTestQuest5.php');
    exit();
}
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
<form action="HyperTestQuest4.php" method="post">
    <?php foreach ($questions as $index => $question): ?>
        <p><?php echo $question['question']; ?></p>
        <input type="text" name="question<?php echo $index; ?>">
        <br>
    <?php endforeach; ?>
    <button type="submit">Finish</button>
</form>
</body>
</html>