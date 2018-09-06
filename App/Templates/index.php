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

    <h1>Новости</h1>

<!--    --><?php //foreach ( $articles as $article ) { ?>
    <?php foreach ( $this->data['articles'] as $article ) { ?>
        <article>
            <h3><?php echo $article->title ?></h3>
            <p><?php echo $article->content ?></p>
        </article>
        <hr>
    <?php } ?>

</body>
</html>