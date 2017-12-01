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
    <a href="{{ url('/admin/portfolio/create') }}" type="button" class="btn btn-info btn-flat"><i
                class="fa fa-fw fa-plus"></i>Add New
    </a>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">All Portfolio Items</div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Heading</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Date Added</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($portfolios as $portfolio)
                        <tr>
                            <td>{{$portfolio->heading or ''}}</td>
                        <td>{{$portfolio->description or ''}}</td>
                        <td><img width="50" src="{{asset("storage/$portfolio->path")}}" alt=""></td>
                        <td>{{$portfolio->updated_at}}</td></tr>
                        @endforeach

                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
@section('content')
@endsection
