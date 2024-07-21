<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .supDivBox
    {
        background: bisque;
        position: absolute;
        width: 300px;
        height: 200px;
        text-align: center;
        border-radius: 5px;
        border: 1px solid black;
        left: 40%;
        top: 20%;
        font-size: 22px;
    }

</style>
<body>
<div class="supDivBox">
    <form>
        <div>
            <label for="email">Email: </label>
            <input type="email" id="email" name="email" required>
        </div>
        <br>
        <div>
            <label for="subscribe">Subscribe: </label>
            <input type="checkbox" id="subscribe" name="subscribe" required>
        </div>
        <br>
        <input type="submit" name="send" value="send">
    </form>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["subscribe"]) && $_POST["subscribe"] == 'on')
    {
        echo "Thank you for subscribing!";
    }
    else
    {
        header("Refresh:0");
    }
}
?>
</body>
</html>