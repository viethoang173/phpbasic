<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

  <!-- JS -->
  <script src="/javascript/main.js"></script>


  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />

  <!-- CSS only -->
  <link rel="stylesheet" href="style.css" />

  <title>Booking</title>
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

  <div id="booking">
    <section class="banner mt-5">
      <div class="container">
        <form action="">
          <div class="row no-gutters bg-white out-line mt-5">
            <div class="col-12 col-sm-6 col-lg-3 py-3 border-end">
              <form>
                <label for="date" class="col-form-label check">Check In</label>
                <div class="input-group date" id="datepicker">
                  <input type="text" class="form-control" />
                  <span class="input-group-append">
                    <span class="input-group-text bg-white d-block">
                      <i class="fa fa-calendar"></i>
                    </span>
                  </span>
                </div>
              </form>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 py-3 border-end">
              <form>
                <label for="date" class="col-form-label check">Check Out</label>
                <div class="input-group date" id="datepicker-out">
                  <input type="text" class="form-control" />
                  <span class="input-group-append">
                    <span class="input-group-text bg-white d-block">
                      <i class="fa fa-calendar"></i>
                    </span>
                  </span>
                </div>
              </form>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 py-3 border-end">
              <div class="row align-content-center">
                <div class="col-lg-12 d-flex flex-row align-items-center justify-content-center">
                  <p class="m-0 pdd">Adults</p>
                  <div class="input-counter">
                    <span class="minus-btn text-white fw-700 fs-2">-</span>
                    <input type="text" value="1" />
                    <span class="plus-btn text-white fw-700 fs-2">+</span>
                  </div>
                </div>
                <div class="col-lg-12 d-flex flex-row align-items-center justify-content-center mt-1">
                  <p class="m-0 pe-2 pdd-child">Chidren</p>
                  <div class="input-counter">
                    <span class="minus-btn text-white fw-700 fs-2">-</span>
                    <input type="text" value="1" />
                    <span class="plus-btn text-white fw-700 fs-2">+</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 py-3 final-col">
              <p class="text-center help">
                <a href="#">Need Help:</a>
                <br />
                <a href="#">0906060953</a>
              </p>
              <p class="text-center avail">
                <a href="#">Check Availability</a>
              </p>
            </div>
          </div>
        </form>
      </div>
    </section>

    <section class="room bg-white">
      <div class="container d-flex justify-content-between">
        <div class="dropdown">
          <button type="button" class="btn dropdown-bg border-0 fw-bold text-white dropdown-toggle"
            data-bs-toggle="dropdown">
            Kind of Room
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item fw-bold" href="#">All</a></li>
            <li><a class="dropdown-item fw-bold" href="#">Resort</a></li>
            <li><a class="dropdown-item fw-bold" href="#">Room</a></li>
          </ul>
        </div>
        <div class="dropdown">
          <button type="button" class="btn dropdown-bg border-0 fw-bold text-white dropdown-toggle"
            data-bs-toggle="dropdown">
            Sort
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item fw-bold" href="#">Increase</a></li>
            <li><a class="dropdown-item fw-bold" href="#">Decrease</a></li>
          </ul>
        </div>
      </div>
      <div class="container">
        <div class="card-body p-3 border shadow mt-4">
          <div class="media d-block d-md-flex">
            <div class="d-flex justify-content-center  mb-3 mb-md-0">
              <a href="https://hotel.bdtask.com/xainhotelv2/application/modules/room_setting/assets/images/2021-02-24/b1.jpg"
                class="room-img position-relative d-block" data-fancybox="" data-caption="Superior Room">
                <img src="/img/room-1.jpg" alt="" class="img-fluid img-fluid-custome">
              </a>
            </div>
            <div class="media-body w-100">
              <div class="d-md-flex mx-5 justify-content-between room-cash">
                <div class="item-overview">
                  <h3 class="item-title font-weight-bold mt-0">Superior Room</h3>
                  <p class="item-description fw-bold text-black-50 mb-3">Non-refundable, Breakfast included </p>
                  <div class="star-rating d-flex fs-13 mb-2">
                    <div class="star-rating_container text-warning">
                    </div>
                    <div class="review-numbers ml-2">
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star "></span>
                    </div>
                  </div>
                  <div class="room-size fs-16 fw-bold tex mr-2 "><span>1 Adults</span>
                    <span>1 Children</span></div>
                  <div class="room-content d-flex align-items-center mb-3">
                    <div class="room-size fs-16 fw-bold text-black-50 mr-2"><span>Presidential</span></div>
                  </div>
                  <a class="btn btn-primary more-details" data-bs-toggle="collapse" href="#details0" role="button"
                    aria-expanded="false" aria-controls="mdetails0">Details</a>
                  <a class="btn btn-primary more-details" type="button" data-bs-toggle="collapse"
                    data-bs-target="#conditions0" aria-expanded="false" aria-controls="conditions0">Reserve
                    Condition</a>
                </div>
                <div class="item-info position-relative ">
                  <div class="item-price">
                    <div class="d-flex justify-content-md-end">
                      <span class="price h2 font-weight-600 text-danger mb-0" data-annual=""
                        data-monthly="">$300.00</span>
                      <span class="h6 align-self-end fw-bold text-black mb-1">/Night</span>
                    </div>
                    <div class="price-refundable fw-bold text-black-50">
                      <span>Free cancellation</span>
                    </div>
                  </div>
                  <form action="select-booking.html" method="post" accept-charset="utf-8">
                    <input type="hidden" name="csrf_test_name" value="3905ba6d773f9a0511bf883312e4c3fd">
                    <input name="roomid" type="hidden" value="1">
                    <div> <input name="send" type="submit" value="Select" class="btn btn-primary fw-bold px-4 send">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="multi-collapse collapse" id="details0" style="">
            <div class="card card-body rounded-0 mt-3">
              <h3 class="fs-18 font-weight-bold mb-3">Included services</h3>
              <ul class="list-unstyled list-articles mb-3">
                <li><a href="#"><img src="/img/giftbox.png" style="width:16px; " alt=""> King Bed ff</a></li>
              </ul>
              <h3 class="fs-18 font-weight-bold mb-3">Equipment</h3>
              <ul class="list-unstyled list-style-2 list-articles mb-0">
              </ul>
            </div>
          </div>
          <div class="multi-collapse collapse" id="conditions0" style="">
            <div class="card card-body rounded-0 mt-3">
              <p>For cancellations made up to 4 days before the date of arrival, no additional fee will be charged.
                For cancellations within 3 days prior to arrival, 100% of the total booking will be charged.
                Full payment will be made directly at the accommodation. A credit card is required to make a
                reservation. In order to verify that the credit card is valid, a temporary hold of 0.11 € is placed on
                the card.</p>
            </div>
          </div>
        </div>
        <div class="card-body p-3 border shadow mt-4">
          <div class="media d-block d-md-flex">
            <div class="d-flex justify-content-center  mb-3 mb-md-0">
              <a href="https://hotel.bdtask.com/xainhotelv2/application/modules/room_setting/assets/images/2021-02-24/b1.jpg"
                class="room-img position-relative d-block" data-fancybox="" data-caption="Deluxe Room">
                <img src="/img/room-2.jpg" alt="" class="img-fluid img-fluid-custome">
              </a>
            </div>
            <div class="media-body w-100">
              <div class="d-md-flex mx-5 justify-content-between room-cash">
                <div class="item-overview">
                  <h3 class="item-title font-weight-bold mt-0">Deluxe Room</h3>
                  <p class="item-description fw-bold text-black-50 mb-3">Non-refundable, Breakfast included </p>
                  <div class="star-rating d-flex fs-13 mb-2">
                    <div class="star-rating_container text-warning">
                    </div>
                    <div class="review-numbers ml-2">
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                    </div>
                  </div>
                  <div class="room-size fs-16 fw-bold tex mr-2 "><span>2 Adults</span>
                    <span>1 Children</span></div>
                  <div class="room-content d-flex align-items-center mb-3">
                    <div class="room-size fs-16 fw-bold text-black-50 mr-2"><span>Presidential</span></div>
                  </div>
                  <a class="btn btn-primary more-details" data-bs-toggle="collapse" href="#details1" role="button"
                    aria-expanded="false" aria-controls="mdetails1">Details</a>
                  <a class="btn btn-primary more-details" type="button" data-bs-toggle="collapse"
                    data-bs-target="#conditions1" aria-expanded="false" aria-controls="conditions1">Reserve
                    Condition</a>
                </div>
                <div class="item-info position-relative">
                  <div class="item-price">
                    <div class="d-flex justify-content-md-end">
                      <span class="price h2 font-weight-600 text-danger mb-0" data-annual=""
                        data-monthly="">$500.00</span>
                      <span class="h6 align-self-end fw-bold text-black mb-1">/Night</span>
                    </div>
                    <div class="price-refundable fw-bold text-black-50">
                      <span>Free cancellation</span>
                    </div>
                  </div>
                  <form action="select-booking.html" method="post" accept-charset="utf-8">
                    <input type="hidden" name="csrf_test_name" value="3905ba6d773f9a0511bf883312e4c3fd">
                    <input name="roomid" type="hidden" value="1">
                    <div> <input name="send" type="submit" value="Select" class="btn btn-primary fw-bold px-4 send">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="multi-collapse collapse" id="details1" style="">
            <div class="card card-body rounded-0 mt-3">
              <h3 class="fs-18 font-weight-bold mb-3">Included services</h3>
              <ul class="list-unstyled list-articles mb-3">

                <li><a href="#"><img src="/img/giftbox.png" style="width:16px; " alt=""> King Bed ff</a></li>
              </ul>
              <h3 class="fs-18 font-weight-bold mb-3">Equipment</h3>
              <ul class="list-unstyled list-style-2 list-articles mb-0">
              </ul>
            </div>
          </div>
          <div class="multi-collapse collapse" id="conditions1" style="">
            <div class="card card-body rounded-0 mt-3">
              <p>For cancellations made up to 4 days before the date of arrival, no additional fee will be charged.
                For cancellations within 3 days prior to arrival, 100% of the total booking will be charged.
                Full payment will be made directly at the accommodation. A credit card is required to make a
                reservation. In order to verify that the credit card is valid, a temporary hold of 0.11 € is placed on
                the card.</p>
            </div>
          </div>
        </div>
        <div class="card-body p-3 border shadow mt-4">
          <div class="media d-block d-md-flex">
            <div class="d-flex justify-content-center  mb-3 mb-md-0">
              <a href="https://hotel.bdtask.com/xainhotelv2/application/modules/room_setting/assets/images/2021-02-24/b1.jpg"
                class="room-img position-relative d-block" data-fancybox="" data-caption="Suite">
                <img src="/img/room-3.jpg" alt="" class="img-fluid img-fluid-custome">
              </a>
            </div>
            <div class="media-body w-100">
              <div class="d-md-flex mx-5 justify-content-between room-cash">
                <div class="item-overview">
                  <h3 class="item-title font-weight-bold mt-0">Suite</h3>
                  <p class="item-description fw-bold text-black-50 mb-3">Non-refundable, Breakfast included </p>
                  <div class="star-rating d-flex fs-13 mb-2">
                    <div class="star-rating_container text-warning">
                    </div>
                    <div class="review-numbers ml-2">
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                    </div>
                  </div>
                  <div class="room-size fs-16 fw-bold tex mr-2 "><span>2 Adults</span>
                    <span>0 Children</span></div>
                  <div class="room-content d-flex align-items-center mb-3">
                    <div class="room-size fs-16 fw-bold text-black-50 mr-2"><span>Presidential</span></div>
                  </div>
                  <a class="btn btn-primary more-details" data-bs-toggle="collapse" href="#details2" role="button"
                    aria-expanded="false" aria-controls="mdetails2">Details</a>
                  <a class="btn btn-primary more-details" type="button" data-bs-toggle="collapse"
                    data-bs-target="#conditions2" aria-expanded="false" aria-controls="conditions2">Reserve
                    Condition</a>
                </div>
                <div class="item-info position-relative">
                  <div class="item-price">
                    <div class="d-flex justify-content-md-end">
                      <span class="price h2 font-weight-600 text-danger mb-0" data-annual=""
                        data-monthly="">$800.00</span>
                      <span class="h6 align-self-end fw-bold text-black mb-1">/Night</span>
                    </div>
                    <div class="price-refundable fw-bold text-black-50">
                      <span>Free cancellation</span>
                    </div>
                  </div>
                  <form action="/select-booking.html" method="post" accept-charset="utf-8">
                    <input type="hidden" name="csrf_test_name" value="3905ba6d773f9a0511bf883312e4c3fd">
                    <input name="roomid" type="hidden" value="1">
                    <div> <input name="send" type="submit" value="Select" class="btn btn-primary fw-bold px-4 send">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="multi-collapse collapse" id="details2" style="">
            <div class="card card-body rounded-0 mt-3">
              <h3 class="fs-18 font-weight-bold mb-3">Included services</h3>
              <ul class="list-unstyled list-articles mb-3">

                <li><a href="#"><img src="/img/giftbox.png" style="width:16px; " alt=""> King Bed ff</a></li>
              </ul>
              <h3 class="fs-18 font-weight-bold mb-3">Equipment</h3>
              <ul class="list-unstyled list-style-2 list-articles mb-0">
              </ul>
            </div>
          </div>
          <div class="multi-collapse collapse" id="conditions2" style="">
            <div class="card card-body rounded-0 mt-3">
              <p>For cancellations made up to 4 days before the date of arrival, no additional fee will be charged.
                For cancellations within 3 days prior to arrival, 100% of the total booking will be charged.
                Full payment will be made directly at the accommodation. A credit card is required to make a
                reservation. In order to verify that the credit card is valid, a temporary hold of 0.11 € is placed on
                the card.</p>
            </div>
          </div>
        </div>
        <div class="card-body p-3 border shadow mt-4">
          <div class="media d-block d-md-flex">
            <div class="d-flex justify-content-center  mb-3 mb-md-0">
              <a href="https://hotel.bdtask.com/xainhotelv2/application/modules/room_setting/assets/images/2021-02-24/b1.jpg"
                class="room-img position-relative d-block" data-fancybox="" data-caption="Resort">
                <img src="/img/room-2.jpg" alt="" class="img-fluid img-fluid-custome">
              </a>
            </div>
            <div class="media-body w-100">
              <div class="d-md-flex mx-5 justify-content-between room-cash">
                <div class="item-overview">
                  <h3 class="item-title font-weight-bold mt-0">Resort</h3>
                  <p class="item-description fw-bold text-black-50 mb-3">Non-refundable, Breakfast included </p>
                  <div class="star-rating d-flex fs-13 mb-2">
                    <div class="star-rating_container text-warning">
                    </div>
                    <div class="review-numbers ml-2">
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                    </div>
                  </div>
                  <div class="room-size fs-16 fw-bold tex mr-2 "><span>4 Adults</span>
                    <span>2 Children</span></div>
                  <div class="room-content d-flex align-items-center mb-3">
                    <div class="room-size fs-16 fw-bold text-black-50 mr-2"><span>Presidential</span></div>
                  </div>
                  <a class="btn btn-primary more-details" data-bs-toggle="collapse" href="#details3" role="button"
                    aria-expanded="false" aria-controls="mdetails3">Details</a>
                  <a class="btn btn-primary more-details" type="button" data-bs-toggle="collapse"
                    data-bs-target="#conditions3" aria-expanded="false" aria-controls="conditions3">Reserve
                    Condition</a>
                </div>
                <div class="item-info position-relative">
                  <div class="item-price">
                    <div class="d-flex justify-content-md-end">
                      <span class="price h2 font-weight-600 text-danger mb-0" data-annual=""
                        data-monthly="">$1000.00</span>
                      <span class="h6 align-self-end fw-bold text-black mb-1">/Night</span>
                    </div>
                    <div class="price-refundable fw-bold text-black-50">
                      <span>Free cancellation</span>
                    </div>
                  </div>
                  <form action="https://hotel.bdtask.com/xainhotelv2/roomdetails" method="post" accept-charset="utf-8">
                    <input type="hidden" name="csrf_test_name" value="3905ba6d773f9a0511bf883312e4c3fd">
                    <input name="roomid" type="hidden" value="1">
                    <div> <input name="send" type="submit" value="Select" class="btn btn-primary fw-bold px-4 send">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="multi-collapse collapse" id="details3" style="">
            <div class="card card-body rounded-0 mt-3">
              <h3 class="fs-18 font-weight-bold mb-3">Included services</h3>
              <ul class="list-unstyled list-articles mb-3">

                <li><a href="#"><img src="/img/giftbox.png" style="width:16px; " alt=""> King Bed ff</a></li>
              </ul>
              <h3 class="fs-18 font-weight-bold mb-3">Equipment</h3>
              <ul class="list-unstyled list-style-2 list-articles mb-0">
              </ul>
            </div>
          </div>
          <div class="multi-collapse collapse" id="conditions3" style="">
            <div class="card card-body rounded-0 mt-3">
              <p>For cancellations made up to 4 days before the date of arrival, no additional fee will be charged.
                For cancellations within 3 days prior to arrival, 100% of the total booking will be charged.
                Full payment will be made directly at the accommodation. A credit card is required to make a
                reservation. In order to verify that the credit card is valid, a temporary hold of 0.11 € is placed on
                the card.</p>
            </div>
          </div>
        </div>
        <div class="card-body p-3 border shadow mt-4">
          <div class="media d-block d-md-flex">
            <div class="d-flex justify-content-center  mb-3 mb-md-0">
              <a href="https://hotel.bdtask.com/xainhotelv2/application/modules/room_setting/assets/images/2021-02-24/b1.jpg"
                class="room-img position-relative d-block" data-fancybox="" data-caption="Luxury resort">
                <img src="/img/room-4.jpg" alt="" class="img-fluid img-fluid-custome">
              </a>
            </div>
            <div class="media-body w-100">
              <div class="d-md-flex mx-5 justify-content-between room-cash">
                <div class="item-overview">
                  <h3 class="item-title font-weight-bold mt-0">Luxury Resort</h3>
                  <p class="item-description fw-bold text-black-50 mb-3">Non-refundable, Breakfast included </p>
                  <div class="star-rating d-flex fs-13 mb-2">
                    <div class="star-rating_container text-warning">
                    </div>
                    <div class="review-numbers ml-2">
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                    </div>
                  </div>
                  <div class="room-size fs-16 fw-bold tex mr-2 "><span>4 Adults</span>
                    <span>2 Children</span></div>
                  <div class="room-content d-flex align-items-center mb-3">
                    <div class="room-size fs-16 fw-bold text-black-50 mr-2"><span>Presidential</span></div>
                  </div>
                  <a class="btn btn-primary more-details" data-bs-toggle="collapse" href="#details4" role="button"
                    aria-expanded="false" aria-controls="mdetails4">Details</a>
                  <a class="btn btn-primary more-details" type="button" data-bs-toggle="collapse"
                    data-bs-target="#conditions4" aria-expanded="false" aria-controls="conditions4">Reserve
                    Condition</a>
                </div>
                <div class="item-info position-relative">
                  <div class="item-price">
                    <div class="d-flex justify-content-md-end">
                      <span class="price h2 font-weight-600 text-danger mb-0" data-annual=""
                        data-monthly="">$2000.00</span>
                      <span class="h6 align-self-end fw-bold text-black mb-1">/Night</span>
                    </div>
                    <div class="price-refundable fw-bold text-black-50">
                      <span>Free cancellation</span>
                    </div>
                  </div>
                  <form action="https://hotel.bdtask.com/xainhotelv2/roomdetails" method="post" accept-charset="utf-8">
                    <input type="hidden" name="csrf_test_name" value="3905ba6d773f9a0511bf883312e4c3fd">
                    <input name="roomid" type="hidden" value="1">
                    <div> <input name="send" type="submit" value="Select" class="btn btn-primary fw-bold px-4 send">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="multi-collapse collapse" id="details4" style="">
            <div class="card card-body rounded-0 mt-3">
              <h3 class="fs-18 font-weight-bold mb-3">Included services</h3>
              <ul class="list-unstyled list-articles mb-3">

                <li><a href="#"><img src="/img/giftbox.png" style="width:16px; " alt=""> King Bed ff</a></li>
              </ul>
              <h3 class="fs-18 font-weight-bold mb-3">Equipment</h3>
              <ul class="list-unstyled list-style-2 list-articles mb-0">
              </ul>
            </div>
          </div>
          <div class="multi-collapse collapse" id="conditions4" style="">
            <div class="card card-body rounded-0 mt-3">
              <p>For cancellations made up to 4 days before the date of arrival, no additional fee will be charged.
                For cancellations within 3 days prior to arrival, 100% of the total booking will be charged.
                Full payment will be made directly at the accommodation. A credit card is required to make a
                reservation. In order to verify that the credit card is valid, a temporary hold of 0.11 € is placed on
                the card.</p>
            </div>
          </div>
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

  <script type="text/javascript">
    // ==== date piker ====
    $(function () {
      $("#datepicker").datepicker();
    });

    $(function () {
      $("#datepicker-out").datepicker();
    });

    // ==== Adult-Chidren ====
    $(".input-counter").each(function () {
      var spinner = jQuery(this),
        input = spinner.find('input[type="text"]'),
        btnUp = spinner.find(".plus-btn"),
        btnDown = spinner.find(".minus-btn"),
        min = input.attr("min"),
        max = input.attr("max");
      btnUp.on("click", function () {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });
      btnDown.on("click", function () {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });
    });
  </script>
</body>

</html>