@extends('main.index')
@section('content')
<div class="detail" style="height:50%" >
          <div class="container pull-left">
              <div class="col-md-3" style="margin-top:70px;">
                  <img class="profile-user-img img-responsive img-circle" src="{{Auth::user()->profile_pic}}" alt="" />
                      <h2>{{ Auth::user()->first_name }} {{Auth::user()->last_name}}</h2>
                      <h4>Food Traveler</h4>
              </div>

          </div>
</div>

  <div class="container-fluid" style="margin-top:10px;">
      <div class="row sidebar">
        <div class="col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Make Reservation</h3>
                </div>
                <div class="panel-body">
                    <form method="post" action="/uploadimage" enctype="multipart/form-data">
                        <div class="form-group ">
                            <label class="control-label " for="image">
                                Choose Image
                            </label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-camera">
                                    </i>
                                </div>
                                <input class="form-control" id="image" name="image" type="file"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <button class="btn btn-primary" name="submit" type="submit">
                                    Upload!
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
          <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary" id="panel-menu" class="tab-pane fade">
                        <div class="panel-heading">
                            <h3 class="panel-title">RestoEat Credit</h3>
                        </div>
                        <div class="panel-body">
                            <h4 class="fa fa-money "> Your Current Credit : {{ Auth::user()->credits }}</h4>
                        </div>
                    </div>
                </div>
            </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="panel panel-primary" id="panel-menu" class="tab-pane fade">
                          <div class="panel-heading">
                              <h3 class="panel-title">Your Upcoming Bookings</h3>
                          </div>
                          <div class="panel-body">
                              <table class="table">
                                  <tr>
                                      <th>Restaurants</th>
                                      <th>Date</th>
                                      <th>
                                        Time
                                      </th>
                                      <th>Table</th>
                                      <th>
                                        Action
                                      </th>
                                  </tr>
                                  @foreach($bookings as $booking)
                                  <tr>
                                      <td></td>
                                      <td>7 PM</td>
                                      <td>
                                        Test
                                      </td>
                                      <td>
                                        test
                                      </td>
                                      <td>
                                        <button class="btn btn-primary" type="button" name="button"><span class="fa fa-times"> Cancel</span></button>
                                      </td>
                                  </tr>
                                @endforeach

                              </table>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="panel panel-primary" id="reviews" class="tab-pane fade">
                          <div class="panel-heading">
                              <h3 class="panel-title">Past Reservation</h3>
                          </div>
                          <div class="panel-body">
                              <table class="table">

                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

      </div>
  </div>
@stop
