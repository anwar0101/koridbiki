@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="content-bg-color">
      <h3 class="text-center"> Welcome {{ Auth::user()->name }}, Let's post an ad. Choose any option below:</h3>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form class="" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group col-md-6 col-sm-12">
                    <label for="category_id">Category</label>
                    <select class="form-control" name="category_id" id="category_id">
                        @foreach ($category as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-6 col-sm-12">
                    <label for="sub_category_id">Sub Category</label>
                    <select class="form-control" name="sub_category_id" id="sub_category_id">
                        @foreach ($subcat as $sub)
                            <option value="{{ $sub->id }}">{{ $sub->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-6 col-sm-12">
                    <label for="divition">Divition</label>
                    <select class="form-control" name="divition_id">
                        @foreach ($divitions as $divition)
                            <option value="{{ $divition->id }}">{{ $divition->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-6 col-sm-12">
                    <label for="place_id">Palce</label>
                    <select class="form-control" name="place_id">
                        @foreach ($places as $place)
                            <option value="{{ $place->id }}">{{ $place->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-12 col-sm-12">
                    <label for="title">Title</label>
                    <input type="text" name="title" placeholder="title" class="form-control">
                </div>
                <div class="form-group col-md-12 col-sm-12">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" placeholder="Description" rows="4" cols="80"></textarea>
                </div>

                <div class="form-group col-md-6 col-sm-12">
                    <label for="photo1">Photo 1</label>
                    <input type="file" name="photo1">
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label for="photo2">Photo 2</label>
                    <input type="file" name="photo2" >
                </div>
                <div class="form-group col-md-6 col-sm-12 hidden-xs" id="photo3">
                    <label for="photo3">Photo 3</label>
                    <input type="file" name="photo3">
                </div>
                <div class="form-group col-md-6 col-sm-12 hidden-xs" id="photo4">
                    <label for="photo4">Photo 4</label>
                    <input type="file" name="photo4">
                </div>

                <div class="visible-xs w3-margin-left">
                    <button type="button" name="button" class="btn btn-warning btn-xs">Add More</button>
                </div>

                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for="price">Price</label>
                        <div class="input-group">
                          <input type="text" name="price" class="form-control" placeholder="Price">
                          <label class="input-group-addon">
                            <input type="checkbox" name="negatiable" value="1"> Negatiable
                          </label>
                        </div>
                    </div>
                </div>

                <div class="col-md-10 col-sm-12 form-group">
                    <label>Condition : </label>
                    <label class="radio-inline">
                      <input type="radio" name="condition" checked value="New">New
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="condition" value="Used">Used
                    </label>
                </div>

                <div class="form-group col-md-12 col-sm-12">
                  <label for="contact">Contact No</label>
                  <input type="text" class="form-control" name="contact" id="contact" placeholder="01722635...">
                </div>
                <div class="col-md-10 col-sm-12">
                    <button type="submit" name="button" class="btn btn-primary w3-magrin-left">Post</button>
                </div>
            </form>
        </div>

      </div>
    </div>
  </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        var subcats = [];
        var places = [];
        @foreach ($category as $cat)
            subcat[{{ $cat->id }}] = {{ $cat->sub_categories->toJson() }};
        @endforeach
    </script>
@endpush
