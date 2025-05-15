<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pencatatan Keuangan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-xl p-6">
        <h1 class="text-2xl font-bold mb-4 text-center">📒 Pencatatan Keuangan</h1>
        <nav class="mb-6 text-center space-x-4">
            <a href="{{ route('transaksi.index') }}" class="text-blue-500">Lihat Catatan</a>
            <a href="{{ route('transaksi.create') }}" class="text-green-500">Tambah Data</a>
        </nav>
        @yield('content')
    </div>
</body>
</html>