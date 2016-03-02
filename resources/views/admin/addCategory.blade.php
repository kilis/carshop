@extends('layouts.app')

@section('htmlheader_title')
	Category
@endsection
@section('contentheader_title')
	Category
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
							{!! BootForm::text('Type') !!}
							{!! BootForm::submit('Add')  !!}
						{!! BootForm::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
