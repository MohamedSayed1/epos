<?php


namespace App\Pos\Model\Purchases;


use Illuminate\Database\Eloquent\Model;

class PurchasesDetails extends Model
{
    protected $table ="purchases_details";
    protected $primaryKey ="pur_id";

    public function Product()
    {
        return $this->belongsTo('App\Pos\Model\Products\Products','prod_id','product_id');
    }

}