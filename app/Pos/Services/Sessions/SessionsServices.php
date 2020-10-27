<?php


namespace App\Pos\Services\Sessions;


use App\Pos\Repository\Sessions\SessionsRepo;
use App\Pos\Services;

class SessionsServices extends Services
{

    private  $sessionRepo ;

    public function __construct()
    {
        $this->sessionRepo = new SessionsRepo();
    }

    public function getAll()
    {
        return $this->sessionRepo->gets();
    }
}