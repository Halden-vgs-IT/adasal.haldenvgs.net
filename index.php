<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Hub</title>
    <link rel="icon" href="images/icon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;0,700;0,800;0,900;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="script/script.js"></script>


    <style>

    main {
  display: grid;
  grid-template-columns: 10% 80% 10%;
}

#centerMargin{
	background-color: #fff;
	z-index: 2;
	height: 150%;
}

nav{
	height: 150px;
	width:100%;
	background-color: #000;
	text-align:center;
	overflow-y:hidden;
}

img {
    vertical-align: middle;
    width:80%;
}

.questBox{
    text-align:center;
    width:auto;
    height: 700px;
    margin-top:10%;
    z-index:10;

}
p{
    text-align:left;
}

    </style>

</head>

<body>

<nav>
    <h1 class="bounce">
    <span>T</span>
    <span>H</span>
    <span>E</span>
  </h1>
  <h1 class="bounce-secondary">
    <span>H</span>
    <span>U</span>
    <span>B</span>
  </h1>
</nav>


    <main>
    <img id="background" src="images/background.jpg">
    <div id="leftMargin">
    </div>


    <!-- basicly main -->
    <div id="centerMargin">

        <div id="insideNav">

            <div class="dropdown">
              <button class="dropbtn">Ukes oppgaver</button>
              <div class="dropdown-content">
                <a href="php/kapittel8.php">Kapittel 8</a>
                <a href="php/kapittel8.php">Kapittel 9</a>
                
              </div>
            </div>


        </div>

        

        









        
	
    </div>

    <div id="rightMargin">
    </div>
</main>
</body>

<script>


</script>

</html> 
