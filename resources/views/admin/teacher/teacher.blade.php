@extends('admin.layouts.teacher.app')
@section('title', 'Create Teacher')
@section('head')
@include('includes.creditcss')
@endsection
@section('body')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
                <h1>
                        Teacher Info
                </h1>
                
        </section>

        <!-- Main content -->
        <section class="content">
                <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                                <!-- general form elements -->
                                <div class="box box-primary">
                                       <form role="form" action="{{route('teacher.store')}}" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <div class="box-body">
                                                        <div class="col-lg-offset-3 col-lg-5">
                                                        @include('includes.validmessage')
                                                                <div class="form-group">
                                                                        <label for="name">Teachers' Name</label>
                                                                        <input type="text" class="form-control" id="name" name="name" placeholder="Teacher's Name...">
                                                                </div>
                                                                <div class="form-group">
                                                                        <label for="designation">Designation</label>
                                                                        <select class="form-control" id="designation" name="designation">
                                                                                <option value="">
                                                                                </option>
                                                                        @foreach($designations as $designation)
                                                                                <option value="{{$designation->id}}">{{$designation->designation}}
                                                                                </option>
                                                                        @endforeach
                                                                </select>
                                                                </div>
                                                                <div class="row">
                                                                        <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                <label for="mobile">Mobile</label>
                                                                                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile...">
                                                                                </div>      
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                <label for="phone">Phone</label>
                                                                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone...">
                                                                                </div> 
                                                                        </div>
                                                                </div>
                                                                
                                                                <div class="row">
                                                                        <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                <label for="email">E-mail</label>
                                                                                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail...">
                                                                                </div>      
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                <label for="fax">Fax</label>
                                                                                <input type="text" class="form-control" id="fax" name="fax" placeholder="Fax...">
                                                                                </div> 
                                                                        </div>
                                                                </div>
                                                                <div class="form-group">
                                                                        <label for="interest">Fiels of Interest</label>
                                                                        <input type="text" class="form-control" id="interest" name="interest" placeholder="Fiels of Interest...">
                                                                </div>
                                                                <div class="form-group">
                                                                        <label for="photo">Teachers' Image</label>
                                                                        <input type="file" class="form-control-file" id="photo" name="photo">
                                                                </div>
                                                                <div class="form-group">
                                                                        <a href="{{route('teacher.index')}}" class="btn btn-primary">Back</a>
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
