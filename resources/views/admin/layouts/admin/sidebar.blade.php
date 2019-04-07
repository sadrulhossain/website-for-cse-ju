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
                                <a href="{{route('admin_teacher.index')}}"><i class="fa fa-circle text-success"></i> Online</a>
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

                        <li class="active">
                                <a href="{{ route('admin.dashboard')}}">
                                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                </a>
                        </li>
                        <li>
                                <a href="{{ route('admin_register.create')}}">
                                        <i class="fa fa-pencil"></i> <span>Register</span>
                                </a>
                        </li>
                        <li class="treeview">
                                <a href=""><i class="fa fa-circle-o"></i><span>Admin Info</span></a>
                                <ul class="treeview-menu">
                                        <li><a href="{{ route('admin_teacher.index')}}"><i class="fa fa-circle-o"></i><span>Personal Info</span></a></li>
                                        <li><a href="{{ route('admin_education.index')}}"><i class="fa fa-circle-o"></i><span>Education</span></a></li>
                                        <li><a href="{{ route('admin_experience.index')}}"><i class="fa fa-circle-o"></i><span>Experience</span></a></li>
                                        <li><a href="{{ route('admin_journal.index')}}"><i class="fa fa-circle-o"></i><span>Journal</span></a></li>
                                </ul>
                        </li>
                        <li><a href="{{ route('admin_register.index')}}"><i class="fa fa-circle-o"></i><span>Teachers</a></li>
                        <li><a href="{{ route('staff.index')}}"><i class="fa fa-circle-o"></i><span>Staffs</span></a></li>
                        <li><a href="{{ route('course.index')}}"><i class="fa fa-circle-o"></i><span>Courses</span></a></li>
                        <li><a href="{{ route('notice.index')}}"><i class="fa fa-circle-o"></i><span>Notice</span></a></li>
                        <li><a href="{{ route('news.index')}}"><i class="fa fa-circle-o"></i><span>News</span></a></li>
                        <li><a href="{{ route('event.index')}}"><i class="fa fa-circle-o"></i><span>Events</span></a></li>

                </ul>
        </section>
        <!-- /.sidebar -->
</aside>
