<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use \App\Users;

class Loan extends Model {
    protected $fillable = [
        "users_id",
        "business",
        "description",
        "amount",
        "term",
        "grade",
        "interest_rate",
        "payment"
    ];



}
