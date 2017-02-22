      

      <?php

        include 'header.php';

      ?>

      <!--main content start-->
      <section id="main-content">
        <section class="wrapper site-min-height">
          <h3><i class="fa fa-angle-right"></i> Data Kejuruan</h3>
          <div class="row mt">
            <div class="col-lg-6">
              <div class="showback">
                <h4><i class="fa fa-angle-right"></i> Tabel Kejuruan</h4>
                <hr>
                
                <table class="table table-hover" id="table_kejuruan">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Kejuruan</th>
                      <th>Aksi</th>
      
                    </tr>

                  </thead>
                  <tbody> 
                    <tr>
                      <td>1</td>
                      <td>Menjahit Pakaian</td>
                      <td>
                        <a href="#" class="btn btn-info btn-xs" data-toggle="tooltip" title="Ubah Kejuruan" ><i class="fa fa-pencil"></i></a>
                        <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Hapus Kejuruan" ><i class="fa fa-trash-o"></i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- END SHOWBACK -->
            </div>

            <div class="col-lg-6">
              <div class="showback">
                <h4><i class="fa fa-angle-right"></i> Form Kejuruan</h4>
                <hr>
                
                <form class="form-horizontal style-form" method="POST" action="#" style="margin-top:20px">

                  <div class="form-group">
                    <label class="col-sm-4 control-label">Nama Kejuruan</label>
                    <div class="col-sm-8">
                      <input type="text" name="nama_kejuruan" class="form-control" placeholder="Nama Kejuruan" required >
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
              <!-- END SHOWBACK -->
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

            var table = $('#table_kejuruan').DataTable();

      
            $('[data-toggle="tooltip"]').tooltip();   
        });
      </script>