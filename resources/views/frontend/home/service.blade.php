{{-- <section class="bg-gray-100 py-16" data-aos="fade-up">
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
                         <div class="bg-white p-6 rounded-lg shadow-lg text-center" data-aos="fade-up" data-aos-delay="100">
                             <img src="https://images.unsplash.com/photo-1563168206-f0f627c83ca8?q=80&w=387&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                 alt="Free Wi-Fi" class="w-20 h-20 mx-auto mb-4 object-cover rounded">
                             <h3 class="font-semibold mb-2">Free Wi-Fi</h3>
                             <p class="text-gray-600 text-sm">High-speed internet throughout the hotel premises.</p>
                         </div>
                         <div class="bg-white p-6 rounded-lg shadow-lg text-center" data-aos="fade-up" data-aos-delay="200">
                             <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=200&h=200&fit=crop"
                                 alt="Gym & Fitness" class="w-20 h-20 mx-auto mb-4 object-cover rounded">
                             <h3 class="font-semibold mb-2">Gym & Fitness</h3>
                             <p class="text-gray-600 text-sm">State-of-the-art fitness center for all guests.</p>
                         </div>
                         <div class="bg-white p-6 rounded-lg shadow-lg text-center" data-aos="fade-up" data-aos-delay="300">
                             <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=200&h=200&fit=crop"
                                 alt="24/7 Support" class="w-20 h-20 mx-auto mb-4 object-cover rounded">
                             <h3 class="font-semibold mb-2">24/7 Support</h3>
                             <p class="text-gray-600 text-sm">Front desk and guest assistance at any time.</p>
                         </div>
                     </div>
                 </div>
             </section> --}}

<section class="bg-gray-100 py-16" data-aos="fade-up">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-8">Facilities & Services</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @forelse($data['front_service'] as $service)
                @php
                    // Determine image URL
                    $image = $service->image_path ?? null;

                    if ($image) {
                        if (file_exists(public_path($image))) {
                            $image_url = asset($image);
                        } elseif (file_exists(storage_path('app/public/' . $image))) {
                            $image_url = asset('storage/' . $image);
                        } else {
                            $image_url = 'https://via.placeholder.com/150?text=No+Image';
                        }
                    } else {
                        $image_url = 'https://via.placeholder.com/150?text=No+Image';
                    }
                @endphp

                <div class="bg-white p-6 rounded-lg shadow-lg text-center" data-aos="fade-up"
                    data-aos-delay="{{ $loop->index * 100 }}">
                    <img src="{{ $image_url }}" alt="{{ $service->name ?? 'Service' }}"
                        class="w-20 h-20 mx-auto mb-4 object-cover rounded">
                    <h3 class="font-semibold mb-2">{{ $service->name ?? 'Service Name' }}</h3>
                    <p class="text-gray-600 text-sm">{{ $service->description ?? 'No description available.' }}</p>
                </div>
            @empty
                <p class="col-span-4 text-center text-gray-500">No services available.</p>
            @endforelse
        </div>
    </div>
</section>
