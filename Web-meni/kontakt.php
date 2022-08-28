<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Web-meni/Css/kontakt.css" rel="stylesheet"/>
    <title>Pekar Alić</title>
</head>
<body>
    <div class="container">
        <div class="picturebox"></div>
        <nav class="navbar navbar-inverse navbar-fixed-top">
                <div id="navbar" class="collapse navbar-collapse">
                     <ul>
                        <li class="<?php if($page=='pocetna'){echo 'active';}?>"><a href="index.php">Početna</a></li>
                       <li class="<?php if($page=='onama'){echo 'active';}?>"><a href="onama.php">O nama</a></li>
                       <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list"></i>Ponuda</a>
                                   <ul>
                                       <li class="<?php if($page == 'hljeb'){echo 'active';}?>"><a href="hljeb.php">Hljeb</a></li>
                                       <li class="<?php if($page == 'kolaci') {echo 'active';} ?>"><a href="kolaci.php">Kolači</a></li>
                                       <li class="<?php if($page == 'peciva') {echo 'active';} ?>"><a href="peciva.php">Peciva</a></li>
                                       <li class="<?php if ($page == 'pite') {echo 'active';} ?>"><a href="pite.php">Pite</a></li>
                                       <li class="<?php if($page == 'sendvici') {echo 'active';} ?>"><a href="sendvici.php">Sendviči</a></li>
                                       <li class="<?php if($page == 'tjestenine') {echo 'active';} ?>"><a href="tjestenine.php">Tjestenine</a></li>
                                    </ul>
                       </li>
                       <li class="<?php if($page=='certifikati') {echo 'active';}?>"><a href="certifikati.php">Certifikati</a></li>
                       <li class="<?php if($page == 'recenzije') {echo 'active';} ?>"><a href="recenzije.php">Recenzije</a></li>
                     </ul>
                </div>
        </nav>
        <div class="c1">
            <h1>Uprava</h1>
            <h3>Direktor: 032 - 000 - 001</h3>
            <h5>Fax: 032 - 000 - 002</h5>
            <h7>Email: uprava@pekaralic.com</h7>
        </div>
        <div class="c2">
            <h1>Pekara 1</h1>
            <h3>Telefon: 062 - 000 - 001</h3>
            <h5>Lokacija: Alije Izetbegovića bb, Kakanj</h5>
            <h7>Radno vrijeme: 06:00 - 23:00</h7>
        </div>
        <div class="c3">
            <h1>Pekara 2</h1>
            <h3>Telefon: 062 - 000 - 002</h3>
            <h5>Lokacija: 311. brdske brigade 22, Kakanj</h5>
            <h7>Radno vrijeme: 06:00 - 23:00</h7>
        </div>
        <div class="c4">
            <h1>Pekara Visoko</h1>
            <h3>Telefon: 062 - 000 - 005</h3>
            <h5>Lokacija: Kakanjska 74, Visoko</h5>
            <h7>Radno vrijeme: 06:00 - 23:00</h7>
        </div>
    </div>
</body>
</html>