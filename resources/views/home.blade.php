@extends('components.layout')


@section('user_content')
    <section class="mt-10">
        <div class="grid my-10 grid-cols-2 lg:grid-cols-4 md:grid-cols-3 gap-y-6 md:px-10 md:gap-y-10">
            @foreach ($products as $product)
                <div class=" pl-0">
                    <div class="w-[163px] h-fit mx-auto md:w-[238px] md:h-[357px] lg:w-[297px] lg:h-[445px]">
                        <img src="/storage/{{ $product->image }}" alt="" class="w-full md:h-full object-cover">
                    </div>
                    <div class="text-center mt-4 text-xs">
                        <h1 class="">{{ $product->product_name }}</h1>
                        <div class="flex justify-center items-center">
                            @for ($i = 0; $i < $product->rating; $i++)
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4"
                                    viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                            @endfor


                            <span class="text-xs ml-2 my-2">(66)</span>
                        </div>
                        <span>Rp {{ $product->price }} @if ($product->discount)
                                <span class="line-through">Rp {{ $product->discount }}</span>
                            @endif
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="max-w-screen-lg mx-auto">
            {{ $products->links() }}
        </div>
    </section>
@endsection
