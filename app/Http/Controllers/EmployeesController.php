<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeesController extends Controller
{
    public function index()
    {
        $allEmployees = DB::table('employees')->orderBy('salary')->get();

        $salary400Employees = DB::table('employees')->where('salary', '400')->orWhere('id', '>', '4')->get();

        $employees3 = DB::table('employees')->where('id', '3')->first();

        $NameEmployees5 = DB::table('employees')->select('name')->where('id', '5')->first();

        $employees400Prog = DB::table('employees')->whereBetween('salary', [400, 800])->orWhere('position', 'программист')->get();

        $sumSalary = DB::table('employees')->sum('salary');

        $sumSalaryPosition = DB::table('employees')->select('position', DB::raw('SUM(salary) as total_salary'))
            ->groupBy('position')
            ->get();

        $day25 = DB::table('employees')->whereRaw('DAY(birthday) = ?', 25)->get();

        $year1990 = DB::table('employees')->whereRaw('YEAR(birthday) = ?', 1990)->get();

        return view('Employees.index', [
            'allEmployees' => $allEmployees,
            'salary400Employees' => $salary400Employees,
            'employees3' => $employees3,
            'NameEmployees5' => $NameEmployees5,
            'employees400Prog' => $employees400Prog,
            'sumSalary' => $sumSalary,
            'sumSalaryPosition' => $sumSalaryPosition,
            'day25' => $day25,
            'year1990' => $year1990


        ]);
    }
}
