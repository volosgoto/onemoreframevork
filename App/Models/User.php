<?php

namespace App\Models;
use App\Db;

class User {
    public $email;
    public $name;

//    public function findAll(){
//        $db = new Db();
//        return $db->query('SELECT * FROM users', 'App\Models\User');
//    }

// Переделать на статический
    public static function findAll() {
        $db = new Db();
        return $db->query('SELECT * FROM users', 'App\Models\User');
    }
}