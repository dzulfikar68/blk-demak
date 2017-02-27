<?php
  include "header.php";

  session_start();
  $_SESSION['page'] = "jadwal";
?>

    <div class="page">
      <div class="page-title">
        <div class="container">
          <h3>Jadwal dan Jenis Pelatihan</h3>
        </div>
      </div>
      <div class="content">
        <div class="container">
            <div class="schedule-item">
              <h4 class="schedule-title">Pelatihan Gelombang 1 Tahun 2017</h4>
              <table class="table table-striped green-table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th class="field">Jenis Kejuruan</th>
                    <th class="text-center">Kebutuhan Peserta</th>
                    <th>Tanggal Tes dan Wawancara</th>
                    <th>Tanggal Pengumuman</th>
                    <th>Tanggal Daftar Ulang</th>
                    <th>Tanggal Pelaksanaan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="field">Otomotif Mobil Spesialis AC</td>
                    <td class="text-center">20</td>
                    <td>15 Februari 2017</td>
                    <td>23 Februari 2017</td>
                    <td>25 Februari 2017</td>
                    <td>1 Maret 2017</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="field">Desain Grafis Lanjutan</td>
                    <td class="text-center">20</td>
                    <td>15 Februari 2017</td>
                    <td>23 Februari 2017</td>
                    <td>25 Februari 2017</td>
                    <td>1 Maret 2017</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="field">Tata Rias</td>
                    <td class="text-center">20</td>
                    <td>15 Februari 2017</td>
                    <td>23 Februari 2017</td>
                    <td>25 Februari 2017</td>
                    <td>1 Maret 2017</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="schedule-item">
              <h4 class="schedule-title">Pelatihan Gelombang 2 Tahun 2017</h4>
              <table class="table table-striped green-table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th class="field">Jenis Kejuruan</th>
                    <th class="text-center">Kebutuhan Peserta</th>
                    <th>Tanggal Tes dan Wawancara</th>
                    <th>Tanggal Pengumuman</th>
                    <th>Tanggal Daftar Ulang</th>
                    <th>Tanggal Pelaksanaan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="field">Bahasa Inggris</td>
                    <td class="text-center">20</td>
                    <td>15 Februari 2017</td>
                    <td>23 Februari 2017</td>
                    <td>25 Februari 2017</td>
                    <td>1 Maret 2017</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="field">Las Listrik</td>
                    <td class="text-center">20</td>
                    <td>15 Februari 2017</td>
                    <td>23 Februari 2017</td>
                    <td>25 Februari 2017</td>
                    <td>1 Maret 2017</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="field">Menjahit</td>
                    <td class="text-center">20</td>
                    <td>15 Februari 2017</td>
                    <td>23 Februari 2017</td>
                    <td>25 Februari 2017</td>
                    <td>1 Maret 2017</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td class="field">Web &amp; Internet</td>
                    <td class="text-center">20</td>
                    <td>15 Februari 2017</td>
                    <td>23 Februari 2017</td>
                    <td>25 Februari 2017</td>
                    <td>1 Maret 2017</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td class="field">Tata Boga</td>
                    <td class="text-center">20</td>
                    <td>15 Februari 2017</td>
                    <td>23 Februari 2017</td>
                    <td>25 Februari 2017</td>
                    <td>1 Maret 2017</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <!-- Pagination -->
            <nav aria-label="Page navigation">
              <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
        </div>
      </div>
    </div>

    <?php
      include "footer.php";
    ?>

  </body>
</html>
