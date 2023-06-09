<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>TechZone</title>
    <link rel="icon" type="image/x-icon" href="img/Favicon/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @font-face {
            font-family: "Warfare";
            src: url("fonts/ModernWarfare.ttf");
        }

        body {
            padding-top: 80px;
        }

        header {
            font-family: "Warfare", sans-serif;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 999;
        }

        .navbar-brand img {
            max-height: 30px;
            max-width: 30px;
        }

        .navbar-nav li a:hover {
            background-color: red;
            color: black;
        }

        .container {
            position: relative;
        }

        article {
            border-bottom: 1px solid #404040;
            border-top: 1px solid #404040;
            padding: 20px;
            margin-bottom: 20px;
        }

        h1 {
            position: absolute;
            bottom: 0;
            left: 0;
            margin: 10px;
            margin-bottom: 170px;
            padding: 10px;
            color: white;
            background-color: red;
            z-index: 2;
        }

        h2 {
            position: absolute;
            bottom: 0;
            left: 0;
            margin: 10px;
            margin-bottom: 60px;
            padding: 10px;
            color: white;
            background-color: red;
            z-index: 1;
        }

        img {
            width: 100%;
            height: auto;
        }

        #blackText {
            color: black;
        }

        #redText {
            color: red;
        }

        .loginbtn {
            background-color: red;
            color: #ffffff;
            border: none;
            transition: background-color 0.3s, transform 0.3s;
        }

        .loginbtn:hover {
            background-color: black;
            color: white;
            transform: scale(1.05);
        }

        .loginbtn.active {
            background-color: black !important;
            color: #ffffff !important;
            transform: none !important;
        }

        /* Responsive Styles */
        @media only screen and (max-width: 767px) {
            h1 {
                position: static;
                margin-top: 10px;
                margin-bottom: 0;
                z-index: 2;
            }

            h2 {
                position: static;
                margin-top: 0;
                margin-bottom: 10px;
                z-index: 1;
            }
        }

        @media only screen and (max-width: 576px) {
            h1 {
                margin-bottom: 25px;
            }

            h2 {
                margin-bottom: 15px;
            }
        }

        @media only screen and (max-width: 420px) {
            h1 {
                margin-bottom: 70px;
            }

            h2 {
                bottom: 60px;
            }
        }
    </style>
</head>

