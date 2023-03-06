<?php 

namespace Application\Model;

use PDO;
use PDOException;

class Model {

    protected $connection;

    public function __construct() {
        if(!isset($connection)) {
            global $db_host , $db_name , $db_username , $db_password;
            $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION , PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC , PDO::MYSQL_ATTR_COMPRESS => "SET NAMES utf8");
            try {
                $this->connection = new PDO('mysql:host='.$db_host.';dbname='.$db_name , $db_username , $db_password , $options);
            }
            catch(PDOException $e) {
                echo 'there is some problem in connection: ' . $e->getMessage();
            }
        }
    }

    public function __destruct() {
        $this->closeConnection();
    }

    protected function query($query , $values = null) {
        try {
            if($values == null) {
                return $this->connection->query($query);
            }
            else {
                $stmt = $this->connection->prepare($query);
                $stmt->execute($values);
                return $stmt;
            }
        }
        catch (PDOException $e) {
            echo 'there is some problem in connection: ' . $e->getMessage();
        }
    }

    protected function execute($query , $values) {
        try {
            if($values == null) {
                $this->connection->exec($query);
            }
            else {
                $stmt = $this->connection->prepare($query);
                $stmt->execute($values);
            }
        }
        catch(PDOException $e) {
            echo 'there is some problem in connection: ' . $e->getMessage();
        }
    }

    protected function closeConnection() {
        $this->connection = null;
    }

}

?>