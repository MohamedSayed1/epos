<?php


namespace App\Pos\Repository\Sessions;


use App\Pos\Model\Sessions\TransactionDetails;

class TransactionDetailsRepo
{
    private $tranDetails ;

    public function __construct()
    {
        $this->tranDetails = new TransactionDetails();
    }

    public function getByTransactionId($id =0)
    {
        return $this->tranDetails->with('getProduct')->where('trans_id',$id)->get();
    }
}