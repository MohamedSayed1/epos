<?php


namespace App\Http\Controllers;


use App\Pos\Services\Expenses\ExpensesServices;
use Illuminate\Http\Request;

class ReportsController extends Controller
{

    private $expServ;

    public function __construct()
    {
        $this->expServ = new ExpensesServices();
    }


    public function expensesReport(Request $request)
    {
        $expenses = $this->expServ->serch($request->all());
        $total =$expenses->sum('prices');
        return view('admin.reports.expenses')
            ->with('expenses',$expenses)
            ->with('total',$total);
    }
}