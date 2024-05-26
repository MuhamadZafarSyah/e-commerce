@extends('components.layout')


@section('user_content')
    <!-- Hero -->
    <section id="hero">
        <h4 class="font-bold  md:text-xl">Trade-in-offer</h4>
        <h2 class="font-bold   text-3xl md:text-5xl mb-4">Super value deals</h2>
        <h1 class="font-bold text-3xl md:text-5xl">On all products</h1>
        <p class="my-4">Save more with coupons & up to 70 % off!</p>
        <button onclick="location.href='#product';">Shop Now</button>
    </section>

    <!-- Feature -->
    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="../img/features/f1.png" alt="" />
            <h6 class="font-bold text-sm">Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="../img/features/f2.png" alt="" />
            <h6 class="font-bold text-sm">Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="../img/features/f3.png" alt="" />
            <h6 class="font-bold text-sm">Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="../img/features/f4.png" alt="" />
            <h6 class="font-bold text-sm">Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="../img/f5.png" alt="">
            <h6 class="font-bold text-sm">Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="../img/features/f6.png" alt="" />
            <h6 class="font-bold text-sm">24/7 Support</h6>
        </div>
    </section>

    <!-- Featured products -->

    <section id="product1" class="section-p1">
        <h2 class="md:text-5xl text-3xl text-[#222] font-bold ">Featured Products</h2>
        <p class="my-4">Summer Collection New Modern Design</p>
        <div class="pro-container" id="product">
            @foreach ($products as $product)
                <div class="pro">
                    <a href="/product/{{ $product->slug }}">
                        <img src="/storage/{{ $product->image }}" alt="" />
                    </a>
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
        <button class="normal" onclick="location.href='/all-products';">Explore More</button>
    </section>

    <!-- New Arrivals -->
    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            @foreach ($products->skip(8) as $product)
                <div class="pro">
                    <img src="/storage/{{ $product->image }}" alt="" />
                    <div class="des">
                        <span>{{ $product->category->category_name }}</span>
                        <h5 class="font-bold">{{ $product->product_name }}</h5>
                        <div class="star">
                            @for ($i = 0; $i < $product->rating; $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                        </div>
                        <h4>Rp {{ $product->price }}
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
@endsection
