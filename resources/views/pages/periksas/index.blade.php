@extends('layouts.master')

@section('title','Pemeriksaan Ternak')

@section('conten')

<x-alert></x-alert>
<div class="card">
    <div class="card-header bg-white">
        <h3>Data Pemeriksaan Ternak</h3>
    </div>
    <div class="card-body">
    <div class="form-group">
        <a href="{{route('periksakesehatan.create')}}" class="btn btn-primary">Add New</a>
    </div>
    <table id="example" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                        <th>No</th>
                        <th>Tanggal Pemeriksaan</th>
                        <th>Nama Peternak</th>
                        <th>Pemeriksa 1</th>
                        <th>Pemeriksa 2</th>
                        <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @php($i = 1)
                  @foreach ($periksas as $periksa)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{$periksa->tgl_pemeriksaan}}</td>
                        <td>{{$periksa->nama_peternak}}</td>
                        <td>{{$periksa->pemeriksa1}}</td>
                        <td>{{$periksa->pemeriksa2}}</td>
                        <td>
                            <div class="d-flex justify-content-center">

                                <a href="/periksakesehatan/<?php echo $periksa->id ?>/lihat"
                                    class="btn btn-sm btn-success btn-icon mr-2">
                                    <i class="fas fa-file"></i>
                                    Lihat
                                </a>

                                <a href='{{ route('periksakesehatan.edit', $periksa->id) }}'
                                    class="btn btn-sm btn-info btn-icon">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                </a>

                                <form action="{{ route('periksakesehatan.destroy', $periksa->id) }}" method="POST"
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
