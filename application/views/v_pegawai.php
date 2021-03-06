  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
<div class="content">
  <div class="box box-danger">
    <div class="box-header bg-red with-border">
      <h1 class="box-title">Data Pegawai</h1>
    </div>
</section>

    <!-- Main content -->
    <section class="content">
      <div class='box box-default'>
        <div class="box-header with-border">
          <h1 class="box-title">Form Pegawai</h1>
        </div>
        <form class='form-horizontal' action='' method='post'>
          <div class='box-body'>
            <div class='form-group'>
              <label class='col-sm-2 control-label'>ID Pegawai</label>
              <div class='col-md-2'>
                <input type='text' name='id_peg' id='id_peg' class='form-control' required='true' placeholder='Masukkan ID pegawai'>
              </div>
            </div>
            <div class='form-group'>
              <label class='col-sm-2 control-label'>Nama</label>
              <div class='col-md-4'>
                <input type='text' name='nama_peg' id='nama_peg' class='form-control' required='true' placeholder='Masukkan nama pegawai'>
              </div>
            </div>
            <div class='form-group'>
              <label class='col-sm-2 control-label'>Alamat</label>
              <div class='col-md-6'>
                <input type='text' name='alamat_peg' id='alamat_peg' class='form-control' required='true' placeholder='Masukkan alamat pegawai'>
              </div>
            </div>
            <div class='form-group'>
              <label class='col-sm-2 control-label'>No Telp</label>
              <div class='col-md-2'>
                <input type='text' name='no_telp' id='no_telp' class='form-control' required='true' placeholder='Masukkan no. telp'>
              </div>
            </div>
            <div class='form-group'>
              <label class='col-sm-2 control-label'>E-mail</label>
              <div class='col-md-4'>
                <input type='text' name='email' id='email' class='form-control' placeholder='Masukkan alamat e-mail pegawai'>
              </div>
            </div>
            <div class='form-group'>
              <label class='col-sm-2 control-label'>Jabatan</label>
                <div class='col-md-3'>
                  <select class='form-control' required="" name='jabatan'>
                    <option value="jabatan1">Jabatan 1</option>
                    <option value="jabatan2">Jabatan 2</option>
                    <option value="jabatan3">Jabatan 3</option>
                  </select>
                </div>
            </div>
            <div class='form-group'>
              <label class='col-sm-2 control-label'>Sub-jabatan</label>
              <div class='col-md-3'>
                <select class='form-control' required="" name='subjabatan'>
                  <option value="subjabatan1">Sub-jabatan 1</option>
                  <option value="subjabatan2">Sub-jabatan 2</option>
                  <option value="subjabatan3">Sub-jabatan 3</option>
                </select>
              </div>
            </div>
            <div class='form-group'>
              <label class='col-sm-2 control-label'>Dokumen pegawai</label>
              <div class='col-md-3'>
                <input type='text' name='dokumen_peg' id='dokumen_peg' class='form-control' placeholder='Masukkan dokumen pegawai'>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class='box-footer'>
            <button type='reset' class='btn btn-default'><i class="glyphicon glyphicon-remove"></i> Reset</button>
            <button type='submit' class='btn btn-success' name='tambahData'><i class="glyphicon glyphicon-save"></i> Simpan</button>
          </div>
          <!-- /.box-footer -->
          </form>
        </div>

        <div class="box box-default">
          <div class='box-header with-border'>
             <h3 class='box-title'>Tabel Data Pegawai</h3>
          </div>
          <div class='box-body'>
            <div class="table-responsive">
              <table id='example1' class='table table-bordered table-striped'>
                <thead>
                  <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No telp</th>
                    <th>E-mail</th>
                    <th>Jabatan</th>
                    <th>Sub-jabatan</th>
                    <th>Dokumen</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>
    <!-- /.content -->
  </div>
</div>
</div>
  <!-- /.content-wrapper -->