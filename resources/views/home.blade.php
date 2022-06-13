@extends("layouts.main")

@section('herosection')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/hero/banner.png)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Wisata <span>Puncak Badean</span></h2>
              <p class="animate__animated animate__fadeInUp">Wisata Alam yang berada di bawah kaki gunung argopuro</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/hero/video.png)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/hero/destination.png)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

      </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev" data-bs-target="#heroCarousel">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next" data-bs-target="#heroCarousel">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
  </section><!-- End Hero -->
@endsection

@section('contents')
  <!-- ======= Destination Section ======= -->
  <section id="destinasi" class="destinasi section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Destinasi</h2>
        <p>Wisata Puncak Badean mempunyai beberapa destinasi wisata favorit yang pastinya akan menambah daya tarik dari Wisata Puncak Badean</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <!-- <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-gratis">Gratis</li>
            <li data-filter=".filter-card">Berbayar</li>
            <li data-filter=".filter-web">Web</li> 
          </ul> -->
        </div>
      </div>

      <div class="row destinasi-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 destinasi-item filter-gratis">
          <div class="destinasi-wrap">
            <img src="assets/img/destinasi/destinasi-1.jpg" class="img-fluid" alt="">
            <div class="destinasi-info">
              <h4>Sungai Puncak Badean</h4>
              <p>Wisata Alam Pemandian Sungai Puncak Badean</p>
              <div class="destinasi-links">
                <a href="assets/img/destinasi/destinasi-1.jpg" data-gallery="destinasiGallery" class="destinasi-lightbox" title="Sungai Puncak Badean Jember"><i class="bx bx-plus"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 destinasi-item filter-web">
          <div class="destinasi-wrap">
            <img src="assets/img/destinasi/destinasi-2.jpg" class="img-fluid" alt="">
            <div class="destinasi-info">
              <h4>Taman Kelinci</h4>
              <p>Budidaya Kelinci Anggora</p>
              <div class="destinasi-links">
                <a href="assets/img/destinasi/destinasi-2.jpg" data-gallery="destinasiGallery" class="destinasi-lightbox" title="Taman Kelinci"><i class="bx bx-plus"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 destinasi-item filter-app">
          <div class="destinasi-wrap">
            <img src="assets/img/destinasi/destinasi-3.jpg" class="img-fluid" alt="">
            <div class="destinasi-info">
              <h4>Kebun Durian</h4>
              <p>Wisata Edukasi dan Petik Buah Durian</p>
              <div class="destinasi-links">
                <a href="assets/img/destinasi/destinasi-3.jpg" data-gallery="destinasiGallery" class="destinasi-lightbox" title="Kebun Durian"><i class="bx bx-plus"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Destination Section -->

  <!-- ======= Fasilitas Section ======= -->
  <section id="fasilitas" class="fasilitas">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Fasilitas</h2>
      <p>Wisata Puncak Badean mempunyai beberapa fasilitas gratis dan berbayar yang dapat digunakan oleh pengunjung</p>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="fasilitas-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">Gratis</li>
          <li data-filter=".filter-web">Berbayar</li>
        </ul>
      </div>
    </div>

    <div class="row fasilitas-container" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-4 col-md-6 fasilitas-item filter-web">
        <div class="fasilitas-wrap">
          <img src="assets/img/fasilitas/fasilitas-1.jpg" class="img-fluid" alt="">
          <div class="fasilitas-info">
            <h4>Penyewaan Tenda</h4>
            <p>Penyewaan Tenda DOOM</p>
            <div class="fasilitas-links">
              <a href="assets/img/fasilitas/fasilitas-1.jpg" data-gallery="fasilitasGallery" class="fasilitas-lightbox" title="Penyewaan Tenda"><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 fasilitas-item filter-app">
        <div class="fasilitas-wrap">
          <img src="assets/img/fasilitas/fasilitas-2.jpg" class="img-fluid" alt="">
          <div class="fasilitas-info">
            <h4>Musholla</h4>
            <p>2 Musholla terdapat di area wisata</p>
            <div class="fasilitas-links">
              <a href="assets/img/fasilitas/fasilitas-2.jpg" data-gallery="fasilitasGallery" class="fasilitas-lightbox" title="Musholla"><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 fasilitas-item filter-app">
        <div class="fasilitas-wrap">
          <img src="assets/img/fasilitas/fasilitas-3.jpg" class="img-fluid" alt="">
          <div class="fasilitas-info">
            <h4>Gazebo</h4>
            <p>total 8 gazebo yang terdapat di area wisata</p>
            <div class="fasilitas-links">
              <a href="assets/img/fasilitas/fasilitas-3.jpg" data-gallery="fasilitasGallery" class="fasilitas-lightbox" title="Gazebo"><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 fasilitas-item filter-web">
        <div class="fasilitas-wrap">
          <img src="assets/img/fasilitas/fasilitas-4.jpg" class="img-fluid" alt="">
          <div class="fasilitas-info">
            <h4>Kantin</h4>
            <p>2 kantin yang terdapat di area wisata</p>
            <div class="fasilitas-links">
              <a href="assets/img/fasilitas/fasilitas-4.jpg" data-gallery="fasilitasGallery" class="fasilitas-lightbox" title="Kantin"><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 fasilitas-item filter-web">
        <div class="fasilitas-wrap">
          <img src="assets/img/fasilitas/fasilitas-5.jpg" class="img-fluid" alt="">
          <div class="fasilitas-info">
            <h4>Penyewaan Ban</h4>
            <p>Total ada 10 ban yang tersedia di wisata</p>
            <div class="fasilitas-links">
              <a href="assets/img/fasilitas/fasilitas-5.jpg" data-gallery="fasilitasGallery" class="fasilitas-lightbox" title="Penyewaan Ban"><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Section -->

  <!-- ======= Kegiatan ======= -->
  <section id="kegiatan" class="kegiatan section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Kegiatan</h2>
      <p>Wisata Puncak Badean mempunyai beberapa event yang menarik</p>
    </div>

    <div class="row">

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="post-box">
          <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt=""></div>
          <div class="meta">
            <span class="post-date">25 April 2022</span>
            <span class="post-author"> / Rafly</span>
          </div>
          <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit</h3>
          <p>Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi cupiditate exercitationem qui magni est...</p>
          <a href="blog-details.html" class="readmore stretched-link"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="post-box">
          <div class="post-img"><img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt=""></div>
          <div class="meta">
            <span class="post-date">30 April 2022</span>
            <span class="post-author"> / Muhtadin</span>
          </div>
          <h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
          <p>Voluptatem nesciunt omnis libero autem tempora enim ut ipsam id. Odit quia ab eum assumenda. Quisquam omnis aliquid necessitatibus tempora consectetur doloribus...</p>
          <a href="blog-details.html" class="readmore stretched-link"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="post-box">
          <div class="post-img"><img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt=""></div>
          <div class="meta">
            <span class="post-date">30 Mei 2022</span>
            <span class="post-author"> / Fiesta Putra</span>
          </div>
          <h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
          <p>Quia nam eaque omnis explicabo similique eum quaerat similique laboriosam. Quis omnis repellat sed quae consectetur magnam veritatis dicta nihil...</p>
          <a href="blog-details.html" class="readmore stretched-link"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

    </div>

  </div>

