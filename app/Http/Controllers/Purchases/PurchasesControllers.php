<?php


namespace App\Http\Controllers\Purchases;


use App\Http\Controllers\Controller;

class PurchasesControllers extends Controller
{

    public function addView()
    {
        return view('admin.purchases.add');
    }
}