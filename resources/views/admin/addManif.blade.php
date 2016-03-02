@extends('layouts.app')

@section('htmlheader_title')
	Manifactures
@endsection
@section('contentheader_title')
	Manifactures
@endsection
@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10">
				<div class="panel panel-default">
					<div class="panel-heading">Home</div>

					<div class="panel-body">
						{!! BootForm::open() !!}
							{!! BootForm::text('Manifacturer') !!}
							{!! BootForm::text('Address') !!}
							{!! BootForm::submit('Add')  !!}
						{!! BootForm::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
