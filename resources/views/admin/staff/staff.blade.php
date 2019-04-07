@extends('admin.layouts.admin.app')
@section('title', 'Create Staff Info')
@section('head')
@include('includes.creditcss')
@endsection
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
                <h1>
                        Create Staff Info
                        <small> Express your thought</small>
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
                                        <form role="form" action="{{route('staff.store')}}" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <div class="box-body">
                                                        <div class="col-lg-offset-3 col-lg-6">
                                                                @include('includes.validmessage')
                                                <div class="row">
                                                        <div class="col-lg-6">
                                                                 <div class="form-group">
                                                                        <label for="name">Staff Name</label>
                                                                        <input type="text" class="form-control" id="name" name="name" placeholder="Staff Name...">
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                        <label for="experience">Years of Experience</label>
                                                                        <input type="number" class="form-control" min="1" id="experience" name="experience">
                                                                </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                                 <div class="form-group">
                                                                        <label for="designation">Designation</label>
                                                                        <select class="form-control" id="designation" name="designation">
                                                                                <option value="">
                                                                                </option>
                                                                        @foreach($st_designations as $designation)
                                                                                <option value="{{$designation->id}}">{{$designation->designation}}
                                                                                </option>
                                                                        @endforeach
                                                                        </select>
                                                                </div>
                                                                <div class="form-group">
                                                                        <label for="photo">Staffs' Image</label>
                                                                        <input type="file" class="form-control-file" id="photo" name="photo">
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                        <a href="{{route('staff.index')}}" class="btn btn-primary">Back</a>
                                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                                </div>       
                                                        </div>
                                                </div>
                                                                      
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
