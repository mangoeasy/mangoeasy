
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ProteusNet">
    <link rel="icon" type="image/ico" href="images/favicon.png">

    <title>Organique - HTML Template For Organic Shop</title>

    <!-- Custom styles for this template -->
    <!-- build:css stylesheets/main.css -->
    <link href="stylesheets/bootstrap.css" rel="stylesheet">
    <link href="stylesheets/main.css" rel="stylesheet">
    <!-- endbuild -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Google fonts -->
    <script type="text/javascript">
      WebFontConfig = {
        google: { families: [ 'Arvo:700:latin', 'Open+Sans:400,600,700:latin' ] }
      };
      (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
          '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
      })();
    </script>

  </head>
  <body>
    <div class="top  js--fixed-header-offset">
  <div class="container">
    <div class="row">
      <div class="col-xs-12  col-sm-6">
        <div class="top__slogan">
          Made with <small><span class="glyphicon  glyphicon-heart  tertiary-color"></span></small> for a healthy lifestyle
        </div>
      </div>
      <div class="col-xs-12  col-sm-6">
        <div class="top__menu">
          <ul class="nav  nav-pills">
            <li><a href="#registerModal" role="button" data-toggle="modal">Register</a></li>
            <li><a href="#loginModal" role="button" data-toggle="modal">Login</a></li>
            <li><a href="#">My account</a></li>
            <li class="dropdown  js--mobile-dropdown">
              <a class="dropdown-toggle" href="#">
                English <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">Deutsch</a></li>
                <li><a href="#">Espagnol</a></li>
              </ul>
            </li>
            <li class="dropdown  js--mobile-dropdown">
              <a class="dropdown-toggle"  href="#">
                USD <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">EUR</a></li>
                <li><a href="#">YEN</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal register-->
<div class="modal  fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content  center">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        <h3><span class="light">Register</span> to Organique</h3>
        <hr class="divider">
      </div>
      <div class="modal-body">
        <form action="#" class="push-down-15">
          <div class="form-group">
            <input type="text" id="name" class="form-control  form-control--contact" placeholder="Username">
          </div>
          <div class="form-group">
            <input type="text" id="email" class="form-control  form-control--contact" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="text" id="subject" class="form-control  form-control--contact" placeholder="Password">
          </div>
          <button type="submit" class="btn  btn-primary">REGISTER</button>
        </form>
        <a data-toggle="modal" role="button" href="#loginModal" data-dismiss="modal">Already Registered?</a>
      </div>
    </div>
  </div>
</div>

<!-- Modal login-->
<div class="modal  fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content  center">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        <h3><span class="light">Login</span> to Organique</h3>
        <hr class="divider">
      </div>
      <div class="modal-body">
        <form action="#" class="push-down-15">
          <div class="form-group">
            <input type="text" id="name" class="form-control  form-control--contact" placeholder="Username">
          </div>
          <div class="form-group">
            <input type="text" id="subject" class="form-control  form-control--contact" placeholder="Password">
          </div>
          <button type="submit" class="btn  btn-primary">SIGN IN</button>
        </form>
      </div>
    </div>
  </div>
