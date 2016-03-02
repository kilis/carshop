<!DOCTYPE html>
<html>
<div>
@extends('layouts.partials.htmlheader')
@section('htmlheader_title', 'Contacts')
@include('layouts.menu')
</div>
<div class="row">
	<div style="padding: 65px;" class="col-md-3">
		<p>Online bookstore located in downtown Riga, Latvia</p>
	<h2>Mailing Address</h2>
	<address>
			Emporium<br/>
			P.O. Box LV-1658<br/>
			Riga, Latvia<br/>
	</address>
	</div>
	<div style="padding: 55px;" class="col-md-9">
		<iframe
		  width="100%"
		  height="500"
		  frameborder="0" style="border:0"
		  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCRpUZETMha8z-nxmLLee_3HkhYEuVg9zI
			&q=1+Meža+iela&zoom=15" allowfullscreen>
		</iframe>
	</div>
</div>


@include('layouts.footer')

</html>