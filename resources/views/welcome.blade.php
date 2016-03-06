<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="lv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pratt - Free Bootstrap 3 Theme">
    <meta name="author" content="Alvarez.is - BlackTie.co">

    <title>Pario parts</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('/js/smoothscroll.js') }}"></script>
    <script src="{{ asset('/js/custum.js') }}"></script>


</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

<!-- Fixed navbar -->
<div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><b>Partio</b></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                @include(config('laravel-menu.views.bootstrap-items'), array('items' => $MyNavBar->roots()))
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li><a href="/home">{{ Auth::user()->name }}</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>


<section id="home" name="home"></section>
<div id="headerwrap">
    <div class="container">
        <div class="row left">
			<div class="col-lg-12">
                <h1>Partio auto parts</h1>
                <h3>Get used or new parts here from dealers or individuals</h3>
                <h3>Private	or comercial car parts</h3>
            </div>
        </div>
    </div> <!--/ .container -->
	<div id="search" class="col-lg-4 pull-right">
	{{ Form::open(['id' => 'partsearch']) }}
		{{ Form::label('year', 'Year') }}
		{{ Form::selectYear('year', 1982, 2016,  ['id' => 'caryear','class' => 'field']) }}
		{{ Form::label('manifacture', 'Make') }}
		{{ Form::select('make_display', $carmakes, null, ['id' => 'form_make']) }}
		{{ Form::label('conditon', 'Conditon') }}
		{{ Form::select('conditon', ['New', 'Used']) }}</br>
		{{ Form::submit('Search!', ['id' => 'search_sub', 'class' =>'btn btn-primary']) }}
	{{ Form::close() }}
	</div>
</div><!--/ #headerwrap -->


<section id="desc" name="desc"></section>
<!-- INTRO WRAP -->
<div id="intro">
    <div class="container">
        <div class="row centered">
            <h1>Partio Service</h1>
            <br>
            <br>
            <div class="col-lg-4">
                <img src="{{ asset('/img/gears.png') }}" alt="">
                <h3>Good conditon parts</h3>
            </div>
            <div class="col-lg-4">
                <img src="{{ asset('/img/support.png') }}" alt="">
                <h3>Support</h3>
            </div>
            <div class="col-lg-4">
                <img src="{{ asset('/img/globe.png') }}" alt="">
                <h3>Community</h3>
            </div>
        </div>
        <br>
        <hr>
    </div> <!--/ .container -->
</div><!--/ #introwrap -->

<section id="showcase" name="showcase"></section>
<div id="showcase">
    <div class="container">
        <div class="row">
            <br>
            <div class="col-lg-8 col-lg-offset-2">
                <div id="carousel-example-generic" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{ asset('/img/item-01.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/img/item-02.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
    </div><!-- /container -->
</div>


<section id="contact" name="contact"></section>
<div id="footerwrap">
    <div class="container">
        <div class="col-lg-4">
            <h3>Address</h3>
            <p>
                Partio SIA<br/>
                P.O. Box LV-1658,<br/>
                Riga, Latvia<br/>
            </p>
        </div>
		<div class="col-lg-8">
		<iframe
		  width="100%"
		  height="200"
		  frameborder="0" style="border:0"
		  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCRpUZETMha8z-nxmLLee_3HkhYEuVg9zI
			&q=1+Meža+iela&zoom=15" allowfullscreen>
		</iframe>
	</div>

    </div>
</div>
<div id="c">
    <div class="container">
                <p>
            Partio Not reserved<br/>
            <strong>Copyleft &copy; 2016
            <br/>
             Page Created by Pushkin</a>
        </p>

    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>

