<!DOCTYPE html>
<html>

<head>
    <title>Riwayat Pendidikan</title>
</head>

<body>

    <table align="center" border="1" width="60%">

        <tr>
            <td colspan="6" align="center">
                <font face="courier">
                    <b>RIWAYAT PENDIDIKAN</b>
                </font>
            </td>
        </tr>

        <tr align="center">
            <th>No</th>
            <th>Jenjang</th>
            <th>Nama Sekolah</th>
            <th>Jurusan</th>
            <th>Tahun Masuk</th>
            <th>Tahun Lulus</th>
        </tr>

        <tr align="center">
            <td>1</td>
            <td>{{ $jnjng }}</td>
            <td>{{ $jng_sekolah }}</td>
            <td>{{ $jrsnsmk }}</td>
            <td>{{ $masuk_smk }}</td>
            <td>{{ $lulus_smk }}</td>
        </tr>

        <tr align="center">
            <td>2</td>
            <td>{{ $jnjng2 }}</td>
            <td>{{ $jng_pt }}</td>
            <td>{{ $jrsnpt }}</td>
            <td>{{ $masuk_pt }}</td>
            <td>-</td>
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
