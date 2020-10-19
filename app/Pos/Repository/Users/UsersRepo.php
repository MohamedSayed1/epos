<?php


namespace App\Pos\Repository\Users;


use App\User;

class UsersRepo
{
    private $user;
    public function __construct()
    {
        $this->user = new User();
    }

    public function get()
    {
        return $this->user->get();
    }

}