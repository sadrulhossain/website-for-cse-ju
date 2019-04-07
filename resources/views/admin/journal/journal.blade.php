@extends('admin.layouts.teacher.app')
@section('title', 'Add Journal')
@section('head')
@include('includes.creditcss')
@endsection
@section('body')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
                <h1>
                        Add Journal
                </h1>
        </section>

        <!-- Main content -->
        <section class="content">
                <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                                <!-- general form elements -->
                                <div class="box box-primary">
                                        @include('includes.validmessage')
                                        <!-- /.box-header -->
                                        <!-- form start -->
                                        <form role="form" action="{{route('journal.store')}}" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <div class="box-body">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="title">Title</label>
                                                                <input type="text" class="form-control" id="title" name="title" placeholder="Title...">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                <div class="form-group">
                                                                <label for="type">Type</label>
                                                                <select class="form-control" id="type" name="type">
                                                                <option value=""></option>
                                                                @foreach($jtypes as $jtype)
                                                                <option value="{{$jtype->id}}">{{$jtype->type}}</option>
                                                                @endforeach
                                                                </select>
                                                                </div>
                                                            </div>
                                                                <div class="col-lg-6">
                                                                <div class="form-group">
                                                                <label for="status">Status</label>
                                                                 <select class="form-control" id="status" name="status">
                                                                <option value=""></option>
                                                                <option value="1">Active</option>
                                                                <option value="2">Inactive</option>
                                                                </select>                   
                                                                </div> 
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="url">URL</label>
                                                                <input type="text" class="form-control" id="url" name="url" placeholder="URL...">
                                                            </div>                 
                                                                
                                                        </div>
                                                </div>
                                        </div>
                                <div class="col-lg-12">
                                        <div class="box box-info">
                                                <div class="box-header">
                                                        <h3 class="box-title">Body
                <small>A detailed description about upcoming journal</small>
                                                        </h3>
                                                        <!-- tools box -->
                                                        <div class="pull-right box-tools">
                                                                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                                                                title="Collapse">
                                                                <i class="fa fa-minus"></i></button>
                                                        </div>
                                                        <!-- /. tools -->
                                                </div>
                                                <!-- /.box-header -->

                                                <div class="box-body pad">
                                                        <br>
                                                        <textarea id="description" name="description"
                                                        style="width: 100%; height: 500px;
                                                        font-size: 14px; line-height: 18px;
                                                        border: 1px solid #dddddd; padding: 10px;">

                                                        </textarea>
                                                </div>
                                        </div>
                                </div>
                                        <div class="box-footer form-group">
                                                <a href="{{route('journal.index')}}" class="btn btn-primary">Back</a>
                                                <button type="submit" class="btn btn-success ">Submit</button>
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
