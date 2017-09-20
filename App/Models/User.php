<?php

namespace App\Models;
use App\Model;

class User extends Model {
    const TABLE = 'users';
    public $email;
    public $name;
    public static $params;

    public static function getTable($params) {
        return self::$params = $params;
    }

}