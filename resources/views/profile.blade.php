@extends('layouts.app')
@section('title','Profile')
@section('contents')
        <hr>
        <form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="">
            <div class="row">
                <div class="col-md-12">
                    <div class="py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <div class="row" id="res"></div>
                        <div class="row mt-2">
                            <div class="col-md-5 mb-2">
                                <label for="name" class="labels">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Masukan Nama Lengkap" value="{{ auth()->user()->name }}">
                            </div>
                            <div class="col-md-5 mb-2">
                                <label for="email" class="labels">Email</label>
                                <input type="text" name="email" disabled class="form-control" placeholder="Masukan Email" value="{{ auth()->user()->email }}">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-5 mb-2">
                                <label for="phone" class="labels">Phone</label>
                                <input type="number" name="phone" class="form-control" placeholder="Masukan Nomor Telephone" value="{{ auth()->user()->phone }}">
                            </div>
                            <div class="col-md-5 mb-2">
                                <label for="address" class="labels">Address</label>
                                <input type="text" name="address" class="form-control" placeholder="Masukan Alamat" value="{{ auth()->user()->address }}">
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="btn" class="btn btn-primary profile-button">Save Profile</button>
                </div>
            </div>
        </form>

@endsection