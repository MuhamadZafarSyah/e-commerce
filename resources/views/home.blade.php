@extends('components.layout')


@section('user_content')
    <!-- Hero -->
    <section id="hero">
      <h4>Trade-in-offer</h4>
      <h2>Super value deals</h2>
      <h1>On all products</h1>
      <p>Save more with coupons & up to 70 % off!</p>
      <button onclick="location.href='shop.html';">Shop Now</button>
    </section>

    <!-- Feature -->
    <section id="feature" class="section-p1">
      <div class="fe-box">
        <img src="img/features/f1.png" alt="" />
        <h6 class="font-bold text-sm">Free Shipping</h6>
      </div>
      <div class="fe-box">
        <img src="img/features/f2.png" alt="" />
        <h6 class="font-bold text-sm">Online Order</h6>
      </div>
      <div class="fe-box">
        <img src="img/features/f3.png" alt="" />
        <h6 class="font-bold text-sm">Save Money</h6>
      </div>
      <div class="fe-box">
        <img src="img/features/f4.png" alt="" />
        <h6 class="font-bold text-sm">Promotions</h6>
      </div>
      <div class="fe-box">
        <img src="img/features/f5.png" alt="" />
        <h6 class="font-bold text-sm">Happy Sell</h6>
      </div>
      <div class="fe-box">
        <img src="img/features/f6.png" alt="" />
        <h6 class="font-bold text-sm">24/7 Support</h6>
      </div>
    </section>

    <!-- Featured products -->

    <section id="product1" class="section-p1">
      <h2 class="text-5xl text-[#222] font-bold ">Featured Products</h2>
      <p class="my-4">Summer Collection New Modern Design</p>
      <div class="pro-container">
        @foreach ($products as $product)
        <div class="pro">
            <a href="/product/{{$product->slug}}">
            <img src="/storage/{{$product->image}}" alt="" />
        </a>
            <div class="des">
              <span>{{$product->category->category_name}}</span>
                <a href="/product/{{$product->slug}}">
              <h5 class="font-bold">{{$product->product_name}}</h5>
            </a>
              <div class="star">
                @for ($i = 0; $i < $product->rating; $i++)
                <i class="fas fa-star"></i>
            @endfor
              </div>
              <h4>Rp {{$product->price}}
                @if ($product->discount)
                <span class="line-through">Rp {{ $product->discount }}
                @endif
                </h4>
            </div>
            <i class="fa fa-shopping-cart cart"></i>
          </div>
        @endforeach
    </div>
  <div class="flex justify-center items-center mt-10">
    <a href="/all-products">
        <button class="py-[14px] px-7 text-xs flex items-center bg-black text-white">VIEW ALL</button>
    </a>
  </div>
    </section>

    <!-- Offer Banner -->

    <section id="banner" class="section-m1">
      <h4>Latest Offer</h4>
      <h2>Upto <span>70% Off</span> - All T-Shirts & Jeans</h2>
      <button class="normal" onclick="location.href='shop.html';">Explore More</button>
    </section>

    <!-- New Arrivals -->
    <section id="product1" class="section-p1">
      <h2>New Arrivals</h2>
      <p>Summer Collection New Modern Design</p>
      <div class="pro-container">
        @foreach ($products->skip(8) as $product)
        <div class="pro">
            <img src="/storage/{{$product->image}}" alt="" />
            <div class="des">
              <span>{{$product->category->category_name}}</span>
              <h5 class="font-bold">{{$product->product_name}}</h5>
              <div class="star">
                @for ($i = 0; $i < $product->rating; $i++)
                <i class="fas fa-star"></i>
            @endfor
              </div>
              <h4>Rp {{$product->price}}
                @if ($product->discount)
                <span class="line-through">Rp {{ $product->discount }}
                @endif
                </h4>
            </div>
            <i class="fa fa-shopping-cart cart"></i>
          </div>
        @endforeach
      </div>
    </section>

    <!-- SM banner -->

    <section id="sm-banner" class="section-p1">
      <div class="banner-box banner-box-1">
        <h4>crazy deals</h4>
        <h2>buy 1 get 1 free</h2>
        <span>The best class dress is on sale at cara</span>
        <button class="white" onclick="location.href='shop.html';">Learn more</button>
      </div>
      <div class="banner-box banner-box-2">
        <h4>spring/summer</h4>
        <h2>upcoming season</h2>
        <span>The best class dress is on sale at cara</span>
        <button class="white" onclick="location.href='shop.html';">Collection</button>
      </div>
    </section>

    <!-- banner3 -->
    <section id="banner-3">
      <div class="banner-box banner-box-1">
        <h2>SEASONAL SALE</h2>
        <h3>Winder Collection 50% OFF</h3>
      </div>
      <div class="banner-box banner-box-2">
        <h2>NEW FOOTWEAR COLLECTION</h2>
        <h3>Spring / Summer 2022</h3>
      </div>
      <div class="banner-box banner-box-3">
        <h2>T-SHIRTS</h2>
        <h3>New Trendy Prints</h3>
      </div>
    </section>

    <!-- Newsletter -->

    <section id="newsletter" class="section-p1 section-m1">
      <div class="newstext">
        <h4>Sign up For Newsletter</h4>
        <p>
          Get E-mail updates about out latest shop and
          <span>special offer.</span>
        </p>
      </div>
      <div class="form">
        <input type="text" placeholder="Your email address" />
        <button class="normal">Sign up</button>
      </div>
    </section>

    <!-- Footer -->
    <footer class="section-p1">
      <div class="col">
        <img class="logo" src="img/logo.png" alt="logo" />
        <h4>Contact</h4>
        <p><b>Address:</b> Andheri (E), Mumbai, Maharashtra</p>
        <p><b>Phone:</b> +01 2222 365 / (+91) 01 2345 6789</p>
        <p><b>Hours:</b> 10:00 - 18:00, Mon - Sat</p>
        <div class="follow">
          <h4>Follow us</h4>
          <div class="icon">
            <i class="fab fa-linkedin" style="font-size:18px"
              onclick="window.location.href='www.linkedin.com/in/mihir2403';"></i>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-pinterest-p"></i>
            <i class="fab fa-youtube"></i>
          </div>
        </div>
      </div>
      <div class="col">
        <h4>About</h4>
        <a href="about.html">About us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="contact.html">Contact us</a>
      </div>
      <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="cart.html">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="about.html">Help</a>
      </div>
      <div class="col install">
        <h4>Install App</h4>
        <p>From App Store or Google Play</p>
        <div class="row">
          <img src="img/pay/app.jpg" alt="" />
          <img src="img/pay/play.jpg" alt="" />
        </div>
        <p>Secured Payment Gateway</p>
        <img src="img/pay/pay.png" alt="" />
      </div>
      <div class="copyright">
        <p>© 2021-2022 Cara.com - E-Commerce Project Made by <span style="cursor: pointer;"
            onclick="window.location.href='www.linkedin.com/in/mihir2403';"><b>Mihir Shinde<b> &nbsp;</span> <i
            style="color:#0071ac;font-size:18px;position: relative;top:1px;cursor: pointer;" class="fab fa-linkedin"
            onclick="window.location.href='www.linkedin.com/in/mihir2403';"></i>
        </p>
      </div>
    </footer>
@endsection
