@extends('layouts.app')
@section('title', 'Detail Product')
@section('contents')
    <div class="row">
        <div class="col">
           <div class="col mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="{{ $product->title }}" readonly>
           </div>
           <div class="col mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Price" value="{{ $product->price }}" readonly>
           </div>
           <div class="col mb-3" class="form-label">
                <label for="product_code">Product Code</label>
                <input type="text" class="form-control" name="product_code" id="product_code" placeholder="Product Code" value="{{ $product->product_code }}" readonly>
           </div>
           <div class="col mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" class="form-control" name="description" id="description" placeholder="Description" readonly>{{ $product->description }}</textarea>
           </div>
           <div class="row">
            <div class="col mb-3">
                <label for="created_at" class="form-label">Created At</label>
                <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
            </div>
            <div class="col mb-3">
                <label for="updated_at" class="form-label">Updated At</label>
                <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
            </div>
           </div>
           
        </div>
    </div>
@endsection