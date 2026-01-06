<!DOCTYPE html>
<html lang="en">


@include('common.head')

<body>
    <!-- nav -->
    @include('common.header')

    <!-- main -->
    @yield('content')
    <!-- Footer -->
    @include('common.footer')
    @include('common.script')

</body>


</html>
