@extends('layouts.app')

@section('content')
    <h1>Edit de l'article n'° {{ $post->id }}</h1>
    <form action="{{route('articles.update', $post->id)}}" method="POST">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <select name="user_id" class="form-control">
                @foreach($users as $user)
                     <option {{ ($user->id == $post->user_id) ? 'selected="selected"' : '' }} value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <input type="text" name="title" value="{{$post->title}}" class="form-control">
        </div>

        <div class="form-group">
            <textarea name="content" class="form-control">{{$post->content}}</textarea>
        </div>

        <input type="submit">
    </form>

@endsection