<?php

namespace App\Http\Controllers;

use App\Company;
use App\Employee;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::orderBy('ID', 'DESC')->paginate(10);
        return view('company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //$company = Company::findOrfail($id);

        $this->validate($request, [
            'name' => 'required|min:2|max:200',
            #'name' => 'min:3|max:255|unique:companies,name,' . $company->id,
            'description' => 'max:2000',
            'phone' => 'required|min:3|max:30',
            'web_page' => 'max:50',
            'email' => 'max:20',

        ]);

        $company = new Company();
        $company->name = $request->input('name');
        $company->description = $request->input('description');
        $company->phone = $request->input('phone');
        $company->web_page = $request->input('web_page');
        $company->email = $request->input('email');
        #$company->image = $request->input('image');
        $company->created_at = Carbon::now();
        $company->updated_at = Carbon::now();
        $company->save();

        $companies = Company::orderBy('ID', 'DESC')->paginate(10);
        return redirect()->action('CompanyController@index', compact('companies'))->with('message', 'Se ha registrado una nueva empresa ' . $company->name);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::findOrfail($id);
        $employees = Employee::where('company_name', $company->name)
                ->orderBy('id', 'desc')
                ->paginate(10);
        return view('company.show', compact('company', 'employees'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::findOrfail($id);
        return view('company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $company = Company::findOrfail($id);

        $this->validate($request, [
            'name' => 'required|min:2|max:200',
            #'name' => 'min:3|max:255|unique:companies,name,' . $company->id,
            'description' => 'max:2000',
            'phone' => 'required|min:3|max:30',
            'web_page' => 'max:50',
            'email' => 'max:20',

        ]);

        $company->name = $request->input('name');
        $company->description = $request->input('description');
        $company->phone = $request->input('phone');
        $company->web_page = $request->input('web_page');
        $company->email = $request->input('email');
        #$company->image = $request->input('image');
        $company->updated_at = Carbon::now();
        $company->update();

        return redirect()->action('CompanyController@index', compact('companies'))->with('message', 'Se actualizo el registro ' . $company->name . ' correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Company::findOrfail($id)->delete();
        return redirect()->back();
    }
}
