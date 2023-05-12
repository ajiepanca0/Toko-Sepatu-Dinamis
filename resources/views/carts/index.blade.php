<html>
  <head>
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <header>
      <div id="menu-bar" class="fa fa-bars"></div>
      <a href="#" class="logo">Logo</a>
      <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#product">Product</a>
        <a href="#fearured">Fearured</a>
        <a href="#blog">blog</a>
        <a href="#news">news</a>
      </nav>
      <div class="icons">
        <a href="#"><i class="fa fa-heart"></i></a>
        <a href="{{ route('carts.index') }}"><i  class="fa fa-shopping-cart" ></i></a>
        <a href="#"><i class="fa fa-user"></i></a>
      </div>
    </header>
    <!--end header-->
   <section>
    {{-- <div class="namealif">
        <h1>test</h1>
    </div> --}}
   </section>
    <!--end featured-->
    <section class="blog" id="blog">
      <h1 class="heading">Team <span>Weblog</span></h1>
      <div class="box-container">
        <div class="box">
          <img src="assets/img/team/1.png" alt="" />
          <h3>Zahra Ahmadi</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos sequi temporibus impedit corporis vero ab exercitationem dolore voluptatibus, nisi non.</p>
          <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa fa-star"></i>
          </div>
        </div>
        <div class="box">
          <img src="assets/img/team/2.png" alt="" />
          <h3>Maryam Nazari</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos sequi temporibus impedit corporis vero ab exercitationem dolore voluptatibus, nisi non.</p>
          <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa fa-star-half-o"></i>
          </div>
        </div>
        <div class="box">
          <img src="assets/img/team/3.png" alt="" />
          <h3>Layla Akbari</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos sequi temporibus impedit corporis vero ab exercitationem dolore voluptatibus, nisi non.</p>
          <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa fa-star-half-o"></i>
          </div>
        </div>
      </div>
    </section>
    <!--end blog-->
    <section class="news" id="news">
      <div class="content">
        <h3>monthly news letter</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga sed itaque ducimus maxime facere nihil expedita non sunt? Nostrum, voluptatem?</p>
        <form action="">
          <input type="email" placeholder="please enter your email" class="email" />
          <input type="submit" value="save" class="btn" />
        </form>
      </div>
    </section>
    <!--end news-->
    <section class="cridet" id="cridet">
      <div class="box">
        <h3>all reserved by codeskill</h3>
      </div>
    </section>
  </body>
</html>

<script src="assets/js/script.js"></script>
