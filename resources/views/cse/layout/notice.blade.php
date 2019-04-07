                  <div class="col-lg-4">
                    <div class="card bg-light mb-3">

                        <div class="card-header">
                        
                          <ul class="nav nav-tabs">
                            <li class="nav-item" >
                              <a class="nav-link  active" rel="notice"><span class="fa fa-clipboard"> Notice</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" rel="events"><span class="fa fa-calendar"> Events</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " rel="news"><span class="fa fa-newspaper-o"> News</span></a>
                            </li>
                            
                          </ul>
                        </div>
                        <div class="card-body">
                          <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade show active" id="notice">
                              <div class="list-group">
                              @foreach($notices as $notice)
                              <a href="storage/app/{{$notice->file_path}}" class="list-group-item list-group-item-action  align-items-start " download="{{$notice->file_path}}">
                                <div class="row">
                                  <div class="col-sm-5"></div>
                                  <div class="col-sm-7">
                                    <small class="alignright">{{$notice->created_at->diffforHumans()}}</small>
                                  </div>
                                  <p class="mb-1">{{$notice->title}}</p>
                                </div>
                              </a>
                              @endforeach
                              <a href="{{route('notices')}}" class="btn btn-info pull-right"><small>View All</small></a>
                              </div>
                            </div>
                            <div class="tab-pane fade show" id="events">
                              <div class="list-group">
                              @foreach($events as $event)
                              <a href="{{route('view_event', $event->id)}}" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="row">
                                  <div class="col-sm-5"></div>
                                  <div class="col-sm-7">
                                    <small class="alignright">{{$event->date->diffforHumans()}}</small>
                                  </div>
                                  <p class="mb-1">{{$event->title}}</p>
                                </div>
                              </a>
                              @endforeach
                              <a href="{{route('events')}}" class="btn btn-info pull-right"><small>View All</small></a>
                              </div>
                            </div>
                            <div class="tab-pane fade show" id="news">
                              <div class="list-group">
                                @foreach($news as $n)
                                <a href="{{$n->url}}" target="_new" class="list-group-item list-group-item-action flex-column align-items-start ">
                                <div class="row">
                                 <div class="col-sm-5"></div>
                                 <div class="col-sm-7">
                                   <small class="alignright">{{$n->created_at->diffforHumans()}}</small>
                                 </div>
                                 <p class="mb-1">{{$n->title}}</p>
                                  </div>
                                </a>
                                @endforeach
                                <a href="" class="btn btn-info pull-right"><small>View All</small></a>
                              </div>
                            </div>

                          </div>
                            

                        </div>
                    </div>
                    
                    
                </div>

            </div>