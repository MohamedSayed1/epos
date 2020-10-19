<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;

use App\Pos\Repository\SplitExRepo;

class test extends Controller
{

    public function index()
    {

        $url = url('upload/');
        echo $url ;
        \File::delete('upload/product_d8d0109baa76fe0b2d77acd85b3163dd.jpg');


    }
}