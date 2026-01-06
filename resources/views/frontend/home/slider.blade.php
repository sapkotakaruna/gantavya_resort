 <section class="swiper hero-swiper">
     <div class="swiper-wrapper">
         @forelse ($data['_slider'] as $slider)
             <div class="swiper-slide">
                 <img src="{{ asset('storage/' . $slider->image_path) }}" />
                 <div class="hero-overlay">
                     <h1>{{ $slider->title }}</h1>
                     <p>{{ $slider->short_description }}</p>
                 </div>
             </div>
         @empty
         @endforelse

     </div>

     <div class="swiper-pagination"></div>
 </section>
