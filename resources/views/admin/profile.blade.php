@extends('admin.index')

@section('content')
<div class="row">
    <div class="col-md-3">
        <!-- Profile Image -->
        <div class="box box-primary">
            <div class="box-body box-profile">
                @if(is_null(auth('restaurant')->user()->profile_pic))
                    <img class="profile-user-img img-responsive img-circle" src="/images/default_rest.jpg" alt="User profile picture">
                @else
                    <img class="profile-user-img img-responsive img-circle" src="{{ auth('restaurant')->user()->profile_pic }}" alt="User profile picture">
                @endif

                <h3 class="profile-username text-center">{{ Auth::guard('restaurant')->user()->nama }}</h3>

                <p class="text-muted text-center">Software Engineer</p>

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <b>Ratings</b> <a class="pull-right">1,322</a>
                    </li>
                    <li class="list-group-item">
                        <b>Total Reviews</b> <a class="pull-right">543</a>
                    </li>
                </ul>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
    <div class="col-md-9">
        <form class="form-horizontal" action="/restaurant/updateprofile" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Name</label>

                <div class="col-sm-10">
                    <input name="nama" type="input" class="form-control" id="inputName" placeholder="Nama" value="{{ auth('restaurant')->user()->nama }}">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                <div class="col-sm-10">
                    <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email" value="{{ auth('restaurant')->user()->email }}">
                </div>
            </div>
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Address</label>

                <div class="col-sm-10">
                    <input name="alamat" type="input" class="form-control" id="inputName" placeholder="Address" value="{{ auth('restaurant')->user()->alamat }}">
                </div>
            </div>
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Phone</label>

                <div class="col-sm-10">
                    <input name="phone" type="input" class="form-control" id="inputName" placeholder="Phone" value="{{ auth('restaurant')->user()->phone }}">
                </div>
            </div>
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">City</label>

                <div class="col-sm-10">
                    <input name="kota" type="input" class="form-control" id="inputName" placeholder="City" value="{{ auth('restaurant')->user()->kota }}">
                </div>
            </div>
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Country</label>

                <div class="col-sm-10">
                    <input name="negara" type="input" class="form-control" id="inputName" placeholder="Country" value="{{ auth('restaurant')->user()->negara }}">
                </div>
            </div>
            <div class="form-group">
                <label for="description" class="col-sm-2 control-label">Description</label>

                <div class="col-sm-10">
                    <textarea name="description" class="form-control" id="description" placeholder="Description">{{ auth('restaurant')->user()->description }}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="UploadImage" class="col-sm-2 control-label">Update Profile Pic</label>

                <div class="col-sm-10">
                    <input class="form-control" type="file" id="UploadImage" name="image">
                    <p class="help-block">Silahkan pilih file image.</p>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop
