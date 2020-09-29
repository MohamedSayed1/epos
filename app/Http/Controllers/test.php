<?php


namespace App\Http\Controllers;


use App\Pos\Repository\SplitExRepo;

class test extends Controller
{

    public function index()
    {
        $x = new SplitExRepo();

        if($x->addNew(['name'=>'الاجار']))
        {
            return 'done';
        }

        return 'NotAdd';
    }
}