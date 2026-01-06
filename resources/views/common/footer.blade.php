 <footer id="footer" class="text-white py-12">
     <div class="max-w-7xl mx-auto px-6">
         <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
             <!-- About Section -->
             <div>
                 <h3 class="text-2xl font-bold mb-4">HOTEL</h3>
                 <p class="text-gray-300 mb-4">Experience luxury and comfort with world-class hospitality. Your
                     perfect stay awaits.</p>
                 <div class="flex gap-3">
                     <a href="{{ $_site_profile->facebook_link }}"
                         class="w-10 h-10 bg-white text-blue-900 rounded-full flex items-center justify-center hover:bg-gray-200 transition">
                         <i class="fab fa-facebook-f"></i>
                     </a>
                     <a href="{{ $_site_profile->instagram_link }}"
                         class="w-10 h-10 bg-white text-blue-900 rounded-full flex items-center justify-center hover:bg-gray-200 transition">
                         <i class="fab fa-instagram"></i>
                     </a>
                     <a href="{{ $_site_profile->twitter_link }}"
                         class="w-10 h-10 bg-white text-blue-900 rounded-full flex items-center justify-center hover:bg-gray-200 transition">
                         <i class="fab fa-twitter"></i>
                     </a>
                     <a href="{{ $_site_profile->youtube_link }}"
                         class="w-10 h-10 bg-white text-blue-900 rounded-full flex items-center justify-center hover:bg-gray-200 transition">
                         <i class="fab fa-youtube"></i>
                     </a>
                     <a href="{{ $_site_profile->linkedin_link }}"
                         class="w-10 h-10 bg-white text-blue-900 rounded-full flex items-center justify-center hover:bg-gray-200 transition">
                         <i class="fab fa-linkedin-in"></i>
                     </a>
                 </div>
             </div>

             <!-- Quick Links -->
             <div>
                 <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                 @php
                     use Illuminate\Support\Facades\Route;
                     $quickLinks = [
                         ['title' => 'Home', 'url' => Route::has('index') ? route('index') : url('/')],
                         ['title' => 'About Us', 'url' => Route::has('aboutus') ? route('aboutus') : url('/about-us')],
                         ['title' => 'Rooms', 'url' => Route::has('rooms') ? route('rooms') : url('/rooms')],
                         ['title' => 'Dining', 'url' => Route::has('dining') ? route('dining') : url('/dining')],
                         ['title' => 'Gallery', 'url' => Route::has('gallery') ? route('gallery') : url('/gallery')],
                     ];
                 @endphp
                 <ul class="space-y-2">
                     @foreach ($quickLinks as $link)
                         <li><a href="{{ $link['url'] }}"
                                 class="text-gray-300 hover:text-white transition">{{ $link['title'] }}</a></li>
                     @endforeach
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
                         <span>{{ $_site_profile->location }}</span>
                     </li>
                     <li class="flex items-center gap-3">
                         <i class="fas fa-phone text-white"></i>
                         <span>{{ $_site_profile->phone }}</span>
                     </li>
                     <li class="flex items-center gap-3">
                         <i class="fas fa-envelope text-white"></i>
                         <span>{{ $_site_profile->email }}</span>
                     </li>
                 </ul>
             </div>
         </div>

         <!-- Bottom Bar -->
         <div class="border-t border-blue-800 pt-8 mt-8 text-center text-gray-300">
             <p>&copy; 2025 {{ $_site_profile->site_name }}. All rights reserved. | <a href="#"
                     class="hover:text-white transition">Privacy
                     Policy</a> | <a href="#" class="hover:text-white transition">Terms & Conditions</a></p>
         </div>
     </div>
 </footer>
