<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
		@include('cse.layout.head')
    </head>
    <body style="background: url('public/image/background.jpg');">
		@include('cse.layout.header')
		@include('cse.layout.navbar')
		@section('body')
		@show
		@include('cse.layout.footer')
