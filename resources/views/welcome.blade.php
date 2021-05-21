<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body class="antialiased">


    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif

        {{-- <div id="app">
            <main-app></main-app>
        </div> --}}

    </div>

    {{-- <script src="{{asset('js/app.js')}}"></script> --}}


    {{-- <script>
        // import homeYourPage from "../layouts/HomeYourPage";
        // import homeBanner from "../layouts/HomeBanner";
        // import homeFriendsList from "../layouts/HomeFriendsList";
        // import homeShortCuts from "../layouts/HomeShortCut";
        // import homeRecentActivities from "../layouts/HomeRecentActivities";
        // import homeWhoIsFollowing from "../layouts/HomeWhoIsFollowing";
        
        // export default {
        //     components: {
        //         homeYourPage,
        //         homeBanner,
        //         homeFriendsList,
        //         homeShortCuts,
        //         homeRecentActivities,
        //         homeWhoIsFollowing,
        //     },
        // };
        </script> --}}
</body>

</html>