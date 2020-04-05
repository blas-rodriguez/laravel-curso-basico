<?php

namespace App\Http\Controllers;
use App\ExpenseReport;
use App\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        // return view('users.index', [
        //     'users' => $users
        // ]);

        return view('expenseReport.index',[  
            'users' => $users,          
            'expenseReports' => ExpenseReport::all()
        ]);
        //return redirect('/expense_reports/index');
    }
}
