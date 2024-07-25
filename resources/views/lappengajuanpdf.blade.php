<h3><center>Laporan Pengajuan Peserta Asuransi Hewan Ternak</center></h3>
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
    <td>{{$pesan->nama_peternak}}</td>
    <td>{{$pesan->no_hp}}</td>
    <td>{{$pesan->desa}}</td>
    <td>{{$pesan->kecamatan}}</td>
    <td>{{$pesan->kabupaten_kota}}</td>
    <td>{{$pesan->jenis_ternak}}</td>
    <td>{{$pesan->jumlah_ternak}}</td>
    <td>{{$pesan->harga}}</td>
    <td>{{$pesan->status}}</td>
  </tr>
  @endforeach

</table>


