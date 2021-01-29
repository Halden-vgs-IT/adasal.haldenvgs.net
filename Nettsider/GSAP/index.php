<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halden Kart</title>
    <link rel="icon" href="../images/icon.png">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" />
    <script src="https://cdn.jsdelivr.net/npm/exif-js"></script>
    <script src="vendors/exif-js/exif-js"></script>

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

        #img1{
            height: 600px; 
            width: 600px;
        }


    </style>


</head>
<body>

<img id="background" src="images/background.png">

<main>

    <img src="img.jpg" id="img1"/>
    
    <pre>Make and model: <span id="makeAndModel"></span></pre>
    <br/>
    <img src="image2.jpg" id="img2" />
    <pre id="allMetaDataSpan"></pre>
    <br/>

    

</main>


<script>
    window.onload=getExif;

    function getExif() {
        var img1 = document.getElementById("img1");
        EXIF.getData(img1, function() {
            var make = EXIF.getTag(this, "Make");
            var model = EXIF.getTag(this, "Model");
            var makeAndModel = document.getElementById("makeAndModel");
            makeAndModel.innerHTML = `${make} ${model}`;
        });

        var img2 = document.getElementById("img2");
        EXIF.getData(img2, function() {
            var allMetaData = EXIF.getAllTags(this);
            var allMetaDataSpan = document.getElementById("allMetaDataSpan");
            allMetaDataSpan.innerHTML = JSON.stringify(allMetaData, null, "\t");
        });
    }
</script>


</body>


</html> 
