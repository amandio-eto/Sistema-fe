<!-- NAVBAR -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="brand">
        {{--  <a href="index.html"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>  --}}
        <h4>{{ env('APP_NAME', 'Laravel') }}</h4>
    </div>
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>


        <div id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
               <li class="dropdown">

                <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                    <i class="bi bi-pen" data-toggle="modal" data-target="#exampleModal"></i>

                </a>

                    <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                        <i class="lnr lnr-alarm"></i>
                        <span class="badge bg-danger">5</span>
                    </a>
                    <ul class="dropdown-menu notifications">
                        <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System
                                space is almost full</a></li>

                        <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly
                                report is available</a></li>
                        <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly
                                meeting in 1 hour</a></li>
                        <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your
                                request has been approved</a></li>
                        <li><a href="#" class="more">See all notifications</a></li>
                    </ul>
                </li>
                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i>
                        <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Basic Use</a></li>
                        <li><a href="#">Working With Data</a></li>
                        <li><a href="#">Security</a></li>
                        <li><a href="#">Troubleshooting</a></li>
                    </ul>
                </li>
                <li class="dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ asset('images/'.Auth::user()->foto) }}"
                            class="img-circle" alt="Avatar" style="width: 40px;height:40px;possition:absolute;top:10px;left:10px;border: 2px solid black;"> <span>{{ auth()->user()->name }}</span> <i
                            class="icon-submenu lnr lnr-chevron-down"></i></a>
                    <ul class="dropdown-menu">

                        <li><a href="{{ url('/myprofile') }}"><i class="bi bi-person-circle"></i><span class="">Profile</span></a></li>
                        <li><a href="{{ url('/auth/logout') }}"><i class="lnr lnr-exit text-danger"></i> <span class="text-danger">Logout</span></a></li>
                    </ul>
                </li>
                <!-- <li>

</li> -->
            </ul>
        </div>
    </div>
</nav>
<!-- END NAVBAR -->
