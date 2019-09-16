@extends('layouts.app')
@section('title','Actualizar registro')

@section('content')
    <div class="card-body">
        <form class="form-horizontal" method="post" action="{{action('EmployeeController@update', $employee->id)}}">
            @csrf
            {!! method_field('put') !!}
            <label for="input-title" class="control-label">
                <h5 class="m-0 font-weight-bold text-primary">Actualizar registro: {{ $employee->first_name . " " . $employee->last_name }}</h5>
            </label>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <label for="input-first-name" class="control-label">Nombre:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="first_name" name="first_name" required value="{{$employee->first_name}}">
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <label for="input-last-name" class="control-label">Apellido:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="last_name" name="last_name" required value="{{$employee->last_name}}">
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <label for="input-phone" class="control-label">Telefono:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="phone" name="phone" value="{{$employee->phone}}">
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <label for="input-email" class="control-label">Email:</label>
                    <div class="col-md-9">
                        <input type="email" class="form-control" id="email" name="email" value="{{$employee->email}}">
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <label for="input-company" class="control-label">Empresa:</label>
                    <div class="col-md-9">
                        <select class="form-group" name="company_name" id="company_name">
                            @foreach ($companies as $value)
                                <option value="{{ $value }}">{{ $value }}</option>
                            @endforeach
                        </select>

                    </div>
                </li>

            </ul>

            <button type="submit" class="btn btn-primary">Guardar</button>

        </form>
    </div>

@endsection