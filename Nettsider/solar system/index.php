<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Solar system</title>
    <link rel="icon" href="../images/icon.png">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.11.8/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


    <style>
        body{
            margin:0;
        }
        #background{
            z-index:-1;
            position:absolute;
            height:100%;
            width:100%;
        }

        #earth{
            position: absolute;
            left: 40%;
            top:45%;
            height: 100px;
            height:100px;

        }

        #mars{
            position: absolute;


            left: 60%;
            top: 25%;
            width: 100px;
            height: 100px;

        }

        svg{
            position:absolute;
            z-index:2;
            left:40%;
            top:20%;
            fill:purple;
            width:400px;
        }



    </style>


</head>
<body>



<img id="background" src="images/sol.png">


<img id="earth" src="images/Earth.svg">

<img id="mars" src="images/Mars.svg">



<script>


    


    var tl = new TimelineMax({ repeat: -1, repeatDelay: 0, delay: 0 });
    var tl2 = new TimelineMax({ repeat: -1, repeatDelay: 0, delay: 0 });



        tl.to('#earth', 4, {
        bezier: {
        type: "quadratic",
        values:[
            /*p1*/{ x: 0, y: 0 }, { x: 100, y: 0 }, { x: 100, y: 100 },
            /*p2*/{ x: 100, y: 200 }, { x: 0, y: 200 },
            /*p3*/{ x: -100, y: 200 }, { x: -100, y: 100 },
            /*p4*/{ x: -100, y: 0 }, { x: 0, y: 0 }],
        autoRotate: false
        },
        ease: Linear.easeNone
    
    });         

        tl2.to('#mars', 10, {
            bezier: {
            type: "quadratic",
            values:[
              /*p1*/{ x: 0, y: 0 }, { x: 100, y: 0 }, { x: 100, y: 100 },
              /*p2*/{ x: 100, y: 200 }, { x: 0, y: 200 },
              /*p3*/{ x: -100, y: 200 }, { x: -100, y: 100 },
              /*p4*/{ x: -100, y: 0 }, { x: 0, y: 0 }],
            autoRotate: false
          },
          ease: Linear.easeNone
    
        });

</script>


</body>


</html> 
