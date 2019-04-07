@extends('admin.layouts.teacher.app')
@section('title', 'Edit Educational Qualification')
@section('head')
@include('includes.creditcss')
@endsection
@section('body')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
                <h1>
                        Edit Educational Qualification
                </h1>
                
        </section>

        <!-- Main content -->
        <section class="content">
                <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                                <!-- general form elements -->
                                <div class="box box-primary">
                                        
                                        <!-- /.box-header -->
                                        <!-- form start -->
                                        <form role="form" action="{{route('education.update', $education->id)}}" method="post">
                                                {{csrf_field()}}
                                                {{method_field('PUT')}}
                                                <div class="box-body">
                                                        <div class="col-lg-offset-3 col-lg-5">
                                                        @include('includes.validmessage')
                                                                <div class="form-group">
                                                                        <label for="degree">Degree</label>
                                                                        <input type="text" class="form-control" id="degree" name="degree" value="{{$education->degree}}">
                                                                </div>
                                                                <div class="form-group">
                                                                        <label for="institution">Name of Institution</label>
                                                                        <input type="text" class="form-control" id="institution" name="institution" value="{{$education->institution}}">
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="result">Result</label>
                                                                            <input type="text" class="form-control" id="result" name="result" value="{{$education->result}}">
                                                                        </div>   
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="achievement">Achievement</label>
                                                                            <input type="text" class="form-control" id="achievement" name="achievement" value="{{$education->achievement}}"> 
                                                                        </div>  
                                                                    </div>
                                                                </div>
                                                                
                                                                
                                                                <div class="form-group">
                                                                        <a href="{{route('education.index')}}" class="btn btn-primary">Back</a>
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
