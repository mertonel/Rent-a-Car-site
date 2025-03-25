<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mert Rent A Car</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  
  <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="https://image.izmirdaily.com.tr/foto/310280-1-1920-mert-rent-a-car.jpg" alt="RentACar Logo" style="width: 70px; height: 40px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Ana Sayfa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="musteriler.php">Müşteri Listesi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="musteriekle.php">Müşteri Ekle</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <h2 class="mb-4">Müşteri Listesi</h2>
    <table id="musteriListesi" class="table display">
      <thead>
        <tr>
          <th scope="col">Tc No</th>
          <th scope="col">Ad</th>
          <th scope="col">Soyad</th>
          <th scope="col">Ehliyet Bilgileri</th>
          <th scope="col">Telefon</th>
          <th scope="col">E-mail</th>
          <th scope="col">Kiralama Başlangıç Tarihi</th>
          <th scope="col">Kiralama Bitiş Tarihi</th>
          <th scope="col">Ücret</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>19129447894</td>
          <td>Mert</td>
          <td>Önel</td>
          <td>B,A2</td>
          <td>05414308740</td>
          <td>merttonell@gmail.com</td>
          <td>15.04.2024</td>
          <td>15.06.2024</td>
          <td>20.000</td>
          <td><a href="musteriguncelle.php"><i class="fa-solid fa-pen-nib"></i></a></td>
          <td><a href="musterisil.php"><i class="fa-solid fa-trash"></i></a></td>
        </tr>
        <tr>
          <td>32032846592</td>
          <td>Sıla</td>
          <td>Durmaz</td>
          <td>B</td>
          <td>05386547490</td>
          <td>sıladurmaz@gmail.com</td>
          <td>12.09.2024</td>
          <td>23.09.2024</td>
          <td>8.000</td>
          <td><a href="musteriguncelle.php"><i class="fa-solid fa-pen-nib"></i></a></td>
          <td><a href="musterisil.php"><i class="fa-solid fa-trash"></i></a></td>
        </tr>
      </tbody>
    </table>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#musteriListesi').DataTable(); 
    });
  </script>
</body>
</html>
