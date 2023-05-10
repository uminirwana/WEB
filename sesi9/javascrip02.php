<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2</title>
</head>
<body>
    <div id="pesan">semangat</div>
    <span id="pesan2">kita makan</span>

   <script>
    document.write("<strong>Umi nirwana</strong><br>");
    document.write("ayo belajar memahami javascript");
    document.getElementById("pesan").innerHTML = "ayo <sup>kita</sup> belajar";
    document.getElementById("pesan2").innerHTML = "kita harus semangat<br>";
   </script>

</body>
</html>