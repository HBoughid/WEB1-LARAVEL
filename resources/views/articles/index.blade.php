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
        <a href="{{route('articles.edit', $post->id)}}">
            <button>Editer l'article</button>
        </a>
        <form action="{{route('articles.destroy', $post->id)}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <button>Supprimer l'article</button>
        </form>


    @endforeach

@endsection