{{-- <section class="bg-gray-100 py-16" data-aos="fade-up">
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
</section> --}}
<section class="bg-gray-100 py-16" data-aos="fade-up">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-8">Our Living Rooms</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @forelse($data['front_gallery'] as $gallery)
                @php
                    // Get main image from gallery table
                    $image = $gallery->main_image ?? null;

                    // Determine proper URL
                    if ($image) {
                        if (file_exists(public_path($image))) {
                            $image_url = asset($image);
                        } elseif (file_exists(storage_path('app/public/' . $image))) {
                            $image_url = asset('storage/' . $image);
                        } else {
                            $image_url = 'https://via.placeholder.com/400x300?text=No+Image';
                        }
                    } else {
                        $image_url = 'https://via.placeholder.com/400x300?text=No+Image';
                    }
                @endphp

                <img src="{{ $image_url }}" alt="{{ $gallery->title ?? 'Gallery Image' }}"
                    class="w-full h-64 object-cover rounded-lg shadow-lg" data-aos="zoom-in"
                    data-aos-delay="{{ $loop->index * 100 }}">
            @empty
                <p class="col-span-3 text-center text-gray-500">No images found.</p>
            @endforelse
        </div>
    </div>
</section>
