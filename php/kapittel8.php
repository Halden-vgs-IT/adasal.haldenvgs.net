<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Hub</title>
    <link rel="icon" href="images/icon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;0,700;0,800;0,900;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
    <script src="script/script.js"></script>

    <style>
        
* {
    box-sizing: border-box;
	margin: 0 0 0 0; 
}

body {
    font-family: Verdana, sans-serif;
	
}

#background{
	position:absolute;
	width: 100%; 
	height: 1355%;
}

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


	

</nav>


    <main>
    <img id="background" src="images/background.jpg">
    <div id="leftMargin">
    </div>


    <!-- basicly main -->
    <div id="centerMargin">








        <div class="questBox">
            <img src="images/8-1.png">
            <p> Et dataprogram er en instruksjon du kan gi en komputer den da vil gjøre. På denne måten kan du få en komputer til å gjøre utallige ting </p>
        </div>
	    
        <div class="questBox">
            <img src="images/8-2.png">
            <p> serverside er når man kjører et web skrift på en server mens en klientside er når man kjører et skript klienten sin komputer, eksempler på disse er
serverside: PHP
klientside: Javascript
</p>
        </div>

        <div class="questBox">
            <img src="images/8-3.png">
            <p> Hybrid apps er ting lagd med HTML CSS Javascript, som kan kjøre på alt mens native apps er ting lagd for spesifike ting som operativ systemer, f.eks C++, C, Java, Asembly, </p>
        </div>

        <div class="questBox">
            <img src="images/8-4.png">
            <p>For å gjøre programmerings fasen mer effektivt og raskere. Det er lettere å finne fram til et sted vis man har et kart en vis man bare gikk blindt inn.
Når man bare starter å programmere har man bare en ide om hvordan det kommer til å ende men vis man tegner det ut i en skisse kan man mye mer effektivt se hva som trengs og hvor det trengs. Forhindrer "spageti kode" og bugs. Gjør det mer oversiktelig  </p>
        </div>

        <div class="questBox">
            <img src="images/8-6.png">
            <p> 
/*</br>
De forksjellige språkene har forskjellige måter å skrive disse elementene på så eksemplene er bare for å gi en følelse av hvordan de ser ut.
</br>*/</br>


Variabler:</br>
[var x = 5]</br>
    Når man gir noe en verdi som x = 5. Er da x lik 5, dette gjør koden mye mer rydig
    </br></br>
array:</br>
[    var colors = ['red', 'yellow', 'blue']    ]</br>
    en variabel som inneholder flere en èn verdi.</br>
    </br>
if-statement:</br>
[if(statement)]</br>
    Dette er den letteste og viktigste innen koding, den kjører koden inni den bare vis det du tester er sant. Man kan ha en else etter for å gi den noe å gjøre vis det som blir testet er usant
    </br></br>
while-loops:</br>
[while(statement)]</br>
    En kode som går om og om igjen så lenge det man tester er sant. med dette kan man lage veldig nyttige infinite loops med å bare skrive true inni statementen.
    </br></br>
