<?php

namespace App\Http\Controllers;

use App\Company;
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
        return view('company.index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //$company = Company::findOrfail($id);

        $this->validate($request, [
            'name' => 'required|min:3|max:255',
            #'name' => 'min:3|max:255|unique:companies,name,' . $company->id,
            'description' => 'min:1|max:2000',
            'phone' => 'min:3|max:20',
            'web_page' => 'min:3|max:20',
            'email' => 'min:3|max:20',
            'image' => 'min:3|max:20',

        ]);

        $company = new Company();
        $company->name = $request->input('name');
        $company->description = $request->input('description');
        $company->phone = $request->input('phone');
        $company->web_page = $request->input('web_page');
        $company->email = $request->input('email');
        $company->image = $request->input('image');
        $company->created_at = Carbon::now();
        $company->updated_at = Carbon::now();
        $company->saveOrFail();

        return redirect()->action('CompanyController@index', compact('company'))->with('message', 'Registro guardado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::findOrfail($id);
        return view('company.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::findOrfail($id);
        return view('company.edit', compact(company));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
