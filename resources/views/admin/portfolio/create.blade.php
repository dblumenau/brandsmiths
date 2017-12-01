@extends('adminlte::page')
@section('title', 'Portfolio')

@section('content_header')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>Portfolio</h1>

@stop
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3>New portfolio item</h3>
                    </div>
                    <div class="box-body">
                        <form role="form" method="POST" action="/admin/portfolio/create">
                            {{ csrf_field() }}
                            <input type="hidden" name="path" id="path" value="">
                            <div class="form-group">
                                <label for="heading">Heading</label>
                                <input class="form-control" type="text" name="heading" id="">
                                <p class="help-block">Enter heading for portfolio image</p>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea rows="5" class="form-control" type="text" name="description" id=""></textarea>
                                <p class="help-block">Enter description for portfolio image</p>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary btn-flat">Create</button>
                            </div>
                        </form>
                        Upload
                        <form action="/admin/portfolio/file-upload" class="dropzone" id="my-awesome-dropzone">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/dropzone.js"></script>--}}
    <script src="{{asset('js/app.js')}}"></script>
    <script>
        // "myAwesomeDropzone" is the camelized version of the HTML element's ID
        Dropzone.options.myAwesomeDropzone = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            success: function(file, response){
                console.log(response);
                $("#path").val(response);
            }
        };
    </script>
@endsection
