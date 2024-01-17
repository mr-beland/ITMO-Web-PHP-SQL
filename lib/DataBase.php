<?php
// Забрать настройки из конфига
define('DB_PERSISTENCY', 'true');
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'postgres');
define('DB_PASSWORD', '123');
define('DB_DATABASE', 'simple');
define('PDO_DSN', 'pgsql:host=' . DB_SERVER . ';dbname=' . DB_DATABASE);


class DataBase
{
    const SQL_SELECT_ALL_ACCOUNT =  'select * from account';
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
                self::$db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
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

//define('SQL_SELECT_ALL_ACCOUNT', 'select * from account');
//$db = new DataBase();
//$result = $db->getDataBase(SQL_SELECT_ALL_ACCOUNT);
// var_dump($result);

