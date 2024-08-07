
<table>
  <tr>
      <td style="width:150px;"><img src="https://dkpp.serangkab.go.id/front/assets/img/logo-dkpp.svg" style="width: 30px; height: 10px;"></td>
      <td style="width:550px;"><h3 style="text-align:center; margin-top:40px;">Laporan Pengajuan Peserta Asuransi Hewan Ternak</h3></td>
  </tr>
</table>
<hr>

<table border="1" cellspacing="0" cellpadding="5" width="100%">
  <tr>
    <th>No</th>
    <th>Tanggal Pengajuan</th>
    <th>Nama Peternak</th>
    <th>No Hp</th>
    <th>Desa</th>
    <th>Kecamatan</th>
    <th>Kabupaten/Kota</th>
    <th>Jenis Ternak</th>
    <th>Jumlah Ternak</th>
    <th>Harga</th>
    <th>Status</th>
  </tr>
  @php($i = 1)
  @foreach($laporans as $pesan)
  <tr>
    <td>{{ $i++ }}</td>
    <td>{{$pesan->tgl_pengajuan}}</td>
    <td>{{$pesan->name}}</td>
    <td>{{$pesan->no_hp}}</td>
    <td>{{$pesan->desa}}</td>
    <td>{{$pesan->kecamatan}}</td>
    <td>{{$pesan->kabupaten_kota}}</td>
    <td>{{$pesan->jenis_ternak}}</td>
    <td>{{$pesan->jumlah_ternak}}</td>
    <td>{{$pesan->harga}}</td>
    <td>{{$pesan->keterangan}}</td>
  </tr>
  @endforeach

</table>


