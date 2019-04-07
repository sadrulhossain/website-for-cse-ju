@extends('admin.layouts.admin.app')
@section('title', 'Register')
@section('head')
@include('includes.listcss')
@endsection
@section('body')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
                <h1>
                        Register
                        <small> </small>
                </h1>
                
        </section>

        <!-- Main content -->
        <section class="content">
                <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                                <!-- general form elements -->
                                <div class="box box-primary">
                                       <form role="form" action="{{route('admin_register.update', $admin->id)}}" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                {{method_field('PUT')}}
                                                <div class="box-body">
                                                        <div class="col-lg-offset-3 col-lg-5">
                                                        @include('includes.validmessage')
                                                                
                                                                <div class="form-group">
                                                                        <label for="role">Register As</label>
                                                                        <select class="form-control" id="role" name="role">
                                                                        @foreach($roles as $role)
                                                                            @if($role->id == $admin_role->role_id)
                                                                            <option value="{{$role->id}}">{{$role->role}}
                                                                            </option>
                                                                            @endif
                                                                        @endforeach
                                                                            @foreach($roles as $role)
                                                                                <option value="{{$role->id}}">{{$role->role}}</option>

                                                                                
                                                                            @endforeach
                                                                        
                                                                </select>
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                        <a href="{{route('admin_register.index')}}" class="btn btn-primary">Back</a>
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
@include('includes.listjs')
@endsection