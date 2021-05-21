@include('site.layouts.header')
{{-- @include('site.layouts.homeTopNav') --}}

<div id="app">
    <top-nav></top-nav>
    <main-app></main-app>
    {{-- @yield('content') --}}
</div>

@include('site.layouts.footer')