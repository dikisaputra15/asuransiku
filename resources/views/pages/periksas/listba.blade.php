@extends('layouts.master')

@section('title','Laporan Pemeriksaan')

@section('conten')

<x-alert></x-alert>
<div class="card">
    <div class="card-header bg-white">
        <h3>Laporan Pemeriksaan</h3>
    </div>
    <div class="card-body">

    <table id="example" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                        <th>No</th>
                        <th>Tanggal Pemeriksaan</th>
                        <th>Nama Peternak</th>
                        <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @php($i = 1)
                  @foreach ($periksas as $periksa)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{$periksa->tgl_pemeriksaan}}</td>
                        <td>{{$periksa->name}}</td>
                        <td>
                            <div class="d-flex justify-content-center">

                                <a href="/periksakesehatan/<?php echo $periksa->id ?>/lihatpdf"
                                    class="btn btn-sm btn-success btn-icon mr-2" target="__blank">
                                    <i class="fas fa-file"></i>
                                    Lihat PDF
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
<script>
  $(function () {
    $("#example").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
@endpush
