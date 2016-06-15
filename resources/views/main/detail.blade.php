@extends('main.index')
@section('css')
<link href="{{ asset("bower_components/bootstrap-star-rating/css/star-rating.css") }}" media="all" rel="stylesheet" type="text/css" />
<link href="{{ asset("bower_components/bootstrap-star-rating/css/theme-krajee-fa.css") }}" media="all" rel="stylesheet" type="text/css" />

<!-- Bootstrap Date-Picker Plugin -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker3.css"/>
@stop

@section('content')
<div class="detail">
    <div class="container">
        <div class="col-md-3" style="margin-top:5%;">
            <img class="profile-user-img img-responsive img-circle" src="{{ asset("/images/veget.png") }}" alt="" />
        </div>
        <div class="col-md-3" style="margin-top:5%;">
            <h2>{{ $restaurant->nama }} Restaurant</h2>
            <input id="bintang" name="input-name" type="number" class="rating" value="3">
            <h4>@if($restaurant->kategori == 0) Vegetarian @elseif($restaurant->kategori == 1) Regular @else Fine Dining @endif| up to $40</h4>
        </div>
    </div>
</div>

<div class="container-fluid" style="margin-top:10px;">
    <div class="row sidebar">
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a data-toggle="pill" href="#details">Details</a></li>
                <li><a data-toggle="pill" href="#panel-menu">Menu</a></li>
                <li><a data-toggle="pill" href="#reviews">Reviews</a></li>
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
                            <h3>About {{ $restaurant->nama }} Restaurant</h3>
                            <p>{{ $restaurant->description }}</p>
                        </div>
                        <div id="address" class="tab-pane fade">
                            <h3>{{ $restaurant->nama }} Restaurant Address</h3>
                            <p>{{ $restaurant->alamat }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary" id="panel-menu" class="tab-pane fade">
                        <div class="panel-heading">
                            <h3 class="panel-title">Menu</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary" id="reviews" class="tab-pane fade">
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
                <div class="panel-body" id="book-panel">
                    <form>
                        @if(Auth::user())
                            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
                        @endif
                        <input type="hidden" id="restaurant_id" name="restaurant_id" value="1">

                        <div class="form-group ">
                            <label class="control-label" for="date">
                                Date
                            </label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar">
                                    </i>
                                </div>
                                <input class="form-control" id="date" name="date" placeholder="YYYY-MM-DD" type="text" value="{{ Carbon\Carbon::today('Asia/Makassar')->format('Y-m-d') }}"readonly="readonly"/>
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
                                <button class="btn btn-primary" id="submit">
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
@stop
@section('jscript')
<script type="text/javascript" src="{{ asset("bower_components/jquery/dist/jquery.js") }}"></script>
{{-- <script type="text/javascript" src="{{ asset("bower_components/bootstrap/dist/js/bootstrap.js") }}"></script> --}}
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/js/bootstrap-datepicker.js"></script>
<script src="{{ asset("bower_components/bootstrap-star-rating/js/star-rating.js") }}" type="text/javascript"></script>
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
        startDate: "0d",
        todayHighlight: true,
        autoclose: true,
        defaultDate: "2016-06-12",
    });
});

$('#submit').on('click', function(e) {
    e.preventDefault();

    var user_id = $('#user_id').val();
    var restaurant_id = $('#restaurant_id').val();
    var date = $('#date').val();
    var time = $('#time').val();
    var people = $('#people').val();
    var table = $('#table').val();

    var formData = "user_id="+user_id+"&restaurant_id="+restaurant_id+"&date="+date+"&time="+time+"&people="+people+"&table="+table;

    $.ajax({
        type: "POST",
        url: "/book",
        data: formData,
        dataType: 'json',
    }).success(function( msg ) {
        if(msg=="sukses")
        {
            $("#book-panel").append(
                "<div class='alert alert-success' id='popup'> <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <strong>Book Success!</strong> Booking success.</div>"
            );
        }
        else if(msg=="sudah")
        {
            $("#book-panel").append(
                "<div class='alert alert-danger' id='popup'> <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <strong>Book Fail!</strong> Already Booked.</div>"
            );
        }
        else if(msg=="credit")
        {
            $("#book-panel").append(
                "<div class='alert alert-danger' id='popup'> <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <strong>Book Fail!</strong> Not enough Credit.</div>"
            );
        }
        else
        {
            $("#book-panel").append(
                "<div class='alert alert-danger' id='popup'> <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <strong>Book Fail!</strong> Unknown Error.</div>"
            );
        }

        setTimeout(function() {
            $("#popup").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 3000);

    }).fail(function() {
        $("#book-panel").append(
            "<div class='alert alert-danger'> <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <strong>Book Fail!</strong> Not enough Credit.</div>"
        );

        setTimeout(function() {
            $("#popup").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 3000);

    });
});
</script>
@stop
