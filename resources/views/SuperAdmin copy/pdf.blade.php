<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            max-width: 200px;
            margin-bottom: 10px;
        }
        .form {
            margin-bottom: 20px;
        }
        .form table {
            width: 100%;
            border-collapse: collapse;
        }
        .form table, .form th, .form td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        .signature {
            margin-top: 50px;
            text-align: right;
        }
        .signature p {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{ public_path('path/to/logo.png') }}" alt="Logo">
            <h2>Kop Surat</h2>
        </div>
        <div class="form">
            <table>
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>NPM</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Jenis Kelamin</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="{{ public_path($mahasiswa->gambar) }}" alt="Foto Mahasiswa" style="max-width: 100px;">
                        </td>
                        <td>{{ $mahasiswa->npm }}</td>
                        <td>{{ $mahasiswa->nama_lengkap }}</td>
                        <td>{{ $mahasiswa->email }}</td>
                        <td>{{ $mahasiswa->jenis_kelamin }}</td>
                        <td>{{ $mahasiswa->status }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="signature">
            <p>Tanda tangan:</p>
            <!-- Space untuk tanda tangan -->
        </div>
    </div>
</body>
</html>
