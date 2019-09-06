@extends('layouts.app')

@section('title', 'projects')

@section('content')
    @include('project.index')
@endsection
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script>

window.onload = () => {

    $('#btn').on('click', () => {

        var response;
        var url = "<?= route('projects.index') ?>";

        $.ajax({
            async: true,
            url: url,
            type: "GET",
            dataType : "text"
        })
        // Code to run if the request succeeds (is done);
        // The response is passed to the function
        .done(function( r ) {
            // var data = JSON.parse(response);
            // console.log(data);
            response = r;
            console.log(response);
        })
        console.log(response);
    });

}

</script>