</div>
<header class="header">
  <div class="container">
    <div class="row">
      <div class="col-xs-10  col-md-3">
        <div class="header-logo">
          <a href="index.html"><img alt="Logo" src="images/logo.png" width="200" height="90"></a>
        </div>
      </div>
      <div class="col-xs-2  visible-sm  visible-xs">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle  collapsed" data-toggle="collapse" data-target="#collapsible-navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
      </div>
      <div class="col-xs-12  col-md-7">
        <nav class="navbar  navbar-default" role="navigation">
  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse  navbar-collapse" id="collapsible-navbar">
    <ul class="nav  navbar-nav">
      <li class="dropdown">
        <a href="index.html" class="dropdown-toggle">HOME<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="index.html">Home (Shop)</a></li>
          <li><a href="home-business.html">Home (Business)</a></li>
          <li><a href="home-slider.html">Home (Slider)</a></li>
          <li><a href="home-slider-sticky-navbar.html">Home with Sticky Navbar</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="shop.html" class="dropdown-toggle">SHOP<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="shop.html">Shop (Grid view)</a></li>
          <li><a href="shop-list-view.html">Shop (List view)</a></li>
          <li><a href="single-product.html">Single product</a></li>
          <li><a href="cart.html">Cart</a></li>
          <li><a href="checkout.html">Checkout</a></li>
          <li><a href="order-received.html">Order Received</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="blog.html" class="dropdown-toggle">BLOG<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="blog-right-sidebar.html">Blog (Right sidebar)</a></li>
          <li><a href="blog-left-sidebar.html">Blog (Left sidebar)</a></li>
          <li><a href="blog.html">Blog (Alternative)</a></li>
          <li><a href="single-post.html">Single Blogpost</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="about-us.html" class="dropdown-toggle">PAGES<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="about-us.html">About us</a></li>
          <li><a href="pricing.html">Pricing Tables</a></li>
          <li><a href="contact.html">Contact 1</a></li>
          <li><a href="contact-2.html">Contact 2</a></li>
          <li><a href="search-results.html">Search Results</a></li>
          <li><a href="404.html">404 page</a></li>
          <li><a href="page-right.html">Page (Right sidebar)</a></li>
          <li><a href="page-left.html">Page (Left sidebar)</a></li>
          <li><a href="page-full-width.html">Page (Full width)</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="features.html" class="dropdown-toggle">FEATURES <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="features.html">Responsive design</a></li>
          <li><a href="features.html">Retina ready</a></li>
          <li><a href="features.html">Lightning fast</a></li>
          <li><a href="features.html">Search engine optimized</a></li>
          <li><a href="features.html">Layered PSDs included</a></li>
          <li><a href="features.html">Unlimited colors and layouts</a></li>
          <li><a href="features.html">290+ Glyphicons and Zocial icons</a></li>
          <li><a href="features.html">Advance shop filters</a></li>
          
          
          <li><a href="features.html">Awesome support</a></li>
          <li class="dropdown">
            <a href="blog.html" class="dropdown-toggle">3rd level menu</a>
            <ul class="dropdown-menu">
              <li><a href="blog-right-sidebar.html">Blog (Right sidebar)</a></li>
              <li><a href="blog-left-sidebar.html">Blog (Left sidebar)</a></li>
              <li><a href="blog.html">Blog (Alternative)</a></li>
              <li><a href="single-post.html">Single Blogpost</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="elements.html" class="dropdown-toggle">ELEMENTS<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="elements.html#headings">Headings</a></li>
          <li><a href="elements.html#banners">Banners</a></li>
          <li><a href="elements.html#alerts">Alerts</a></li>
          <li><a href="elements.html#tabs">Tabs</a></li>
          <li><a href="elements.html#buttons">Buttons</a></li>
          <li><a href="elements.html#tables">Tables</a></li>
          <li><a href="elements.html#maps">Maps</a></li>
          <li><a href="elements.html#bars">Bars</a></li>
          <li><a href="elements.html#columns">Columns</a></li>
          <li><a href="elements.html#gallerys">Gallerys</a></li>
          <li><a href="elements.html#code">Code</a></li>
          <li><a href="elements.html#toggles">Toggles</a></li>
        </ul>
      </li>
      <li class="hidden-xs  hidden-sm">
        <a href="#" class="js--toggle-search-mode"><span class="glyphicon  glyphicon-search  glyphicon-search--nav"></span></a>
      </li>
    </ul>
    <!-- search for mobile devices -->
    <form action="#" method="post" class="visible-xs  visible-sm  mobile-navbar-form" role="form">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search">
        <span class="input-group-addon">
          <button type="submit" class="mobile-navbar-form__appended-btn"><span class="glyphicon  glyphicon-search  glyphicon-search--nav"></span></button>
        </span>
      </div>
    </form>
    <div class="mobile-cart  visible-xs  visible-sm  push-down-15">
        <span class="header-cart__text--price"><span class="header-cart__text">CART</span> $49.35</span>
      <a href="cart.html" class="header-cart__items">
        <span class="header-cart__items-num">3</span>
      </a>
    </div>
  </div><!-- /.navbar-collapse -->
</nav>
      </div>
      <div class="col-xs-12  col-md-2  hidden-sm  hidden-xs">
        <!-- Cart in header -->
