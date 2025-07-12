<?php
namespace App\Core\Abstracts;
use App\Core\Database;
use App\Core\App;
use \PDO;
abstract class AbstractRepository{

     protected Database $database;
     protected PDO $pdo;

     public function __construct(){
               $base= $this->database= App::get('core', 'database');
               $this->pdo=$base->getInstance()->getConnection();
     }   
    abstract public  function selectAll();
    abstract public  function insert();
    abstract public  function update();
    abstract public  function delete();
    abstract public  function selectById();
    abstract public  function selectBy(array $filter);
}