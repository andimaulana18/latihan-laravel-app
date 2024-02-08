@extends('layouts.app')
@section('title', 'Tambah Product')
@section('contents')
    <div class="row">
        <div class="col">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h6 class="mb-0">Tambah Product</h6>
            </div>
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="title" id="title" class="form-control" placeholder="Title">
                    </div>
                    <div class="col">
                        <input type="text" name="price" id="price" class="form-control" placeholder="Price">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="product_code" id="product_code" class="form-control" placeholder="Product Code">
                    </div>
                    <div class="col">
                        <textarea name="description" id="description" placeholder="Description" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection