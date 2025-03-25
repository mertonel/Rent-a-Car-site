<!DOCTYPE html>
<html lang="en">
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
<div class="container ">
  <form >
    <div class="mb-3">
      <label for="tcno" class="form-label">Tc No</label>
      <input type="number" class="form-control" name="tcno" required>
    </div>
    <div class="mb-3">
      <label for="ehliyetbilgileri" class="form-label">Ehliyet Bilgileri</label>
      <textarea class="textarea" name="ehliyetbilgileri"  required></textarea>
    </div>
    <div class="mb-3">
      <label for="tlf" class="form-label">Telefon</label>
      <input type="tel" class="form-control" name="tlf" required>
    </div>
    <div class="mb-3">
      <label for="adı" class="form-label">Ad</label>
      <input type="text" class="form-control" name="adı" required>
    </div>
    <div class="mb-3">
      <label for="soyadı" class="form-label">Soyad</label>
      <input type="text" class="form-control" name="soyadı" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">E-mail</label>
      <input type="email" class="form-control" name="email" required>
    </div>
    <button type="submit" class="btn btn-warning">Kaydet</button>
  </form>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
