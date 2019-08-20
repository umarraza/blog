@extends('layouts.app')

@section('title', 'projects')

@section('content')
    <h1>{{ __('message.projects') }}</h1>

    <table class="table table-sm table-dark">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Trait</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        @php $count=1; @endphp
        @foreach($projects as $project)
            <tr>
                <th scope="row">1</th>
                <td><?= $project->title ?></td>
                <td><?= $project->description ?></td>
                <td>{!! $project->printThis() !!}</td>

                <td>
                    <a href="{{ route('projects.edit', [$project->id]) }}" type="button" class="btn btn-sm btn-primary">Update</a>
                    <a href="{{ route('projects.show', [$project->id]) }}" type="button" class="btn btn-sm btn-primary">View</a>
                    <form action="{{ route('projects.destroy', [$project->id]) }}" method="POST" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @php $count++; @endphp
            @endforeach
        </tbody>
    </table>
@endsection

<!-- Passing id with named route,
    more than one parameters -> ['id'=>1])
    for single parameter -> (1) ('projects.edit', 1) (2) ('projects.edit', [$id])
-->
