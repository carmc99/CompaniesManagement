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
    <div class="row">
        <div class="col-md-2">
            <a href="{{ action('CompanyController@create') }}" class="btn btn-primary">
                    <span class="icon">
                      <i class="fas fa-plus-circle"></i>
                    </span>
                Nueva empresa
                </a>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12">
                <table id="dataTable" class="table table-striped table-bordered table-hover table-sm">
                    <thead class="thead-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Web</th>
                        <th>Logo</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody class="">
                    @foreach($companies as $company)
                    <tr>
                        <td><a href="{{action('CompanyController@show', $company->id)}}">{{$company->name}}</a></td>
                        <td>{{$company->description}}</td>
                        <td>{{$company->email}}</td>
                        <td>{{$company->phone}}</td>
                        <td>{{$company->web_page}}</td>
                        <td>{{$company->image}}</td>
                        <td class="d-inline-flex p-0"><a href="{{ action('CompanyController@edit', $company->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ action('CompanyController@destroy', $company->id) }}" method="post">
                                @csrf
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {!! $companies->render() !!}
        </div>
    </div>

@endsection