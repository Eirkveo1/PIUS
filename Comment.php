<?php

namespace u8201983;

use u8201983\User;

require './vendor/autoload.php';


class Comment{
    public function __construct(public User $user, public string $comment)
    {
    }

    public function getUser(): User
    {
        return $this -> user;
    }
    public function getComment(): string
    {
        return $this -> comment;
    }
}


