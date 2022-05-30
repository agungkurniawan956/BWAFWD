<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <meta http-equiv='X-UA-Compatible' content='ie-edge'>
  <title>Belajar PHP</title>
  <link rel="stylesheet" href="styles/main.css">
</head>

<body>
  <div class="container">
    <div>
      <h2>Belajar PHP</h2>
    </div>
    <?php
    // Tipe Data
    $a = "ini tipe data string"; //string
    $b = 1000; //integer
    $c = true; //bolean
    $d = 10.5; //float
    $e = ["Satu, dua, Tiga"]; //array
    $f = null; //nul atau kosong

    var_dump($f);
    ?>

    <br>
    <br>
    <?php

    // Operator pada php
    // +, -, /, *, %, **.
    // berikut contoh operator aritmatika

    $a = 10;
    $b = 20;
    $tambah = $a + $b;

    echo $tambah;
    echo "<br>";
    echo "<br>";

    //contoh oprator Assignment
    // =, +=, -=, /=, *=, %=.
    $x = 50;
    $x += 30;

    echo $x;
    echo "<br>";
    echo "<br>";

    // contoh operator   Comparison
    // ==, ===, !=, <>, !==, <, >, <=, >=, <=>.

    $x = 100;
    $y = "100";

    var_dump($x == $y); // mengembalikan nilai true karena equal/sama
    echo "<br>";
    var_dump($x === $y); // mengembalikan nilai false karena tidak equal/ tidak sama
    echo  "<br>";
    echo  "<br>";


    // contoh operator string 
    // . dan .=
    $txt1 = "Hello";
    $txt2 = " Metaverse";

    echo $txt1 . $txt2;
    echo "<br>";

    $txt1 .= $txt2;

    echo $txt1;
    echo "<br><br>";

    // belajar pengondisian

    // pengondisian if else
    echo "Belajar if else";
    echo "<br>";

    date_default_timezone_set("Asia/Jakarta");

    $time = date("H");

    if ($time < 11) {
      echo "Good Morning";
    } elseif ($time < 18) {
      echo "Good Afternoon";
    } else {
      echo "Good Night ";
    }


    echo "<br><br><br>";

    // pengondisian Switch
    $collor = "blue";

    switch ($collor) {
      case "red":
        echo "Berhenti";
        break;

      case "yellow":
        echo "Bersiap untuk jalan";
        break;

      case "green":
        echo "silahkan jalan";
        break;

      case "blue":
        echo "Beri jalan pada yang membutuhkan";
        break;

      default:
        echo "Tetap Hati-hati";
        break;
    }


    echo "<br><br>";
    // Belajar Looping/ Pengulangan 
    // Contoh Pengulangan/ Looping : While, do while, For, Foreach

    // while
    echo "dibawah ini contoh looping menggunakan while <br>";
    $x = "11";

    while ($x <= 10) {
      echo "Rank $x <br>";
      $x++;
    }


    // Contoh pengulangan  do while
    $x = "11";
    do {
      echo "ini contoh looping dengan Do while $x <br>";
      $x++;
    } while ($x <= 10);


    // contoh looping for

    for ($i = 1; $i < 10; $i++) {
      echo "ini contoh looping dengan for mengunakan angka $i <br/>";
    }

    echo "<br>";

    // contoh looping dengan foreach

    $collor = array("red", "yellow", "green");
    foreach ($collor as  $value) {
      echo "$value <br>";
    }


    ?>
  </div>
</body>

</html>