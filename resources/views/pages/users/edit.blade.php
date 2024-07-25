@extends('layouts.master')

@section('title','Form Tambah')

@section('conten')

<x-alert></x-alert>
<div class="card">
    <div class="card-header bg-white">
        <h3>Form Tambah User</h3>
    </div>
    <div class="card-body">
    <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </div>
                        </div>
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Roles</label>
                    <div class="selectgroup w-100">
                        <label class="selectgroup-item">
                            <input type="radio" name="roles" value="admin" class="radio"
                            @if ($user->roles == 'admin') checked @endif>
                            Admin
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="roles" value="peternak" class="radio"
                            @if ($user->roles == 'peternak') checked @endif>
                            Peternak
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="roles" value="staff" class="radio"
                            @if ($user->roles == 'staff') checked @endif>
                            Staff Bagian Bencana
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="roles" value="kepala" class="radio"
                            @if ($user->roles == 'kepala') checked @endif>
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
