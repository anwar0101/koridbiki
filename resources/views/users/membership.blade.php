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
            <h1 class="panel-title"> Dashboard </h1>
          </div>
          <div class="panel-body">
            <h3> Increase your sales with a Koridbiki.com Membership! </h3>
            <p> Membership allows your business to have a bigger presence on Koridbiki.com, so that you can reach even more customers.
               Our Membership packages are specifically designed to give you the tools you need to expand your business and
                increase your sales through Koridbiki.com.
              </p>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
