@extends('layouts.master')

@section('title','Form Tambah')

@section('conten')

<x-alert></x-alert>
<div class="card">
    <div class="card-header bg-white">
        <h3>Form Tambah User</h3>
    </div>
    <div class="card-body">
    <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </div>
                        </div>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Roles</label>
                    <div class="selectgroup w-100">
                        <label class="selectgroup-item">
                            <input type="radio" name="roles" value="admin" class="radio"
                                checked="">
                            Admin
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="roles" value="peternak" class="radio">
                            Peternak
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="roles" value="staff" class="radio">
                            Staff Bagian Bencana
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="roles" value="kepala" class="radio">
                            Kepala Bagian
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>


@endsection

@push('service')

@endpush
