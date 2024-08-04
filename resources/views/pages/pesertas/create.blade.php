@extends('layouts.master')

@section('title','Form Data Pengajuan')

@section('conten')

<x-alert></x-alert>
<div class="card">
    <div class="card-header bg-white">
        <h3>Form Peserta Asuransi</h3>
    </div>
    <div class="card-body">
    <form action="{{ route('pesertaasuransi.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="card-body">

                <div class="form-group">
                    <label>Nama Peternak</label>
                    <select class="form-control" name="id_user" readonly>
                            <option value="{{auth()->user()->id}}">{{auth()->user()->name}}</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Tanggal Pengajuan</label>
                    <input type="date" class="form-control" name="tgl_pengajuan" required>
                </div>

                <div class="form-group">
                    <label>No Handphone</label>
                    <input type="text" class="form-control" name="no_hp" required>
                </div>

                <div class="form-group">
                    <label>Desa</label>
                    <input type="text" class="form-control" name="desa" required>
                </div>

                <div class="form-group">
                    <label>Kecamatan</label>
                    <input type="text" class="form-control" name="kecamatan" required>
                </div>

                <div class="form-group">
                    <label>Kabupaten / Kota</label>
                    <input type="text" class="form-control" name="kabupaten_kota" required>
                </div>

                <div class="form-group">
                    <label>Jenis Ternak</label>
                    <input type="text" class="form-control" name="jenis_ternak" required>
                </div>

                <div class="form-group">
                    <label>Jumlah Hewan Ternak</label>
                    <input type="number" class="form-control" name="jumlah_ternak" required>
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" class="form-control" name="harga" required>
                </div>

                <div class="form-group">
                    <label>KTP</label>
                    <input type="file" class="form-control" name="ktp" required>
                </div>

                <div class="form-group">
                    <label>Foto Ternak</label>
                    <input type="file" class="form-control" name="foto" required>
                </div>

                <div class="form-group">
                    <label>Surat Pengantar</label>
                    <input type="file" class="form-control" name="surat" required>
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
