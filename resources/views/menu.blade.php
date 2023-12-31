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

    <title>Daftar Menu</title>
    
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
    <div class="w-full h-[20em] flex flex-col justify-center items-center"
        style="background-image: url({{ url('/img/MenuBackground.png') }}); background-size: cover">
        <h1 class="text-4xl font-bold text-white mb-4">Menu</h1>
        <p class="text-white text-xl w-[20em] text-center">Explore the tastes, catering
            menus for every palate!</p>

        {{-- <img src={{ asset('/img/MenuBackground.png') }} class="w-full h-full" alt=""> --}}
    </div>

    {{-- OUR MENU --}}

    <div class="flex flex-col justify-center w-full mt-[6em]">
        {{-- <ul class="mx-auto flex gap-4 font-bold mb-[2em]">
            <li><a href="">Nasi Kotak</a></li>
            <li><a href="">Snack Box</a></li>
            <li><a href="">Coffee Break</a></li>
            <li><a href="">Lainnya</a></li>
        </ul> --}}

        @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded relative" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.293 5.293a1 1 0 011.414 0l.293.293V7a1 1 0 01-2 0V5.586l.293-.293a1 1 0 111.414 1.414L13 7.414l1.293-1.293a1 1 0 111.414 1.414L14.414 9l1.293 1.293a1 1 0 11-1.414 1.414L13 10.414l-1.293 1.293a1 1 0 11-1.414-1.414L11.586 9l-1.293-1.293a1 1 0 010-1.414 1 1 0 011.414 0L13 7.586l1.293-1.293z"/></svg>
            </span>
        </div>
        @endif
        <div class="w-full flex flex-wrap gap-3 mt-3 justify-center mb-8">
            @foreach ($produk as $item)
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5">
                    <div class="card card-compact w-full bg-base-100 shadow-xl">
                        <figure><img class="object-cover" src={{ asset('/img/Menu_makanan.png') }} alt="Shoes" />
                            <div class="absolute top-[10px] right-[15px]">
                                <h1 class="py-2 text-semibold px-3 bg-white text-gray-400 rounded-xl">{{$item->harga}}</h1>
                            </div>
                        </figure>
                        <div class="card-body">
                            <h2 class="card-title">{{$item->nama_Produk}}</h2>
                            <p>{{$item->deskripsi}}</p>
                            <div class="card-actions justify-end">
                                <a class="btn text-white bg-[#764507]" href="{{route('cart.add',$item->id_produk)}}">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- <ul class="text-black">
            <li>
                <p>1</p>
            </li>
            <li>
                <p>1</p>
            </li>
            <li>
                <p>1</p>
            </li>
            <li>
                <p>1</p>
            </li>
        </ul> --}}
    </div>

    {{-- OUR MENU --}}

    {{-- FOOTER --}}


    {{-- FOOTER --}}
    </div>
    @include('layout.footer')


</body>


</html>