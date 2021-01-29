<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halden Kart</title>
    <link rel="icon" href="../images/icon.png">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.0.1/dist/leaflet.js"></script>
    <style>
    
        body{
            margin: 0;
            justify-content: center;
        }

        main{
            position: absolute;
            background-color:#f1f1f1;
            width: 90%;
            height: 90%;
            
            top:5%;
            left: 5%;
            

            z-index:1;
            
            display: flex;
            justify-content:center;
            align-items:center;

        }
    
        #background{
            z-index:-1;
            position:absolute;
            height:100%;
            width:100%;
            filter:blur(5px);
        }

        #map{
            height: 600px; 
            width: 600px;
        }
    </style>
</head>
<body>
<img id="background" src="images/background.png">
<main>
    <div id="map"></div>
    <img src="images/code.png" width="800px">
</main>


<script>
    var map = L.map('map').setView([59.1258, 11.3894], 11);
    L.tileLayer('https://opencache.statkart.no/gatekeeper/gk/gk.open_gmaps?layers=topo4&zoom={z}&x={x}&y={y}', {
        attribution: '<a href="http://www.kartverket.no/">Kartverket</a>'
    }).addTo(map);
</script>
</body>
</html> 
