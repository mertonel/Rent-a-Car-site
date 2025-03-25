<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mert Rent A Car</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
            <a class="nav-link active" href="index.php">Ana Sayfa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="araclar.php">Araç Listesi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="aracekle.php">Araç Ekle</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="aracguncelle.php">Araç Güncelle</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <h2 class="mb-4">Araç Güncelle</h2>
    <form action="aracguncelle.php" method="post">
      <div class="mb-3">
        <label for="plaka" class="form-label">Plaka:</label>
        <input type="text" class="form-control"  name="plaka" required>
      </div>
      <div class="mb-3">
        <label for="km" class="form-label">Kilometre:</label>
        <input type="number" class="form-control"  name="km" required>
      </div>
      <div class="mb-3">
        <label for="model" class="form-label">Model:</label>
        <input type="text" class="form-control"  name="model" required>
      </div>
      <div class="mb-3">
        <label for="renk" class="form-label">Renk:</label>
        <input type="text" class="form-control"  name="renk" required>
      </div>
      <div class="mb-3">
        <label for="fiyat" class="form-label">Fiyat:</label>
        <input type="number" class="form-control"  name="fiyat" required>
      </div>
      <div class="mb-3">
        <label for="otomatik" class="form-label">Otomatik:</label>
        <select class="form-select"  name="otomatik" required>
          <option value="Evet">Evet</option>
          <option value="Hayır">Hayır</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="depozito" class="form-label">Depozito:</label>
        <input type="number" class="form-control"  name="depozito" required>
      </div>
      <div class="mb-3">
        <label for="yakitturu" class="form-label">Yakıt Türü:</label>
        <select class="form-select"  name="yakitturu" required>
          <option value="Benzin">Benzin</option>
          <option value="Dizel">Dizel</option>
          <option value="Elektrik">Elektrik</option>
          <option value="Hibrit">Hibrit</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="motorgucu" class="form-label">Motor Gücü (HP):</label>
        <input type="number" class="form-control"  name="motorgucu" required>
      </div>
      <div class="mb-3">
        <label for="yas" class="form-label">Araç Yaşı:</label>
        <input type="number" class="form-control"  name="yas" required>
      </div>
      <div class="mb-3">
        <label for="saseno" class="form-label">Şase No:</label>
        <input type="text" class="form-control"  name="saseno" required>
      </div>
      <button type="submit" class="btn btn-primary">Güncelle</button>
    </form>
  </div>

 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
