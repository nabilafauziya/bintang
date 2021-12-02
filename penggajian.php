<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggajian PT.Selalu Makmur Jaya</title>
</head>
<body>
    <form action="" method="post">

    <table>

        <h2>Penggajian Karyawan</h2>
        <h1>PT.Selalu Makmur Jaya</h1>

        <tr>
            <td><label for="bendahara">Nama Bendahara</label></td>
            <td>:</td>
            <td><input type="text" name="bendahara" id="bendahara"></td>
        </tr>
        <tr>
            <td><label for="pekerja">Nama Pekerja</label></td>
            <td>:</td>
            <td><input type="text" name="pekerja" id="pekerja"></td>
        </tr>
        <tr>
            <td><label for="jl">Jenis Kelamin</label></td>
            <td>:</td>
            <td>
                <label><input type="radio" name="jlL">Laki - Laki</label>
                <label><input type="radio" name="jlP">Perempuan</label>
            </td>
        </tr>
        <tr>
            <td><label for="tanggal">Tanggal Gaji</label></td>
            <td>:</td>
            <td><input type="date" name="tanggal" id="tanggal"></td>
        </tr>
        <tr>
            <td><label for="jabatan">Jabatan</label></td>
            <td>:</td>
            <td>
                <select name="jabatan">
                    <option value="direktur" name="jabatan1">--- Direktur ---</option>
                    <option value="manager" name="jabatan2">--- Manager ---</option>
                    <option value="sekertaris" name="jabatan3">--- Sekertaris ---</option>
                    <option value="karyawan" name="jabatan4">--- Karyawan ---</option>
                    <option value="ob" name="jabatan5">--- OB ---</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="pendidikan">Pendidikan Terakhir</label></td>
            <td>:</td>
            <td>
                <select name="pendidikan" >
                    <option value="sd" name="pendidikan1">--- SD ---</option>
                    <option value="smp" name="pendidikan2">--- SMP ---</option>
                    <option value="sma" name="pendidikan3">--- SMA ---</option>
                    <option value="s1" name="pendidikan4">--- S1 ---</option>
                    <option value="s2" name="pendidikan5">--- S2 ---</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="status">Status Pegawai</label></td>
            <td>:</td>
            <td>
                <label><input type="radio" name="status1">Tetap</label>
                <label><input type="radio" name="status2">Kontrak</label>
            </td>
        </tr>
        <tr>
            <td><label for="lembur">Lembur</label></td>
            <td>:</td>
            <td><input type="text" name="lembur"> Hari/Rp.20.000</td>
        </tr>
        <tr>
            <td><label for="bpjs">Potongan BPJS</label></td>
            <td>:</td>
            <td><input type="text" name="bpjs"></td>
        </tr>
        <tr>
            <td><input type="submit" name="kirim" value="KIRIM"></td>
        </tr>
    </table>


    </form>
</body>
</html>