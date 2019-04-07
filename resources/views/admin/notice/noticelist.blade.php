@extends('admin.layouts.admin.app')
@section('title', 'Notices')
@section('head')
@include('includes.listcss')
@endsection
@section('body')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
                <h1>
                        List of Notices
                </h1>
                
        </section>
        <section class="content">
                <div class="row">
                        <div class="col-xs-12">
                                <div class="box">

                                        <!-- /.box-header -->
                                        <div class="box-body">
                                                <a href="{{route('notice.create')}}" class="btn btn-success col-lg-offset-8">
                                                        <span class="fa fa-plus"> Add New</span>
                                                </a>
                                                <table id="example1" class="table table-bordered table-striped table-responsive">
                                                        <thead>
                                                                <tr>
                                                                        <th>#</th>
                                                                        <th>Notice Title</th>
                                                                        <th>Published At</th>
                                                                        <th>Actions</th>
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                                @foreach($notices as $notice)
                                                                <tr>
                                                                        <td>{{$loop->index+1}}.</td>
                                                                        <td>{{$notice->title}}</td>
                                                                        <td>{{$notice->created_at->diffforHumans()}}</td>
                                                                        <td>
                                                                                <form id="deleteby{{$notice->id}}" action="{{ route('notice.destroy', $notice->id) }}" method="post">
                                                                                        {{csrf_field()}}
                                                                                        {{method_field('DELETE')}}
                                                                                        <a href="{{ route('notice.edit', $notice->id) }}" class="btn btn-info btn-xs"><span class="fa fa-pencil-square-o"></span></a>
                                                                                        <a href="" class="btn btn-danger btn-xs"
                                                                                        onclick="delete_form('deleteby{{$notice->id}}')">
                                                                                        <span class="fa fa-trash-o"></span>
                                                                                </a>
                                                                        </form>
                                                                </td>
                                                        </tr>
                                                        @endforeach
                                                        <tfoot>
                                                                <tr>
                                                                        <th>#</th>
                                                                        <th>Notice Title</th>
                                                                        <th>Published At</th>
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
