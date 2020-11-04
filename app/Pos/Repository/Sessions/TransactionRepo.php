<?php


namespace App\Pos\Repository\Sessions;


use App\Pos\Model\Sessions\Transaction;

class TransactionRepo
{
    private $tranModel ;

    public function __construct()
    {
        $this->tranModel = new Transaction();
    }

    public function getByid($id =0)
    {
        return $this->tranModel->find($id);
    }
}