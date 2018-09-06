<?php
/**
 * @var \App\View $this
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новости</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <?php include __DIR__ . '/header.php'; ?>

    <h1><?php echo $this->article->title; ?></h1>

        <article>
            <p><?php echo $this->article->content; ?></p>
        </article>
        <hr>

</body>
</html>