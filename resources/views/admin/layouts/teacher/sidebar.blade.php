<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                        <div class="pull-left image">
                                <img src="{{asset('storage/app/'.$teacher->photo)}}" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                                <p>{{$teacher->name}}</p>
                                <a href="{{route('teacher.index')}}"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                                <input type="text" name="q" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                        </button>
                                </span>
                        </div>
                </form>
                <!-- /.search form -->

                
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">

                       
                        <li><a href="{{ route('teacher.index')}}"><i class="fa fa-circle-o"></i><span>Personal Info</span></a></li>
                        <li><a href="{{ route('education.index')}}"><i class="fa fa-circle-o"></i><span>Education</span></a></li>
                        <li><a href="{{ route('experience.index')}}"><i class="fa fa-circle-o"></i><span>Experience</span></a></li>
                        <li><a href="{{ route('journal.index')}}"><i class="fa fa-circle-o"></i><span>Journal</span></a></li>
                        

                </ul>
        </section>
        <!-- /.sidebar -->
</aside>
