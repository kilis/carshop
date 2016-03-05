@extends('layouts.partials.template')

@section('htmlheader_title', 'Contact')

@section('content')
    <div class="row">
		<div class="col-md-3">
			<p>Online partshop located in downtown Riga, Latvia</p>
		<h2>Mailing Address</h2>
		<address>
				Partio SIA<br/>
				P.O. Box LV-1658<br/>
				Riga, Latvia<br/>
		</address>
		</div>
		<div class="col-md-9">
			<iframe
			  width="100%"
			  height="720"
			  frameborder="0" style="border:0"
			  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCRpUZETMha8z-nxmLLee_3HkhYEuVg9zI
				&q=1+Meža+iela&zoom=15" allowfullscreen>
			</iframe>
		</div>
	</div>
@endsection