<footer class="relative">
    <section class="grid md:grid-cols-3 lg:grid-cols-5 space-x-8 space-y-8 bg-primary px-12 py-12 pt-28">
        <div class="text-white flex flex-col pt-10">

            <div class="flex gap-2 items-center"> <i class="ri-book-open-fill text-yellow-400 text-4xl"></i>
                <p class="text-white text-2xl font-extrabold">Vcore LC</p>
            </div>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores repellat eaque, deserunt
                exercitationem,
                doloremque laborum. Sequi.</p>
            <div class=" py-5">
                <p class="font-bold">Follow Us :</p>
                <i class="text-texting ri-facebook-circle-fill"></i>
                <i class="text-texting ri-twitter-fill"></i>
                <i class="text-texting ri-pinterest-fill"></i>
                <i class="text-texting ri-instagram-fill"></i>
            </div>
        </div>

        {{-- Quick links --}}
        <div class=" flex flex-col ">
            <p class="text-lg font-bold  text-yellow-400 ">Quick links</p>
            <a class="text-texting" href="">Home</a>
            <a class="text-texting" href="">About</a>
            <a class="text-texting" href="">Contact</a>
            <a class="text-texting" href="">Services</a>
            <a class="text-texting" href="">Blogs</a>
        </div>
        {{--  inks --}}
        <div class=" flex flex-col ">
            <p class="text-lg font-bold  text-yellow-500 ">Text</p>
            <a class="text-texting" href="">Condition</a>
            <a class="text-texting" href="">Consultation</a>
            <a class="text-texting" href="">Our services</a>
            <a class="text-texting" href="">Contact Us</a>
            <a class="text-texting" href="">Get a Quote</a>
            <a class="text-texting" href="">Who We Are</a>
        </div>
        {{-- Recent posts --}}
        <div class=" space-y-4">
            <p class="text-lg font-bold  text-yellow-500 ">Recent Posts</p>

            <div class="flex gap-3">
                <img class="w-20" src="{{ asset('frontend/images/Screenshot 2024-09-30 110242.png') }}"
                    alt="">
                <div>
                    <p class="text-texting">Lorem ipsum dolor, sit amets.</p>
                    <div class="flex gap-1">
                        <i class="ri-time-fill text-yellow-500"></i>
                        <p class="text-texting">5 May,2024 </p>
                    </div>

                </div>
            </div>
            <div class=" ">
                <div class="flex gap-3">
                    <img class="w-20" src="{{ asset('frontend/images/Screenshot 2024-09-30 110210.png') }}"
                        alt="">
                    <div>
                        <p class="text-texting">Lorem ipsum dolor, sit amets.</p>
                        <div class="flex gap-1">
                            <i class="ri-time-fill text-yellow-500"></i>
                            <p class="text-texting">5 May,2024 </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        {{-- Contact us --}}
        <div class="  leading-">
            <p class="text-lg font-bold  text-yellow-500 ">Contact Us </p>
            <div class="flex gap-1">
                <i class="ri-headphone-fill text-yellow-500"></i>
                <p class="text-white"> +977 9855054737</p>
            </div>
            <div class="flex gap-1">
                <i class="ri-map-pin-fill text-yellow-500"></i>
                <p class="text-white"> 123 floor New Road</p>
            </div>
            <div class="flex gap-1">
                <i class="ri-mail-fill text-yellow-500"></i>
                <p class="text-white"> vcore@gmail.com</p>
            </div>

            <div class="pt-2">
                <p class="text-lg font-bold text-white">Opening Hours</p>
                <p class="text-white">Sun-Sat : 10:00 AM - 05:00 PM</p>
            </div>
        </div>
    </section>


    <div class="bg-secondary hidden lg:flex justify-center  gap-10 p-8  absolute -top-10 left-52 container w-[800px]">
        <div class="text-start">
            <p class="text-xl text-button font-bold">SUBSCRIBE</p>
            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis voluptates sim</p>
        </div>
        <div>
            <input class="rounded-md w-full" type="email" placeholder="enter email" id="">
        </div>

    </div>

    <div class="border-t-2 p-3 bg-primary text-white text-center">Copyright Policy @Vcore
        , 2024 </div>
</footer>
