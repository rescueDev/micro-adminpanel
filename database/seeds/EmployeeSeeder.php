<?php

use App\Company;
use App\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Employee::class, 40)
            ->make()
            ->each(function ($employee) {
                $company = Company::inRandomOrder()->first();
                $employee->company()->associate($company);
                $employee->save();
            });
    }
}
