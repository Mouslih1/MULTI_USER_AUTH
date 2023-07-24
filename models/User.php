<?php

namespace Models;

use PDO;

class User extends Model
{
    protected $table = "users";

    public function login($username, $password, $userType)
    {
        if (!isset($username, $password, $userType) || empty($password)) {
            return false;
        }

        $sha1Password = sha1($password);
        $query = $this->pdo->prepare("SELECT * FROM users WHERE username = ? AND password = ? AND user_type = ?");
        $query->execute([$username, $sha1Password, $userType]);
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }
}
