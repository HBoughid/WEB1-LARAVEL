@extends('layouts.app')

@section('content')
    <form action="{{route('articles.store')}}" method="POST">
        {{csrf_field()}}

        <div class="form-group">
            <select name="user_id" class="form-control">
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <input type="text" name="title" class="form-control">
        </div>

        <div class="form-group">
            <textarea name="content" class="form-control"></textarea>
        </div>

        <input type="submit">
    </form>    
@endsection