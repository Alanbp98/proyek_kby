<!DOCTYPE html>
<html lang="en">
<!-- begin::head -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="../assets/css/layouts-css/admin.css">
</head>
<!-- end::head -->
<!-- begin::body -->
<body>
    <!-- begin::main -->
    {{-- begin::navbar --}}
    @include('partials.dashboard-navbar')
    {{-- end::navbar --}}
    <!-- begin::container -->
    <div class="container">
        <!-- begin::aside -->
        <div class="aside">
            <!-- begin::menu-link -->
            <div class="menu-link">
                <h2 class="menu-title"><a href="../dashboard-admin">Dashboard</a></h2>
            </div>
            <!-- end::menu-link -->
            <!-- begin::menu-link -->
            <div class="menu-link">
                <!-- begin::menu-sub -->
                <h2 class="menu-title"><a href="../kategori-admin">Master</a></h2>
                <a href="../kategori-admin">Kategori</a><br>
                <a href="../projek-admin">Projek</a>
                <!-- end::menu-sub -->
            </div>
            <!-- end::menu-link -->
            <!-- begin::menu-link -->
            <div class="menu-link">
                <!-- begin::menu-sub -->
                <h2 class="menu-title"><a href="">Referensi</a></h2>
                <a href="">Donatur</a><br>
                <a href="">Daftar Donatur</a>
                <!-- end::menu-sub -->
            </div>
            <!-- end::menu-link -->
            <!-- begin::menu-link -->
            <div class="menu-link">
                <!-- begin::menu-sub -->
                <h2 class="menu-title"><a href="">Informasi</a></h2>
                <a href="">Kotak Masuk</a><br>
                <a href="">Subscriber</a>
                <!-- end::menu-sub -->
            </div>
            <!-- end::menu-link -->
            <!-- begin::menu-link -->
            <div class="menu-link">
                <!-- begin::menu-sub -->
                <h2 class="menu-title"><a href="">Laporan</a></h2>
                <!-- <a href="">Kategori</a><br>
                <a href="">Projek</a> -->
                <!-- end::menu-sub -->
            </div>
            <!-- end::menu-link -->
            <!-- begin::menu-link -->
            <div class="menu-link">
                <!-- begin::menu-sub -->
                <h2 class="menu-title"><a href="">Pengaturan</a></h2>
                <!-- <a href="">Kategori</a><br>
                <a href="">Projek</a> -->
                <!-- end::menu-sub -->
            </div>
            <!-- end::menu-link -->
            
        </div>
        <!-- end::aside -->
        <!-- begin::content -->
        <div class="content-main">
            @yield('kategori-admin')
            @yield('projek-admin')
            @yield('dashboard-admin')
        </div>
        <!-- end::content -->
    </div>
    <!-- end::container -->
    <!--begin::footer-->
    @include('partials.footer')
    <!--end::footer-->

    <!-- end::main -->

    {{-- begin::script --}}
    <script>
        
    </script>
    {{-- end::script --}}
    
</body>
<!-- end::body -->
</html>