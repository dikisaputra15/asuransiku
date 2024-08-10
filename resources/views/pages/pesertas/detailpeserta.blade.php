
<!DOCTYPE html>
<html lang="en">
    <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Home Page</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('Growing')}}/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="{{asset('Growing')}}/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('Growing')}}/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('Growing')}}/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('Growing')}}/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets -->
      <link rel="stylesheet" href="{{asset('Growing')}}/css/owl.carousel.min.css">
      <link rel="stylesheet" href="{{asset('Growing')}}/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    </head>
    <body>
<div class="card">
    <div class="card-header bg-white">
        <h3>Peserta Ternak</h3>
    </div>
    <div class="card-body">
    <table>
        <tr>
            <td>Tanggal Pengajuan</td>
            <td>:</td>
            <td>{{$peserta->tgl_pengajuan}}</td>
        </tr>
        <tr>
            <td>Nama Peternak</td>
            <td>:</td>
            <td>{{$nama->name}}</td>
        </tr>
        <tr>
            <td>No Hp</td>
            <td>:</td>
            <td>{{$peserta->no_hp}}</td>
        </tr>
        <tr>
            <td>Desa</td>
            <td>:</td>
            <td>{{$peserta->desa}}</td>
        </tr>
        <tr>
            <td>Kecamatan</td>
            <td>:</td>
            <td>{{$peserta->kecamatan}}</td>
        </tr>
        <tr>
            <td>Kabupaten/Kota</td>
            <td>:</td>
            <td>{{$peserta->kabupaten_kota}}</td>
        </tr>
        <tr>
            <td>Jenis Ternak</td>
            <td>:</td>
            <td>{{$peserta->jenis_ternak}}</td>
        </tr>
        <tr>
            <td>Jumlah Ternak</td>
            <td>:</td>
            <td>{{$peserta->jumlah_ternak}}</td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td>{{$peserta->keterangan}}</td>
        </tr>
        <tr>
            <td>KTP</td>
            <td>:</td>
            <td><img src="{{ Storage::url('filektp/'.$peserta->ktp) }}" style="width:60px; height:60px;"></td>
        </tr>
        <tr>
            <td>Foto Ternak</td>
            <td>:</td>
            <td><img src="{{ Storage::url('filefoto/'.$peserta->foto_ternak) }}" style="width:60px; height:60px;"></td>
        </tr>
        <tr>
            <td>Surat Keterangan</td>
            <td>:</td>
            <td><a href="{{ Storage::url('filesurat/'.$peserta->surat_pengantar) }}" target="__blank">{{$peserta->surat_pengantar}}</a></td>
        </tr>
    </table>
    </div>
</div>

<script src="{{asset('Growing')}}/js/jquery.min.js"></script>
<script src="{{asset('Growing')}}/js/popper.min.js"></script>
<script src="{{asset('Growing')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('Growing')}}/js/jquery-3.0.0.min.js"></script>
<script src="{{asset('Growing')}}/js/plugin.js"></script>
<!-- sidebar -->
<script src="{{asset('Growing')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="{{asset('Growing')}}/js/custom.js"></script>
<!-- javascript -->
<script src="{{asset('Growing')}}/js/owl.carousel.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>
</html>


