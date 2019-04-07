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
                                                
                                                <table id="example1" class="table table-bordered table-striped table-responsive">
                                                        <thead>
                                                                <tr>
                                                                        <th>#</th>
                                                                        <th>Staff Name</th>
                                                                        <th>Designation</th>
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                                @foreach($staffs as $staff)
                                                                <tr>
                                                                        <th>{{$loop->index+1}}</th>
                                                                        <th>{{$staff->name}}</th>
                                                                        <th>{{$desgnation->designation}}</th>
                                                                </tr>
                                                                @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                                <tr>
                                                                        <th>#</th>
                                                                        <th>Staff Name</th>
                                                                        <th>Designation</th>
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
