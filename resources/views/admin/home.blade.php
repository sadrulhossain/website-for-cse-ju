@extends('admin.layouts.admin.app')
@section('title', 'Dashboard')
@section('head')
@include('includes.listcss')
@endsection
@section('body')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
                <h1>
                        Dashboard
                </h1>
                
        </section>
        <section class="content">
        <div class="row">
        <a href="{{route('admin_register.index')}}">
        <div class="col-lg-2 col-lg-6 col-lg-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-address-book"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Teachers</span>
              <span class="info-box-number">{{$teachers}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        </a>
        <!-- /.col -->
        <a href="{{route('staff.index')}}">
        <div class="col-md-2 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-address-book-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Staffs</span>
              <span class="info-box-number">{{$staffs}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        </a>
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>
        <a href="{{route('course.index')}}">
        <div class="col-md-2 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-book"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Courses</span>
              <span class="info-box-number">{{$courses}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        </a>
        <a href="{{route('notice.index')}}">
        <div class="col-md-2 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-purple"><i class="fa fa-clipboard"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Notices</span>
              <span class="info-box-number">{{$notices}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        </a>
        <a href="{{route('event.index')}}">
        <div class="col-md-2 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Events</span>
              <span class="info-box-number">{{$events}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        </a>
        <a href="{{route('news.index')}}">
        <div class="col-md-2 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-orange"><i class="fa fa-newspaper-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">News</span>
              <span class="info-box-number">{{$news}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        </a>
        
      </div>
      <!-- /.row -->
    </section>
        


</div>
@endsection
@section('js')
@include('includes.listjs')
@endsection
