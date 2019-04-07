@extends('admin.layouts.admin.app')
@section('title', 'Courses')
@section('head')
@include('includes.listcss')
@endsection
@section('body')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
                <h1>
                        List of Courses
                        <small>Here you can see all courses</small>
                </h1>
                <ol class="breadcrumb">
                        <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                </ol>
        </section>
        <section class="content">
                <div class="row">
                        <div class="col-xs-12">
                                <div class="box">

                                        <!-- /.box-header -->
                                        <div class="box-body">
                                                <a href="{{route('course.create')}}" class="btn btn-success col-lg-offset-8">
                                                        <span class="fa fa-plus"> Add New</span>
                                                </a>
                                                <table id="example1" class="table table-bordered table-striped table-responsive">
                                                        <thead>
                                                                <tr>
                                                                        <th>#</th>
                                                                        <th>Course Code</th>
                                                                        <th>Course Title</th>
                                                                        <th>Year</th>
                                                                        <th>Semester</th>
                                                                        <th>Credit</th>

                                                                        <th>Actions</th>
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                                @foreach($courses as $course)
                                                                <tr>
                                                                        <td>{{$loop->index+1}}.</td>
                                                                        <td>{{$course->course_code}}</td>
                                                                        <td>{{$course->course_title}}</td>
                                                                        <td>{{$course->year}}</td>
                                                                        <td>{{$course->semester}}</td>
                                                                        <td>{{$course->credit}}</td>
                                                                        <td>
                                                                                <form id="deleteby{{$course->id}}" action="{{ route('course.destroy', $course->id) }}" method="post">
                                                                                        {{csrf_field()}}
                                                                                        {{method_field('DELETE')}}
                                                                                        <a href="{{ route('course.edit', $course->id) }}" class="btn btn-info btn-xs"><span class="fa fa-pencil-square-o"></span></a>
                                                                                        <a href="" class="btn btn-danger btn-xs"
                                                                                        onclick="delete_form('deleteby{{$course->id}}')">
                                                                                        <span class="fa fa-trash-o"></span>
                                                                                </a>
                                                                        </form>
                                                                </td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                                <tr>
                                                                        <th>#</th>
                                                                        <th>Course Code</th>
                                                                        <th>Course Title</th>
                                                                        <th>Year</th>
                                                                        <th>Semester</th>
                                                                        <th>Credit</th>

                                                                        <th>Actions</th>
                                                                </tr>
                                                        </tfoot>
                                                </table>
                                        </div>
                                        <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                        </div>
                        <!-- /.col -->
                </div>
                <!-- /.row -->
        </section>


</div>
@endsection
@section('js')
@include('includes.listjs')
@endsection
