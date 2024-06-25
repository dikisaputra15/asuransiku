@extends('layouts.master')

@section('title','Edit Surat')

@section('conten')

<x-alert></x-alert>
<div class="card">
    <div class="card-header bg-white">
        <h3>Edit Surat</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('suratpengantar.update', $suratpengantar) }}" method="POST">
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
                    <label>Kepala Surat</label>
                    <input type="text" class="form-control" name="kepala_surat" value="{{ $suratpengantar->kepala_surat }}">
                </div>

                <div class="form-group">
                    <label>Tempat</label>
                    <input type="text" class="form-control" name="tempat" value="{{ $suratpengantar->tempat }}">
                </div>

                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" value="{{ $suratpengantar->tanggal }}">
                </div>

                <div class="form-group">
                    <label>Tujuan</label>
                    <input type="text" class="form-control" name="tujuan" value="{{ $suratpengantar->tujuan }}">
                </div>

                <div class="form-group">
                    <label>Nama Surat</label>
                    <input type="text" class="form-control" name="nama_surat" value="{{ $suratpengantar->nama_surat }}">
                </div>

                <div class="form-group">
                    <label>Nomor</label>
                    <input type="text" class="form-control" name="nomor" value="{{ $suratpengantar->nomor }}">
                </div>

                <div class="form-group">
                    <label>Jenis Surat</label>
                    <input type="text" class="form-control" name="jenis_surat" value="{{ $suratpengantar->jenis_surat }}">
                </div>

                <div class="form-group">
                    <label>Volume</label>
                    <input type="text" class="form-control" name="volume" value="{{ $suratpengantar->volume }}">
                </div>

                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" value="{{ $suratpengantar->keterangan }}">
                </div>

                <div class="form-group">
                    <label>Nama Ketua Kelompok Ternak</label>
                    <input type="text" class="form-control" name="nama_ketua_klp_ternak" value="{{ $suratpengantar->nama_ketua_klp_ternak }}">
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
