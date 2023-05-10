<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 4</title>
</head>
<body>

<from>
        <div>
           nilai tinggi
            <input type="number" id="txTINGGI">
        </div>
        <div>
            nilai alas
            <input type="number" id="txALAS">
        </div>
        <div>
            nilai luas
            <input type="number" id="txLUAS" disabled> 
        </div>
       
       

        <div>
            <button type="button" onclick="hLUAS()"> checknama </button>
        </div>
    </from>

    <script>
        function hLUAS(){
             let t = document.getElementById("txALAS").values;
             let a = document.getElementById("txTINGGI").values;
             let L = a*t/2;

             document.getElementById("txLUAS").value =  L;


            
        }
    </script>
    
</body>
</html>