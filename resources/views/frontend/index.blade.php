<x-guest-layout>

    <!-- =========== Hero Section START =========== -->

    <section class="bg-[#FFFFFFA6] lg:py-16 md:py-16 py-5">
        <div class="container mx-auto md:w-2/3 lg:w-3/4">

            <h1 class="text-[#16163f] text-center font-semibold lg:text-[48px] text-[22px] uppercase py-8"> Exclusive
                Holiday Homes</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-10">

                <div class=" flex lg:justify-end justify-center items-center">
                    <div class="rounded-[25px] relative shadow-2xl">
                        <div>
                            <img class="w-[420px] h-[480px] rounded-[25px] object-cover"
                                src="{{ asset('frontend/assets/images/hero/dubai.webp') }}" alt="">
                            <button
                                class="absolute top-[50%] right-[50%] translate-x-1/2 text-white font-light text-[48px] z-20 ">
                                Dubai
                            </button>
                        </div>
                        <div
                            class="absolute lg:w-[420px] md:w-[420px] w-full h-[480px] inset-0 bg-[#16163f] z-10 rounded-[25px] bg-opacity-40">
                        </div>
                    </div>
                </div>

                <div class=" flex lg:justify-start justify-center items-center">
                    <div class="rounded-[25px] relative shadow-2xl">
                        <div>
                            <img class="w-[420px] h-[480px] rounded-[25px] object-cover"
                                src="{{ asset('frontend/assets/images/hero/bodrum.jpg') }}" alt="">
                            <button
                                class="absolute top-[50%] right-[50%] translate-x-1/2 text-white font-light text-[48px] z-20 ">
                                Bodrum
                            </button>
                        </div>
                        <div
                            class="absolute lg:w-[420px] md:w-[420px] w-full h-[480px] inset-0 bg-[#16163f] z-10 rounded-[25px] bg-opacity-40">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========== Hero Section END =========== -->

    <!-- =========== Dream Holiday Section START =========== -->

    <section class="py-10">
        <div class="container mx-auto sm:w-1/2 md:w-2/3 lg:w-3/4 px-10">

            <div class="border rounded-lg lg:p-14 p-5 border-[#16163F4F]">
                <h2 class="text-[#333] font-semibold text-center lg:text-[32px] text-[22px] pb-5"> Your Dream Holiday Home </h2>
                <p class="text-[15px] font-light text-[#333]"> Hi, we are Exclusive Holiday Homes, a licensed short term rental
                    operator based in Dubai. As our name suggests, our properties are exclusive, and truly best in
                    class. We maintain our properties with no expense spared, and look after our guests with their every
                    request. The result is the happiest customers who stay with us time and time again. We provide
                    ongoing support and butler service throughout your stay, effectively filling the gap between luxury
                    hotels and holiday homes.</p>
            </div>

        </div>
    </section>

    <!-- =========== Dream Holiday Section END =========== -->

    <!-- =========== Clients Reviews Section START =========== -->

    <section class="lg:py-10 py-5">
        <div class="container mx-auto sm:w-1/2 md:w-2/3 lg:w-3/4">

            <h2 class="text-[#333] font-semibold text-center lg:text-[32px] text-[22px] py-5">Clients Reviews </h2>

                <div class="owl-carousel">

                    <!-- carousel 1 -->
                    <div class="bg-white lg:p-14 p-5">
                        <div class="flex justify-evenly shadow-lg border-2 rounded-lg p-5">
                            <div class="flex gap-5">
                                <img class=" border-2 border-gray-300 object-cover" style="border-radius: 50%; width: 40%; height: 24%; margin-left: -50px";
                                src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
                                <div>
                                    <h2 class="text-gray-800 text-sm font-semibold">Miata</h2>
                                    <p class="text-[#333] text-sm font-light"> 21-08-12</p>
                                    <ul class="list-none flex">
                                        <li> <i class="fa-solid fa-star text-red-800 text-sm"></i></li>
                                        <li> <i class="fa-solid fa-star text-red-800 text-sm"></i></li>
                                        <li> <i class="fa-solid fa-star text-red-800 text-sm"></i></li>
                                        <li> <i class="fa-solid fa-star text-red-800 text-sm"></i></li>
                                        <li> <i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <p class="mt-2 text-gray-600 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae
                                        dolores deserunt ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic,
                                        suscipit in a veritatis pariatur minus consequuntur!</p>
                                </div>
                            </div>
                            <div>
                                <img class="w-[8rem] h-[3rem] object-content" src="{{ asset('frontend/assets/images/testimunial/icon.svg') }}">
                            </div>
                        </div>
                    </div>

                    <!-- carousel 2 -->
                    <div class="bg-white lg:p-14 p-5">
                        <div class="flex justify-between shadow-lg border-2 rounded-lg p-5">
                            <div class="flex gap-5">
                                <img class=" border-2 border-gray-300 object-cover" style="border-radius: 50%; width: 40%; height: 24%; margin-left: -50px";
                                src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
                                <div>
                                    <h2 class="text-gray-800 text-sm font-semibold">Design Tools</h2>
                                    <p class="text-[#333] text-sm font-light"> 21-08-12</p>
                                    <ul class="list-none flex">
                                        <li> <i class="fa-solid fa-star text-red-800 text-sm"></i></li>
                                        <li> <i class="fa-solid fa-star text-red-800 text-sm"></i></li>
                                        <li> <i class="fa-solid fa-star text-red-800 text-sm"></i></li>
                                        <li> <i class="fa-solid fa-star text-red-800 text-sm"></i></li>
                                        <li> <i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <p class="mt-2 text-gray-600 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae
                                        dolores deserunt ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic,
                                        suscipit in a veritatis pariatur minus consequuntur!</p>
                                </div>
                            </div>
                            <div>
                                <img class="w-[8rem] h-[3rem] object-content" src="{{ asset('frontend/assets/images/testimunial/icon.svg') }}">
                            </div>
                        </div>
                    </div>

                    <!-- carousel 3 -->
                    <div class="bg-white lg:p-14 p-5">
                        <div class="flex justify-between shadow-lg border-2 rounded-lg p-5">
                            <div class="flex gap-5">
                                <img class=" border-2 border-gray-300 object-cover" style="border-radius: 50%; width: 40%; height: 24%; margin-left: -50px";
                                src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
                                <div>
                                    <h2 class="text-gray-800 text-sm font-semibold">Design Tools</h2>
                                    <p class="text-[#333] text-sm font-light"> 21-08-12</p>
                                    <ul class="list-none flex">
                                        <li> <i class="fa-solid fa-star text-red-800 text-sm"></i></li>
                                        <li> <i class="fa-solid fa-star text-red-800 text-sm"></i></li>
                                        <li> <i class="fa-solid fa-star text-red-800 text-sm"></i></li>
                                        <li> <i class="fa-solid fa-star text-red-800 text-sm"></i></li>
                                        <li> <i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <p class="mt-2 text-gray-600 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae
                                        dolores deserunt ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic,
                                        suscipit in a veritatis pariatur minus consequuntur!</p>
                                </div>
                            </div>
                            <div>
                                <img class="w-[8rem] h-[3rem] object-content" src="{{ asset('frontend/assets/images/testimunial/icon.svg') }}">
                            </div>
                        </div>
                    </div>

                </div>
    </section>

    <!-- =========== Clients Reviews Section END =========== -->

    <!-- =========== Featured Section START =========== -->

    <section class="py-5 bg-white">
        <div class="container mx-auto sm:w-1/2 md:w-2/3 lg:w-3/4">

            <h2 class="text-[#333] font-semibold text-center lg:text-[32px] text-[22px] lg:py-16 py-10"> Featured Homes </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">

                <!-- Blog Content Item 1 -->
                <div class="flex flex-col bg-white shadow-md rounded-lg border">
                    <a href="">
                        <img src="{{ asset('frontend/assets/images/featured/f-1.webp') }}" alt="Blog Image 1"
                            class="rounded-t-lg max-w-full h-auto">
                    </a>
                    <div class="p-5 bg-white rounded-lg">
                        <a href="#">
                            <h5 class="text-lg font-semibold mt-2">Five Palm Beach Villa with Private Pool</h5>
                        </a>
                        <p class="mt-3 font-normal text-sm text-gray-700 dark:text-gray-400">Dubai, United Arab Emirates.</p>
                    </div>
                </div>

                 <!-- Blog Content Item 2 -->
                 <div class="flex flex-col bg-white shadow-md rounded-lg border">
                    <a href="">
                        <img src="{{ asset('frontend/assets/images/featured/f-2.webp') }}" alt="Blog Image 1"
                            class="rounded-t-lg max-w-full h-auto">
                    </a>
                    <div class="p-5 bg-white rounded-lg">
                        <a href="#">
                            <h5 class="text-lg font-semibold mt-2">Five Palm Beach Villa with Private Pool</h5>
                        </a>
                        <p class="mt-3 font-normal text-sm text-gray-700 dark:text-gray-400">Dubai, United Arab Emirates.</p>
                    </div>
                </div>

                <!-- Blog Content Item 3 -->
                <div class="flex flex-col bg-white shadow-md rounded-lg border">
                    <a href="">
                        <img src="{{ asset('frontend/assets/images/featured/f-3.webp') }}" alt="Blog Image 1"
                            class="rounded-t-lg max-w-full h-auto">
                    </a>
                    <div class="p-5 bg-white rounded-lg">
                        <a href="#">
                            <h5 class="text-lg font-semibold mt-2">Five Palm Beach Villa with Private Pool</h5>
                        </a>
                        <p class="mt-3 font-normal text-sm text-gray-700 dark:text-gray-400">Dubai, United Arab Emirates.</p>
                    </div>
                </div>

                <!-- Blog Content Item 4 -->
                <div class="flex flex-col bg-white shadow-md rounded-lg border">
                    <a href="">
                        <img src="{{ asset('frontend/assets/images/featured/f-4.jpeg') }}" alt="Blog Image 1"
                            class="rounded-t-lg max-w-full h-auto">
                    </a>
                    <div class="p-5 bg-white rounded-lg">
                        <a href="#">
                            <h5 class="text-lg font-semibold mt-2">Five Palm Beach Villa with Private Pool</h5>
                        </a>
                        <p class="mt-3 font-normal text-sm text-gray-700 dark:text-gray-400">Dubai, United Arab Emirates.</p>
                    </div>
                </div>

                <!-- Blog Content Item 5 -->
                <div class="flex flex-col bg-white shadow-md rounded-lg border">
                    <a href="">
                        <img src="{{ asset('frontend/assets/images/featured/f-5.jpeg') }}" alt="Blog Image 1"
                            class="rounded-t-lg max-w-full h-auto">
                    </a>
                    <div class="p-5 bg-white rounded-lg">
                        <a href="#">
                            <h5 class="text-lg font-semibold mt-2">Five Palm Beach Villa with Private Pool</h5>
                        </a>
                        <p class="mt-3 font-normal text-sm text-gray-700 dark:text-gray-400">Dubai, United Arab Emirates.</p>
                    </div>
                </div>

                <!-- Blog Content Item 6 -->
                <div class="flex flex-col bg-white shadow-md rounded-lg border">
                    <a href="">
                        <img src="{{ asset('frontend/assets/images/featured/f-6.webp') }}" alt="Blog Image 1"
                            class="rounded-t-lg max-w-full h-auto">
                    </a>
                    <div class="p-5 bg-white rounded-lg">
                        <a href="#">
                            <h5 class="text-lg font-semibold mt-2">Five Palm Beach Villa with Private Pool</h5>
                        </a>
                        <p class="mt-3 font-normal text-sm text-gray-700 dark:text-gray-400">Dubai, United Arab Emirates.</p>
                    </div>
                </div>

                <!-- Blog Content Item 7 -->
                <div class="flex flex-col bg-white shadow-md rounded-lg border">
                    <a href="">
                        <img src="{{ asset('frontend/assets/images/featured/f-7.jpg') }}" alt="Blog Image 1"
                            class="rounded-t-lg max-w-full h-auto">
                    </a>
                    <div class="p-5 bg-white rounded-lg">
                        <a href="#">
                            <h5 class="text-lg font-semibold mt-2">Five Palm Beach Villa with Private Pool</h5>
                        </a>
                        <p class="mt-3 font-normal text-sm text-gray-700 dark:text-gray-400">Dubai, United Arab Emirates.</p>
                    </div>
                </div>

                <!-- Blog Content Item 8 -->
                <div class="flex flex-col bg-white shadow-md rounded-lg border">
                    <a href="">
                        <img src="{{ asset('frontend/assets/images/featured/f-8.webp') }}" alt="Blog Image 1"
                            class="rounded-t-lg max-w-full h-auto">
                    </a>
                    <div class="p-5 bg-white rounded-lg">
                        <a href="#">
                            <h5 class="text-lg font-semibold mt-2">Five Palm Beach Villa with Private Pool</h5>
                        </a>
                        <p class="mt-3 font-normal text-sm text-gray-700 dark:text-gray-400">Dubai, United Arab Emirates.</p>
                    </div>
                </div>

                <!-- Blog Content Item 9 -->
                <div class="flex flex-col bg-white shadow-md rounded-lg border">
                    <a href="">
                        <img src="{{ asset('frontend/assets/images/featured/f-9.jpg') }}" alt="Blog Image 1"
                            class="rounded-t-lg max-w-full h-auto">
                    </a>
                    <div class="p-5 bg-white rounded-lg">
                        <a href="#">
                            <h5 class="text-lg font-semibold mt-2">Five Palm Beach Villa with Private Pool</h5>
                        </a>
                        <p class="mt-3 font-normal text-sm text-gray-700 dark:text-gray-400">Dubai, United Arab Emirates.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========== Featured Section END =========== -->

    <!-- =========== Contact Us Section START =========== -->

    <section class="bg-white">
        <div class="container mx-auto sm:w-1/2 md:w-2/3 lg:w-3/4 py-8">

            <h2 class="text-[#333] font-semibold text-center lg:text-[32px] text-[22px] lg:py-16 py-10"> Get In Touch With Us </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <!-- Contact Information -->
                <div class="w-[90%] mx-auto">
                    <div class="relative rounded-[25px] shadow-2xl">
                        <img class="shadow h-[600px] w-full rounded-[20px] object-cover"
                            src="{{ asset('frontend/assets/images/Contact/Palm-Residence.webp') }}" alt="">
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white border-[#16163F4F] border p-[10%] rounded-xl">
                    <h2 class="text-lg font-semibold mb-4"> Contact Us</h2>
                    <form>
                        <div class="mb-4">
                            <input type="text" id="name" name="name" placeholder="Name"
                                class="mt-1 px-3 py-3 w-full rounded-md focus:ring-0 border-0 bg-[#f0f0f0]">
                        </div>
                        <div class="mb-4">
                            <input type="email" id="email" name="email" placeholder="Email"
                                class="mt-1 px-3 py-3 w-full focus:ring-0 rounded-md border-0 bg-[#f0f0f0]">
                        </div>
                        <div class="mb-4">
                            <input type="email" id="email" name="phone" placeholder="Phone"
                                class="mt-1 px-3 py-3 w-full focus:ring-0 rounded-md border-0 bg-[#f0f0f0]">
                        </div>
                        <div class="mb-4">
                            <textarea id="message" name="message" rows="4" placeholder="Message"
                                class="mt-1 px-3 py-2 w-full focus:ring-0 rounded-md border-0 bg-[#f0f0f0]"></textarea>
                        </div>
                        <button type="submit"
                            class="bg-[#d3b574] text-white font-semibold py-5 px-10 rounded-md w-full">Send </button>
                    </form>
                </div>

            </div>

        </div>
    </section>

    <!-- =========== Contact Us Section END =========== -->

    <!-- =========== Awards Section START =========== -->

    <section class="bg-white py-5">
        <div class="container mx-auto sm:w-1/2 md:w-2/3 lg:w-3/4 py-12">

            <h2 class="text-[#333] font-semibold text-center lg:text-[32px] text-[22px] lg:py-16 py-10"> Awards Nominees </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 border lg:p-12 p-5 rounded-xl">

                <!-- Blog Content Item 1 -->
                <div class="flex justify-between">
                    <a href="">
                        <img src="{{ asset('frontend/assets/images/dream/airbnb-superhost-badge-637x264-1.jpg') }}"
                            alt="Blog Image 1" class="rounded-t-lg max-w-full object-cover">
                    </a>
                </div>

             <div class="w-full flex items-center justify-between gap-5">

                   <!-- Blog Content Item 1 -->
                   <div class="">
                    <a href="">
                        <img src="{{ asset('frontend/assets/images/dream/Digital-Award-TRA-2022.png') }}"
                            alt="Blog Image 1" class="object-cover max-w-full">
                    </a>
                </div>

                <!-- Blog Content Item 1 -->
                <div class="">
                    <a href="">
                        <img src="{{ asset('frontend/assets/images/dream/Digital-Award-TRA-2022-1.png') }}"
                            alt="Blog Image 1" class="object-cover max-w-full">
                    </a>
                </div>

             </div>

            </div>

        </div>
    </section>

    <!-- =========== Awards Section START =========== -->

@push('scripts')

<!-- =========== Script =========== -->

<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    autoplay:true,
    items: 2,
    margin:20,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:2,
            nav:false,
            loop:true
        }
    }
})
</script>

  <!-- =========== Script =========== -->

@endpush


</x-guest-layout>
