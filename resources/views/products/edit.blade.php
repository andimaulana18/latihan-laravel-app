@extends('layouts.app')
@section('title', 'Edit Product')
@section('contents')
   <div class="row">
    <div class="col">
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="col mb-3">
                <label for="title" class="form-label">title</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $product->title }}">
            </div>
            <div class="col mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}">
            </div>
            <div class="col mb-3">
                <label for="product_code" class="form-label">Product Code</label>
                <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="{{ $product->product_code }}">
            </div>
            <div class="col mb-3">
                <label for="" class="form-label">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $product->description }}</textarea>
            </div>
            <div class="d-grip">
                <button class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
   </div>
@endsection