<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="/"><img src="/images/RestoEat.png" alt=""/></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-form">
            <li>
              <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                  <input type="text" name="q" class="form-control" placeholder="Search Restaurants...">
                      <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                        </button>
                      </span>
                </div>
              </form>
            </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li>
                    <a class="page-scroll" href="#featured">Featured</a>
                </li>
                <li>
                    <a class="page-scroll" href="#top_reviews">Top Reviews</a>
                </li>
                <li>
                    <a class="page-scroll" href="#categories">Categories</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li>
                @if(!Auth::user())
                <li>
                    <a class="page-scroll" href="/login">Sign In</a>
                </li>
                @else
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ Auth::user()->profile_pic }}" class="user-image" alt="User Image">
                    <span class="hidden-xs">&nbsp &nbsp &nbsp<span class="glyphicon glyphicon-chevron-down"></span></span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header" >
                      <img src="{{ Auth::user()->profile_pic }}" class="img-circle" alt="User Image">
                      <p>
                        <small style="color:grey;">{{ Auth::user()->first_name }}</small>
                      </p>
                      <p>
                        <small style="color:grey;">{{ Auth::user()->credits }}</small>
                      </p>

                    </li>
                    <!-- Menu Body -->

                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div class="pull-right" style="margin-left:5px;">
                        <a href="/signout" class="btn btn-primary btn-flat">Sign Out</a>
                      </div>
                      <div class="pull-right">
                        <a href="/dashboard" class="btn btn-success btn-flat">Dashboard</a>
                      </div>
                    </li>
                  </ul>
                </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
