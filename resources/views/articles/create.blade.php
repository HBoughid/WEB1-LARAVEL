@extends('layouts.app')

@section('content')
    <form action="{{route('articles.store')}}" method="POST">
        {{csrf_field()}}
        <input type="hidden" name="user_id" value="2">
        <input type="text" name="title">
        <textarea name="content"></textarea>
        <input type="submit">
    </form>    
@endsection