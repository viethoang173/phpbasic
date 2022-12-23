<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- JavaScript Bundle with Popper Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro&display=swap" rel="stylesheet">
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

  <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Swiper JS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />

  <!-- JS -->
  <script src="/javascript/main.js"></script>

  <!-- CSS only -->
  <link rel="stylesheet" href="style.css" />

  <title>news</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-xl mb-4 fixed-top bg-white p-0" id="navbar">
      <div class="container wrap">
        <a class="navbar-brand p-0" href="index.html"><img src="/img/bird.png" alt="" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbarExample-expand-lg" aria-controls="offcanvasNavbarExample-expand-lg">
          <span class="navbar-toggler-icon" data-bs-target="#offcanvasNavbarExample-expand-lg"></span>
        </button>
        <div class="offcanvas offcanvas-start" data-bs-hideresize="true" tabindex="-1"
          id="offcanvasNavbarExample-expand-lg" aria-labelledby="offcanvasNavbarExample-expand-lg">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasLabel">
              <img src="/img/bird.png" alt="" />
            </h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <div class="d-flex order-2">
              <button class="btn mx-3 border-0" type="button" onclick="window.location.href='sign-in.html'">Sign
                in</button>
              <button class="btn sign text-white" onclick="window.location.href='sign-up.html'" type="button">
                Sign up
              </button>
            </div>
            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3 order-1">
              <li class="nav-item">
                <a class="home-page position-relative nav-link mx-3 my-1" onclick="myFunction()"
                  href="home-page.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="booking position-relative nav-link mx-3 my-1" href="booking.html">Booking</a>
              </li>
              <li class="nav-item">
                <a class="gallery position-relative nav-link mx-3 my-1" href="gallery.html">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="about position-relative nav-link mx-3 my-1" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="contact position-relative nav-link mx-3 my-1" href="contact.html">Contact</a>
              </li>
              <li class="nav-item">
                <a class="news position-relative nav-link mx-3 my-1" href="news.html">News</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <div id="newsPage" class="bg">
    <section class="banner pb-0">
      <div class="wind-paper">
        <div>
          <div>
            <div>
              <div>
                <div>
                  <div>
                    <div>
                      <div>
                        <div>
                          <div class="h2 m-0" style="font-family: 'Source Serif Pro', serif;
                          ">NEWS</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="listNews bg-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="text-center">
              <h4 class="my-3 fw-normal">Leave nothing but <strong class="fw-normal h4">footprints</strong></h4>
              <h4 class="mb-3 fw-normal">Take nothing but <strong class="fw-normal h4">photos</strong></h4>
              <h4 class="mb-3 pb-2 fw-normal">Kill nothing but <strong class="fw-normal h4">time</strong></h4>
            </div class="h-100">
            <img src="/img/light-night.jpg" alt="">
          </div>
          <div class="col-lg-6">
            <img src="/img/take-a-photo.jpg" class="h-100" alt="">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-xl-12">
            <div class="row">
              <div class="col-md-4">
                <div class="item d-flex flex-column h-100">
                  <h2 class="title fw-bold text-truncate">
                    <a href="./bat-dong-san-du-lich-quay-tro-lai-duong-dua.html">Bất động sản du lịch quay trở lại đường
                      đua</a>
                  </h2>
                  <a href="./bat-dong-san-du-lich-quay-tro-lai-duong-dua.html" class="imgWrap rounded-0">
                    <img src="/img/offer-1.jpg" class="animate rounded-0 w-100">
                  </a>
                  <div class="desc flex-grow-1">
                    Năm 2022 sẽ là thời điểm tận dụng tối đa những điều khó lường, cũng như bắt đầu bù đắp thật hoành
                    tráng cho những kỳ nghỉ đã lỡ mất, với số lượng du khách cảm thấy có nhu cầu này đã tăng thêm 52% kể
                    từ năm ngoái.
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="item d-flex flex-column h-100">
                  <h2 class="title fw-bold text-truncate">
                    <a href="./bat-dong-san-2021-Dau-an-ha-tang-quy-hoach.html">Bất động sản 2021: Dấu ấn hạ tầng quy
                      hoạch</a>
                  </h2>
                  <a href="./bat-dong-san-2021-Dau-an-ha-tang-quy-hoach.html" class="imgWrap">
                    <img src="/img/offer-1.jpg" class="animate rounded-0 w-100">
                  </a>
                  <div class="desc flex-grow-1">
                    Với định hướng đẩy mạnh đầu tư công của chính phủ, nhiều dự án cao tốc, cầu tại Hà Nội, Tp Hồ Chí
                    Minh được lên quy hoạch. Thị trường bất động sản tiếp tục phân hóa khi các khu công nghiệp là điểm
                    sáng, còn du lịch, nghỉ dưỡng vẫn ảm đạm.
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="item d-flex flex-column h-100">
                  <h2 class="title fw-bold text-truncate">
                    <a href="./vi-sao-gia-bat-dong-san-tang-nong-nhung-khong-co-bong-bong.html">Vì sao giá bất động sản
                      tăng nóng nhưng không có "bong bóng"?</a>
                  </h2>
                  <a href="./vi-sao-gia-bat-dong-san-tang-nong-nhung-khong-co-bong-bong.html" class="imgWrap">
                    <img src="/img/offer-1.jpg" class="animate rounded-0 w-100">
                  </a>
                  <div class="desc flex-grow-1">
                    Sự điều tiết kịp thời của chính quyền các địa phương cũng như các chính sách dành cho thị trường bất
                    động sản đã giúp thị trường không hình thành "bong bóng" diện rộng dù giá liên tục tăng nóng trong 2
                    năm vừa qua.
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="item d-flex flex-column h-100">
                  <h2 class="title fw-bold text-truncate">
                    <a href="./doanh-nghiep-bat-dong-san-doi-mat-voi-nhieu-kho-khan.html">Doanh nghiệp bất động sản đối
                      mặt với nhiều khó khăn</a>
                  </h2>
                  <a href="./doanh-nghiep-bat-dong-san-doi-mat-voi-nhieu-kho-khan.html" class="imgWrap">
                    <img src="/img/offer-1.jpg" class="animate rounded-0 w-100">
                  </a>
                  <div class="desc flex-grow-1">
                    Thị trường bất động sản đối mặt với không ít khó khăn về nguồn vốn đầu tư, quỹ đất hạn chế và tiếp
                    tục thiếu vắng nguồn cung phân khúc tầm trung và bình dân.
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="item d-flex flex-column h-100">
                  <h2 class="title fw-bold text-truncate">
                    <a href="meyhomes-capital-crystal-city-mang-vung-tri-thuc-dau-tien-den-dao-ngoc.html">Meyhomes
                      Capital Crystal City mang "Vùng tri thức" đầu tiên đến đảo Ngọc</a>
                  </h2>
                  <a href="meyhomes-capital-crystal-city-mang-vung-tri-thuc-dau-tien-den-dao-ngoc.html" class="imgWrap">
                    <img src="/img/offer-1.jpg" class="animate rounded-0 w-100">
                  </a>
                  <div class="desc flex-grow-1">
                    Tại thành phố đảo Phú Quốc, một “vùng tri thức” - miền đất hứa cho cộng đồng trí thức đa quốc gia
                    sắp sửa thành hình với tên gọi Meyhomes Capital Crystal City.
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="item d-flex flex-column h-100">
                  <h2 class="title fw-bold text-truncate">
                    <a href="Vinhomes-Ocean-Park-2-The-Empire-hut-gioi-tinh-hoa-ve-phia-Dong-Ha-Noi.html">Vinhomes Ocean
                      Park 2 – The Empire “hút” giới tinh hoa về phía Đông Hà Nội</a>
                  </h2>
                  <a href="Vinhomes-Ocean-Park-2-The-Empire-hut-gioi-tinh-hoa-ve-phia-Dong-Ha-Noi.html" class="imgWrap">
                    <img src="/img/offer-1.jpg" class="animate rounded-0 w-100">
                  </a>
                  <div class="desc flex-grow-1">
                    Với hàng loạt ưu thế vượt trội, Vinhomes Ocean Park 2 – The Empire đang dẫn đầu “bảng xếp hạng” dự
                    án hàng hiệu được săn tìm ở phía Đông Hà Nội.
                  </div>
                </div>
              </div>
              <div class="text-center mt-md-5 mt-3">
                <a href="#" class="btn sign fw-bold text-white">READ MORE</a>
              </div>
            </div>
          </div>
        </div>
    </section>
  </div>
  <!-- /.End of newslatter -->


  <div class="py-5 bg-grad">
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
          <div class="newslatter">
            <h3 class="text-center text-white">Get updates &amp; exclusive offers</h3>
            <p class="text-center text-white fw-bold my-3">Sign up to our newsletter to be the first to hear about<br
                class="d-lg-block">new openings, offers and more.</p>
            <div class="input-group">
              <input type="text" name="youremail" id="youremail" class="form-control border-0"
                placeholder="Enter email here..." aria-label="Recipient's username" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary rounded-0 border-0 rounded-end fw-bold" type="button" id="button-addon2"
                  onclick="subscribe-email()">Subscribe</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.End of newslatter -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-xl-3 mb-5">
          <div class="logo">
            <a href="#"><img src="/img/bird.png" alt=""></a>
          </div>
          <p class="fw-bold text-black-50">Lô CX01, Khu đô thị Văn Khê, Phường La Khê, Quận Hà Đông, Hà Nội, Việt Nam
          </p>
          <p class="fw-bold text-black-50">info@demo.com</p>
        </div>
        <div class="col-lg-7 col-xl-7 offset-xl-1">
          <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-4 mb-3 mb-lg-0">
              <h5 class="fw-bold">Pages</h5>
              <ul class="footer-link list-unstyled menu mb-0">
                <li class="mb-2"><a href="#" class="link d-block fw-bold text-black-50">Home</a></li>
                <li class="mb-2"><a href="#" class="link d-block fw-bold text-black-50">About Us</a></li>
                <li class="mb-2"><a href="#" class="link d-block fw-bold text-black-50">Contact Us</a></li>
                <li class="mb-2"><a href="#" class="link d-block fw-bold text-black-50">My Profile</a></li>
                <li class="mb-2"><a href="#" class="link d-block fw-bold text-black-50">Gallery</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 mb-3 mb-lg-0">
              <h5 class="fw-bold">Social Links</h5>
              <ul class="footer-link list-unstyled menu mb-0">
                <li class="mb-2"><a href="#" class="link d-block fw-bold text-black-50">
                    <i class="fa fa-instagram" style="font-size:24px"></i> Instagram</a>
                </li>
                <li class="mb-2"><a href="#" class="link d-block fw-bold text-black-50">
                    <i class="fa fa-facebook-square" style="font-size:24px"></i> Facebook</a>
                </li>
                <li class="mb-2"><a href="#" class="link d-block fw-bold text-black-50">
                    <i class="fa fa-twitter-square" style="font-size:24px"></i> Twitter</a></li>
                <li class="mb-2"><a href="#" class="link d-block fw-bold text-black-50">
                    <i class="fa fa-linkedin-square" style="font-size:24px"></i> LinkedIn</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 mb-3 mb-lg-0">
              <h5 class="fw-bold">Company Policy</h5>
              <ul class="footer-link list-unstyled menu mb-0">
                <li class="mb-2"><a href="#" class="link d-block fw-bold text-black-50">Privacy</a></li>
                <li class="mb-2"><a href="#" class="link d-block fw-bold text-black-50">Terms & Conditions</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </footer>
  <div class="text-center sub-footer bg-dark text-white">
    Copyright 2022
  </div>

</body>

</html>