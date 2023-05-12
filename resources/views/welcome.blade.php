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
    <section class="home" id="home">
      @foreach ($sliders as $index=>$slider)
          
    
      <div class="slide-container {{$index=== 0 ? 'active' : ''}}">
        <div class="slide">
          <div class="content">
            <span>{{$slider->title}}</span>
            <h3>{{$slider->description}}</h3>
            <p>{{$slider->detail}}</p>
            <div class="price">{{$slider->price}} <span> {{$slider->price_2}}</span></div>
            
            {{-- <a href="#" class="btn">add to card</a> --}}
            {{-- <a href="{{ route('carts.index', $slider->id) }}" class="btn">add to card</a> --}}
            <a href="{{ route('carts.index') }}">Go to Cart</a>


          </div>
          <div class="image">
            <img src="image/{{$slider->image}}" class="shoe" />
            
          </div>
        </div>
      </div>
    
      {{-- <div class="slide-container">
        <div class="slide">
          <div class="content">
            <span>Nike Sport Shoes</span>
            <h3>Nike Metcon Shoes</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit Sunt nam adipisci ipsa officiis Amet pariatur eaque soluta sit iure neque voluptate.</p>
            <a href="#" class="btn">add to card</a>
          </div>
          <div class="image">
            <img src="assets/img/slide/2.png" class="shoe" />
          </div>
        </div>
      </div>
      <div class="slide-container">
        <div class="slide">
          <div class="content">
            <span>Nike Sport Shoes</span>
            <h3>Nike Metcon Shoes</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit Sunt nam adipisci ipsa officiis Amet pariatur eaque soluta sit iure neque voluptate.</p>
            <a href="#" class="btn">add to card</a>
          </div>
          <div class="image">
            <img src="assets/img/slide/3.png" class="shoe" />
          </div>
        </div>
      </div>
      <div class="slide-container">
        <div class="slide">
          <div class="content">
            <span>Nike Sport Shoes</span>
            <h3>Nike Metcon Shoes</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit Sunt nam adipisci ipsa officiis Amet pariatur eaque soluta sit iure neque voluptate.</p>
            <a href="#" class="btn">add to card</a>
          </div>
          <div class="image">
            <img src="assets/img/slide/4.png" class="shoe" />
          </div>
        </div>
      </div> --}}

      <div id="prev" class="fa fa-angle-left" onclick="prev();"></div>
      <div id="next" class="fa fa-angle-right" onclick="next();"></div>
      @endforeach
    </section>
    <!--end home-->
    <section class="product" id="product">
      <h1 class="heading">latest <span>Products</span></h1>
      <div class="box-container">
        @foreach ($services as $index=>$service)
                
        
        <div class="box">
          <div class="icons">
            <a href="#" class="fa fa-heart"></a>
            <a href="#" class="fa fa-share"></a>
            <a href="#" class="fa fa-eye"></a>
          </div>
          <div class="content">
            <img src="image/{{$service->image}}" alt="" />
            <h2>{{$service->title}}</h2>
            <h3>{{$service->description}}</h3>
            <h4>{{$service->detail}}</h4>
            <div class="price">{{$service->price}} <span> {{$service->price_2}}</span></div>
            <div class="stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
          </div>
        </div>
        @endforeach
        {{-- <div class="box"> --}}
          <div class="icons">
            <a href="#" class="fa fa-heart"></a>
            <a href="#" class="fa fa-share"></a>
            <a href="#" class="fa fa-eye"></a>
          </div>
          {{-- <div class="content">
            <img src="assets/img/product4/2.jpg" alt="" />
            <h3>Nike Shoes</h3>
            <div class="price">$200 <span>$150</span></div>
            <div class="stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="icons">
            <a href="#" class="fa fa-heart"></a>
            <a href="#" class="fa fa-share"></a>
            <a href="#" class="fa fa-eye"></a>
          </div>
          <div class="content">
            <img src="assets/img/product4/3.jpg" alt="" />
            <h3>Nike Shoes</h3>
            <div class="price">$200 <span>$150</span></div>
            <div class="stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="icons">
            <a href="#" class="fa fa-heart"></a>
            <a href="#" class="fa fa-share"></a>
            <a href="#" class="fa fa-eye"></a>
          </div>
          <div class="content">
            <img src="assets/img/product4/5.jpg" alt="" />
            <h3>Nike Shoes</h3>
            <div class="price">$200 <span>$150</span></div>
            <div class="stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="icons">
            <a href="#" class="fa fa-heart"></a>
            <a href="#" class="fa fa-share"></a>
            <a href="#" class="fa fa-eye"></a>
          </div>
          <div class="content">
            <img src="assets/img/product4/7.png" alt="" />
            <h3>Nike Shoes</h3>
            <div class="price">$200 <span>$150</span></div>
            <div class="stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="icons">
            <a href="#" class="fa fa-heart"></a>
            <a href="#" class="fa fa-share"></a>
            <a href="#" class="fa fa-eye"></a>
          </div>
          <div class="content">
           
            <img src="assets/img/product4/8.png" alt="" />
            <h3>Nike Shoes</h3>
            <div class="price">$200 <span>$150</span></div>
            <div class="stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
          </div>
        </div> --}}
      </div>
    </section>
    <!--end product-->
    <section class="featured" id="fearured">
      <h1 class="heading">New <span>Product</span></h1>
      <div class="row">
        @foreach ($testimonials as $index=>$testimonial)
            
       
        <div class="image-container">
          <div class="small-image">
            <img src="image/{{$testimonial->image_2}}" alt="" class="featured-image-1" />
            <img src="image/{{$testimonial->image_3}}" alt="" class="featured-image-1" />
            <img src="image/{{$testimonial->image_4}}" alt="" class="featured-image-1" />
            <img src="image/{{$testimonial->image_5}}" alt="" class="featured-image-1" />
          </div>
          <div class="big-image">
            <img src="image/{{$testimonial->image}}" alt="" class="big-image-1" />
          </div>
        </div>
        <div class="content">
          <h2>{{$testimonial->title}}</h2>
          <h3>{{$testimonial->description}}</h3>
          
          <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <p>{{$testimonial->detail}}</p>
          <div class="price">{{$testimonial->price}}<span> {{$testimonial->price_2}}</span></div>
          <a href="#" class="btn">add to cart</a>
        </div>
        @endforeach
      </div>
      {{-- <div class="row">
        <div class="image-container">
          <div class="small-image">
            <img src="assets/img/product2/1.jpg" alt="" class="featured-image-2" />
            <img src="assets/img/product2/2.jpg" alt="" class="featured-image-2" />
            <img src="assets/img/product2/3.jpg" alt="" class="featured-image-2" />
            <img src="assets/img/product2/4.jpg" alt="" class="featured-image-2" />
          </div>
          <div class="big-image">
            <img src="assets/img/product2/1.jpg" alt="" class="big-image-2" />
          </div>
        </div>
        <div class="content">
          <h3>new nike airmac shoes</h3>
          <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit officiis omnis quo laboriosam velit culpa ex illo, error enim nostrum?</p>
          <div class="price">$90 <span>$120</span></div>
          <a href="#" class="btn">add to cart</a>
        </div>
      </div>
      <div class="row">
        <div class="image-container">
          <div class="small-image">
            <img src="assets/img/product3/1.jpg" alt="" class="featured-image-3" />
            <img src="assets/img/product3/2.jpg" alt="" class="featured-image-3" />
            <img src="assets/img/product3/3.jpg" alt="" class="featured-image-3" />
            <img src="assets/img/product3/4.jpg" alt="" class="featured-image-3" />
          </div>
          <div class="big-image">
            <img src="assets/img/product3/1.jpg" alt="" class="big-image-3" />
          </div>
        </div>
        <div class="content">
          <h3>new nike airmac shoes</h3>
          <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit officiis omnis quo laboriosam velit culpa ex illo, error enim nostrum?</p>
          <div class="price">$90 <span>$120</span></div>
          <a href="#" class="btn">add to cart</a>
        </div>
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
