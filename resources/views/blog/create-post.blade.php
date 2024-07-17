@extends('layouts.app')

@section('content')
<form action="{{ route('blog') }}" name='blog' method="POST">
    @csrf
    <div class="row flex-row justify-content-center">
        <div class="col-md-12 d-flex justify-content-center mb-5">
            <h1>Crear nuevo post</h1>
        </div>
        <div class="col-3 d-flex flex-column justify-content-center">
            <div class="mb-3">
                <label for="id" class="d-block">Id</label>
                <input type="text" class="form-control" name="id" id="id">
            </div>
            <div class="mb-3">
                <label for="name" class="d-block">Título</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="mb-3">
                <label for="description" class="d-block">Descripción</label>
                <input type="text" class="form-control" style="height: 60px;" name="description" id="description">
            </div>
            <div class="mb-3">
                <label for="btn" class="d-block">Nombre del boton</label>
                <input type="text" class="form-control" name="btn" id="btn">
            </div>
            <input type="submit" value="Enviar">
        </div>
    </div>
    </div>
</form>
@endsection
