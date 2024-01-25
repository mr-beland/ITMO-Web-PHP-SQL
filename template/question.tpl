<!DOCTYPE html>
<html lang="en">
<head>
    <script src="../assets/js/axios.min.js"></script>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="contaner-question">
        <h1><label>Введи вопрос</label></h1>
        
        <form onsubmit= "addQuestion(); return false;" id="form">
            <input type="textarea" placeholder="Вопрос" id="question" name="question">
            <input type="text" maxlength="10" placeholder="Имя" id="name" name="name">
            <input type="submit" value="Enter">
        </form>
    </div>
    <script src="../assets/js/question.js"></script>
</body>
</html>