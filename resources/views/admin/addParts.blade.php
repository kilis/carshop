@extends('layouts.app')

@section('htmlheader_title')
	Parts
@endsection
@section('contentheader_title')
	Parts
@endsection

@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10">
				<div class="panel panel-default">
					<div class="panel-heading">Parts</div>

					<div class="panel-body">
						{!! BootForm::open() !!}
							{!! BootForm::text('Part id') !!}
							{!! BootForm::text('SKU') !!}
							{!! BootForm::text('Title') !!}
							{!! BootForm::text('Price') !!}
							{!! BootForm::textarea('More data') !!}
							{!! BootForm::submit('Add')  !!}
						{!! BootForm::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
