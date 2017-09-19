<?php
namespace App;

abstract class Model {

    const TABLE = '';

    public static function findAll() {
        $db = new Db();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,  // ссылаемся на константу в классе на который вызывает.
            static::class // класс потомок исрользует
        );
        //'SELECT * FROM ' . self::$table,
        //'App\Models\User'
    }
    abstract public function getName();
}