@extends('layouts.app')

@section('htmlheader_title')
	New part
@endsection
@section('contentheader_title')
	New part
@endsection
@section('main-content')
	 <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="/admin/part/new"><button class="btn btn-success">New Product</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                    <td>Name</td>
                    <td>Price</td>
                    <td>File</td>
                    <td></td>
                    </thead>
                    <tbody>
                    @foreach ($parts as $part)
                        <tr>
                            <td>{{$part->name}}</td>
                            <td>{{$part->price}}$</td>
                            <td>{{$part->file->original_filename}}</td>
                            <td><a href="/admin/part/destroy/{{$part->id}}"><button class="btn btn-danger">Del</button></a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
