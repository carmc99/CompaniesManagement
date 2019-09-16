@extends('layouts.app')
@section('title','Empleados')

@section('content')
    @if(session('message'))
        <div class="form-group">
            <div class="alert alert-success">
                <span> {{session('message')}} </span>
            </div>
        </div>
    @endif
    @if(!empty($errors->first()))
        <div class="form-group">
            <div class="alert alert-danger">
                <span>{{ $errors->first() }}</span>
            </div>
        </div>
    @endif
    <label for="input-sede" class="control-label">
        <h5 class="m-0 font-weight-bold text-primary">Listado general de empleados</h5>
    </label>
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <table id="dataTable" class="table table-striped table-bordered table-hover table-sm">
                <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Empresa</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody class="">
                @foreach($employees as $employee)
                    <tr>
                        <td>{{$employee->first_name}}</td>
                        <td>{{$employee->last_name}}</td>
                        <td>{{$employee->email}}</td>
                        <td>{{$employee->phone}}</td>
                        <td>{{$employee->company_name}}</td>
                        <td class="d-inline-flex p-0"><a href="{{ action('EmployeeController@edit', $employee->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ action('EmployeeController@destroy', $employee->id) }}" method="POST">
                                {{method_field('DELETE')}}
                                @csrf
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $employees->render() !!}
        </div>
    </div>

@endsection