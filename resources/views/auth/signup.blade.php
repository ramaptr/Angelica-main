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
    <div class="flex -mx-1 h-screen overflow-y-hidden w-screen">
        {{-- KIRI --}}
        <div class="bg-[#fff] mb-6 w-[50vw] flex justify-center items-center">
            <div class="flex flex-col gap-4 ">
                <img class="h-32 -mb-3 object-none" src={{ asset('/img/Logo.png') }} alt="">
                <h1 class="font-bold text-2xl text-center">Sign Up</h1>
                {{-- <div class="py-2 text-center border-2 font-bold bg-white rounded-xl">
                    <h1>Continue with google</h1>
                </div> --}}
                <div class="divider -my-1">OR</div>
                <form action="{{route('register')}}" method="POST" class="flex flex-col gap-4  rounded-xl h-full">
                    @csrf
                    @method('POST')
                    <div class="flex gap-4 w-full mb-3">
                        <input type="text" name="first_name" placeholder="First Name" class="border-2 h-10 p-3 rounded-lg w-full" />
                        <input type="text" name="last_name" placeholder="Last Name" class="border-2 h-10 p-3 rounded-lg w-full" />
                    </div>
                    <input type="text" name="email" placeholder="Email" class="border-2 h-10 p-3 rounded-lg w-full" />
                    <input type="text" name="phone" placeholder="Phone" class="border-2 h-10 p-3 rounded-lg w-full" />
                    <input type="password" name="password" placeholder="Password" class="border-2 h-10 p-3 rounded-lg w-full" />
                    <input type="password" name="confirm_password" placeholder="Confirm Password" class="border-2 h-10 p-3 rounded-lg w-full" />
                    <button class="rounded-lg w-[5em] font-semibold py-1 text-center bg-[#764507] text-white" >Sign Up</button>
                </form>
                <div class="flex justify-between items-end">
                    {{-- <a href="/dashboard"
                        >Sign Up</a> --}}
                    <p class="text-center text-gray-400">Already have an account? <a href="/"
                            class="underline-offset-2 text-[#764507] underline">Login here</a></p>
                </div>
            </div>
        </div>
        {{-- KIRI --}}

        <div class="h-screen w-[50vw]">
            <img class="object-none object-cover" src={{ asset('/img/signupPattern.png') }} alt="">
        </div>
    </div>

</body>

</html>
