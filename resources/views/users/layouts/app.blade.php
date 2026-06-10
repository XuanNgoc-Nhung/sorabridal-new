<!DOCTYPE html>
<html lang="en">
@include('users.partials.head')
<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="{{ asset('assets/mimosa/js/facebook-sdk.js') }}#xfbml=1&version=v17.0&appId=2041254136266004&autoLogAppEvents=1"></script>

    @include('users.partials.header')
    @include('users.partials.loader')

    <div class="main_page">
        <div class="page_home" id="main">
            @yield('content')
        </div>
        @include('users.partials.footer')

    @include('users.partials.scripts')
</body>
</html>
