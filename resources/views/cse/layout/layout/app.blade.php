<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
		@include('cse.layout.head')
    </head>
    <body style="background: url('public/image/background.jpg');">
		@include('cse.layout.header')
		@include('cse.layout.navbar')
		<hr>
		<div class="row">
                <div class="col-lg-12">
		@section('body')
		@show
		</div>
	</div>
		@include('cse.layout.footer')
