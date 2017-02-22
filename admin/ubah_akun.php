      

      <?php

        include 'header.php';

      ?>

      <!--main content start-->
      <section id="main-content">
        <section class="wrapper site-min-height">
          <h3><i class="fa fa-angle-right"></i> Pengaturan Akun</h3>
          <div class="row mt">
            <div class="col-lg-6">
              <div class="showback">
                <h4><i class="fa fa-angle-right"></i> Ubah Profile</h4>
                <hr>

                <form class="form-horizontal style-form" method="POST" action="#">
                  
                  <div class="form-group">
                    <label class="col-sm-4 col-sm-4 control-label">Nama Akun</label>
                    <div class="col-sm-8">
                        <input type="text" name="nama_akun" class="form-control" placeholder="Nama Akun" required >
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4 col-sm-4 control-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" name="email" class="form-control" placeholder="Email" required >
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-sm-12">
                      <input type="submit" class="btn btn-primary pull-right" value="Simpan"></input>               
                    </div>        
                  </div>
                </form>


              </div>
              <!-- END SHOWBACK -->
            </div> 

            <div class="col-lg-6">
              <div class="showback">
                <h4><i class="fa fa-angle-right"></i> Ubah Password</h4>
                <hr>

                <form class="form-horizontal style-form" method="POST" action="#">
                  
                  <div class="form-group">
                    <label class="col-sm-4 col-sm-4 control-label">Password Lama</label>
                    <div class="col-sm-8">
                        <input type="password" name="password_lama" class="form-control" placeholder="Password Lama" required >
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4 col-sm-4 control-label">Password Baru</label>
                    <div class="col-sm-8">
                        <input type="password" name="password_baru" class="form-control" placeholder="Password Baru" required >
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4 col-sm-4 control-label">Konfirmasi Password Baru</label>
                    <div class="col-sm-8">
                        <input type="password" name="konfirmasi_password" class="form-control" placeholder="Konfirmasi Password Baru" required >
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-sm-12">
                      <input type="submit" class="btn btn-primary pull-right" value="Simpan"></input>               
                    </div>        
                  </div>
                </form>


              </div>
              <!-- END SHOWBACK -->
            </div> 


          </div>
        </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

    <!--main content end-->
    

      <?php

        include 'footer.php';

      ?>