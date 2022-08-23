<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Page</title>
    <style type="text/css">
        body{
            margin: 0px;
            padding: 0px;
        }
        canvas{
            background-color:#AED6F1;
        }
    </style>
</head>
<body>
<canvas width="1000" height="800" id="canvas"></canvas>
<script type="text/javascript">
    var canvas = document.getElementById('canvas'); 
    var ctx=canvas.getContext('2d');
    
    

    ctx.fillStyle='#558B2F';
    ctx.fillRect(0,650,1000,150);

    ctx.fillStyle='#5D4037';
    ctx.fillRect(850,400,100,250);


    ctx.fillStyle='#F4D03F';
    ctx.fillRect(100,400,500,250);

    ctx.fillStyle='#85929E';
    ctx.fillRect(470,550,50,100);

    ctx.fillStyle='#FF8A65';
    ctx.fillRect(170,470,50,50);
    ctx.fillStyle='#FF8A65';
    ctx.fillRect(170,525,50,50);
    ctx.fillStyle='#FF8A65';
    ctx.fillRect(225,470,50,50);
    ctx.fillStyle='#FF8A65';
    ctx.fillRect(225,525,50,50);

    ctx.fillStyle='#558B2F';
    ctx.fillRect(0,650,1000,150);
    ctx.fillStyle='#558B2F';
    ctx.fillRect(0,650,1000,150);
    ctx.fillStyle='#558B2F';
    ctx.fillRect(0,650,1000,150);
    ctx.fillStyle='#558B2F';
    ctx.fillRect(0,650,1000,150);
    ctx.fillStyle='#558B2F';
    ctx.fillRect(0,650,1000,150);
    ctx.fillStyle='#558B2F';
    ctx.fillRect(0,650,1000,150);
    ctx.fillStyle='#558B2F';
    ctx.fillRect(0,650,1000,150);

    ctx.fillStyle='#1C2833';
    ctx.beginPath();
    ctx.moveTo(60, 400);
    ctx.lineTo(660, 400);
    ctx.lineTo(350, 313);
    ctx.fill();

    ctx.fillStyle="yellow";
    ctx.beginPath();
    ctx.arc(0,0,170, 0, 2 * Math.PI);
    ctx.fill();

    ctx.fillStyle="green";
    ctx.beginPath();
    ctx.arc(826,362,70, 0, 2 * Math.PI);
    ctx.fill();
    ctx.beginPath();
    ctx.arc(952,374,70, 0, 2 * Math.PI);
    ctx.fill();
    ctx.beginPath();
    ctx.arc(900,271,70, 0, 2 * Math.PI);
    ctx.fill();
    ctx.beginPath();
    ctx.arc(819,234,70, 0, 2 * Math.PI);
    ctx.fill();
    ctx.beginPath();
    ctx.arc(941,229,70, 0, 2 * Math.PI);
    ctx.fill();


    ctx.fillStyle="white";
    ctx.beginPath();
    ctx.arc(638,141,40, 0, 2 * Math.PI);
    ctx.fill();
    ctx.beginPath();
    ctx.arc(591,96,40, 0, 2 * Math.PI);
    ctx.fill();
    ctx.beginPath();
    ctx.arc(573,161,40, 0, 2 * Math.PI);
    ctx.fill();
    ctx.beginPath();
    ctx.arc(533,153,40, 0, 2 * Math.PI);
    ctx.fill();
    ctx.beginPath();
    ctx.arc(535,112,40, 0, 2 * Math.PI);
    ctx.fill();
    ctx.beginPath();
    ctx.arc(499,140,40, 0, 2 * Math.PI);
    ctx.fill();
    ctx.beginPath();
    ctx.arc(282,98,40, 0, 2 * Math.PI);
    ctx.fill();
    ctx.beginPath();
    ctx.arc(239,119,40, 0, 2 * Math.PI);
    ctx.fill();
    ctx.beginPath();
    ctx.arc(287,127,40, 0, 2 * Math.PI);
    ctx.fill();
    ctx.beginPath();
    ctx.arc(261,152,40, 0, 2 * Math.PI);
    ctx.fill();
    ctx.beginPath();
    ctx.arc(210,143,40, 0, 2 * Math.PI);
    ctx.fill();


    canvas.addEventListener('click',function(e){
        console.log(e.offsetX,e.offsetY);
    })
</script>
</body>
</html>