<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reset-password</title>
    <link rel="stylesheet" href="assets/css/reset-password.css">
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
                            <h1>Forgot Password ?</h1>
                            <p>Enter your email to reset your password.</p>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <br>
                        <!--begin::Input group=-->
                        <div>
                            <!--begin::Email-->
                            <div class="input-control">
                                <input type="email" placeholder="Email Address" id="email" name="email" autocomplete="off" class="form-control bg-transparent" required>
                                <span><hr></span>
                                <div class="error"></div>
                            </div>
                            <!--end::Email-->
                        </div>
                        <!--end::Input group=-->
                        <br>
                        <div class="button-rst-pswd">
                            <!--begin::Submit button-->
                            <div class="submitbtn">
                                <button type="submit" id="kt_sign_up_submit" class="btn btn-primary"><span><a href="new-password">Submit</a></span></button>
                            </div>
                            <!--end::Submit button-->
                            <!-- begin::Cancel button-->
                            <div class="cancelbtn">
                                <button type="submit" id="kt_sign_up_submit" class="btn btn-primary"><span>Cancel</span></button>
                            </div>
                            <!--end::Cancel button-->
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
            </div>
        </div>
    </div>
</body>
</html> 