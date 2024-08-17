@extends('layouts.master')

@section('title','Form Pemeriksaan')

@section('conten')

<x-alert></x-alert>
<div class="card">
    <div class="card-header bg-white">
        <h3>Form Pemeriksaan</h3>
    </div>
    <div class="card-body">
    <form action="{{ url('periksakesehatan/storehasilperiksa') }}" method="POST">
            @csrf
            <div class="card-body">

                <div class="form-group" hidden>
                    <label>Id Periksa</label>
                    <input type="text" class="form-control" name="id_periksa" value="{{$periksa->id}}">
                </div>

                <div class="form-group">
                    <label>Nama Ternak</label>
                    <input type="text" class="form-control" name="nama_ternak" required>
                </div>

                <div class="form-group">
                    <label>Nomor</label>
                    <input type="text" class="form-control" name="nomor" required>
                </div>

                <div class="form-group">
                    <label>Berat Hewan Ternak</label>
                    <input type="text" class="form-control" name="berat" required>
                </div>

                <div class="form-group">
                    <label>Umur Hewan Ternak</label>
                    <input type="text" class="form-control" name="umur" required>
                </div>

                <div class="form-group">
                    <label>Hasil Pemeriksaan</label>
                    <input type="text" class="form-control" name="hasil_pemeriksaan" required>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
                      <thead>
                      <tr>
                            <th>No</th>
                            <th>Nama Ternak</th>
                            <th>Nomor</th>
                            <th>Berat Hewan Ternak</th>
                            <th>Umur Hewan Ternak</th>
                            <th>Hasil Pemeriksaan</th>
                            <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      @php($i = 1)
                      @foreach ($details as $detail)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{$detail->nama_ternak}}</td>
                            <td>{{$detail->nomor}}</td>
                            <td>{{$detail->berat}}</td>
                            <td>{{$detail->umur}}</td>
                            <td>{{$detail->hasil_pemeriksaan}}</td>
                            <td>
                                <div class="d-flex justify-content-center">

                                    <a href="/periksakesehatan/<?php echo $detail->id ?>/editdetail"
                                        class="btn btn-sm btn-info btn-icon mr-2">
                                        <i class="fas fa-edit"></i>
                                        Edit
                                    </a>

                                    <a href="/periksakesehatan/deldetail/<?php echo $detail->id ?>"
                                        class="btn btn-sm btn-danger btn-icon confirm-delete" onclick="return confirm('Are you sure to delete this ?');">
                                        <i class="fas fa-times"></i> Delete
                                    </a>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                      </tbody>
        </table>
        </div>

</div>


@endsection

@push('service')

@endpush
