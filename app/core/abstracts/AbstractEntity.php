<?php
namespace App\Core\Abstracts;

abstract class AbstractEntity{

   
   abstract public  function toArray():array;
   abstract public static function toObject(array $data):static;
   public  function toJson():string{

         return json_encode(static::toArray());
   }

}