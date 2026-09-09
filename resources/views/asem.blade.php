<!DOCTYPE html>
<html>

<head>
    <title>Tugas Table Biodata</title>
</head>

<body>

    <table align="center" border="1" height="60%" width="60%">

        <tr>
            <td colspan="3" align="center">
                <font face="courier">
                    <b>BIODATA</b>
                </font>
            </td>
        </tr>

        <tr>
            <td width="20%">Nama:</td>

            <td width="50%">
                Aldyyan Putra Prasetya
            </td>

            <td width="30%" rowspan="7" align="center">
                <img src="{{ asset('images/tugas.jpeg') }}" width="250" height="300">
            </td>
        </tr>

        <tr>
            <td>Tempat Tanggal Lahir:</td>
            <td>Magetan, 13 Januari 2007</td>
        </tr>

        <tr>
            <td>NIP:</td>
            <td>253107050006</td>
        </tr>

        <tr>
            <td>Program Studi:</td>
            <td>Manajemen Informatika</td>
        </tr>

        <tr>
            <td>Jurusan:</td>
            <td>Teknologi Informasi</td>
        </tr>

        <tr>
            <td>Alamat:</td>
            <td>Malang</td>
        </tr>

        <tr>
            <td>No. Telp:</td>
            <td>081230223017</td>
        </tr>

    </table>

    <br>

    <div align="center">
        <a href="/biodata_mhs">
            <button>Biodata Diri</button>
        </a>

        <a href="/biodata_ortu">
            <button>Biodata Orang Tua</button>
        </a>

        <a href="/riwayat_pendidikan">
            <button>Riwayat Pendidikan</button>
        </a>
    </div>

</body>

</html>
