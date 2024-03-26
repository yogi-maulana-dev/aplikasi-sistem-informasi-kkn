<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            margin: 5px auto;
            position: relative;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-top: none;
            border-bottom: none;
            font-size: 14px;
            
            /* border: 1px solid black; */
        }

        th {
            background-color: #f2f2f2;
            width: 30%;
        }

        .photo {
            width: 100%;
        }

        .table1 {
            border-collapse: collapse;
            width: 100%;
            text-align: center;
            border: none;
        }

        h1,
        h2,
        h3 {
            margin-bottom: 10px;
        }


        .rangkasurat {
            width: 100%;
            background-color: #fff;
            height: auto;
            padding: 10px;
        }

        .table1 {
            border-bottom: 2px solid #000;
        }

        .tengah {
            text-align: center;
            line-height: 15px;
        }

        .ttd {
            float: right;
            width: 250px;
            background-position: center;
            background-size: contain;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="rangkasurat">
            <table class="table1" width="100%">
                <tr>
                    <td> <img src="https://uml.ac.id/wp-content/uploads/2022/10/LOGO-UML-PANJANG-3-200x41.png"
                            width="140px"> </td>
                    <td class="tengah">
                        <h3  style="color: green;">Universitas Muhammadiyah Lampung</h3>
                        <b style="font-size: 14px;">
                            Jl. ZA. Pagar Alam, Labuhan Ratu, Kec. Kedaton, Bandar Lampung 35132, Telp . (0811) 781 1414 </b>
                    </td>
                </tr>
            </table>
        </div>


        <table>
            <tr>
                <th>Nomor Pokok Mahasiswa</th>
                <td>{{ $mahasiswa->npm }}</td>
                <td rowspan="9" align="center"><img class="photo"
                        src="{{ $mahasiswa->gambar }}" width="150" height="200"
                        alt="Foto Biodata"></td>
            </tr>
            <tr>
                <th>Nama Lengkap</th>
                <td>{{ $mahasiswa->namalengkap }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $mahasiswa->email }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{ $mahasiswa->jk }}</td>
            </tr>
            <tr>
                <th>No. Telepon / HP</th>
                <td>{{ $mahasiswa->nohp }}</td>
            </tr>
            <tr>
                <th>Fakultas</th>
                <td>{{ $mahasiswa->fakultas }}</td>
            </tr>
            <tr>
                <th>Jurusan</th>
                <td>{{ $mahasiswa->jurusan }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{ $mahasiswa->alamat }}</td>
            </tr>
            <tr>
                <th>Size Ukuran Baju</th>
                <td>{{ $mahasiswa->sizebaju }}</td>
            </tr>
            <tr>
                <th>Bukti Pembayaran</th>
                <td colspan="2"> <img src="{{ $mahasiswa->gambarbayar }}" alt="Bukti Pembayaran" width="480" height="300"></td>
            </tr>
        </table>

        <table width="450" align="right" class="ttd">
            <tr>
                <td width="100px" style="padding:20px;" align="center">
                    <strong>projectyai.com,</strong>
                    <br><br><br><br>
                    <br><br>
                    <strong><u>TTD</u><br></strong><small></small>
                </td>
            </tr>
        </table>

    </div>
</body>

</html>
