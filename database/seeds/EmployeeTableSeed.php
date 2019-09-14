<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Employee;

class EmployeeTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee = new Employee();
        $employee->first_name = "Arturo";
        $employee->last_name = "Gonzales";
        $employee->email = "arturo.gonzales@nafanto.com";
        $employee->phone = "57 324453456";
        $employee->company_id = 0;
        $employee->created_at = Carbon::now();
        $employee->updated_at = Carbon::now();
        $employee->saveOrFail();

        $employee = new Employee();
        $employee->first_name = "Vannesa";
        $employee->last_name = "Toro";
        $employee->email = "vanessa.toro@nafanto.com";
        $employee->phone = "57 324435364";
        $employee->company_id = 0;
        $employee->created_at = Carbon::now();
        $employee->updated_at = Carbon::now();
        $employee->saveOrFail();
    }
}
