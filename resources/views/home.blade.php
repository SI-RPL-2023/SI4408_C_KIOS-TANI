<x-app-layout>
    <div class="" style="height: 90vh;">
        <div id="carouselExampleCaptions" class="relative" style="height: 90vh;" data-te-carousel-init
            data-te-carousel-slide>
            <!--Carousel indicators-->
            <div class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
                data-te-carousel-indicators>
                <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="0"
                    data-te-carousel-active
                    class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="1"
                    class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-label="Slide 2"></button>
                <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="2"
                    class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-label="Slide 3"></button>
            </div>

            <!--Carousel items-->
            <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                <!--First item-->
                <div class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                    style="height: 90vh;" data-te-carousel-active data-te-carousel-item
                    style="backface-visibility: hidden">
                    <img src="/assets/home.png" class="block object-cover" alt="..." />
                </div>
                <!--Second item-->
                <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                    style="height: 90vh;" data-te-carousel-item style="backface-visibility: hidden">
                    <img src="/assets/home2.png" class="block object-cover" alt="..." />
                </div>
                <!--Third item-->
                <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                    style="height: 90vh;" data-te-carousel-item style="backface-visibility: hidden">
                    <img src="/assets/home3.png" class="block object-cover object-center" alt="..."
                        style="background-position: center;" />
                </div>
            </div>

            <!--Carousel controls - prev item-->
            <button
                class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                type="button" data-te-target="#carouselExampleCaptions" data-te-slide="prev">
                <span class="inline-block h-8 w-8">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </span>
                <span
                    class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
            </button>
            <!--Carousel controls - next item-->
            <button
                class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                type="button" data-te-target="#carouselExampleCaptions" data-te-slide="next">
                <span class="inline-block h-8 w-8">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </span>
                <span
                    class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
            </button>
        </div>
    </div>
    <div class="py-10 px-16">
        <div id="categories">
            <div class="flex items-center justify-around">
                <p class="text-3xl">Shop <span class="text-[#06B24B]">by Categories</span></p>
                <div class="flex items-center bg-[#0B714C] opacity-75 w-8/12 rounded-xl pl-2" id="search-bar">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="white" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                    <input class="w-full text-white bg-transparent border-0 placeholder:text-white focus:ring-0"
                        type="text" placeholder="Search">
                </div>
                <a href="{{ route('cart') }}">
                    <div>
                        <img class="w-7/12" src="/assets/svg/cart.png" alt="">
                    </div>
                </a>
            </div>
            <!-- Categories -->
            <div class="flex mt-10">
                <div class="w-11/12 flex justify-around">
                    @foreach($category as $categories)
                    <a href="/product/filter/{{ $categories->id }}" class="w-1/12">
                        <div
                            class="w-full h-full grid place-items-center
                                @if($categories->category_name == 'Sets')
                                bg-[#8EE6AC]
                                @elseif($categories->category_name == 'Fruits')
                                bg-[#DDFFE9]
                                @elseif($categories->category_name == 'Veegies')
                                bg-[#F8E9F1]
                                @elseif($categories->category_name == 'Fungi')
                                bg-[#D4D1F6]
                                @elseif($categories->category_name == 'Greenery')
                                bg-[#FAFEC7]
                                @elseif($categories->category_name == 'Spices')
                                bg-[#FFD4CE]
                                @elseif($categories->category_name == 'Seeds')
                                bg-[#EFECFF]
                                @endif
                                rounded-xl p-5 hover:border-2 hover:border-[#27bd73] hover:scale-95 transition-all">
                            <div class="flex w-8/12 flex-col items-center">
                                <img class="w-full" src="/assets/svg/{{ $categories->foto }}" alt="">
                                <p class="font-bold">{{ $categories->category_name }}</p>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
                <div class="w-1/12 grid place-items-center">
                    <div class="flex gap-4">

                        <div class="bg-white w-fit p-1 h-fit rounded-full shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                            </svg>

                        </div>
                        <div class="bg-[#03BA62] w-fit p-1 h-fit rounded-full shadow-lg"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="white" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-around mt-10">
            <div class="flex justify-between bg-white w-3/12 p-4 rounded-xl shadow-lg">
                <div class="w-6/12">
                    <p class="text-xl font-bold">Vegetarian and<br>
                        Vegan Products</p>
                    <button
                        class="bg-[#0B714C] hover:bg-[#2b5e35] transition-all text-white px-3 py-1 rounded-full mt-10">Show
                        Now</button>
                </div>
                <div class="w-5/12">
                    <img class="w-full" src="/assets/svg/vegetarian.png" alt="">
                </div>
            </div>
            <div class="flex justify-between bg-white w-3/12 p-4 rounded-xl shadow-lg">
                <div class="w-5/12">
                    <p class="text-xl font-bold">High Quality<br>
                        Fruits</p>
                    <button
                        class="bg-[#0B714C] hover:bg-[#2b5e35] transition-all text-white px-3 py-1 rounded-full mt-10">Show
                        Now</button>
                </div>
                <div class="w-6/12">
                    <img class="w-full" src="/assets/svg/highfruits.png" alt="">
                </div>
            </div>
            <div class="flex justify-between bg-white w-3/12 p-4 rounded-xl shadow-lg">
                <div class="w-5/12">
                    <p class="text-xl font-bold">Best Seasonal<br>
                        Products</p>
                    <button
                        class="bg-[#0B714C] hover:bg-[#2b5e35] transition-all text-white px-3 py-1 rounded-full mt-10">Show
                        Now</button>
                </div>
                <div class="w-6/12">
                    <img class="w-full" src="/assets/svg/seasonal.png" alt="">
                </div>
            </div>
        </div>
        <!-- Popular Products -->
        <div class="mt-10" id="popularProduct">
            <p class="text-3xl">Popular <span class="text-[#06B24B]">Products</span></p>
            <div class="grid grid-cols-4 place-items-center place-content-evenly mt-5 gap-y-10 mx-auto">
                <!-- Card -->
                @foreach($product as $products)
                <div class="w-8/12 bg-white shadow-lg p-3 hover:scale-95 rounded-2xl transition-all cursor-pointer">
                    <div class="flex items-center 
                    @if($products->id < 3)    
                    justify-between
                    @else
                    justify-end
                    @endif
                    ">
                        @if ( $products->id  == 1)
                        <div class="w-fit px-4 py-1 bg-[#FF2D2D] text-white rounded-xl">
                            <p class="font-bold">Sale</p>
                        </div>
                        @elseif ( $products->id  == 2)
                        <div class="w-fit px-4 py-1 bg-[#53D888] text-white rounded-xl">
                            <p class="font-bold">New</p>
                        </div>
                        @endif
                        <svg xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="red" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>
                    </div>
                    <div class="w-10/12 mx-auto h-40 grid place-items-center">
                        <img class="object-contain" src="/assets/photo/{{ $products->foto }}" alt="">
                    </div>
                    <div>
                        <p class="text-[#969696] font-bold"></p>
                        <p class="font-bold">{{ $products->product_name }}</p>
                        <div class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#FFCB45" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="#FFCB45" class="w-3 h-3">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#FFCB45" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="#FFCB45" class="w-3 h-3">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#FFCB45" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="#FFCB45" class="w-3 h-3">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#FFCB45" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="#FFCB45" class="w-3 h-3">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#FFCB45" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="#FFCB45" class="w-3 h-3">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                        </div>
                        <p class="text-sm text-[#969696]">Price per {{ $products->unit }}</p>
                        <div class="flex justify-between items-center">
                            <p class="text-xl font-bold">@currency($products->price)</p>
                            <a href="{{ route('cart') }}">
                                <div class="bg-[#42D48E] px-2 py-1 rounded-xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="white" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                            </div>
                        </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Programs -->
        <div class="mt-10">
            <p class="text-3xl">Programs <span class="text-[#06B24B]">by Kios Tani</span></p>
            <div class="flex gap-6 justify-center mt-7">
                <div class="relative bg-white shadow-md w-5/12 h-3/5 p-10">
                    <p class="text-2xl font-bold text-[#06B24B] mb-4 text-center">Agriculture Trainning <br>Program</p>
                    <p class="mb-16">Kios Tani's Agriculture Training Program - Empowering Farmers for a Sustainable
                        Future<br><br>
                        At Kios Tani, we offer a comprehensive Agriculture Training Program for farmers of all levels.
                        Our program covers a range of topics, from soil health to market access, empowering farmers to
                        grow their businesses sustainably. Join us in building a sustainable future for all.</p>
                    <div class="flex justify-end absolute bottom-10 right-12">
                        <a href="{{ route('program')}}"><button
                                class="px-6 py-3 bg-[#42D48E] hover:bg-[#2b5e35] transition-all font-extrabold rounded-xl text-white">See
                                More...</button></a>
                    </div>
                </div>
                <div class="relative bg-white shadow-md w-5/12 p-10">
                    <p class="text-2xl font-bold text-[#06B24B] mb-4 text-center">Partnership<br>
                        Program</p>
                    <p>Our partnership program gives you access to our cutting-edge e-commerce platform, as well as our
                        comprehensive education program designed to help farmers grow their businesses sustainably. Join
                        us in revolutionizing agriculture e-commerce while empowering farmers with the knowledge and
                        resources they need to succeed.</p>
                    <div class="flex justify-end absolute bottom-10 right-12">
                        <a href="{{ route('partnership')}}"><button
                                class="px-6 py-3 bg-[#42D48E] hover:bg-[#2b5e35] transition-all font-extrabold rounded-xl text-white">See
                                More...</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-10">
            <p class="text-center text-3xl italic font-extrabold mb-10">About Us</p>
            <div class="flex justify-center">
                <div class="w-4/12 bg-white p-5 border rounded-2xl">
                    <img class="object-contain" src="/assets/login.png" alt="">
                </div>
                <div class="w-4/12 border rounded-2xl p-5 bg-white">
                    <p class="text-center text-3xl italic font-extrabold my-10">Kios Tani</p>
                    <p class="text-center">Focusing on the B2B Industry with a technology-supported food ecosystem, Kios
                        Tani strives to
                        create a food market with stable prices and aims to improve the quality life of local producers.
                        Together with Kios Tani, we will be FEEDING THE NATION! Kios Tani has worked with hundreds of
                        local farmers and dozens of raw material suppliers to provide all the culinary business needs of
                        our thousands of customers. Want to be a part of Kios Tani?</p>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full relative z-0 mt-10 bg-[#9BD9AA] py-10 px-20">
        <div class="flex justify-around z-10">
            <div class="bg-[#DDFFE9] py-5 flex flex-col gap-2 items-center w-3/12 rounded-3xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-16 h-16">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                </svg>
                <p class="font-extrabold">Our Main Office</p>
                <p class="text-center">Jl. Telekomunikasi No 100<br>Bandung 4515</p>
            </div>
            <div class="bg-[#DDFFE9] py-5 flex flex-col gap-2 items-center w-3/12 rounded-3xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-16 h-16">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                </svg>
                <p class="font-extrabold">Our Contact</p>
                <p>08723415342</p>
            </div>
            <div class="bg-[#DDFFE9] py-5 flex flex-col gap-2 items-center w-3/12 rounded-3xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-16 h-16">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                </svg>
                <p class="font-extrabold">Email</p>
                <p>kiostani@mail.com</p>
            </div>
        </div>
        <div class="flex justify-between mt-16">
            <form class="w-1/2" action="">
                <div class="flex items-center gap-10 w-full">
                    <div class="w-5/12">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            placeholder="enter a valid email address" :value="old('email')" required
                            autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="w-5/12">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                            placeholder="enter your name" required autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                </div>
                <div class="flex items-center gap-10">
                    <div class="w-5/12">
                        <x-input-label for="message" :value="__('Message')" />
                        <x-text-input id="message" class="block mt-1 w-full" type="text" name="message"
                            :value="old('name')" placeholder="enter your message" required autocomplete="message" />
                        <x-input-error :messages="$errors->get('message')" class="mt-2" />
                    </div>
                    <div class="w-5/12">
                        <button class="w-full bg-[#0B4619] text-lg text-white font-bold py-2 px-8 rounded-lg mt-5">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
            <div class="w-2/5">
                <div class="flex flex-col items-end justify-end">
                    <div class="pr-10">
                        <h1 class="text-4xl font-extrabold">GET IN TOUCH</h1>
                        <p>Lets empowering farmers for a sustainable future </p>
                        <div class="flex mt-3 text-2xl">
                            <a href="">
                                <i class='bx bxl-facebook mr-2'></i>
                            </a>
                            <a href="">
                                <i class='bx bxl-instagram mr-3'></i>
                            </a>
                            <a href="">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute top-0 left-0 -z-10 w-full h-20 bg-[#2b5e36]"></div>
    </div>
</x-app-layout>
