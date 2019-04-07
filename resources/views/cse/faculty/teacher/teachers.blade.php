@extends('cse.layout.app')
@section('title','Jahangirnagar University CSE Teachers')
@section('css')

@endsection

@section('body')
		<div class="card bg-light mb-1">
                            
                                <div class="card-body">
                                    <div class="list-group">
                                     @foreach($teachers as $teacher)   
                                      <a href="{{route('teachers.show', $teacher->id)}}" class="list-group-item list-group-item-action ">
                                        <div class="row">
                                        	<div class="col-sm-4">
                                        		<img src="{{asset('storage/app/'.$teacher->photo)}}" alt="{{$teacher->name}}" style="border-radius: 50%" width="150px" height="150px">
                                        	</div>
                                        	<div class="col-sm-8">
                                        		<b><i>{{$teacher->name}}</i></b>
                                                @foreach($educations as $edu)
                                                @if($edu->teacher_id == $teacher->id)
                                                <p><small> {{$edu->degree}} ({{$edu->institution}})
                                                    @if($edu->result != '')
                                                        , {{$edu->result}}
                                                        @if($edu->achievement != '')
                                                            , {{$edu->achievement}}.
                                                        @else 
                                                            . 
                                                        @endif
                                                    @else
                                                        . 
                                                    @endif
                                                </small></p>
                                                @endif
                                                @endforeach
                                    			<hr>
                                    			@foreach($designations as $designation)

                                                    @if($teacher->designation == $designation->id)
                                                        {{$designation->designation}}
                                                    @endif

                                                @endforeach
                                        	</div>
                                        </div>
                                      </a>
                                      @endforeach
                                      
                                      
                                      
                                    </div>
                                    
                                </div>
                            </div>
                        
	


@endsection

@section('js')

@endsection