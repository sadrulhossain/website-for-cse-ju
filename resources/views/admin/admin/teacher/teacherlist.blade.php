@extends('admin.layouts.admin.app')
@section('title', $teacher->name)
@section('head')
@include('includes.listcss')
@endsection
@section('body')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
                
                
        </section>
        <section class="content">
                <div class="row">
                        <div class="col-xs-12">
                                <div class="box">

                                        <!-- /.box-header -->
                                        <div class="box-body">
                                                <div class="row">
                                                        <div class="col-lg-3 col-lg-offset-1">
                                                                
                                                                <h1>
                                                                        {{$teacher->name}}
                                                                        <small></small>
                                                                </h1>
                                                                <table class="table table-responsive">
                                                                        <tr>
                                                                                <th>Designation</th>
                                                                                @foreach($designations as $designation)

                                                                                @if($teacher->designation == $designation->id)
                                                                                        <td>{{$designation->designation}}</td>
                                                                                @endif
        
                                                                                @endforeach
                                                                        </tr>
                                                                        <tr>
                                                                                <th>Mobile</th>
                                                                                <td>{{$teacher->mobile}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                                <th>Phone</th>
                                                                                <td>{{$teacher->phone}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                                <th>E-mail</th>
                                                                                <td>{{$teacher->email}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                                <th>Fax</th>
                                                                                <td>{{$teacher->fax}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                                <th>Field of Interest</th>
                                                                                <td>{{$teacher->interest}}</td>
                                                                        </tr>
                                                                </table>

                                                        </div>
                                                        <div class="col-lg-3">
                                                                <img src="{{asset('storage/app/'.$teacher->photo)}}" alt="Chairman" width="200" height="200" style="border-radius: 15%">
                                                        </div>
                                                        <div class="col-lg-3">
                                                                <a href="{{route('admin_teacher.edit', $teacher->id)}}" class="btn btn-primary">
                                                                        <span class="fa fa-pencil"> Edit</span>
                                                                </a>
                                                        </div>
                                                </div>
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
