@extends('layouts.master')

@section('title','Form Buat Pengajuan')

@section('conten')

<x-alert></x-alert>
<div class="card">
    <div class="card-header bg-white">
        <h3>Form Buat Surat</h3>
    </div>
    <div class="card-body">
    <form action="{{ route('suratpengantar.store') }}" method="POST">
            @csrf
            <div class="card-body">

                <div class="form-group">
                    <label>Nama Pemohon</label>
                    <select class="form-control" name="id_user" readonly>
                            <option value="{{auth()->user()->id}}">{{auth()->user()->name}}</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Kepala Surat</label>
                    <input type="text" class="form-control" name="kepala_surat" required>
                </div>

                <div class="form-group">
                    <label>Tempat</label>
                    <input type="text" class="form-control" name="tempat" required>
                </div>

                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" required>
                </div>

                <div class="form-group">
                    <label>Tujuan</label>
                    <input type="text" class="form-control" name="tujuan" required>
                </div>

                <div class="form-group">
                    <label>Nama Surat</label>
                    <input type="text" class="form-control" name="nama_surat" required>
                </div>

                <div class="form-group">
                    <label>Nomor</label>
                    <input type="text" class="form-control" name="nomor" required>
                </div>

                <div class="form-group">
                    <label>Jenis Surat</label>
                    <input type="text" class="form-control" name="jenis_surat" required>
                </div>

                <div class="form-group">
                    <label>Volume</label>
                    <input type="text" class="form-control" name="volume" required>
                </div>

                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" required>
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
