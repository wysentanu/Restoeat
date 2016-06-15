<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Detail Restaurant</title>
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/detail.css" media="screen" title="no title" charset="utf-8">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <link href="bower_components/bootstrap-star-rating/css/star-rating.css" media="all" rel="stylesheet" type="text/css" />
    <link href="bower_components/bootstrap-star-rating/css/theme-krajee-fa.css" media="all" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Date-Picker Plugin -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker3.css"/>

</head>
<body>
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">RestoEat</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="container-fluid">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li class="active">Data</li>
            </ol>
        </div>

        <div class="row">
            <div class="jumbotron">

                <div class="container">
                    <div class="col-md-3">
                        <img class="img-rounded img-thumbnail" src="a1.jpg" alt="" />
                    </div>
                    <div class="col-md-9">
                        <h2>Restaurant Mad Dog</h2>
                        <input id="bintang" name="input-name" type="number" class="rating" value="3">
                        <h4>Fast Food | up to $40</h4>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row sidebar">
            <div class="col-md-3">
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a data-toggle="pill" href="#details">Details</a></li>
                    <li><a href="#panel-menu">Menu</a></li>
                    <li><a href="#reviews">Reviews</a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs" id="details" class="tab-pane fade in active">
                            <li class="active"><a data-toggle="tab" href="#home">About</a></li>
                            <li><a data-toggle="tab" href="#address">Address</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <h3>About Mad Dog Restaurant</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div id="address" class="tab-pane fade">
                                <h3>Mad Dog Restaurant Address</h3>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default" id="panel-menu" class="tab-pane fade">
                            <div class="panel-heading">
                                <h3 class="panel-title">Menu</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                    </tr>
                                    <tr>
                                        <td>Nasi Kuning</td>
                                        <td>$100</td>
                                    </tr>
                                    <tr>
                                        <td>Tipat Cantok</td>
                                        <td>$50</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default" id="reviews" class="tab-pane fade">
                            <div class="panel-heading">
                                <h3 class="panel-title">Reviews</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table">

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Book Now!</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="{{ url('/book') }}">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="restaurant_id" value="1">

                            <div class="form-group ">
                                <label class="control-label " for="date">
                                    Date
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar">
                                        </i>
                                    </div>
                                    <input class="form-control" id="date" name="date" placeholder="YYYY-MM-DD" type="text" readonly="readonly"/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label" for="time">
                                    Time
                                </label>
                                <select class="select form-control" id="time" name="time">
                                    <option value="08:00:00">
                                        08:00
                                    </option>
                                    <option value="09:00:00">
                                        09:00
                                    </option>
                                    <option value="10:00:00">
                                        10:00
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="people">
                                    Number of People
                                </label>
                                <select class="select form-control" id="people" name="people">
                                    <option value="1">
                                        1 Person
                                    </option>
                                    <option value="2">
                                        2 People
                                    </option>
                                    <option value="3">
                                        3 People
                                    </option>
                                    <option value="4">
                                        4 People
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="table">
                                    Table Number
                                </label>
                                <select class="select form-control" id="table" name="table">
                                    <option value="1">
                                        Table 1
                                    </option>
                                    <option value="2">
                                        Table 2
                                    </option>
                                    <option value="3">
                                        Table 3
                                    </option>
                                    <option value="4">
                                        Table 4
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div>
                                    <button class="btn btn-primary " name="submit" type="submit">
                                        Book!
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="navbar navbar-default navbar-static-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h4>Love</h4>
            </div>
            <div class="col-md-6">
              <h4>Eat</h4>
            </div>
          </div>
        </div>
    </footer>

    <section>
        <!-- javascript -->
        <script type="text/javascript" src="bower_components/jquery/dist/jquery.js"></script>
        <script type="text/javascript" src=bower_components/bootstrap/dist/js/bootstrap.js></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/js/bootstrap-datepicker.js"></script>
        <script src="bower_components/bootstrap-star-rating/js/star-rating.js" type="text/javascript"></script>
        <script>
        $('#bintang').rating({
            readonly: true,
            size:'xs',
            showClear: false,
            showCaption: false,
        });

        $(document).ready(function(){
            $('#date').datepicker({
                format: 'yyyy-mm-dd',
                startDate: "-0d",
                todayHighlight: true,
                autoclose: true,
            });
        });
        </script>
    </section>
</body>
</html>
