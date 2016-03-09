@extends('layouts.app')

@section('content')
    <h1>Edit de l'article n'° {{ $post->id }}</h1>
    {!! Form::open(['route' => ['articles.update', $post->id], 'method' => 'PUT']) !!}
        <div class="form-group">
            {!! Form::select('user_id', $users, $post->user_id, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::text('title', $post->title, [
                'class' => 'form-control',
                'placeholder' => 'Nom de l\'article'
            ]) !!}
        </div>

        <div class="form-group">
            {!! Form::textarea('content', $post->content, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Envoyer', ['class' => 'btn btn-block']) !!}

    {!! Form::close() !!}
@endsection