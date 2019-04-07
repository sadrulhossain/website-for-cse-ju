@extends('admin.layouts.admin.app')
@section('title', 'Edit Staff Info')
@section('head')
@include('includes.creditcss')
@endsection
@section('body')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
                <h1>
                        Edit Staff Info
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
                                        <form role="form" action="{{route('staff.update', $staff->id)}}" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                {{method_field('PUT')}}
                                                <div class="box-body">
                                                        <div class="col-lg-offset-3 col-lg-6">
                                                                @include('includes.validmessage')
                                                <div class="row">
                                                        <div class="col-lg-6">
                                                                <div class="form-group">
                                                                        <label for="name">Staff Name</label>
                                                                        <input type="text" class="form-control" id="name" name="name" value="{{$staff->name}}">
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                        <label for="experience">Years of Experience</label>
                                                                        <input type="number" class="form-control" min="1"  id="experience" name="experience" value="{{$staff->experience}}">
                                                                </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                                <div class="form-group">
                                                                        <label for="designation">Designation</label>
                                                                        <select class="form-control" id="designation" name="designation">
                                                                        @foreach($st_designations as $designation)
                                                                           @if($designation->id == $staff->designation)
                                                                                <option value="{{$designation->id}}">{{$designation->designation}}
                                                                                </option>
                                                                            @endif
                                                                        @endforeach
                                                                        @foreach($st_designations as $designation)
                                                                                <option value="{{$designation->id}}">{{$designation->designation}}
                                                                                </option>
                                                                        @endforeach
                                                                        </select>
                                                                </div>
                                                                <div class="form-group" >
                                                                        <label for="photo">Staffs' Photo</label>
                                                                                <input type="file" class="form-control-file" name="photo" id="photo" >
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
