@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            @if(isset($name) && $name!= '')
            <h1>{{ $name }}</h1>
            @endif
            @if(isset($description) && $description!= '')
            <p>{{ $description }}</p>
            @endif
        </div>
    </div>
@endsection
