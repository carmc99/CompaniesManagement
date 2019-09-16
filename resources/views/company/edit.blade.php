@extends('layouts.app')
@section('title','Actualizar registro')


@section('content')
    <div class="card-body">
        <form class="form-horizontal" method="post" action="{{action('CompanyController@update', $company->id)}}">
            @csrf
            {!! method_field('put') !!}
            <label for="input-title" class="control-label">
                <h5 class="m-0 font-weight-bold text-primary">Actualizar empresa: {{ $company->name }} </h5>
            </label>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <label for="input-name" class="control-label">Nombre:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="name" name="name" required value="{{$company->name}}">
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <label for="input-description" class="control-label">Descripcion:</label>
                    <div class="col-md-9">
                        <textarea type="text" class="form-control" id="description" name="description">{{$company->description}}</textarea>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <label for="input-phone" class="control-label">Telefono:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="phone" name="phone" required value="{{$company->phone}}">
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <label for="input-web-page" class="control-label">Pagina web:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="web_page" name="web_page" value="{{$company->web_page}}">
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <label for="input-email" class="control-label">Email:</label>
                    <div class="col-md-9">
                        <input type="email" class="form-control" id="email" name="email" value="{{$company->email}}">
                    </div>
                </li>

            </ul>

            <button type="submit" class="btn btn-primary">Guardar</button>

        </form>
    </div>

@endsection