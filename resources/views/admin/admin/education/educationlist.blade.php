@extends('admin.layouts.admin.app')
@section('title', 'Educational Qualifications')
@section('head')
@include('includes.listcss')
@endsection
@section('body')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
                <h1>
                        Educational Qualifications
                </h1>
        </section>
        <section class="content">
                <div class="row">
                        <div class="col-xs-12">
                                <div class="box">
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                                <a href="{{route('admin_education.create')}}" class="btn btn-success col-lg-offset-8">
                                                        <span class="fa fa-plus"> Add New</span>
                                                </a>
                                                <table id="example1" class="table table-bordered table-striped table-responsive">
                                                        <thead>
                                                                <tr>
                                                                        <th>#</th>
                                                                        <th>Name of Degree</th>
                                                                        <th>Institution</th>
                                                                        <th>Result</th>
                                                                        <th>Achievement</th>
                                                                        <th>Actions</th>
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                                @foreach($educations as $education)
                                                                <tr>
                                                                        <td>{{$loop->index+1}}.</td>
                                                                        <td>{{$education->degree}}</td>
                                                                        <td>{{$education->institution}}</td>
                                                                        <td>{{$education->result}}</td>
                                                                        <td>{{$education->achievement}}</td>
                                                                        <td>
                                                                                <form id="deleteby{{$education->id}}" action="{{ route('admin_education.destroy', $education->id) }}" method="post">
                                                                                        {{csrf_field()}}
                                                                                        {{method_field('DELETE')}}
                                                                                        <a href="{{ route('admin_education.edit', $education->id) }}" class="btn btn-info btn-xs"><span class="fa fa-pencil-square-o"></span></a>
                                                                                        <a href="" class="btn btn-danger btn-xs"
                                                                                        onclick="delete_form('deleteby{{$education->id}}')">
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
                                                                        <th>Name of Degree</th>
                                                                        <th>Institution</th>
                                                                        <th>Result</th><th>Achievement</th>
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
