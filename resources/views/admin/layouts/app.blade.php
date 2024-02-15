<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Quick Access</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="{{ asset('admin_panel') }}/assets/vendor/perfect-scrollbar.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="{{ asset('admin_panel') }}/assets/css/app.css" rel="stylesheet">
    <link type="text/css" href="{{ asset('admin_panel') }}/assets/css/app.rtl.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="{{ asset('admin_panel') }}/assets/css/vendor-material-icons.css" rel="stylesheet">
    <link type="text/css" href="{{ asset('admin_panel') }}/assets/css/vendor-material-icons.rtl.css" rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="{{ asset('admin_panel') }}/assets/css/vendor-fontawesome-free.css" rel="stylesheet">
    <link type="text/css" href="{{ asset('admin_panel') }}/assets/css/vendor-fontawesome-free.rtl.css" rel="stylesheet">


    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133433427-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-133433427-1');
    </script>

</head>

<body class="layout-default">

    <div class="preloader"></div>

    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">

        <!-- Header -->



        @include('admin.layouts.header')
        <!-- // END Header -->

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content">

            <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">

                <div class="mdk-drawer-layout__content page">
                    @yield('content')
                </div>

                <!-- // END drawer-layout__content -->

                @include('admin.layouts.sidebar')


            </div>
            <!-- // END drawer-layout -->

        </div>
        <!-- // END header-layout__content -->

    </div>
    <!-- // END header-layout -->

    <!-- App Settings FAB -->
    <div id="app-settings">
        <app-settings layout-active="default"
            :layout-location="{
                'default': 'dashboard-quick-access.html',
                'fixed': 'fixed-dashboard-quick-access.html',
                'fluid': 'fluid-dashboard-quick-access.html',
                'mini': 'mini-dashboard-quick-access.html'
            }"></app-settings>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('admin_panel') }}/assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('admin_panel') }}/assets/vendor/popper.min.js"></script>
    <script src="{{ asset('admin_panel') }}/assets/vendor/bootstrap.min.js"></script>

    <!-- Perfect Scrollbar -->
    <script src="{{ asset('admin_panel') }}/assets/vendor/perfect-scrollbar.min.js"></script>

    <!-- DOM Factory -->
    <script src="{{ asset('admin_panel') }}/assets/vendor/dom-factory.js"></script>

    <!-- MDK -->
    <script src="{{ asset('admin_panel') }}/assets/vendor/material-design-kit.js"></script>

    <!-- App -->
    <script src="{{ asset('admin_panel') }}/assets/js/toggle-check-all.js"></script>
    <script src="{{ asset('admin_panel') }}/assets/js/check-selected-row.js"></script>
    <script src="{{ asset('admin_panel') }}/assets/js/dropdown.js"></script>
    <script src="{{ asset('admin_panel') }}/assets/js/sidebar-mini.js"></script>
    <script src="{{ asset('admin_panel') }}/assets/js/app.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="{{ asset('admin_panel') }}/assets/js/app-settings.js"></script>

</body>

</html>
