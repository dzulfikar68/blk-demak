      

      <?php

        session_start();

        include 'header.php';
        require_once ('../proses/koneksi_db.php');

      ?>

      <!--main content start-->
      <section id="main-content">
        <section class="wrapper site-min-height">
          <h3><i class="fa fa-angle-right"></i> Data Jadwal</h3>
          <div class="row mt">
            <div class="col-lg-12">
              <div class="showback">
                <h4><i class="fa fa-angle-right"></i> Tabel Jadwal Pelatihan</h4>  
                <hr>
                <button style="margin-bottom:10px" class="btn btn-primary pull-right" id="tambah" type="button" data-toggle="collapse" href="#collapseForm"  >Tambah Jadwal</button>
                <br>
                <div class="clearfix" >

                </div>
                <?php

                  if(isset($_SESSION['error'])){

                    echo "<div class=\"alert alert-danger\" style=\"margin-top:15px\">";
                    echo "<p>".$_SESSION['error']."</p>";
                    echo "</div>";


                    unset($_SESSION['error']);

                  }else if(isset($_SESSION['success'])){
                    echo "<div class=\"alert alert-success\" style=\"margin-top:15px\">";
                    echo "<p>".$_SESSION['success']."</p>";
                    echo "</div>";
                    unset($_SESSION['success']);

                  }

                ?>
                <!-- COLLAPSE FORM -->
                <div class="collapse col-sm-12" style="margin-top:15px" id="collapseForm">
                  <div class="well">
                    <div class="showback">
                      <h4><i class="fa fa-angle-right"></i> Form Jadwal</h4>  
                      <hr>

                      <form class="form-horizontal style-form" method="POST" action="../proses/admin/tambah_jadwal.php" style="margin-top:20px">

                        <div class="form-group">
                          <label class="col-sm-4 control-label">Angkatan</label>
                          <div class="col-sm-8">
                            <select name="angkatan" class="form-control" required>
                              <option value="I">Angkatan I</option>
                              <option value="II">Angkatan II</option>
                              <option value="III">Angkatan III</option>
                              <option value="IV">Angkatan IV</option>
                              <option value="V">Angkatan V</option>
                            </select>
                          </div>
                        </div>


                        <div class="form-group">
                          <label class="col-sm-4 control-label">Nama Kejuruan</label>
                          <div class="col-sm-8">
                            <select name="kejuruan" class="form-control" required>
                              <?php

                                $query = mysqli_query($connect, "SELECT * FROM kejuruan ORDER BY date_created DESC");

                                while($row=mysqli_fetch_object($query)){
                                  echo "<option value=".$row->id_kejuruan.">".$row->nama_kejuruan."</option>";
                                }


                              ?>
                            </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-sm-4 control-label">Sumber Dana</label>
                          <div class="col-sm-8">
                            <select name="sumber_dana" class="form-control" required>
                              <option value="apbd">APBD</option>
                              <option value="apbn">APBN</option>
                             
                            </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-sm-4 control-label">Kapasitas</label>
                          <div class="col-sm-3">
                            <input type="number" name="kapasitas" min="1" class="form-control" placeholder="Kapasitas" required > 
                          </div>
                          <span class="col-sm-1" style="padding:5px">peserta</span>
                        </div>

                        <div class="form-group">
                          <label class="col-sm-4 control-label">Tanggal Seleksi</label>
                          <div class="col-sm-3">
                            <input type="text" name="seleksi_awal" class="form-control" placeholder="Awal Seleksi" required >
                          </div>
                          <span class="col-sm-1" style="padding:5px">sampai</span>
                          <div class="col-sm-3">
                            <input type="text" name="seleksi_akhir" class="form-control" disabled placeholder="Akhir Seleksi" required >
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Tanggal Pelatihan</label>
                          <div class="col-sm-3">
                            <input type="text" name="pelatihan_awal" class="form-control" disabled placeholder="Awal Pelatihan" required >
                          </div>
                          <span class="col-sm-1" style="padding:5px">sampai</span>
                          <div class="col-sm-3">
                            <input type="text" name="pelatihan_akhir" class="form-control" disabled placeholder="Akhir Pelatihan" required >
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
                <table class="table table-hover" id="tableJadwal">
                  <thead>
                    <tr>
                      <th>Angkatan</th>
                      <th>Nama Kejuruan</th>
                      <th>Sumber Dana</th>
                      <th>Kapasitas</th>
                      <th>Tanggal Seleksi</th>
                      <th>Tanggal Pelatihan</th>
                      <!-- <th>Tahun Pelatihan</th> -->
                      <th>Aksi</th>
                    </tr>

                  </thead>
                  <tbody>
                    <tr>
                      <td>I</td>
                      <td>Memasak</td>
                      <td>APPBN</td>
                      <td>12 Peserta</td>
                      <td>12 Januari 2017</td>
                      <td>19 Januari 2017</td>
                      <!-- <td>2017</td> -->
                      <td>
                        <a href="#" class="btn btn-info btn-xs" data-toggle="tooltip" title="Ubah Data Jadwal" ><i class="fa fa-pencil"></i></a>
                        <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Hapus Data Jadwal" ><i class="fa fa-trash-o"></i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              
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
        var tgl_seleksi_awal;
        var tgl_pelatihan_awal;

        $(document).ready(function(){

          var tabel = $('#tableJadwal').DataTable();

          $("#batal").click(function(){
            $("#collapseForm").collapse('hide');
            $('#tambah').focus();
          });



          /*JS for DATE*/
          $('input[name="seleksi_awal"]').datepicker({
            dateFormat: "mm/dd/yy ",
            altField : $('input[name="seleksi_awal"]'),
            altFormat : "dd M yy",
            onSelect : function(date, obj){
              tgl_seleksi_awal = date;
              

              $('input[name="seleksi_akhir"]').prop('disabled', false);
              $('input[name="pelatihan_awal"]').prop('disabled', false);
              

              $('input[name="seleksi_akhir"]').val("");
              $('input[name="pelatihan_awal"]').val("");
              $('input[name="pelatihan_akhir"]').val("");


              $('input[name="seleksi_akhir"]').datepicker("option",{ minDate: new Date(tgl_seleksi_awal)});

              $('input[name="pelatihan_awal"]').datepicker("option",{ minDate: new Date(tgl_seleksi_awal)})
            }

          });

          $('input[name="seleksi_akhir"]').datepicker({
            dateFormat: "mm/dd/yy ",
            altField : $('input[name="seleksi_akhir"]'),
            altFormat : "dd M yy",
          });


          $('input[name="pelatihan_awal"]').datepicker({
            dateFormat: "mm/dd/yy ",
            altField : $('input[name="pelatihan_awal"]'),
            altFormat : "dd M yy",
            onSelect : function(date, obj){
              tgl_pelatihan_awal = date;
              
              $('input[name="pelatihan_akhir"]').prop('disabled', false);

              $('input[name="pelatihan_akhir"]').val("");

              $('input[name="pelatihan_akhir"]').datepicker("option",{ minDate: new Date(tgl_pelatihan_awal)})
            }

          });

          $('input[name="pelatihan_akhir"]').datepicker({
            dateFormat: "mm/dd/yy ",
            altField : $('input[name="pelatihan_akhir"]'),
            altFormat : "dd M yy",
          });


        });
      </script>