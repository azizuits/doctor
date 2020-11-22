<!-- Sidebar -->
    <div class="header">
    <div class="header-left">
        <a href="index-2.html" class="logo">
            <img src="{{asset('assets/img/logo.png')}}" width="35" height="35" alt=""> <span>Doctor Project</span>
        </a>
    </div>
    <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
    <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
    <ul class="nav user-menu float-right">
        <li class="nav-item dropdown d-none d-sm-block">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge badge-pill bg-danger float-right">3</span></a>
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span>Notifications</span>
                </div>
                <div class="drop-scroll">
                    <ul class="notification-list">
                        <li class="notification-message">
                            <a href="activities.html">
                                <div class="media">
											<span class="avatar">
												<img alt="John Doe" src="assets/img/user.jpg" class="img-fluid">
											</span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
                                        <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="activities.html">
                                <div class="media">
                                    <span class="avatar">V</span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
                                        <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="activities.html">
                                <div class="media">
                                    <span class="avatar">L</span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
                                        <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="activities.html">
                                <div class="media">
                                    <span class="avatar">G</span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
                                        <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="activities.html">
                                <div class="media">
                                    <span class="avatar">V</span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
                                        <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topnav-dropdown-footer">
                    <a href="activities.html">View all Notifications</a>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown d-none d-sm-block">
            <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><i class="fa fa-comment-o"></i> <span class="badge badge-pill bg-danger float-right">8</span></a>
        </li>
        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
							<img class="rounded-circle" src="{{asset('assets/img/user.jpg')}}" width="24" alt="Admin">
							<span class="status online"></span>
						</span>
                <span>Admin</span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="profile.html">My Profile</a>
                <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                <a class="dropdown-item" href="settings.html">Settings</a>
                <a class="dropdown-item" href="login.html">Logout</a>
            </div>
        </li>
    </ul>
    <div class="dropdown mobile-user-menu float-right">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="profile.html">My Profile</a>
            <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
            <a class="dropdown-item" href="settings.html">Settings</a>
            <a class="dropdown-item" href="login.html">Logout</a>
        </div>
    </div>
</div>
    <!-- Sidebar Menu -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
        <ul>
            <li class="active">
                <a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
{{--                <span>{{ trans('global.dashboard') }}</span>--}}
            </li>

            <li> <a href="{{route("admin.doctorinfoform")}}"><i class="fa fa-user-md"></i><span>Add Doctor Information </span></a> </li>
            <li><a href="{{route("admin.doctorinfoview")}}"><i class="fa fa-eye"></i><span>Doctor Information View</span></a> </li>
            <li><a href="{{route("admin.doctorfeeinfoform")}}"><i class="fa fa-money"></i><span>Add Doctor Fee Information </span></a> </li>
            <li><a href="{{route("admin.doctorfeeinfoview")}}"><i class="fa fa-eye"></i><span>Doctor Fee Information View</span></a></li>
            <li><a href="{{route("admin.employeeinfoform")}}"><i class="fa fa-eye"></i><span>Add Employee Information</span></a> </li>
            <li><a href="{{route("admin.employeeinfoview")}}"><i class="fa fa-eye"></i><span>Employee Information View</span></a> </li>
            <li><a href="{{route("admin.medicineinfoform")}}"><i class="fa fa-user"></i><span>Add Medicine Information View</span></a> </li>
            <li><a href="{{route('admin.medicineinfoview')}}"><i class="fa fa-eye"></i><span>Medicine Information View</span></a> </li>
            <li><a href="{{route("admin.patientinfoform")}}"><i class="fa fa-eye"></i><span>Add Patient Information</span></a> </li>
            <li><a href="{{route("admin.patientinfoview")}}"><i class="fa fa-eye"></i><span>Patient Information View</span></a> </li>
            <li><a href="{{route("admin.patienttestinfoform")}}"><i class="fa fa-eye"></i><span>Add Patient Test Information</span></a> </li>
            <li><a href="{{route('admin.patienttestinfoview')}}"><i class="fa fa-eye"></i><span>Patient Test Information View</span></a> </li>
            <li><a href="{{route('admin.prescriptioninfoform')}}"><i class="fa fa-eye"></i><span>Add Prescription Information</span></a> </li>
            <li><a href="{{route('admin.prescriptioinfoview')}}"><i class="fa fa-eye"></i><span>Prescription Information View</span></a> </li>
            <li><a href="{{route('admin.chamberinfoform')}}"><i class="fa fa-eye"></i><span>Add Champber Information</span></a> </li>
            <li><a href="{{route('admin.chamberinfoview')}}"><i class="fa fa-eye"></i><span>Chamber Information View</span></a> </li>
            <li><a href="{{route('admin.scheduleinfoform')}}"><i class="fa fa-eye"></i><span>Add Schedule Information</span></a> </li>
            <li><a href="{{route('admin.scheduleinfoview')}}"><i class="fa fa-eye"></i><span>Schedule Information View</span></a> </li>
            <li><a href="{{route('admin.orderschedulebookform')}}"><i class="fa fa-eye"></i><span>Order Schedule Book</span></a> </li>
            <li class="submenu">
                <a href="#"><i class="fa fa-money"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
                <ul style="display: none;">
                    <li><a href="invoices.html">Invoices</a></li>
                    <li><a href="payments.html">Payments</a></li>
                    <li><a href="expenses.html">Expenses</a></li>
                    <li><a href="taxes.html">Taxes</a></li>
                    <li><a href="provident-fund.html">Provident Fund</a></li>
                </ul>
            </li>

            <li>
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <p>
                        <i class="fas fa-fw fa-sign-out-alt">

                        </i>
                        <span>{{ trans('global.logout') }}</span>
                    </p>
                </a>
            </li>
        </ul>
    </div>

</div>
    </div>

