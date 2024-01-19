<!doctype html>
<html lang="en">
<head>
    <script src="../assets/js/axios.min.js"></script>
    <script src="../assets/js/app.js"></script>
    <link rel="stylesheet" href="../assets/css/index.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div style="display: flex;">Колличество вопросов: <div id="counter">  </div></div>
<h1>Задай вопрос</h1>
<div id = "contaner">
    <?php foreach($result as $key => $value ): ?>
    <section id="row-<?= $value['num']; ?>" data-id="<?= $value['num']; ?>">
        <div>
        <span><?= ($key + 1); ?></span> 
        <span> <?= $value['comment']; ?></span> 
        <span> <?= $value['surname']; ?></span>
        </div>
    </section>
    <?php endforeach; ?>
    <form action="" method="post">
        <input id="ask" type="textarea" placeholder="Задай свой вопрос">
        <input id="name" type="text" placeholder="Представьтесь">
        <button type="submit">Отправить</button>
    </form>
</div>    
</body>
</html>
