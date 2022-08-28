<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Web-meni/Css/kolaci.css" rel="stylesheet"/>
    <title>Pekar Alić</title>
</head>
<body>
    <div class="container">
        <div class="cont">
            <h1>Pekar Alić</h1>
            <h3>Tradicija dobrog okusa! <br>
            Ponuda kolača</h3>
        </div>
        <nav class="navbar navbar-inverse navbar-fixed-top">
                <div id="navbar" class="collapse navbar-collapse">
                     <ul >
                        <li class="<?php if($page=='pocetna'){echo 'active';} ?>"><a href="index.php">Početna</a></li>
                       <li class="<?php if($page=='onama'){echo 'active';}?>"><a href="onama.php">O nama</a></li>
                       <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list"></i>Ponuda</a>
                                   <ul>
                                       <li class="<?php if($page == 'hljeb') {echo 'active';} ?>"><a href="hljeb.php">Hljeb</a></li>
                                       <li class="<?php if($page == 'peciva') {echo 'active';} ?>"><a href="peciva.php">Peciva</a></li>
                                       <li class="<?php if ($page == 'pite') {echo 'active';} ?>"><a href="pite.php">Pite</a></li>
                                       <li class="<?php if($page == 'sendvici') {echo 'active';} ?>"><a href="sendvici.php">Sendviči</a></li>
                                       <li class="<?php if($page == 'tjestenine') {echo 'active';} ?>"><a href="tjestenine.php">Tjestenine</a></li>
                                    </ul>
                       </li>
                       <li class="<?php if($page=='certifikati') {echo 'active';}?>"><a href="certifikati.php">Certifikati</a></li>
                       <li class="<?php if($page=='kontakt') {echo 'active';} ?>"><a href="kontakt.php">Kontakt</a></li>
                       <li class="<?php if($page == 'recenzije') {echo 'active';} ?>"><a href="recenzije.php">Recenzije</a></li>
                     </ul>
                </div>
        </nav>
        <div class="card1">
            <div class="pbox"></div>
            <h3>Baklava</h3>
            <p>Tradicionalna bosanska baklava <br>
            Cijena: 25KM kilogram</p>
        </div>
        <div class="card2">
            <div class="pbox"></div>
            <h3>Ružica</h3>
            <p>Tradicionalna bosanska ružica 100 grama <br>
            Cijena: 0,70 KM komad</p>
        </div>
        <div class="card3">
            <div class="pbox"></div>
            <h3>Hurmašica</h3>
            <p>Tradicionalna bosanska hurmašica 120 grama <br>
            Cijena: 0,60 KM komad</p>
        </div>
        <div class="card4">
            <div class="pbox"></div>
            <h3>Tulumbe</h3>
            <p>Tulumba 75 grama <br>
            Cijena: 0,60 KM komad</p>
        </div>
        <div class="card5">
            <div class="pbox"></div>
            <h3>Čupavci</h3>
            <p>Čokoladni čupavci <br>
            Cijena: 0,50 KM komad</p>
        </div>
        <div class="card6">
            <div class="pbox"></div>
            <h3>Suhi kolači</h3>
            <p> Razne vrste suhih kolača <br>
            Cijena: 13 KM kilogram</p>
        </div>
        <div class="card7">
            <div class="pbox"></div>
            <h3>Raznovrsne torte</h3>
            <p>Izrada raznih torti po želji <br>
            Cijena: M - 12 KM, S - 18 KM, V - 25 KM</p>
        </div>
        <div class="card8">
            <div class="pbox"></div>
            <h3>Rođendanske torte</h3>
            <p>Izrada raznih rođendanskih torti po želji <br>
            Cijena na upit</p>
        </div>
        <div class="card9">
            <div class="pbox"></div>
            <h3>Svadbene torte</h3>
            <p>Izrada svadbenih torti po želji <br>
            Cijena na upit</p>
        </div>
    </div>
</body>
</html>