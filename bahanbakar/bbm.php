<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oop bahan bakar</title>
    <style>
        *{
            margin: 0;
            padding: 0;      
        }

        body{
            font-family: arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }

        .outer{
            text-align:center;
            display: flex;
            flex-direction: column;
            border-top: dashed;
            border-bottom: dashed;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="outer">

        <?php
    $ppn= 0.1;
    $super= 15000;
    $power= 16000;
    $diesel= 17000;
    $nitro= 18000;

    if(isset($_POST['submit'])){
        $liter = $_POST['liter'];
        $tipe = $_POST['tipe'];
        $dasar = 0;
        
        switch ($tipe){
            case ("super");
            $harga1Liter= ($super);
            $dasar= ($super * $liter);
            $ppnDasar =($dasar *$ppn);
            $harga = ($dasar + $ppnDasar);
            break;
            case ("power");
            $harga1Liter= ($power);
            $dasar= ($power * $liter);
            $ppnDasar =($dasar *$ppn);
            $harga = ($dasar + $ppnDasar);
            break;
            case ("diesel");
            $harga1Liter= ($diesel);
            $dasar= ($diesel * $liter);
            $ppnDasar =($dasar *$ppn);
            $harga = ($dasar + $ppnDasar);
            break;
            case ("nitro");
            $harga1Liter= ($nitro);
            $dasar= ($nitro * $liter);
            $ppnDasar =($dasar *$ppn);
            $harga = ($dasar + $ppnDasar);
            break;
            default:
            echo "mohon masukkan tipe bahan bakar";
            return;
        }
        echo "<h2>Bukti Pembayaran </h2>";
        $a=array(1,2,3,4,5,6,7,8,9,0);
        $random_keys=array_rand($a,5);
        echo"No Transaksi: #";
        echo $a[$random_keys[0]];
        echo $a[$random_keys[1]];
        echo $a[$random_keys[2]];
        echo $a[$random_keys[3]];
        echo $a[$random_keys[4]];
        echo "<br>";
        $mydate=getdate(date("U"));
        echo "$mydate[mday] $mydate[month], $mydate[year] <br><br>";
        echo "Anda membeli bahan bakar minyak tipe $tipe <br>";
        echo "Dengan jumlah : $liter Liter <br>";
        echo "Harga per Liter: Rp. $harga1Liter<br>";
        echo "Harga Dasar: Rp. $dasar <br>";
        echo "PPN(10%): Rp. $ppnDasar<br><br>";
        echo "<hr> <br>";
        echo "Total yang harus anda bayar Rp. $harga <br>";
        
    }
    ?>
    </div>

    <div class="child">
        <form method="post" action="">
            <h4>masukkan jumlah liter</h4>
            <input type="number" id="liter" name="liter" required>
            <h4>pilih tipe bahan bakar</h4>
            <select name="tipe">
                <option value= "super">Shell Super</option>
                <option value= "power">Shell V-Power</option>
                <option value= "diesel">Shell V-Power Diesel</option>
                <option value= "nitro">Shell V-Power Nitro</option>
            </select><br>
            <button type="submit" name="submit">Hitung</button>
        </form>
    </div>
</body>
</html>