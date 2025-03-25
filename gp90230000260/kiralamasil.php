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
            <a class="nav-link" href="kiralamasil.php">Kiralama Sil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div style="background-color: #ffcccc; color: #a94442; padding: 10px; border: 1px solid #a94442; border-radius: 5px; margin: 10px 0;">
  Uyarı: Silme işlemi yapıyorsunuz dikkat ediniz!
</div>
  <div class="container" style="margin-top: 20px;">
    <form >
      <div class="mb-3">
        <label for="tcno" class="form-label">TC Kimlik No:</label>
        <input type="text" class="form-control" name="tcno" value="19129447894" required>
      </div>
      <div class="mb-3">
        <label for="plaka" class="form-label">Plaka:</label>
        <input type="text" class="form-control" name="plaka" value="09ANA219" required>
      </div>
      <div class="mb-3">
        <label for="saseno" class="form-label">Şase No:</label>
        <input type="text" class="form-control" name="saseno" value="39238029" required>
      </div>
      <div class="mb-3">
      
        <label for="baslangic" class="form-label">Kiralama Başlangıç Tarihi:</label>
        <input type="date" class="form-control" name="baslangic" value="2024-12-11" required>
      </div>
      <div class="mb-3">
       
        <label for="bitis" class="form-label">Kiralama Bitiş Tarihi:</label>
        <input type="text" class="form-control" name="bitis" value="2024-12-18" required>
      </div>
      <div class="mb-3">
        <label for="ucret" class="form-label">Ücret:</label>
        <input type="number" class="form-control" name="ucret" value="9000" required>
      </div>
      <button type="submit" class="btn btn-danger">Kiralamayı Sil</button>
    </form>
  </div>


 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
