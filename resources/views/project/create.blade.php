@extends('layouts.app')

@section('title', 'Create Project')

@section('content')

    <h1>Create project</h1>

    <div class="row">
        <div class="col-md-4 col-md-offset-1">
            <form action="" id="projectsForm">
                @csrf
                <div class="form-group">
                    <label for="formGroupExampleInput">Title</label>
                    <input type="text" class="form-control required" name="title" id="title" placeholder="">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Decsription</label>
                    <textarea class="form-control" name="description" id="description" cols="22" rows="5"></textarea>
                </div>
                <div>
                    <input type="submit" class="btn btn-lg btn-primary required" value="submit" id="btn">
                </div>
            </form>
        </div>
    </div>


@endsection

<script>

window.onload = () => {

    $('#btn').on('click', () => {

        $( "#projectsForm" ).submit(function( event ) {

            if ( $(".required").val().length === 0 ) {

                event.preventDefault();
            } else {

                title = $('#title').val();
                description = ('#description').val();

                var title = document.getElementById('title').value;
                var params = "title"+title;

                var xhr = new XMLHttpRequest();
                xhr.open('POST', "{{route('projects.store')}}");
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

                xhr.onload = () => {
                    var data = JSON.parse(this.respopnseText);
                    console.log(data);
                }
                xhr.send(params);
                event.preventDefault();

            }
        });
    });
}

</script>
