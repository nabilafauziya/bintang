<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Vaksinasi</title>
</head>
<body>
    <form action="" method="post" align="center">
        <h1>Syarat Masuk Ke MIKO MALL</h1>

        <table align="center">
            <tr>
                <td><label for="nama">Nama Anda </label></td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td><label>Status Vaksin</label></td>
                <td>:</td>
                <td>
                    <select name="status">
                        <option value="Sudah Vaksin" name="s1">--- Sudah Vaksin ---</option>
                        <option value="Belum Vaksin" name="s2">--- Belum Vaksin ---</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="kirim" value="Kirim"></td>
            </tr>
            <br><br>
        </table>
    </form>

    <?php
    
    if (isset ($_POST ["kirim"])){
        $nama = $_POST ["nama"];
        $status = $_POST ["status"];

        echo "Nama Anda : $nama  <br>";
        echo "Status Vaksin : $status <br>";

        if (isset ($_POST ["status"])){

        
            if ($status == "s1"){
               echo "Sudah Vaksin";
               echo "<i> Diizinkan </i>";
            }
            else if ($status == "s2"){
               echo "Belum Vaksin";
               echo "<i> Tidak Diizinkan </i>";
            
               
            }
       }


    }
    
    
    ?>
    <p align="center">
        <a href="https://www.pedulilindungi.id/">Silahkan Daftar Vaksin</a>
    </p>


</body>
</html>