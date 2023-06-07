<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-In</title>
    <link rel="stylesheet" href="assets/css/sign-in.css">
    <script src="assets/js/sign-in.js"></script>
</head>
<body>
    <div class="container">
        <div class="satu">
            <div class="satu1">
                <img src="assets/img/Logo KBY.png" alt="">
            </div>
            <div class="satu2">
                <h4 class="ayat">
                    " Karena sesungguhnya <br>
                    sesudah kesulitan itu ada <br>
                    kemudahan, sesungguhnya <br>
                    sesudah kesulitan itu ada <br>
                    kemudahan." <br>
                    (Q.S Al-Insyirah: 5-6)
                </h4>
            </div>
            <div class="satu3">
                <img src="assets/img/sign-up.jpeg" alt="">
            </div>
        </div>
        <div class="dua">
            <div class="dua1">
                <div class="dua11">
                    <!--begin::Form-->
                    <form id="form">
                        <!--begin::Heading-->
                        <div>
                            <!--begin::Title-->
                            <h1>Login</h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <br>
                        <!--begin::Login options-->
                        <div class="icon_login">
                            <!--begin::Col-->
                            <div class="logo_google">
                                <!--begin::Google link=-->
                                <a href="">
                                    <img alt="Logo" src="assets/img/google.png"/><h1>Sign in with Google</h1>
                                </a>
                                <!--end::Google link=-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="logo_facebook">
                                <!--begin::Google link=-->
                                <a href="">
                                <img alt="Logo" src="assets/img/facebook2.png"/><h1>Sign in with Facebook</h1>
                                </a>
                                <!--end::Google link=-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Login options-->
                        <!--begin::Separator-->
                        <div class="separator">
                            <span>~OR~</span>
                        </div>
                        <!--end::Separator-->
                        <!--begin::Input group=-->
                        <div>
                            <!--begin::Email-->
                            <div class="input-control">
                                <input type="email" placeholder="Email Address" id="email" name="email" autocomplete="off" class="form-control bg-transparent" required>
                                <span><hr></span>
                                <div class="error"></div>
                            </div>
                            <!--end::Email-->
                            <br>
                            <!--begin::Password-->
                            <div class="input-control">
                                <input class="form-control bg-transparent" type="password" placeholder="Password" id="password" name="password" autocomplete="off" required>
                                <span><hr></span>
                                <div class="error"></div>
                            </div>
                            <!--end::Password-->
                        </div>
                        <!--end::Input group=-->
                        <br>
                        <!--begin::Submit button-->
                        <div class="login-btn">
                            <button type="submit" id="kt_sign_up_submit" class="btn btn-primary"><span><a href="dashboard-admin">Login</a></span></button>
                        </div>
                        <!--end::Submit button-->
                        <br>
                        <div class="navigasi_login">
                            <!--begin::Register-->
                            <div>Not a Member yet?
                                <a href="sign-up">Register</a>
                            </div>
                            <!--end::Register-->
                            <!-- begin::forgetpassword-->
                            <div>Forget Password?
                                <a href="reset-password">Change Password</a>
                            </div>
                            <!-- end::forgetpassword-->
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
            </div>
        </div>
    </div>
</body>
</html> 