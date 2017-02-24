<footer>
  <div class="container">
    <p>&copy; BLK Kabupaten Demak 2017</p>
  </div>
</footer>

<!-- Modal Auth -->
<div class="modal fade" id="modal-auth" tabindex="-1" role="dialog" aria-labelledby="ModalAuth">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li id="login-li" role="presentation"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Login</a></li>
          <li id="register-li" role="presentation"><a href="#register" aria-controls="register" role="tab" data-toggle="tab">Daftar</a></li>
        </ul>
      </div>
      <div class="modal-body">
        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade collapse clearfix" id="login">
            <div class="col-md-7">
              <!-- Form Login -->
              <form>
                <div class="form-group">
                  <input class="form-control" type="email" name="blk_email" placeholder="Email" required>
                </div>
                <div class="form-group">
                  <input class="form-control" type="password" name="blk_password" placeholder="Password" required>
                </div>
                <div class="form-group">
                  <input class="btn btn-success" type="submit" value="Login">
                </div>
              </form>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade collapse clearfix" id="register">
            <div class="col-md-7">
              <!-- Form Register -->
              <form>
                <div class="form-group">
                  <input class="form-control" type="text" name="name" placeholder="Nama" required>
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" name="id_number" placeholder="No. KTP" required>
                </div>
                <div class="form-group">
                  <input class="form-control" type="phone" name="phone" placeholder="No. Telepon" required>
                </div>
                <div class="form-group">
                  <input class="form-control" type="email" name="blk_email" placeholder="Email" required>
                </div>
                <div class="form-group">
                  <input class="form-control" type="password" name="blk_password" placeholder="Password" required>
                </div>
                <div class="form-group">
                  <input class="btn btn-primary" type="submit" value="Daftar">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- js placed at the end of the document so the pages load faster -->
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
<script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="../assets/js/jquery.scrollTo.min.js"></script>
<script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>

<!--common script for all pages-->
<script src="assets/js/common-scripts.js"></script>
<script>
    $(function(){
      // Activate Auth Tab When Login or Register Clicked
      $('.auth button').on('click', function(){
        var type = $(this).attr('data-tab');
        if( !$('#'+type+'-li, #'+type+'').hasClass('active') ) {
          // Deactivate another tab
          $('#modal-auth .nav-tabs .active, #modal-auth .tab-content .active').removeClass('in active');

          $('#'+type+'-li, #'+type+'').addClass('in active');
        }
      });
    });
</script>