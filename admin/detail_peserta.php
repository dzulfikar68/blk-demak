      

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
                <h4><i class="fa fa-angle-right"></i> Detail Peserta</h4>
                <hr>

                <table border="0" class="table">

                  <tr>
                    <td>Nama Lengkap</td>
                    <td> : </td>
                    <td>Mohammad Fajar Ainul Bashri</td>
                  </tr>

                  <tr>
                    <td>Nomor KTP</td>
                    <td> : </td>
                    <td>3374011407940002</td>
                  </tr>

                  <tr>
                    <td>Jenis Kelamin</td>
                    <td> : </td>
                    <td>Laki - Laki</td>
                  </tr>

                  <tr>
                    <td>Tempat dan Tanggal Lahir</td>
                    <td> : </td>
                    <td>Cirebon, 14 Juli 1994</td>
                  </tr>

                  <tr>
                    <td>Agama</td>
                    <td> : </td>
                    <td>Islam</td>
                  </tr>

                  <tr>
                    <td>Alamat</td>
                    <td> : </td>
                    <td>Jalan Tlogotimun II RT 02 RW 08 Kelurahan Kalicari Kecamatan Pedurungan Kota Demak</td>
                  </tr>

                  <tr>
                    <td>Nomor HP</td>
                    <td> : </td>
                    <td>088888888888</td>
                  </tr>

                  <tr>
                    <td>Email</td>
                    <td> : </td>
                    <td>iniemail@email.com</td>
                  </tr>

                  <tr>
                    <td>Pendidikan Terakhir</td>
                    <td> : </td>
                    <td>SMA</td>
                  </tr>

                  <tr>
                    <td>Tanggal Daftar</td>
                    <td> : </td>
                    <td>22 Februari 2017 12:12:12</td>
                  </tr>

                  <tr>
                    <td>Kejuruan</td>
                    <td> : </td>
                    <td>Memasak</td>
                  </tr>

                  <tr>
                    <td>Status</td>
                    <td> : </td>
                    <td id="status_peserta"><span  class="label label-warning">Menunggu</span> <button id="ubah_status" class="btn btn-primary btn-sm" style="margin-left:10px">Ubah</button></td>
                  </tr>

                  <tr>
                    <td>Sumber Info</td>
                    <td> : </td>
                    <td>Brosur</td>
                  </tr>

                </table>
                
                <div style="text-align:right" >

                   <a href="#" class="btn btn-danger">Hapus Peserta</a>

                </div>
               
                
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

            var table = $('#table_peserta').DataTable();

            $('#kejuruan, #tanggal_daftar').keyup( function() {
              table.draw();
            });
            
            $('[data-toggle="tooltip"]').tooltip(); 


            //JS untuk ubah status
            $('#ubah_status').click(function(){
            
              var html_before = $('#status_peserta').html();

              var select = '';
              select = select + '<div class="col-sm-3">';
              select = select + '<select name="status" class="form-control">';
              select = select + '<option value="Menunggu">Menunggu</option>';
              select = select + '<option value="Wawancara">Wawancara</option>';
              select = select + '<option value="Lulus">Lulus</option>';
              select = select + '</select>';
              select = select + '</div>';

              select = select + '<button id="simpan_status" class="btn btn-primary btn-sm" style="margin-left:10px">Simpan</button>';

              $('#status_peserta').html(select);

              $('#simpan_status').click(function(){

                 $('#status_peserta').html(html_before); 

              });
            });  
        });
      </script>