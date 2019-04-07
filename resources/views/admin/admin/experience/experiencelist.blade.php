@extends('admin.layouts.admin.app')
@section('title', 'Professional Experience')
@section('head')
@include('includes.listcss')
@endsection
@section('body')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
                <h1>
                        Professional Experience
                </h1>
        </section>
        <section class="content">
                <div class="row">
                        <div class="col-xs-12">
                                <div class="box">
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                                <a href="{{route('admin_experience.create')}}" class="btn btn-success col-lg-offset-8">
                                                        <span class="fa fa-plus"> Add New</span>
                                                </a>
                                                <table id="example1" class="table table-bordered table-striped table-responsive">
                                                        <thead>
                                                                <tr>
                                                                        <th>#</th>
                                                                        <th>Designation</th>
                                                                        <th>Name of Organization</th>
                                                                        <th>From the Year</th>
                                                                        <th>To the Year</th>
                                                                        <th>Actions</th>
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                                @foreach($experiences as $experience)
                                                                <tr>
                                                                        <td>{{$loop->index+1}}.</td>
                                                                        <td>{{$experience->designation}}</td>
                                                                        <td>{{$experience->organization}}</td>
                                                                        <td>{{($experience->from==date('Y'))?'Present':$experience->from}}</td>
                                                                        <td>{{($experience->to==date('Y'))?'Present':$experience->to}}</td>
                                                                        <td>
                                                                <form id="deleteby{{$experience->id}}" action="{{ route('admin_experience.destroy', $experience->id) }}" method="post">
                                                                {{csrf_field()}}
                                                                {{method_field('DELETE')}}
                                                                        <a href="{{ route('admin_experience.edit', $experience->id) }}" class="btn btn-info btn-xs"><span class="fa fa-pencil-square-o"></span></a>
                                                                        <a href="" class="btn btn-danger btn-xs" onclick="delete_form('deleteby{{$experience->id}}')"><span class="fa fa-trash-o"></span>
                                                                        </a>
                                                                        </form>
                                                                </td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                                <tr>
                                                                        <th>#</th>
                                                                        <th>Designation</th>
                                                                        <th>Name of Organization</th>
                                                                        <th>From the Year</th>
                                                                        <th>To the Year</th>
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
