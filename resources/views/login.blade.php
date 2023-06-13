<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="assets/css/login.css">
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
                <h1>Masuk</h1>
                <!--begin::Google link=-->
                <div class="logo_google">
                    <a href="" class="btn-google">
                        <img src="assets/img/google.png" width="50px" alt="Google Logo" class="google-logo">
                        <span>Masuk dengan Google</span>
                    </a>
                </div>
                <!--end::Google link=-->
                <p>atau masuk dengan</p>
                {{-- begin::form --}}
                <div class="form-login">
                    <form action="login" method="post">
                        @csrf
                        <!--begin::Email-->
                        <div class="input-control">
                            <input type="email" placeholder="email@example.com" id="email" name="email" autofocus required>
                        </div>
                        <!--end::Email-->
                        <br>
                        <!--begin::Password-->
                        <div class="input-control">
                            <input type="password" placeholder="Password" id="password" name="password" autocomplete="off" required>
                        </div>
                        <!--end::Password-->
                        <br>
                        <div class="login-btn">
                            <button type="submit">Masuk</button>
                        </div>
                    </form>
                    <br>
                    <div class="navigasi-login">
                        <small>Belum Punya Akun? <a href="register">Daftar Sekarang!</a></small>
                        <small><a href="">Lupa Password</a></small>
                    </div>
                </div>
                {{-- end::form --}}
            </div>
        </div>
    </div>
</body>
</html>