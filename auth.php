<?php
//todo: Дописать загрузку пользователей из файла
    require_once "config.php";

    $login = $_POST['email'];
    $pass = $_POST['password'];
    checkPass($login, $pass);

    function checkPass($login = 'guest', $pass = "") {
        $row = $login . " " . $pass . "\n";
        if (isUserExists($login, $pass)) {
            echo "Welcome!";
            // todo: Редирект в админку
        } else {
            echo "You are registered!";
            writePasswordFile($row);
        }
    }

    function writePasswordFile($row) {
        global $filePassword;
        // Check if conf file exist and file is writable. .
        if (file_exists($filePassword) && is_writable($filePassword)) {
            $fd = fopen($filePassword, 'a');
            fwrite($fd, $row);
            fclose($fd);
        }
    }

    function readPassword() {
        global $filePassword;
        $lines = file($filePassword);
        $mass_pass = [];
        foreach ($lines as $line) {
            $result = explode(" ", $line);
            $mass_pass[] = $result;
        }
        return $mass_pass;
    }

    function isUserExists($login, $pass) {
        $result = readPassword();
        foreach ($result as $value) {
            $_login = $value[0];
            $_passwd = trim($value[1]);
            if ($_login == $login and $_passwd == $pass) {
                return True;
            }
        }
        return False;
    }
