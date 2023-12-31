<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    {{-- DisyUI --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.19/dist/full.min.css" rel="stylesheet" type="text/css" />
    {{-- DisyUI --}}

    <!-- Add these links to your HTML file -->

    <title>Document</title>
</head>

<style>
    .gambar {
        /* background-image: url({{ url('/img/MenuBackground.png') }}); */
        background-size: cover;
    }
</style>

<body data-theme="cupcake">
    {{-- NAVBAR --}}
    @include('layout.navbar')
    {{-- NAVBAR --}}
    <div class="w-full h-[20em] flex flex-col items-center justify-center"
        style="background-image: url({{ url('/img/aboutUs.png') }}); background-size: cover">
        <h1 class="text-4xl font-bold text-white mb-4">About Us</h1>
        <p class="text-white text-xl w-[20em] text-center">Welcome to angelica catering, where
            every bite tells a story</p>
    </div>


    {{-- OUR MENU --}}

    <div class="flex my-6 justify-between px-[10em]">
        <div class="w-1/2">
            <div class="flex gap-2 items-center my-4">
                <h1 class="font-bold">Our Story</h1>
                <img class="h-3" src={{ asset('img/garisAboutUs.png') }} alt="">
            </div>
            <img src={{ asset('/img/AngelicaCatering.png') }} alt="" class="my-4">
            <p class="w-[60%]">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Mi eget mauris pharetra et ultrices.</p>
        </div>
        <div class="flex gap-2">
            <img src={{ asset('img/koki.png') }} alt="">
            <div class="flex flex-col justify-between   ">
                <img src={{ asset('img/masakan1.png') }} alt="">
                <img src={{ asset('img/masakan2.png') }} alt="">
            </div>
        </div>
    </div>

    {{-- OUR MENU --}}

    {{-- FOOTER --}}


    {{-- FOOTER --}}
    </div>
    @include('layout.footer')




</body>

</html>