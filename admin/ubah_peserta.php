      

      <?php

        include 'header.php';

      ?>

      <!--main content start-->
      <section id="main-content">
        <section class="wrapper site-min-height">
          <h3><i class="fa fa-angle-right"></i> Data Peserta</h3>
          <div class="row mt">
            <div class="col-lg-12">
              <div class="showback">
                <h4><i class="fa fa-angle-right"></i> Ubah Peserta</h4>
                <hr>

                <form class="form-horizontal style-form" method="POST" action="#" style="margin-top:20px">

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Lengkap</label>
                    <div class="col-sm-4">
                      <input type="text" name="nama_peserta" class="form-control" placeholder="Nama Lengkap" required >
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nomor KTP</label>
                    <div class="col-sm-4">
                      <input type="text" name="nomor_ktp" class="form-control" placeholder="Nomor KTP" required >
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-4">
                        <label class="radio-inline">
                          <input type="radio" name="jk" value="Laki-Laki" checked >Laki - laki
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="jk" value="Perempuan" >Perempuan
                        </label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tempat dan Tanggal Lahir</label>
                    <div class="col-sm-3">
                      <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required >
                    </div>
                    <div class="col-sm-3">
                      <input type="text" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" required >
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Agama</label>
                    <div class="col-sm-4">
                        <select name="agama" class="form-control" required>
                          <option value="">Pilih Agama</option> 
                          <option value="Islam">Islam</option> 
                          <option value="Kristen">Kristen</option> 
                          <option value="Katolik">Katolik</option> 
                          <option value="Hindu">Hindu</option> 
                          <option value="Buddha">Buddha</option> 

                        </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2  control-label">Alamat</label>
                    <div class="col-sm-4">
                        <textarea name="alamat" class="form-control" placeholder="Alamat" required ></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nomor HP</label>
                    <div class="col-sm-4">
                        <input type="text" name="no_hp" class="form-control" placeholder="Nomor HP" required >
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-4">
                        <input type="text" name="email" class="form-control" placeholder="Email" required >
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pendidikan Terakhir</label>
                    <div class="col-sm-4">
                        <select name="pendidikan_terakhir" class="form-control" required>
                          <option value="">Pilih Pendidikan</option> 
                          <option value="tidak sekolah">Tidak Sekolah</option> 
                          <option value="sd">SD/Sederajat</option> 
                          <option value="smp">SMP/Sederajat</option> 
                          <option value="sma">SMA/Sederajat</option> 
                          <option value="lainnya">Lainnya</option> 

                        </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kejuruan</label>
                    <div class="col-sm-4">
                        <select name="kejuruan" class="form-control" required>
                          <option value="">Pilih Kejuruan</option> 
                          <option value="Memasak">Memasak</option> 
                          <option value="Menjahit">Menjahit</option> 
                          <option value="Elektro">Elektro</option> 
                          
                        </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sumber Info</label>
                    <div class="col-sm-4">
                        <select name="sumber_info" class="form-control" required>
                          <option value="">Pilih Sumber Info</option> 
                          <option value="Brosur">Brosur</option> 
                          <option value="Media Sosial">Media Sosial</option> 
                          <option value="Teman">Teman</option> 
                          
                        </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-12">
                        <input type="submit" class="btn btn-primary pull-right" value="Simpan"></input>
                        <button type="button" class="btn btn-danger pull-right" style="margin-right:20px" id="batal">Batal</button>               
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

      <script>
        $(document).ready(function(){

            $('#kejuruan, #tanggal_daftar').keyup( function() {
              table.draw();
            });
            
            $('input[name="tanggal_lahir"]').click(function(){

              var date_input = $('input[name="tanggal_lahir"]');
              var options={
                        format: 'mm/dd/yyyy',
                        container: container,
                        todayHighlight: true,
                        autoclose: true,
              };

              date_input.datepicker(options);

            });
        });
      </script>