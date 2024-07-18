@extends('layouts.master')

@section('title','Laporan Penajuan')

@section('conten')

<x-alert></x-alert>
<div class="card">
    <div class="card-header bg-white">
        <h3>Data Laporan Permohonan Pengajuan</h3>
    </div>
    <div class="card-body">
    <table id="example" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                        <th>Nomor</th>
                        <th>Tanggal</th>
                        <th>Nama Pemohon</th>
                        <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($permohonans as $permohonan)
                    <tr>
                        <td>{{$permohonan->nomor}}</td>
                        <td>{{$permohonan->tanggal}}</td>
                        <td>{{$permohonan->name}}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="/suratpengantar/<?php echo $permohonan->id ?>/lihatpdf"
                                    class="btn btn-sm btn-success btn-icon mr-2" target="__blank">
                                    <i class="fas fa-file"></i>
                                    Lihat Permohonan
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
