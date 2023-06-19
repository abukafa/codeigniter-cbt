<div class="row col-md-12 ini_bodi">
    <div class="panel panel-danger">
        <div class="panel-heading"><b>DATA KELAS</b>
            <div class="tombol-kanan">
                <a class="btn btn-primary btn-sm tombol-kanan" href="#" onclick="return m_kelas_e(0);"><i class="glyphicon glyphicon-plus"></i> &nbsp;&nbsp;Tambah</a>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-bordered" id="datatabel">
                <thead>
                    <tr>
                        <th width="3%">No</th>
                        <th width="50%">Kelas</th>
                        <th width="10%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>

        </div>
    </div>
</div>
</div>
<div class="modal fade" id="m_kelas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 id="myModalLabel">Data Kelas</h4>
            </div>
            <div class="modal-body">
                <form name="f_kelas" id="f_kelas" onsubmit="return m_kelas_s();">
                    <input type="hidden" name="id" id="id" value="0">
                    <table class="table table-form">
                        <tr>
                            <td style="width: 25%">Kelas</td>
                            <td style="width: 75%"><input type="text" class="form-control" name="kelas" id="kelas" required></td>
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