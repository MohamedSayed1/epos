<?php


namespace App\Http\Controllers;
use App\Pos\Model\Sessions\Transaction;
use App\Pos\Paid;
use App\Pos\Repository\Products\ProductsRepo;
use App\Pos\Repository\Sessions\SessionsRepo;
use App\Pos\Repository\Sessions\TransactionRepo;
use App\User;
use Illuminate\Support\Facades\File;

use App\Pos\Repository\SplitExRepo;

class test extends Controller
{

    public function index()
    {
        $x = new TransactionRepo();

        return Paid::PinkBrief(2);


    }
}