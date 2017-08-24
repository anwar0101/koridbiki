@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-4">
          {{-- left nav --}}
          @include('includes.user-left-nav')
          {{-- end left nav --}}
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
