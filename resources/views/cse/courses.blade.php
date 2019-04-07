@extends('cse.layout.app')
@section('title','Jahangirnagar University CSE Syllabus')
@section('css')

@endsection

@section('body')
                    <div class="card bg-light mb-3">
                        <div class="card-body">
                            <form role="form" action="{{route('syllabus.show')}}" method="post">
                                {{csrf_field()}}
							  	<fieldset>
							    	<legend>Search Syllabus With </legend>
							   		<hr>
							    	<div class="row">
                                    	<div class="col-lg-6">
                                    		@include('includes.validmessage')
                                        	<div class="form-group">
                                            	<label for="year">Year</label>
                                            	<select class="form-control" id="year" name="year">
                                                    <option value=""></option>
                                                    <option value="1st">1st</option>
                                                    <option value="2nd">2nd</option>
                                                    <option value="3rd">3rd</option>
                                                    <option value="4th">4th</option>
                                                </select>
                                            </div>   
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="Semester">Semester</label>
                                                <select class="form-control" id="semester" name="semester">
                                                    <option value=""></option>
                                                    <option value="1st">1st</option>
                                                    <option value="2nd">2nd</option>
                                                    <option value="3rd">3rd</option>
                                                </select>
                                            </div>  
                                        </div>
                                    </div>
							    	<div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-sm pull-right"><span class="fa fa-search"> Search Syllabus</span></button>
                                    </div>
							    </fieldset>
							</form>
                        </div>
                    </div>
                    <div class="card bg-light mb-3">
                        <div class="card-body">
                        	@if(count($courses) > 0)
                            <center><h6 class="card-title">{{$year}} Year {{$semester}} Semester</h6></center>
                            <hr>
                            <table class="table table-bordered table-striped table-responsive">
							  	<thead>
							    	<tr class="table-secondary">
							      		<th>Course Code</th>
							      		<th>Course Title</th>
							      		<th>Credit</th>
							    	</tr>
							  	</thead>
							  	<tbody>
							  		@foreach($courses as $course)
									<tr >
							      		<td>{{$course->course_code}}</td>
							      		<td>{{$course->course_title}}</td>
							      		<td>{{$course->credit}}</td>
							    	</tr>
							    	@endforeach
							  	</tbody>
							  	<tfoot>
							  		<tr class="table-secondary">
							  			<th colspan="2">Total Credit</th>
							  			<th>{{$total_credit}}</th>
							  		</tr>
							  	</tfoot>
							</table> 
							@else
							There is no syllabus found for {{$year}} year {{$semester}} semester.
							@endif
                        </div>
                    </div>
                    
                
                
@endsection

@section('js')

@endsection