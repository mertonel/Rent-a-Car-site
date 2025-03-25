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
        </ul>
      </div>
    </div>
  </nav>

  
  <div class="container mt-5">

    
    <div class="container mb-5">
      <h3>Müşteri Bilgileri</h3>

      <div class="input-group">
  <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
  <button type="button" class="btn btn-outline-primary" data-mdb-ripple-init>Müşteri Ara</button>
</div>
      
      
      <form style="padding: 20px;">
        <div class="mb-3">
          <label for="tc" class="form-label">TC No:</label>
          <input type="text" class="form-control" name="tc"  required>
        </div>
        <div class="mb-3">
          <label for="ad" class="form-label">Ad:</label>
          <input type="text" class="form-control" name="ad"  required>
        </div>
        <div class="mb-3">
          <label for="soyad" class="form-label">Soyad:</label>
          <input type="text" class="form-control" name="soyad"  required>
        </div>
        <div class="mb-3">
          <label for="ehliyet" class="form-label">Ehliyet No:</label>
          <input type="text" class="form-control" name="ehliyet"  required>
        </div>
        <div class="mb-3">
          <label for="telefon" class="form-label">Telefon:</label>
          <input type="text" class="form-control" name="telefon"  required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email:</label>
          <input type="email" class="form-control" name="email"  required>
        </div>
        <button type="submit" class="btn btn-primary">Kaydet</button>
      </form>
    </div>
    <hr>

    
    <div class="container mb-5">
      <h3>Araç Bilgileri</h3>
      
     
      <form action="arac_arama_sonucu.php" method="POST">
       
      <div class="input-group">
  <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
  <button type="button" class="btn btn-outline-primary" data-mdb-ripple-init>Araç Ara</button>
</div>

      </form>
      <hr>

   
    <div class="container mb-5">
  <h3>Kiralama Bilgileri</h3>
  <form>
    <div class="mb-3">
      <label for="tcno" class="form-label">TC No:</label>
      <input type="text" class="form-control" name="tcno"  maxlength="11" pattern="\d{11}" required>
    </div>
    <div class="mb-3">
      <label for="plaka" class="form-label">Plaka:</label>
      <input type="text" class="form-control" name="plaka"  required>
    </div>
    <div class="mb-3">
      <label for="saseno" class="form-label">Şase No:</label>
      <input type="text" class="form-control" name="saseno"  required>
    </div>
    <div class="mb-3">
      <label for="baslangic" class="form-label">Kiralama Başlangıç:</label>
      <input type="date" class="form-control" name="baslangic" required>
    </div>
    <div class="mb-3">
      <label for="bitis" class="form-label">Kiralama Bitiş:</label>
      <input type="date" class="form-control" name="bitis">
    </div>
    <div class="mb-3">
      <label for="ucret" class="form-label">Ücret:</label>
      <input type="number" class="form-control" name="ucret"  required>
    </div>
    <div class="container">
      <button type="submit" class="btn btn-primary">Kirala</button>
    </div>
  </form>
</div>


 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
