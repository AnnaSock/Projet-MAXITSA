<?php
namespace App\Core;

require_once __DIR__ . "/../../app/config/env.php";

use \PDO;
use \PDOException;

class Database {
    private PDO $connexion;
    private static ?Database $instance = null;

    private function __construct() {

        try {
            $this->connexion = new PDO( DSN, USER, PASSWORD);
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } 
        catch (PDOException $e) 
        {
            throw new \Exception("Erreur de connexion : " . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connexion;
    }
}
