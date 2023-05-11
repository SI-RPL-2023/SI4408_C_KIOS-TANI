<x-app-layout>
    <div class="grid place-items-center" style="height:90vh">
        <div>
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
