<!DOCTYPE html>
<html>

<head>
  <title>Laporan Hasil Ujian</title>
  <link href='<?php echo base_url(); ?>___/css/style_print.css' rel='stylesheet' media='' type='text/css' />
</head>

<body>

  <h3>Laporan Hasil Ujian</h3>
  <hr style="border: solid 1px #000"><br>

  <h4>Detail Ujian</h4>
  <table class="table-bordered" style="margin-bottom: 0px">
    <tr>
      <td width="30%">Mata Pelajaran</td>
      <td><b><?php echo $detil_tes->namaMapel; ?></b></td>
    </tr>
    <tr>
      <td>Nama Guru</td>
      <td width="70%"><b><?php echo $detil_tes->nama_guru; ?></b></td>
    </tr>
    <tr>
      <td>Nama Ujian</td>
      <td width="70%"><b>[<?php echo $detil_tes->kelas; ?>] - [<?php echo $detil_tes->jurusan; ?>] - <?php echo $detil_tes->nama_ujian; ?></b></td>
    </tr>
    <tr>
      <td>Jumlah Soal</td>
      <td><b><?php echo $detil_tes->jumlah_soal; ?></b></td>
      </td>
    </tr>
    <tr>
      <td>Waktu</td>
      <td><b><?php echo $detil_tes->waktu; ?> menit</b></td>
    </tr>
    <?php
        $nilai_arr = array(
          100 => 100,
          95 => 98,
          90 => 96,
          85 => 94,
          80 => 92,
          75 => 90,
          70 => 88,
          65 => 86,
          60 => 84,
          55 => 82,
          50 => 80,
          40 => 78,
          30 => 76,
          20 => 74,
          10 => 72
        );
        foreach ($nilai_arr as $key => $value) {
            if ($statistik->max_ >= $key) {
              $maxi = $value;
              break;
            }
          }
        foreach ($nilai_arr as $key => $value) {
            if ($statistik->min_ >= $key) {
              $mini = $value;
              break;
            }
          }
        foreach ($nilai_arr as $key => $value) {
            if ($statistik->avg_ >= $key) {
              $avgy = $value;
              break;
            }
          }
    ?>
    <tr>
      <td>Tertinggi</td>
      <td><b><?php echo $maxi; ?></b></td>
    </tr>
    <tr>
      <td>Terendah</td>
      <td><b><?php echo $mini; ?></b></td>
    </tr>
    <tr>
      <td>Rata-rata</td>
      <td><b><?php echo $avgy; ?></b></td>
    </tr>
  </table>
  <br><br>
  <h4>Hasil Ujian</h4>
  <table class="table-bordered">
    <thead>
      <tr>
        <th width="5%">No</th>
        <th width="50%">Nama Peserta</th>
        <th width="15%">Jumlah Benar</th>
        <th width="15%">Persentasi</th>
        <th width="15%">Nilai</th>
      </tr>
    </thead>

    <tbody>
      <?php
      if (!empty($hasil)) {
        $no = 1;
        $na = 0;
        foreach ($hasil as $d) {
            foreach ($nilai_arr as $key => $value) {
                if ($d->nilai >= $key) {
                  $na = $value;
                  break;
                }
              }
          echo '<tr>
                <td class="ctr">' . $no . '</td>
                <td>' . $d->nama . '</td>
                <td class="ctr">' . $d->jml_benar . '</td>
                <td class="ctr">' . round($d->nilai) . '</td>
                <td class="ctr">' . $na . '</td>
                </tr>
                ';
          $no++;
        }
      } else {
        echo '<tr><td colspan="5">Belum ada data</td></tr>';
      }
      ?>
    </tbody>
  </table>
</body>

</html>