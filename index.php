<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcom To Food Lover</title>
    
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="page/assets/animate.css" rel="stylesheet">
    <link href="page/style.css" rel="stylesheet">
    <link rel="stylesheet" href="page/style.css">
    <link rel="icon" href="favicon.ico" sizes="32x32">
  </head>
  <body>
  
    <!-- Navbar - top navigation -->
    <nav class="navbar navbar-expand-lg fixed-top bg-dark azm-navbar azm-navbar-transparency" data-bs-theme="dark">
      <div class="container">
      <p  class="beautiful-font navbar-brand">FOOD LOVER</p>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
            <li class="nav-item">
              <a  id="colhid" class="nav-link active scroll-link" aria-current="page" href="#header">Home</a>
            </li>
            <li class="nav-item">
              <a id="colhid" class="nav-link scroll-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- Header -->
    <div id="header">
      <div class="container">
        <div class="row azm-spacer">
          <div class="col py-4 py-md-5"></div>
        </div>
        <div class="row azm-spacer">
          <div class="col py-4"></div>
        </div>
        <div class="row">
          <div class="col py-lg-5 text-center wow animate__animated animate__fadeInUp">
            <p class="navbar-bg-change-point display-6 text-white text-opacity-75">Order without exception!</p>
            <h1 class="display-2 text-white">Welcome To <span class="foodcolor"> Food Lover </span> Restaurant</h1>
            <p class="lead text-white text-opacity-75">Here you can find the most delicious food in the world and deliver orders to anywhere in the world</p>
            <div class="header-call-to-action mt-4 mt-xl-5">
          	  <a class="btn btn-primary btn-lg mx-2 my-3 azm-btn-primary scroll-link" href="Signin.php">Sign IN <i class="bi bi-play-fill" aria-hidden="true"></i></a>
          	  <a class="btn btn-outline-light btn-lg mx-2 my-3 azm-btn-outline-light scroll-link" href="Signup.php">Sign UP <i class="bi bi-arrow-right-short" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
        <div class="row azm-spacer">
          <div class="col py-3 py-md-5"></div>
        </div>
      </div>
    </div>    
    <!-- Testimonials -->
    <div class="py-5 azm-grey-background text-white text-center" id="testimonials">
      <div class="container">
        <div class="row">
          <div class="col">
            <h2 class="display-2">Enjoy with us</h2>
            <p class="lead opacity-75">Take a look below to read some of the snacks we offer:</p>
          </div>
        </div>
        <div class="row">
          <div class="col mt-2 pb-2 wow animate__animated animate__fadeInUp">
            <!-- Tabbed component -->
            <div class="tab-content fst-italic" id="pills-tabContent">
              <div class="tab-pane fade show active lead" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab" tabindex="0">
                "From the moment you indulge in the <a href="#">LASAL Cheese dish served by Food Lover</a>, restaurant, a memorable journey unfolds, blending rich cheese flavors with fresh ingredients. Your taste buds dance with unparalleled delight with every bite, capturing the fantastic aromas that leave an unforgettable impression."
                <br>
                <a href="#">HM Stakyus, Stakyus.com</a>
              </div>
              <div class="tab-pane fade lead" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab" tabindex="0">
                "Indulge in the exquisite flavors of Jumbo Crab Shrimp, a culinary delight that tantalizes the senses with its succulent crab meat and juicy shrimp. Each bite is a symphony of flavors, a perfect marriage of seafood excellence that will leave you craving for more."
                <br>
                <a href="#">HM Stakyus, Stakyus.com</a>
              </div>
              <div class="tab-pane fade lead" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab" tabindex="0">
                "Savor the refreshing burst of flavors with Koktail Juice, a delightful blend of fruits that invigorate your taste buds with every sip. This vibrant concoction is a symphony of sweetness and tanginess, a perfect companion for any occasion, uplifting your spirits and quenching your thirst in a single, satisfying gulp."
                <br>
                <a href="#">HM Stakyus, Stakyus.com</a>
              </div>
              <div class="tab-pane fade lead" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab" tabindex="0">
                "Experience the cheesy perfection of our Cheese Pizza, a culinary masterpiece that combines a crispy crust with gooey melted cheese. Each slice is a taste of comfort and satisfaction, a classic favorite that never fails to please."
                <br>
                <a href="#">HM Stakyus, Stakyus.com</a>
              </div>
            </div>
            <ul class="nav nav-pills mt-4 justify-content-center" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <a href="#" class="active d-inline-block p-2" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1" role="tab" aria-controls="pills-1" aria-selected="true">
                  <img class="img-fluid rounded-circle shadow" src="img/food1.png" alt="testimonial-1">
                </a>
              </li>
              <li class="nav-item" role="presentation">
                <a href="#" class="d-inline-block p-2" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2" role="tab" aria-controls="pills-2" aria-selected="false">
                  <img class="img-fluid rounded-circle shadow" src="img/food2.png" alt="testimonial-2">
                </a>
              </li>
              <li class="nav-item" role="presentation">
                <a href="#" class="d-inline-block p-2" id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3" role="tab" aria-controls="pills-3" aria-selected="false">
                  <img class="img-fluid rounded-circle shadow" src="img/food3.png" alt="testimonial-3">
                </a>
              </li>
              <li class="nav-item" role="presentation">
                <a href="#" class="d-inline-block p-2" id="pills-4-tab" data-bs-toggle="pill" data-bs-target="#pills-4" role="tab" aria-controls="pills-4" aria-selected="false">
                  <img class="img-fluid rounded-circle shadow" src="img/food6.png" alt="testimonial-4">
                </a>
              </li>
            </ul>
            <!-- End of Tabbed component -->
          </div>
        </div>
      </div>
    </div>
      
    <!-- Contact -->
    <div class="py-5 azm-background-444 text-white" id="contact">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h2 class="display-2">Contact Us</h2>
            <p class="lead">For every question, information or just to say "Hi", here is how you can get in touch with us. Send us an email or come visit us!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mt-4 mt-md-5 contact-visit wow animate__animated animate__fadeInDown">
            <h3 class="display-6">Visit Us</h3>
            <p class="mt-3 azm-font-size-1-15 azm-color-ccc"><i class="bi bi-geo-alt-fill fs-4 azm-color-888 me-1" aria-hidden="true"></i> Old Sana'a Road 1, Yemen, Sana'a</p>
            <p class="azm-font-size-1-15 azm-color-ccc"><i class="bi bi-telephone-fill fs-4 azm-color-888 me-1" aria-hidden="true"></i> Phone: +967 780 721 071</p>
            <p class="azm-font-size-1-15 azm-color-ccc"><i class="bi bi-envelope-fill fs-4 azm-color-888 me-1" aria-hidden="true"></i> Email: stakywsnablyws@gmail.com</p>
          </div>
          <div class="col-md-4 mt-4 mt-md-5 contact-social wow animate__animated animate__fadeInUp">
            <h3 class="display-6">Follow Us</h3>
            <p class="mt-3 azm-font-size-1-15 azm-color-ccc">
              <a class="azm-color-ccc" href="#"><i class="bi bi-facebook fs-4 azm-color-888 me-1" aria-hidden="true"></i> <span class="azm-border-dashed">Facebook</span></a>
            </p>
            <p class="azm-font-size-1-15 azm-color-ccc">
              <a class="azm-color-ccc" href="#"><i class="bi bi-twitter-x fs-4 azm-color-888 me-1" aria-hidden="true"></i> <span class="azm-border-dashed">Twitter</span></a>
            </p>
            <p class="azm-font-size-1-15 azm-color-ccc">
              <a class="azm-color-ccc" href="#"><i class="bi bi-linkedin fs-4 azm-color-888 me-1" aria-hidden="true"></i> <span class="azm-border-dashed">LinkedIn</span></a>
            </p>
            <p class="azm-font-size-1-15 azm-color-ccc">
              <a class="azm-color-ccc" href="#"><i class="bi bi-youtube fs-4 azm-color-888 me-1" aria-hidden="true"></i> <span class="azm-border-dashed">YouTube</span></a>
            </p>
          </div>
          <div class="col-md-4 mt-4 mt-md-5 contact-email wow animate__animated animate__fadeInDown">
            <h3 class="display-6">Email Us</h3>
            <form action="assets/contact-1.php" method="post">
              <div class="mt-3 mb-3">
                <label for="email" class="form-label azm-font-size-1-15 azm-color-ccc">Email address</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="name@gmail.com">
                <div class="invalid-feedback px-2 text-white azm-background-E7983C">Invalid email!</div>
              </div>
              <div class="mb-3">
                <label for="subject" class="form-label azm-font-size-1-15 azm-color-ccc">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="subject...">
                <div class="invalid-feedback px-2 text-white azm-background-E7983C">Empty subject!</div>
              </div>
              <div class="mb-3">
                <label for="message" class="form-label azm-font-size-1-15 azm-color-ccc">Message</label>
                <textarea class="form-control" id="message" name="message" placeholder="your message..." rows="3"></textarea>
                <div class="invalid-feedback px-2 text-white azm-background-E7983C">Empty message!</div>
              </div>
              <button type="submit" class="btn btn-primary btn-lg azm-btn-primary"><i class="bi bi-envelope" aria-hidden="true"></i> Send It</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Footer -->
    <footer class="azm-background-3d3d3d py-4 azm-color-ccc text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-6 pt-2 lead text-md-start">
            &copy; Lando Bootstrap Landing Page <a class="azm-color-ccc azm-border-dashed" href="mailto:stakywsnablyws@gmail.com">STAKYUS</a>.
          </div>
          <div class="col-md-6 mt-3 mt-md-0 text-md-end to-top">
            <a href="#" aria-label="Go to the top of the page" class="azm-color-888 text-decoration-none fs-2"><i class="bi bi-chevron-double-up"></i></a>
          </div>
        </div>
      </div>
    </footer>
    
    
    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="assets/jquery-3.7.1.min.js"></script>
    <script src="assets/jquery.waypoints.min.js"></script>
    <script src="assets/wow.min.js"></script>
    <script src="assets/scripts.js"></script>
    
  </body>
</html>