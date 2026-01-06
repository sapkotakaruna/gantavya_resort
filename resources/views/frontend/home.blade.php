 @extends('common.layout')
 @section('content')
     <div class="mt-27">

         @include('frontend.home.slider')

         <!-- Booking Section -->
         @include('frontend.home.booking')
         <div class="max-w-7xl mx-auto px-6 py-16">
             @include('frontend.home.welcome')
             <!-- Message from CEO -->
             @include('frontend.home.message')

             <!-- Our Living Rooms -->
             @include('frontend.home.room')

             <!-- Dining Hall -->
             @include('frontend.home.dining')

             <!-- Facilities & Services -->
             @include('frontend.home.service')

             <!-- Awards -->
             @include('frontend.home.award')

             <!-- Reviews -->
             @include('frontend.home.testimonial')
         </div>
     </div>
 @endsection
