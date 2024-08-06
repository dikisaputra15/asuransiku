@extends('layouts.master')

@section('title','Edit Form Pemeriksa kesehatan')

@section('conten')

<x-alert></x-alert>
<div class="card">
    <div class="card-header bg-white">
        <h3>Edit Form Pemeriksa Kesehatan Ternak</h3>
    </div>
    <div class="card-body">
    <form action="{{ route('periksakesehatan.update', $periksakesehatan) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">

                <div class="form-group">
                    <label>Tanggal Pemeriksaan</label>
                    <input type="date" class="form-control" name="tgl_pemeriksaan" value="{{ $periksakesehatan->tgl_pemeriksaan }}">
                </div>

                <div class="form-group">
                        <label>Nama Peternak</label>
                        <select class="form-control" name="id_peserta">
                            <?php
                                foreach ($pesertas as $peserta) {

                                        if ($peserta->id_user==$periksakesehatan->id_peserta) {
                                            $select="selected";
                                        }else{
                                            $select="";
                                        }

                                ?>
                                    <option <?php echo $select; ?> value="<?php echo $peserta->id_user;?>"><?php echo $peserta->name; ?></option>

                                <?php } ?>

                        </select>
                </div>

                <div class="form-group">
                    <label>Pemeriksa 1</label>
                    <input type="text" class="form-control" name="pemeriksa1" value="{{ $periksakesehatan->pemeriksa1 }}">
                </div>

                <div class="form-group">
                    <label>Pemeriksa 2</label>
                    <input type="text" class="form-control" name="pemeriksa2" value="{{ $periksakesehatan->pemeriksa2 }}">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>


@endsection

@push('service')

@endpush
