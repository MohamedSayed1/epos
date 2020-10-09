<?php


namespace App\Pos\Services\Products;


use App\Pos\Repository\Products\ProductsRepo;
use App\Pos\Services;
use Validator;

class ProductServices extends Services
{
    private $productRepo;

    public function __construct()
    {
        $this->productRepo = new ProductsRepo();
    }

    public function add($data)
    {
        // rules to valid
        $rules = [
            'name'          =>'required|max:249|unique:product,name',
            'count'         =>'required|integer',
            'pruch_prices'  =>'required|numeric',
            'prices'        =>'required|numeric',
            'photo'         =>'nullable|image',
        ];

        // vaild
        $validator = Validator::make($data,$rules);

        if($validator->fails())
        {
            // set erros
            //  return   $validator->errors();
            $this->setError($validator->errors());
            return false;
        }


        if($this->productRepo->add($data))
        {
            return true;
        }

        $this->setError(['هناك خطاء ..برجاء المحاوله مره اخري .. !']);
        return false;
    }



    public function updated($data)
    {
        // rules to valid
        $rules = [

            'name'          =>'required|max:249|unique:product,name,'. $data['id'].',product_id',
            'count'         =>'required|integer',
            'pruch_prices'  =>'required|numeric',
            'prices'        =>'required|numeric',
            'photo'         =>'nullable|image',
        ];

        // vaild
        $validator = Validator::make($data,$rules);

        if($validator->fails())
        {
            // set erros
            //  return   $validator->errors();
            $this->setError($validator->errors());
            return false;
        }


        if($this->productRepo->add($data))
        {
            return true;
        }

        $this->setError(['هناك خطاء ..برجاء المحاوله مره اخري .. !']);
        return false;
    }

    public function getAll()
    {
        return $this->productRepo->getProducts();
    }

    public function getById($id)
    {
        $prod =  $this->productRepo->product($id);

        if(!empty($prod))
            return $prod;


        $this->setError(['لا يوجد ذالك العنصر برجاء المحاوله مره اخري ... !']);
        return false;

    }
}