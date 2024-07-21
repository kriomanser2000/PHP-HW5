<?php
session_start();
$questions =
    [
        ['question' => 'Питання 1', 'answers' => ['Відповідь 1', 'Відповідь 2', 'Відповідь 3', 'Відповідь 4'], 'correct' => [0, 2]],
    ];
shuffle($questions);
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $score = 0;
    foreach ($questions as $index => $question)
    {
        if (isset($_POST["question$index"]))
        {
            $userAnswers = $_POST["question$index"];
            sort($userAnswers);
            if ($userAnswers == $question['correct'])
            {
                $score++;
            }
        }
    }
    $_SESSION['score2'] = $score * 3;
    header('Location: HyperTestQuest4.php');
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
<form action="HyperTestQuest3.php" method="post">
    <?php foreach ($questions as $index => $question): ?>
        <p><?php echo $question['question']; ?></p>
        <?php foreach ($question['answers'] as $i => $answer): ?>
            <label>
                <input type="checkbox" name="question<?php echo $index; ?>[]" value="<?php echo $i; ?>">
                <?php echo $answer; ?>
            </label><br>
        <?php endforeach; ?>
    <?php endforeach; ?>
    <button type="submit">Next</button>
</form>
</body>
</html>