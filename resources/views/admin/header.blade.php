<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="/restaurant" class="logo"><b>Dashboard</b></a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Notifications Menu -->
                <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">10</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <!-- Inner Menu: contains the notifications -->
                            <ul class="menu">
                                <li><!-- start notification -->
                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                    </a>
                                </li><!-- end notification -->
                            </ul>
                        </li>
                    </ul>
                </li>

                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        @if(is_null(auth('restaurant')->user()->profile_pic))
                            <img src="/images/default_rest.jpg" class="user-image" alt="Restauran Image"/>
                        @else
                            <img src="{{ auth('restaurant')->user()->profile_pic }}" class="user-image" alt="User Image"/>
                        @endif
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{ Auth::guard('restaurant')->user()->nama }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            @if(is_null(auth('restaurant')->user()->profile_pic))
                                <img src="/images/default_rest.jpg" class="img-circle" alt="Restauran Image"/>
                            @else
                                <img src="{{ auth('restaurant')->user()->profile_pic }}" class="img-circle" alt="User Image"/>
                            @endif
                            <p>
                                {{ Auth::guard('restaurant')->user()->nama }}
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="col-xs-4 text-center">
                                <a href="#">Followers</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Sales</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Friends</a>
                            </div>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="/restaurant/profile" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="/restaurant/signout" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
