<?php


namespace App\Pos\Repository\Sessions;


use App\Pos\Model\Sessions\Sessions;

class SessionsRepo
{
    private  $seesion ;

    public function __construct()
    {
        $this->seesion = new Sessions();
    }


    public function gets()
    {
        return $this->seesion->orderBy('updated_at', 'desc')
            ->take(20)
            ->get();
    }
}