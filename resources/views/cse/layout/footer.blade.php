
            
            <!-- footer-->
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <div class="row">
                                <div class="col-sm-3" >
                                    <b>Useful Links</b>
                                    <ul>
                                        <li><a href="">NOC & GO</a></li>
                                        <li><a href="">Download Form</a></li>
                                        <li><a href="">Registered Graduates: Apply Online</a></li>
                                        <li><a href="">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-3" >
                                    <b>Admission Links</b>
                                    <ul>
                                        <li><a href="">Undergraduate</a></li>
                                        <li><a href="">MPhil & PhD</a></li>
                                        <li><a href="">Admission Test Result</a></li>
                                        <li><a href="">Weekend Courses</a></li>
                                    </ul>
                                    
                                </div>
                                <div class="col-sm-3" >
                                    <b>Others</b>
                                    <ul>
                                        <li><a href="">Registered Graduate List</a></li>
                                        <li><a href="{{ route('teachers.index')}}">Faculty Members</a></li>
                                        <li><a href="">ICT Cell</a></li>
                                        <li><a href="">Feedback: webs@juniv.edu</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-3" >
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-6">
                                            &nbsp;&nbsp;&nbsp;
                                            <a href="https://www.facebook.com/edu.juniv" class=""><span class="fa fa-facebook"></span></a>
                                            <a href="" class=""><span class="fa fa-twitter"></span></a>
                                            <a href="" class=""><span class="fa fa-linkedin"></span></a><br>
                                            <img src="{{asset('public/image/ju_logo_original.png')}}" class="" alt="">
                                        </div>
                                        <div class="col-sm-3"></div>
                                    </div>
                                    <small>Jahangirnagar University, <br>Savar, Dhaka-1342, Bangladesh. <br>Telephone: PABX: 880-2-7791045-51, Fax: 880-2-7791052</small>
                                </div>
                            </div>
                            
                        </nav>
                            
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              

              <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ route('csehome')}}">&copy;{{date("Y")}} Jahangirnagar University.<span class="sr-only">(current)</span></a>
                  </li>
                  
                </ul>
                
              </div>
            </nav>
        </div>
    </body>
</html>

<script src="{{asset('public/user/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/user/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('public/user/vendor/jquery/jquery-ui.min.js')}}"></script>
<script>
$(function() {

    $('.card-header .nav.nav-tabs li a').on('click', function() {

        var $panel = $(this).closest('.card-header');

        $panel.find('.nav.nav-tabs li a.active').removeClass('active');
        $(this).addClass('active');

        //figure out which panel to show
        var panelToShow = $(this).attr('rel');

        //hide current panel
        $('.card-body .tab-content .tab-pane.fade.show.active').hide(1, showNextPanel);

        //show next panel
        function showNextPanel() {
            $(this).removeClass('active');

            $('#'+panelToShow).show(1, function() {
                $(this).addClass('active');
            });
        }
    });


});
$(function() {

    $('.nav.nav-tabs li a').on('click', function() {

        var $panel = $(this).closest('.nav.nav-tabs');

        $panel.find('li a.active').removeClass('active');
        $(this).addClass('active');

        //figure out which panel to show
        var panelToShow = $(this).attr('rel');

        //hide current panel
        $('.tab-content .tab-pane.fade.show.active').hide(1, showNextPanel);

        //show next panel
        function showNextPanel() {
            $(this).removeClass('active');

            $('#'+panelToShow).show(1, function() {
                $(this).addClass('active');
            });
        }
    });


});






</script>


@section('js')
@show