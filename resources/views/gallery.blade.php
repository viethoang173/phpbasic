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

    <title>Hotel Gallery</title>
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
                  <button class="btn mx-3 border-0" type="button" onclick="window.location.href='sign-in.html'">Sign in</button>
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
    <div id="gallery">
        <section class="banner mt-4">
            <div class="container-fluid position-relative">
                <video autoplay muted loop class="position-absolute myVideo-2">
                    <source src="/img/Sea.mp4" type="video/mp4" />
                </video>
            </div>
        </section>
        <section class="picture bg-white">
            <h3 class="text-center text-capitalize"><strong>gallery</strong></h3>
            <div class="filters my-5 px-3 text-center">
                <label class="fw-bold text-black-50 mx-3">
                    <input class="buttonRadio" type="radio" name="filter" value="all"
                        checked="checked"> All</label>
                <label class="fw-bold text-black-50 text-dark mr-3">
                    <input type="radio" class="buttonRadio" name="filter" value="people">
                    People</label>
                <label class="fw-bold text-black-50 mx-3"><input class="buttonRadio" type="radio" name="filter" value="view"> View</label>
                <label class="fw-bold text-black-50 mx-3"><input class="buttonRadio" type="radio" name="filter" value="room">
                    Room</label>
                <label class="fw-bold text-black-50 mx-3"><input class="buttonRadio" type="radio" name="filter" value="Selfie">
                    Selfie</label>
            </div>
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="horizontal demo people"><img  src="https://picsum.photos/500/200" alt=""></div>
                    <div class="vertical demo people"><img  src="https://picsum.photos/200/350" alt=""></div>
                    <div class="horizontal demo view"><img  src="https://picsum.photos/500/200" alt=""></div>
                    <div class="demo view"><img src="https://picsum.photos/200/200" alt=""></div>
                    <div class="big demo view"><img   src="https://picsum.photos/600/600" alt=""></div>
                    <div class="vertical demo Selfie"><img  src="https://picsum.photos/250/400" alt=""></div>
                    <div class="demo Selfie"><img src="https://picsum.photos/200/220" alt=""></div>
                    <div class="horizontal demo people"><img  src="https://picsum.photos/400/150" alt=""></div>
                    <div class="horizontal demo people"><img  src="https://picsum.photos/450/200" alt=""></div>
                    <div class="demo room"><img src="https://picsum.photos/220/250" alt=""></div>
                    <div class="demo Selfie"><img src="https://picsum.photos/250/200" alt=""></div>
                    <div class="big demo room"><img   src="https://picsum.photos/600/600" alt=""></div>
                    <div class="vertical demo people"><img  src="https://picsum.photos/250/400" alt=""></div>
                    <div class="demo view"><img src="https://picsum.photos/200/220" alt=""></div>
                    <div class="demo Selfie"><img src="https://picsum.photos/200/220" alt=""></div>
                    <div class="horizontal demo view"><img  src="https://picsum.photos/400/150" alt=""></div>
                    <div class="horizontal demo room people"><img  src="https://picsum.photos/450/200" alt=""></div>
                    <div class="demo Selfie"><img src="https://picsum.photos/220/250" alt=""></div>
                    <div class="demo people"><img src="https://picsum.photos/250/200" alt=""></div>
                    <div class="big demo room"><img   src="https://picsum.photos/600/600" alt=""></div>
                    <div class="vertical demo people"><img  src="https://picsum.photos/250/400" alt=""></div>
                    <div class="demo view"><img src="https://picsum.photos/200/220" alt=""></div>
                    <div class="horizontal demo room"><img  src="https://picsum.photos/450/200" alt=""></div>
                    <div class="demo view"><img src="https://picsum.photos/220/250" alt=""></div>
                    <div class="horizontal demo view"><img  src="https://picsum.photos/400/150" alt=""></div>
                    <div class="demo room"><img src="https://picsum.photos/250/200" alt=""></div>
                </div>
            </div>
            
        </section>
    </div>

    <div class="py-5 bg-grad">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <div class="newslatter">
                        <h3 class="text-center text-white">Get updates &amp; exclusive offers</h3>
                        <p class="text-center text-white fw-bold my-3">Sign up to our newsletter to be the first to hear about<br
                                class="d-lg-block">new openings, offers and more.</p>
                        <div class="input-group">
                            <input type="text" name="youremail" id="youremail"
                                class="form-control border-0" placeholder="Enter email here..."
                                aria-label="Recipient's username" aria-describedby="button-addon2">
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
              <p class="fw-bold text-black-50">Lô CX01, Khu đô thị Văn Khê, Phường La Khê, Quận Hà Đông, Hà Nội, Việt Nam</p>
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

    <script type="text/javascript">
        $(document).ready(()=>{
            $(".buttonRadio").click(function(){
                if(this.value == "all"){
                    $(".demo").show()
                    return;
                } else {
                    $(".demo").hide()
                }
                if($(".demo").hasClass(this.value)){
                    $(`.${this.value}`).show();
                }
            })
        })
    </script>
</body>

</html>