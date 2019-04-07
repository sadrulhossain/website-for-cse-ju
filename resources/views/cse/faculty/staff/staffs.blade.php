@extends('cse.layout.app')
@section('title','Jahangirnagar University CSE Staffs')
@section('css')

@endsection

@section('body')
		<div class="card bg-light mb-1">
                            
                                <div class="card-body">
                                    <div class="list-group">
                                      @foreach($staffs as $staff)
                                      <div class="list-group-item list-group-item-action ">
                                        <div class="row">
                                        	<div class="col-sm-3">
                                                <img src="{{asset('public/image/sadrul.jpg')}}" alt="sadrul" style="border-radius: 50%" width="150px">
                                            </div>
                                            <div class="col-sm-9">
                                                <b><i>{{$staff->name}}</i></b>
                                                <hr>
                                                @foreach($designations as $designation)
                                                    @if($designation->id == $staff->designation)
                                                        {{$designation->designation}}
                                                    @endif
                                                @endforeach

                                            </div>
                                        </div>
                                      </div>
                                      
                                      @endforeach
                                    </div>
                                    <div class="clearfix">
                                        {{$staffs->links()}}
                                    </div>

                                </div>
                            </div>
                        
	
@endsection

@section('js')

@endsection