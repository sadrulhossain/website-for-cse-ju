@extends('cse.layout.app')
@section('title','Jahangirnagar University')
@section('css')

@endsection

@section('body')
            <div class="card bg-light mb-3">
                        <div class="card-body">
                          @if(count($newslist) > 0)
                            <center><h6 class="card-title">News List</h6></center>
                            <hr>
                            <table class="table table-bordered table-striped table-responsive">
                            <thead>
                              <tr class="table-secondary">
                                  <th>#</th>
                                  <th>News</th>
                                  <th>Published At</th>
                                  <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($newslist as $news)
                            <tr >
                                  <td>{{$loop->index+1}}.</td>
                                  <td>{{$news->title}}</td>
                                  <td>{{date('d M Y', strtotime($news->created_at))}}</td>
                                  <td><a href="{{$news->url}}" target="_new" class="btn btn-primary btn-sm btn-fill"><span class="fa fa-eye"> View</span></a></td>
                              </tr>
                              @endforeach
                            </tbody>
                            
                        </table> 
                        <div class="clearfix">{{$newslist->links()}}</div>

                        @else
                        There is no news found.
                        @endif
                        </div>
                    </div>
                    
                    
                
@endsection

@section('js')

@endsection