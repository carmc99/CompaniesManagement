<?php

namespace App\Http\Controllers;

use App\Company;
use App\Employee;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::orderBy('ID', 'DESC')->paginate(10);
        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('employee.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request, [
            #'email' => 'min:3|max:50|unique:employees,email,' . $employee->id,
            'last_name' => 'required|min:1|max:20',
            'first_name' => 'required|min:3|max:20',
            'phone' => 'max:50',
            'company' => 'max:200',
        ]);

        $employee = new Employee();
        $employee->first_name = $request->input('first_name');
        $employee->last_name = $request->input('last_name');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->company_name = $request->input('company_name');
        $employee->created_at = Carbon::now();
        $employee->updated_at = Carbon::now();
        $employee->saveOrFail();

        $employees = Employee::orderBy('ID', 'DESC')->paginate(10);
        return redirect()->back()->with('message', 'Registro ingresado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::findOrfail($id);
        return view('employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::findOrfail($id);
        $companies = Company::select('name')->orderBy('name', 'desc')->pluck('name');
        return view('employee.edit', compact('employee', 'companies'));
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
        $employee = Employee::findOrfail($id);

        $this->validate($request, [
           # 'email' => 'min:3|max:50|unique:employees,email,' . $employee->id,
            'last_name' => 'min:1|max:20',
            'first_name' => 'min:3|max:20',
            'phone' => 'max:50',
            'company_name' => 'max:200',
        ]);

        $employee->first_name = $request->input('first_name');
        $employee->last_name = $request->input('last_name');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->company_name = $request->input('company_name');
        $employee->updated_at = Carbon::now();
        $employee->update();

        $employees = Employee::orderBy('ID', 'DESC')->paginate(10);
        return redirect()->back()->with('message', 'Se actualizo el registro del empleado: ' . $employee->first_name . " " . $employee->last_name . ' correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::findOrfail($id)->delete();
        return redirect()->back();
    }
}
