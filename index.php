<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
  </head>

  <body>

    <section id="container" >
      <!--header start-->
      <header class="header black-bg">
        <div class="sidebar-toggle-box">
          <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>

        <!--logo start-->
        <a href="index.html" class="logo"><b> Admin Balai Latihan Kerja Demak</b></a>
        <!--logo end-->

        <div class="top-menu">
          <ul class="nav pull-right top-menu">
            <li><a class="logout" href="login.html">Logout</a></li>
          </ul>
        </div>
      </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
        <div id="sidebar"  class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
            <h5 class="centered">Admin</h5>

            <li class="mt">
              <a href="index.html">
                <i class="fa fa-home"></i>
                <span>Beranda</span>
              </a>
            </li>

            <li class="sub-menu">
              <a href="javascript:;" >
                <i class="fa fa-database"></i>
                <span>Data - Data</span>
              </a>
              <ul class="sub">
                <li><a  href="general.html">Data Profil</a></li>
                <li><a  href="buttons.html">Data Jurusan</a></li>
                <li><a  href="panels.html">Data Memilih Jurusan</a></li>
                <li><a  href="general.html">Data Peserta</a></li>
                <li><a  href="buttons.html">Data Karyawan</a></li>
                <li><a  href="panels.html">Data Sesi</a></li>
                <li><a  href="general.html">Data Program</a></li>
              </ul>
            </li>

            <li class="sub-menu">
              <a href="javascript:;" >
                <i class=" fa fa-bar-chart-o"></i>
                <span>Laporan - Laporan</span>
              </a>
              <ul class="sub">
                <li><a  href="calendar.html">Laporan Peserta</a></li>
                <li><a  href="gallery.html">Laporan Uang</a></li>
                <li><a  href="todo_list.html">Laporan Sesi</a></li>
                <li><a  href="todo_list.html">Laporan Daftar Pelatihan</a></li>
              </ul>
            </li>
            
          </ul>
        <!-- sidebar menu end-->
        </div>
      </aside>
    <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
        <section class="wrapper site-min-height">
          <h3><i class="fa fa-angle-right"></i> Blank Page</h3>
          <div class="row mt">
            <div class="col-lg-12">
              <p>Place your content here.</p>
            </div>
          </div>
        </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

    <!--main content end-->
    <!--footer start-->
      <footer class="site-footer">
        <div class="text-center">
          2014 - Alvarez.is
          <a href="blank.html#" class="go-top">
            <i class="fa fa-angle-up"></i>
          </a>
        </div>
      </footer>
    <!--footer end-->
    </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->

    <script>
        //custom select box

        $(function(){
          $('select.styled').customSelect();
        });

    </script>

  </body>
</html>
