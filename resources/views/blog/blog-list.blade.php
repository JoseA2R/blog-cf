@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a class="btn btn-primary" href="{{ route('create') }}">Crear Post</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h1>Mi primer blog</h1>
                <p>Este es mi primer Blog</p>
            </div>
        </div>
        <div class="row">
            @foreach ($news as $info)
            <div class="col-3">
                <div class="card">
                    <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $info['name'] }}</h5>
                        <p class="card-text">{{ $info['description'] }}</p>
                        <form action="{{ route('specific-post') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $info['id'] }}">
                            <input type="hidden" name="name[]" value={{ $info['name'] }}>
                            <input type="hidden" name="description[]" value={{ $info['description'] }}>
                            <button type="submit" class="btn btn-primary">{{ $info['btn'] }}</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
