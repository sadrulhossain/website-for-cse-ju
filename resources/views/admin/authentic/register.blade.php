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
                                       <form role="form" action="{{route('admin_register.store')}}" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <div class="box-body">
                                                        <div class="col-lg-offset-3 col-lg-5">
                                                        @include('includes.validmessage')
                                                                <div class="form-group">
                                                                        <label for="name">Name</label>
                                                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name...">
                                                                </div>
                                                                <div class="form-group">
                                                                        <label for="role">Register As</label>
                                                                        <select class="form-control" id="role" name="role">
                                                                            <option value="">
                                                                            </option>
                                                                            @foreach($roles as $role)
                                                                                <option value="{{$role->id}}">{{$role->role}}</option>

                                                                                
                                                                            @endforeach
                                                                        
                                                                </select>
                                                                </div>
                                                                               
                                                                                <div class="form-group">
                                                                                E-mail<label for="email">E-mail</label>
                                                                                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail...">
                                                                                </div>
                                                                             <div class="form-group">
                                                                                <label for="password">Password</label>
                                                                                <input type="Password" class="form-control" id="password" name="password">
                                                                                </div>         
                                                                        
                                                                                
                                                                
                                                                <div class="form-group">
                                                                        
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