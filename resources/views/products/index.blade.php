@extends('layouts.app')
@section('title', 'Home Product')
@section('contents')
    <div class="row">
        <div class="col">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h5 class="mb-0">List Products</h5>
                <a href="{{ route('products.create') }}" class="btn btn-primary">Tambah Product</a>
            </div>
            @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Product Code</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($product->count() > 0)
                    @foreach ($product as $p)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $p->title }}</td>
                        <td class="align-middle">{{ $p->price }}</td>
                        <td class="align-middle">{{ $p->product_code }}</td>
                        <td class="align-middle">{{ $p->description }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('products.show', $p->id) }}" type="button" class="btn btn-secondary m-0">Detail</a>
                                <a href="{{ route('products.edit', $p->id) }}" type="button" class="btn btn-warning m-0">Edit</a>
                                <form action="{{ route('products.destroy', $p->id) }}" method="POST" type="button" class="btn btn-danger">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0" >Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                        @else
                            <tr>
                                <td class="text-center" colspan="10">Product tidak ditemukan</td>
                            </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection