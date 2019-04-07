@extends('admin.layouts.admin.app')
@section('title', 'Teachers List')
@section('head')
@include('includes.listcss')
@endsection
@section('body')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
                <h1>
                        List of Teachers
                        <small>Here you can see all teachers of CSE department.</small>
                </h1>
                
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
                                                                        <th>Teacher Name</th>
                                                                        
                                                                        <th>E-mail</th>
                                                                        <th>Actions</th>
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                                @foreach($admins as $admin)
                                                                <tr>
                                                                        <td>{{$loop->index+1}}</td>
                                                                        <td>{{$admin->name}}</td>
                                                                        
                                                                        <td>{{$admin->email}}</td>
                                                                        <td>
                                                                            <a href="{{ route('admin_register.edit', $admin->id) }}" class="btn btn-info btn-xs"><span class="fa fa-pencil-square-o"></span></a>
                                                                                        
                                                                </td>
                                                                </tr>
                                                                @endforeach
                                                        </tbody>
                                                                
                                                        <tfoot>
                                                                <tr>
                                                                        <th>#</th>
                                                                        <th>Teacher Name</th>
                                                                        <th>E-mail</th>
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
