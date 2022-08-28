<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Web-meni/Css/hljeb.css" rel="stylesheet"/>
    <title>Pekar Alić</title>
</head>
<body>
    <div class="container">
        <div class="cont">
            <h1>Pekar Alić</h1>
            <h3>Tradicija dobrog okusa! <br>
            Ponuda hljeba</h3>
        </div>
        <nav class="navbar navbar-inverse navbar-fixed-top">
                <div id="navbar" class="collapse navbar-collapse">
                     <ul >
                        <li class="<?php if($page=='pocetna'){echo 'active';} ?>"><a href="index.php">Početna</a></li>
                       <li class="<?php if($page=='onama'){echo 'active';}?>"><a href="onama.php">O nama</a></li>
                       <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list"></i>Ponuda</a>
                                   <ul>
                                       <li class="<?php if($page == 'kolaci') {echo 'active';} ?>"><a href="kolaci.php">Kolači</a></li>
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
            <h3>Hljeb bijeli</h3>
            <p>Hljeb bijeli 400 grama <br>
            Cijena: 1.00KM </p>
        </div>
        <div class="card2">
            <div class="pbox"></div>
            <h3>Mali hljeb bijeli</h3>
                <p>Hljeb bijeli i integralni 220 grama <br>
                Cijena: 0,50KM</p>
        </div>
        <div class="card3">
            <div class="pbox"></div>
            <h3>Hljeb integralni</h3>
            <p>Hljeb integralni 400 grama <br>
            Cijena: 1,10KM</p>
        </div>
        <div class="card4">
            <div class="pbox"></div>
            <h3>Hljeb rezani</h3>
            <p>Hljeb bijeli i integralni rezani 400 grama <br>
            Cijena: 1,20KM</p>
        </div>
        <div class="card5">
            <div class="pbox"></div>
            <h3>Ruža bijela</h3>
            <p>Ruža bijela 400 grama <br>
            Cijena: 1,00 KM</p>
        </div>
        <div class="card6">
            <div class="pbox"></div>
            <h3>Ruža integralna</h3>
            <p>Ruža integralna 400 grama <br>
            Cijena: 1,10 KM</p>
        </div>
        <div class="card7">
            <div class="pbox"></div>
            <h3>Kifla</h3>
            <p>Kifla bijela i integralna 26 grama <br>
            Cijena: 0,15KM</p>
        </div>
        <div class="card8">
            <div class="pbox"></div>
            <h3>Lovački hljeb</h3>
            <p>Lovački hljeb 450 grama <br>
            Cijena: 1,30KM</p> 
        </div>
        <div class="card9">
            <div class="pbox"></div>
            <h3>Hljeb sa pšeničnom klicom</h3>
            <p>Integralni hljeb sa pšeničnom klicom 250 grama <br>
            Cijena: 1,50KM</p>
        </div>
    </div>
</body>
</html>