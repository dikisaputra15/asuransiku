@extends('layouts.master')

@section('title','Pengajuan Asuransi')

@section('conten')

<x-alert></x-alert>
<div class="card">
    <div class="card-header bg-white">
        <h3>Data Permohonan Pengajuan Asuransi</h3>
    </div>
    <div class="card-body">
    <div class="form-group">
        <center><a href="{{ url('/AdminLTE/dist/pdf/suratpengantar.pdf') }}" target="__blank">Lihat Contoh Pengisian Surat Pengajuan Asuransi</a></center>
    </div>
    <div class="form-group">
        <a href="{{route('suratpengantar.create')}}" class="btn btn-primary">Add New</a>
    </div>
    <table id="example" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                        <th>Nama Pemohon</th>
                        <th>Kepala Surat</th>
                        <th>Tempat</th>
                        <th>Tanggal</th>
                        <th>Tujuan</th>
                        <th>Nama Surat</th>
                        <th>Nomor</th>
                        <th>Jenis Surat</th>
                        <th>Volume</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($surats as $surat)
                    <tr>
                        <td>{{$surat->name}}</td>
                        <td>{{$surat->kepala_surat}}</td>
                        <td>{{$surat->tempat}}</td>
                        <td>{{$surat->tanggal}}</td>
                        <td>{{$surat->tujuan}}</td>
                        <td>{{$surat->nama_surat}}</td>
                        <td>{{$surat->nomor}}</td>
                        <td>{{$surat->jenis_surat}}</td>
                        <td>{{$surat->volume}}</td>
                        <td>{{$surat->keterangan}}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <!-- <a href="/suratpengantar/<?php echo $surat->id ?>/lihatpdf"
                                    class="btn btn-sm btn-success btn-icon mr-2" target="__blank">
                                    <i class="fas fa-file"></i>
                                    Lihat
                                </a> -->

                                <a href='{{ route('suratpengantar.edit', $surat->id) }}'
                                    class="btn btn-sm btn-info btn-icon">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                </a>

                                <form action="{{ route('suratpengantar.destroy', $surat->id) }}" method="POST"
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
