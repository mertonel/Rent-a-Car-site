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
            <a class="nav-link active" aria-current="page" href="araclar.php">Araç Listesi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="aracekle.php">Araç Ekle</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <h2 class="mb-4">Araç Bilgileri</h2>
    <table id="aracListesi" class="table display">
      <thead>
        <tr>
          <th scope="col">Plaka</th>
          <th scope="col">KM</th>
          <th scope="col">Model</th>
          <th scope="col">Renk</th>
          <th scope="col">Fiyat</th>
          <th scope="col">Otomatik</th>
          <th scope="col">Depozito</th>
          <th scope="col">Yakıt Türü</th>
          <th scope="col">Motor Gücü</th>
          <th scope="col">Yaş</th>
          <th scope="col">Şase No</th>
          
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>09ANA219</td>
          <td>17.500</td>
          <td>2017 Model</td>
          <td>Lacivert</td>
          <td>800</td>
          <td>Hayır</td>
          <td>1,500</td>
          <td>Benzin</td>
          <td>0.2</td>
          <td>7</td>
          <td>45684849764568</td>
          <td><a href="aracguncelle.php"><i class="fa-solid fa-pen-nib"></i></a></td>
          <td><a href="aracsil.php"><i class="fa-solid fa-trash"></i></a></td>
        </tr>
        <tr>
          <td>34ABC123</td>
          <td>20,000</td>
          <td>2022 Model</td>
          <td>Siyah</td>
          <td>500 TL</td>
          <td>Evet</td>
          <td>1,000 TL</td>
          <td>Benzin</td>
          <td>1.6</td>
          <td>2</td>
          <td>12345678901234567</td>
          <td><a href="aracguncelle.php"><i class="fa-solid fa-pen-nib"></i></a></td>
          <td><a href="aracsil.php"><i class="fa-solid fa-trash"></i></a></td>
        </tr>
        
      </tbody>
    </table>
  </div>

 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

  
  <script>
    $(document).ready(function() {
      $('#aracListesi').DataTable(); 
    });
  </script>
</body>
</html>
