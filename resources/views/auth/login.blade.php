<!DOCTYPE html>
<html>

<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
<link rel="stylesheet" href="{{ asset('/css/auth/login.css') }}">
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<body>
@if(session()->has('iniciaSesion'))
    <div class="alert alert-warning" align="center">
        <a class="alert-link">{{session('iniciaSesion')}}</a>
    </div>
@endif
<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <img src="{{ asset('/images/logo.png') }}" id="icon" alt="logo"/>
            <h3>{{ config('app.name', 'Wiki') }}</h3>
        </div>

        <!-- Login Form -->
        <form method="POST" action="{{route("login")}}">
            {!! csrf_field() !!}

            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}} ">
                <input value="{{old('email')}}" type="text" id="email" class="fadeIn second" name="email" placeholder="Email">
                <div class="col-md-12">
                    {!! $errors->first('email', '<span class="text-danger">:message</span>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}} ">
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="Contraseña">
                <div class="col-md-12">
                    {!! $errors->first('password', '<span class="text-danger">:message</span>') !!}
                </div>
            </div>

            <input type="submit" class="fadeIn fourth" value="Iniciar sesión">

        </form>
    </div>
</div>

</body>
</html>
