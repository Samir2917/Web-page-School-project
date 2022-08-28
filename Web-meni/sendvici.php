<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Web-meni/Css/sendvici.css" rel="stylesheet"/>
    <title>Pekar Alić</title>
</head>
<body>
    <div class="container">
        <div class="cont">
            <h1>Pekar Alić</h1>
            <h3>Tradicija dobrog okusa!</h3>
        </div>
        <nav class="navbar navbar-inverse navbar-fixed-top">
                <div id="navbar" class="collapse navbar-collapse">
                     <ul >
                        <li class="<?php if($page=='pocetna'){echo 'active';} ?>"><a href="index.php">Početna</a></li>
                       <li class="<?php if($page=='onama'){echo 'active';}?>"><a href="onama.php">O nama</a></li>
                       <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list"></i>Ponuda</a>
                                   <ul>
                                       <li class="<?php if($page == 'hljeb') {echo 'active';} ?>"><a href="hljeb.php">Hljeb</a></li>
                                       <li class="<?php if($page == 'kolaci') {echo 'active';} ?>"><a href="kolaci.php">Kolači</a></li>
                                       <li class="<?php if($page == 'peciva') {echo 'active';} ?>"><a href="peciva.php">Peciva</a></li>
                                       <li class="<?php if ($page == 'pite') {echo 'active';} ?>"><a href="pite.php">Pite</a></li>
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
            <h3>Sendvič salama</h3>
            <p>Salama, sir i sezonska salata 300 grama <br>
            Cijena: 1,50 KM</p>
        </div>
        <div class="card2">
            <div class="pbox"></div>
            <h3>Chicken</h3>
            <p>Piletina, sir i sezonska salata 300 grama <br>
            Cijena: 2,00 KM</p>
        </div>
        <div class="card3">
            <div class="pbox"></div>
            <h3>Crispy chicken</h3>
            <p>Pohovana piletina, sir i sezonska salata 300 grama <br>
            Cijena: 2,50KM</p>
        </div>
        <div class="card4">
            <div class="pbox"></div>
            <h3>Sendvič suho meso</h3>
            <p>Suho meso, sezonska salata 300 grama <br>
            Cijena: 3,00KM</p>
        </div>
        <div class="card5">
            <div class="pbox"></div>
            <h3>Sendvič sudžuka</h3>
            <p>Bosanski sudžuk, sezonska salata i sir 300 grama <br>
            Cijena: 2,50 KM</p>
        </div>
        <div class="card6">
            <div class="pbox"></div>
            <h3>Sendvič tuna</h3>
            <p>Tuna, sir, sezonska salata 300 grama <br>
            Cijena: 3,00 KM</p>
        </div>
    </div>
</body>
</html>