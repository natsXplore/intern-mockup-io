<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>ABIVA MOCKUP</title>

  <!--FONT ICONS-->
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.2/css/all.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <!--CSS-->

  <link href="./styles/style.css" rel="stylesheet">
  <!--BOOTSTRAP-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
  <!---------------------------------TOP BLACK NAVIGATION------------------------------------->
  <div class="top-nav">
    <div class="container p-2">
      <div class="row">
        <div class="col-lg-3 col-md-6" id="map">
          <p>
            <i class="fa-regular fa-map" id="map"></i>
            <span id="map">470 Lucy Forks, Patriciafurt, YC7B 3UT</span>
          </p>
        </div>
        <div class="col-lg-2 col-md-6" id="contact">
          <p>
            <i class="fa-solid fa-phone" id="phone"></i>
            <a href="#" id="topcontact">(364) 106-7572</a>
          </p>
        </div>
        <div class="col-lg-4 col-md-6"id="hours">
          <p>
            <i class="fa-regular fa-clock-three" id="clock"></i>
            <span id="time">Opening Hours:<span id="datee">Mon-Fri: 9am-6pm; <span id="day">Sun: 10am-1pm</span></span></span>
          </p>
        </div>
        <div class="col-lg-3 col-md-6 d-flex justify-content-evenly" id="login">
          <a href="#" id="login">Login</a>
          <a href="#"><i class="fa-brands fa-facebook-f" id="top-icon"></i></a>
          <a href="#"><i class="fa-brands fa-twitter" id="top-icon"></i></a>
          <a href="#"><i class="fa fa-youtube" id="top-icon"></i></a>
          <a href="#"><i class="fa-brands fa-linkedin-in" id="top-icon"></i></a>
          <a href="#"><i class="fa-brands fa-google" id="top-icon"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!------------------------MAIN NAVIGATION------------------------------->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <a class="navbar-brand" href="#">
            <img src="./images/Logo.png" alt="Agrios Farming Logo" style="width:200px;">
          </a>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item dropdown">
              <a id="home" class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Home
                <span><i class="fa-regular fa-angle-down"></i></span>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a id="about" class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item dropdown">
              <a id="services" class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
                <span><i class="fa-regular fa-angle-down"></i></span>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a id="projects" class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Projects
                <span><i class="fa-regular fa-angle-down"></i></span>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a id="news" class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                News
                <span><i class="fa-regular fa-angle-down"></i></span>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a id="shop" class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Shop
                <span><i class="fa-regular fa-angle-down"></i></span>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a id="contact" class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
      <button class="order-last p-2 navbar-toggler ms-0" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class=" p-2 ms-3" id="search">
        <!--<a href="#" id="search"><i class="fa-regular fa-magnifying-glass"></i></a>-->      
          <button type="button" class="btn position-relative" id="search">
          <i class="fa-regular fa-magnifying-glass"></i>
      </button>
      </div>
      <div class="p-2 mx-4 me-0 ms-auto px-0" id="cart">
       <!-- <a href="#" id="cart"><i class="fa-regular fa-cart-shopping"></i></a>-->    
        <button type="button" class="btn position-relative" id="cart">
        <i class="fa-regular fa-cart-shopping"></i>
        <span class="position-relative top-0 start-0 translate-middle badge rounded-pill" id="cart-zero">0</span>
      </button>
      </div>
    </div>
  </nav>
  <!------------------------------HOME PAGE SLIDER--------------------------------->
  <section class="home">
    <div id="carousel" class="carousel slide" data-bs-ride="true">
      <div class="carousel-inner">
        <div class="carousel-item active" style="background-image:url(./images/slider-1-1.webp);" data-bs-interval="3000">
          <div class="container my-lg-5 my-md-5 my-sm-5 pt-5" id="slide1-text">
          <h6 id="h6home">WELCOME TO AGRIOS FARMING</h6>
            <h1 id="h1home">Agriculture <span id="color">&</span><br>Eco Farming
              <span>
                <picture>
                  <img id="leaf1" src="./images/leaf-01.png" class="img-fluid" alt="leaf-01">
                </picture>
              </span>
            </h1>
            <p id="phome">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, <br>luctus nec
              ullamcorper mattis, pulvinar dapibus leo.</p>
            <button type="button" class="btn btn-success btn-sm" id="buttonhome">Discover More
            </button>
            <span>
              <picture>
                <img id="leaf2" src="./images/leaf-02.png" class="img-fluid" alt="leaf-02">
              </picture>
            </span>
          </div>
        </div>
        <div class="carousel-item" style="background-image:url(./images/slider-1-2.webp);" data-bs-interval="3000">
          <div class="container my-lg-5 my-md-5 my-sm-5 pt-5" id="slide2-text">
            <h6 id="h6home">WELCOME TO AGRIOS FARMING</h6>
            <h1 id="h1home">Agriculture <span id="color">&</span><br>Eco Farming
              <span>
                <picture>
                  <img id="leaf1" src="./images/leaf-01.png" class="img-fluid" alt="leaf-01">
                </picture>
              </span>
            </h1>
            <p id="phome">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, <br>luctus nec
              ullamcorper mattis, pulvinar dapibus leo.</p>
            <button type="button" class="btn btn-success btn-sm" id="buttonhome">Discover More
            </button>
            <span>
              <picture>
                <img id="leaf2" src="./images/leaf-02.png" class="img-fluid" alt="leaf-02">
              </picture>
            </span>
          </div>
        </div>
      </div>
      <div class="row">
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
          <span><i class="fa-thin fa-circle-arrow-left"></i></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next"><span><i
              class="fa-thin fa-circle-arrow-right"></i></span>
        </button>
      </div>
  </section>
  <!------------------------SECTION 2----------------------------->
  <section class="section_2">
    <div class="container-fluid mb-5 mt-5">
      <div class="row">
        <div class="col-xxl-6 col-lg-12" id="contentsec2">
          <div class="mt-5 mx-lg-5 pt-5 ps-lg-5 pe-lg-5 p-3 text-dark" id=sec2txt>
            <p class="h6">GET TO KNOW US</p>
            <p class="h1 mt-1" id="textsec2">A Traditional <br>American Farm…</p>
            <p class="h5 mt-4" id="text2sec2">When you picture yourself a traditional American farm in it classic,
              idyllic perception,
              this
              is what the Latify farm actually looks like!
            </p>
            <p class="mt-4 mb-3" id="text3sec2">Charming nature that surrounds all of our farming facilities haunts our farm
              guests and
              inspires and
              refreshes them.</p>
            <div class="container text-center px-0">
              <figure class="figure me-0">
                <img src="./images/img-box-1.png" class="img-fluid" alt="Fruits">
                <figcaption class="figure-caption" id="fruits">FRUITS</figcaption>
              </figure>
              <figure class="figure mx-4 me-0">
                <img src="./images/img-box-2.png" class="img-fluid" alt="Vegetables">
                <figcaption class="figure-caption" id="vegetables">VEGETABLES</figcaption>
              </figure>
            </div>
          </div>
        </div>
        <div class="col-xxl-6 col-lg my-lg-auto  " id="bgsec2">
          <span><img class="d-flex img-fluid mt-xxl-5" src="./images/bg.jpg" width="2000px" alt="bg_section2"></span>
        </div>
      </div>
  </section>
  <!--------------------------------SECTION 3-----------------------GALLERY----------------------------->
  <div class="container mt-3">
    <div class="gallery">
      <p class="d-flex justify-content-center">GET TO KNOW US</p>
      <h2 class="d-flex justify-content-center">Gallery</h2>
    </div>
    <div class="container text-center">
      <div class="row ">
        <div class="mb-3 col-lg-4 col-md-6">
          <div class="d-inline-flex"><img class="img-fluid" id="g1" src="./images/gallery-1.jpg" alt="gallery">
          </div>
        </div>

        <div class="mb-3 col-lg-4 col-md-6">
          <div class="d-inline-flex"><img class="img-fluid" id="g2" src="./images/gallery-2.jpg" alt="gallery">
          </div>
        </div>
        <div class="mb-3 col-lg-4 col-md-6">
          <div class="d-inline-flex"><img class="img-fluid" id="g3" src="./images/gallery-3.jpg" alt="gallery">
          </div>
        </div>
        <div class="mb-3 col-lg-4 col-md-6">
          <div class="d-inline-flex"><img class="img-fluid" id="g4" src="./images/gallery-4.jpg" alt="gallery">
          </div>
        </div>
        <div class="mb-3 col-lg-4 col-md-6">
          <div class="d-inline-flex"><img class="img-fluid" id="g5" src="./images/gallery-5.jpg" alt="gallery">
          </div>
        </div>
        <div class="mb-3 col-lg-4 col-md-6">
          <div class="d-inline-flex"><img class="img-fluid" id="g6" src="./images/gallery-6.jpg" alt="gallery">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-------------------------------------SECTION4--------------------------------------->
  <div id="section4" class="section mt-5" style="background-image:url(./images/section-bg-1.jpg);">
    <div class="container" id="main">
      <h6 id="h6textsec4" class="text-center mt-5 pt-5 pb-1">TASTY & HEALTHY</h6>
      <h1 id="h1sec4" class="text-center pt-1 pb-2">Weekly Farmbox</h1>
      <h6 id="psec4" class="text-center">Our menu changes weekly according to what’s fresh, local,
        and in-season. With our service, you get more <br>control of what goes in your box, and you can make up to 5
        substitutions in every delivery!</h6>
    </div>
    <div class="container pb-5">
      <div class="row">
        <div class="col mb-3">
          <form>
            <input type="text" class="form-control form-control-lg" placeholder="Enter your e-mail" id="section4button">
          </form>
        </div>
        <div class="col-md-auto text-center ">
          <div class="d-inline-flex"> <button type="button" id="buttonsection4" class="btn btn-primary"
              style="--bs-btn-padding-y: 0.9rem; --bs-btn-padding-x: 2rem; --bs-btn-font-size: .75rem;">
              SEND A REQUEST
            </button></div>
        </div>
      </div>

    </div>
  </div>
  <!---------------------------------------SECTION 5-------------------------------------->
  <div class="container mt-5">
    <div class="gallery">
      <p id="g1" class="d-flex justify-content-center">Services</p>
      <h2 id="g2" class="d-flex justify-content-center">OUR AWESOME SERVICES</h2>
    </div>
    <div class="row mt-5">
      <div class="col mt-3 col-lg-4">
        <div class="d-flex">
          <div class="flex-shrink-0">
            <img src="./images/garden18.png" alt="garden">
          </div>
          <div class="flex-grow-1 ms-3">
            <p class="h5 sec5">GARDEN CARE</p>
            <span id="textsec5">Sed ut perspiciatis unde omnis natus <br>error sit voluptatem</span>
          </div>
        </div>
      </div>
      <div class="col mt-3 col-lg-4">
        <div class="d-flex">
          <div class="flex-shrink-0">
            <img src="./images/garden16.png" alt="garden">
          </div>
          <div class="flex-grow-1 ms-3">
            <p class="h5 sec5">SPADE SHOVEL</p>
            <span id="textsec5">Sed ut perspiciatis unde omnis natus <br>error sit voluptatem</span>
          </div>
        </div>
      </div>
      <div class="col mt-3 col-lg-4">
        <div class="d-flex">
          <div class="flex-shrink-0">
            <img src="./images/garden15.png" alt="garden">
          </div>
          <div class="flex-grow-1 ms-3">
            <p class="h5 sec5">FLOWER CUTTING</p>
            <span id="textsec5">Sed ut perspiciatis unde omnis natus <br>error sit voluptatem</span>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col mt-3 col-lg-4">
        <div class="d-flex">
          <div class="flex-shrink-0">
            <img src="./images/garden17.png" alt="garden">
          </div>
          <div class="flex-grow-1 ms-3">
            <p class="h5 sec5">SPRING & FALL CLEANUP</p>
            <span id="textsec5">Sed ut perspiciatis unde omnis natus <br>error sit voluptatem</span>
          </div>
        </div>
      </div>
      <div class="col mt-3 col-lg-4">
        <div class="d-flex">
          <div class="flex-shrink-0">
            <img src="./images/garden20.png" alt="garden">
          </div>
          <div class="flex-grow-1 ms-3">
            <p class="h5 sec5">LAWN RENOVATION</p>
            <span id="textsec5">Sed ut perspiciatis unde omnis natus <br>error sit voluptatem</span>
          </div>
        </div>
      </div>
      <div class="col mt-3 col-lg-4">
        <div class="d-flex">
          <div class="flex-shrink-0">
            <img src="./images/garden19.png" alt="garden">
          </div>
          <div class="flex-grow-1 ms-3">
            <p class="h5 sec5">WATERING GARDEN</p>
            <span id="textsec5">Sed ut perspiciatis unde omnis natus <br>error sit voluptatem</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!------------------------------------SECTION 6---------------------------------->
  <section class="section6">

    <div class=" container-fluid mt-5" id="container-sec6">
      <div class="container">

        <div class="row">
          <div class="col-lg-3 col-md-6" id="col1">
            <figure class="figure mt-5">
              <img src="./images/Logo.png" class="figure-img img-fluid rounded" alt="logo">
              <figcaption class="figure-caption">There are many variations of passages <br>of lorem ipsum available, but
                the<br>majority suffered.</figcaption>
            </figure>
            <div class="d-flex justify-content-evenly mt-3 " id="footer-socmed">
              <a href="#" id="footer-socmed"><i class="fa-brands fa-twitter"></i></a>
              <a href="#" id="footer-socmed"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#" id="footer-socmed"><i class="fa-brands fa-pinterest-p"></i></a>
              <a href="#" id="footer-socmed"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 mt-5" id="col2">
            Explore
            <div class="lines"></div>
            <p class="mb-2"><a href="#" id="explore"><i class="fa-solid fa-leaf me-3"></i>About</a></p>
            <p class="mb-2"><a href="#" id="explore"><i class="fa-solid fa-leaf me-3"></i>Services</a></p>
            <p class="mb-2"><a href="#" id="explore"><i class="fa-solid fa-leaf me-3"></i>Our Projects</a></p>
            <p class="mb-2"><a href="#" id="explore"><i class="fa-solid fa-leaf me-3"></i>Meet the Farmers</a></p>
            <p class="mb-2"><a href="#" id="explore"><i class="fa-solid fa-leaf me-3"></i>Latest News</a></p>
            <p class="mb-2"><a href="#" id="explore"><i class="fa-solid fa-leaf me-3"></i>Contact</a></p>
          </div>
          <div class="col-lg-4 col-md-6 mt-5" id="col2">
            News
            <div class="lines">
            </div>
            <div class="row">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img id="imgnews" src="./images/News-01.png" width="80px" alt="news">
                </div>
                <div class="flex-grow-1 ms-3">
                  <p class="h5 sec5">Bringing Food Production <br>Back To Cities</p>
                  <span id="date">July 5, 2022</span>
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img id="imgnews" src="./images/News-02.png" width="80px" alt="news">
                </div>
                <div class="flex-grow-1 ms-3">
                  <p class="h5 sec5">The Future of Farming,<br>Smart Irrigation Solutions</p>
                  <span id="date">July 5, 2022</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-5" id="col2">
            Contact
            <div class="lines"></div>
            <div class="container col-lg-9 ms-0 g-0 ">
              <div class="row">
                <div class="col 6">
                  <p id="cont">
                    <i class="fa-duotone fa-phone"></i>
                    <span id="cont">666 888 0000</span>
                  </p>
                  <p id="cont">
                    <i class="fa-solid fa-envelope"></i>
                    <span id="cont">needhelp@company.com</span>
                  </p>
                  <p id="cont">
                    <i class="fa-solid fa-location-dot"></i>
                    <span id="cont">80 broklyn golden street line
                      <br>New York, USA</span>
                  </p>
                  <div class="input-group mb-5 pb-5">
                    <input type="text" class="form-control" placeholder="Your Email Address" width="50px">
                    <button class="btn btn-success" type="submit"><i class='bx bxl-telegram'></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!---------------------------FOOTER----------------------------------->
  <div class="footer">
    <div class="container pt-3">
      <div class="row justify-content-between text-center">
        <div class="col-lg-3 col-md-6">
          <p id="cright">
            <i class="fa-regular fa-copyright" id="c"></i>
            <span id="copyright">2022 Farmelio. All Rights Reserved.</span>
          </p>
        </div>
        <div class="d-flex justify-content-evenly col-lg-3 col-md-6" id="soc-med">
          <a href="#" id="socmed-footer"><i class="fa-brands fa-facebook-f" id="top-icon"></i></a>
          <a href="#" id="socmed-footer"><i class="fa-brands fa-twitter" id="top-icon"></i></a>
          <a href="#" id="socmed-footer"><i class="fa fa-youtube" id="top-icon"></i></a>
          <a href="#" id="socmed-footer"><i class="fa-brands fa-linkedin-in" id="top-icon"></i></a>
          <a href="#" id="socmed-footer"><i class="fa-brands fa-google" id="top-icon"></i></a>
        </div>
      </div>
    </div>
  </div>

  <!--JAVASCRIPT-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
    crossorigin="anonymous"></script>

</body>

</html>