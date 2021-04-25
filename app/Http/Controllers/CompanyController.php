<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function listCompanies()
    {
        $companies = Company::all();
        return view('internals.companies', compact('companies'));
    }

    public function store(Request $req)
    {
        $data = $req->validate([
            'name' => 'required|min:2',
            'phone' => 'required|min:6'
        ]);

        Company::create($data);

        return back();
    }
}
