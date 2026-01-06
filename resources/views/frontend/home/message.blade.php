 @if ($data['message'])
     <section class="max-w-6xl mx-auto px-6 py-16" data-aos="fade-up">
         <h2 class="text-3xl font-bold text-center mb-6">Message from Our {{ $data['message']->post }}</h2>
         <div class="flex flex-col md:flex-row items-center gap-8">
             <img src="{{ $data['message']->image_path ? asset('storage/' . $data['message']->image_path) : asset('images/ceo-placeholder.jpg') }}"
                 alt="{{ $data['message']->name }}" class="w-48 h-48 object-cover rounded-full shadow-lg"
                 data-aos="fade-right">
             <div data-aos="fade-left">
                 <p class="text-gray-700 text-justify mb-6">
                     {!! $data['message']->description !!}
                 </p>
                 <div class="border-t border-gray-300 pt-4">
                     <p class="font-bold text-gray-800 text-lg">{{ $data['message']->name }}</p>
                     <p class="text-sm text-gray-600">{{ $data['message']->post }}, {{ $_site_profile->site_name }}</p>
                 </div>
             </div>
         </div>
     </section>
 @endif
