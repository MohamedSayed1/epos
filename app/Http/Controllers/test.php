<?php


namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\File;

use App\Pos\Repository\SplitExRepo;

class test extends Controller
{

    public function index()
    {

        $user = new User();

        $user->username = "user";
        $user->password = 123456;
        $user->name = 'user';
        $user->save();


    }
}