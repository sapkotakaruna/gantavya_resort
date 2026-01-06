@if ($data['homeabout'])
    <div class="bg-gradient-to-br from-blue-50 to-gray-100 mt-10 p-8 rounded-xl shadow-lg" data-aos="fade-up">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="text-justify space-y-6" data-aos="fade-right">
                <div>
                    <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Discover
                        Excellence</span>
                    <h1 class="font-bold text-4xl mt-2 text-gray-800 leading-tight">{{ $data['homeabout']->title }}</h1>
                    <div class="w-20 h-1 bg-blue-600 mt-3"></div>
                </div>
                <p>{!! $data['homeabout']->description !!}</p>
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
                <img src="{{ $data['homeabout']->image_path ? asset('storage/' . $data['homeabout']->image_path) : asset('images/about-placeholder.jpg') }}"
                    alt="{{ $data['homeabout']->title }}" class="rounded-lg shadow-2xl w-full h-full object-cover">
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
@endif
