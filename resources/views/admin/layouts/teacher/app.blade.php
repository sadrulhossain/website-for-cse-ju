<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
        @include('admin.layouts.head')
</head>
<body class="hold-transition skin-black sidebar-mini">
        <div class="wrapper">
                @include('admin.layouts.header')
                @include('admin.layouts.teacher.sidebar')
                @section('body')
                @show

                @include('admin.layouts.footer')
                @include('admin.layouts.footer_js')
</body>
        </html>
