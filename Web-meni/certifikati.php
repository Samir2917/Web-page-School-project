<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Web-meni/Css/certifikati.css" rel="stylesheet" />
    <title>Pekar Alić</title>
</head>
<body>
    <div class="container">
        <div class="picturebox"></div>
        <nav class="navbar navbar-inverse navbar-fixed-top">
                <div id="navbar" class="collapse navbar-collapse">
                     <ul >
                       <li class="<?php if($page=='pocetna'){echo 'active';} ?>"><a href="index.php">Početna</a></li>
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
                       <li class="<?php if($page=='kontakt') {echo 'active';} ?>"><a href="kontakt.php">Kontakt</a></li>
                       <li class="<?php if($page == 'recenzije') {echo 'active';} ?>"><a href="recenzije.php">Recenzije</a></li>
                     </ul>
                </div>
        </nav>
        <div class="card_1">
            <div class="pbox"></div>
            <h3>ISO 9001</h3>
            <p>Pekara Alić je 2007. godine dobitnik certifikata ISO 9001 standarda koji dokazuje našu kvalitetu i vrhunsku uslugu koju Vam pružamo!
            </p>
        </div>
        <div class="card_2">
            <div class="pbox"></div>
            <h3>Halal certifikat</h3>
            <p>Pekara Alić je 2002. godine dobitnik Halal certifikata, koji dokazuje kvalitet i sigurnost naših proizvoda za sve ljubitelje ukusnih pekarskih proizvoda. </p>
        </div>
    </div>
</body>
</html>