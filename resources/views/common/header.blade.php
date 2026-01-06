<div>
    <header class="w-full">
        <div id="header"
            class="fixed top-0 w-full bg-blue-900 text-white z-50 transition-all duration-300 h-12 overflow-hidden">
            <div class="max-w-7xl mx-auto flex md:justify-between items-center px-6 justify-end">
                <div class="flex gap-2 items-center justify-between w-full h-12">
                    <div class="relative h-[60px] w-[170px] sm:w-[180px] lg:w-[230px] overflow-hidden">
                        <img src="./images/logo.png" alt="logo"
                            class="absolute top-5.5 sm:top-3 lg:top-0 w-[170px] sm:w-[180px] lg:w-[230px]" />
                    </div>
                    <div class="flex gap-2 h-12 items-center">
                        <div class="md:flex gap-6 hidden">
                            <span class="flex items-center gap-2"><i class="fa-solid fa-envelope"></i>
                                {{ $_site_profile->email }}</span>
                            <span class="flex items-center gap-2"><i class="fa-solid fa-phone"></i>
                                {{ $_site_profile->phone }}</span>
                        </div>
                        <div>
                            <button
                                class="px-3 py-1 rounded bg-white text-blue-900 font-semibold hover:bg-gray-200 transition">
                                Book now
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav id="navbar"
            class="fixed w-full bg-gray-100 z-40 transition-all duration-300 top-12 shadow-sm py-4 md:py-0 h-14 sm:h-16 overflow-hidden">
            <div class="max-w-7xl mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="#" class="font-bold text-lg text-blue-900 hover:text-blue-700">
                        <div class="relative h-[60px] w-[170px] lg:w-[230px] sm:w-[180px]">
                            @if ($_site_profile?->logo_url)
                                <img src="{{ $_site_profile->logo_url }}" alt="{{ $_site_profile->site_name }} logo"
                                    class="-top-13 absolute sm:top-[-42px] lg:top-[-54px] w-[170px] sm:w-[180px] lg:w-[230px]" />
                            @endif
                        </div>
                    </a>
                </div>
                <div id="menu-btn" class="md:hidden relative fixed text-2xl focus:outline-none">
                    <div class="absolute top-[-35px] right-0">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>

                <ul class="hidden md:flex lg:gap-8 md:gap-2 font-medium" id="menu">
                    <li>
                        <a href="home.html" class="nav-link block px-3 py-4 rounded md:text-sm">Home</a>
                    </li>
                    <li>
                        <a href="about-us.html" class="nav-link block px-3 py-4 rounded md:text-sm">About Us</a>
                    </li>
                    <li>
                        <a href="room.html" class="nav-link block px-3 py-4 rounded md:text-sm">Rooms</a>
                    </li>
                    <li>
                        <a href="dining.html" class="nav-link block px-3 py-4 rounded md:text-sm">Dining</a>
                    </li>
                    <li>
                        <a href="facilities.html" class="nav-link block px-3 py-4 rounded md:text-sm">Facilities</a>
                    </li>

                    <li>
                        <a href="gallery.html" class="nav-link block px-3 py-4 rounded md:text-sm">Gallery</a>
                    </li>
                    <li>
                        <a href="contact-us.html" class="nav-link block px-3 py-4 rounded md:text-sm">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div id="mobile-menu"
        class="fixed top-0 right-0 w-64 h-full bg-white shadow-lg transform translate-x-full transition-transform duration-300 z-50 md:hidden">
        <div class="flex justify-between items-center p-4 border-b">
            <span class="font-bold text-lg text-blue-900">Menu</span>
            <div id="close-menu" class="text-xl">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <ul class="flex flex-col p-4 gap-4 font-medium">
            <li>
                <a href="home.html" class="nav-link block px-3 py-4 rounded">Home</a>
            </li>
            <li>
                <a href="about-us.html" class="nav-link block px-3 py-4 rounded">About Us</a>
            </li>
            <li>
                <a href="room.html" class="nav-link block px-3 py-4 rounded">Rooms</a>
            </li>
            <li>
                <a href="dining.html" class="nav-link block px-3 py-4 rounded">Dining</a>
            </li>
            <li>
                <a href="facilities.html" class="nav-link block px-3 py-4 rounded">Facilities</a>
            </li>

            <li>
                <a href="gallery.html" class="nav-link block px-3 py-4 rounded">Gallery</a>
            </li>
            <li>
                <a href="contact-us.html" class="nav-link block px-3 py-4 rounded">Contact</a>
            </li>
        </ul>
    </div>
</div>
