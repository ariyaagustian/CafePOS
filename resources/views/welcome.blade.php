<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Kedai Mato') }}</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Pinyon+Script" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('resto/css/styles-merged.css')}}">
    <link rel="stylesheet" href="{{asset('resto/css/style.min.css')}}">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- Fixed navbar -->

    <nav class="navbar navbar-default navbar-fixed-top probootstrap-navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="javascript:void(0)"></a>
        </div>

        <div id="navbar-collapse" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="javascript:void(0)" void data-nav-section="welcome">Welcome</a></li>
            <li><a href="javascript:void(0)" data-nav-section="specialties">Specialties</a></li>
            <li><a href="javascript:void(0)" data-nav-section="menu">Menu</a></li>
            <li><a href="javascript:void(0)" data-nav-section="events">Events</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="flexslider" data-section="welcome">
      <ul class="slides">
        <li style="background-image: url('{{asset('resto/img/hero_bg_1.jpg')}}')" class="overlay" data-stellar-background-ratio="0.5">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
                  <h1 class="primary-heading">Welcome</h1>
                  <h3 class="secondary-heading">The Resto</h3>
                  <p class="sub-heading">A free bootstrap website template by <a href="https://uicookies.com">uicookies.com</a></p>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li style="background-image: url({{asset('resto/img/hero_bg_2.jpg')}})" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
                  <h1 class="primary-heading">Dine</h1>
                  <h3 class="secondary-heading">With Us</h3>
                  <p class="sub-heading">A free bootstrap website template by <a href="https://uicookies.com">uicookies.com</a></p>
                </div>
              </div>
            </div>
          </div>

        </li>
        <li style="background-image: url({{asset('resto/img/hero_bg_3.jpg')}})" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
                  <h1 class="primary-heading">Enjoy</h1>
                  <h3 class="secondary-heading">With Us</h3>
                  <p class="sub-heading">A free bootstrap website template by <a href="https://uicookies.com">uicookies.com</a></p>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </section>

    <section class="probootstrap-section probootstrap-bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-5 text-center probootstrap-animate">
            <div class="probootstrap-heading dark">
              <h1 class="primary-heading">Discover</h1>
              <h3 class="secondary-heading">Our Store</h3>
              <span class="seperator">* * *</span>
            </div>
            <p>Voluptatibus quaerat laboriosam fugit non Ut consequatur animi est molestiae enim a voluptate totam natus modi debitis dicta impedit voluptatum quod sapiente illo saepe explicabo quisquam perferendis labore et illum suscipit</p>
            <p><a href="javascript:void(0)" class="probootstrap-custom-link">About Us</a></p>
          </div>
          <div class="col-md-6 col-md-push-1 probootstrap-animate">
            <p><img src="{{asset('resto/img/img_1.jpg')}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></p>
          </div>
        </div>
        <!-- END row -->
      </div>
    </section>

    <section class="probootstrap-section-bg overlay" style="background-image: url({{asset('resto/img/hero_bg_2.jpg')}});" data-stellar-background-ratio="0.5" data-section="specialties">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center probootstrap-animate">
            <div class="probootstrap-heading">
              <h2 class="primary-heading">Discover</h2>
              <h3 class="secondary-heading">Our Specialties</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
     <!-- probootstrap-bg-white -->
    <section class="probootstrap-section">
      <div class="container">
        <div class="row">
          <div class="probootstrap-cell-retro">
            <div class="half">

              <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
                <div class="image" style="background-image: url({{asset('resto/img/img_square_1.jpg')}});"></div>
                <div class="text text-center">
                  <h3>Baked Potato Pizza</h3>
                  <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam.</p>
                  <p class="price">$20.99</p>
                </div>
              </div>
              <div class="probootstrap-cell reverse probootstrap-animate" data-animate-effect="fadeIn">
                <div class="image" style="background-image: url({{asset('resto/img/img_square_2.jpg')}});"></div>
                <div class="text text-center">
                  <h3>Salted Fried Chicken</h3>
                  <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam.</p>
                  <p class="price">$19.99</p>
                </div>
              </div>
              <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
                <div class="image" style="background-image: url({{asset('resto/img/img_square_3.jpg')}});"></div>
                <div class="text text-center">
                  <h3>Imported Salmon Steak</h3>
                  <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam.</p>
                  <p class="price">$20.99</p>
                </div>
              </div>

            </div>
            <div class="half">

              <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
                <div class="image" style="background-image: url({{asset('resto/img/img_square_4.jpg')}});"></div>
                <div class="text text-center">
                  <h3>Roast Beef (4 sticks)</h3>
                  <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam.</p>
                  <p class="price">$32.99</p>
                </div>
              </div>
              <div class="probootstrap-cell reverse probootstrap-animate" data-animate-effect="fadeIn">
                <div class="image" style="background-image: url({{asset('resto/img/img_square_5.jpg')}});"></div>
                <div class="text text-center">
                  <h3>Tuna Roast Source</h3>
                  <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam.</p>
                  <p class="price">$25.99</p>
                </div>
              </div>
              <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
                <div class="image" style="background-image: url({{asset('resto/img/img_square_1.jpg')}});"></div>
                <div class="text text-center">
                  <h3>Fried Potatoes with Garlic</h3>
                  <p>Laboriosam pariatur modi praesentium deleniti molestiae officiis atque numquam.</p>
                  <p class="price">$32.99</p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-section-bg overlay" style="background-image: url({{asset('resto/img/hero_bg_4.jpg')}});"  data-stellar-background-ratio="0.5"  data-section="menu">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center probootstrap-animate">
            <div class="probootstrap-heading">
              <h2 class="primary-heading">Discover</h2>
              <h3 class="secondary-heading">Our Menu</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-section probootstrap-bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <ul class="menus">
              <li>
                <figure class="image"><img src="{{asset('resto/img/img_square_1.jpg')}}" alt="Free Bootstrap Template by uicookies.com"></figure>
                <div class="text">
                  <span class="price">$22.99</span>
                  <h3>Fried Potatoes with Garlic</h3>
                  <p>Crab / Potatoes / Rice</p>
                </div>
              </li>
              <li>
                <figure class="image"><img src="{{asset('resto/img/img_square_2.jpg')}}" alt="Free Bootstrap Template by uicookies.com"></figure>
                <div class="text">
                  <span class="price">$22.99</span>
                  <h3>Tuna Roast Source</h3>
                  <p>Crab / Potatoes / Rice</p>
                </div>
              </li>
              <li>
                <figure class="image"><img src="{{asset('resto/img/img_square_3.jpg')}}" alt="Free Bootstrap Template by uicookies.com"></figure>
                <div class="text">
                  <span class="price">$22.99</span>
                  <h3>Roast Beef (4 sticks)</h3>
                  <p>Crab / Potatoes / Rice</p>
                </div>
              </li>
              <li>
                <figure class="image"><img src="{{asset('resto/img/img_square_4.jpg')}}" alt="Free Bootstrap Template by uicookies.com"></figure>
                <div class="text">
                  <span class="price">$22.99</span>
                  <h3>Salted Fried Chicken</h3>
                  <p>Crab / Potatoes / Rice</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="menus">
              <li>
                <figure class="image"><img src="{{asset('resto/img/img_square_5.jpg')}}" alt="Free Bootstrap Template by uicookies.com"></figure>
                <div class="text">
                  <span class="price">$22.99</span>
                  <h3>Baked Potato Pizza</h3>
                  <p>Crab / Potatoes / Rice</p>
                </div>
              </li>
              <li>
                <figure class="image"><img src="{{asset('resto/img/img_square_1.jpg')}}" alt="Free Bootstrap Template by uicookies.com"></figure>
                <div class="text">
                  <span class="price">$22.99</span>
                  <h3>Fried Potatoes with Garlic</h3>
                  <p>Crab / Potatoes / Rice</p>
                </div>
              </li>
              <li>
                <figure class="image"><img src="{{asset('resto/img/img_square_2.jpg')}}" alt="Free Bootstrap Template by uicookies.com"></figure>
                <div class="text">
                  <span class="price">$22.99</span>
                  <h3>Salted Fried Chicken</h3>
                  <p>Crab / Potatoes / Rice</p>
                </div>
              </li>
              <li>
                <figure class="image"><img src="{{asset('resto/img/img_square_3.jpg')}}" alt="Free Bootstrap Template by uicookies.com"></figure>
                <div class="text">
                  <span class="price">$22.99</span>
                  <h3>Tuna Roast Source</h3>
                  <p>Crab / Potatoes / Rice</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>


    <section class="probootstrap-section-bg overlay" style="background-image: url({{asset('resto/img/hero_bg_4.jpg')}});"  data-stellar-background-ratio="0.5" data-section="events">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center probootstrap-animate">
            <div class="probootstrap-heading">
              <h2 class="primary-heading">Upcoming</h2>
              <h3 class="secondary-heading">Our Events</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="probootstrap-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 probootstrap-animate">
            <div class="probootstrap-block-image">
              <figure><img src="{{asset('resto/img/img_square_2.jpg')}}" alt="Free Bootstrap Template by uicookies.com"></figure>
              <div class="text">
                <span class="date">June 29, 2017</span>
                <h3><a href="javascript:void(0)">Laboriosam Quod Dignissimos</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                <p class=""><a href="javascript:void(0)" class="probootstrap-custom-link link-sm">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 probootstrap-animate">
            <div class="probootstrap-block-image">
              <figure><img src="{{asset('resto/img/img_square_3.jpg')}}" alt="Free Bootstrap Template by uicookies.com"></figure>
              <div class="text">
                <span class="date">June 29, 2017</span>
                <h3><a href="javascript:void(0)">Laboriosam Quod Dignissimos</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                <p class=""><a href="javascript:void(0)" class="probootstrap-custom-link link-sm">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 probootstrap-animate">
            <div class="probootstrap-block-image">
              <figure><img src="{{asset('resto/img/img_square_4.jpg')}}" alt="Free Bootstrap Template by uicookies.com"></figure>
              <div class="text">
                <span class="date">June 29, 2017</span>
                <h3><a href="javascript:void(0)">Laboriosam Quod Dignissimos</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                <p class=""><a href="javascript:void(0)" class="probootstrap-custom-link link-sm">Read More</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 probootstrap-animate">
            <div class="probootstrap-footer-widget">
              <h3>Locations</h3>
              <div class="row">
                <div class="col-md-6">
                  <p> 198 West 21th Street, Suite 721 <br> New York NY 10016</p>
                </div>
                <div class="col-md-6">
                  <p> 198 West 21th Street, Suite 721 <br> New York NY 10016</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 probootstrap-animate">
            <div class="probootstrap-footer-widget">
              <h3>Open Hours</h3>
              <div class="row">
                <div class="col-md-4">
                  <p>Monday - Thursday <br> 5:30pm - 10:00pm</p>
                </div>
                <div class="col-md-4">
                  <p>Friday - Sunday <br> 5:30pm - 10:00pm</p>
                </div>
                <div class="col-md-4">
                  <p>Available for Catering <br> Email or Call Us</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="probootstrap-copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <p class="copyright-text">&copy; 2017 <a href="https://uicookies.com/">uiCookies:Resto</a>. All Rights Reserved. Images by <a href="https://graphicburger.com/">GraphicBurger</a> &amp; <a href="https://unsplash.com/">Unsplash</a></p>
          </div>
          <div class="col-md-4">
            <ul class="probootstrap-footer-social right">
              <li><a href="javascript:void(0)"><i class="icon-twitter"></i></a></li>
              <li><a href="javascript:void(0)"><i class="icon-facebook"></i></a></li>
              <li><a href="javascript:void(0)"><i class="icon-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <script src="{{asset('resto/js/scripts.min.js')}}"></script>
    <script src="{{asset('resto/js/custom.min.js')}}"></script>

  </body>
</html>
