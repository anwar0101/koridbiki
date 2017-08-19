@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-4">
        <!-- Third list item and panel start -->
        <div class="panel panel-success">
          <div class="panel-body">
            <div class="list-group">
              <a href="{{ route('dashboard') }}" class="list-group-item active">
                 <i class="fa fa-dashboard fa-fw"> </i> My Account <span class="badge"> <i class="fa fa-arrow-right fa-fw"> </i> </span>
              </a>
              <a href="{{ route('membership') }}" class="list-group-item">
                 <i class="fa fa-id-badge fa-fw"> </i> My Membership <span class="badge"> <i class="fa fa-arrow-right fa-fw"> </i> </span>
              </a>
              <a href="{{ route('resume') }}" class="list-group-item">
                 <i class="fa fa-id-card-o fa-fw"> </i> My Resume <span class="badge"> <i class="fa fa-arrow-right fa-fw"> </i> </span>
              </a>
              <a href="{{ route('favorite-ads') }}" class="list-group-item">
                 <i class="fa fa-star-o fa-fw"> </i> Fevorites <span class="badge"> <i class="fa fa-arrow-right fa-fw"> </i> </span>
              </a>
              <a href="{{ route('settings') }}" class="list-group-item">
                 <i class="fa fa-gears fa-fw"> </i> Settings <span class="badge"> <i class="fa fa-arrow-right fa-fw"> </i> </span>
              </a>
            </div>
          </div>
        </div> <!-- Third list item and panel start -->
      </div>
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title"> Settings </h1>
          </div>
          <div class="panel-body">
            <h3> Change details </h3> <hr>
            <p> <span> <i class="fa fa-envelope-o fa-fw"></i> Email: </span>  <b> nesarsiu@gmail.com</b> </p>
            <form class="" action="index.html" method="post">

              <div class="row">
                <div class="col-md-6 col-md-offset-right-6">
                  <div class="form-group">
                    <label for="name"> Name </label>
                    <div class="input-group">
                      <span class="input-group-addon"> <i class="fa fa-user-o"></i></span>
                      <input class="form-control" type="text" name="name" value="Nesar Ahmed">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name"> Location </label>
                    <div class="input-group">
                      <span class="input-group-addon"> <i class="fa fa-map-marker"></i></span>
                      <select class="form-control" name="location">
                        <optgroup label="Select Division">
                          <option value=""> Dhaka Division </option>
                          <option value=""> Chittagong Division</option>
                          <option value=""> Sylhet Division</option>
                        </optgroup>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name"> Sub-location </label>
                    <div class="input-group">
                      <span class="input-group-addon"> <i class="fa fa-thumb-tack"></i></span>
                      <select class="form-control" name="sublocation">
                        <optgroup label="Select Division">
                          <option value=""> Dhaka Division </option>
                          <option value=""> Chittagong Division</option>
                          <option value=""> Sylhet Division</option>
                        </optgroup>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-default"> <i class="fa fa-pencil-square-o fa-fw"></i> Update Now </button>
              </div>
            </form>
            <!-- Second form for change password -->
            <h3> Change Password </h3> <hr>
            <form class="" action="index.html" method="post">
              <div class="row">
                <div class="col-md-6 col-md-offset-3">
                  <div class="form-group">
                    <label for="name"> Current Password </label>
                    <div class="input-group">
                      <span class="input-group-addon"> <i class="fa fa-lock"></i></span>
                      <input class="form-control" type="password" name="password">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 col-md-offset-3">
                  <div class="form-group">
                    <label for="name"> New Password </label>
                    <div class="input-group">
                      <span class="input-group-addon"> <i class="fa fa-plus"></i></span>
                      <input class="form-control" type="password" name="new_password">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 col-md-offset-3">
                  <div class="form-group">
                    <label for="name"> Confirm Password </label>
                    <div class="input-group">
                      <span class="input-group-addon"> <i class="fa fa-check-square-o"></i></span>
                      <input class="form-control" type="password">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-md-offset-3 text-right">
                  <button type="submit" class="btn btn-default"> <i class="fa fa-paper-plane fa-fw"></i> Change Password </button>
                </div>
              </div>
            </form>
            <!-- buy safety code number section start-->
            <h3> Buy Safety Code </h3> <hr>
            <div class="text-center">
              <h4> Your Buy Now safety code is: <b> 1254 </b> </h4>
              <h4> To get safety code, please contact with us  </h4>
              <h4> <i class="fa fa-mobile"></i> +00801746258947 </h4>
            </div> <!-- buy safety code number section start-->

          </div>
        </div>
      </div>
    </div>
</div>
@endsection
