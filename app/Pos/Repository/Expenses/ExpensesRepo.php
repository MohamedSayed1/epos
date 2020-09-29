<?php


namespace App\Pos\Repository\Expenses;


use App\Pos\Model\Expenses\Expenses;

class ExpensesRepo
{
    private $expRepo ;

    public function __construct()
    {
        $this->expRepo = new Expenses();
    }

    public function add($data)
    {
        $this->expRepo->split_id = $data['split_id'];
        $this->expRepo->desc     = $data['desc'];
        $this->expRepo->prices     = $data['prices'];

        return $this->expRepo->save();
    }
}