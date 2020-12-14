<?php

namespace Database\Seeders;

use App\Models\Loan;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use DB;

class RepaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now();
        $dateNow = $dt->toDateTimeString();
        $file = \Illuminate\Http\UploadedFile::fake()->create('testtwo.pdf')->store('statement');


           $repayments =  [
            'loan_id'=>$this->getRandomUserId(),
            'instalment'=>rand(10, 1000),
            'principal'=>floatval(123.9),
            'interest'=>floatval(123.4),
            'instalment_date'=> Carbon::create('2020', '01', '01'),
            'is_paid'=> rand(1,1),
            'paid_on'=>  $dateNow,
            'statement'=>  $file,

            ];
           DB::table('repayments')->insert($repayments);

    }

    private function getRandomUserId() {
        $loan = Loan::inRandomOrder()->first();
        return $loan->id;
    }
}
