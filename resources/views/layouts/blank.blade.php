﻿<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>{{ @$title }} | Najran BD PVT LTD</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin panel which can be used to manage huge system." name="description">
        <meta content="Najran BD PVT LTD" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        @include('layouts.header_scripts')

        @stack('header_styles')

    </head>

    <body class="loading authentication-bg" data-layout-config='{"leftSideBarTheme":"default","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":true,"darkMode":true, "showRightSidebarOnStart": false}'>

        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">

            @yield('content')

        </div>

        <footer class="footer footer-alt">
            <script>document.write(new Date().getFullYear())</script> © Najran BD PVT LTD
        </footer>

        @include('layouts.footer_scripts')

    </body>
</html>
