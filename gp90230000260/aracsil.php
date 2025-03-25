<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
            <a class="nav-link active" aria-current="page" href="index.php">Anasayfa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="araclar.php">Araç Listesi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="aracekle.php">Araç Ekle</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="aracsil.php">Araç Sil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div style="background-color: #ffcccc; color: #a94442; padding: 10px; border: 1px solid #a94442; border-radius: 5px; margin: 10px 0;">
  Uyarı: Silme işlemi yapıyorsunuz dikkat ediniz!
</div>

  <div class="container mt-5">
    <h2 class="mb-4">Araç Sil</h2>
    <form action="aracsil.php" method="post">
      <div class="mb-3">
        <label for="plaka" class="form-label">Plaka:</label>
        <input type="text" class="form-control" name="plaka" value="35KAS123" readonly>
      </div>
      <div class="mb-3">
        <label for="km" class="form-label">Kilometre:</label>
        <input type="text" class="form-control" name="km" value="244,000" readonly>
      </div>
      <div class="mb-3">
        <label for="model" class="form-label">Model:</label>
        <input type="text" class="form-control" name="model" value="FİAT" readonly>
      </div>
      <div class="mb-3">
        <label for="renk" class="form-label">Renk:</label>
        <input type="text" class="form-control" name="renk" value="Siyah" readonly>
      </div>
      <div class="mb-3">
        <label for="fiyat" class="form-label">Fiyat:</label>
        <input type="text" class="form-control" name="fiyat" value="1200 " readonly>
      </div>
      <div class="mb-3">
        <label for="otomatik" class="form-label">Otomatik:</label>
        <input type="text" class="form-control" name="otomatik" value="Evet" readonly>
      </div>
      <div class="mb-3">
        <label for="depozito" class="form-label">Depozito:</label>
        <input type="text" class="form-control" name="depozito" value="700" readonly>
      </div>
      <div class="mb-3">
        <label for="yakitturu" class="form-label">Yakıt Türü:</label>
        <input type="text" class="form-control" name="yakitturu" value="Benzin" readonly>
      </div>
      <div class="mb-3">
        <label for="motorgucu" class="form-label">Motor Gücü:</label>
        <input type="text" class="form-control" name="motorgucu" value="1.6" readonly>
      </div>
      <div class="mb-3">
        <label for="yas" class="form-label">Araç Yaşı:</label>
        <input type="text" class="form-control" name="yas" value="2" readonly>
      </div>
      <div class="mb-3">
        <label for="saseno" class="form-label">Şase No:</label>
        <input type="text" class="form-control" name="saseno" value="123456789567" readonly>
      </div>
      <button type="submit" class="btn btn-danger">Araç Sil</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
