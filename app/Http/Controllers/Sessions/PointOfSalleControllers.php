<?php


namespace App\Http\Controllers\Sessions;


use App\Http\Controllers\Controller;
use App\Pos\Services\Products\ProductServices;
use Illuminate\Http\Request;

class PointOfSalleControllers extends Controller
{

    private $product ;

    public function __construct()
    {
        $this->product  = new ProductServices();
    }

    public function Point()
    {
        $products = $this->product->getWithPage();

        return view('admin.session.point',compact('products'));
    }

    public function index()
    {
        $products = $this->product->getWithPage();

        return view('admin.session.point',compact('products'));

    }

    public function fetchData(Request $request)
    {
        if($request->ajax())
        {
            $serach = $request->get('serach');
            $products = $this->product->getWithPage($serach);

            return view('admin.session.product',compact('products'));
        }
    }
}