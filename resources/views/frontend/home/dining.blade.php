{{-- <section class="max-w-6xl mx-auto px-6 py-16" data-aos="fade-up">
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
</section> --}}
<section class="max-w-6xl mx-auto px-6 py-16" data-aos="fade-up">
    <h2 class="text-3xl font-bold text-center mb-8">Our Dining Hall</h2>

    @if ($data['front_dining'])
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
            @php
                // Determine image URL
                $image = $data['front_dining']->image ?? null;
                if ($image) {
                    if (file_exists(public_path($image))) {
                        $image_url = asset($image);
                    } elseif (file_exists(storage_path('app/public/' . $image))) {
                        $image_url = asset('storage/' . $image);
                    } else {
                        $image_url = 'https://via.placeholder.com/600x400?text=No+Image';
                    }
                } else {
                    $image_url = 'https://via.placeholder.com/600x400?text=No+Image';
                }
            @endphp

            <img src="{{ $image_url }}" alt="{{ $front_dining->title ?? 'Dining Hall' }}"
                class="w-full h-80 object-cover rounded-lg shadow-lg" data-aos="fade-right">

            <p class="text-gray-700 text-justify" data-aos="fade-left">
                {{ $data['front_dining']->description ?? 'Experience exquisite culinary delights in our dining hall, offering a blend of local and international cuisines prepared by world-class chefs.' }}
            </p>
        </div>
    @else
        <p class="text-center text-gray-500">No dining hall information available.</p>
    @endif
</section>
