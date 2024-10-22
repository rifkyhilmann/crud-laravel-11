<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Pages</title>
</head>
<body>
    <div class="min-h-80 w-full  mt-2 flex flex-col items-center">
        <div class="w-full h-12 flex items-center">
            <p class="text-lg ml-3">Master Data User</p>
        </div>
        <div class="w-11/12 h-max min-h-20 flex flex-col">
            <div class="w-full h-10 flex items-center justify-end mb-4">
                <a href="{{ route('tambahData') }}" class="w-40 rounded hover:bg-blue-200 text-white justify-center font-bold h-10 bg-blue-400 flex items-center">
                    Tambah Data User
                </a>
            </div>
            <div class="overflow-x-auto w-full mb-10">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">No</th>
                            <th class="px-4 py-2">NIM</th>
                            <th class="px-4 py-2">Nama</th>
                            <th class="px-4 py-2">Alamat</th>
                            <th class="px-4 py-2">Kelas</th>
                            <th class="px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswa as $no => $data)
                        <tr class="border-b">
                            <td class="px-4 py-2">{{ $no+1 }}</td>
                            <td class="px-4 py-2">{{ $data->NIM }}</td>
                            <td class="px-4 py-2">{{ $data->Nama }}</td>
                            <td class="px-4 py-2">{{ $data->Alamat }}</td>
                            <td class="px-4 py-2">{{ $data->Kelas }}</td>
                            <td class="px-4 py-2">{{ $data->no_hp }}</td>
                            <td class="px-4 py-2 flex gap-2">
                                <a href="{{ route('updateData', $data->id) }}" class="h-10 w-20 bg-green-400 text-white flex items-center justify-center rounded">Update</a>
                                <form action="{{ route('DeleteData', $data->id ) }}" method="post">
                                    @csrf 
                                    <button class="h-10 w-20 bg-red-400 text-white flex items-center justify-center rounded">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>