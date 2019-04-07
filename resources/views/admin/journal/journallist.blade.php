@extends('admin.layouts.teacher.app')
@section('title', 'Journal')
@section('head')
@include('includes.listcss')
@endsection
@section('body')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
                <h1>
                        List of Journal
                </h1>
        </section>
        <section class="content">
                <div class="row">
                        <div class="col-xs-12">
                                <div class="box">

                                        <!-- /.box-header -->
                                        <div class="box-body">
                                                <a href="{{route('journal.create')}}" class="btn btn-success col-lg-offset-8">
                                                        <span class="fa fa-plus"> Add New</span>
                                                </a>
                                                <table id="example1" class="table table-bordered table-striped table-responsive">
                                                        <thead>
                                                                <tr>
                                                                        <th>#</th>
                                                                        <th>Title</th>
                                                                        <th>Type</th>
                                                                        <th>Status</th>
                                                                        <th>Actions</th>
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                                @foreach($journals as $journal)
                                                                <tr>
                                                                        <td>{{$loop->index+1}}.</td>
                                                                        <td>{{$journal->title}}</td>
                                                                @foreach($jtypes as $jtype)

                                                                @if($journal->type == $jtype->id)
                                                                <td>{{$jtype->type}}</td>
                                                                @endif
        
                                                                @endforeach
                                                                        <td>
                                                                {{($journal->status == 0)?'Inactive':'Active'}}
                                                                        </td>
                                                                        <td>
                                                                <form id="deleteby{{$journal->id}}" action="{{ route('journal.destroy', $journal->id) }}" method="post">
                                                                {{csrf_field()}}
                                                                {{method_field('DELETE')}}
                                                                <a href="{{ route('journal.edit', $journal->id) }}" class="btn btn-info btn-xs"><span class="fa fa-pencil-square-o"></span></a><a href="" class="btn btn-danger btn-xs" onclick="delete_form('deleteby{{$journal->id}}')"><span class="fa fa-trash-o"></span>
                                                                                </a>
                                                                        </form>
                                                                </td>
                                                        </tr>
                                                        @endforeach
                                                        <tfoot>
                                                                <tr>
                                                                        <th>#</th>
                                                                        <th>Title</th>
                                                                        <th>Type</th>
                                                                        <th>Status</th>
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
