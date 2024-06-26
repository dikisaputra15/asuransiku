@extends('layouts.master')

@section('title','Form Pemeriksa kesehatan')

@section('conten')

<x-alert></x-alert>
<div class="card">
    <div class="card-header bg-white">
        <h3>Form Pemeriksa Kesehatan Ternak</h3>
    </div>
    <div class="card-body">
    <form action="{{ route('periksakesehatan.store') }}" method="POST">
            @csrf
            <div class="card-body">

                <div class="form-group">
                    <label>Tanggal Pemeriksaan</label>
                    <input type="date" class="form-control" name="tgl_pemeriksaan" required>
                </div>

                <div class="form-group">
                    <label>Nama Peternak</label>
                    <select class="form-control" name="id_peserta">
                            <option>-Pilih Nama Peternak-</option>
                        @foreach ($pesertas as $peserta)
                            <option value="{{$peserta->id}}">{{$peserta->nama_peternak}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Pemeriksa 1</label>
                    <input type="text" class="form-control" name="pemeriksa1" required>
                </div>

                <div class="form-group">
                    <label>Pemeriksa 2</label>
                    <input type="text" class="form-control" name="pemeriksa2" required>
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
