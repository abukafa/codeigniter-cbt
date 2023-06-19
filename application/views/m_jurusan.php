<div class="row col-md-12 ini_bodi">
    <div class="panel panel-warning">
        <div class="panel-heading"><b>DATA JURUSAN</b>
            <div class="tombol-kanan">
                <a class="btn btn-warning btn-sm tombol-kanan" href="#" onclick="return m_jurusan_e(0);"><i class="glyphicon glyphicon-plus"></i> &nbsp;&nbsp;Tambah</a>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-bordered" id="datatabel">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="50%">Jurusan</th>
                        <th width="20%">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                </tbody>
            </table>

        </div>
    </div>
</div>
</div>
<div class="modal fade" id="m_jurusan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 id="myModalLabel">Data Jurusan</h4>
            </div>
            <div class="modal-body">
                <form name="f_jurusan" id="f_jurusan" onsubmit="return m_jurusan_s();">
                    <input type="hidden" name="id" id="id" value="0">
                    <table class="table table-form">
                        <tr>
                            <td style="width: 25%">Jurusan</td>
                            <td style="width: 75%"><input type="text" class="form-control" name="jurusan" id="jurusan" required></td>
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