<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- Path CSS lokal -->
    <link rel="stylesheet" href="{{ asset('../public/assets/css/styles.css') }}" />

    <title>SMKS St. Nahanson Parapat | SiAna</title>
  </head>
  <body>
    <header>
      <nav>
        <div class="nav__logo"><a href="#">SiAna</a></div>
<ul class="nav__links" id="nav-links">
  <li class="link"><a href="#home">Beranda</a></li>
  <li class="link"><a href="#about">Tentang</a></li>
  <li class="link"><a href="#stats">Kejuruan</a></li>
  <li class="link"><a href="#blog">Galeri</a></li>
  <li class="link"><a href="#subscribe">Testimoni</a></li>
  <li class="link"><a href="#login">Login</a></li>
  
</ul>

        <div class="nav__menu__btn" id="menu-btn">
          <span><i class="ri-menu-line"></i></span>
        </div>
      </nav>
      <div class="section__container header__container" id="home">
        <h1>Selamat Datang, di SMKS St. Nahanson Parapat</h1>
      </div>
    </header>

    <section class="about" id="about">
      <div class="section__container about__container">
        <div class="about__grid">
          <div class="about__content">
            <p class="section__subheader">Tentang</p>
            <h2 class="section__header">Sejarah Yayasan Nahanson</h2>
            
              SMKS ST. NAHANSON PARAPAT menjadi pilihan tepat bagi para siswa yang ingin melanjutkan pendidikan di bidang kejuruan dengan kualitas terbaik di Kabupaten Tapanuli Utara.
              Fasilitas lengkap, tenaga pengajar yang kompeten, dan akreditasi A menjadikan sekolah ini sebagai tempat yang ideal untuk mengembangkan potensi dan meraih prestasi.
              
            </p>
            <br />
            <p class="para">
              Sipoholon, Kecamatan Sipoholon, Kabupaten Tapanuli Utara, Sumatera Utara
            </p>
          </div>
          <div class="about__list">
            <div class="about__item">
              <span><i class="ri-global-fill"></i></span>
              <h4>Mewujudkan pendidikan bermartabat</h4>
            </div>
            <div class="about__item">
              <span><i class="ri-bar-chart-fill"></i></span>
              <h4>Menghasilkan siswa yang memili kompetensi</h4>
            </div>
            <div class="about__item">
              <span><i class="ri-thumb-up-fill"></i></span>
              <h4>Mewujudkan lulusan yang siap bekerja</h4>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="stats" id="stats">
      <div class="section__container stats__container">
        <div class="stats__grid">
          <div class="stats__card">
            <div class="stats__content">
              <p class="section__subheader">Program Jurusan</p>
              <h2 class="section__header">Teknik Kendaraan Ringan</h2>
             
              
              <p class="para">
                Jurusan ini menawarkan pembelajaran praktis dan teori di bidang
                otomotif, khususnya kendaraan ringan. Siswa dibekali keterampilan
                yang sesuai dengan kebutuhan industri, menjadikan mereka siap
                bersaing di dunia kerja setelah lulus.
                
              </p>
            </div>
            <div class="stats__image">
              <img src="{{ asset('images/galeri/stats-1.jpg') }}" alt="stats" />
          </div>
          
          </div>
          <div class="stats__card">
            <div class="stats__image">
              <img src="assets/stats-2.jpg" alt="stats" />
            </div>
            <div class="stats__content">
              <p class="section__subheader">Program Jurusan</p>
              <h2 class="section__header">Teknik Jaringan Komputer & Telekomunikasi</h2>
              <p class="para">
                Menguasai jaringan komputer dan telekomunikasi, Anda dapat
                mengembangkan sistem jaringan yang aman dan efisien untuk
                perusahaan dan organisasi. Dapatkan kemampuan teknis dan
                manajerial yang dibutuhkan untuk menjadi ahli jaringan yang
                handal.
                
              </p>
            </div>
          </div>
        </div>
        <div class="stats__image">
          <img src="assets/stats-1.jpg" alt="stats" />
          <img src="assets/stats-2.jpg" alt="stats" />  
      </div>
    </section>

    <section class="banner">
      <div class="section__container banner__container">
        <div class="banner__content">
          <p class="section__subheader">Tentang Kami</p>
          <h2 class="section__header">
           
          </h2>  Daftar Sekarang dan Dapatkan Penawaran Terbaik
          </h2>
          <p class="para">
            Kami memiliki jaringan dengan perusahaan-perusahaan ternama seperti
            Telkom, BMKG, BKN, Suzuki, Toyota dan masih banyak lagi. Oleh
            karena itu, siswa-siswa kami memiliki kesempatan yang sangat besar
            untuk melakukan prakerin dan magang di perusahaan-perusahaan
            tersebut. 
          </p>
        </div>
      </div>
    </section>

    <section class="blog" id="blog">
      <div class="section__container blog__container">
        <p class="section__subheader">Memori Nahanson</p>
        <h2 class="section__header">Momentum Kita</h2>
        <div class="blog__grid">
          <div class="blog__card">
            <img src="assets/blog-1.jpg" alt="blog" />
            <div>
              <span><i class="ri-user-line"></i> By Padus</span>
              <span><i class="ri-time-line"></i> Des 11, 2024</span>
              
            </div>
            <h4>Pesta Paduan Suara Gerejawi</h4>
            <p>
              Perayaan penuh kegembiraan dan syukur dalam 
              acara pesta paduan suara gerejawi. 
            </p>
          </div>
          <div class="blog__card">
            <img src="assets/blog-2.jpg" alt="blog" />
            <div>
              <span><i class="ri-user-line"></i> By TimSeni</span>
              <span><i class="ri-time-line"></i> Oct 11, 2024</span>
              
            </div>
            <h4>Musikalisasi Seni</h4>
            <p>
              Musikalisasi seni dalam kartya Sitor Situmorang yang berjudul "Tatahan Pesan Bunda"
            </p>
          </div>
          <div class="blog__card">
            <img src="assets/blog-3.jpg" alt="blog" />
            <div>
              <span><i class="ri-user-line"></i> By OSIS</span>
              <span><i class="ri-time-line"></i> OCT 29, 2024</span>
              
            </div>
            <h4>Perayaan Sumpah Pemuda</h4>
            <p>
             Menggunakan baju adat tradisional untuk merayakan perayaan Sumpah Pemuda.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="subscribe" id="subscribe">
      <div class="section__container subscribe__container">
        <p class="section__subheader">Info Lebih</p>
        <h2 class="section__header">
          Hubungi kita atau datang langsng ke sekolah
        </h2>
        <p class="para" style="font-size: 1.25rem;">
          Hubungi kami untuk informasi lebih lanjut atau kunjungi alamat kami di
          Jl. Balige Km.7 Sipoholon, Kecamatan Sipoholon, Kabupaten Tapanuli Utara. Kontak: (123) 456-7890
        </p>
      </div>
    </section>

    <section class="customer">
      <div class="section__container customer__container">
        <p class="section__subheader">Testimonials</p>
        <h2 class="section__header">What Our Customers Say</h2>
        <p class="para">
          Discover what our valued customers have to say about their experiences
          partnering with Induz. At Induz, we take pride in delivering
          exceptional industrial solutions and services, and nothing speaks
          louder than the words of those who have entrusted us with their
          projects.
        </p>
        <div class="customer__review">
          <!-- Slider main container -->
          <div class="swiper swiper-autoplay">
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">
                <div class="customer__review__card">
                  <span><i class="ri-double-quotes-r"></i></span>
                  <p>
                    Working with Induz has been a game-changer for our
                    manufacturing operations. Their precision-engineered
                    machinery and expert guidance have not only improved
                    efficiency but also reduced downtime significantly. It's
                    more than a partnership; it's a strategic advantage.
                  </p>
                  <div class="customer__review__details">
                    <img src="assets/customer-1.jpg" alt="customer" />
                    <div>
                      <h4>John Smith</h4>
                      <h5>Industrialist</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="customer__review__card">
                  <span><i class="ri-double-quotes-r"></i></span>
                  <p>
                    In the construction industry, deadlines and quality are
                    non-negotiable. Induz consistently delivered on both fronts.
                    Their dedication to project management and their skilled
                    workforce made our project a seamless success. We're
                    grateful for their expertise.
                  </p>
                  <div class="customer__review__details">
                    <img src="assets/customer-2.jpg" alt="customer" />
                    <div>
                      <h4>Laura Rodriguez</h4>
                      <h5>CEO & Founder</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="customer__review__card">
                  <span><i class="ri-double-quotes-r"></i></span>
                  <p>
                    The logistics solutions provided by Induz have streamlined
                    our supply chain like never before. Their innovative
                    approach and attention to detail saved us time and
                    resources, ultimately boosting our bottom line. They're more
                    than a vendor; they're a partner in our success.
                  </p>
                  <div class="customer__review__details">
                    <img src="assets/customer-3.jpg" alt="customer" />
                    <div>
                      <h4>Mark Thompson</h4>
                      <h5>Architect</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="section__container footer__container">
        <div class="footer__col">
          <h5><a href="#">Induz.</a></h5>
          <p>
            We strive to be at the forefront of technological advancements and
            industry best practices, consistently exceeding the expectations of
            our clients.
          </p>
          <div class="footer__socials">
            <a href="#"><i class="ri-facebook-fill"></i></a>
            <a href="#"><i class="ri-twitter-fill"></i></a>
            <a href="#"><i class="ri-instagram-line"></i></a>
            <a href="#"><i class="ri-linkedin-fill"></i></a>
          </div>
        </div>
        <div class="footer__col">
          <h4>Quick Links</h4>
          <div class="footer__links">
            <a href="#">Home</a>
            <a href="#">About Us</a>
            <a href="#">Services</a>
            <a href="#">Blog</a>
            <a href="#">Career</a>
          </div>
        </div>
        <div class="footer__col">
          <h4>Our Services</h4>
          <div class="footer__links">
            <a href="#">Chemical Research</a>
            <a href="#">Construction Material</a>
            <a href="#">Agricultural Engineering</a>
            <a href="#">Bridge Engineering</a>
            <a href="#">Automative & Systems</a>
          </div>
        </div>
        <div class="footer__col">
          <h4>Help</h4>
          <div class="footer__links">
            <a href="#">Privacy Policy</a>
            <a href="#">Support</a>
            <a href="#">Terms & Condition</a>
          </div>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2023 Web Design Mastery. All rights reserved.
      </div>
    </footer>

     <!-- Bootstrap JS -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

     <!-- Swiper JS -->
     <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
 
     <!-- Path JS lokal -->
     <script src="{{ asset('assets/js/script.js') }}"></script>
     <script>
      const swiper = new Swiper('.swiper-autoplay', {
        loop: true, // Membuat slider loop
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        autoplay: {
          delay: 3000, // Waktu antar slide (3 detik)
          disableOnInteraction: false, // Tetap berjalan meskipun ada interaksi
        },
      });
    </script>
   
</body>
</html>


