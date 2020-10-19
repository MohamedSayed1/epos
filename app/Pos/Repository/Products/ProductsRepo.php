<?php


namespace App\Pos\Repository\Products;


use App\Pos\Model\Products\Products;


class ProductsRepo
{
    private $product;

    public function __construct()
    {
        $this->product = new Products();
    }

    public function add($data)
    {
        $this->product->name = $data['name'];
        $this->product->parcod = $data['parcod'];
        $this->product->count = $data['count'];
        $this->product->pruch_prices = $data['pruch_prices'];
        $this->product->prices = $data['prices'];
        $this->product->photo = isset($data['photo']) ? $data['photo'] : null;
        $this->product->discount = isset($data['discount']) ? $data['discount'] : null;

        return $this->product->save();
    }


    public function updated($data)
    {
        $pro = $this->product->find($data['id']);

        $pro->name = $data['name'];
        $pro->parcod = $data['parcod'];
        $pro->count = $data['count'];
        $pro->pruch_prices = $data['pruch_prices'];
        $pro->prices = $data['prices'];
        $pro->discount = $data['discount'];
        if (!empty($data['photo'])) {
            $this->delPotos($pro->photo);
            $pro->photo = $data['photo'];
        }


        return $pro->save();
    }

    public function getProducts()
    {
        return $this->product->get();
    }


    public function product($id)
    {
        return $this->product->find($id);
    }

    public function delPotos($path)
    {
        \File::delete('upload' . '/' . $path);
    }
}