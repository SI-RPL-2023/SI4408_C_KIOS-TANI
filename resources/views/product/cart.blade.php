<x-app-layout>
    <div class="min-h-screen py-10 px-16">
        <div class="flex justify-between">
            <div class="w-8/12">
                <p class="font-bold text-3xl">Shopping Cart</p>
                <p class="text-[#969696]">There are 3 products in your carts</p>
                <table class="text-center mt-10">
                    <tr class="border-b-2 border-[#03B35E] pt-2">
                        <th></th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                    <tr class="border-b-2 border-[#03B35E]">
                        <td class="pt-2">
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value=""
                                    class="w-6 h-6 text-[#42d48e] bg-gray-100 border-gray-300 rounded focus:ring-[#42d48e]">
                            </div>
                        </td>
                        <td class="w-3/12 py-2">
                            <div class="w-8/12 flex items-center gap-2 mx-auto">
                                <div class="bg-[#D4F2D9] rounded-2xl p-2">
                                    <img src="/assets/photo/onion.png" alt="">
                                </div>
                                <div class="text-left">
                                    <p class="font-semibold">Red Onion</p>
                                    <p class="text-[#969696]">Veggies</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p>Rp. 35.000</p>
                        </td>
                        <td class="w-3/12">
                            <div class="flex justify-center">
                                <input type="number" id="visitors"
                                    class="w-1/4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5"
                                    placeholder="" required>
                            </div>
                        </td>
                        <td>
                            <p>Rp. 70.000</p>
                        </td>
                        <td>
                            <button>
                                <i class='bx bxs-trash text-5xl'></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b-2 border-[#03B35E]">
                        <td class="pt-2">
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value=""
                                class="w-6 h-6 text-[#42d48e] bg-gray-100 border-gray-300 rounded focus:ring-[#42d48e]">
                            </div>
                        </td>
                        <td class="w-3/12 py-2">
                            <div class="w-8/12 flex items-center gap-2 mx-auto">
                                <div class="bg-[#D4F2D9] rounded-2xl p-2">
                                    <img src="/assets/photo/onion.png" alt="">
                                </div>
                                <div class="text-left">
                                    <p class="font-semibold">Red Onion</p>
                                    <p class="text-[#969696]">Veggies</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p>Rp. 35.000</p>
                        </td>
                        <td class="w-3/12">
                            <div class="flex justify-center">
                                <input type="number" id="visitors"
                                    class="w-1/4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5"
                                    placeholder="" required>
                            </div>
                        </td>
                        <td>
                            <p>Rp. 70.000</p>
                        </td>
                        <td>
                        <button>
                                <i class='bx bxs-trash text-5xl'></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b-2 border-[#03B35E]">
                        <td class="pt-2">
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value=""
                                class="w-6 h-6 text-[#42d48e] bg-gray-100 border-gray-300 rounded focus:ring-[#42d48e]">
                            </div>
                        </td>
                        <td class="w-3/12 py-2">
                            <div class="w-8/12 flex items-center gap-2 mx-auto">
                                <div class="bg-[#D4F2D9] rounded-2xl p-2">
                                    <img src="/assets/photo/onion.png" alt="">
                                </div>
                                <div class="text-left">
                                    <p class="font-semibold">Red Onion</p>
                                    <p class="text-[#969696]">Veggies</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p>Rp. 35.000</p>
                        </td>
                        <td class="w-3/12">
                            <div class="flex justify-center">
                                <input type="number" id="visitors"
                                    class="w-1/4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5"
                                    placeholder="" required>
                            </div>
                        </td>
                        <td>
                            <p>Rp. 70.000</p>
                        </td>
                        <td>
                        <button>
                                <i class='bx bxs-trash text-5xl'></i>
                            </button>
                        </td>
                    </tr>
                </table>
                <div class="flex gap-2 items-center  mt-2">
                    <a href="{{ route('product') }}">
                        <div class="bg-white rounded-full w-fit p-2 shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                            </svg>
                        </div>
                    </a>
                    <p class="font-bold">Back to Shopping</p>
                </div>
            </div>
            <div class="bg-white border-4 border-[#63ce95] w-3/12 mt-16 rounded-2xl py-8 px-5 h-fit">
                <div class="flex border-b-2 border-[#03B35E] mb-8">
                    <p>Subtotal:</p>
                    <p></p>
                </div>
                <div class="flex border-b-2 border-[#03B35E] mb-8">
                    <p>Shipping:</p>
                    <p></p>
                </div>
                <div class="flex border-b-2 border-[#03B35E] mb-8">
                    <p>Discount:</p>
                    <p></p>
                </div>
                <div class="flex border-b-2 border-[#03B35E] mb-8">
                    <p>Total:</p>
                    <p></p>
                </div>
                <div class="flex justify-center">
                    <a href="{{ route('payment') }}">
                        <button class="bg-[#0B714C] rounded-2xl text-white py-2 px-5">CHECK OUT NOW</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
