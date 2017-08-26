@extends('layouts.app')

@section('content')
  <div class="header-bg-color">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h3> Search by Division </h3>
          <div class="list-group">
            <a href="{{ route('ads.index') }}" class="list-group-item"> Dhaka Division </a>
            <a href="{{ route('ads.index') }}" class="list-group-item"> Chittagong Division </a>
            <a href="{{ route('ads.index') }}" class="list-group-item"> Sylhet Division </a>
            <a href="{{ route('ads.index') }}" class="list-group-item"> Khulna Division </a>
            <a href="{{ route('ads.index') }}" class="list-group-item"> Rajshahi Division </a>
            <a href="{{ route('ads.index') }}" class="list-group-item"> Rangpur Division </a>
            <a href="{{ route('ads.index') }}" class="list-group-item"> Barisal Division </a>
          </div>
        </div>
        <div class="col-md-9">
          <div class="row">
            <div class="col-md-12">
              <h1 class="text-center text-primary"> Welcome to Koridbiki.com </h1>
              <p class="text-center">
                  Buy and sell everything new and/or used like cars to mobile phones and computers ect or search for property,
                 jobs and more in Bangladesh - for free!
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 top-category-gap">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h1 class="panel-title"> Browse our top categories </h1>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-3">
                      <a href="{{ route('ads.index') }}">
                        <p class="text-center"> <i class="fa fa-television fa-2x" aria-hidden="true"></i></p>
                        <h4 class="text-center text-primary"> Electronics </h4>
                      </a>
                    </div>
                    <div class="col-md-3">
                      <a href="{{ route('ads.index') }}">
                        <p class="text-center"> <i class="fa fa-home fa-2x" aria-hidden="true"></i></p>
                        <h4 class="text-center text-primary"> Property </h4>
                      </a>
                    </div>
                    <div class="col-md-3">
                      <a href="{{ route('ads.index') }}">
                        <p class="text-center"> <i class="fa fa-car fa-2x" aria-hidden="true"></i></p>
                        <h4 class="text-center text-primary"> Cars & Vehicles </h4>
                      </a>
                    </div>
                    <div class="col-md-3">
                      <a href="{{ route('ads.index') }}">
                        <p class="text-center"> <i class="fa fa-suitcase fa-2x" aria-hidden="true"></i></p>
                        <h4 class="text-center text-primary"> Jobs in Bangladesh </h4>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="content-bg-color">
      <div class="row">
        <div class="col-md-3">
          <div class="item-sty">
            <a href="{{ route('ads.index') }}">
              <p class="text-center"> <i class="fa fa-television fa-2x" aria-hidden="true"></i></p>
              <h4 class="text-center text-primary"> Electronics </h4>
            </a>
            <p class="text-justify">
              Find great deals for used electronics in Bangladesh including mobile phones,computers, laptops,
               TVs, cameras and much more.
            </p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="item-sty">
            <a href="{{ route('ads.index') }}">
              <p class="text-center"> <i class="fa fa-truck fa-2x" aria-hidden="true"></i> </p>
              <h4 class="text-center text-primary"> Home & Garden </h4>
            </a>
            <p>
              Find great deals for used electronics in Bangladesh including mobile phones,computers, laptops,
               TVs, cameras and much more.
            </p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="item-sty">
            <a href="{{ route('ads.index') }}">
              <p class="text-center"> <i class="fa fa-car fa-2x" aria-hidden="true"></i></p>
              <h4 class="text-center text-primary"> Cars & Vehicles </h4>
            </a>
            <p>
              Find great deals for used electronics in Bangladesh including mobile phones,computers, laptops,
               TVs, cameras and much more.
            </p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="item-sty">
            <a href="{{ route('ads.index') }}">
              <p class="text-center"> <i class="fa fa-home fa-2x" aria-hidden="true"></i></p>
              <h4 class="text-center text-primary"> Property </h4>
            </a>
            <p>
              Find great deals for used electronics in Bangladesh including mobile phones,computers, laptops,
               TVs, cameras and much more.
            </p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="item-sty">
            <a href="{{ route('ads.index') }}">
              <p class="text-center"> <i class="fa fa-paw fa-2x" aria-hidden="true"></i></p>
              <h4 class="text-center text-primary"> Pets & Animals </h4>
            </a>
            <p class="text-justify">
              Find great deals for used electronics in Bangladesh including mobile phones,computers, laptops,
               TVs, cameras and much more.
            </p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="item-sty">
            <a href="{{ route('ads.index') }}">
              <p class="text-center"> <i class="fa fa-gift fa-2x" aria-hidden="true"></i> </p>
              <h4 class="text-center text-primary"> Clothing & Beauty </h4>
            </a>
            <p>
              Find great deals for used electronics in Bangladesh including mobile phones,computers, laptops,
               TVs, cameras and much more.
            </p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="item-sty">
            <a href="{{ route('ads.index') }}">
              <p class="text-center"> <i class="fa fa-futbol-o fa-2x" aria-hidden="true"></i></p>
              <h4 class="text-center text-primary"> Hobby, Sport & Kids </h4>
            </a>
            <p>
              Find great deals for used electronics in Bangladesh including mobile phones,computers, laptops,
               TVs, cameras and much more.
            </p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="item-sty">
            <a href="{{ route('ads.index') }}">
              <p class="text-center"> <i class="fa fa-tree fa-2x" aria-hidden="true"></i></p>
              <h4 class="text-center text-primary"> Food & Agriculture </h4>
            </a>
            <p>
              Find great deals for used electronics in Bangladesh including mobile phones,computers, laptops,
               TVs, cameras and much more.
            </p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="item-sty">
            <a href="{{ route('ads.index') }}">
              <p class="text-center"> <i class="fa fa-industry fa-2x" aria-hidden="true"></i></p>
              <h4 class="text-center text-primary"> Business & Industry </h4>
            </a>
            <p class="text-justify">
              Find great deals for used electronics in Bangladesh including mobile phones,computers, laptops,
               TVs, cameras and much more.
            </p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="item-sty">
            <a href="{{ route('ads.index') }}">
              <p class="text-center"> <i class="fa fa-graduation-cap fa-2x" aria-hidden="true"></i> </p>
              <h4 class="text-center text-primary"> Education </h4>
            </a>
            <p>
              Find great deals for used electronics in Bangladesh including mobile phones,computers, laptops,
               TVs, cameras and much more.
            </p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="item-sty">
            <a href="{{ route('ads.index') }}">
              <p class="text-center"> <i class="fa fa-suitcase fa-2x" aria-hidden="true"></i></p>
              <h4 class="text-center text-primary"> Jobs in Bangladesh </h4>
            </a>
            <p>
              Find great deals for used electronics in Bangladesh including mobile phones,computers, laptops,
               TVs, cameras and much more.
            </p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="item-sty">
            <a href="{{ route('ads.index') }}">
              <p class="text-center"> <i class="fa fa-globe fa-2x" aria-hidden="true"></i></p>
              <h4 class="text-center text-primary"> Overseas Jobs </h4>
            </a>
            <p>
              Find great deals for used electronics in Bangladesh including mobile phones,computers, laptops,
               TVs, cameras and much more.
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection
