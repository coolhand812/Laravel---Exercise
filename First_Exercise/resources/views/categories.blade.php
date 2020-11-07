@extends('layouts.app')

@section('content')

    <h1>Category {{$id}}</h1>

    <ul>
    @foreach($items as $item)
        <li>{{$item}}</li>
    @endforeach
    </ul>

@endsection

@section('content')

    {{$title}}

@endsection

@section('scripts')

    <script>
        alert('hola mundo');
    </script>

@endsection