<?php


namespace App\Http\Controllers;
use App\Pos\Model\Sessions\Transaction;
use App\Pos\Paid;
use App\Pos\Repository\Products\ProductsRepo;
use App\Pos\Repository\Purchases\PurchasesRepo;
use App\Pos\Repository\Sessions\SessionsRepo;
use App\Pos\Repository\Sessions\TransactionRepo;
use App\User;
use Illuminate\Support\Facades\File;

use App\Pos\Repository\SplitExRepo;

class test extends Controller
{

    public function index()
    {
        $x = new PurchasesRepo();
        $data = [
            "name"=>'محمد',
            "data_from"=> "2020-11-01",
             "date_at"=> "2020-12-30"
        ];

        return $x->search($data) ;


    }
}