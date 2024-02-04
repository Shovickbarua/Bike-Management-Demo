<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Barryvdh\DomPDF\Facade\Pdf;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expenses = Expense::all();
        $ex =Expense::sum('amount');

        return view('expenses.expense_list',compact('expenses','ex'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenses.add_expense');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'ex_name'   => 'required',
                'amount'    => 'required',
                'dob'       => 'required'
            ],
        );

        $expense = new Expense();
        $expense->ex_name = $request->ex_name;
        $expense->amount = $request->amount;
        $expense->dob = $request->dob;
        $expense->save();

        return redirect(route('expense.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function ex_reports(Request $request)
    {
        if(Session::has("fdob")){
            Session::forget('fdob','ldob');
        }else{

        }
        $expenses =Expense::whereBetween('dob',[$request->fdob, $request->ldob])
                    ->get();
        $ex  =Expense::whereBetween('dob',[$request->fdob, $request->ldob])
                    ->sum('amount');
            Session::put([
                'fdob'     => $request->fdob,
                'ldob'     => $request->ldob
            ]);

        return view('expenses.expense_bydate',compact('expenses','ex'));
    }
    
    /*Search Sale by date pdf */
    public function ex_pdf(Request $request)
    {
        $expenses =Expense::whereBetween('dob',[session('fdob'), session('ldob')])
                    ->get();
        $ex  =Expense::whereBetween('dob',[session('fdob'), session('ldob')])
                    ->sum('amount'); 
        $path = base_path('Capture.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic ='data:image/'.$type . ';base64,' .base64_encode($data); 
        $pdf = Pdf::setOptions([
            'isHtml5ParserEnabled' => true,
            'isRemoteEnabled' => true
        ])->loadView('expenses.expense_report', compact('expenses','ex','pic'));
        //$pdf = Pdf::loadView('reports.product_report', compact('products','profit'));
        return $pdf->download('expense_report.pdf');
    }

    public function show(Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $expense = Expense::find($id);
        return view('expenses.expense_edit',compact('expense'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $expense = Expense::find($id);
        $expense->ex_name = $request->ex_name;
        $expense->amount = $request->amount;
        $expense->dob = $request->dob;
        $expense->save();

        return redirect(route('expense.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expense $expense)
    {
        Expense::destroy($expense->id);
        return redirect(route('expense.index'));
    }
}
