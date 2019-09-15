@extends('layouts.app') @section('title','Inicio') @section('title-page-header',
'Dashboard') @section('content')
    <div class="row">
        @include('layouts.stats')
    </div>
    <div class="row">
        <div class="div.col-xl-12 col-md-12 mb-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="text-center">
                        <h6 class="m-0 font-weight-bold text-primary">Entradas recientes</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection