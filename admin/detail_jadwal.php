      

      <?php

        session_start();

        include 'header.php';
        require_once ('../proses/koneksi_db.php');
        require_once ('../proses/convert_date.php');

        $id_jadwal = $_GET['id'];

        $query = mysqli_query($connect, "SELECT * FROM jadwal, kejuruan WHERE jadwal.id_kejuruan=kejuruan.id_kejuruan AND id_jadwal=$id_jadwal ");

        $num = mysqli_num_rows($query);

        if($num<=0){
          die("DATA TIDAK DITEMUKAN");
        }

        $data = mysqli_fetch_object($query);

        $nama_kejuruan = $data->nama_kejuruan;
        $id_kejuruan = $data->id_kejuruan;
        $kapasitas = $data->kapasitas;


        $tgl_pelaksanaan = concateDate($data->pelatihan_awal, $data->pelatihan_akhir);




      ?>

      <!--main content start-->
      <section id="main-content">
        <section class="wrapper site-min-height">
          <h3><i class="fa fa-angle-right"></i> Detail Jadwal</h3>
          <div class="row mt">
            <div class="col-lg-12">
              <div class="showback">
                <h4><i class="fa fa-angle-right"></i> Tabel Peserta Pelatihan <?php echo "<b>".$nama_kejuruan."</b> (".$tgl_pelaksanaan.") kapasitas = ".$kapasitas." peserta"?></h4>  
                <hr>
                
                <a href="../proses/admin/cetak_absen.php?id_jadwal=<?php echo $id_jadwal?>" target="_blank" style="margin-bottom:10px" class="btn btn-primary pull-right"  >Cetak Absen</a>
                <br>
                <div class="clearfix" >
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
                
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Nama Peserta</th>
                      <th>Nomor KTP</th>
                      <th>Email</th>
                      <th>Nomor HP</th>
                      <th>Tanggal Daftar</th>
                      <!-- <th>Kejuruan</th>
                      <th>Status</th> -->
                      <th>Aksi</th>
                    </tr>

                  </thead>

                  <tbody>

                    <?php

                      $query = mysqli_query($connect, "SELECT * FROM jadwal_assign, peserta WHERE jadwal_assign.id_peserta = peserta.id AND jadwal_assign.id_jadwal=$id_jadwal ORDER BY jadwal_assign.date_created DESC");

                      if(!$query){

                        die("QUERY FAILED : ".mysqli_error($connect));

                      }
                      $num = mysqli_num_rows($query);

                      if($num<=0){

                       

                      }else{

                        $no = 1;
                        while ($row=mysqli_fetch_object($query)) {

                          echo "<tr>";
                          echo "<td>".$row->nama."</td>";
                          echo "<td>".$row->no_ktp."</td>";
                          echo "<td>".$row->email."</td>";
                          echo "<td>".$row->telepon."</td>";
                          echo "<td>".convertDate($row->telepon, 'd M Y')."</td>";
                          echo "<td>";
                          echo "<a href=\"detail_peserta.php\" class=\"btn btn-primary btn-xs\" data-tooltip=\"true\" title=\"Lihat Detail Peserta\" ><i class=\"fa fa-eye\"></i></a> ";
                          echo "<a onclick=\"return confirm('Hapus peserta ini dari Jadwal?');\" href=\"../proses/admin/hapus_peserta_dari_jadwal.php?id_peserta=".$row->id."&id_jadwal=".$id_jadwal."&id_kejuruan=".$id_kejuruan."\" class=\"btn btn-danger btn-xs\" data-tooltip=\"true\" title=\"Hapus Peserta dari Pelatihan\"><i class=\"fa fa-times\"></i></a>";
                          echo "</td>";
                          echo "</tr>";

                          $no++;
                        }
                     
                        
                      }

                    ?>


                    <!-- <tr>
                      <td>Mohammad Fajar Ainul Bashri</td>
                      <td>3374011407940002</td>
                      <td>iniemail@email.com</td>
                      <td>088888888888</td>
                      <td>23 Februari 2017 12:12:12</td>
                      <td>Elektro</td>
                      <td><span  class="label label-info">Lulus</span></td>
                      <td>
                        <a href="detail_peserta.php" class="btn btn-primary btn-xs" data-tooltip="true" title="Lihat Detail Peserta" ><i class="fa fa-eye"></i></a>
                        <a href="" class="btn btn-danger btn-xs" data-tooltip="true" title="Hapus Peserta dari Pelatihan"><i class="fa fa-times"></i></a>
                      </td>
                    </tr> -->

                  </tbody>
                </table>
              
              </div>
            </div>
            <!-- END COL 12 -->

            <div class="col-lg-12">
              <div class="showback">
                <h4><i class="fa fa-angle-right"></i> Tabel Peserta yang Mendaftar Pelatihan<?php echo "<b> ".$nama_kejuruan."</b>"?></h4>  
                <hr>
                
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
                
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Nama Peserta</th>
                      <th>Nomor KTP</th>
                      <th>Email</th>
                      <th>Nomor HP</th>
                      <th>Tanggal Daftar</th>
                      <th>Aksi</th>
                    </tr>

                  </thead>

                  <tbody>

                    <?php

                      $query = mysqli_query($connect, "SELECT * FROM peserta, kejuruan_assign WHERE peserta.id = kejuruan_assign.id_peserta AND kejuruan_assign.status=4  AND kejuruan_assign.id_kejuruan=$id_kejuruan AND kejuruan_assign.selected=0 ORDER BY kejuruan_assign.date_created DESC");

                      if(!$query){

                        die("QUERY FAILED : ".mysqli_error($connect));

                      }
                      $num = mysqli_num_rows($query);

                      if($num<=0){

                       

                      }else{

                        $no = 1;
                        while ($row=mysqli_fetch_object($query)) {

                          echo "<tr>";
                          echo "<td>".$row->nama."</td>";
                          echo "<td>".$row->no_ktp."</td>";
                          echo "<td>".$row->email."</td>";
                          echo "<td>".$row->telepon."</td>";
                          echo "<td>".convertDate($row->telepon, 'd M Y')."</td>";
                          echo "<td>";
                          echo "<a href=\"detail_peserta.php\" class=\"btn btn-primary btn-xs\" data-tooltip=\"true\" title=\"Lihat Detail Peserta\" ><i class=\"fa fa-eye\"> </i> </a> ";
                          echo "<a onclick=\"return confirm('Tambahkan peserta ini ke Jadwal?');\" href=\"../proses/admin/tambah_peserta_ke_jadwal.php?id_peserta=".$row->id."&id_jadwal=".$id_jadwal."&id_kejuruan=".$id_kejuruan."&kapasitas=".$kapasitas."\" class=\"btn btn-success btn-xs\" data-tooltip=\"true\" title=\"Tambah Peserta ke Pelatihan\"><i class=\"fa fa-plus\"> </i></a>";
                          echo "</td>";
                          echo "</tr>";

                          $no++;
                        }
                     
                        
                      }

                    ?>
                 
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

          var tabel = $('table').DataTable({
              "language": {
                "emptyTable": "Tidak ada data peserta"
              }
          });

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