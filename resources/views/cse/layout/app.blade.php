<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
		@include('cse.layout.head')
    </head>
    <body style="background: url('public/image/background.jpg');">
		@include('cse.layout.header')
		@include('cse.layout.navbar')
		@include('cse.layout.slider')
		<div class="row">
                <div class="col-lg-8">
		@section('body')
		@show
		</div>
		@include('cse.layout.notice')
		@include('cse.layout.footer')
