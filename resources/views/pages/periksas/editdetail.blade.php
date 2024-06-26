@extends('layouts.master')

@section('title','Edit Pemeriksa kesehatan')

@section('conten')

<x-alert></x-alert>
<div class="card">
    <div class="card-header bg-white">
        <h3>Edit Pemeriksaan Hewan Ternak</h3>
    </div>
    <div class="card-body">
        <form action="{{ url('periksakesehatan/updatedetail') }}" method="POST">
            @csrf
            <div class="card-body">

                <div class="form-group" hidden>
                    <label>Id</label>
                    <input type="text" class="form-control" name="id" value="{{$detail->id}}">
                </div>

                <div class="form-group" hidden>
                    <label>Id Periksa</label>
                    <input type="text" class="form-control" name="id_periksa" value="{{$detail->id_periksa}}">
                </div>

                <div class="form-group">
                    <label>Nama Ternak</label>
                    <input type="text" class="form-control" name="nama_ternak" value="{{$detail->nama_ternak}}">
                </div>

                <div class="form-group">
                    <label>Nomor</label>
                    <input type="text" class="form-control" name="nomor" value="{{$detail->nomor}}">
                </div>

                <div class="form-group">
                    <label>Hasil Pemeriksaan</label>
                    <input type="text" class="form-control" name="hasil_pemeriksaan" value="{{$detail->hasil_pemeriksaan}}">
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
