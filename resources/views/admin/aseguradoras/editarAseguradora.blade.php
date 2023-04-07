@extends('layouts.layout')
@section('content')
    <div class="container" style="margin-top: 50px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="border:3px solid #eee">
                    <div class="card-header" style="text-align: center"><h1>Editar aseguradora</h1></div>

                    <div class="card-body">
                        <form action="{{$insurance['id']}}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="cif" class="col-md-4 col-form-label text-md-right">CIF</label>

                                <div class="col-md-6">
                                    <input type="text" name="cif" id="cif" value="{{$insurance['CIF']}}" readonly class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="insuranceName" class="col-md-4 col-form-label text-md-right">Nombre</label>

                                <div class="col-md-6">
                                    <input type="text" name="insuranceName" id="insuranceName" value="{{$insurance['name']}}" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="insuranceAddress" class="col-md-4 col-form-label text-md-right">Dirección</label>

                                <div class="col-md-6">
                                    <input type="text" name="insuranceAddress" id="insuranceAddress" value="{{$insurance['address']}}" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" name="edit">Editar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="{{url('/paginaPrincipal')}}">Pagina principal</a>
@endsection