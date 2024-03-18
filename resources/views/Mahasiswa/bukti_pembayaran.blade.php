<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanda Bukti Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h1 {
            text-align: center;
        }
        .info {
            margin-bottom: 20px;
        }
        .info p {
            margin: 5px 0;
        }
        .info p strong {
            margin-right: 10px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tanda Bukti Pembayaran</h1>
        <div class="info">
            <p><strong>NPM:</strong> {{ $mahasiswa->npm }}</p>
            <p><strong>Nama Lengkap:</strong> {{ $mahasiswa->namalengkap }}</p>
            <p><strong>Email:</strong> {{ $mahasiswa->email }}</p>
            <p><strong>Jenis Kelamin:</strong> {{ $mahasiswa->jk }}</p>
            <p><strong>No. HP:</strong> {{ $mahasiswa->nohp }}</p>
            <p><strong>Alamat:</strong> {{ $mahasiswa->alamat }}</p>
            <p><strong>Fakultas:</strong> {{ $mahasiswa->fakultas }}</p>
            <p><strong>Jurusan:</strong> {{ $mahasiswa->jurusan }}</p>
            <p><strong>Size Baju:</strong> {{ $mahasiswa->sizebaju }}</p>
            <!-- Tambahkan informasi pembayaran lainnya sesuai kebutuhan -->
        </div>
        <div class="footer">
            <p>Terima kasih telah melakukan pembayaran.</p>
            <p>Harap simpan tanda bukti pembayaran ini sebagai bukti.</p>
        </div>
    </div>
</body>
</html>