komentarer:</br>
[//]</br>
    Alt etter et komentar ellement som // i f.eks python blir ikke kjørt av koden og er der bare for å bli lest av programmereren. De er veldig forskjellige fra språk til språk.
    </br></br>
filåpning:</br>
[open()]</br>
    Denne er forskjellig fra språk til språk men alle har den, det er kommandoen som lager og interacter med filer. open() er det man bruker i python
    </br></br>
funksjoner:</br>
[def funksjon():]</br>
    Funksjoner finner man også i på nærmest alle programmering språk. En funksjon er et område i koden som ikke blir kjørt før den blir kalt. Dette gjør at man kan bruke den samme koden om igjen uten å skrive den på nytt og da blir koden mye mer effektiv og ryddig. De kan være void (at de ikke returnerer noe) eller ha en return statement som gjør at man kan få en verdi returnert når man caller den.
    </br></br>
print:</br>
[print()]</br>
    Dette er den simpleste men også det viktigste man kan gjøre i nærmest alle programmerings språk, alt den gjør er å printe ut noe. </p>
        
        </div>

        <div class="questBox" style="margin-top: 40%;">
            <img src="images/8-7.png">
            <p> vis koden feiler på grunn av skrive feil, feil navn eller at man har skrivet noe feil i koden er det syntaktiske feil.

Vis en del av koden ikke gir mening eller aldri blir kjørt får man en logisk feil. Koden kan fortsatt kjøre selv om denne feilen kommer.

semantiske feil er en feil som kommer når man bruker elementer feil. som når man glemmer å dele med hundre et sted </p>
        </div>

        <div class="questBox">
            <img src="images/8-8.png">
            <p> Vis man vil at programmet skal kjøre direkte i OS'en må man først kompilere det, det vil si å gjøre høynivås programmeringsspråk om til objektkode som maskinen lettere kan forstå. Eksempel på dette er Visual studio

Tolkning vil si å kjøre programmet i et avspiller program som kalles en interpreter. Interpreteren oversetter hver setning i språket til maskin kode og kjører den. Eksemplet på dette er nettlesere som tolker javascript samt CSS og HTML </p>
        </div>

        <div class="questBox">
            <img src="images/8-9.png">
            <p> Det betyr å lage et program med en grafisk brukergresnesnitt som responderer til det brukeren gjør. Vanligvis lager man funksjoner som skjører når man f.eks trykker på en knapp eller gjør noe som helst. Eksempler på dette kan være onclick funksjoner på nettlesere og video spill generelt.  </p>
        </div>

        <div class="questBox">
            <img src="images/8-10.png">
            <p> Det er når man lagrer tidligere versjoner av et program for å kunne gå tilbake vis programmet ikke fungerer etter noen endringer, man kan lage programmer for å gjøre dette automatisk og lar flere utviklere jobbe med samme fil uten å gjøre motstridende endringer.

-Revision Control System (RCS)
-Source Code Control System (SCCS)
-Vesta

-Git.... </p>
        </div>

        <div class="questBox">
            <img src="images/8-11.png">
            <p> 
            Abstraksjon:</br>
    Når man tar metoder ut av an klasse for å lage nye funksjoner (objekter) for å holde selve koden mer ryddig og ikke for komplisert, dette forhindrer bugs ved å holde koden ryddig og organisert for vis det da skjer noe kan man finne objektet det skjedde i og fikse det uten å gå gjennom mange unødvendige linjer.
    </br></br>
Det brukes vanligvis når en klasse arver fra en annen som f.eks en klasse som heter soldat som arver fra en annen klasse som here person. Person klassen trengs aldri å bli kalt fra andre steder en de klassene som arver fra dem og er derfor kalt abstrakt.
</br></br>
Klasse:</br>
    En klasse er en samling og en beskrivelse av objekte. Man putter metoder (funksjoner) av samme type i en klasse for så å ha bedre organisasjon over dem.
</br></br>
objekter:</br>
    Når man deler koden inn i deler kaller vi det objekter. Dette er funksjoner som blir lagd til å gjøre spesifikke jobber og kan da bli kalt flere ganger vis det er nødvendig.
</br></br>
arv:</br>
    Arv gjør det mulig å kunne ta egenskapene fra en klasse og gi det til en ny som er mer spesialisert innen det emnet, f.eksempel kan klassen Merchedes arve fra klassen Bil fordi den er mer spesifikk og har flere metoder en Bil klassen men bruker fortsatt det grunnlegende innen Bil klassen    
</br></br>

konstruktor:</br>
    En konstruktor er en funksjon som blir kalt når klassen blir lagd til en variable som kalles en instance som da kan bli brukt til å kalle funksjonene inne i klassen
</br></br>
polymorfisme:</br>
    At objekter kan kan behandles på samme måte men også gjøre forskjellige ting. At en klasse som arver fra en annen kan gjøre om på ting inne i metoden til klassen den arver fra.
</br></br>
metode og egenskap:</br>
    En metode er hva et objekt kan gjøre, f.eks et vindu med knapper som åpner og lukker det være metoder mens egenskap vil være hvilken state vinduet er i, om det er åpent eller lukket.
</br></br>
innkapsling:</br>
    Innkapsling er veldig simpelt ved å gjøre verdier utilgjelngelige for objekter utenfor en klasse ved å gjøre dem private, dette forhindrer at man gir variabler ugyldige verdier som kan ødelege koden eller outputen den gir. Dette legger et ekstra lag med sikkerhet at de som jobber med klassen ikke messer med ting de ikke skal messe med.
</br></br>
modularitet:</br>
   At man kan samle variabler og funksjoner i variabler, dette gjør igjen at koden blir mye mer organisert og letter å bruke vis andre skal bruke koden vis man f.eks lager libraries 
 </p>
        </div>

        <div class="questBox" style="margin-top:70%;">
            <img src="images/8-12.png">
            <p> OPP har blitt mer og mer populært med språk som python og C++, C++ betyr bokstaveligtalt C med klasser. Det gjør det mer rydig og at man kan tenke på programmet mer menneskelig ved å istedet for å ha alt skrevet etter hverandre kan man gruppere det og da utifra det blir det enklere å finne feil i programmet. La oss si at vi har lagd et program som skal søke etter info på netter og det fungerer ikke fordi den sier det er ein feil i objektet data-leser.
            </br>
Da kan man gå inn i data-leser og se om det er noen feil der eller i objektene den bruker. Dette kan gjøre at feilen blir minsket til kanskje 10 linjer istedet for 5000.
</br>
Det gjør det også veldig enkelt for andre å bruke koden, la oss si vi har lagd et library som heter Color text der du basicly bare printer ut tekst med farge. Da kan de som bruker programmet bare se gjennom funksjonene og veldig enkelt skjønne hvordan man bruker de forskjellige klassene. </p>
        </div>





    </div>

    <div id="rightMargin">
    </div>
</main>
</body>

<script>


</script>

</html> 