<div class="header-cart">
  <span class="header-cart__text--price"><span class="header-cart__text">CART</span> $49.35</span>
  <a href="#" class="header-cart__items">
    <span class="header-cart__items-num">3</span>
  </a>
  <!-- Open cart panel -->
  <div class="header-cart__open-cart">
  
    <div class="header-cart__product  clearfix  js--cart-remove-target">
      <div class="header-cart__product-image">
        <img alt="Product in the cart" src="images/dummy/product-cart.jpg" width="40" height="50">
      </div>
      <div class="header-cart__product-image--hover">
        <a href="#" class="js--remove-item" data-target=".js--cart-remove-target"><span class="glyphicon  glyphicon-circle  glyphicon-remove"></span></a>
      </div>
      <div class="header-cart__product-title">
        <a class="header-cart__link" href="single-product.html">Eatable Hemp</a>
        <span class="header-cart__qty">Qty: 1</span>
      </div>
      <div class="header-cart__price">
        $16.45
      </div>
    </div>
  
    <div class="header-cart__product  clearfix  js--cart-remove-target">
      <div class="header-cart__product-image">
        <img alt="Product in the cart" src="images/dummy/product-cart.jpg" width="40" height="50">
      </div>
      <div class="header-cart__product-image--hover">
        <a href="#" class="js--remove-item" data-target=".js--cart-remove-target"><span class="glyphicon  glyphicon-circle  glyphicon-remove"></span></a>
      </div>
      <div class="header-cart__product-title">
        <a class="header-cart__link" href="single-product.html">Eatable Hemp</a>
        <span class="header-cart__qty">Qty: 1</span>
      </div>
      <div class="header-cart__price">
        $16.45
      </div>
    </div>
  
    <div class="header-cart__product  clearfix  js--cart-remove-target">
      <div class="header-cart__product-image">
        <img alt="Product in the cart" src="images/dummy/product-cart.jpg" width="40" height="50">
      </div>
      <div class="header-cart__product-image--hover">
        <a href="#" class="js--remove-item" data-target=".js--cart-remove-target"><span class="glyphicon  glyphicon-circle  glyphicon-remove"></span></a>
      </div>
      <div class="header-cart__product-title">
        <a class="header-cart__link" href="single-product.html">Eatable Hemp</a>
        <span class="header-cart__qty">Qty: 1</span>
      </div>
      <div class="header-cart__price">
        $16.45
      </div>
    </div>
  
    <hr class="header-cart__divider">
    <div class="header-cart__subtotal-box">
      <span class="header-cart__subtotal">CART SUBTOTAL:</span>
      <span class="header-cart__subtotal-price">$49.35</span>
    </div>
    <a class="btn btn-darker" href="cart.html">Procced to checkout</a>
  </div>
</div>
      </div>
    </div>
  </div>

  <!--Search open pannel-->
  <div class="search-panel">
    <div class="container">
      <div class="row">
        <div class="col-sm-11">
          <form class="search-panel__form" action="search-results.html">
            <button type="submit"><span class="glyphicon  glyphicon-search"></span></button>
            <input type="text" name="s" class="form-control" placeholder="Enter your search keyword">
          </form>
        </div>
        <div class="col-sm-1">
          <div class="search-panel__close  pull-right">
            <a href="#" class="js--toggle-search-mode"><span class="glyphicon  glyphicon-circle  glyphicon-remove"></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="breadcrumbs  no-margin">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <nav>
          <ol class="breadcrumb">
            
            <li><a href="index.html">Home</a></li>
            
            <li><a href="contact-2.php">Contact</a></li>
            
            <li class="active">Second Option</li>
            
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>

<div class="simple-map  js--where-we-are"></div>
<div class="container  push-down-30">
  <div class="row">
    <div class="col-xs-12">
      <h1 class="center"><span class="light">Send</span> Us an Message</h1>
      <hr class="divider">
      <div class="text-shrink">
        <p class="text-highlight">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vulputate, leo vel malesuada tincidunt, purus nunc tristique erat, at elementum tellus mi nec mi. Nunc rutrum ullamcorper blandit.</p>
      </div>
      <hr class="divider  divider-about">
      <div class="push-down-30"></div>
      <div class="row">
        <div class="col-xs-12 col-sm-9  push-down-30">
          <?php include_once( 'php-form/send-email.php' ); ?>
        </div>
        <div class="col-xs-12 col-sm-3">
          <h2  class="no-margin"><span class="light">Organique</span> Itd</h2><br/>
          <p><strong>Dunajska cesta 17,<br>
          1000 Ljubljana,<br>
          Slovenia, Europe</strong></p>
          <span class="glyphicon  glyphicon-earphone"></span> <span class="text-dark">00386 31 567 537</span><br>
          <span class="glyphicon  glyphicon-envelope"></span> <a class="secondary-link" href="mailto:hello@proteusnet.com"><strong>hello@proteusnet.com</strong></a>
        </div>
      </div>
    </div>
  </div>
