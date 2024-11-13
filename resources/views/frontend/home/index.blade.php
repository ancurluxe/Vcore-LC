@extends('frontend.layout.master')
@section('content')
    <!-- Swiper -->
    <section>
        <div class="swiper mySwiper">

            <div class=" swiper-wrapper">
                {{-- slide-1 --}}
                <div class="swiper-slide ">
                    <img class="w-full h-[100vh] object-cover"
                        src="{{ asset('frontend/images/Screenshot 2024-09-30 110046.png') }}" alt="">

                    <div class="absolute bg-black opacity-[40%] inset-0 "> </div>
                    <div class=" absolute top-[30%] left-[10%] ">
                        <div class=" p-4 space-y-6 xl:space-y-8 text-start ">
                            <p class="md:text-6xl text-3xl 2xl:text-9xl text-secondary font-bold">Vcore Leading Circuitry</p>
                            <p class="text-white  2xl:text-5xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Suspendisse
                                varius enim
                                in eros.</p>
                            <button
                                class=" md:px-6  px-4 p-2 md:p-3 2xl:px-14 2xl:p-6 2xl:text-4xl bg-primary rounded-md text-secondary effect effect-1">See
                                more</button>

                        </div>
                    </div>
                </div>
                {{-- slide-2 --}}
                <div class="swiper-slide ">
                    <img class="w-full h-[100vh] object-cover"
                        src="{{ asset('frontend/images/Screenshot 2024-09-30 110046.png') }}" alt="">

                    <div class="absolute bg-black opacity-[40%] inset-0 "> </div>
                    <div class=" absolute top-[30%] left-[10%] ">
                        <div class=" p-4 space-y-6 xl:space-y-8 text-start ">
                            <p class="md:text-6xl text-3xl 2xl:text-9xl text-secondary font-bold">Vcore Leading Circuitry
                            </p>
                            <p class="text-white  2xl:text-5xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Suspendisse
                                varius enim
                                in eros.</p>
                            <button
                                class=" md:px-6  px-4 p-2 md:p-3 2xl:px-14 2xl:p-6 2xl:text-4xl bg-primary rounded-md text-secondary more-button raise">See
                                more</button>

                        </div>
                    </div>
                </div>
                {{-- slide-3 --}}
                <div class="swiper-slide ">
                    <img class="w-full h-[100vh] object-cover"
                        src="{{ asset('frontend/images/Screenshot 2024-09-30 110046.png') }}" alt="">

                    <div class="absolute bg-black opacity-[40%] inset-0 "> </div>
                    <div class=" absolute top-[30%] left-[10%] ">
                        <div class=" p-4 space-y-6 xl:space-y-8 text-start ">
                            <p class="md:text-6xl text-3xl 2xl:text-9xl text-secondary font-bold">Vcore Leading Circuitry
                            </p>
                            <p class="text-white  2xl:text-5xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Suspendisse
                                varius enim
                                in eros.</p>
                            <button
                                class=" md:px-6  px-4 p-2 md:p-3 2xl:px-14 2xl:p-6 2xl:text-4xl bg-primary rounded-md text-secondary more-button raise">See
                                more</button>

                        </div>
                    </div>
                </div>
                {{-- slide-4 --}}
                <div class="swiper-slide ">
                    <img class="w-full h-[100vh] object-cover"
                        src="{{ asset('frontend/images/Screenshot 2024-09-30 110046.png') }}" alt="">

                    <div class="absolute bg-black opacity-[40%] inset-0 "> </div>
                    <div class=" absolute top-[30%] left-[10%] ">
                        <div class=" p-4 space-y-6 xl:space-y-8 text-start ">
                            <p class="md:text-6xl text-3xl 2xl:text-9xl text-secondary font-bold">Vcore Leading Circuitry
                            </p>
                            <p class="text-white  2xl:text-5xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Suspendisse
                                varius enim
                                in eros.</p>
                            <button
                                class=" md:px-6  px-4 p-2 md:p-3 2xl:px-14 2xl:p-6 2xl:text-4xl bg-primary rounded-md text-secondary more-button raise">See
                                more</button>

                        </div>
                    </div>
                </div>
                {{-- slide-5 --}}
                <div class="swiper-slide ">
                    <img class="w-full h-[100vh] object-cover"
                        src="{{ asset('frontend/images/Screenshot 2024-09-30 110046.png') }}" alt="">

                    <div class="absolute bg-black opacity-[40%] inset-0 "> </div>
                    <div class=" absolute top-[30%] left-[10%] ">
                        <div class=" p-4 space-y-6 xl:space-y-8 text-start ">
                            <p class="md:text-6xl text-3xl 2xl:text-9xl text-secondary font-bold">Vcore Leading Circuitry
                            </p>
                            <p class="text-white  2xl:text-5xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Suspendisse
                                varius enim
                                in eros.</p>
                            <button
                                class=" md:px-6  px-4 p-2 md:p-3 2xl:px-14 2xl:p-6 2xl:text-4xl bg-primary rounded-md text-texting more-button raise">See
                                more</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next text-primary"></div>
            <div class="swiper-button-prev text-primary"></div>
        </div>
    </section>

    {{-- About us --}}
    <div class=" my-10 flex justify-center items-baseline ">
        <div class="">
            <h1 class="text-primary flex justify-center text-xl font-medium">
                About <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                <div class="line"></div>
            </h1>
            <p class=" text-4xl font-bold justify-center flex text-center px-4 md:px-0">
                Know about us
            </p>
        </div>
    </div>
    <section class="container xl:flex mb-10 space-y-4 lg:space-y-0">
        <div class="grid xl:grid-cols-2 2xl:gap-72 xl:gap-20">
            <div class="relative mb-10">
                <!-- {{-- main-img --}} -->
                <img class="sm:w-[480px] sm:h-[380px] h-64 lg:w-[650px] object-cover rounded-br-[80px] rounded-tl-[80px]"
                    src="{{ asset('frontend/images/Screenshot 2024-09-30 110342.png') }}" alt="" />

                <!-- {{-- Outlines --}} -->
                <div
                    class="outline outline-blue-900 h-64 w-[345px] md:h-[360px] md:w-[490px] lg:w-[700px] xl:w-[520px] 2xl:w-[670px] rounded-br-[80px] rounded-tl-[80px] absolute -top-4 left-2 md:left-[22px] 2xl:left-8 ">
                </div>

                <div class="outline outline-1 w-20 outline-white bottom-10 md:bottom-9 absolute hidden md:block">
                </div>

                <div
                    class="outline outline-1 w-0 h-20 outline-white bottom-0 left-5  2xl:left-[30px] absolute hidden md:block">
                </div>

                <!-- {{-- overlapping img --}} -->
                <img class=" h-52 w-72 lg:w-[480px] lg:h-72 xl:w-[360px] xl:h-72 2xl:w-[400px] rounded-br-[80px] rounded-tl-[80px] absolute top-10 right-5 lg:-right-12 lg:top-32 xl:-right- 2xl:-right-60 outline outline-white lg:outline-4 xl:outline-2 2xl:outline-4 hidden md:block "
                    src="{{ asset('frontend/images/Screenshot 2024-09-30 110154.png') }}" alt="" />

            </div>

            <!-- {{-- Text --}} -->
            <div class="md:w-[600px] text-start leading-7 space-y-4">
                <p class="text-2xl font-semibold text-primary">
                    Expert Admission Counseling Services
                </p>

                <p>
                    Unity Group of Studies boasts a team of experienced and certified
                    counsellors dedicated to providing personalised career counselling for
                    each student. We guide them in selecting the right course and study
                    destination to ensure a bright future abroad. With longstanding
                    reputation for excellence, we have received accolades from students,
                    parents, and numerous educational providers.
                </p>

                <p>
                    When students book a counselling session with us, we meticulously
                    assess their academic profile, English proficiency, financial
                    circumstances, study gaps, immigration history, and future
                    aspirations. Based on this we recommend the most suitable institutions
                    and destinations.
                </p>
                <button class="mt-3 raise px-5 p-2 rounded-md bg-button text-texting font-medium more-button">Learn
                    more</button>
            </div>
        </div>
    </section>

    {{-- Products --}}

    <section class="bg-[#eaf1f5] py-10">
        <div class="">
            <h1 class="flex justify-center text-xl font-medium text-primary">
                Products
                <div class="line"></div>
            </h1>
            <p class="text-[#primary] text-4xl font-bold justify-center flex text-center px-4 md:px-0">
                Explore our products
            </p>
        </div>

        <!-- Cards -->
        <div class=" container gap-5 grid lg:grid-cols-3 md:grid-cols-2 2xl:grid-cols-4 grid-cols-1  my-10 ">
            <!-- card-1 -->
            <div class="relative overflow-hidden raise hover:shadow-lg hover:shadow-primary hover:rounded-xl">
                <img class="h-72 rounded-xl object-cover"
                    src="{{ asset('frontend/images/Screenshot 2024-09-30 110342.png') }}" alt="" />

                <div
                    class="w-auto xl:w-[345px] 2xl:w-[375px] items-center lg:w-[268px] left-[7px] right-[6px] shadow-xl p-1 px-3 rounded-xl absolute bottom-2 bg-white ">
                    <div class="flex  justify-between">
                        <p class="text-secondary">#C12E2A</p>
                        <p class=" text-secondary">By Vcore LC</p>
                    </div>
                    <div class="flex justify-between ">
                        <p class="text-xl font-bold">Tcon</p>
                        <a href="#products">
                            <i class="ri-shopping-cart-2-line bg-button rounded-full px-2 py-1 text-white"></i></a>
                    </div>
                </div>
            </div>
            <!-- card-2 -->
            <div class="relative overflow-hidden raise hover:shadow-lg hover:shadow-button hover:rounded-xl ">
                <img class="h-72 rounded-xl object-cover"
                    src="{{ asset('frontend/images/Screenshot 2024-09-30 110342.png') }}" alt="" />

                <div
                    class="w-auto xl:w-[345px] 2xl:w-[375px] items-center lg:w-[268px] left-[7px] right-[6px] shadow-xl p-1 px-3 rounded-xl absolute bottom-2 bg-white ">
                    <div class="flex  justify-between">
                        <p class="text-secondary">#C12E2A</p>
                        <p class=" text-secondary">By Vcore LC</p>
                    </div>
                    <div class="flex justify-between ">
                        <p class="text-xl font-bold">Tcon</p>
                        <a href="#products">
                            <i class="ri-shopping-cart-2-line bg-button rounded-full px-2 py-1 text-white"></i></a>
                    </div>
                </div>
            </div>
            <!-- card-3 -->
            <div class="relative overflow-hidden raise hover:shadow-lg hover:shadow-green-800 hover:rounded-xl ">
                <img class="h-72 rounded-xl object-cover"
                    src="{{ asset('frontend/images/Screenshot 2024-09-30 110342.png') }}" alt="" />

                <div
                    class="w-auto xl:w-[345px] 2xl:w-[375px] items-center lg:w-[268px] left-[7px] right-[6px] shadow-xl p-1 px-3 rounded-xl absolute bottom-2 bg-white ">
                    <div class="flex  justify-between">
                        <p class="text-secondary">#C12E2A</p>
                        <p class=" text-secondary">By Vcore LC</p>
                    </div>
                    <div class="flex justify-between ">
                        <p class="text-xl font-bold">Tcon</p>
                        <a href="#products">
                            <i class="ri-shopping-cart-2-line bg-button rounded-full px-2 py-1 text-white"></i></a>
                    </div>
                </div>
            </div>
            <!-- card-4 -->
            <div class="relative overflow-hidden raise hover:shadow-lg hover:shadow-primary hover:rounded-xl">
                <img class="h-72 rounded-xl object-cover"
                    src="{{ asset('frontend/images/Screenshot 2024-09-30 110342.png') }}" alt="" />

                <div
                    class="w-auto xl:w-[345px] 2xl:w-[375px] items-center lg:w-[268px] left-[7px] right-[6px] shadow-xl p-1 px-3 rounded-xl absolute bottom-2 bg-white ">
                    <div class="flex  justify-between">
                        <p class="text-secondary">#C12E2A</p>
                        <p class=" text-secondary">By Vcore LC</p>
                    </div>
                    <div class="flex justify-between ">
                        <p class="text-xl font-bold">Tcon</p>
                        <a href="#products">
                            <i class="ri-shopping-cart-2-line bg-button rounded-full px-2 py-1 text-white"></i></a>
                    </div>
                </div>
            </div>
            <!-- card-5 -->
            <div class="relative overflow-hidden raise hover:shadow-lg hover:shadow-primary hover:rounded-xl">
                <img class="h-72 rounded-xl object-cover"
                    src="{{ asset('frontend/images/Screenshot 2024-09-30 110342.png') }}" alt="" />

                <div
                    class="w-auto xl:w-[345px] 2xl:w-[375px] items-center lg:w-[268px] left-[7px] right-[6px] shadow-xl p-1 px-3 rounded-xl absolute bottom-2 bg-white ">
                    <div class="flex  justify-between">
                        <p class="text-secondary">#C12E2A</p>
                        <p class=" text-secondary">By Vcore LC</p>
                    </div>
                    <div class="flex justify-between ">
                        <p class="text-xl font-bold">Tcon</p>
                        <a href="#products">
                            <i class="ri-shopping-cart-2-line bg-button rounded-full px-2 py-1 text-white"></i></a>
                    </div>
                </div>
            </div>
            <!-- card-6 -->
            <div class="relative overflow-hidden raise hover:shadow-lg hover:shadow-primary hover:rounded-xl">
                <img class="h-72 rounded-xl object-cover"
                    src="{{ asset('frontend/images/Screenshot 2024-09-30 110342.png') }}" alt="" />

                <div
                    class="w-auto xl:w-[345px] 2xl:w-[375px] items-center lg:w-[268px] left-[7px] right-[6px] shadow-xl p-1 px-3 rounded-xl absolute bottom-2 bg-white ">
                    <div class="flex  justify-between">
                        <p class="text-secondary">#C12E2A</p>
                        <p class=" text-secondary">By Vcore LC</p>
                    </div>
                    <div class="flex justify-between ">
                        <p class="text-xl font-bold">Tcon</p>
                        <a href="#products">
                            <i class="ri-shopping-cart-2-line bg-button rounded-full px-2 py-1 text-white"></i></a>
                    </div>
                </div>
            </div>
            <!-- card-7 -->
            <div class="relative overflow-hidden raise hover:shadow-lg hover:shadow-primary hover:rounded-xl">
                <img class="h-72 rounded-xl object-cover"
                    src="{{ asset('frontend/images/Screenshot 2024-09-30 110342.png') }}" alt="" />

                <div
                    class="w-auto xl:w-[345px] 2xl:w-[375px] items-center lg:w-[268px] left-[7px] right-[6px] shadow-xl p-1 px-3 rounded-xl absolute bottom-2 bg-white ">
                    <div class="flex  justify-between">
                        <p class="text-secondary">#C12E2A</p>
                        <p class=" text-secondary">By Vcore LC</p>
                    </div>
                    <div class="flex justify-between ">
                        <p class="text-xl font-bold">Tcon</p>
                        <a href="#products">
                            <i class="ri-shopping-cart-2-line bg-button rounded-full px-2 py-1 text-white"></i></a>
                    </div>
                </div>
            </div>
            <!-- card-8 -->
            <div class="relative overflow-hidden raise hover:shadow-lg hover:shadow-primary hover:rounded-xl">
                <img class="h-72 rounded-xl object-cover"
                    src="{{ asset('frontend/images/Screenshot 2024-09-30 110342.png') }}" alt="" />

                <div
                    class="w-auto xl:w-[345px] 2xl:w-[375px] items-center lg:w-[268px] left-[7px] right-[6px] shadow-xl p-1 px-3 rounded-xl absolute bottom-2 bg-white ">
                    <div class="flex  justify-between">
                        <p class="text-secondary">#C12E2A</p>
                        <p class=" text-secondary">By Vcore LC</p>
                    </div>
                    <div class="flex justify-between ">
                        <p class="text-xl font-bold">Tcon</p>
                        <a href="#products">
                            <i class="ri-shopping-cart-2-line bg-button rounded-full px-2 py-1 text-white"></i></a>
                    </div>
                </div>
            </div>

        </div>
        <!-- Button -->
        <div class="flex justify-center">
            <button class="slide  bg-button p-2 px-4 text-lg text-button outline outline-1">
                Explore All
            </button>
        </div>
    </section>

    {{-- Youtube --}}
    <section class="container py-10">
        <div class="">
            <h1 class="flex justify-center text-xl font-medium text-primary">
                Youtube
                <div class="line"></div>
            </h1>
            <p class="text-4xl font-bold justify-center flex text-center px-4 md:px-0">
                Explore our videos
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-20 py-10">
            <div class="space-y-5">
                <p class="text-4xl col-span-2 font-bold text-primary">Vcore Leading Circuitry</p>
                <p class="col-span-2 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius
                    enim in eros
                    elementum
                    tristique.</p>
                <p class="leading-7">
                    LCD LED TV Repair all kinds of TV Hardware & software solution Main board ,PSU, LED strip change,
                    firmware upgrade, EEPROM programing electronics parts review,modules review,tools review,books review
                    etc...
                    For Business enquiries only: vcorecircuitry@gmail.com.</p>
                <button class=" btn-4 raise px-5 p-2 rounded-md bg-button text-texting font-medium more-button">Learn
                    more</button>
            </div>


            <div class="relative">
                <img class="h-full xl:ml-40 rounded-lg" src="{{ asset('frontend/images/ss.png') }}" alt="">
                <div class="absolute bottom[50%] top-[40%] left-[45%] ">
                    <a href="https://www.youtube.com/watch?v=gcUHp8Wm7D0"><img class="h-20 "
                            src="{{ asset('frontend/images/—Pngtree—youtube social media 3d stereo_8704808.png') }}"
                            alt=""> </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Blogs --}}
    <section class="bg-[#eaf1f5] py-10  ">
        <div class="">
            <h1 class="flex justify-center text-xl font-medium">
                Blogs
                <div class="line"></div>
            </h1>
            <p class="text-[#primary] text-4xl font-bold justify-center flex text-center px-4 md:px-0">
                Explore our blogs
            </p>
        </div>
        {{-- cards --}}
        <div class="grid md:grid-cols-2  lg:grid-cols-3 xl:grid-cols-4 gap-5 py-10 container">

            {{-- card-1 --}}
            <div class="bg-white  hover-shadow shadow-md ">
                <div class="relative ">
                    <img class="w-full h-60" src="{{ asset('frontend/images/Screenshot 2024-09-30 110242.png') }}"
                        alt="">
                    <button class="font-bold text-xl bg-yellow-400 px-1 my-2 absolute top-1 right-1 rounded">News </button>

                </div>

                <div class="px-4 py-2">
                    <p class="text-gray-400 my-2 text-xl font-bold ">August 25, 2018</p>
                    <p class="font-bold text-primary">Some say education is process of gaining information</p>
                    <p class="line-clamp-2 my-2">Lorem ipsum dolor sit amet m ex, aperiam minus in consequatur error
                        voluptatum neque velit accusamus blanditiis quod.</p>

                    <a class="font-bold more-button text-button" href="#">Read More <i
                            class="ri-arrow-right-line "></i></a>
                </div>
            </div>

            {{-- card-2 --}}
            <div class="bg-white hover-shadow shadow-xl ">
                <div class="relative ">
                    <img class="w-full h-60" src="{{ asset('frontend/images/Screenshot 2024-09-30 110154.png') }}"
                        alt="">
                    <button class="font-bold text-xl bg-yellow-400 px-1 my-2 absolute top-1 right-1 rounded">News </button>

                </div>

                <div class="px-4 py-2">
                    <p class="text-gray-400 my-2 text-xl font-bold ">August 25, 2018</p>
                    <p class="font-bold text-primary">Some say education is process of gaining information</p>
                    <p class="line-clamp-2 my-2">Lorem ipsum dolor sit amet m ex, aperiam minus in consequatur error
                        voluptatum neque velit accusamus blanditiis quod.</p>
                    <a class="font-bold more-button text-button" href="#">Read More <i
                            class="ri-arrow-right-line"></i></a>
                </div>
            </div>

            {{-- card-3 --}}
            <div class="bg-white hover-shadow shadow-md ">
                <div class="relative ">
                    <img class="w-full h-60" src="{{ asset('frontend/images/Screenshot 2024-09-30 110327.png') }}"
                        alt="">
                    <button class="font-bold text-xl bg-yellow-400 px-1 my-2 absolute top-1 right-1 rounded">News </button>

                </div>

                <div class="px-4 py-2">
                    <p class="text-secondary my-2  font-bold ">August 25, 2018</p>
                    <p class="font-bold text-xl text-primary">Some say education is process of gaining information</p>
                    <p class="line-clamp-2 my-2">Lorem ipsum dolor sit amet m ex, aperiam minus in consequatur error
                        voluptatum neque velit accusamus blanditiis quod.</p>
                    <a class="font-bold more-button text-button" href="#">Read More <i
                            class="ri-arrow-right-line"></i></a>
                </div>
            </div>
            {{-- card-4 --}}
            <div class="bg-white hover-shadow shadow-md ">
                <div class="relative ">
                    <img class="w-full h-60" src="{{ asset('frontend/images/Screenshot 2024-09-30 110404.png') }}"
                        alt="">
                    <button class="font-bold text-xl bg-yellow-400 px-1 my-2 absolute top-1 right-1 rounded">News </button>

                </div>

                <div class="px-4 py-2">
                    <p class="text-secondary my-2  font-bold ">August 25, 2018</p>
                    <p class="font-bold text-xl text-primary">Some say education is process of gaining information</p>
                    <p class="line-clamp-2 my-2">Lorem ipsum dolor sit amet m ex, aperiam minus in consequatur error
                        voluptatum neque velit accusamus blanditiis quod.</p>
                    <a class="font-bold more-button text-button" href="#">Read More <i
                            class="ri-arrow-right-line"></i></a>
                </div>
            </div>

        </div>
    </section>

    {{-- contact --}}
    <section class="container">
        <div class="my-10">
            <h1 class="flex justify-center text-xl font-medium">
                Contact Us
                <div class="line"></div>
            </h1>
            <p class=" text-4xl font-bold justify-center flex text-center px-4 md:px-0">
                Reach out to us here
            </p>
        </div>
        <div class="flex flex-wrap gap-6 justify-center sm:space-x-8 py-8">
            <!-- Phone -->
            <div class="shadow-md w-60 p-3 rounded-xl flex gap-3 items-center">
                <div>
                    <i class="ri-phone-fill rounded-[50%] bg-button p-2 text-xl text-white"></i>
                </div>

                <div>
                    <p class="text-xl font-bold text-primary">Phone</p>
                    <p class="font-semibold text-button">1234 5678 1209</p>
                </div>
            </div>

            <!-- mail -->
            <div class="shadow-md w-60 p-3 rounded-xl flex gap-3 items-center">
                <div>
                    <i class="ri-mail-fill rounded-[50%] bg-button p-2 text-xl text-white"></i>
                </div>

                <div>
                    <p class="text-xl font-bold text-primary">Mail</p>
                    <p class="font-semibold text-button">ehehhe00@gmail.com</p>
                </div>
            </div>

            <!-- location -->
            <div class="shadow-md w-60 p-3 rounded-xl flex gap-3 items-center">
                <div>
                    <i class="ri-map-pin-2-fill rounded-[50%]  bg-button p-2 text-xl text-white"></i>
                </div>

                <div>
                    <p class="text-xl font-bold text-primary">Loacation</p>
                    <p class="font-semibold text-button">Kumaripati, Lalitpur</p>
                </div>
            </div>
        </div>
        {{-- form --}}
        <div class=" shadow-lg border-[1px] border-slate-100 rounded-lg">
            <div class="grid gap-20 lg:gap-8 lg:grid-cols-2 p-2 sm:p-10 ">

                <div>
                    <h1 class="font-semibold text-3xl">Write us</h1>
                    <p class="text-primary  text-lg mb-4">Please provide us with your information so we can ensure the best
                        experience for you❤️</p>
                    <img class="w-full h-full mt-5 rounded-lg object-cover"
                        src="{{ asset('frontend/images/Support_Hero.webp') }}" alt="contact">
                </div>

                <form class=" space-y-5" id="contactForm" action="https://www.youtube.com/@VcoreLC"
                    enctype="multipart/form-data" method="POST">
                    <input type="hidden" name="_token" value="6sx8ahfwqAcQxUGvwuBr9c9nRqwCl4STpkW0ebar"
                        autocomplete="off">
                    <div class="mt-5 lg:mt-10">
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="gap-2">
                                <div class="flex justify-between items-center">
                                    <label class="block text-lg" for="first_name">First Name <span
                                            class="text-[#e36139] text-xl">*</span></label>
                                </div>
                                <input
                                    class="py-3 px-4 block w-full border-texting rounded-lg sm:text-lg focus:border-texting focus:ring-blue-400 "
                                    id="first_name" type="text" name="first_name" placeholder="Your First Name"
                                    value="">
                            </div>

                            <div class="gap-2">
                                <div class="flex justify-between items-center">
                                    <label class="block text-lg" for="last_name">Last Name <span
                                            class="text-[#e36139] text-xl">*</span></label>
                                </div>
                                <input
                                    class="py-3 px-4 block w-full border-texting rounded-lg sm:text-lg focus:border-texting focus:ring-blue-400 disabled:opacity-50 disabled:pointer-events-none"
                                    id="last_name" type="text" name="last_name" placeholder="Your Last Name"
                                    value="">
                            </div>

                            <div class="max-w-sm">
                                <div class="flex justify-between">
                                    <label class="block text-lg" for="email">Email Address <span
                                            class="text-[#e36139] text-xl">*</span></label>
                                </div>
                                <input
                                    class="py-3 px-4 block w-full border-texting rounded-lg sm:text-lg focus:border-texting focus:ring-blue-400 disabled:opacity-50 disabled:pointer-events-none"
                                    id="email" type="email" name="email" placeholder="Email" value="">
                            </div>

                            <div class="max-w-sm">
                                <div class="flex justify-between">
                                    <label class="block text-lg" for="phone">Phone Number <span
                                            class="text-[#e36139] text-xl">*</span></label>
                                </div>
                                <input
                                    class="py-3 px-4 block w-full border-texting rounded-lg sm:text-lg focus:border-texting focus:ring-blue-400 disabled:opacity-50 disabled:pointer-events-none"
                                    id="phone" type="text" name="phone" placeholder="Your Phone Number"
                                    value="">
                            </div>
                        </div>

                        <div class="my-2">
                            <label class="block text-lg mb-2" for="message">Your Message <span
                                    class="text-[#e36139] text-xl">*</span></label>
                            <textarea
                                class="block w-full border-texting rounded-lg p-3 sm:text-lg focus:border-texting focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                id="message" name="message" rows="10" placeholder="Your Message"></textarea>
                        </div>

                        <button class="slide  bg-button p-2 px-4 text-lg text-button outline outline-1">
                           Submit
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </section>
{{-- map --}}
    <iframe class="2xl:w-[208vh w-[385px] md:w-full"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.6403871383663!2d84.42082237546704!3d27.697507476188235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fb464ba19801%3A0xfd6e487bfcad0daa!2sVcore%20LC!5e0!3m2!1sen!2snp!4v1731485450770!5m2!1sen!2snp"
        width="600" height="450" style="border:0; " allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->

    <script>
        const swipers = new Swiper('.swiper', {
            slidesPerView: 1,
            loop: true,
            autoplay: {
                delay: 3000, // delay between slides
                disableOnInteraction: true,
            },
            speed: 2000, // Smooth transition speed (adjust as needed)

        });
    </script>
@endsection
