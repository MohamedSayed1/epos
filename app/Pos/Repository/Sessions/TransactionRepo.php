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

    public function expenses($data)
    {
        $this->tranModel->session_id = Auth()->user()->open_seesion;
        $this->tranModel->user_id    = Auth()->user()->id;
        $this->tranModel->total      = $data['total'];
        $this->tranModel->type       = -1;
        $this->tranModel->status     = "expenses";
        $this->tranModel->details    = $data['details'];
       return $this->tranModel->save();
    }

    public function getBySession($id)
    {
        $this->tranModel->with('')
    }
}