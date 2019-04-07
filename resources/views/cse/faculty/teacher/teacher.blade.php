@extends('cse.layout.layout.app')
@section('title',$teacher->name)
@section('css')

@endsection

@section('body')


		<div class="card bg-light mb-3">
            <div class="card-body">
                <div class="row">
                	<div class="col-lg-3">
                		<img src="{{asset('storage/app/'.$teacher->photo)}}" alt="Chairman" style="border-radius: 25%" width="500px">
                	</div>
                	<div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-12"><big><b>{{$teacher->name}}</b></big>
                                @foreach($educations as $edu)
                                    
                                <small> {{$edu->degree}} ({{$edu->institution}})
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
                                </small>
                                    
                                @endforeach
                            </div>
                        </div>
                		@foreach($designations as $designation)
							@if($teacher->designation == $designation->id)
                                <b>{{$designation->designation}}</b>, Department of Computer Science & Engineering.
                            @endif
                        @endforeach
                        <br>Jahangirnagar University, Savar, Dhaka, Bangladesh.
                        <hr>
                        <ul class="nav nav-tabs">
                            <li class="nav-item" >
                              <a class="nav-link  active" rel="personal"><span class="fa fa-id-badge"> Personal Info</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" rel="experience"><span class="fa fa-institution"> Experience</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " rel="interest"><span class="fa fa-star-half-full"> Research Interest</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " rel="journal"><span class="fa fa-newspaper-o"> Journals & Publications</span></a>
                            </li>
                            
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade show active" id="personal">
                                <div class="card bg-light mb-3">
                                    <div class="card-body">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>Mobile</th>
                                                    <td><b>: </b>{{$teacher->mobile}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Phone</th>
                                                    <td><b>: </b>{{$teacher->phone}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Fax</th>
                                                    <td><b>: </b>{{$teacher->fax}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Email  </th>
                                                    <td><b>: </b>{{$teacher->email}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="experience">
                                <div class="card bg-light mb-3">
                                    <div class="card-body">
                                        <ol>
                                            @foreach($experiences as $experience)
                                            <li>
                                                @if($experience->from != '' && $experience->to != '')
                                                {{($experience->from == date('Y'))?'Present':$experience->from}}-{{($experience->to == date('Y'))?'Present':$experience->to}}, 
                                                @else
                                                
                                                @endif
                                                {{$experience->designation}}, {{$experience->organization}}.

                                            </li>
                                            @endforeach
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="interest">
                                <div class="card bg-light mb-3">
                                    <div class="card-body">
                                        <p>{{$teacher->interest}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="journal">
                                <div class="card bg-light mb-3">
                                    <div class="card-body">

    
                                        @php $countJ = 0 @endphp
                                        @foreach($journals as $journal)
                                        @if($journal->type == 4)
                                        @php $countJ++ @endphp
                                        @endif
                                        @endforeach
                                        @if($countJ > 0)
                                        <big>
                                            <center><strong>Journal</strong></center>
                                        </big><br>
                                        @endif
                                        @foreach($journals as $journal)
                                        @if($journal->type == 4)
                                        <p><a href="{{$journal->url}}" target="_new" style="text-decoration-line: none; color: blue">{{$journal->title}}</a>{!! htmlspecialchars_decode($journal->description) !!}</p>
                                        @endif
                                        @endforeach

                                        
                                        @php $countC = 0 @endphp
                                        @foreach($journals as $journal)
                                        @if($journal->type == 3)
                                        @php $countC++ @endphp
                                        @endif
                                        @endforeach
                                        @if($countC > 0)
                                        <big>
                                            <center><strong>Conference Paper</strong></center>
                                        </big><br>
                                        @endif
                                        @foreach($journals as $journal)
                                        @if($journal->type == 3)
                                        <p><a href="{{$journal->url}}" target="_new" style="text-decoration-line: none; color: blue">{{$journal->title}}</a>{!! htmlspecialchars_decode($journal->description) !!}</p>
                                        @endif
                                        @endforeach

                                        
                                        @php $countA = 0 @endphp
                                        @foreach($journals as $journal)
                                        @if($journal->type == 1)
                                        @php $countA++ @endphp
                                        @endif
                                        @endforeach
                                        @if($countA > 0)
                                        <big>
                                            <center><strong>Article</strong></center>
                                        </big><br>
                                        @endif
                                        @foreach($journals as $journal)
                                        @if($journal->type == 1)
                                        <p><a href="{{$journal->url}}" target="_new" style="text-decoration-line: none; color: blue">{{$journal->title}}</a>{!! htmlspecialchars_decode($journal->description) !!}</p>
                                        @endif
                                        @endforeach

                                        
                                        @php $countB = 0 @endphp
                                        @foreach($journals as $journal)
                                        @if($journal->type == 2)
                                        @php $countB++ @endphp
                                        @endif
                                        @endforeach
                                        @if($countB > 0)
                                        <big>
                                            <center><strong>Book</strong></center>
                                        </big><br>
                                        @endif
                                        @foreach($journals as $journal)
                                        @if($journal->type == 2)
                                        <p><a href="{{$journal->url}}" target="_new" style="text-decoration-line: none; color: blue">{{$journal->title}}</a>{!! htmlspecialchars_decode($journal->description) !!}</p>
                                        @endif
                                        @endforeach

                                        
                                        @php $countO = 0 @endphp
                                        @foreach($journals as $journal)
                                        @if($journal->type == 5)
                                        @php $countO++ @endphp
                                        @endif
                                        @endforeach
                                        @if($countO > 0)
                                        <big>
                                            <center><strong>Others</strong></center>
                                        </big><br>
                                        @endif
                                        @foreach($journals as $journal)
                                        @if($journal->type == 5)
                                        <p><a href="{{$journal->url}}" target="_new" style="text-decoration-line: none; color: blue">{{$journal->title}}</a>{!! htmlspecialchars_decode($journal->description) !!}</p>
                                        @endif
                                        @endforeach

                                        
                                        
                                    </div>
                                </div>
                            </div>

                        </div>
                	</div>
                </div>
            </div>
        </div>


@endsection

@section('js')

@endsection