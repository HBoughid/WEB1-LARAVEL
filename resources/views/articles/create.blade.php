@extends('layouts.app')

@section('content')
    <form action="/articles" method="POST">
        {{csrf_field()}}
        <input type="text" name="title">
        <input type="submit">
    </form>    
@endsection