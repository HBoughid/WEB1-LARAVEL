@extends('layouts.app')

@section('content')
    <h1>Liste des articles</h1>
    <hr>

    @foreach($posts as $post)
        <h3>{{$post->title}}</h3>
        <p>{{$post->content}}</p>
        <a href="{{route('articles.show', $post->id)}}">
            <button>Voir l'article</button>
        </a>
    @endforeach

@endsection