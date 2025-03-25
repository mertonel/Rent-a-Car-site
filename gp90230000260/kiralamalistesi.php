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
            <a class="nav-link active" aria-current="page" href="kiralamalistesi.php">Kiralama Listesi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="kiralamaekle.php">Kiralama Ekle</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <h2 class="mb-4">Kiralama Listesi</h2>
    <table id="kiralamaListesi" class="table display">
      <thead>
        <tr>
          <th scope="col">TC No</th>
          <th scope="col">Plaka</th>
          <th scope="col">Şase No</th>
          <th scope="col">Kiralama Başlangıç</th>
          <th scope="col">Kiralama Bitiş</th>
          <th scope="col">Ücret</th>
          
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>12345678901</td>
          <td>09ANA219</td>
          <td>45684849764568</td>
          <td>2024-11-20</td>
          <td>2024-11-25</td>
          <td>800 TL</td>
          <td><a href="kiralamaguncelle.php"><i class="fa-solid fa-pen-nib"></i></a></td>
          <td><a href="kiralamasil.php"><i class="fa-solid fa-trash"></i></a></td>
        </tr>
        <tr>
          <td>23456789012</td>
          <td>34ABC123</td>
          <td>12345678901234567</td>
          <td>2024-11-18</td>
          <td>2024-11-22</td>
          <td>500 TL</td>
          <td><a href="kiralamaguncelle.php"><i class="fa-solid fa-pen-nib"></i></a></td>
          <td><a href="kiralamasil.php"><i class="fa-solid fa-trash"></i></a></td>
        </tr>
        
      </tbody>
    </table>
  </div>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

  
  <script>
    $(document).ready(function() {
      $('#kiralamaListesi').DataTable(); 
    });
  </script>
</body>
</html>
