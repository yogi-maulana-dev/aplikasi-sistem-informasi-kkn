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
                <th>Nama Lengkap</th>
                <td>John Doe</td>
                <td rowspan="7" align="center"><img class="photo"
                        src="https://pusatkarir.polije.ac.id/assets/foto/17_E41171308.jpg" width="150" height="200"
                        alt="Foto Biodata"></td>
            </tr>
            <tr>
                <th>Tempat Tanggal Lahir</th>
                <td>Jakarta, 1 Januari 1990</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>Jl. Pahlawan No. 123, Jakarta</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>john.doe@example.com</td>
            </tr>
            <tr>
                <th>No. Telepon</th>
                <td>081234567890</td>
            </tr>
            <tr>
                <th>Pendidikan Terakhir</th>
                <td>S1 Teknik Informatika, Universitas ABC</td>
            </tr>
            <tr>
                <th>Pekerjaan</th>
                <td>Software Engineer</td>
            </tr>
        </table>
    </div>
</body>

</html>
