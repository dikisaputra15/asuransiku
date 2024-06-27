<h3><center>{{$surat->kepala_surat}}</center></h3>
<hr>
<p style="text-align: right;">{{$surat->tempat}}, {{$surat->tanggal}}</p>
<p>{{$surat->tujuan}}</p>
<u><h3 style="text-align: center;">{{$surat->nama_surat}}</h3></u>
<p style="text-align: center;">No : {{$surat->nomor}}</p>

<table border="1" cellspacing="0" cellpadding="5">
    <tr>
      <th>No</th>
      <th>Jenis Surat</th>
      <th>Volume</th>
      <th>Keterangan</th>
    </tr>

    <tr>
      <td>1</td>
      <td>{{$surat->jenis_surat}}</td>
      <td>{{$surat->volume}}</td>
      <td>{{$surat->keterangan}}</td>
    </tr>

  </table>

  <p>demikian permohonan ini kami sampaikan atas perhatiannya kami ucapkan terima kasih</p>
  <br><br><br>
  <p style="text-align: right;">Ketua Kelompok Tani</p>
  <p style="text-align: right;">{{$surat->nama_ketua_klp_ternak}}</p>
