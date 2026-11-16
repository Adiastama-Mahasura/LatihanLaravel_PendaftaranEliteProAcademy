<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Pro Academy</title>
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
            max-width: 800px;
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
        h3 {
            font-size: 16px;
            color: #334155;
            margin-top: 25px;
            margin-bottom: 15px;
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
            margin-right: 10px;
        }
        .btn:hover {
            background-color: #1d4ed8;
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

        <h2>Selamat Datang di Elite Pro Academy!</h2>

        <p>
            Selamat datang di website resmi pendaftaran Elite Pro Academy.
        </p>

        <p>
            Kami membuka kesempatan bagi generasi muda untuk mengembangkan bakat dan kemampuan dalam dunia sepak bola.
        </p>

        <h3>Silakan pilih menu:</h3>

        <a href="{{ url('/epa/pendaftar/create') }}" class="btn">Form Pendaftaran</a>
        <a href="{{ url('/epa/pendaftar') }}" class="btn" style="background-color: #475569;">Data Pendaftar</a>
    </div>

</body>
</html>