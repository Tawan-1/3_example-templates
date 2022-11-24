@extends('layouts.promote')
@section('content')

<body>

  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel swiper position-relative">

    <div class="swiper-wrapper">

      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url({{ asset('template/promote/assets/img/slide-1.jpg') }})">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                   
                    <h1 class="intro-title mb-4 ">
                      <span class="color-b">ยินดีตอนรับ สู่</span> <br>
                      สวนนานาพันธุ์
                    </h1>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div><!-- End Intro Section -->

  <main id="main">

    <!-- ======= Latest News Section ======= -->
    <section class="section-news section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">สินค้าขายดี</h2>
              </div>
              <div class="title-link">
                <a href="/new">สินค้าขายดี ทั้งหมด
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="news-carousel" class="swiper">
          <div class="swiper-wrapper">

            <div class="carousel-item-c ">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="{{ asset('template/promote/assets/img/post-2.jpg') }}" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">House</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="blog-single.php">House is comming
                          <br> new</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">18 Sep. 2017</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="{{ asset('template/promote/assets/img/ลิ้นมังกร.jpg') }}" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">ขายดี</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="blog-single.php">ลิ้นมังกร
                          <br> new</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">18 Sep. 2017</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="{{ asset('template/promote/assets/img/กระบองเพชร.jpg') }}" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">ขายดี</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="blog-single.php">กระบองเพชร
                          <br>Snake Plant</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">18 Sep. 2017</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="{{ asset('template/promote/assets/img/ปากนกกระเรียน.jpg') }}" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">ขายดี</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="blog-single.php">ปากนกกระเรียน
                          <br>Geranium</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">18 Sep. 2017</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

          </div>
        </div>

      </div>
    </section><!-- End Latest News Section -->

    <!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">สิ้นค้า</h2>
              </div>
              <div class="title-link">
                <a href="property-grid.php">สินค้า ทั้งหมด
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="property-carousel" class="swiper">
          <div class="swiper-wrapper">

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="{{ asset('template/promote/assets/img/เบญจมาศ.jpg') }}" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="property-single.php">เบญจมาศ
                          <br />Chrysanthemum</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">ราคา | ฿ 120</span>
                      </div>
                      <a href="#" class="link-a">
                        {{-- <span class="bi bi-chevron-right"></span> --}}
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">ขายแล้ว</h4>
                          <span>5
                            
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">อยูุ่ในสต๊อค</h4>
                          <span>10</span>
                        </li>
                        
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="{{ asset('template/promote/assets/img/ลิ้นมังกร.jpg') }}" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="property-single.php">ลิ้นมังกร
                          <br />snake plant</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">ราคา | ฿ 120</span>
                      </div>
                      <a href="property-single.php" class="link-a">
                        {{-- <span class="bi bi-chevron-right"></span> --}}
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">ขายแล้ว</h4>
                          <span>5
                            
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">อยูุ่ในสต๊อค</h4>
                          <span>10</span>
                        </li>
                        
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="{{ asset('template/promote/assets/img/เศรษฐีเรือนใน.jpg') }}" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="property-single.php">เศรษฐีเรือนใน
                          <br />Spider Plant</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">ราคา | ฿ 120</span>
                      </div>
                      <a href="property-single.php" class="link-a">
                        {{-- <span class="bi bi-chevron-right"></span> --}}
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">ขายแล้ว</h4>
                          <span>5
                            
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">อยูุ่ในสต๊อค</h4>
                          <span>10</span>
                        </li>
                        
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="{{ asset('template/promote/assets/img/ปากนกกระเรียน.jpg') }}" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="property-single.php">ปากนกกระเรียน
                          <br />Geranium</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">ราคา | ฿ 120</span>
                      </div>
                      <a href="property-single.php" class="link-a">
                        {{-- <span class="bi bi-chevron-right"></span> --}}
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">ขายแล้ว</h4>
                          <span>5
                            
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">อยูุ่ในสต๊อค</h4>
                          <span>10</span>
                        </li>
                        
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->
            
          </div>
        </div>
        <div class="propery-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Latest Properties Section -->

    <!-- ======= Agents Section ======= -->
    <section class="section-agents section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">ผู้จัดทำ โปรเจค</h2>
              </div>
              <div class="title-link">
                {{-- <a href="agents-grid.php">All Agents
                  <span class="bi bi-chevron-right"></span>
                </a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card-box-d">
              <div class="card-img-d">
                <img src="{{ asset('template/promote/assets/img/กิ๊ก.jpg') }}" alt="" class="img-d img-fluid">
              </div>
              <div class="card-overlay card-overlay-hover">
                <div class="card-header-d">
                  <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                      <a href="agent-single.php" class="link-two">Margaret Sotillo
                        <br> Escala</a>
                    </h3>
                  </div>
                </div>
                <div class="card-body-d">
                  <p class="content-d color-text-a">
                    Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                  </p>
                  <div class="info-agents color-a">
                    <p>
                      <strong>Phone: </strong> +54 356 945234
                    </p>
                    <p>
                      <strong>Email: </strong> agents@example.com
                    </p>
                  </div>
                </div>
                <div class="card-footer-d">
                  <div class="socials-footer d-flex justify-content-center">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-linkedin" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-d">
              <div class="card-img-d">
                <img src="{{ asset('template/promote/assets/img/พีค.jpg') }}" alt="" class="img-d img-fluid">
              </div>
              <div class="card-overlay card-overlay-hover">
                <div class="card-header-d">
                  <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                      <a href="agent-single.php" class="link-two">Stiven Spilver
                        <br> Darw</a>
                    </h3>
                  </div>
                </div>
                <div class="card-body-d">
                  <p class="content-d color-text-a">
                    Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                  </p>
                  <div class="info-agents color-a">
                    <p>
                      <strong>Phone: </strong> +54 356 945234
                    </p>
                    <p>
                      <strong>Email: </strong> agents@example.com
                    </p>
                  </div>
                </div>
                <div class="card-footer-d">
                  <div class="socials-footer d-flex justify-content-center">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-linkedin" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-d">
              <div class="card-img-d">
                <img src="{{ asset('template/promote/assets/img/แบงค์.jpg') }}" alt="" class="img-d img-fluid">
              </div>
              <div class="card-overlay card-overlay-hover">
                <div class="card-header-d">
                  <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                      <a href="agent-single.php" class="link-two">Emma Toledo
                        <br> Cascada</a>
                    </h3>
                  </div>
                </div>
                <div class="card-body-d">
                  <p class="content-d color-text-a">
                    Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                  </p>
                  <div class="info-agents color-a">
                    <p>
                      <strong>Phone: </strong> +54 356 945234
                    </p>
                    <p>
                      <strong>Email: </strong> agents@example.com
                    </p>
                  </div>
                </div>
                <div class="card-footer-d">
                  <div class="socials-footer d-flex justify-content-center">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-linkedin" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Agents Section -->

    

    <!-- ======= Testimonials Section ======= -->
    <section class="section-testimonials section-t8 nav-arrow-a">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Testimonials</h2>
              </div>
            </div>
          </div>
        </div>

        <div id="testimonial-carousel" class="swiper">
          <div class="swiper-wrapper">

            <div class="carousel-item-a swiper-slide">
              <div class="testimonials-box">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-img">
                      <img src="{{ asset('template/promote/assets/img/ต้นไม้ตกแต่ง.jpg') }}" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-ico">
                      <i class="bi bi-chat-quote-fill"></i>
                    </div>
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                        วันนี้เราก็มีคำแนะนำดีๆ มาฝากเกี่ยวกับการเปิดร้านขายต้นไม้ ว่าด้วยเรื่องของรูปแบบ การดำเนินการเปิดร้านขายต้นไม้ให้เป็นรูปเป็นร่าง รวมทั้งแหล่งขายต้นไม้ที่สำคัญสำหรับผู้ที่ต้องการรับเขามาขายต่ออีกที รวมไปถึงแนวคิดดีๆ มานำเสนอ เพื่อให้การประกอบอาชีพประสบผลสำเร็จ

                        อันดับแรกเราอาจต้องลองสำรวจตัวเองก่อนว่าในการจะเปิดร้านขายต้นไม้นั้น จะต้องการต้นไม้มาไว้ในร้านด้วยวิธีไหน หลักๆ เลยก็มีอยู่ 2 วิธีด้วยกัน ได้แก่ เพาะเองกับรับต้นไม้จากที่อื่นมาขายต่ออีกที ซึ่งก็มีข้อดีข้อเสียแตกต่างกันออกไป
                      </p>
                    </div>
                    <div class="testimonial-author-box">
                      <img src="{{ asset('template/promote/assets/img/กิ๊ก.jpg') }}" alt="" class="testimonial-avatar">
                      <h5 class="testimonial-author">Albert & Erika</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-a swiper-slide">
              <div class="testimonials-box">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-img">
                      <img src="{{ asset('template/promote/assets/img/มา.jpg') }}" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-ico">
                      <i class="bi bi-chat-quote-fill"></i>
                    </div>
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                        ปัจจุบันการตกแต่งสถานที่ถือเป็นเรื่องสำคัญ และจำเป็นในหลายภาคส่วนไม่ว่าจะเป็นที่พักอาศัยต่าง หรือองค์กรสำนักงาน ล้วนต้องมีการตกแต่งสถานที่ด้วยกันทั้งนั้น และการจัดสวนก็เป็นหนึ่งองค์ประกอบสำคัญในการตกแต่งสถานที่ดังกล่าว โดยจะเน้นในส่วนของการตกแต่งภายนอกหรือกลางแจ้งบริเวณที่โล่งกว้าง หรือสวนหย่อมขนาดเล็กก็อาจมีบ้างแล้วแต่ขนาดพื้นที่ของสถานที่นั้นๆ ซึ่งองค์ประกอบหลักของการจัดสวนก็คือต้นไม้ ทำให้ต้นไม้คือสินค้าหลักที่เราจะมาพูดถึงในครั้งนี้ ภายใต้คำสำคัญที่ว่า “เปิดร้านขายต้นไม้” นั่นเอง
                      </p>
                    </div>
                    <div class="testimonial-author-box">
                      <img src="{{ asset('template/promote/assets/img/แบงค์.jpg') }}" alt="" class="testimonial-avatar">
                      <h5 class="testimonial-author">Pablo & Emma</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

          </div>
        </div>
        <div class="testimonial-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

</body>

@stop