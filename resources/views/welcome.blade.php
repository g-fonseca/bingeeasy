@extends('layouts.app')

@section('content')
	<div class="row center ">
		<div class="col-xs-12">
				<img src="{{ asset('images/logowhite2.png') }}" alt="logo">
				<h1 class="white down">Track Your Shows Easily.</h1>
				<a href="{{ url('register') }}" class="btn btn-warning btn-lg">GET STARTED</a>
		</div>
	</div>

@stop