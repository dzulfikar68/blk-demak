<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="description" content="Pendaftaran dan Pengolahan Data Pelatihan Kerja Kabupaten Demak, BLK">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Aplikasi Pendaftaran dan Pengolahan Data Pelatihan Kerja</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet"> 

    <!-- Custom styles for this template -->
    <link href="../assets/css/blk-demak.css" rel="stylesheet">
    <!-- <link href="assets/css/style-responsive.css" rel="stylesheet"> -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
  </head>

  <body style="background-color: #f0f0f0;">

    <header>
      <div class="header-top">
        <p class="text-center" style="margin-bottom: 0px;">Aplikasi Pendaftaran dan Pengolahan Data Pelatihan Kerja</p>
      </div>
    </header>

    <div class="col-sm-4 col-sm-offset-4" style="margin-top: 140px;">
    <div class="panel panel-default">
		<div class="panel-heading" style="background-color: #e9e9e9;">
			<h4 class="panel-title">Kirim Email</h4>
		</div>
		<div class="panel-body">
			<p>Masukkan email Anda.<br>Link untuk mengganti password akan dikirim ke email Anda.</p>
			<form action="../proses/peserta/kirim_email.php" method="POST">
				<div class="form-group">
					<input class="form-control" type="email" name="blk_email" placeholder="Email" required autofocus>
				</div>
				<div class="form-group">
					<input class="btn btn-primary" type="submit" value="Kirim">
				</div>
			</form>
		</div>
	</div>

<!-- Pesan -->
<?php
  if ($_SESSION['success']) {
    include '../_pesan_sukses.php';
  }
  if ($_SESSION['error']) {
    include '../_pesan_error.php';
  }

  // Menghapus pesan sukses dan error
  unset($_SESSION['error']);
  unset($_SESSION['success']);
?>
  
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="../assets/js/jquery.js"></script>

  <script>
      $(function(){
        // Fungsi menghilangkan pesan/ notifikasi
        function close_pop_up(){
          var width = $('.pop-up').width();
          $('.pop-up').animate({
            'opacity': 0,
            'right': -width
          }, 300);
        }

        // Menampilkan pesan/ notifikasi
        if ($('.pop-up').length) {
          $('.pop-up').css('z-index', 1).animate({
            'opacity': 1,
            'right': "75px"
          }, 300).animate({ 'right': "65px" }, 400);

          // menghilangkan notifikasi
          setTimeout(close_pop_up, 4000);
        }

        // Menghilangkan pesan/ notifikasi
        $('.pop-up .close').click(close_pop_up);

        // Menghilangkan notifikasi ketika diklik pada selain notifikasi
        $(document).click(function(e) {
          var pop_up = $('.pop-up');
          if (!pop_up.is(e.target)) {
            close_pop_up();
          }
        });

      });
  </script>
  </body>
</html>