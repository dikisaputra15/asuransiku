@extends('layouts.master')

@section('title','Filter Pengajuan')

@section('conten')

<x-alert></x-alert>
<div class="card">
    <div class="card-header bg-white">
        <h3>Data Pengajuan Peserta Asuransi</h3>
    </div>
    <div class="card-body">

        <div class="card">
        <h5>Filter Berdasarkan Tanggal</h5>
            <form action="/filtermohon" method="POST">
                @csrf
                <div class="card-body">
                <div class="row">
                <div class="col-3">
                    <div class="form-group">
                        <label>Dari</label>
                        <input type="date" class="form-control" name="start_date" required>
                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group">
                        <label>Sampai</label>
                        <input type="date" class="form-control" name="end_date" required>
                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group">
                        <label>Keterangan</label>
                        <select class="form-control" name="keterangan">
                            <option value="pengajuan">pengajuan</option>
                            <option value="diterima">diterima</option>
                            <option value="ditolak">ditolak</option>
                        </select>
                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group mt-4">
                        <button class="btn btn-primary">Filter</button>
                    </div>
                </div>
                </div>
                </div>

            </form>
        </div>

<br><br>

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
                        <th>Keterangan</th>
                        <th>KTP</th>
                        <th>Foto Ternak</th>
                        <th>Surat Pengantar</th>
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
                        <td>{{$peserta->keterangan}}</td>
                        <td><img src="{{ Storage::url('filektp/'.$peserta->ktp) }}" style="width:60px; height:60px;"></td>
                        <td><img src="{{ Storage::url('filefoto/'.$peserta->foto_ternak) }}" style="width:60px; height:60px;"></td>
                        <td><a href="{{ Storage::url('filesurat/'.$peserta->surat_pengantar) }}" target="__blank">{{$peserta->surat_pengantar}}</a></td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="/pengajuan/terima/<?php echo $peserta->id ?>"
                                            class="btn btn-sm btn-success mr-1">
                                            Terima
                                </a>

                                <a href="/pengajuan/tolak/<?php echo $peserta->id ?>"
                                            class="btn btn-sm btn-danger">
                                            Tolak
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