</div>
  <footer class="js--page-footer">
    <div class="footer-widgets">
      <div class="container">
        <div class="row">
          <div class="col-xs-12  col-sm-3">
            <div class="footer-widgets__social">
              <img class="push-down-10" alt="Footer Logo" src="images/logo-footer.png" width="139" height="35">
              <p class="push-down-15">Adipiscing elit. Ut ullamcorper consectetur, non lacinia turpis suscipit non. Estibulum nu nc lacus, tincidunt non odio eu, scelerisque tristique quam.</p>
              <a class="social-container" href="https://www.facebook.com/ProteusNet"><span class="zocial-facebook"></span></a>
              <a class="social-container" href="https://twitter.com/ProteusNetCom"><span class="zocial-twitter"></span></a>
              <a class="social-container" href="#"><span class="zocial-email"></span></a>
              <a class="social-container" href="http://www.youtube.com/user/ProteusNetCompany"><span class="zocial-youtube"></span></a>
            </div>
          </div>
          <div class="col-xs-12  col-sm-3">
            <nav class="footer-widgets__navigation">
              <div class="footer-wdgets__heading--line">
                <h4 class="footer-widgets__heading">Navigation</h4>
              </div>
              <ul class="nav nav-footer">
                <li><a href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about-us.html">Pages</a></li>
                <li><a href="features.html">Features</a></li>
                <li><a href="elements.html">Elements</a></li>
              </ul>
            </nav>
          </div>
          <div class="col-xs-12  col-sm-3">
            <div class="footer-widgets__navigation">
              <div class="footer-wdgets__heading--line">
                <h4 class="footer-widgets__heading">Popular Tags</h4>
              </div>
              <a class="tag" href="shop.html">Food</a> <a class="tag" href="shop.html">Fungus</a> <a class="tag" href="shop.html">Lifestyle</a> <a class="tag" href="shop.html">Extras</a> <a class="tag" href="shop.html">Tea</a> <a class="tag" href="shop.html">Coffe</a> <a class="tag" href="shop.html">Fruit</a> <a class="tag" href="shop.html">Fruti &amp; vegetables</a> <a class="tag" href="shop.html">Fungus</a> <a class="tag" href="shop.html">Healthy</a>
            </div>
          </div>
          <div class="col-xs-12  col-sm-3">
            <div class="footer-widgets__navigation">
                <div class="footer-wdgets__heading--line">
                  <h4 class="footer-widgets__heading">Contact Us</h4>
                </div>
                <a class="footer__link" href="#">Organique ltd.</a><br>
                Tehnološki park 19,<br>
                1000 Ljubljana, Slovenia<br>
                <a class="footer__link--small" href="contact-2.html">View Google map <span class="glyphicon glyphicon-chevron-right glyphicon--footer-small"></span></a><br><br>
                <a class="footer__link" href="#"><span class="glyphicon glyphicon-earphone glyphicon--footer"></span> +386 31 567 537</a><br>
                <a class="footer__link" href="#"><span class="glyphicon glyphicon-envelope glyphicon--footer"></span> hello@proteusnet.com</a>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-xs-12  col-sm-6">
            <div class="footer__text--link">
              <a class="footer__link" href="#">Organique</a> HTML Theme © Copyright 2014. Images of products by <a class="footer__link" href="http://www.nutrisslim.com/" target="_blank">Nutrisslim</a>.
            </div>
          </div>
          <div class="col-xs-12  col-sm-6">
            <div class="footer__text">
              Made with <span class="glyphicon  glyphicon-heart"></span> by <a class="footer__link" href="http://www.proteusthemes.com/" target="_blank">ProteusThemes</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="search-mode__overlay"></div>
    
    
    <script data-main="scripts/main" src="bower_components/requirejs/require.js"></script>
    
  </body>
</html>