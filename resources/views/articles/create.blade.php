@extends('layouts.app')

@section('content')
    <h1>Ajouter un article</h1>
    {!! Form::open(['route' => 'articles.store', 'method' => 'POST']) !!}
        <div class="form-group">
            {!! Form::select('user_id', $users, null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::text('title', null, [
                'class' => 'form-control',
                'placeholder' => 'Nom de l\'article'
            ]) !!}
        </div>

        <div class="form-group">
            {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Envoyer', ['class' => 'btn btn-block']) !!}

    {!! Form::close() !!}
@endsection