@extends('layouts.main1')

@section('landing-page')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="assets/css/landing-page.css">
</head>
<body>

    <!-- begin::konten -->
    <!-- begin::banner -->
    <div class="banner">
        <h1>NEWS</h1>
        <div class="bannerImg">
            <a href="program-page"><img src="assets/img/gambar1.jpg" alt=""></a>
        </div>
    </div>
    <!-- end::banner -->
    <!-- begin::program -->
    <div class="program">
        <h1>PROGRAM</h1>
        <div class="programfr">
            <div class="program1">
                <h1>Galang Dana</h1>
            </div>
            <div class="program2">
                <h1>Zakat</h1>
            </div>
            <div class="program3">
                <h1>Pendidikan</h1>
            </div>
        </div>
    </div>
    <!-- end::program -->
    
    <!-- begin::konten -->
    <br>
</body>
</html>

@endsection