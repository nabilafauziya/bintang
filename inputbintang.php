<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Bintang</title>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <td><label for="masukkan">Masukkan Bintang </label></td>
                <td>
                    <input type="text" name="bintang" id="masukkan">
                    <br><br>
                </td>
            </tr>
            <tr>
                <td><label>Pilih Bentuk Segitiga Bintang  </label></td>
                <td>
                    <label><input type="radio" name="pilih1" >Siku Siku</label>
                    <br>
                    <label><input type="radio" name="pilih2" >Sempurna</label>
                    <br>
                    <label><input type="radio" name="pilih3" >Siku Terbalik</label>
                    <br>
                    <label><input type="radio" name="pilih4" >Sempurna Terbalik</label>
                    <br><br>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
            <br><br>
        </table>
    </form>

    <?php

    if (isset ($_POST ["submit"])) {
        $bintang = $_POST ["bintang"];
        
            if (isset ($_POST ["pilih1"])){  // INI BINTANG SIKU SIKU
             for ($a = $bintang; $a > 0; $a--) {
                 for ($b = $bintang; $b >= $a; $b--){
                    echo "*";
                  }
                     echo "<br>";
                }

              echo "<br>";
            }
            else if (isset ($_POST ["pilih2"])){  // INI BINTANG SEMPURNA
             for($a = 1; $a <= $bintang; $a++){
                for($b = $bintang; $b >= $a; $b-=1){
                   echo "&nbsp";
                }
                 for($c = 1; $c <= $a; $c++){
                    echo "*";
                }
              echo "<br>";
                }
            }
            else if (isset ($_POST ["pilih3"])) {  // INI BINTANG SIKU SIKU TERBALIK
              for ($i = 0; $i < $bintang; $i++){
                 for ($j = $i; $j < $bintang; $j++) {
                    echo "*";
                  }
                   echo "<br> ";
                }
            }
            else if (isset ($_POST ["pilih4"])){  // INI BINTANG SEMPURNA TERBALIK
                for($k = 1; $k <= $bintang; $k++){
                    for($l = 1; $l <= $k; $l++){
                        echo "&nbsp";
                    }
                    for($m = $bintang; $m >= $k; $m-=1){
                        echo "*";
                    }
                    echo "<br>";
                }
            }
        
    }

    ?>


</body>
</html>
