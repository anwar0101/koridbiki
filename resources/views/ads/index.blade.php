@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="content-bg-color">
      <div class="row">
        <div class="col-md-3">
          <form class="" action="index.html" method="post">
            <div class="input-group">

              <select class="form-control" name="">
                <optgroup label="Select Division">
                  <option value="Dhaka Division"> Dhaka Division </option>
                  <option value="Dhaka Division"> Chittagong Division </option>
                  <option value="Dhaka Division"> Sylhet Division </option>
                </optgroup>
              </select>
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-default"> <i class="fa fa-map-marker"></i> </button>
                </span>
            </div>
          </form>
        </div>

        <div class="col-md-3">
          <form class="" action="index.html" method="post">
            <div class="input-group">

              <select class="form-control" name="">
                <optgroup label="Select Category">
                  <option value="Dhaka Division"> Dhaka Division </option>
                  <option value="Dhaka Division"> Chittagong Division </option>
                  <option value="Dhaka Division"> Sylhet Division </option>
                </optgroup>
              </select>
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-default"> <i class="fa fa-map-marker"></i> </button>
                </span>
            </div>
          </form>
        </div>

        <div class="col-md-6">
          <form class="" action="index.html" method="post">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="What are you looking for?">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-default"> <i class="fa fa-search"></i> Search </button>
              </span>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="content-bg-color">
      <div class="row">
        <!-- Left navbar start -->
        <div class="col-md-3">
          <!-- Panel and list group style start for left navbar -->
          <div class="panel-group list-group" id="accordion">
            <!-- first list item and panel start -->
            <div class="panel panel-success">
              <div class="panel-heading">
                <h1 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="list-group-item text-center"> Sort Result By </a>
                </h1>
              </div>
              <div id="collapse1" class="panel-collapse collapse in">
                <form class="" action="index.html" method="post">
                  <div class="panel-body">
                    <div class="input-group">
                      <span class="input-group-addon"> <i class="fa fa-sort"></i> </span>
                      <select class="form-control" name="">
                        <option value=""> Date: Newest on Top </option>
                        <option value=""> Date: Oldest on Top </option>
                        <option value=""> Price: Hight to Low </option>
                        <option value=""> Price: Low to Hight  </option>
                      </select>
                    </div>
                  </form>
                  </div>
              </div>
            </div> <!-- first list item and panel start -->

            <!-- second list item and panel start -->
            <div class="panel panel-success">
              <div class="panel-heading">
                <h1 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="list-group-item text-center"> Type of Poster </a>
                </h1>
              </div>
              <div id="collapse2" class="panel-collapse collapse in">
                <div class="panel-body">
                  <form class="" action="index.html" method="post">
                    <div class="input-group">
                      <span class="input-group-addon"> <i class="fa fa-user"></i> </span>
                      <select class="form-control" name="">
                        <option value=""> All Posters </option>
                        <option value=""> Only Members </option>
                      </select>
                    </div>
                  </form>
                </div>
              </div>
            </div> <!-- second list item and panel start -->

            <!-- Third list item and panel start -->
            <div class="panel panel-success">
              <div class="panel-heading">
                <h1 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="list-group-item text-center"> All Categories </a> </h1>
              </div>
              <div id="collapse3" class="panel-collapse collapse">
                <div class="list-group">
                  <a href="#" class="list-group-item"> <i class="fa fa-television fa-fw"> </i> Electronic  <span class="badge"> 1250 </span> </a>
                  <a href="#" class="list-group-item"> <i class="fa fa-truck fa-fw"> </i> Home & Garden <span class="badge"> 1200 </span></a>
                  <a href="#" class="list-group-item"> <i class="fa fa-car fa-fw"> </i> Cars & Vehicles <span class="badge"> 1450 </span></a>
                  <a href="#" class="list-group-item"> <i class="fa fa-home fa-fw"> </i> Property <span class="badge"> 980 </span></a>
                  <a href="#" class="list-group-item"> <i class="fa fa-paw fa-fw"> </i> Pets & Animals <span class="badge"> 845 </span></a>
                  <a href="#" class="list-group-item"> <i class="fa fa-gift fa-fw"> </i> Clothing & Beauty <span class="badge"> 520  </span></a>
                  <a href="#" class="list-group-item"> <i class="fa fa-futbol-o fa-fw"> </i> Hobby, Sport & Kids <span class="badge"> 214  </span></a>
                  <a href="#" class="list-group-item"> <i class="fa fa-tree fa-fw"> </i> Food & Agriculture <span class="badge"> 124 </span></a>
                  <a href="#" class="list-group-item"> <i class="fa fa-industry fa-fw"> </i> Business & Industry<span class="badge"> 2147 </span> </a>
                  <a href="#" class="list-group-item"> <i class="fa fa-graduation-cap fa-fw"> </i> Education <span class="badge"> 214 </span></a>
                  <a href="#" class="list-group-item"> <i class="fa fa-suitcase fa-fw"> </i> Jobs in Bangladesh <span class="badge"> 214 </span></a>
                  <a href="#" class="list-group-item"> <i class="fa fa-globe fa-fw"> </i> Overseas Jobs <span class="badge"> 214 </span></a>
                  <a href="#" class="list-group-item"> <i class="fa fa-cogs fa-fw"> </i> Services <span class="badge"> 2148 </span></a>
                  <a href="#" class="list-group-item"> <i class="fa fa-inbox fa-fw"> </i> Others <span class="badge"> 124 </span></a>
                </div>
              </div>
            </div> <!-- Third list item and panel start -->

            <!-- Fourth list item and panel start -->
            <div class="panel panel-success">
              <div class="panel-heading">
                <h1 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="list-group-item text-center"> All Divisions </a>
                </h1>
              </div>
              <div id="collapse4" class="panel-collapse collapse">
                <div class="list-group">
                  <a href="#" class="list-group-item"> Dhaka Division <span class="badge"> 1520 </span> </a>
                  <a href="#" class="list-group-item"> Chittagong Division <span class="badge"> 1520 </span> </a>
                  <a href="#" class="list-group-item"> Sylhet Division <span class="badge"> 1520 </span> </a>
                  <a href="#" class="list-group-item"> Khulna Division <span class="badge"> 1520 </span> </a>
                  <a href="#" class="list-group-item"> Rajshahi Division <span class="badge"> 1520 </span> </a>
                  <a href="#" class="list-group-item"> Rangpur Division <span class="badge"> 1520 </span> </a>
                  <a href="#" class="list-group-item"> Barisal Division <span class="badge"> 1520 </span> </a>
                </div>
              </div>
            </div> <!-- Fourth list item and panel start -->
          </div> <!-- Panel and list group style start for left navbar -->
        </div> <!-- Left navbar end -->

        <div class="col-md-7 col-sm-12 col-xs-12">
          <p> Home <span class="fa fa-long-arrow-right"></span> All ads in Bangladesh</p>
          @forelse ($posts as $post)
              <a href="{{ route('post.show', $post->id) }}">
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
                          <p class="media-heading"> {{ $post->title }} </p>
                          <p class="text-muted"> <b class="label label-default"> member </b> &nbsp; <wbr> {{ $post->created_at->diffForHumans() }}, <wbr> {{ $post->place->name }},<wbr> {{ $post->sub_category->name }} </p>
                          <p> <b> Tk {{ $post->price }} </b> </p>
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
          @empty

          @endforelse
        </div>
      </div>
    </div>
  </div>
@endsection
