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

    <h1>Новости</h1>

    <?php foreach ( $this->articles as $article ) { ?>
        <article>
            <a href="<?php echo '?ctrl=Article&id=' . $article->id; ?>&username=Alexander">
                <h3><?php echo $article->title; ?></h3>
            </a>
            <p><?php echo $article->content; ?></p>
        </article>
        <hr>
    <?php } ?>

</body>
</html>