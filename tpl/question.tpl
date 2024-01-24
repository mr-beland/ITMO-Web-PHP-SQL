<!doctype html>
<html lang="en">
<head>
    <script src="../assets/js/axios.min.js"></script>
    <script src="../assets/js/question.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/output.css"/>
    <title>Document</title>
</head>
<body>
<h1>Задай вопрос</h1>
<div id="container">
    <form id="form" class="space-y-6" onsubmit="helloWorld(); return false;">
        <input class="block rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300"
               type="text" id="question" name="question">
        <input class="flex justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
               type="submit" value="Добавить">
    </form>
    <div id="answer" style="display: none">Вопрос добавлен</div>
</div>
</body>
</html>