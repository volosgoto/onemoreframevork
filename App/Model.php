<?php
namespace App;

abstract class Model {

    const TABLE = '';
    public static $params = [];

    public static function findAll() {
        $params = [];
        $db = new Db();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,  // ссылаемся на константу в классе на который вызывает.
            static::class, // класс потомок исрользует
            $params
        );
    }

    public static function findById($params){
        $params = [];
        $db = new Db();
            return $db->query(
                'SELECT * FROM' . static::TABLE . 'WHERE id=:params',
                //'SELECT * FROM `users` WHERE id=:id',
                static::class,
                [':params' => '']
                );

    }
}