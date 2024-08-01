<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Basis Data Dashboard</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="./assets/js/init-alpine.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      defer
    ></script>
    <script src="./assets/js/charts-lines.js" defer></script>
    <script src="./assets/js/charts-pie.js" defer></script>
  </head>

        <main class="h-full pb-16 overflow-y-auto">
          <div class="container grid px-6 mx-auto">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Petugas
            </h2>
            <!-- CTA -->
            <a
              class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
              href=" "
            >
              <div class="flex items-center">
                <svg
                  class="w-5 h-5 mr-2"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                  ></path>
                </svg>
                <span>Monitoring Kesehatan Lansia Kecamatan Gunung Pati</span>
              </div>
              <span></span>
            </a>
                
</h4>
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
<head>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
   
  
    <!-- Required meta tags -->
    <meta chagula_darahet="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
     
      .custom-button {
          padding: 10px 20px;
          font-size: 16px;
          background-color: #4CAF50;
          color: #fff;
          border: none;
          border-radius: 5px;
          cugula_darahor: pointer;
      }
      .margin {
            margin-bottom: 50px;
        }
      .border {
            border: 2px solid #333;
            padding: 20px;
      }
      .center-horizontal {
        margin-left: auto;
        margin-right: auto;
      }
      .teks-besar {
            font-size: 24px;
      }

      .teks-sedang {
            font-size: 18px;
      }

      .teks-kecil {
            font-size: 14px;
      }
    </style>
    
  <body>

    </div>
    <?php
      require 'koneksi.php';

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $id_pasien = $_POST["id_pasien"];
          $nama = $_POST["nama"];
          $desa = $_POST["desa"];
          $RT = $_POST["RT"];
          $RW = $_POST["RW"];
          $sql1 = "SELECT * FROM riwayat_checkup WHERE id_pasien = '$id_pasien'";
          $hasil = $conn->query($sql1);
          if ($hasil->num_rows > 0) {
              while ($row = $hasil->fetch_assoc()) {
                echo '<table class="table table-striped table-bordered margin">';
                echo '  <thead class="thead-white">';
                echo '    <tr>';
                echo '      <th class="px-4 py-3">ID Pasien</th>';
                echo '      <th class="px-4 py-3">ID Pemeriksaan</th>';
                echo '      <th class="px-4 py-3">Tanggal Pemeriksaan</th>';
                echo '      <th class="px-4 py-3">Berat Badan</th>';
                echo '      <th class="px-4 py-3">Tekanan Darah</th>';
                echo '      <th class="px-4 py-3">Gula Darah</th>';
                echo '      <th class="px-4 py-3">Riwayat Penyakit</th>';
                echo '      <th class="px-4 py-3">Catatan</th>';
                echo '    </tr>';
                echo '  </thead>';
                echo '  <tbody>';
                echo '    <tr>';
                echo '      <td>'.$row['id_pasien'].'</td>';
                echo '      <td>'.$row['id_pemeriksaan'].'</td>';
                echo '      <td>'.$row['tgl_pemeriksaan'].'</td>';
                echo '      <td>'.$row['berat_badan'].'</td>';
                echo '      <td>'.$row['tekanan_darah'].'</td>';
                echo '      <td>'.$row['gula_darah'].'</td>';
                echo '      <td>'.$row['riwayat_penyakit'].'</td>';
                echo '      <td>'.$row['catatan'].'</td>';
                echo '    </tr>';
                echo '  </tbody>';
                echo '</table>';
              }
          } else {
              echo "Data tidak ditemukan";
          }
      }
    ?>
    
    <center><a href="indexcheck.php"><button class="btn custom-button mb-2">Kembali</button></a></center>
    
  
    
    <!-- Optional JavaScript -->
    <!-- jQuery figula_daraht, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>