<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 3</title>
</head>
<body>
    <from>
        <div>
            nama lengkap
            <input type="text" id="txNAMA">
        </div>

        <div>
            <button type="button" onclick="checknama()"> checkNama </button>
        </div>
    </from>

    <script>
        function checknama(){
             let nm = document.getElementById("txNAMA"), values;
             alert("isi dari field nama: "+nm);
        }
    </script>
    
</body>
</html>