<?php


namespace App\Http\Controllers;
use App\Pos\Repository\Products\ProductsRepo;
use App\User;
use Illuminate\Support\Facades\File;

use App\Pos\Repository\SplitExRepo;

class test extends Controller
{

    public function index()
    {

        $x = new ProductsRepo();

        return $x->getPage();

    }
}