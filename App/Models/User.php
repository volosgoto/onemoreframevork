<?php

namespace App\Models;
use App\Model;

class User extends Model{
    const TABLE = 'users';
    public $email;
    public $name;

//    public function findAll(){
//        $db = new Db();
//        return $db->query('SELECT * FROM users', 'App\Models\User');
//    }

    public function getName() {
        // TODO: Implement getName() method.
    }

}