<body class="bg-dark">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary py-3" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="img/Logo/logo2.png" alt="logo"><span
                        id="blackText">Tech</span><span id="redText">Zone</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index2.php">Geek Jokes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index3.php">Gallery of Games</a>
                        </li>
                    </ul>
                    <?php
                    if(!isset($_SESSION['email'])){
                    ?>
                    <div class="ms-auto">
                        <a href="login.php"><button class="btn btn-primary loginbtn" id="loginbtn">Login</button></a>
                    </div>
                    <?php
                    }else{
                    ?>
                    <div class="ms-auto">
                        <a href="logout.php"><button class="btn btn-primary loginbtn" id="loginbtn">Logout</button></a>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <img src="img/Articles/A3.jpg" alt="Image">
            <h1>Dead Island 2</h1>
            <h2>Takhle povedenou hru zřejmě čekal jen málokdo. Prokletí bylo prolomeno, vzhůru do LA!</h2>
        </div>
        <hr class="mb-4 mt-4">
        <section>
            <div class="container">
                <article>
                    <h3 class="text-white">Autor článku: Zdeněk Princ</h3>
                    <hr>
                    <p class="bg-dark text-white" style="font-size: 25px;">Jen málokdy recenzujeme hry, od jejichž
                        oznámení by uplynulo téměř deset let. Jde o výjimečné případy, nikterak ctnostné, a většinou
                        zatížené tím, že k nim hráči chovají značnou skepsi. Upřímně, nevím, jak se to má s Dead
                        Islandem 2, ale tipnul bych si, že ještě před nedávnými preview na tom byla tahle hra podobně a
                        očekávání bylo poháněno spíše dávkou škodolibosti a nedůvěry. Ostatně, vývojáři ze studia
                        Dambuster jsou třetím týmem, který se o pokračování zombie akce z roku 2011 pokoušel, což
                        znamená změny vizí, restarty, úpravy mechanismů i jejich vršení na některé dříve hotové celky.
                        Zkrátka, ani já jsem od Dead Islandu 2 nečekal mnoho, a o to víc jsem byl překvapený, jak
                        povedenou záležitostí tenhle krví prosycený výlet do Los Angeles ve výsledku je.
                        <br><br>
                        Předně, nemusíte mít žádnou zkušenost s prvním dílem, abyste si pokračování užili. Ačkoliv je
                        zasazené do stejného světa a odehrává se přibližně deset let po incidentu na ostrově Banoi,
                        vypráví vlastní příběh s novými hrdiny. S přihlédnutím k tomu, kolik let od vydání původní hry
                        uběhlo, tak je na místě přirovnávat Dead Island 2 spíše k modernějšímu Dying Lightu, případně
                        Back 4 Blood. Čeká vás čistokrevná zombie řezničina, kterou navíc lidé ze studia Dambuster
                        předkládají hráčům s obrovským množstvím zbraní, jejich místy až trochu zvrácenými variantami a
                        sadou rozličných perků ovlivňujících základní schopnosti vybraného hrdiny. Hratelnosti, převážně
                        spojené se soubojem, je ve hře podmíněno úplně všechno, a pokud se navíc řadíte k těm hráčům,
                        kteří rádi experimentují se vším, co jim hra nabízí, Dead Island 2 si vás nepochybně získá.
                        <br><br>
                        S největší pravděpodobností to ale nebude díky příběhu, který zůstává jen tuctovou výplní kdesi
                        na pozadí. Nevystupují v něm žádné zapamatovatelné postavy, hlavní zápletka se opět točí kolem
                        spásy lidstva prostřednictvím člověka, jehož krev odolává zombie nákaze, a ve finále působí
                        příběh jen jako další zaškrtnutá kolonka na pomyslném seznamu věcí, které ve hře tohoto střihu
                        nesmí chybět. Vše začíná evakuací Los Angeles, které si už zčásti zvyklo na to, že svět už
                        zřejmě nikdy nebude jako dřív. S novou erupcí nakažených se však z kalifornské metropole stahují
                        další přeživší se zájmem dožít na nějakém klidnějším místě. K evakuačnímu letadlu tak postupně
                        směřují hrdinové Dead Islandu 2, z nichž si můžete po jeho krátkém letu a pádu kamsi do Los
                        Angeles vybrat. Rozhodující jsou základní atributy jako tvrdost, výdrž, obnova zdraví nebo šance
                        na kritický zásah s tím, že téměř nikdo z hrdinů není obligátním univerzálem. U Jacoba, Bruna,
                        Dani, Ryana, Amy nebo Carly vždy převažuje jedna ze schopností, a už na tomto místě činíte
                        poměrně důležité rozhodnutí, které následně určí celkovou hratelnost. Podotýkám, že volbu nelze
                        měnit, pouze odstartovat hru s jinou postavou, takže se rozhodně vyplatí pečlivě přečíst, s čím
                        vstupujete do hry.
                        <br><br>
                        První výběr ovlivňují i karty dovedností, ony v úvodu zmíněné perky, které mohou být navázány
                        přímo na konkrétního hrdinu, ale většinou jsou univerzální a může je využít kdokoliv. Jde o
                        poměrně jednoduchý, leč variaibilní systém, který vám v průběhu hraní dovolí přepínat a
                        kombinovat jednotlivé dovednosti tak, aby v ideálním případě buďto vyvažovaly základní atributy
                        nebo jednoduše ohnuly hratelnost tím směrem, který se vám zamlouvá. Konkrétně tak můžete třeba
                        získávat trochu zdraví, když budete zombíkům sekat končetiny. Můžete také využívat speciální
                        načasovaný blok, který spustí krátkou quick-time sekvenci, v níž slabší nepřátele pošlete k zemi
                        na dvě rány. Některé karty vám dovolí rychle uhýbat nepřátelským útokům, jiné posílí vaší
                        odolnost výměnou za snížení útočné síly a tak dále, a tak dále. Kombinací a variant je opravdu
                        hodně, a co je důležité, vše se viditelně propisuje do vlastní hry a dovoluje vám značně
                        experimentovat. V pozdější fázi navíc odemknete i možnost nechat promluvit své zombie alter-ego
                        v záchvatu zuřivosti, a i na tomto místě speciální karty ovlivní, co můžete dělat a s jakým
                        efektem.
                        <br><br>
                        Abyste pochopili, moje Carla – ale platí to samozřejmě o všech ostatních – je vůči viru imunní,
                        takže když ji v úvodu pokouše zombie, nezemře, ale naopak získá příslib značné síly v budoucnu.
                        Nechci vyzrazovat příliš, ale vývojáři přibližně po deseti hodinách hraní postaví před hráče i
                        nutnost rozhodnout se, nakolik necháte svoji postavu propadnout vábení téhle nemrtvé síly. Pokud
                        jen trochu, možná narazíte na překážky, které bude velmi složité překonat, ale pořád zůstanete
                        člověkem. Naproti tomu plné využití tzv. autofagických schopností vám sice dodá opravdu velkou
                        sílu a mnoho bonusů, ale přirozeně přijdou i negativní efekty, zejména spojené s nulovou
                        regenerací zdraví. Volba je na vás, její dopad či hloubku vám neprozradím, ale jde jen o další
                        skvělou vrstvu, která ovlivňuje celkovou hratelnost.
                        <br><br>
                        Ať už si ale budete v jednotlivých čtvrtích Los Angeles hrát na zombíka, či nikoliv, podstatné
                        budou samotné zbraně, a i na tomto místě vývojáři z Dambuster Studios excelují. Dead Island 2
                        stojí především na využívání ručních zbraní – od zrezivělých trubek, přes golfové hole či ostré
                        sekery, až k nablýskaným katanám. Samy o sobě by zbraně nebyly ničím speciálním a spíš by vás
                        otravovalo, že se docela rychle rozbíjí a zejména v úvodu jich nebudete kolem sebe nacházet
                        tolik, abyste mohli být zombíkům rovnocenným soupeřem. Ovšem v momentě, kdy se dostanete k
                        pracovnímu ponku a hrá vám umožní osazovat zbraně nejrůznějšími modifikacemi, rozjede se ona
                        místy zvrácená rukodělná linka, na jejímž konci budou meče opatřené hořáky, sekáčky vybavené
                        generátory elektřiny, kovové drápy napuštěné jedem, nože hned s několika čepelemi a spoustu
                        dalšího. Právě možnost měnit vlastnosti zbraní, a nikoliv jen jednou, ale hned na několika
                        úrovních v rozdílných slotech, jsou pravděpodobně tím nejlepším, co Dead Island 2 nabízí. Jsem
                        upřímně zvědavý, jakými kreacemi se budou hráči chlubit, až hra konečně vyjde, ale i během svého
                        průchodu jsem si nemohl stěžovat na to, že bych se s danou zbraní nudil.
                        <br><br>
                        Samozřejmě, hra vás do určité míry navádí, co byste měli v danou chvíli použít – někdy i dost
                        návodně, když je konkrétní typ zombíka imunní vůči tomu, čím na něj jdete – ale má to daleko do
                        nějakých restrikcí či vodění za ručičku. V Dead Island 2 zůstáváte pány situace za každých
                        okolností, což samozřejmě znamená i možnost využívat palné zbraně. Ve hře jsou zastoupeny v
                        klasické nabídce od pistolí po odstřelovací pušky, a na rozdíl od zbraní na blízko, které se
                        postupně rozbíjí, budete muset řešit náboje. Pokud se je však naučíte vyrábět u ponku a
                        nevykašlete se na poměrně nutný průzkum okolí a sbírání surovin ke craftingu, ani v tomto
                        případě nenarazíte na nějaké významné limity. Obával jsem se, že hra bude podle dostupných videí
                        a obrázků zaměřená právě na krájení zombíků pěkně tváří v tvář, ale pohodlně jsem v závěrečné
                        fázi používal pušku a brokovnici víc než věrnou zapalovací katanu. Nedá se ale říct, že by jeden
                        přístup byl lepší nežli druhý, v tom je právě to kouzlo skvělých soubojů, které navíc nestojí
                        jen na zbraních, ale vstupuje do nich i prostředí.
                        <br><br>
                        Ačkoliv jde o poměrně rutinní opakování stále stejných prvků, i vinou určité náhody a
                        sandboxového přístupu vývojářů můžete všemožně kombinovat třeba vodu a elektřinu, zombíky lze
                        samozřejmě zapálit a nahnat je do kaluže rozlité nafty, můžete je také hozenou návnadou dostat
                        do kyselinových bazénků a sledovat, jak umírají samy, a nebo – znovu – tohle vůbec nedělat a jen
                        všechny kosit bez přidané kreativity. Hra se vám v tomto případě odmění i povedeným zpracováním
                        jednotlivých zombíků, mezi nimiž sice najdete opakující se archetypy, nutící vás k různým
                        taktikám, ale vývojáři udělali opravdu hodně pro to, aby si vzájemně nebyly moc podobné. Různými
                        typy oblečení to jen začíná, ještě lepší je ale postupný rozklad a rozpad jejich těl, který
                        navíc můžete sami uspíšit vhodně směřovanými zásahy zbraní. Kolem budou lítat spodní čelisti,
                        končetiny i hlavy, zombíci budou chvíli vypadat jako právě nakažení lidé, aby se z nich za pár
                        sekund staly ohořelé zrůdy, a když už ztratí svou pohyblivost, budou se k vám po zemi klidně
                        plazit torza s jednou rukou. I tady vývojáři určitě zasluhují pochvalu, a pokud vysloveně nejste
                        proti očividně zcela záměrně přestřelené krvavosti a nechutnosti, budete si likvidaci
                        neutuchajícího zástupu neživých monster náležitě užívat. A to samozřejmě i v kooperaci, v níž
                        můžete projít celým příběhem, byť bez možnosti hraní napříč platformami.
                        <br><br>
                        Pokud byste však od Dead Island 2 čekali něco víc, než skvělý souboj a na něj napojené
                        mechanismy, případně drobné logické zádrhely zejména v podobě aktivace rozvodných skříní,
                        nedočkali byste se. Rozhodně to není málo, ale protože se vcelku překvapivě potýkám se hrou,
                        která má nakonec mnohem vyšší ambice, než jaké jsem od ní osobně očekával, je určitě na místě
                        zdůraznit i to, co se dle mého příliš nepovedlo nebo jednoduše zůstalo stát na vedlejší koleji.
                        Problém mám se zmíněným příběhem, rozprostírajícím se na ploše 24 misí, kterými projdete
                        přibližně za 15-18 hodin. Po většinu času jdete od jednoho bodu k druhému, případně se vracíte
                        do centrálních hubů jednotlivých částí města. Tím předznamenávám, že Dead Island 2 nenabízí
                        open-world, ale docela rozlehlé lokace, mezi nimiž přecházíte pomocí loadingu. Struktura to není
                        špatná, jen škoda výrazné šablonovitosti a několikerého opakování stále stejných postupů. Tedy
                        téměř pokaždé, když dorazíte na nové místo, objevíte nějakou skupinku přeživších, k nim se
                        musíte prosekat přes mračna zombií, pak pro ně splníte pár úkolů a přesunete se dál. Jistě,
                        důvodem setrvat v jedné čtvrti o trochu déle, jsou vedlejší mise, nebývají ale napojeny na žádné
                        výraznější příběhové momenty a většinou po vás budou jen chtít, abyste došli na vyznačené místo,
                        všechno tam pobili, a pak se vrátili zpět. Odměny se různí a někdy jde o velmi vzácné kousky
                        výbavy či vylepšení, ovšem líné zpracování vedlejších misí se mi velmi rychle zajedlo.
                        <br><br>
                        Určitý problém jsem měl i s některými bossy, ke kterým se můžete mnohdy dostat značně
                        nepřipravení a spolehnout se na náhodu. Někdy vás tuhý nepřítel a neustále se spawnující zálohy
                        v podobě obyčejnějších zombií přejedou jako vlak, jindy se s nimi potýkáte dlouhé minuty, ale
                        stejně neuspějete a někdy je hotovo za pár sekund, když se vám podaří i dílem tolik potřebné
                        náhody udělat něco velkého a náležitě výbušného. Opakování nepodařených střetnutí napomáhá
                        benevolentní systém automatického ukládání pozic a vracení jen o několik krůčků zpět bez
                        jakéhokoliv postihu, přesto ale tím dochází k výraznému přetrhávání tempa a vybalancování
                        obtížnosti není na mnoha místech adekvátní. Hra také nenabízí žádné nastavení obtížnosti, takže
                        si budete muset některé složité souboje opravdu přetrpět, než budete moci pokračovat dál.
                        Určitou frustraci pak podtrhuje i struktura hlavních misí, kterou během souboje můžete i
                        „předběhnout“, dostat se na cílové místo, ale nesplnit některý dílčí bod po cestě, což zjistíte
                        třeba až po několika pokusech, a pak vás stejně čeká to, o co jste se snažili doposud – tedy
                        vyčištění lokace od zombíků, byť nyní už v podobě stanoveného úkolu, po kterém spawnování
                        nepřátel ustane.
                        <br><br>
                        Také po grafické stránce není Dead Island 2 zcela konzistentní, a zatímco zombíci jsou
                        zpracováni velmi dobře, ostatní postavy nabízí jen mrtvolné obličeje a téměř nulovou artikulaci.
                        Lokace jsou ale naproti tomu plné nejrůznějšího harampádí, a i když hra na PlayStationu 5 ani
                        Xboxu Series nenabízí volbu obrazového módu – zkrátka běží v 60 fps – nemáte pocit, že by vás
                        vývojáři o něco výrazně ochuzovali. Jistě, nejde o úroveň grafiky jako v The Last of Us Part II,
                        ale třeba v porovnání s Dying Light 2 působí nový Dead Island barevněji a živěji, což je ale
                        samozřejmě dáno i tím, že se odehrává v Los Angeles. A zapomenout nesmím ani na skvělý český
                        překlad v podobě titulků, který umocňuje celkově velmi dobrý pocit a přetrvávající překvapení,
                        že se doslova prokletý titul mohl díky péči lidí z Dambusteru přeměnit v tak nečekaně povedenou
                        hru.
                    </p>
                </article>
            </div>
        </section>
    </main>



    <footer class="text-center bg-dark text-white pb-4">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-danger">Contact</h5>
                    <p>
                        <i class="fas fa-home mr-3"></i> Ječná 517/30, 120 00 Prague 2, Czechia
                    </p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> +420 123 456 789
                    </p>
                </div>
            </div>

            <hr class="mb-4" style="color: white;">

            <div class="row align-items-center">
                <div class="col-md-7 col-lg-8">
                    <p>Copyright ©2023 All rights reserved by:
                        <a href="" style="text-decoration: none;">
                            <strong class="text-danger">Tomáš Novotný</strong>
                        </a>
                    </p>
                </div>

                <div class="col-md-5 col-lg-4">
                    <div class="text-center text-md-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley"
                                    class="btn-floating btn-sm text-white" style="font-size: 23px;">
                                    <i class="fab fa-youtube">
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        const loginButton = document.getElementById("loginbtn");

loginButton.addEventListener("mousedown", () => {
    loginButton.classList.add("active");
});

loginButton.addEventListener("mouseup", () => {
    loginButton.classList.remove("active");
});
    </script>
</body>

</html>