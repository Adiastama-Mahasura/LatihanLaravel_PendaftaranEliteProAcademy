<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftar - Elite Pro Academy</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background-color: #f4f6f9;
            color: #333;
            line-height: 1.6;
        }
        /* Navbar */
        .navbar {
            background-color: #ffffff;
            padding: 15px 30px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            display: flex;
            gap: 20px;
        }
        .navbar a {
            text-decoration: none;
            color: #2563eb;
            font-weight: 600;
            font-size: 14px;
        }
        .navbar a:hover {
            color: #1d4ed8;
        }
        /* Container */
        .container {
            max-width: 1000px;
            margin: 40px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        h1 {
            color: #1e293b;
            font-size: 24px;
            margin-bottom: 15px;
        }
        hr {
            border: 0;
            height: 1px;
            background: #e2e8f0;
            margin-bottom: 20px;
        }
        h2 {
            font-size: 20px;
            color: #334155;
            margin-bottom: 15px;
        }
        p {
            margin-bottom: 15px;
            color: #475569;
        }
        /* Buttons */
        .btn {
            display: inline-block;
            background-color: #2563eb;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
            text-decoration: none;
            font-size: 14px;
            transition: background 0.2s;
        }
        .btn:hover {
            background-color: #1d4ed8;
        }
        .btn-secondary {
            background-color: #64748b;
        }
        .btn-secondary:hover {
            background-color: #475569;
        }
        .btn-danger {
            background-color: #ef4444;
            padding: 5px 10px;
            font-size: 12px;
        }
        .btn-danger:hover {
            background-color: #dc2626;
        }
        .btn-warning {
            background-color: #f59e0b;
            padding: 5px 10px;
            font-size: 12px;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            display: inline-block;
        }
        .btn-warning:hover {
            background-color: #d97706;
        }
        /* Table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            margin-bottom: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
            font-size: 14px;
        }
        th {
            background-color: #f8fafc;
            color: #334155;
            font-weight: 600;
        }
        tr:hover {
            background-color: #f8fafc;
        }
        .action-flex {
            display: flex;
            gap: 5px;
            align-items: center;
        }
        .alert-success {
            color: #16a34a;
            background: #dcfce7;
            padding: 10px 15px;
            border-radius: 6px;
            margin-bottom: 15px;
            font-size: 14px;
        }
        .mt-20 {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <a href="{{ url('/epa') }}">Beranda</a>
        <a href="{{ url('/epa/pendaftar') }}">Data Pendaftar</a>
    </div>

    <div class="container">
        <h1>ELITE PRO ACADEMY</h1>
        <hr>

        <h2>DATA PENDAFTAR PEMAIN</h2>

        <p>Berikut adalah daftar calon pemain Elite Pro Academy.</p>

        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('pendaftar.create') }}" class="btn">Tambah Pendaftar</a>

        <br><br>

        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>No HP</th>
                <th>Posisi</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>

            @forelse($pendaftars as $key => $p)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->tempat_lahir }}</td>
                <td>{{ $p->tanggal_lahir }}</td>
                <td>{{ $p->jenis_kelamin }}</td>
                <td>{{ $p->no_hp }}</td>
                <td>{{ $p->posisi }}</td>
                <td>{{ $p->alamat }}</td>
                <td>
                    <div class="action-flex">
                        <a href="{{ route('pendaftar.edit', $p->id) }}" class="btn-warning">Edit</a>

                        <form action="{{ route('pendaftar.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="9" style="text-align: center; color: #64748b;">Belum ada data pendaftar.</td>
            </tr>
            @endforelse
        </table>

        <a href="{{ url('/epa') }}" class="btn btn-secondary mt-20">Kembali ke Beranda</a>
    </div>

</body>
</html>