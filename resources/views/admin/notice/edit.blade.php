@extends('admin.layouts.admin.app')
@section('title', 'Edit Notice')
@section('head')
@include('includes.creditcss')
@endsection
@section('body')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
                <h1>
                        Edit Notice
                </h1>
        </section>

        <!-- Main content -->
        <section class="content">
                <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                                <!-- general form elements -->
                                <div class="box box-primary">
                                        @include('includes.validmessage')
                                        <!-- /.box-header -->
                                        <!-- form start -->
                                        <form role="form" action="{{route('notice.update', $notice->id)}}" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                {{method_field('PUT')}}
                                                <div class="box-body">
                                                        <div class="col-lg-offset-3 col-lg-5">
                                                                <div class="form-group">
                                                                        <label for="title">Title</label>
                                                                        <input type="text" class="form-control" id="title"
                                                                        value="{{ $notice->title }}" name="title">
                                                                </div>
                                                                <div class="form-group">
                                                                        <label for="file_path">Notice File</label>
                                                                        <input type="file" class="form-control-file" id="file_path" name="file_path">
                                                                </div>
                                                                <div class="form-group">
                                                                        <a href="{{route('notice.index')}}" class="btn btn-primary">Back</a>
                                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                                </div>
                                                        </div>
                                                </form>
                                        </div>
                                        <!-- /.box -->
                                </div>
                        </div>
                        <!-- /.row -->
                </section>
                <!-- /.content -->
        </div>
        @endsection
        @section('js')
        @include('includes.creditjs')
        @endsection
