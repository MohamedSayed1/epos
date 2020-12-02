<?php


namespace App\Pos\Repository\Purchases;


use App\Pos\Model\Products\Products;
use App\Pos\Model\Purchases\PurchasesDetails;

class PurchaseDetialsRepo
{

    private $detils;

    public function __construct()
    {
        $this->detils = new PurchasesDetails();
    }

    public function get($id)
    {
        return $this->detils->with('Product')->where('pursh_id',$id)->get();
    }

}