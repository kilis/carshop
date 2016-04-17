@extends('layouts.app')

@section('htmlheader_title')
	New part
@endsection
@section('contentheader_title')
	New part
@endsection
@section('main-content')
		<div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">New Part</div>
        </div>
        <div class="panel-body" >
            <form method="POST" action="/admin/part/save" id="my-awesome-dropzone" class="form-horizontal dropzone" enctype="multipart/form-data" role="form">
                {!! csrf_field() !!}
                <fieldset>
					<div class="dz-message">

                </div>

                <div class="fallback">
                    <input name="file" type="file"/>
                </div>

                <div class="dropzone-previews" id="dropzonePreview"></div>

                <h4 style="text-align: center;color:#428bca;">Drop images in this area  <span class="glyphicon glyphicon-hand-down"></span></h4>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Name</label>
                        <div class="col-md-9">
                            <input id="name" name="name" type="text" placeholder="Product name" class="form-control input-md" required="">
 
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-md-3 control-label" for="sku">SKU</label>
                        <div class="col-md-9">
                            <input id="sku" name="sku" type="integer" placeholder="Product SKU" class="form-control input-md" required="">
 
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-md-3 control-label" for="make">Make</label>
                        <div class="col-md-9">
							{{ Form::select('make', $carmakes, null, ['id' => 'make']) }}
						</div>
                    </div>
					<div class="form-group">
                        <label class="col-md-3 control-label" for="year">Year</label>
                        <div class="col-md-9">
							{{ Form::selectYear('year', 1982, 2016,  ['id' => 'year','class' => 'field']) }}
						</div>
                    </div>
					<div class="form-group">
                        <label class="col-md-3 control-label" for="condition">Condition</label>
                        <div class="col-md-9">
							{{ Form::select('condition', ['new' => 'New', 'used' => 'Used'], null, ['id' => 'condition']) }}</br>
						</div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textarea">Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="textarea" name="description"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="price">Price</label>
                        <div class="col-md-9">
                            <input id="price" name="price" type="text" placeholder="Product price" class="form-control input-md" required="">
 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="imageurl">Image URL</label>
                        <div class="col-md-9">
                            <input id="imageurl" name="imageurl" type="text" placeholder="Image URL" class="form-control input-md" >
 
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="submit"></label>
                        <div class="col-md-9">
                            <button id="submit" name="submit" class="btn btn-primary">Insert</button>
                        </div>
                    </div>
 
                </fieldset>
 
            </form>
        </div>
    </div>
@endsection
