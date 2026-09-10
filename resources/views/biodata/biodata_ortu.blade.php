<!DOCTYPE html>
<html>

<head>
    <title>Biodata Orang Tua</title>
</head>

<body>

    <table align="center" border="1" width="35%">

        <tr>
            <td colspan="2" align="center">
                <font face="courier">
                    <b>BIODATA ORANG TUA</b>
                </font>
            </td>
        </tr>

        <tr>
            <td>Nama Ayah:</td>
            <td>{{ $Bapak }}</td>
        </tr>

        <tr>
            <td>Pekerjaan Ayah:</td>
            <td>{{ $Krj_bpk }}</td>
        </tr>

        <tr>
            <td>Nama Ibu:</td>
            <td>{{ $mama }}</td>
        </tr>

        <tr>
            <td>Pekerjaan Ibu:</td>
            <td>{{ $Krj_mama }}</td>
        </tr>

        <tr>
            <td>Alamat:</td>
            <td>{{ $omah1 }}</td>
        </tr>

        <tr>
            <td>No. Telp:</td>
            <td>{{ $telp1 }}</td>
        </tr>

    </table>

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
