<table>
  <tr>
      <td style="width:150px;"><img src="https://dkpp.serangkab.go.id/front/assets/img/logo-dkpp.svg" style="width: 30px; height: 10px;"></td>
      <td style="width:550px;"><h3 style="text-align:center; margin-top:40px;">SURAT KETERANGAN PENGAJUAN ASURANSI HEWAN TERNAK</h3></td>
  </tr>
</table>

<hr>
<p>Berdasarkan permintaan pemeriksaan kesehatan ternak sebagai persyaratan pendaftaran asuransi usaha ternak sapi dan kerbau (AUTSK) pada program pengembangan ruminansia, tim dinas ketahanan pangan dan pertanian kabupaten serang terdiri dari :</p>
<table>
  <tr>
    <td>1.</td>
    <td>{{$tim->pemeriksa1}}</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>{{$tim->pemeriksa2}}</td>
  </tr>
</table>
<p>telah melakukan pemeriksaan kesehatan ternak milik <?php echo $peternak->name; ?> dengan keterangan sebgai berikut :</p>

<table border="1" cellspacing="0" cellpadding="5">
  <tr>
    <th>No</th>
    <th>Nama Ternak</th>
    <th>Nomor</th>
    <th>Hasil Pemeriksaan</th>
  </tr>
  @php($i = 1)
  @foreach($details as $detail)
  <tr>
    <td>{{ $i++ }}</td>
    <td>{{$detail->nama_ternak}}</td>
    <td>{{$detail->nomor}}</td>
    <td>{{$detail->hasil_pemeriksaan}}</td>
  </tr>
  @endforeach
</table>

<p>Dari Hasil Pemeriksaan Ternak dinyatakan SEHAT dan Permohonan Pengajuan Asuransi Bapak/Ibu {{$peserta->nama_peternak}} DITERIMA</p><br><br>
<center><img src="data:image/png;base64,{{ $qrCodeImage }}" alt="QR Code"></center>
<p style="text-align: center;">Tim Pemeriksa</p>
<p style="text-align: center;">1. {{$tim->pemeriksa1}}</p>
<p style="text-align: center;">2. {{$tim->pemeriksa2}}</p>
