@extends('admin.layouts.admin.app')
@section('title', 'Staff List')
@section('head')
@include('includes.listcss')
@endsection
@section('body')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
                <h1>
                        List of Staffs
                        <small>Here you can see all staffs of CSE department.</small>
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
                                                <a href="{{route('staff.create')}}" class="btn btn-success col-lg-offset-8">
                                                        <span class="fa fa-plus"> Add New</span>
                                                </a>
                                                <table id="example1" class="table table-bordered table-striped table-responsive">
                                                        <thead>
                                                                <tr>
                                                                        <th>#</th>
                                                                        <th>Staff Name</th>
                                                                        <th>Designation</th>
                                                                        <th>Actions</th>
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                                @foreach($staffs as $staff)
                                                                <tr>
                                                                        <td>{{$loop->index+1}}</td>
                                                                        <td>{{$staff->name}}</td>
                                                                 @foreach($st_designations as $designation)
                                                                     @if($designation->id == $staff->designation)
                                                                        <td>{{$designation->designation}}</td>
                                                                        <td>
                                                                     @endif
                                                                 @endforeach
                                                                        
                                                                                <form id="deleteby{{$staff->id}}" action="{{ route('staff.destroy', $staff->id) }}" method="post">
                                                                                        {{csrf_field()}}
                                                                                        {{method_field('DELETE')}}
                                                                                        <a href="{{ route('staff.edit', $staff->id) }}" class="btn btn-info btn-xs"><span class="fa fa-pencil-square-o"></span></a>
                                                                                        <a href="" class="btn btn-danger btn-xs"
                                                                                        onclick="delete_form('deleteby{{$staff->id}}')">
                                                                                        <span class="fa fa-trash-o"></span>
                                                                                </a>
                                                                        </form>
                                                                </td>
                                                        </tr>
                                                        @endforeach
                                                        <tfoot>
                                                                <tr>
                                                                        <th>#</th>
                                                                        <th>Staff Name</th>
                                                                        <th>Designation</th>
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
