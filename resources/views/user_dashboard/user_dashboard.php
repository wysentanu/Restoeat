<div class="detail" >
          <div class="container pull-left">
              <div class="col-md-3" style="margin-top:2%;">
                  <img class="profile-user-img img-responsive img-circle" src="img/banner.jpg" alt="" />
                      <h2>Surya Diputra</h2>
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
                    <form method="post">
                        <div class="form-group ">
                            <label class="control-label " for="date">
                                Date
                            </label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar">
                                    </i>
                                </div>
                                <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text" readonly="readonly"/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label" for="time">
                                Time
                            </label>
                            <select class="select form-control" id="time" name="time">
                                <option value="08:00">
                                    08:00
                                </option>
                                <option value="09:00">
                                    09:00
                                </option>
                                <option value="10:00">
                                    10:00
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="time">
                                Number of Person
                            </label>
                            <select class="select form-control" id="time" name="time">
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
                            <div>
                                <button class="btn btn-primary" name="submit" type="submit">
                                    Book!
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
                            <h4 class="fa fa-money "> Your Current Credit :</h4>
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
                                      <th>Time</th>
                                      <th>Table</th>
                                      <th>
                                        Action
                                      </th>
                                  </tr>
                                  <tr>
                                      <td>Mad Dog</td>
                                      <td>7 PM</td>
                                      <td>
                                        Test
                                      </td>
                                      <td>
                                        <button class="btn btn-primary" type="button" name="button"><span class="fa fa-times"> Cancel</span></button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>Tipat Cantok</td>
                                      <td>$50</td>
                                      <td>
                                        Test
                                      </td>
                                      <td>
                                        <button class="btn btn-primary" type="button" name="button"><span class="fa fa-times"> Cancel</span></button>
                                      </td>
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
