<?php


namespace App\Pos\Services\Sessions;


use App\Pos\Repository\Sessions\TransactionRepo;
use App\Pos\Services;

class TransactionServices extends Services
{
    private $transRepo ;

    public function __construct()
    {
        $this->transRepo = new TransactionRepo();
    }

    public function getbyId($id)
    {
        return $this->transRepo->getByid($id);
    }
}