@extends('layouts.master')

@section('title','Edit Pengajuan Peserta')

@section('conten')

<x-alert></x-alert>
<div class="card">
    <div class="card-header bg-white">
        <h3>Edit Peserta Asuransi</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('pesertaasuransi.update', $pesertaasuransi) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">

                <div class="form-group">
                    <label>Nama Pemohon</label>
                    <select class="form-control" name="id_user" readonly>
                            <option value="{{auth()->user()->id}}">{{auth()->user()->name}}</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Tanggal Pengajuan</label>
                    <input type="date" class="form-control" name="tgl_pengajuan" value="{{ $pesertaasuransi->tgl_pengajuan }}">
                </div>

                <div class="form-group">
                    <label>Nama Peternak</label>
                    <input type="text" class="form-control" name="nama_peternak" value="{{ $pesertaasuransi->nama_peternak }}">
                </div>

                <div class="form-group">
                    <label>No Handhpone</label>
                    <input type="text" class="form-control" name="no_hp" value="{{ $pesertaasuransi->no_hp }}">
                </div>

                <div class="form-group">
                    <label>Desa</label>
                    <input type="text" class="form-control" name="desa" value="{{ $pesertaasuransi->desa }}">
                </div>

                <div class="form-group">
                    <label>Kecamatan</label>
                    <input type="text" class="form-control" name="kecamatan" value="{{ $pesertaasuransi->kecamatan }}">
                </div>

                <div class="form-group">
                    <label>Kabupaten / Kota</label>
                    <input type="text" class="form-control" name="kabupaten_kota" value="{{ $pesertaasuransi->kabupaten_kota }}">
                </div>

                <div class="form-group">
                    <label>Jenis Ternak</label>
                    <input type="text" class="form-control" name="jenis_ternak" value="{{ $pesertaasuransi->jenis_ternak }}">
                </div>

                <div class="form-group">
                    <label>Jumlah Hewan Ternak</label>
                    <input type="number" class="form-control" name="jumlah_sapi" value="{{ $pesertaasuransi->jumlah_hewan_ternak }}">
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" class="form-control" name="harga" value="{{ $pesertaasuransi->harga }}">
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
