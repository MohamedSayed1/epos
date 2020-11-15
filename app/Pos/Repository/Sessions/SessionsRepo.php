<?php


namespace App\Pos\Repository\Sessions;


use App\Pos\Model\Sessions\Sessions;
use App\Pos\Repository\Users\UsersRepo;

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

    public function open($data)
    {
        $this->seesion->num_session     = $this->getNumper();
        $this->seesion->opening_balance = $data['opening_balance'];
        $this->seesion->user_id_open    = Auth()->user()->id;
        $this->seesion->type            = 1;

        if($this->seesion->save())
        {
            if($this->updatedUser($this->seesion->session_id)){
                return true;
            }
            return false;

        }
        return false;
    }

    public function getNumper()
    {
       $num = $this->seesion->latest()->first()->num_session;
       return $num + 1 ;
    }

    private  function  updatedUser($session)
    {
        $user = new UsersRepo();
        return $user->Session($session);
    }




}