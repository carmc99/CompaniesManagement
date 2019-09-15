@extends('layouts.app')
@section('title','Empresas')

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
    <div class="list-group">
        <a class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1 font-weight-bold text-primary">{{$company->name}}</h5>
                <small>Telefono: {{$company->phone}}</small>
            </div>
            <p class="mb-1">{{$company->description}}</p>
            <small>{{$company->email}}</small>
        </a>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#employee-modal">
                    <span class="icon">
                      <i class="fas fa-plus-circle"></i>
                    </span>
                Nuevo empleado
            </button>
        </div>
    </div>
    @include('employee.register')
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow ">
                <div class="card-body m-0 p-0">
                    <table id="dataTable" class="table table-striped table-bordered table-hover table-sm">
                        <thead class="thead-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Telefono</th>
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
                </div>
            </div>
        </div>
    </div>

@endsection