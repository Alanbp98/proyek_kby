<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    <link rel="stylesheet" href="../assets/css/layouts-css/main1.css">
</head>
<body>
    {{-- begin::navbar --}}
    @include('layouts.partials.navbar1')
    {{-- end::navbar --}}

    {{-- begin::konten --}}
    @yield('landing-page')
    {{-- end::konten --}}

    {{-- begin::about --}}
    @include('layouts.partials.about')
    {{-- begin::about --}}

    {{-- begin::footer --}}
    @include('layouts.partials.footer')
    {{-- begin::footer --}}
</body>
</html>