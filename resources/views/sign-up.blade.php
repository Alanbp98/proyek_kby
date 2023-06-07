<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>
    <link rel="stylesheet" href="assets/css/sign-up.css">
    <script src="assets/js/sign-up.js"></script>
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
                    <div>
                        <!--begin::Form-->
                        <form id="form">
                            <!--begin::Heading-->
                            <div>
                                <!--begin::Title-->
                                <h1>Create Account</h1>
                                <!--end::Title-->
                            </div>
                            <!--begin::Heading-->
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
                                <br>
                                <span>~OR~</span>
                            </div>
                            <!--end::Separator-->
                            <!--begin::Input group=-->
                            <div>
                                <!--begin::Fullname-->
                                <div class="input-control">
                                    <input type="text" placeholder="Fullname" id="fullname" name="fullname" autocomplete="off" class="form-control bg-transparent" required>
                                    <span><hr></span>
                                    <div class="error"></div>
                                </div>
                                <!--end::Fullname-->
                                <br>
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
                                <br>
                                <!--begin::Repeat Password-->
                                <div class="input-control">
                                    <input placeholder="Repeat Password" id="password2" name="confirm-password" type="password" autocomplete="off" class="form-control bg-transparent" required>
                                    <span><hr></span>
                                    <div class="error"></div>
                                </div>
                                <!--end::Repeat Password-->
                            </div>
                            <!--end::Input group=-->
                            <br>
                            <!--begin::Submit button-->
                            <div class="create-btn">
                                <button type="submit" id="kt_sign_up_submit" class="btn btn-primary"><span><a href="sign-in">Create Account</a></span></button>
                            </div>
                            <!--end::Submit button-->
                            <!--begin::Login-->
                            <div class="alt-opt">Already have an Account?
                                <a href="sign-in">Login</a>
                            </div>
                            <!--end::Login-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 