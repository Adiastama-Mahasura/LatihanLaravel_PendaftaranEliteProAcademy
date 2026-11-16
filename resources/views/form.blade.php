<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran - Elite Pro Academy</title>
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
            max-width: 700px;
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
            margin-bottom: 10px;
        }
        p {
            margin-bottom: 20px;
            color: #475569;
            font-size: 14px;
        }
        /* Form Elements */
        label {
            display: block;
            font-weight: 600;
            color: #334155;
            margin-bottom: 6px;
            font-size: 14px;
        }
        input[type="text"],
        input[type="date"],
        select,
        textarea {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-size: 14px;
            color: #334155;
            background-color: #fff;
            margin-bottom: 15px;
            transition: border-color 0.2s;
        }
        input[type="text"]:focus,
        input[type="date"]:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }
        textarea {
            resize: vertical;
            min-height: 90px;
        }
        /* Buttons */
        .btn {
            display: inline-block;
            background-color: #2563eb;
            color: white;
            padding: 10px 20px;
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
            margin-top: 15px;
            margin-right: 10px;
        }
        .btn-secondary:hover {
            background-color: #475569;
        }
        .error-msg {
            color: #dc2626;
            background: #fee2e2;
            padding: 10px 15px;
            border-radius: 6px;
            margin-bottom: 15px;
            font-size: 14px;
        }
        .links-group {
            margin-top: 20px;
            display: flex;
            gap: 15px;
        }
        .links-group a {
            color: #2563eb;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
        }
        .links-group a:hover {
            text-decoration: underline;
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

        <h2>FORMULIR PENDAFTARAN PEMAIN</h2>
        <p>Silakan isi biodata berikut dengan benar.</p>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="error-msg">{{ $error }}</div>
            @endforeach
        @endif

        <form action="{{ isset($pendaftar) ? route('pendaftar.update', $pendaftar->id) : route('pendaftar.store') }}" method="POST">
            @csrf

            @if(isset($pendaftar))
                @method('PUT')
            @endif

            <label>Nama Lengkap:</label>
            <input type="text" name="nama" value="{{ old('nama', $pendaftar->nama ?? '') }}" required placeholder="Masukkan nama lengkap">

            <label>Tempat Lahir:</label>
            <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir', $pendaftar->tempat_lahir ?? '') }}" required placeholder="Masukkan tempat lahir">

            <label>Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $pendaftar->tanggal_lahir ?? '') }}" required>

            <label>Jenis Kelamin:</label>
            <select name="jenis_kelamin" required>
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="Laki-laki" {{ old('jenis_kelamin', $pendaftar->jenis_kelamin ?? '') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ old('jenis_kelamin', $pendaftar->jenis_kelamin ?? '') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>

            <label>Nomor HP:</label>
            <input type="text" name="no_hp" value="{{ old('no_hp', $pendaftar->no_hp ?? '') }}" required placeholder="Contoh: 081234567890">

            <label>Posisi Bermain:</label>
            <select name="posisi" required>
                <option value="">-- Pilih Posisi --</option>
                @foreach (['Penjaga Gawang', 'Bek', 'Gelandang', 'Penyerang'] as $posisi)
                    <option value="{{ $posisi }}" {{ old('posisi', $pendaftar->posisi ?? '') == $posisi ? 'selected' : '' }}>
                        {{ $posisi }}
                    </option>
                @endforeach
            </select>

            <label>Alamat:</label>
            <textarea name="alamat" required placeholder="Masukkan alamat lengkap">{{ old('alamat', $pendaftar->alamat ?? '') }}</textarea>

            <button type="submit" class="btn">
                {{ isset($pendaftar) ? 'Update Data' : 'Simpan Data' }}
            </button>
        </form>

        <div class="links-group">
            <a href="{{ url('/epa/pendaftar') }}">Lihat Data Pendaftar</a>
            <a href="{{ url('/epa') }}">Kembali ke Beranda</a>
        </div>
    </div>

</body>
</html>