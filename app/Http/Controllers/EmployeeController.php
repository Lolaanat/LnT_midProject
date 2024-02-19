<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function AddEmployee() {
        return view('addEmployee');
    }

    public function EmployeeList(Request $req){
        Employee::create([
            'name' => $req->name,
            'age' => $req->age,
            'address' => $req->address,
            'phoneNumber' => $req->number,
        ]);

        return redirect('/');
    }

}