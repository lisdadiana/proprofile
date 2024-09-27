<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carousel Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .wrapper-img-banner {
      max-width: 100%;
      max-height: 600px;
      overflow: hidden;
    }

    .img-banner {
      width: 100%;
      object-fit: cover;
    }
  </style>
</head>
<body>
  <!-- Carousel Section -->
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="wrapper-img-banner">
          <img src="/img/air.jpg" class="img-banner" alt="Banner Image">
        </div>
      </div>
    </div>
  </div>

  <!-- About Section -->
  <div class="container mt-5">
    <div class="text-center">
      <h4 class="text-center">About</h4>
      <p>Anda Tidak Tahu Kami? Kami Akan Beri Tahu Anda</p>
    </div>
    <div class="row">
      <div class="col-md-6">
        <img src="/img/apelpdam.jpg" class="img-fluid" alt="About Image">
      </div>
      <div class="col-md-6">
        <p>PDAM Tarogong Kaler adalah Perusahaan Daerah Air Minum yang berkomitmen untuk menyediakan layanan air bersih yang berkualitas bagi masyarakat. Didirikan dengan tujuan untuk memenuhi kebutuhan air bersih di wilayah Tarogong Kaler, kami berupaya untuk memberikan layanan yang terbaik, berkelanjutan, dan terpercaya.</p>
        <p>Dengan pengalaman bertahun-tahun dalam pengelolaan sumber daya air, PDAM Tarogong Kaler telah berinvestasi dalam infrastruktur dan teknologi modern untuk memastikan bahwa setiap tetes air yang kami distribusikan memenuhi standar kesehatan dan keselamatan. Kami berkomitmen untuk menjaga kelestarian lingkungan dan mengedukasi masyarakat tentang pentingnya pengelolaan air yang bijaksana.</p>
      </div>
    </div>
  </div>

 <!-- Services Section -->
 <div class="container my-4">
    <div class="text-center">
      <h4 class="text-center">Services</h4>
    </div>

    <div class="row">

      @foreach ($services as $item)

      <div class="col-md-3">
        <div class="text-center">
        <i class="{{ $item->icon }} fa-3x text-success"></i>
          <h5><b>{{ $item->title }}</b></h5>
          <p>{{ $item->desc }}</p>
        </div>
      </div>

      @endforeach

    </div>
    <div class="text-center mt-3">
        <a href="/services" class="btn btn-success px-5">selengkapnya <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>

<div class="container my-5">
  <div class="text-center">
    <h4 class="text-center">Blog</h4>
    <p>Apa Saja Kabar Hari Ini? Kami Akan Beri Tahu Anda</p>
  </div>

      <div class="row">
        @foreach($blog as $item)
          <div class="col-md-3 my-3">
            <div class="card shadow-sm h-100 d-flex flex-column">
              <!-- Wrapper for image and content -->
              <img src="/{{ $item->cover }}" class="img-fluid" alt="" style="height: 200px; object-fit: cover;">

              <div class="card-body d-flex flex-column justify-content-between">
                <div>
                  <a href="/blog/show/{{ $item->id }}" class="text-decoration-none">
                    <h5>{{ $item->title }}</h5>
                  </a>
                  <p>{!! Illuminate\Support\Str::limit($item->body, 100) !!}</p>
                </div>
                <div class="mt-auto">
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
