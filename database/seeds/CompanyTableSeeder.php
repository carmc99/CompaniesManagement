<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = new Company();
        $company->name = "NafantoIndustries";
        $company->description = "Facilitate Integrated Networks";
        $company->email = "nafanto@nafanto.com";
        $company->phone = "54 7943234";
    }
}
