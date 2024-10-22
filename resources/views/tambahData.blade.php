<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tambah Data</title>
</head>
<body>
    <div class="min-h-80 w-full bg-white mt-2 flex flex-col items-center ">
        <div class="w-full h-max min-h-20  flex flex-col">
            <div class="w-full h-16  flex items-center ml-10 mb-3 mt-3">
                <p class="text-lg">Tambah Data User</p>
            </div>
            <form action="{{ route('tambahDataSubmit') }}" method="post" class="w-full flex flex-col items-center gap-3 mb-10">
                @csrf
                <input type="text" name="NIM" class="w-9/12 bg-gray-100 border-1 text-sm h-10 indent-2 border-gray-200 border focus:outline-blue-400" placeholder="Masukan NIM" >
                <input type="text" name="Nama" class="w-9/12 bg-gray-100 border-1 text-sm h-10 indent-2 border-gray-200 border focus:outline-blue-400" placeholder="Masukan Nama" >
                <input type="text" name="Alamat" class="w-9/12 bg-gray-100 border-1 text-sm h-10 indent-2 border-gray-200 border focus:outline-blue-400" placeholder="Masukan Alamat" >
                <input type="text" name="Kelas" class="w-9/12 bg-gray-100 border-1 text-sm h-10 indent-2 border-gray-200 border focus:outline-blue-400" placeholder="Masukan Kelas" >
                <button class="w-9/12 rounded h-10 bg-blue-400 mt-4 text-white font-bold hover:bg-blue-300">Submit</button>
            </form>
        </div>
        
</body>
</html>