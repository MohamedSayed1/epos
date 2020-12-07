<?php


namespace App\Http\Controllers;


use App\Pos\Services\Expenses\ExpensesServices;
use App\Pos\Services\Expenses\SplitExpensesServices;

class HomeControllers extends Controller
{

    private $expenses;

    public function __construct()
    {
        $this->expenses = new SplitExpensesServices();
    }

    public function index()
    {
        if(Auth()->user()->type == "admin")
        {
            $expenses = $this->expenses->gets();
            return view('admin.layout.admin')
                ->with('expenses',$expenses);
        }

            return redirect('dashboard/session');


    }
}