@extends('cse.layout.app')
@section('title','Jahangirnagar University')
@section('css')

@endsection

@section('body')
            <div class="card bg-light mb-3">
                        <div class="card-body">
                          @if(count($noticeboard) > 0)
                            <center><h6 class="card-title">Notice Board</h6></center>
                            <hr>
                            <table class="table table-bordered table-striped table-responsive">
                  <thead>
                    <tr class="table-secondary">
                        <th>#</th>
                        <th>Notice</th>
                        <th>Published At</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($noticeboard as $notice)
                  <tr >
                        <td>{{$loop->index+1}}.</td>
                        <td>{{$notice->title}}</td>
                        <td>{{date('d M Y', strtotime($notice->created_at))}}</td>
                        <td><a href="storage/app/{{$notice->file_path}}" download="{{$notice->file_path}}" class="btn btn-primary btn-sm btn-fill"><span class="fa fa-download"> Download</span></a></td>
                    </tr>
                    @endforeach
                  </tbody>
                  
              </table> 
              <div class="clearfix">{{$noticeboard->links()}}</div>

              @else
              There is no notice found.
              @endif
                        </div>
                    </div>
                    
                    
                
@endsection

@section('js')

@endsection