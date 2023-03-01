@extends('layouts.app')

@section('content')

<div class="container py-3">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <p class="m-0 text-success-emphasis">Add data</p>
          <a href="" class="btn btn-primary btn-sm">GO BACK!</a>
        </div>
        <div class="card-body">
          <form action="">
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Cover</label>
                        <input type="url" class="form-control" id="thumb" placeholder="Insert url" name="thumb">
                      </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Comic title</label>
                        <input type="text" class="form-control" id="title" placeholder="New title" name="title">
                      </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" placeholder="$$$" name="price">
                      </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series">
                      </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" rows="5" class="form-control"></textarea>
                      </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="artist" class="form-label">Artist</label>
                        <input type="text" class="form-control" id="artist" name="artist">
                      </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="writers" class="form-label">Writers</label>
                        <input type="text" class="form-control" id="writers" name="writers">
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" name="type">
                      </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="sale_data" class="form-label">Sale date</label>
                        <input type="text" class="form-control" id="sale_data" name="sale_data">
                      </div>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-end">
                    <div class="mb-3">
                        <a href="#" class="btn btn-primary">TITANES GO!</a>
                      </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

@endsection