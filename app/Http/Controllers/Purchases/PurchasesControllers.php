<?php


namespace App\Http\Controllers\Purchases;


use App\Http\Controllers\Controller;
use App\Pos\Services\Products\ProductServices;

class PurchasesControllers extends Controller
{

    private $product ;

    public function __construct()
    {
        $this->product = new ProductServices();
    }

    public function addView()
    {

        return view('admin.purchases.add');

    }

    public function returnProduct()
    {
        $products = $this->product->getAll();

        return response()->json(['status'=> 200,'data'=>$products]) ;
    }
}