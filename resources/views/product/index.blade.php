<x-app-layout>
    <div class="min-h-screen py-10 px-16">
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
                        <div class="w-full h-full grid place-items-center
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

        <div class="mt-10" id="popularProduct">
            <p class="text-3xl">Popular <span class="text-[#06B24B]">Products</span></p>
            <div class="grid grid-cols-4 place-items-center place-content-evenly mt-5 gap-y-10 mx-auto">
                <!-- Card -->
                @foreach($product as $products)
                <div class="w-8/12 bg-white shadow-lg p-3 hover:scale-95 rounded-2xl transition-all cursor-pointer">
                    <div class="flex items-center justify-end">
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
    </div>
</x-app-layout>
