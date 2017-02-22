      

      <?php

        include 'header.php';

      ?>

      <!--main content start-->
      <section id="main-content">
        <section class="wrapper site-min-height">
          <h3><i class="fa fa-angle-right"></i> Data Karyawan</h3>
          <div class="row mt">
            <div class="col-lg-7">
              <div class="showback">
                <h4><i class="fa fa-angle-right"></i> Tabel Karyawan</h4>  
                <hr>

                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Karyawan</th>
                      <th>Email</th>
                      <th>Jabatan</th>
                      <th>Aksi</th>
                    </tr>

                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Mohammad Fajar Ainul Bashri</td>
                      <td>iniemail@email.com</td>
                      <td>Staff</td>
                      <td>
                        <a href="#" class="btn btn-info btn-xs" data-toggle="tooltip" title="Ubah Data Karyawan" ><i class="fa fa-pencil"></i></a>
                        <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Hapus Data Karyawan" ><i class="fa fa-trash-o"></i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              
              </div>
            </div>

            <div class="col-lg-5">
              <div class="showback">
                <h4><i class="fa fa-angle-right"></i> Form Karyawan</h4>  
                <hr>

                <form class="form-horizontal style-form" method="POST" action="#" style="margin-top:20px">

                  <div class="form-group">
                    <label class="col-sm-4 control-label">Nama Karyawan</label>
                    <div class="col-sm-8">
                      <input type="text" name="nama_karyawan" class="form-control" placeholder="Nama Karyawan" required >
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4 control-label">Email</label>
                    <div class="col-sm-8">
                      <input type="email" name="email" class="form-control" placeholder="Email" required >
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4 control-label">Jabatan</label>
                    <div class="col-sm-8">
                      <select name="jabatan" class="form-control" required>
                        <option value="">Pilih Jabatan</option> 
                        <option value="Staff" selected>Staff</option> 
                        <option value="Ketua">Ketua</option> 
                        
                        
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-12">
                        <input type="submit" class="btn btn-primary pull-right" value="Simpan"></input>
                        <!-- <button type="button" class="btn btn-danger pull-right" style="margin-right:20px" id="batal">Batal</button>  -->              
                    </div>        
                  </div>
                
                </form>
              
              </div>
            </div>
          </div>
        </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

    <!--main content end-->
    

      <?php

        include 'footer.php';

      ?>