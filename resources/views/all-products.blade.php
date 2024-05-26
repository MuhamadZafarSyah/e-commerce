@extends('components.layout')

@section('user_content')
    <!-- Hero -->
    <section id="page-header">

        <h2 class="font-bold md:text-6xl text-4xl">#keep-browsing</h2>

        <p>Save more with coupons & uspto 70 % off!</p>

    </section>

    <!-- Filter buttons -->
    <section id="filter-buttons-container" class="flex">
        <div>
            <div class="filter-title">
                <h1>Collections</h1>
            </div>
            <div class="filter-buttons filter-button-group">
                <button type="button" id="allItemsBtn"class="normal" data-filter="*">All</button>
                @if ($categories->count())
                    @foreach ($categories as $category)
                        <button type="button" class="normal"
                            data-filter=".{{ $category->category_name }}">{{ $category->category_name }}</button>
                    @endforeach
                @else
                    <p>No. categories</p>
                @endif
            </div>
        </div>

    </section>

    <!-- Products -->


    <section id="product1" class="section-p1">

        <div class="pro-container">
            @foreach ($products as $product)
                <div class="pro {{ $product->category->category_name }}">
                    <img src="/storage/{{ $product->image }}" alt="{{ $product->image }}" />
                    <div class="des">
                        <span>{{ $product->category->category_name }}</span>
                        <a href="/product/{{ $product->slug }}">
                            <h5 class="font-bold">{{ $product->product_name }}</h5>
                        </a>
                        <div class="star">
                            @for ($i = 0; $i < $product->rating; $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                        </div>
                        <h4>Rp {{ number_format($product->total_price, 0, ',', '.') }}
                            @if ($product->discount)
                                <span class="line-through">Rp {{ $product->price }}
                            @endif
                        </h4>
                    </div>
                    <i class="fa fa-shopping-cart cart"></i>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Pagination -->

    <!-- <section id="pagination" class="section-p1">
                                                                <a href="#">1</a>
                                                                <a href="#">2</a>
                                                                <a href="#"><i class="fa fa-long-arrow-alt-right"></i></a>

                                                              </section> -->

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
            </div>y
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
    <script>
        // Shop Page Isotope Filter
        // init Isotope
        var $grid = $('.pro-container').isotope({
            // options
        });
        // filter items on button click
        $('.filter-button-group').on('click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue
            });
            // $grid.isotope({ layoutMode: 'fitColumns' });

        });
    </script>
@endsection
