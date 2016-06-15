<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                @if(is_null(auth('restaurant')->user()->profile_pic))
                    <img src="/images/default_rest.jpg" class="img-circle" alt="Restauran Image"/>
                @else
                    <img src="{{ auth('restaurant')->user()->profile_pic }}" class="img-circle" alt="User Image"/>
                @endif
            </div>
            <div class="pull-left info">
                <p>{{ Auth::guard('restaurant')->user()->nama }}</p>
                <!-- Status -->
                <p>Restaurant</p>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Navigation</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="#"><span>Today</span></a></li>
            <li><a href="#"><span>Restaurant's Menu</span></a></li>
            <li><a href="#"><span>Bookings History</span></a></li>
            <li class="treeview">
                <a href="#"><span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Link in level 2</a></li>
                    <li><a href="#">Link in level 2</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
