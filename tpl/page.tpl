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

<span>Кол-во вопросов</span>
<span id="counter">?</span>

<h1>Задай вопрос</h1>
<div id="container">
    <?php foreach($result as $value): ?>
    <section id="row-1" data-id="<?= $value['num']; ?>">
        <div>
            <span><?= $value['num']; ?></span>
            <span><?= $value['question']; ?></span>
            <span><?= $value['status']; ?></span>
        </div>
    </section>
    <?php endforeach; ?>
</div>
</body>
<script src="../assets/js/axios.min.js"></script>
<script src="../assets/js/app.js"></script>
</html>
