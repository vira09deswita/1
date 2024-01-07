<?php
session_start();
include_once 'Connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Halaman dashboard</title>
</head>
  <body>
    <div class="container ">
    <nav class="navbar navbar-light bg-success object-fit-cover border rounded mt-3">
        <div class="container-fluid">
          <a class="navbar-brand"><img src="image/logoox.jpg " width="50" class="rounded float-start" alt=""></a>
          <a class="navbar-brand"><img src="image/saintek.jpeg " width="50" class="rounded float-start" alt=""></a>
          <form action="" method="post" class="d-flex ms-auto">
            <input class="form-control me-2" type="text" name="key" aria-label="Search" autofocus autocomplete="off">
            <button class="btn btn-outline-light" type="submit" name="cari">Search</button>
          </form>
        </div>
    </nav>
    <div class="container">
    
        <figure class="text-center mt-4">
            <blockquote class="blockquote">
          <p>Sains Dan Teknologi</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          <cite title="Source Title">UIN Sulthan Thaha Saifuddin Jambi</cite>
        </figcaption>
      </figure>
      <h1>Selamat Datang diwebsite Data Mahasiswa Sains Dan Teknologi</h1>
      <h6>UIN Sulthan Thaha Saifuddin Jambi</h6>
      <p>Fakultas Sainstek unsur pimpinan fakultas perdana adalah Iskandar, S.Ag.,M.Pd.,M.S.I.Ph.D (Dekan), Dr. Tanti.,S.Si., M.Si.(Wadek Bid. Akademik, Kelembagaan, dan Kemahasiwaan).
      Sekarang Fakultas Saintek memiliki 7 Program Studi yaitu: (Sistem Informasi, Kimia, Fisika, Arsitektur, Statistika, Sains Informasi Geografis, dan Biologi.) pada tahun 2023.
      </p>
        <a href="login.php">
            <button type="button" class="btn btn-primary mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-megaphone-fill m-2" viewBox="0 0 16 16">
                    <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25.222 25.222 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009a68.14 68.14 0 0 1 .496.008 64 64 0 0 1 1.51.048zm1.39 1.081c.285.021.569.047.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a65.81 65.81 0 0 1 1.692.064c.327.017.65.037.966.06z"/>
                </svg>Masuk
            </button>
        </a><br>
        <img src="image/logoox.jpg" style="background-size:cover" >
    </div>
    
  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 Imay Humairoh </p>
  </footer>
    </body>
</html>