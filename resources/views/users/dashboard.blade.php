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
            <div class="text-center">
              <h2 class="text-center"> You don't have any ads yet. </h2>
              <p class="text-center"> Click below <b> "Post your ad now" </b> button to post your ad.</p>
              <a href="{{ route('post.index')}}" class="btn btn-primary"> <i class="fa fa-paper-plane fa-fw"></i> Post your ad now </a>
            </div> <hr>

            <a href="#">
              <div class="panel panel-default item-sty">
                <div class="panel-body">
                  <div class="row media">
                    <div class="col-md-3 col-sm-4">
                      <div class="media-left">
                        <img class="img-responsive" src="{{ asset('img/my.jpeg')}}" alt="Post image">
                      </div>
                    </div>
                    <div class="col-md-7 col-sm-8">
                      <div class="media-body">
                        <p class="media-heading"> Apple iPhone 5S 32 GB Intact Original </p>
                        <p class="text-muted"> <b class="label label-default"> member </b> &nbsp; <wbr> 25 minutes ago, <wbr> Sylhet,<wbr> Mobile Phone </p>
                        <p> <b> Tk 12000 </b> </p>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="media-right">
                        <p class="label label-success"> <i class="fa fa-shield"></i> TOP PAIND </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>

          </div>
        </div>
      </div>
    </div>
</div>
@endsection
