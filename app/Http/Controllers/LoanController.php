<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index()
    {
        return Loan::all();
    }

    public function show($id)
    {
        return Loan::find($id);
    }

    public function store(Request $request)
    {
        return Loan::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $loan = Loan::findOrFail($id);
        $loan->update($request->all());

        return $loan;
    }

    public function delete(Request $request, $id)
    {
        $loan = Loan::findOrFail($id);
        $loan->delete();

        return 204;
    }
}
