<!DOCTYPE html>
<html lang="en">
<!-- begin::head -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} | @yield('title')</title>
    <link rel="stylesheet" href="../assets/css/layouts-css/admin.css">
    <link rel="stylesheet" href="../assets/css/kategori-admin.css">
    <link rel="stylesheet" href="../assets/css/projek-admin.css">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <link rel="stylesheet" href="../assets/css/partials-css/dashboard-navbar.css">
    
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<!-- end::head -->
<!-- begin::body -->
<body>
    <!-- begin::main -->
    {{-- begin::navbar --}}
    @include('layouts.partials.dashboard-navbar')
    {{-- end::navbar --}}
    <!-- begin::container -->
    <div class="container">
        <!-- begin::aside -->
        @include('layouts.partials.sidebar2')
        <!-- end::aside -->
        <!-- begin::content -->
        <div class="content-main">
            @yield('content')
        </div>
        <!-- end::content -->
    </div>
    <!-- end::container -->
    <!--begin::footer-->
    @include('layouts.partials.footer')
    <!--end::footer-->

    <!-- end::main -->

    {{-- begin::script --}}
    
    {{-- end::script --}}

    
</body>
<!-- end::body -->
</html>