<?php

namespace App\Http\Controllers;
use \App\Models\Repayment;
use App\Models\User;
use Illuminate\Http\Request;
use DB;

class RepaymentController extends Controller
{
    public function index()
    {
        //return Repayment::all();
    }

    public function show($id)
    {

        $user = User::findOrFail($id);
        $id  = $user->id;
      //  dd($id);
        $repayments =DB::table('loans')
                ->join('repayments','loans.id', '=', 'repayments.id')
                ->join('users', 'loans.users_id', '=', 'users.id')
                  ->where('loans.users_id',$id)
            ->select('users.id','users.name','repayments.principal','repayments.paid_on', 'repayments.statement', 'repayments.interest')
                ->get();
        return $repayments;
    }

}
