<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="assets/css/register.css">
</head>
<body>
    <div class="container">
        <div class="col-poster">
            <div class="logo">
                <img src="assets/img/Logo KBY.png" alt="" width="100px">
            </div>
            <div class="ayat">
                <p>
                    " Karena sesungguhnya <br>
                    sesudah kesulitan itu ada <br>
                    kemudahan, sesungguhnya <br>
                    sesudah kesulitan itu ada <br>
                    kemudahan." <br>
                    (Q.S Al-Insyirah: 5-6)
                </p>
            </div>
            <div class="login-img">
                <img src="assets/img/sign-up.jpeg" alt="">
            </div>
        </div>
        <div class="col-form">
            <div class="card">
                <h1>Daftar</h1>
                <!--begin::Google link=-->
                <div class="logo_google">
                    <a href="" class="btn-google">
                        <img src="assets/img/google.png" width="50px" alt="Google Logo" class="google-logo">
                        <span>Daftar dengan Google</span>
                    </a>
                </div>
                <!--end::Google link=-->
                <p>atau daftar dengan</p>
                {{-- begin::form --}}
                <div class="form-login">
                    <form action="register" method="post">
                        @csrf
                        <!--begin::Fullname-->
                        <div class="input-control">
                            <input type="text" placeholder="Fullname" id="fullname" name="fullname" autocomplete="off" class="form-control bg-transparent" required>
                        </div>
                        <!--end::Fullname-->
                        <br>
                        <!--begin::Email-->
                        <div class="input-control">
                            <input type="email" placeholder="Email Address" id="email" name="email" autocomplete="off" class="form-control bg-transparent" required>
                        </div>
                        <!--end::Email-->
                        <br>
                        <!--begin::Password-->
                        <div class="input-control">
                            <input class="form-control bg-transparent" type="password" placeholder="Password" id="password" name="password" autocomplete="off" required>
                        </div>
                        <!--end::Password-->
                        <br>
                        <!--begin::Repeat Password-->
                        <div class="input-control">
                            <input placeholder="Repeat Password" id="password_confirmation" name="password_confirmation" type="password" autocomplete="off" class="form-control bg-transparent" required>
                        </div>
                        <!--end::Repeat Password-->
                        <br>
                        <div class="login-btn">
                            <button type="submit">Daftar</button>
                        </div>
                    </form>
                    <br>
                    <div class="navigasi-login">
                        <small>Sudah Punya Akun? <a href="login">Masuk Sekarang!</a></small>
                    </div>
                </div>
                {{-- end::form --}}
            </div>
        </div>
    </div>
</body>
</html>