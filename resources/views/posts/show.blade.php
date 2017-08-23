@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="content-bg-color">
      <h3> {{ $post->title }} </h3>
      <p> For sale by {{ $post->user->name }} {{ $post->created_at->toDayDateTimeString() }}, {{ $post->place->name }}, Dhaka </p>

      <div class="row">
        <div class="col-md-8">
          <!-- carousel section start here -->
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides start -->
            <div class="carousel-inner">

              <div class="item active">
                <img class="img-responsive" src="/img/download.jpg" alt="Los Angeles">
                <div class="carousel-caption">
                  <h3> Koridbiki.com </h3>
                </div>
              </div>

              <div class="item">
                <img class="img-responsive" src="/img/my.jpeg" alt="Los Angeles">
                <div class="carousel-caption">
                  <h3> Koridbiki.com </h3>
                </div>
              </div>

              <div class="item">
                <img class="img-responsive" src="/img/images.jpg" alt="Los Angeles">
                <div class="carousel-caption">
                  <h3> Koridbiki.com </h3>
                </div>
              </div>
            </div> <!-- Wrapper for slides start -->

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div> <hr> <!-- carousel section start here -->

          <div class="row">
            <div class="col-md-8">
              <p> <b class="style-for-money"> Tk {{ $post->price }} </b>  </p> <hr>
              <p>
                {{ $post->description }}
              </p>
            </div>
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"> <p> <b> Condition: </b> {{ $post->condition }} </p> </li>
                <li class="list-group-item"> <p> <b> Brand: </b> Lava </p> </li>
                <li class="list-group-item"> <p> <b> Model: </b> Atom x1 </p> </li>
                <li class="list-group-item"> <p> <b> Features: </b> new </p> </li>
                <li class="list-group-item"> <p> <b> Authenticity: </b> Original </p> </li>

                <li class="list-group-item"> <a href="#"> <i class="fa fa-star-o"></i> Save ad as Fovourite </a> </li>
                <li class="list-group-item"> <a href="#"> <i class="fa fa-ban"></i> Report this ad </a> </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <p> Contact now with seller </p>
          <ul class="list-group">
            <li class="list-group-item">
              <b> <i class="fa fa-mobile-phone fa-fw fa-lg"></i> {{ $post->contact }}  </b>
            </li>
          </ul>
          <p> Visit member's page </p>
          <ul class="list-group">
            <a href="#" class="list-group-item">
              <div class="row">
                <div class="col-md-4">
                  <img class="img-responsive" src="/img/my.jpeg" alt="Los Angeles">
                </div>
                <div class="col-md-8">
                  <p> Trust SecuritiesBD </p>
                  <p> Your Trusted Partner</p>
                </div>
              </div>
            </a>
          </ul>
          <p> Visit member's page </p>
          <ul class="list-inline">
            <a href="#"> <i class="fa fa-facebook-square fa-3x text-info"></i> </a> &nbsp; &nbsp;
            <a href="#"> <i class="fa fa-twitter-square fa-3x"></i> </a> &nbsp; &nbsp;
            <a href="#"> <i class="fa fa-google-plus-square fa-3x text-danger"></i> </a>
          </ul>
        </div>
      </div>
    </div>
    <!-- show the similar product to user section start -->
    <div class="content-bg-color">
      <h3> Similar Ads </h3> <hr>
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
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
    </div> <!-- show the similar product to user section start -->

  </div>
@endsection
