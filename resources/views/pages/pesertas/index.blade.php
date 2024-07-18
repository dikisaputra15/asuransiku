@extends('layouts.master')

@section('title','Informasi Data Pengajuan')

@section('conten')

<x-alert></x-alert>
<div class="card">
    <div class="card-header bg-white">
        <h3>Informasi Pengajuan Peserta Asuransi</h3>
    </div>
    <div class="card-body">
    <div class="form-group">
        <a href="{{route('pesertaasuransi.create')}}" class="btn btn-primary">Add New</a>
    </div>
    <table id="example" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                        <th>Nama Pemohon</th>
                        <th>Tanggal</th>
                        <th>Nama Peternak</th>
                        <th>No Handhpone</th>
                        <th>Desa</th>
                        <th>Kecamatan</th>
                        <th>Kabupaten / Kota</th>
                        <th>Jenis Ternak</th>
                        <th>Jumlah Hewan Ternak</th>
                        <th>Harga</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($pesertas as $peserta)
                    <tr>
                        <td>{{$peserta->name}}</td>
                        <td>{{$peserta->tgl_pengajuan}}</td>
                        <td>{{$peserta->nama_peternak}}</td>
                        <td>{{$peserta->no_hp}}</td>
                        <td>{{$peserta->desa}}</td>
                        <td>{{$peserta->kecamatan}}</td>
                        <td>{{$peserta->kabupaten_kota}}</td>
                        <td>{{$peserta->jenis_ternak}}</td>
                        <td>{{$peserta->jumlah_hewan_ternak}}</td>
                        <td>{{$peserta->harga}}</td>
                        <td>{{$peserta->status}}</td>
                        <td>{{$peserta->keterangan}}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="/pengajuan/<?php echo $peserta->id ?>/updatepengajuan"
                                    class="btn btn-sm btn-success btn-icon mr-2">
                                    <i class="fas fa-file"></i>
                                    Proses
                                </a>

                                <a href='{{ route('pesertaasuransi.edit', $peserta->id) }}'
                                    class="btn btn-sm btn-info btn-icon">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                </a>

                                <form action="{{ route('pesertaasuransi.destroy', $peserta->id) }}" method="POST"
                                    class="ml-2">
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <input type="hidden" name="_token"
                                        value="{{ csrf_token() }}" />
                                    <button class="btn btn-sm btn-danger btn-icon confirm-delete" onclick="return confirm('Are you sure to delete this ?');">
                                        <i class="fas fa-times"></i> Delete
                                    </button>
                                </form>
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
