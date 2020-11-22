<?php


namespace App\Http\Controllers\Sessions;


use App\Http\Controllers\Controller;
use App\Pos\Services\Sessions\SessionsServices;
use Helmesvs\Notify\Facades\Notify;
use Illuminate\Http\Request;
use Cart;
use App\Pos\Paid;

class SessionsControllers extends Controller
{
    private $sessionSer ;

    public function __construct()
    {
        $this->sessionSer = new SessionsServices();
    }

    public function index()
    {
        $sessions = $this->sessionSer->getAll();

        return view('admin.session.pos')
            ->with('sessions',$sessions);
    }


    public function open(Request $request)
    {
        if($this->sessionSer->open($request->all()))
        {
            Notify::success('تم الاضافه بنجاح', 'احسنت');
            return redirect()->back();
        }

        $errors = $this->sessionSer->errors();
        Notify::error($errors[0],'نأسف');

        return redirect()->back();

    }


    public function updated(Request $request)
    {
        if($this->sessionSer->updated($request->all()))
            return response()->json(['status'=> 200]) ;



        $errors =  $this->sessionSer->errors();
        return response()->json(['status'=> 201,'data'=> $errors ]) ;
    }



}