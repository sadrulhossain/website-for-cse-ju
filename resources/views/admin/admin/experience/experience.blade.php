@extends('admin.layouts.admin.app')
@section('title', 'Add Professional Experience')
@section('head')
@include('includes.creditcss')
@endsection
@section('body')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
                <h1>
                        Add Professional Experience
                </h1>
                
        </section>

        <!-- Main content -->
        <section class="content">
                <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                                <!-- general form elements -->
                                <div class="box box-primary">
                                        
                                        <!-- /.box-header -->
                                        <!-- form start -->
                                        <form role="form" action="{{route('admin_experience.store')}}" method="post">
                                                {{csrf_field()}}
                                                <div class="box-body">
                                                        <div class="col-lg-offset-3 col-lg-5">
                                                        @include('includes.validmessage')
                                                                <div class="form-group">
                                                                        <label for="designation">Designation</label>
                                                                        <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation...">
                                                                </div>
                                                                <div class="form-group">
                                                                        <label for="organization">Name of Organization</label>
                                                                        <input type="text" class="form-control" id="organization" name="organization" placeholder="Name of Organization...">
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                        <label for="from">From the Year</label>
                                                                        <select class="form-control" id="from" name="from">
                                                                        <option value=""></option>
                                                                        @for($y = date('Y'); $y>=1980; $y--)
                                                                        <option value="{{$y}}">{{($y == date('Y'))?'Present':$y}}</option>
                                                                        @endfor
                                                                        </select>
                                                                        </div>   
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                        <label for="to">To the Year</label>
                                                                        <select class="form-control" id="to" name="to">
                                                                        <option value=""></option>
                                                                        @for($y = date('Y'); $y>=1980; $y--)
                                                                        <option value="{{$y}}">{{($y == date('Y'))?'Present':$y}}</option>
                                                                        @endfor
                                                                        </select>
                                                                        </div>   
                                                                    </div>
                                                                </div>
                                                                
                                                                
                                                                <div class="form-group">
                                                                        <a href="{{route('admin_experience.index')}}" class="btn btn-primary">Back</a>
                                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                                </div>
                                                        </div>
                                                </form>
                                        </div>
                                        <!-- /.box -->
                                </div>
                        </div>
                        <!-- /.row -->
                </section>
                <!-- /.content -->
        </div>
        @endsection
        @section('js')
        @include('includes.creditjs')
        @endsection
