<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Edit Produk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
        <h1 class="text-2xl font-semibold mb-4">Edit Produk</h1>
        <form action="{{route('admin.produks.store')}}" method="POST" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <div class="mb-4">
                <label for="nama_Produk" class="block text-gray-600">Nama produk</label>
                <input type="text" name="nama_Produk" id="nama_Produk"  class="w-full border rounded px-3 py-2">
            </div>
            
            <div class="mb-4">
                <label for="deskripsi" class="block text-gray-600">Deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi"  class="w-full border rounded px-3 py-2">
            </div>
            
            <div class="mb-4">
                <label for="stok" class="block text-gray-600">Stok</label>
                <input type="number" name="stok" id="stok"  class="w-full border rounded px-3 py-2">
            </div>
            
            <div class="mb-4">
                <label for="harga" class="block text-gray-600">Harga</label>
                <input type="number" name="harga" id="harga"  class="w-full border rounded px-3 py-2">
            </div>
            
            <div class="mb-4">
                <label for="gambar" class="block text-gray-600">Gambar</label>
                <input type="file" name="gambar" id="gambar" accept="image/*" class="w-full border rounded px-3 py-2">
            </div>
            
            <div class="mb-4">
                <label for="id_kategori" class="block text-gray-600">Kategori</label>
                <select name="id_kategori" id="id_kategori" class="w-full border rounded px-3 py-2">
                    @foreach ($kategori as $item)
                        <option value="{{$item->id_kategori}}">{{$item->nama_kategori}}</option>
                    @endforeach
                </select>
            </div>
    
            <button type="submit" class="bg-blue-500 text-white rounded px-4 py-2 hover:bg-blue-600">Kirim</button>
        </form>
    </div>
</body>
</html>
