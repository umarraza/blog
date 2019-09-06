@extends('layouts.app')

@section('title', 'projects')

@section('content')
    @include('project.index')
@endsection
<script>

    /*
        HmlHttpRequest (XHR) Object
        API in the form of an object having associated some properties with it.
        XHR object methods transfer data between client & server
        XHR object can work with data other than XML (JSON, Plain Text)
    */
    window.onload = () => {
        var btn = document.getElementById("btn");
        var projectContainer = document.getElementById("projects");

            btn.addEventListener('click', () => {

                // Create XHR Object
                var request = new XMLHttpRequest();

                // OPEN - Type, url, async => true or false
                request.open('GET', "{{route('projects.index')}}");

                // ================================ ON LOAD ================================== //

                // XMLHttpRequest.onload = callback;
                // callback is the function to be executed when the request completes successfully.

                request.onload = () => {

                    // if (this.status == 200) {

                        var data = JSON.parse(request.responseText);
                        var projects = document.getElementById('projects');

                        var output = '';
                        output += '<table class="table table-sm table-dark">';
                        output += '<thead>';
                        output += '<tr>';
                        output += '<th scope="col">No</th>';
                        output += '<th scope="col">Title</th>';
                        output += '<th scope="col">Description</th>';
                        output += '<th scope="col">Actions</th>';
                        output += '</tr>';
                        output += '<thead>';
                        output += '<tbody>';

                        var count = 1;
                        for (var i in data) {
                            output += '<tr>';
                                output += '<th scope="row">'+ count +'</th>';
                                output += '<td>'+data[i].title+'</td>';
                                output += '<td>'+data[i].description+'</td>';
                                var urlEdit = '{{ route("projects.edit", ":id") }}';
                                var urlDelete = '{{ route("projects.destroy", ":id") }}';
                                urlEdit = urlEdit.replace(':id', data[i].id);
                                urlDelete = urlDelete.replace(':id', data[i].id);
                                output += '<td><a href="'+urlEdit+'"type="button" class="btn btn-sm btn-primary">Update</a></td>';
                                output += '<td><a href="'+urlDelete+'"type="button" class="btn btn-sm btn-danger">Delete</a></td>';
                            output += '</tr>';
                            count++;
                        }

                        output += '</tbody></table>';

                        console.log(output);
                        projects.innerHTML = output;


                    // } else if(this.status == 404) {
                    //     console.log('Not Found');
                    // } else {
                    //     console.log('Not working');
                    // }

                };

                // onprogress, OPTIANL , used for loaders

                // request.onprogress = () => {
                //     console.log('READYSTATE: ', request.readyState);
                // }


                // ================================ ON READY STATE CHANGE ================================== //


                // request.onreadystatechange = () => {

                    // readystate values
                    // 0: request not initialized
                    // 1: server connection established
                    // 2: request recieved
                    // 3: proccessing request
                    // 4: request finished & response is ready
                    // Difference between onload & onreadystatechange is that onload is not gonna run before readystate 4
                    // In case of readystatechange, we have to check manually if reasystae is 4 or not

                    // if (this.readyState == 4) {
                    //     console.log(request.responseText);
                    // }
                // }
                request.send();

            });

            function renderHtml(data) {

                var htmlString = "";
                for (let i = 0; i < data.length; i++) {


                }

                projectContainer.insertAdjacentHTML('beforeend', 'Working');
            }
    }
</script>
<!-- Passing id with named route,
    more than one parameters -> ['id'=>1])
    for single parameter -> (1) ('projects.edit', 1) (2) ('projects.edit', [$id])
-->
