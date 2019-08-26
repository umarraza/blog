@extends('layouts.app')

@section('title', 'Create Project')

@section('content')

    <h1>Create project</h1>

    <div class="row">
        <div class="col-md-4 col-md-offset-1">
            <form action="/blog/projects" method="POST">
                @csrf
                <div class="form-group">
                    <label for="formGroupExampleInput">Title</label>
                    <input type="text" class="form-control" name="title" id="formGroupExampleInput" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Decsription</label>
                    <textarea class="form-control" name="description" cols="22" rows="5" required></textarea>
                </div>
                <div>
                    <input type="submit" class="btn btn-lg btn-primary" value="submit" id="btn">
                </div>
            </form>
        </div>
    </div>


@endsection

<script>

window.onload = () => {

    document.getElementById('btn').addEventListener('click', () => {

        var title = document.getElementById('formGroupExampleInput').value;
        var params = "title"+title;

        var xhr = new XMLHttpRequest();
        xhr.open('POST', "{{route('projects.store')}}");
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        xhr.onload = () => {
            var data = JSON.parse(this.respopnseText);
            console.log(data);
        }

        xhr.send(params);

    });

}

</script>
