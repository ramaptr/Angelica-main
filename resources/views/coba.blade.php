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
    {{-- NAVBAR --}}

    {{-- OUR MENU --}}

    <div class="flex flex-col justify-between min-h-screen pb-6">
        @include('layout.navbar')
        @include('components.addNewAddress')
        @include('components.addNewAddress')
    </div>

    {{-- OUR MENU --}}

    {{-- FOOTER --}}


    {{-- FOOTER --}}
    </div>
    <div class="w-full h-[40vh] bg-[#EDDBC7] flex justify-between py-6 px-[10em]">
        <div class="w-1/2">
            <img src={{ asset('/img/Logo.png') }} alt="">
            <p class="text-[#61677A] mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. </p>

            <p class="text-[#61677A] mt-6">© 2023 Angelica Cafe | All rights reserved</p>
        </div>
        <div>
            <ul class="flex gap-3">
                <li><a href="" class="font-bold text-xl text-[#85581F]">Home</a></li>
                <li><a href="" class="font-bold text-xl text-[#85581F]">Menu</a></li>
                <li><a href="" class="font-bold text-xl text-[#85581F]">About Us</a></li>
                <li><a href="" class="font-bold text-xl text-[#85581F]">Contact</a></li>
            </ul>
        </div>
    </div>




</body>

</html>