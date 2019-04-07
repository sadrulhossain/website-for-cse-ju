@extends('cse.layout.layout.app')
@section('title','Jahangirnagar University')
@section('css')

@endsection

@section('body')
<div class="card bg-light mb-3">
    <div class="card-body">
           <article>
            <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <img src="{{asset('storage/app/'.$event->photo)}}" alt="{{$event->title}}" style="" width="500px">
                        </div>
                        <div class="col-lg-7">
                            <hr/>
                            <div class="row">
                                <div class="col-lg-12">
                                    <big><strong><center>{{$event->title}}</center></strong></big><br>
                                    <small><strong>Date of Event: </strong>{{ date('d M Y', strtotime($event->created_at)) }}</small>
                                </div>
                                            
                            </div>
                            <hr/>
                            {!! htmlspecialchars_decode($event->body) !!}
                        </div>
                    </div>
            </div>
        </article>     
    </div>
</div>

        
                    
                
@endsection

@section('js')

@endsection