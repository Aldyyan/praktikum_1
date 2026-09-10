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
                {{ $jeneng }}
            </td>

            <td width="30%" rowspan="7" align="center">
                <img src="{{ asset($gambar) }}" width="250" height="300">
            </td>
        </tr>

        <tr>
            <td>Tempat Tanggal Lahir:</td>
            <td>{{ $nggen }}</td>
        </tr>

        <tr>
            <td>NIP:</td>
            <td>{{ $nomor }}</td>
        </tr>

        <tr>
            <td>Program Studi:</td>
            <td>{{ $prgm }}</td>
        </tr>

        <tr>
            <td>Jurusan:</td>
            <td>{{ $jrsn }}</td>
        </tr>

        <tr>
            <td>Alamat:</td>
            <td>{{ $omah }}</td>
        </tr>

        <tr>
            <td>No. Telp:</td>
            <td>{{ $telp }}</td>
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
