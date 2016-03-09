@extends('layouts.partials.template')

@section('htmlheader_title', 'Parts')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach ($parts as $part)
 
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail" >
                            <img src="{{route('get_part_img', $part->file_id)}}" class="img-responsive">
                            <div class="caption">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <h3>{{$part->name}}</h3>
                                    </div>
                                    <div class="col-md-6 col-xs-6 price">
                                        <h3>
                                            <label>€{{$part->price}}</label></h3>
                                    </div>
                                </div>
                                <p>{{$part->description}}</p>
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <a href="/addProduct/{{$part->id}}" class="btn btn-success btn-product"><span class="fa fa-shopping-cart"></span> Buy</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection