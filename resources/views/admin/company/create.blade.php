@extends('adminlte::master')

@php
    $authType = $authType ?? 'login';
    $dashboardUrl = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home');

    if (config('adminlte.use_route_url', false)) {
        $dashboardUrl = $dashboardUrl ? route($dashboardUrl) : '';
    } else {
        $dashboardUrl = $dashboardUrl ? url($dashboardUrl) : '';
    }

    $bodyClasses = "{$authType}-page";

    if (! empty(config('adminlte.layout_dark_mode', null))) {
        $bodyClasses .= ' dark-mode';
    }
@endphp

@section('adminlte_css')
    @stack('css')
    @yield('css')
@stop

@section('classes_body'){{ $bodyClasses }}@stop

@section('body')
    <div class="container">

    <br>
    <center>
        <img src="{{ asset('images/logo_hyl.jpg') }}" alt="logo" width="300px" class="img-fluid">
    </center>


        

        <div class="row">
            <div class="col-md-12">
         {{-- Card Box --}}
        <div class="card {{ config('adminlte.classes_auth_card', 'card-outline card-primary') }}"
        style="box-shadow: 10px 0px 10px 0px #cccccc  ">

            
                <div class="card-header {{ config('adminlte.classes_auth_header', '') }}">
                    <h3 class="card-title float-none text-center">
                        Registro de Empresa
                    </h3>
                </div>
            

            {{-- Card Body --}}
            <div class="card-body {{ $authType }}-card-body {{ config('adminlte.classes_auth_body', '') }}">
                <form action="">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="name">Logo</label>
                                <input type="file" name="name" id="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="Country">Pais</label>
                                        <select name="Country" id="Country" class="form-control">
                                            <option value="">Seleccione un pais</option>
                                            <option value="1">Peru</option>
                                            <option value="2">Chile</option>
                                            <option value="3">Argentina</option>
                                            <option value="4">Brasil</option>
                                            <option value="5">Colombia</option>
                                            <option value="6">Ecuador</option>
                                            <option value="7">Mexico</option>
                                            <option value="8">Venezuela</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="company_name">Nombre de la empresa</label>
                                        <input type="text" name="company_name" id="company_name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="type_company">Tipo de empresa</label>
                                        <input type="text" name="type_company" id="type_company" class="form-control">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nit">NIT</label>
                                        <input type="text" name="nit" id="nit" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="phone">Telefono</label>
                                        <input type="text" name="phone" id="phone" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="email">Correo</label>
                                        <input type="email" name="email" id="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="city">Ciudad</label>
                                        <input type="text" name="city" id="city" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="department">Departamento</label>
                                        <input type="text" name="department" id="department" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="neighborhood">Barrio</label>
                                        <input type="text" name="neighborhood" id="neighborhood" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="address">Direccion</label>
                                        <input type="address" name="address" id="address" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="postal_code">Codigo Postal</label>
                                        <input type="text" name="postal_code" id="postal_code" class="form-control">
                                    </div>
                                </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            {{-- Card Footer --}}
            @hasSection('auth_footer')
                <div class="card-footer {{ config('adminlte.classes_auth_footer', '') }}">
                    @yield('auth_footer')
                </div>
            @endif

        </div>


        </div>
    </div>
@stop

@section('adminlte_js')
    @stack('js')
    @yield('js')
@stop
