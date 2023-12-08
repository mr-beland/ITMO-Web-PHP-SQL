<form action="auth.php" method="POST">
    <label for="name">Ваше имя: <?php echo $name?> </label>
    <input name="login" id="name" type="text">

    <label for="age">Ваш возраст:</label>
    <input name="passwd" id="age" type="number">

    <button type="submit">Submit</button>
</form>