@extends('layouts.app')

@section('title', 'Edit Project')

@section('content')

    <h1 class="title">Edit Project</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-offset-2">
                <form action="{{ route('projects.update', [$project->id]) }}" method="POST">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="formGroupExampleInput">Title</label>
                        <input type="text" class="form-control" name="title" id="formGroupExampleInput" placeholder="Example input" value="{{ $project->title }}">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Description</label>
                        <textarea class="form-control" name="description" id="" cols="30" rows="5" placeholder="Description">{{ $project->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection

{{--

    method_field():

    The method_field function generates an HTML hidden input field containing the spoofed value of the form’s HTTP verb.
    Since HTML forms can’t make PUT, PATCH, or DELETE requests, you will need to add a hidden _method (method_field) field to spoof these HTTP verbs.

    e.g {{ method_field('PATCH') }}, {{ method_field('DELETE') }}


    --}}
