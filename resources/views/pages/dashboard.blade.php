@extends('layouts.master')

@section('title','Dashboard')

@section('conten')

<div class="card">
    <div class="card-header bg-white">
        <h3 style="text-align: center;">Selamat Datang</h3>
        <h3 style="text-align: center;">Dashboard Sistem Pendaftaran Asuransi</h3>
    </div>
    <div class="card-body">
         <div class="row">

         <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <p>Jumlah Permohonan diproses</p>
              </div>

              <h5 style="text-align: center;">{{ $diproses }}</h5>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">

                <p>Jumlah Permohonan diterima</p>
              </div>
              <h5 style="text-align: center;">{{ $diterima }}</h5>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <p>Jumlah Permohonan ditolak</p>
              </div>

              <h5 style="text-align: center;">{{ $ditolak }}</h5>
            </div>
          </div>


    </div>
</div>


@endsection

@push('service')

@endpush
