@extends('layouts.app')

@section('content')
<div class="container py-3">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <p class="m-0 text-success-emphasis">Add data</p>
          <a href="{{ route('comics.show', $comics['id']) }}" class="btn btn-primary btn-sm">GO BACK!</a>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('comics.store') }}">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Cover</label>
                        <input type="url" class="form-control" id="thumb" placeholder="Insert url" name="thumb" required value="{{old('thumb', $comics->thumb)}}">
                      </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Comic title</label>
                        <input type="text" class="form-control" id="title" placeholder="New title" name="title" required value="{{old('title', $comics->title)}}">
                      </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" placeholder="$$$" name="price" required value="{{old('price', $comics->price)}}">
                      </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series" value="{{old('series', $comics->series)}}">
                      </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" rows="5" class="form-control">{{old('description', $comics->description)}}</textarea>
                      </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="artists" class="form-label">Artists</label>
                        <input type="text" class="form-control" id="artists" name="artists" required value="{{old('artists', $comics->artists)}}">
                      </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="writers" class="form-label">Writers</label>
                        <input type="text" class="form-control" id="writers" name="writers" required value="{{old('writers', $comics->writers)}}">
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" name="type" value="{{old('type', $comics->type)}}">
                      </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale date</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date', $comics->sale_date)}}">
                      </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">TITANES GO!</button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection