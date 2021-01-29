<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sikkerhet paa nett</title>
    <link rel="icon" href="../images/icon.png">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.0.1/dist/leaflet.js"></script>
    <style>
    
    
        body{
            margin: 0;
            justify-content: center;
            height:100%;
            background:#000;
        }

        main{
            position: absolute;
            background-color:#f1f1f1;
            width: 80%;
            height: 140%;
            left:10%;
            

            z-index:1;
            
            display: flex;
            justify-content:center;
            align-items:center;

        }
    


        iframe{
            width:100%;
            height:100%;
            border:0;
        }

        video{
            position:relative;
            top:-20%;
            height:30%;
            width:auto;
        }
        #trojan{
        position:absolute;
        left:66%;
        width:150px;
        height:150px;
        top:17%;
        }

        .leftInfoPanel{
            position:absolute;
            top:70%;
            left:0%;
            width:40%;
            text-align:center;
            border: 2px solid black;
            border-radious:5px;
        }



    </style>
</head>
<body>
<iframe src="https://threatmap.checkpoint.com/"></iframe>



    <main>
        <h2 style="position:absolute; top:10%;"> Er din data sikker? </h2>

        <video controls autoplay loop>
            <source src="video/hackvid.mp4" type="video/mp4">
            Din browser supporter ikke denne videon
        </video> 





    </main>


<script>
    
</script>
</body>
</html> 
