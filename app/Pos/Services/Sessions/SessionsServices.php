<?php


namespace App\Pos\Services\Sessions;


use App\Pos\Repository\Sessions\SessionsRepo;
use App\Pos\Repository\Users\UsersRepo;
use App\Pos\Services;
use Validator;

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

    public function open($data)
    {
        $rules = [
            'opening_balance'     =>'required|numeric',
        ];
        // vaild
        $validator = Validator::make($data,$rules);

        if($validator->fails())
        {
            $this->setError($validator->errors());
            return false;
        }

        if($this->sessionRepo->open($data))
            return true;


        $this->setError(['برجاء المحاوله مره اخري ']);
        return false;
    }
}