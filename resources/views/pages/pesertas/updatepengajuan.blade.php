@extends('layouts.master')

@section('title','Form Update Pengajuan')

@section('conten')

<x-alert></x-alert>
<div class="card">
    <div class="card-header bg-white">
        <h3>Update Pengajuan Peserta Asuransi</h3>
    </div>
    <div class="card-body">
    <form action="/prosespengajuan" method="POST">
            @csrf
            <div class="card-body">

                <div class="form-group" hidden>
                    <label>Id Peserta</label>
                    <input type="text" class="form-control" name="id_peserta" value="{{ $pesertaasuransi->id }}">
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                            <option value="diterima">diterima</option>
                            <option value="ditolak">ditolak</option>
                    </select>
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
