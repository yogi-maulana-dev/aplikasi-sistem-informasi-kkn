<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Cetak</title>
    <style>
        body {
            font-family: "Calibri", Courier, monospace;
            font-size: 14px;
            margin: 0;
            padding: 0;
        }
        #print {
            margin: auto;
            text-align: center;
            width: 1200px;
            font-size: 14px;
        }
        .title {
            margin: 20px;
            text-align: right;
            font-size: 12px;
        }
        span {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            font-size: 18px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 10px;
        }
        .table1 {
            border-collapse: collapse;
            width: 90%;
            text-align: center;
            margin: 10px;
        }
        table hr {
            border: 3px double #000;
        }
        .ttd {
            float: right;
            width: 250px;
            background-position: center;
            background-size: contain;
        }
        table th {
            color: #000;
            font-family: Verdana, Geneva, sans-serif;
            font-size: 12px;
        }
        #logo {
            width: 111px;
            height: 90px;
            padding-top: 10px;
            margin-left: 10px;
        }
        h2, h3 {
            margin: 0;
        }
    </style>
</head>
<body>
    <table class='table1'>
        <tr>
            <td>
                <img src='logoq.png' height="100" width="100">
            </td>
            <td>
                <h2>Scrip Print Data dan Save PDF Pada PHP dan MySQL</h2>
                <h2>kodingbuton.com</h2>
                <p style="font-size: 14px;"><i>Jl. kodingbuton.com</i></p>
            </td>
        </tr>
    </table>
    <table class='table'>
        <tr>
            <td>
                <hr />
            </td>
        </tr>
    </table>
    <h3>LAPORAN DATA CONTOH</h3>
    <table border='1' class='table' width="90%">
        <tr>
            <th width="30">No.</th>
            <th>Nama Lengkap</th>
            <th>Tempat Tanggal Lahir</th>
            <th>Usia</th>
            <th>Kelamin</th>
            <th>Alamat</th>
            <th>No. HP</th>
        </tr>
        <tr>
            <td><center>1</center></td>
            <td>yo</td>
            <td>lo</td>
            <td>Tahun</td>
            <td>as</td>
            <td>dasd</td>
            <td>dasd</td>
        </tr>
    </table>

        <table width="450" align="right" class="ttd">
            <tr>
                <td width="100px" style="padding:20px;" align="center">
                    <strong>kodingbuton.com,</strong>
                    <br><br><br><br>
                    <strong><u>TTD</u><br></strong><small></small>
                </td>
            </tr>
        </table>

</body>
</html>
