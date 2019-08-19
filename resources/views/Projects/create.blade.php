@extends('layouts.app')

@section('title', 'Create Project')

@section('content')

    <h1>Create project</h1>

    <form action="/blog/projects" method="POST">
        {{ csrf_field() }}
        <div>
            <label for="">Title</label> <br>
            <input type="text" name="title" placeholder="title">
        </div>
        <br>
        <div>
            <label for="">Decsription</label> <br>
            <textarea name="description" cols="22" rows="5"></textarea>
        </div>

        <div>
            <input type="submit" value="submit">
        </div>

    </form>

@endsection

