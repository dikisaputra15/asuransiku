@extends('layouts.master')

@section('title','Laporan Penajuan')

@section('conten')

<x-alert></x-alert>
<div class="card">
    <div class="card-header bg-white">
        <h3>Data Laporan Permohonan Pengajuan</h3>
    </div>
    <div class="card-body">
        <h5>Filter Berdasarkan Tanggal</h5>
        <div class="card">
            <form action="/pdflappengajuan" method="POST" target="__blank">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" name="start_date" required>
                    </div>

                    <div class="form-group">
                        <label>Sampai Dengan Tanggal</label>
                        <input type="date" class="form-control" name="end_date" required>
                    </div>

                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary">Filter</button>
                </div>
            </form>
        </div>
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
