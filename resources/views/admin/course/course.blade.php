@extends('admin.layouts.admin.app')
@section('title', 'Create Course')
@section('head')
@include('includes.creditcss')
@endsection
@section('body')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
                <h1>
                        Create Course
                        <small> Courses for syllabus</small>
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
                                        <form role="form" action="{{route('course.store')}}" method="post">
                                                {{csrf_field()}}
                                                <div class="box-body">
                                                        <div class="col-lg-offset-3 col-lg-5">
                                                        @include('includes.validmessage')
                                                                <div class="form-group">
                                                                        <label for="course_title">Course Title</label>
                                                                        <input type="text" class="form-control" id="course_title" name="course_title" placeholder="Course Title...">
                                                                </div>
                                                                <div class="row">
                                                                        <div class="col-lg-6">
                                                                             <div class="form-group">
                                                                                <label for="course_code">Course Code</label>
                                                                                <input type="text" class="form-control" id="course_code" name="course_code" placeholder="Course Code...">
                                                                                </div>   
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                              <div class="form-group">
                                                                                <label for="credit">Credit</label>
                                                                                <input type="number" min="1" max="4" class="form-control" id="credit" name="credit"> 
                                                                                </div>  
                                                                        </div>
                                                                </div>
                                                                
                                                                <div class="row">
                                                                        <div class="col-lg-6">
                                                                             <div class="form-group">
                                                                        <label for="year">Year</label>
                                                                        <select class="form-control" id="year" name="year">
                                                                                <option value=""></option>
                                                                                <option value="1st">1st</option>
                                                                                <option value="2nd">2nd</option>
                                                                                <option value="3rd">3rd</option>
                                                                                <option value="4th">4th</option>
                                                                        </select>
                                                                </div>   
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                              <div class="form-group">
                                                                        <label for="Semester">Semester</label>
                                                                        <select class="form-control" id="semester" name="semester">
                                                                                <option value=""></option>
                                                                                <option value="1st">1st</option>
                                                                                <option value="2nd">2nd</option>
                                                                                <option value="3rd">3rd</option>
                                                                        </select>
                                                                </div>  
                                                                        </div>
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                        <a href="{{route('course.index')}}" class="btn btn-primary">Back</a>
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
