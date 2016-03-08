@extends('layouts.app')

@section('content')
    <h1>Edit de l'article n'° {{ $id }}</h1>
    <form action="/articles" method="POST">
        {{csrf_field()}}
        <input type="text" name="title">
        <input type="submit">
    </form>
@endsection