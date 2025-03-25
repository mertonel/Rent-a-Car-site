<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mert Rent A Car</title>
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="https://image.izmirdaily.com.tr/foto/310280-1-1920-mert-rent-a-car.jpg" alt="RentACar Logo" style="width: 70px; height: 40px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Ana Sayfa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kiralamalistesi.php">Kiralama Listesi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kiralamaekle.php">Kiralama Ekle</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kiralamaguncelle.php">Kiralama Güncelle</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  
  <div class="container mt-4">
    <h1 class="mb-4">Kiralama Güncelle</h1>
    <form method="POST">
      <div class="mb-3">
        <label for="musteri" class="form-label">Müşteri:</label>
        <input type="text" class="form-control"  name="musteri" required>
      </div>
      <div class="mb-3">
        <label for="arac" class="form-label">Araç:</label>
        <input type="text" class="form-control"  name="arac" required>
      </div>
      <div class="mb-3">
        <label for="baslangic_tarihi" class="form-label">Başlangıç Tarihi:</label>
        <input type="date" class="form-control"  name="baslangic_tarihi" required>
      </div>
      <div class="mb-3">
        <label for="bitis_tarihi" class="form-label">Bitiş Tarihi:</label>
        <input type="date" class="form-control"  name="bitis_tarihi">
      </div>
      <div class="mb-3">
        <label for="ucret" class="form-label">Ücret:</label>
        <input type="number" class="form-control"  name="ucret" required>
      </div>
      <div class="mb-3">
        <label for="depozito" class="form-label">Depozito:</label>
        <input type="number" class="form-control"  name="depozito" required>
      </div>
      <button type="submit" class="btn btn-primary">Güncelle</button>
    </form>
  </div>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
