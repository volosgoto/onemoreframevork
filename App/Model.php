<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 9/19/17
 * Time: 11:03 AM
 */

namespace App;


class Model {
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
}