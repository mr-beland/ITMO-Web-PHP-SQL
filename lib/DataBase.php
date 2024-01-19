<?php

// todo: забрать настройки из конфига

define('PERSISTENCY', 'true');
define('SERVER', 'localhost');
define('USERNAME', 'postgres');
define('PASSWORD', '12345');
define('DATABASE', 'db_test');
define('PDO_DSN', 'pgsql:host=' . SERVER . ';dbname=' . DATABASE);


class DataBase
{

    

    private static $db;

    // Clear the PDO class instance
    public static function Close()
    {
        self::$db = null;
    }

   


    public function openDataBase()
    {
        if (!isset(self::$db)) {
            // Execute code catching potential exceptions
            try {
                self::$db = new PDO(PDO_DSN, USERNAME, PASSWORD);
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $e) {
                // Close the database handler and trigger an error
                self::Close();
                trigger_error($e->getMessage(), E_USER_ERROR);
            }
        }
        return self::$db;
    }

    public function lastInsertId(){
	    $db = $this->openDataBase();
	    return $db->lastInsertId();
    }

    public function setDataBase($string)
    {
        $db = $this->openDataBase();
        $db->exec($string);
    }

    public function setBasePrepare($query, $data)
    {
        $db = $this->openDataBase();
        $stmt = $db->prepare($query);
        $stmt->execute($data);
    }

    public function getDataBase($string)
    {
        $db = $this->openDataBase();
        $query = $db->query($string);
        if ($query) {
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return false;
        }
    }
    
    public function rowCount($query, $data)
    {
        $db = $this->openDataBase();
        $stmt = $db->prepare($query);
        $stmt->execute($data);
        return $stmt->rowCount();
    } 
    
    public function getBasePrepare($query, $data)
    {
        $db = $this->openDataBase();
        $stmt = $db->prepare($query);
        $stmt->execute($data);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


}

// define('SQL_SELECT_ALL_ACCOUNT', 'select * from account');

// $db = new DataBase ();
// $result = $db -> getDataBase (SQL_SELECT_ALL_ACCOUNT);

// var_dump($result);