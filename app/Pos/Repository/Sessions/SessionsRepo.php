<?php


namespace App\Pos\Repository\Sessions;


use App\Pos\Model\Sessions\Sessions;
use App\Pos\Repository\Users\UsersRepo;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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

    public function close($data)
    {
        $close = $this->seesion->find($data['session']);
        $close->user_id_close = Auth()->user()->id;
        $close->close_balance = $data['balance'];
        $close->type          = 0;
        $close->close_at      = Carbon::now();
        if($close->save())
        {
            if($close->user_id_open == Auth()->user()->id)
            {
                if($this->updatedUser(null))
                    return true;
            }
            else{
                $this->closeUserSession($close->user_id_open);
                return true;
            }

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

    private function closeUserSession($userId)
    {
        $user = User::find($userId);
        $user->open_seesion = null;
    }






}