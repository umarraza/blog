@extends('layouts.app')

@section('title', 'projects')

@section('content')
<div class="card">
    <div class="card-header">
        Project
    </div>
    <div class="card-body">
        <h5 class="card-title">{{ $project->title }}</h5>
        <p class="card-text">{{ $project->description }}.</p>
        <a href="{{ route('projects.index') }}" class="btn btn-primary">Show All</a>
    </div>
</div>

@if($project->tasks->count()) {{-- If atleast have one task, then proccess Extra div removing --}}
    <div>

        @foreach ($project->tasks as $task)

            <form action="/blog/tasks/{{ $task->id }}" method="POST">
                @method('PATCH')
                @csrf
                <label for="completed" class="checkbox">
                    <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                    {{ $task->description }}
                </label>
            </form>

        @endforeach

    </div>
@endif

@endsection
