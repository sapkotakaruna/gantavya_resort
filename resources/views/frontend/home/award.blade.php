{{-- <section class="max-w-6xl mx-auto px-6 py-16" data-aos="fade-up">
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
             </section> --}}
<section class="max-w-6xl mx-auto px-6 py-16" data-aos="fade-up">
    <h2 class="text-3xl font-bold text-center mb-8">Awards & Recognition</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
        @forelse($data['front_award'] as $award)
            @php
                // Determine image URL
                $image = $award->image_path ?? null;

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

            <div class="p-6 bg-white rounded-lg shadow-lg" data-aos="flip-left" data-aos-delay="{{ $loop->index * 100 }}">
                <img src="{{ $image_url }}" alt="{{ $award->title ?? 'Award' }}"
                    class="w-20 h-20 mx-auto mb-4 object-cover rounded">
                <h3 class="font-semibold mb-2">{{ $award->title ?? 'Award Title' }}</h3>

            </div>
        @empty
            <p class="col-span-3 text-center text-gray-500">No awards available.</p>
        @endforelse
    </div>
</section>
