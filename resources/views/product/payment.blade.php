<x-app-layout>
    <div class="min-h-screen py-10 px-16 flex justify-between gap-10">
        <form class="w-8/12" action="">
            <h1 class="text-4xl font-bold">Billing Details</h1>
            <p class="text-[#969696] font-semibold mb-5">Enter your details</p>
            <div class="w-full flex gap-5">
                <div class="w-1/2 mb-6">
                    <input type="name" id="name" name="name"
                    class="bg-[#c5dac8] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Name" required>
                </div>
                <div class="w-1/2 mb-6">
                    <input type="username" id="username" name="username"
                    class="bg-[#c5dac8] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Username" required>
                </div>
            </div>
            <div class="mb-6">
                <input type="email" id="email" name="email"
                class="bg-[#c5dac8] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="Email" required>
            </div>
            <div class="w-full flex gap-5">
                <div class="w-1/2 mb-6">
                    <input type="country" id="country" name="country"
                    class="bg-[#c5dac8] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Country" required>
                </div>
                <div class="w-1/2 mb-6">
                    <input type="city" id="city" name="city"
                    class="bg-[#c5dac8] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="City" required>
                </div>
            </div>
            <div class="w-full flex gap-5">
                <div class="w-1/2 mb-6">
                    <input type="phonenumber" id="phonenumber" name="phonenumber"
                    class="bg-[#c5dac8] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Phone Number" required>
                </div>
                <div class="w-1/2 mb-6">
                    <input type="zipcode" id="zipcode" name="zipcode"
                    class="bg-[#c5dac8] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Zip Code" required>
                </div>
            </div>
        </form>
        <div class="bg-white border-4 border-[#63ce95] w-4/12 mt-16 rounded-2xl py-8 px-5 h-fit">
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
</x-app-layout>
