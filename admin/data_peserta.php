      

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
                <h4><i class="fa fa-angle-right"></i> Tabel Peserta</h4>
                <hr>

                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Nama Peserta</th>
                      <th>Nomor KTP</th>
                      <th>Email</th>
                      <th>Nomor HP</th>
                      <th>Tanggal Daftar</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>

                  </thead>

                  <tbody>

                    <tr>
                      <td>Mohammad Fajar Ainul Bashri</td>
                      <td>3374011407940002</td>
                      <td>iniemail@email.com</td>
                      <td>088888888888</td>
                      <td>23 Februari 2017 12:12:12</td>
                      <td><span  class="label label-success">Diterima</span></td>
                      <td>
                        <a href="" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Lihat Detail Peserta" ><i class="fa fa-eye"></i></a>
                        <a href="" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Hapus Peserta" ><i class="fa fa-trash-o"></i></a>
                      </td>
                    </tr>

                    <tr>
                      <td>Mohammad Fajar Ainul Bashri</td>
                      <td>3374011407940002</td>
                      <td>iniemail@email.com</td>
                      <td>088888888888</td>
                      <td>23 Februari 2017 12:12:12</td>
                      <td><span  class="label label-warning">Menunggu</span></td>
                      <td>
                        <a href="" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Lihat Detail Peserta" ><i class="fa fa-eye"></i></a>
                        <a href="" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Hapus Peserta"><i class="fa fa-trash-o"></i></a>
                      </td>
                    </tr>

                    <tr>
                      <td>Mohammad Fajar Ainul Bashri</td>
                      <td>3374011407940002</td>
                      <td>iniemail@email.com</td>
                      <td>088888888888</td>
                      <td>23 Februari 2017 12:12:12</td>
                      <td><span  class="label label-info">Lulus</span></td>
                      <td>
                        <a href="" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Lihat Detail Peserta" ><i class="fa fa-eye"></i></a>
                        <a href="" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Hapus Peserta"><i class="fa fa-trash-o"></i></a>
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
      
      <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
      </script>

      <?php

        include 'footer.php';

      ?>