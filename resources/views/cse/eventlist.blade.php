@extends('cse.layout.app')
@section('title','Jahangirnagar University')
@section('css')

@endsection

@section('body')
            <div class="card bg-light mb-3">
                        <div class="card-body">
                          @if(count($eventlist) > 0)
                            <center><h6 class="card-title">Event List</h6></center>
                            <hr>
                            <table class="table table-bordered table-striped table-responsive">
                  <thead>
                    <tr class="table-secondary">
                        <th>#</th>
                        <th>Event</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($eventlist as $event)
                  <tr >
                        <td>{{$loop->index+1}}.</td>
                        <td>{{$event->title}}</td>
                        <td>{{date('d M Y', strtotime($event->date))}}</td>
                        <td><a href="{{route('view_event', $event->id)}}" class="btn btn-primary btn-sm btn-fill"><span class="fa fa-eye"> View</span></a></td>
                    </tr>
                    @endforeach
                  </tbody>
                  
              </table> 
              <div class="clearfix">{{$eventlist->links()}}</div>

              @else
              There is no event found.
              @endif
                        </div>
                    </div>
                    
                    
                
@endsection

@section('js')

@endsection