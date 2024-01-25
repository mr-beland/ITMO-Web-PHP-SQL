<?php

class AuthController {

    

    public function actionCheckPass () {
        const LOGIN = $_POST['login'] ;
        const PASSWD = $_POST['passwd'];
        $row = self::LOGIN . " " . self::PASSWD ."\n";
            if (this -> isUserExists(self::LOGIN,self::PASSWD)) {
        echo "Вы прошли аутентификацию!";

        // Установить сессионную переменную is_auth
        $_SESSION['is_auth'] = True;
        // todo: Редирект в админку
            }  else {
        echo "Вы зарегистрированы!";
        writePasswordFile($row);
        // todo: Редирект на логин
    }
    }

    public function isUserExists($login, $passwd) {
        $result =  readPassword();
        foreach ($result as $value) {
            var_dump($value);
           $_login =  $value[0];
           $_passwd = $value[1];
           echo "<pre>";
           var_dump($login, $passwd );
           var_dump($_login, $_passwd );
            echo "</pre>";
            if ($_login == $login  and $_passwd == $passwd ) {
                return True;
            }
        }
        return False;
     }
}

// function checkPass($login='guest', $passwd="" ){
//     $row = $login . " " . $passwd ."\n";
//     if (isUserExists($login,$passwd )) {
//         echo "Вы прошли аутентификацию!";

//         // Установить сессионную переменную is_auth
//         $_SESSION['is_auth'] = True;
//         // todo: Редирект в админку
//     }  else {
//         echo "Вы зарегистрированы!";
//         writePasswordFile($row);
//         // todo: Редирект на логин
//     }
// }

// $content = "$login:" . "$passwd";
function writePasswordFile($row)
{
    global $filePassword;
    // Check if conf file exist and file is writable. .
    if (file_exists($filePassword) && is_writable($filePassword)) {
        $fd = fopen($filePassword , 'a');
        fwrite($fd, $row);
        fclose($fd);
    }
}



function readPassword(){
    global $filePassword;
    $lines = file($filePassword);
    $mass_passwd = [];
    foreach($lines as $line)
    {
        $result = [];
        $result = explode(" ", $line);
        $mass_passwd[] = $result;
    }
    return $mass_passwd;
}
readPassword();