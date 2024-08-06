@extends('layouts.master')

@section('title','Data Pengajuan')

@section('conten')

<x-alert></x-alert>
<div class="card">
    <div class="card-header bg-white">
        <h3>Informasi Pengajuan Peserta Asuransi</h3>
    </div>
    <div class="card-body">

    <table id="example" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                        <th>Nama Peternak</th>
                        <th>Tanggal</th>
                        <th>No Handhpone</th>
                        <th>Desa</th>
                        <th>Kecamatan</th>
                        <th>Kabupaten / Kota</th>
                        <th>Jenis Ternak</th>
                        <th>Jumlah Ternak</th>
                        <th>Harga</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($pesertas as $peserta)
                    <tr>
                        <td>{{$peserta->name}}</td>
                        <td>{{$peserta->tgl_pengajuan}}</td>
                        <td>{{$peserta->no_hp}}</td>
                        <td>{{$peserta->desa}}</td>
                        <td>{{$peserta->kecamatan}}</td>
                        <td>{{$peserta->kabupaten_kota}}</td>
                        <td>{{$peserta->jenis_ternak}}</td>
                        <td>{{$peserta->jumlah_ternak}}</td>
                        <td>{{$peserta->harga}}</td>
                        <td>{{$peserta->keterangan}}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <?php if($peserta->keterangan == 'diterima'){ ?>
                                    <a href="/informasi/<?php echo $peserta->id ?>/sk"
                                        class="btn btn-sm btn-success btn-icon mr-2" target="__blank">
                                        <i class="fas fa-file"></i>
                                        Lihat SK
                                    </a>
                                <?php } ?>
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
