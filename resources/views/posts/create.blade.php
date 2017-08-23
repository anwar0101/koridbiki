@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="content-bg-color">
      <h3 class="text-center"> Welcome Nesar Ahmed, Let's post an ad. Choose any option below:</h3>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form class="" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select class="form-control" name="category_id">
                        @foreach ($category as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="category_id">Sub Category</label>
                    <select class="form-control" name="sub_category_id">
                        @foreach ($subcat as $sub)
                            <option value="{{ $sub->id }}">{{ $sub->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="category_id">Palce</label>
                    <select class="form-control" name="place_id">
                        @foreach ($places as $place)
                            <option value="{{ $place->id }}">{{ $place->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <input type="text" name="title" placeholder="title" class="form-control" value="">
                </div>
                <div class="form-group">
                    <textarea name="description" class="form-control" placeholder="description" rows="4" cols="80"></textarea>
                </div>
                <div class="form-group">
                    <input type="file" name="images" class="form-control" value="">
                </div>
                <div class="form-group">
                    <input type="text" name="price"  placeholder="price" class="form-control" value="">
                    <input type="checkbox" name="negatiable" value="1"> Negatiable
                </div>
                <div class="form-group">
                    <input type="text" name="condition" placeholder="condition" class="form-control" value="">
                </div>
                <div class="form-group">
                    <input type="text" name="contact" placeholder="contact" class="form-control" value="">
                </div>
                <button type="submit" name="button" class="btn btn-primary">Save</button>
            </form>
        </div>

      </div>
    </div>
  </div>
@endsection
