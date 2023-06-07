<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new-password</title>
    <link rel="stylesheet" href="assets/css/new-password.css">
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
                            <h1>Setup New Password</h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <br>
                        <!--begin::Input group=-->
                        <div>
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
                        <!-- begin::persetujuan -->
                        <div class="persetujuan">
                            <label class="form-check form-check-inline">
                            <input type="checkbox">
                            <span>
                                I Agree & 
                                <a href="">Term and Conditions</a>
                            </span>
                        </div>
                        <!-- end::persetujuan -->
                        <br>
                        <!--begin::Submit button-->
                        <div class="submitbtn">
                            <button type="submit" id="kt_sign_up_submit" class="btn btn-primary"><span><a href="two-steps">Submit</a></span></button>
                        </div>
                        <!--end::Submit button-->
                    </form>
                    <!--end::Form-->
                </div>
            </div>
        </div>
    </div>
</body>
</html> 