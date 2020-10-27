<?php


namespace App\Http\Controllers\Sessions;


use App\Http\Controllers\Controller;
use App\Pos\Services\Sessions\SessionsServices;

class SessionsControllers extends Controller
{
    private $sessionSer ;

    public function __construct()
    {
        $this->sessionSer = new SessionsServices();
    }

    public function index()
    {
        $session = $this->sessionSer->getAll();

        return view('admin.session.pos')
            ->with('session',$session);
    }
}