@extends('admin.layouts.admin.app')
@section('title', 'Events')
@section('head')
@include('includes.listcss')
@endsection
@section('body')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
                <h1>
                        List of Events
                </h1>
        </section>
        <section class="content">
                <div class="row">
                        <div class="col-xs-12">
                                <div class="box">

                                        <!-- /.box-header -->
                                        <div class="box-body">
                                                <a href="{{route('event.create')}}" class="btn btn-success col-lg-offset-8">
                                                        <span class="fa fa-plus"> Add New</span>
                                                </a>
                                                <table id="example1" class="table table-bordered table-striped table-responsive">
                                                        <thead>
                                                                <tr>
                                                                        <th>#</th>
                                                                        <th>Title</th>
                                                                        <th>Event Date</th>
                                                                        <th>Published At</th>
                                                                        <th>Actions</th>
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                                @foreach($events as $event)
                                                                <tr>
                                                                        <td>{{$loop->index+1}}.</td>
                                                                        <td>{{$event->title}}</td>
                                                                        <td>{{$event->date}}</td>
                                                                        <td>{{$event->created_at->diffforHumans()}}</td>
                                                                        <td>
                                                                                <form id="deleteby{{$event->id}}" action="{{ route('event.destroy', $event->id) }}" method="post">
                                                                                        {{csrf_field()}}
                                                                                        {{method_field('DELETE')}}
                                                                                        <a href="{{ route('event.edit', $event->id) }}" class="btn btn-info btn-xs"><span class="fa fa-pencil-square-o"></span></a>
                                                                                        <a href="" class="btn btn-danger btn-xs"
                                                                                        onclick="delete_form('deleteby{{$event->id}}')">
                                                                                        <span class="fa fa-trash-o"></span>
                                                                                </a>
                                                                        </form>
                                                                </td>
                                                        </tr>
                                                        @endforeach
                                                        <tfoot>
                                                                <tr>
                                                                        <th>#</th>
                                                                        <th>Title</th>
                                                                        <th>Event Date</th>
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
