
<!-- =========== Header START =========== -->

<header class="bg-white shadow-xl">

    <!-- =========== Top Header section START =========== -->

    <section class="bg-[#16163f] py-3">
        <div class="container mx-auto sm:w-1/2 md:w-2/3 lg:w-3/4">
            <nav class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
                <div class="hidden lg:block md:block">
                    <ul class="flex flex-wrap justify-center md:justify-end lg:justify-end items-center gap-5 list-unstyled ">
                        <li class="flex gap-3 items-center">
                            <i class="fa-solid fa-phone text-white text-sm"></i>
                            <a href="" class="text-white text-sm"> +971-52377-8795 </a>
                        </li>
                        <li class="flex gap-3 items-center">
                            <i class="fa-solid fa-envelope text-white text-sm"></i>
                            <a href="" class="text-white text-sm"> management@exclusiveholidayhomes.ae </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="list-unstyled flex items-center justify-center gap-5">
                        <li class="flex gap-3 items-center">
                            <i class="fa-brands fa-facebook text-white hover:text-[#d3b574] text-lg cursor-pointer"></i>
                        </li>
                        <li class="flex gap-3 items-center">
                            <i class="fa-brands fa-instagram text-white hover:text-[#d3b574] text-lg cursor-pointer"></i>
                        </li>
                        <li class="flex gap-3 items-center">
                            <i class="fa-brands fa-whatsapp text-white hover:text-[#d3b574] text-lg cursor-pointer"></i>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>

    <!-- =========== Top Header END =========== -->

    <!-- =========== Navbar START =========== -->

    <section class="navbar">
        <div class="container mx-auto flex items-center justify-between py-4 sm:w-1/2 md:w-2/3 lg:w-3/4">
            <div class="flex items-center">
                <a href="#"><img class="w-36 cursor-pointer"
                    src="{{ asset('frontend/assets/images/logo/EHH-Exclusive-holiday-homes-LLC.png') }}"
                    alt="Company Logo" class="w-12 h-12">
                </a>
            </div>
            <ul class="hidden md:flex space-x-4 list-none gap-5">
                <li>
                    <a href="#" class=" text-[#d3b574] font-semibold">Exclusive Holiday Homes</a>
                </li>

                <div class="relative group">
                    <li>
                        <a href="#" class="hover:text-[#d3b574] font-semibold">Dubai</a>
                        <i class="fa-solid fa-caret-down"></i>
                    </li>
                    <div class="absolute hidden group-hover:block bg-white text-black rounded-lg p-2 mt-1">
                        <a href="#" class="block py-2 px-4
                        <a href="#"
                            class="hover:text-[#d3b574] font-semibold">Service1 </a>
                        <a href="#" class="block py-2 px-4
                        <a href="#"
                            class="hover:text-[#d3b574] font-semibold">Service2 </a>
                        <a href="#" class="block py-2 px-4
                        <a href="#"
                            class="hover:text-[#d3b574] font-semibold">Service3 </a>
                    </div>
                </div>
                <div class="relative group">
                    <li>
                        <a href="#" class="hover:text-[#d3b574] font-semibold">Bodrum</a>
                        <i class="fa-solid fa-caret-down"></i>
                    </li>
                    <div class="absolute hidden group-hover:block bg-white text-black rounded-lg p-2 mt-1">
                        <a href="#" class="block py-2 px-4
                        <a href="#"
                            class="hover:text-[#d3b574] font-semibold">Service1 </a>
                        <a href="#" class="block py-2 px-4
                        <a href="#"
                            class="hover:text-[#d3b574] font-semibold">Service2 </a>
                        <a href="#" class="block py-2 px-4
                        <a href="#"
                            class="hover:text-[#d3b574] font-semibold">Service3 </a>
                    </div>
                </div>
                <li>
                    <a href="#" class="hover:text-[#d3b574] font-semibold">About</a>
                </li>
                <li>
                    <a href="#" class="hover:text-[#d3b574] font-semibold">Contact</a>
                </li>
            </ul>
            <div class="md:hidden relative">
                <button id="mobileMenuBtn"
                    class="bg-transparent text-black hover:text-gray-300 font-semibold px-3 py-2 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
                <ul id="mobileMenu" class="absolute right-0 mt-2 bg-gray-800 z-50 shadow text-white rounded-lg hidden w-[250px] list-none">
                    <li class="hover:text-black hover:bg-[#d3b574]"> <a href="#" class="block px-4 py-2">Home</a></li>
                    <li class="hover:text-black hover:bg-[#d3b574]"> <a href="#" class="block px-4 py-2">About</a></li>
                    <div class="relative group px-4 py-2">
                    <li class="hover:text-black hover:bg-[#d3b574]"> <a href="#" class="block px-4 py-2">Services</a></li>
                        <div class="absolute top-0 right-0 hidden group-hover:block">
                            <a href="#" class="block bg-gray-700 py-2 px-4">Service</a>
                            <a href="#" class="block bg-gray-700 py-2 px-4">Service </a>
                            <a href="#" class="block bg-gray-700 py-2 px-4">Service </a>
                        </div>
                    </div>
                    <li class="hover:text-black hover:bg-[#d3b574]"> <a href="#" class="block px-4 py-2">Contact</a></li>

                </ul>
            </div>
        </div>
    </section>

    <!-- =========== Navbar END =========== -->

</header>

<!-- =========== Header END =========== -->


<!-- =========== Mobile Menu Script START =========== -->
<script>
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
 <!-- =========== Mobile Menu Script END =========== -->
