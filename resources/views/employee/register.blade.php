
<div class="modal fade bd-example-modal-lg" tabindex="-1" id="employee-modal" role="dialog" aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="card-body">
                <form action="{{ action('EmployeeController@store') }}" method="post">
                    {{ csrf_field() }}
                    @if(session()->has('success'))
                        <div class="form-group">
                            <div class="alert alert-success">
                                <span> {{session('success')}} </span>
                            </div>
                        </div>

                    @endif
                    @if(session()->has('error'))
                        <div class="form-group">
                            <div class="alert alert-danger">
                                <span> {{session('error')}} </span>
                            </div>
                        </div>
                    @endif
                    <label for="input-sede" class="control-label">
                        <h5 class="m-0 font-weight-bold text-primary">Registrar nuevo empleado:</h5>
                    </label>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <label for="input-first-name" class="control-label">Nombre:</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="first_name" name="first_name" required>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <label for="input-last-name" class="control-label">Apellido:</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="last_name" name="last_name" required>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <label for="input-phone" class="control-label">Telefono:</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="phone" name="phone" required >
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <label for="input-email" class="control-label">Email:</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" id="email" name="email" >
                            </div>
                        </li>
                        <input type="hidden" class="form-control" id="company_name" name="company_name" value="{{$company->name}}">
                    </ul>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

