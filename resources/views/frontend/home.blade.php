<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    {{-- <link rel="preconnect" href="https://fon    ts.googleapis.com"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('theme.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="icon" type="image/png" sizes="16x16" href="./images/logo.png" />
    <meta name="description"
        content="Welcome to our luxury hotel. Enjoy elegantly designed rooms, complimentary Wi-Fi, breakfast, and premium amenities for an unforgettable stay.">
    <title>Home - Luxury Hotel</title>

    <style>
        :root {
            --font-primary: 'Playfair Display', serif;
        }



        .hero-swiper {
            width: 100%;
            height: 500px;
            position: relative;
        }

        .hero-swiper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.6));
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            z-index: 10;
        }

        .hero-overlay h1 {
            font-size: 3rem;
            letter-spacing: 2px;
            font-weight: 700;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
            margin-bottom: 1rem;
        }

        .hero-overlay p {
            margin-top: 0.5rem;
            font-size: 1.25rem;
            letter-spacing: 1px;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.7);
        }

        @media (max-width: 768px) {
            .hero-swiper {
                height: 400px;
            }

            .hero-overlay h1 {
                font-size: 1.75rem;
                letter-spacing: 1px;
            }

            .hero-overlay p {
                font-size: 1rem;
            }
        }
    </style>
</head>


