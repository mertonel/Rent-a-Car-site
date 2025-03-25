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
            <a class="nav-link active" aria-current="page" href="musteriler.php">Müşteri Listesi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="musteriekle.php">Müşteri Ekle</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="musterisil.php">Müşteri Sil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div style="background-color: #ffcccc; color: #a94442; padding: 10px; border: 1px solid #a94442; border-radius: 5px; margin: 10px 0;">
  Uyarı: Silme işlemi yapıyorsunuz dikkat ediniz!
</div>

  <div class="container">
   
    <form>
      <div class="mb-3">
        <label for="tcno" class="form-label">TC No:</label>
        <input type="text" class="form-control" name="tcno" value="19129447894" readonly>
      </div>
      <div class="mb-3">
        <label for="adi" class="form-label">Ad:</label>
        <input type="text" class="form-control" name="adi" value="Mert" readonly>
      </div>
      <div class="mb-3">
        <label for="soyadi" class="form-label">Soyad:</label>
        <input type="text" class="form-control" name="soyadi" value="Önel" readonly>
      </div>
      <div class="mb-3">
        <label for="tlf" class="form-label">Telefon:</label>
        <input type="text" class="form-control" name="tlf" value="05414308740" readonly>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" name="email" value="merttonell@gmail.com" readonly>
      </div>
      <div class="mb-3">
        <label for="ehliyetbilgileri" class="form-label">Ehliyet Bilgileri:</label>
        <input type="text" class="form-control" name="ehliyetbilgileri" value="B" readonly>
      </div>
      <button type="button" class="btn btn-danger"> Müşteri Silme</button>
    </form>
</body>
</html>