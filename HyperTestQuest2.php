<?php
session_start();
$questions =
    [
        [ "question" => "Що таке Php?", "answers" => [ "Фронт Енд мова програмування", "Бек Енд мова програмування для веб-розробки", "Pelmeni hinkali pomidory", "idk" ], "correct" => 0 ],
    ];
shuffle($questions);
if($_SERVER ['REQUEST_METHOD'] == 'POST')
{
    $score = 0;
    foreach($questions as $index => $question)
    {
        if (isset($_POST["question$index"]) && $_POST["question$index"] == $question['correct'])
        {
            $score++;
        }
    }
    $_SESSION['score1'] = $score;
    header("Location: HyperTestQuest3.php");
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
<h1>Сторінка 1</h1>
<form action="HyperTestQuest2.php" method="post">
    <?php foreach ($questions as $index => $question): ?>
        <p><?php echo $question['question']; ?></p>
        <?php foreach ($question['answers'] as $i => $answer): ?>
            <label>
                <input type="radio" name="question<?php echo $index; ?>" value="<?php echo $i; ?>">
                <?php echo $answer; ?>
            </label><br>
        <?php endforeach; ?>
    <?php endforeach; ?>
    <button type="submit">Next</button>
</form>
</body>
</html>