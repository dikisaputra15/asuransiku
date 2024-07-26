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

    <?php if(auth()->user()->roles == 'admin'){ ?>
         <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h5><a href="{{ Route('user.index') }}" style="color:white;"> Management User </a></h5>
              </div>
            </div>
          </div>


    <?php } ?>

    <?php if(auth()->user()->roles == 'peternak'){ ?>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h5><a href="{{ Route('pesertaasuransi.index') }}" style="color:white;"> Pengajuan Asuransi </a></h5>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">

                <h5><a href="{{ Route('pesertaasuransi.index') }}" style="color:white;"> Informasi Pengajuan </a></h5>
              </div>

            </div>
          </div>
    <?php } ?>

    <?php if(auth()->user()->roles == 'staff'){ ?>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h5><a href="{{ Route('periksakesehatan.index') }}" style="color:white;"> Pemeriksaan Kesehatan </a></h5>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">

                <h5><a href="/home/baperiksa" style="color:white;"> Laporan Pemeriksaan </a></h5>
              </div>

            </div>
          </div>
    <?php } ?>

    <?php if(auth()->user()->roles == 'kepala'){ ?>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h5><a href="{{ Route('pesertaasuransi.index') }}" style="color:white;"> Validasi Pengajuan </a></h5>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">

                <h5><a href="/home/permohonan" style="color:white;"> Laporan Pengajuan </a></h5>
              </div>

            </div>
          </div>
    <?php } ?>

    </div>
</div>


@endsection

@push('service')

@endpush