</section><!-- End kegiatan -->

<!-- ======= Oleh-Oleh ======= -->
<section id="product" class="product">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>OLEH-OLEH</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
    </div>

    <div class="row">

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="100">
          <div class="member-img">
            <img src="assets/img/team/p1.jpeg" class="img-fluid" alt="">              
          </div>
          <div class="member-info">
            <h4>kurma ember</h4>
            <h4>Rp.50.000</h4>
            <p>kurma asli arab</p>              
            <a href="#" class="btn btn-outline-danger">Buy</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="200">
          <div class="member-img">
            <img src="assets/img/team/p2.png" class="img-fluid" alt="">              
          </div>
          <div class="member-info">
            <h4>beras sovia premium</h4>
            <h4>Rp.70.000</h4>
            <p>beras punel berkualitas enak dikit</p>              
            <a href="#" class="btn btn-outline-danger">Buy</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="300">
          <div class="member-img">
            <img src="assets/img/team/p3.jpeg" class="img-fluid" alt="">              
          </div>
          <div class="member-info">
            <h4>beras idul fitri</h4>
            <h4>Rp.50.000</h4>
            <p>beras enak berkulitas boleh diadu</p>              
            <a href="#" class="btn btn-outline-danger">Buy</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="400">
          <div class="member-img">
            <img src="assets/img/team/p4.jpg" class="img-fluid" alt="">              
          </div>
          <div class="member-info">
            <h4>ayam bakar</h4>
            <h4>Rp.60.000</h4>
            <p>ayame enak</p>              
            <a href="#" class="btn btn-outline-danger">Buy</a>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End product Section -->
<!-- ======= End Oleh-Oleh ======= -->
@endsection
