<div class="row col-md-12 ini_bodi">
  <div class="panel panel-success">
    <div class="panel-heading"><b>DAFTAR PESERTA UJIAN</b>
      <div class="tombol-kanan">
        <a class="btn btn-success btn-sm tombol-kanan" href="#" onclick="return m_siswa_e(0);"><i class="glyphicon glyphicon-plus"></i> &nbsp;&nbsp;Tambah</a>
        <a class="btn btn-warning btn-sm tombol-kanan" href="<?php echo base_url(); ?>upload/format_import_siswa.xlsx"><i class="glyphicon glyphicon-download"></i> &nbsp;&nbsp;Download Format Import</a>
        <a class="btn btn-danger btn-sm tombol-kanan" href="<?php echo base_url(); ?>adm/m_siswa/import"><i class="glyphicon glyphicon-upload"></i> &nbsp;&nbsp;Import</a>
      </div>
    </div>
    <div class="panel-body">
      <a href="#" onclick="return aktifkan_semua_siswa();" class="btn btn-primary" style="margin-bottom: 10px"><i class="fa fa-save"></i> &nbsp;<b>ACTIVE ALL</b></a>
      <a href="#" onclick="return m_siswa_hs();" class="btn btn-danger" style="margin-bottom: 10px"><i class="fa fa-users"></i> &nbsp;<b> DELETE ALL</b></a>
      <table class="table table-bordered" id="datatabel">
        <thead>
          <tr>
            <th width="3%">No</th>
            <th width="30%">Nama</th>
            <th width="15%">NIM / Username</th>
            <th width="15%">Kelas & Jurusan</th>
            <th width="40%">Aksi</th>
          </tr>
        </thead>

        <tbody></tbody>
      </table>

    </div>
  </div>
</div>
</div>

<div class="modal fade" id="m_siswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 id="myModalLabel">Data Siswa</h4>
      </div>
      <div class="modal-body">
        <form name="f_siswa" id="f_siswa" onsubmit="return m_siswa_s();">
          <input type="hidden" name="id" id="id" value="0">
          <table class="table table-form">
            <tr>
              <td style="width: 25%">Nama</td>
              <td style="width: 75%"><input type="text" class="form-control" name="nama" id="nama" required></td>
            </tr>
            <tr>
              <td style="width: 25%">NIM</td>
              <td style="width: 75%"><input type="text" class="form-control" name="nim" id="nim" required></td>
            </tr>
            <tr>
              <td style="width: 25%">Kelas</td>
              <td style="width: 75%">
                <select name="jurusan" id="jurusan" class="form-control" required>
                  <option value="">Pilih salah satu</option>
                  <?php foreach ($kelas as $baris) : ?>
                    <option value="<?php echo $baris->kelas; ?>"><?php echo $baris->kelas; ?></option>
                  <?php endforeach; ?>
                </select>
              </td>
            </tr>
            <tr>
              <td style="width: 25%">Jurusan</td>
              <td style="width: 75%">
                <select name="id_jurusan" id="id_jurusan" class="form-control" required>
                  <option value="">Pilih salah satu</option>
                  <?php foreach ($jurusan as $baris) : ?>
                    <option value="<?php echo $baris->jurusan; ?>"><?php echo $baris->jurusan; ?></option>
                  <?php endforeach; ?>
                </select>
              </td>
            </tr>
          </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary"><i class="fa fa-check"></i> Simpan</button>
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="fa fa-minus-circle"></i> Tutup</button>
      </div>
      </form>
    </div>
  </div>
</div>