<?php

use Carbon\Carbon;
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
        $company->image = "";
        $company->web_page = "www.nafanto.com";
        $company->created_at = Carbon::now();
        $company->updated_at = Carbon::now();
        $company->saveOrFail();
    }
}
