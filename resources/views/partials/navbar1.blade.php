<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar 1</title>
    <link rel="stylesheet" href="../assets/css/partials-css/navbar1.css">
</head>
<body>
    <!-- begin::navbar -->
    <nav>
        <div class="logo">
            <div class="menu-toggle">
                <input type="checkbox">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <img src="assets/img/Logo KBY.png" alt="">
        </div>
        <ul>
            <li><a href="sign-up">Sign Up</a></li>
            <li><a href="sign-in">Sign In</a></li>
        </ul>
    </nav>
    <!-- end::navbar -->
    <!--begin::Page-Hamburger-->
    <div class="nav-burger">
        <div class="kategori">
            <div class="ktg">
                <p>Kategori</p>
            </div>
            <br>
            <div class="list-kt">
                <li>
                    <ul class="l1"><a href="">Zakat</a></ul>
                    <ul class="l2"><a href="k-galangdana">Galang Dana</a></ul>
                    <ul class="l3"><a href="">Qurban</a></ul>
                </li>
                <li>
                    <ul class="l1"><a href="">Bantuan Pendidikan</a></ul>
                    <ul class="l2"><a href="">Kegiatan Sosial</a></ul>
                    <ul class="l3"><a href="">Bencana Alam</a></ul>
                </li>
                <li>
                    <ul class="l1"><a href="">Pembangunan Masjid</a></ul>
                    <ul class="l2"><a href="">Pembangunan Panti</a></ul>
                    <ul class="l3"><a href="">Pembangunan Infrastruktur</a></ul>
                </li>
            </div>
        </div>
        <div class="kt-donasi">
            <p>Donasi</p>
            <ul>
                <li>Nominal</li>
                <li>Doa</li>
                <li>Relawan</li>
            </ul>
        </div>
    </div>
    <!--end::Page-Hamburger-->

    {{-- begin::script --}}

    {{-- hamburgerbar --}}
    <script>
        const menu_btn = document.querySelector('.menu-toggle');
        const menu_burger = document.querySelector('.nav-burger');
        
        menu_btn.addEventListener('click', function (){
            menu_btn.classList.toggle('is-active');
            menu_burger.classList.toggle('is-active');
        });
    </script>
    {{-- hamburgerbar --}}
</body>
</html>