@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-4">
        @include('includes.user-left-nav')
      </div>
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title"> Dashboard </h1>
          </div>
          <div class="panel-body">
            @forelse ($posts as $post)
                <a href="{{ route('post.show', $post->id) }}">
                  <div class="panel panel-default item-sty">
                    <div class="panel-body">
                      <div class="row media">
                        <div class="col-md-3 col-sm-4">
                          <div class="media-left">
                            <img class="img-responsive" src="{{ asset(str_replace_last('public', 'storage', $post->photo1))}}" alt="Post image">
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
                            <p class="label label-success"> <i class="fa fa-shield"></i> TOP PAID </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
            @empty
                <div class="text-center">
                  <h2 class="text-center"> You don't have any ads yet. </h2>
                  <p class="text-center"> Click below <b> "Post your ad now" </b> button to post your ad.</p>
                  <a href="{{ route('post.index')}}" class="btn btn-primary"> <i class="fa fa-paper-plane fa-fw"></i> Post your ad now </a>
                </div> <hr>
            @endforelse

          </div>
        </div>
      </div>
    </div>
</div>
@endsection
