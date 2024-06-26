@extends('layouts.master')

@section('title','Pemeriksaan Ternak')

@section('conten')

<x-alert></x-alert>
<div class="card">
    <div class="card-header bg-white">
        <h3>Data Pemeriksaan Ternak</h3>
    </div>
    <div class="card-body">
    <table id="example" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                        <th>No</th>
                        <th>Nama Kelompok Ternak</th>
                        <th>Nama Peternak</th>
                        <th>Jenis Ternak</th>
                        <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @php($i = 1)
                  @foreach ($pesertas as $peserta)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{$peserta->nama_klp_ternak}}</td>
                        <td>{{$peserta->nama_peternak}}</td>
                        <td>{{$peserta->jenis_ternak}}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a href=''
                                    class="btn btn-sm btn-info btn-icon">
                                    <i class="fas fa-file"></i>
                                    Edit
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
