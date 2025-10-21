<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>İletişim</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
<header>
<?php include("../header.php"); ?>
</header>

<div class="container">
  <div class="row row-cols-2">
    <div class="col mt-2">
        <img src="/a/resimler/0 537 778 87 07.jpg" style="width: 300;" height="300;" alt=""></div>
    <div class="col mt-2">
        <label for="isim">Ad Soyad</label>
        <input type="text" class="form-control" id="isim" aria-describedby="isim"placeholder="Ad Soyad">
    <small id="isim" class="form-text text-muted">Bu Alanı Doldurmak Zorunludur.</small>
    <br>
    <div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Açıklama</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Belge Yüklemek İçin Tıklayınız.</label>
  </div>
    
    
                </div>
    </div>
  </div>
</div>


<div class="container">
  <br>
<div class="form-group row">
                <div class="col">
                    <button type="submit" class="btn btn-success btn-block">Kaydet</button>
                </div>
                <div class="col">
                    <button type="reset" class="btn btn-primary btn-block">Temizle</button>

                </div>
            </div>
</div>




<div class="container  " >
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/a/resimler/0 537 778 87 07.jpg" class="d-block w-100  " style="height: 400px; object-fit: cover;" alt="...">
              

            </div>
            <div class="carousel-item">
              <img src="/a/resimler/1_org_zoom.webp" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/a/resimler/4b3d6968-381b-4fa8-8f49-790044121f5c.png" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </button>
        </div>
      </div>

      <footer class="bg-dark text-light py-3 mt-3">
<?php include("../footer.php"); ?>
      </footer>





<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>