<body>
    <!-- nav -->
    <div>
        <header class="w-full">
            <div id="header"
                class="fixed top-0 w-full bg-blue-900 text-white z-50 transition-all duration-300 h-12 overflow-hidden">
                <div class="max-w-7xl mx-auto flex md:justify-between items-center px-6 justify-end">
                    <div class="flex gap-2 items-center justify-between w-full h-12">
                        <div class="relative h-[60px] w-[170px] sm:w-[180px] lg:w-[230px] overflow-hidden">
                            <img src="{{ asset('frontend/images/logo.png') }}" alt="logo"
                                class="absolute top-5.5 sm:top-3 lg:top-0 w-[170px] sm:w-[180px] lg:w-[230px]" />
                        </div>
                        <div class="flex gap-2 h-12 items-center">
                            <div class="md:flex gap-6 hidden">
                                <span class="flex items-center gap-2"><i class="fa-solid fa-envelope"></i>
                                    example@gmail.com</span>
                                <span class="flex items-center gap-2"><i class="fa-solid fa-phone"></i> 09811183</span>
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
                                <img src="./images/logo.png" alt="image"
                                    class="-top-13 absolute sm:top-[-42px] lg:top-[-54px] w-[170px] sm:w-[180px] lg:w-[230px]" />
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

    <!-- main -->
    <div class="mt-27">

        <section class="swiper hero-swiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39" />
                    <div class="hero-overlay">
                        <h1>Discover Paradise in the Himalayas</h1>
                        <p>Where Luxury Meets Authentic Nepali Hospitality</p>
                    </div>
                </div>

                <div class="swiper-slide">
                    <img
                        src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                    <div class="hero-overlay">
                        <h1>Exceptional Comfort Awaits</h1>
                        <p>Premium Rooms with Breathtaking Mountain Views</p>
                    </div>
                </div>

                <div class="swiper-slide">
                    <img
                        src="https://images.unsplash.com/photo-1445019980597-93fa8acb246c?q=80&w=874&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                    <div class="hero-overlay">
                        <h1>Your Gateway to Cultural Wonders</h1>
                        <p>Experience Kathmandu's Rich Heritage in Comfort</p>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>
        </section>

        <!-- Booking Section -->
        <div class="bg-white shadow-lg -mt-16 mx-auto max-w-6xl rounded-lg p-6 relative z-10" data-aos="fade-up"
            data-aos-duration="800">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-end">
                <!-- Book Online Section -->
                <div class="md:col-span-2">
                    <h2 class="text-xl font-bold text-blue-900 mb-1">BOOK ONLINE</h2>
                    <p class="text-sm text-gray-600">Guaranteed accommodation</p>
                </div>

                <!-- Check-in -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Check-in</label>
                    <div class="relative">
                        <input type="date" value="2025-12-23"
                            class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <!-- <i
                            class="fa-regular fa-calendar absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none"></i> -->
                    </div>
                </div>

                <!-- Check-out -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Check-out</label>
                    <div class="relative">
                        <input type="date" value="2025-12-24"
                            class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <!-- <i
                            class="fa-regular fa-calendar absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none"></i> -->
                    </div>
                </div>

                <!-- Guests -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Guests</label>
                    <div class="relative">
                        <select
                            class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 appearance-none">
                            <option>2 adults, 0 children</option>
                            <option>1 adult, 0 children</option>
                            <option>2 adults, 1 child</option>
                            <option>2 adults, 2 children</option>
                            <option>3 adults, 0 children</option>
                            <option>4 adults, 0 children</option>
                        </select>
                        <!-- <i
                            class="fa-solid fa-user absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none"></i> -->
                    </div>
                </div>

                <!-- Find Room Button -->
                <div class="md:col-span-4">
                    <a href="booking.html">
                        <button
                            class="w-full px-6 py-3 bg-blue-900 text-white rounded-md hover:bg-blue-800 transition font-semibold">
                            Find Room
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-6 py-16">
            <div class="bg-gradient-to-br from-blue-50 to-gray-100 mt-10 p-8 rounded-xl shadow-lg" data-aos="fade-up">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div class="text-justify space-y-6" data-aos="fade-right">
                        <div>
                            <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Discover
                                Excellence</span>
                            <h1 class="font-bold text-4xl mt-2 text-gray-800 leading-tight">Welcome to Himalaya Horizon
                                Hotel</h1>
                            <div class="w-20 h-1 bg-blue-600 mt-3"></div>
                        </div>
                        <p>Nestled in the heart of Kathmandu, Himalaya Horizon Hotel offers a perfect blend of modern
                            comfort
                            and
                            traditional Nepali charm. Guests can enjoy elegantly designed rooms with panoramic views of
                            the
                            city
                            and
                            the surrounding hills, paired with world-class amenities such as free Wi-Fi, a rooftop
                            restaurant,
                            and a
                            serene spa. Its central location makes it an ideal base for exploring Kathmandu’s rich
                            cultural
                            heritage, including the historic Durbar Square, vibrant Thamel streets, and ancient temples.
                            Whether
                            you’re traveling for business or leisure, Himalaya Horizon Hotel promises a warm welcome,
                            personalized
                            service, and an unforgettable stay in the bustling capital.</p>
                        <div class="flex gap-4 items-center pt-2">
                            <button
                                class="bg-blue-600 text-white rounded-lg px-6 py-3 font-semibold hover:bg-blue-700 transition-all duration-300 shadow-md hover:shadow-xl flex items-center gap-2 group">
                                <a href="contact-us.html">Explore Our Story</a>
                                <span class="group-hover:translate-x-1 transition-transform">&#8594;</span>
                            </button>
                        </div>

                    </div>
                    <div class="relative" data-aos="fade-left">
                        <div class="absolute -top-4 -left-4 w-full h-full bg-blue-200 rounded-lg -z-10"></div>
                        <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Himalaya Horizon Hotel" class="rounded-lg shadow-2xl w-full h-full object-cover">
                        <div class="absolute bottom-6 right-6 bg-white p-4 rounded-lg shadow-lg">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-star text-yellow-500"></i>
                                <span class="font-bold text-gray-800">4.9</span>
                                <span class="text-gray-600 text-sm">(500+ Reviews)</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Message from CEO -->
            <section class="max-w-6xl mx-auto px-6 py-16" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-center mb-6">Message from Our CEO</h2>
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <img src="https://images.unsplash.com/photo-1562788869-4ed32648eb72?q=80&w=872&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="CEO" class="w-48 h-48 object-cover rounded-full shadow-lg" data-aos="fade-right">
                    <div data-aos="fade-left">
                        <p class="text-gray-700 text-justify mb-6">
                            Welcome to Himalaya Horizon Hotel, where we redefine luxury and comfort. Our commitment is
                            to
                            provide personalized experiences that create memories for a lifetime. From world-class
                            dining to
                            exceptional service, we strive for excellence in every detail.
                        </p>
                        <div class="border-t border-gray-300 pt-4">
                            <p class="font-bold text-gray-800 text-lg">Rajesh Kumar</p>
                            <p class="text-sm text-gray-600">CEO & Founder, Himalaya Horizon Hotel</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Our Living Rooms -->
            <section class="bg-gray-100 py-16" data-aos="fade-up">
                <div class="max-w-6xl mx-auto px-6">
                    <h2 class="text-3xl font-bold text-center mb-8">Our Living Rooms</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <img src="https://images.unsplash.com/photo-1680503146476-abb8c752e1f4?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" class="w-full h-64 object-cover rounded-lg shadow-lg" data-aos="zoom-in">
                        <img src="https://plus.unsplash.com/premium_photo-1661876306620-f2f2989f8f8b?q=80&w=784&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" class="w-full h-64 object-cover rounded-lg shadow-lg" data-aos="zoom-in"
                            data-aos-delay="100">
                        <img src="https://images.unsplash.com/photo-1509647924673-bbb53e22eeb8?q=80&w=866&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" class="w-full h-64 object-cover rounded-lg shadow-lg" data-aos="zoom-in"
                            data-aos-delay="200">
                    </div>
                </div>
            </section>

            <!-- Dining Hall -->
            <section class="max-w-6xl mx-auto px-6 py-16" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-center mb-8">Our Dining Hall</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                    <img src="https://images.unsplash.com/photo-1615968679312-9b7ed9f04e79?q=80&w=580&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" class="w-full h-80 object-cover rounded-lg shadow-lg" data-aos="fade-right">
                    <p class="text-gray-700 text-justify" data-aos="fade-left">
                        Experience exquisite culinary delights in our dining hall, offering a blend of local and
                        international
                        cuisines prepared by world-class chefs. Whether it's a casual meal or a fine dining experience,
                        our
                        ambiance ensures comfort and sophistication.
                    </p>
                </div>
            </section>

            <!-- Facilities & Services -->
            <section class="bg-gray-100 py-16" data-aos="fade-up">
                <div class="max-w-6xl mx-auto px-6">
                    <h2 class="text-3xl font-bold text-center mb-8">Facilities & Services</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="bg-white p-6 rounded-lg shadow-lg text-center" data-aos="fade-up">
                            <img src="https://plus.unsplash.com/premium_vector-1714648301627-c62b6c6bedaf?q=80&w=580&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Spa & Wellness" class="w-20 h-20 mx-auto mb-4 object-cover rounded">
                            <h3 class="font-semibold mb-2">Spa & Wellness</h3>
                            <p class="text-gray-600 text-sm">Relax and rejuvenate with our spa and wellness facilities.
                            </p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-lg text-center" data-aos="fade-up"
                            data-aos-delay="100">
                            <img src="https://images.unsplash.com/photo-1563168206-f0f627c83ca8?q=80&w=387&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Free Wi-Fi" class="w-20 h-20 mx-auto mb-4 object-cover rounded">
                            <h3 class="font-semibold mb-2">Free Wi-Fi</h3>
                            <p class="text-gray-600 text-sm">High-speed internet throughout the hotel premises.</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-lg text-center" data-aos="fade-up"
                            data-aos-delay="200">
                            <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=200&h=200&fit=crop"
                                alt="Gym & Fitness" class="w-20 h-20 mx-auto mb-4 object-cover rounded">
                            <h3 class="font-semibold mb-2">Gym & Fitness</h3>
                            <p class="text-gray-600 text-sm">State-of-the-art fitness center for all guests.</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-lg text-center" data-aos="fade-up"
                            data-aos-delay="300">
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=200&h=200&fit=crop"
                                alt="24/7 Support" class="w-20 h-20 mx-auto mb-4 object-cover rounded">
                            <h3 class="font-semibold mb-2">24/7 Support</h3>
                            <p class="text-gray-600 text-sm">Front desk and guest assistance at any time.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Awards -->
            <section class="max-w-6xl mx-auto px-6 py-16" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-center mb-8">Awards & Recognition</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                    <div class="p-6 bg-white rounded-lg shadow-lg" data-aos="flip-left">
                        <img src="https://images.unsplash.com/photo-1628584824791-30d512161601?q=80&w=872&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Best Luxury Hotel" class="w-20 h-20 mx-auto mb-4 object-cover rounded">
                        <h3 class="font-semibold mb-2">Best Luxury Hotel 2024</h3>
                    </div>
                    <div class="p-6 bg-white rounded-lg shadow-lg" data-aos="flip-left" data-aos-delay="100">
                        <img src="https://plus.unsplash.com/premium_photo-1682309834966-485aedc99be5?q=80&w=912&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Excellence in Service" class="w-20 h-20 mx-auto mb-4 object-cover rounded">
                        <h3 class="font-semibold mb-2">Excellence in Service</h3>
                    </div>
                    <div class="p-6 bg-white rounded-lg shadow-lg" data-aos="flip-left" data-aos-delay="200">
                        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=200&h=200&fit=crop"
                            alt="Traveler's Choice" class="w-20 h-20 mx-auto mb-4 object-cover rounded">
                        <h3 class="font-semibold mb-2">Traveler's Choice 2024</h3>
                    </div>
                </div>
            </section>

            <!-- Reviews -->
            <div class="max-w-7xl mx-auto px-6 py-16">
                <div class="text-center mb-12" data-aos="fade-up" data-aos-duration="600">
                    <h2 class="text-4xl font-bold text-gray-800 mb-4" style="font-family: var(--font-heading);">What
                        Our
                        Guests Say</h2>
                    <p class="text-gray-600 text-lg">Read genuine reviews from our valued guests</p>
                </div>

                <div class="swiper reviews-carousel">
                    <div class="swiper-wrapper">
                        <!-- Review Card 1 -->
                        <div class="swiper-slide">
                            <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow"
                                data-aos="fade-up" data-aos-duration="600">
                                <div class="flex items-center mb-4">
                                    <div class="flex text-yellow-400 text-xl">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <p class="text-gray-600 mb-4 italic">"Absolutely wonderful experience! The staff was
                                    incredibly
                                    friendly and the rooms were spotless. The location is perfect and the amenities
                                    exceeded our
                                    expectations. Will definitely return!"</p>
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 bg-blue-900 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        JS
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-800">John Smith</h4>
                                        <p class="text-sm text-gray-500">December 2025</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Review Card 2 -->
                        <div class="swiper-slide">
                            <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow"
                                data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                                <div class="flex items-center mb-4">
                                    <div class="flex text-yellow-400 text-xl">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <p class="text-gray-600 mb-4 italic">"Exceptional service from check-in to check-out.
                                    The
                                    breakfast
                                    was delicious and the spa facilities were top-notch. Highly recommend this hotel for
                                    both
                                    business and leisure travelers."</p>
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 bg-blue-900 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        EM
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-800">Emily Martinez</h4>
                                        <p class="text-sm text-gray-500">November 2025</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Review Card 3 -->
                        <div class="swiper-slide">
                            <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow"
                                data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                                <div class="flex items-center mb-4">
                                    <div class="flex text-yellow-400 text-xl">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                                <p class="text-gray-600 mb-4 italic">"Great hotel with modern facilities. The room was
                                    spacious
                                    and
                                    comfortable. The only minor issue was the wifi speed, but overall a fantastic stay.
                                    The
                                    rooftop
                                    restaurant has amazing views!"</p>
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 bg-blue-900 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        DL
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-800">David Lee</h4>
                                        <p class="text-sm text-gray-500">October 2025</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Review Card 4 -->
                        <div class="swiper-slide">
                            <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow"
                                data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
                                <div class="flex items-center mb-4">
                                    <div class="flex text-yellow-400 text-xl">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <p class="text-gray-600 mb-4 italic">"Perfect for our family vacation! The kids loved
                                    the pool
                                    and
                                    the staff was wonderful with them. Clean, safe, and very welcoming atmosphere. Thank
                                    you for
                                    making our stay memorable!"</p>
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 bg-blue-900 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        SC
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-800">Sarah Chen</h4>
                                        <p class="text-sm text-gray-500">September 2025</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Review Card 5 -->
                        <div class="swiper-slide">
                            <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow"
                                data-aos="fade-up" data-aos-duration="600" data-aos-delay="400">
                                <div class="flex items-center mb-4">
                                    <div class="flex text-yellow-400 text-xl">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <p class="text-gray-600 mb-4 italic">"Outstanding in every way! From the elegant decor
                                    to the
                                    attentive staff, everything was perfect. The concierge helped us plan amazing day
                                    trips. A
                                    truly
                                    five-star experience!"</p>
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 bg-blue-900 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        MP
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-800">Michael Peterson</h4>
                                        <p class="text-sm text-gray-500">August 2025</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Review Card 6 -->
                        <div class="swiper-slide">
                            <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow"
                                data-aos="fade-up" data-aos-duration="600" data-aos-delay="500">
                                <div class="flex items-center mb-4">
                                    <div class="flex text-yellow-400 text-xl">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <p class="text-gray-600 mb-4 italic">"Luxury at its finest! The suite was breathtaking
                                    and the
                                    service impeccable. Every detail was thoughtfully considered. This hotel sets the
                                    standard
                                    for
                                    excellence in hospitality."</p>
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 bg-blue-900 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        AW
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-800">Amanda Wilson</h4>
                                        <p class="text-sm text-gray-500">July 2025</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Swiper Controls -->
                <div class="swiper-pagination mt-6"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer id="footer" class="text-white py-12">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                <!-- About Section -->
                <div>
                    <h3 class="text-2xl font-bold mb-4">HOTEL</h3>
                    <p class="text-gray-300 mb-4">Experience luxury and comfort with world-class hospitality. Your
                        perfect stay awaits.</p>
                    <div class="flex gap-3">
                        <a href="#"
                            class="w-10 h-10 bg-white text-blue-900 rounded-full flex items-center justify-center hover:bg-gray-200 transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-white text-blue-900 rounded-full flex items-center justify-center hover:bg-gray-200 transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-white text-blue-900 rounded-full flex items-center justify-center hover:bg-gray-200 transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-white text-blue-900 rounded-full flex items-center justify-center hover:bg-gray-200 transition">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-white text-blue-900 rounded-full flex items-center justify-center hover:bg-gray-200 transition">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="home.html" class="text-gray-300 hover:text-white transition">Home</a></li>
                        <li><a href="about-us.html" class="text-gray-300 hover:text-white transition">About Us</a>
                        </li>
                        <li><a href="room.html" class="text-gray-300 hover:text-white transition">Rooms</a></li>
                        <li><a href="dining.html" class="text-gray-300 hover:text-white transition">Dining</a></li>
                        <li><a href="gallery.html" class="text-gray-300 hover:text-white transition">Gallery</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Services</h3>
                    <ul class="space-y-2">
                        <li><a href="facilities.html" class="text-gray-300 hover:text-white transition">Facilities</a>
                        </li>
                        <li><a href="reviews.html" class="text-gray-300 hover:text-white transition">Reviews</a></li>
                        <li><a href="contact-us.html" class="text-gray-300 hover:text-white transition">Contact</a>
                        </li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Spa & Wellness</a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Contact Us</h3>
                    <ul class="space-y-3 text-gray-300">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-map-marker-alt mt-1 text-white"></i>
                            <span>123 Hotel Street<br>Kathmandu, Nepal</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-phone text-white"></i>
                            <span>01198873 / 09811183</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-envelope text-white"></i>
                            <span>info@hotel.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-blue-800 pt-8 mt-8 text-center text-gray-300">
                <p>&copy; 2025 Hotel. All rights reserved. | <a href="#"
                        class="hover:text-white transition">Privacy
                        Policy</a> | <a href="#" class="hover:text-white transition">Terms & Conditions</a></p>
            </div>
        </div>
    </footer>

    <script>
        let lastScroll = 0;
        const header = document.getElementById("header");
        const navbar = document.getElementById("navbar");

        window.addEventListener("scroll", function() {
            const currentScroll = window.pageYOffset;
            if (currentScroll > lastScroll) {
                header.classList.add("-top-12");
                header.classList.remove("top-0");
                navbar.classList.add("top-0");
                navbar.classList.remove("top-12");
            } else {
                header.classList.add("top-0");
                header.classList.remove("-top-12");
                navbar.classList.add("top-12");
                navbar.classList.remove("top-0");
            }
            lastScroll = currentScroll <= 0 ? 0 : currentScroll;
        });

        const menuBtn = document.getElementById("menu-btn");
        const mobileMenu = document.getElementById("mobile-menu");
        const closeMenu = document.getElementById("close-menu");

        menuBtn.addEventListener("click", () => {
            mobileMenu.classList.remove("translate-x-full");
        });

        closeMenu.addEventListener("click", () => {
            mobileMenu.classList.add("translate-x-full");
        });
    </script>
    <script>
        const links = document.querySelectorAll(".nav-link");
        const currentPage = window.location.pathname.split("/").pop();

        links.forEach((link) => {
            const linkPage = link.getAttribute("href");

            if (
                linkPage === currentPage ||
                (linkPage === "index.html" && currentPage === "")
            ) {
                link.classList.add("bg-blue-200", "text-blue-800", "font-bold");
            } else {
                link.classList.add("hover:bg-blue-100");
            }
        });
    </script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
        AOS.init({
            duration: 1000
        });

        new Swiper(".hero-swiper", {
            loop: true,
            effect: "fade",
            fadeEffect: {
                crossFade: true
            },
            speed: 900,
            autoplay: {
                delay: 4500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            a11y: true,
        });

        new Swiper(".reviews-carousel", {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 30,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".reviews-carousel .swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".reviews-carousel .swiper-button-next",
                prevEl: ".reviews-carousel .swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    </script>

</body>


</html>
