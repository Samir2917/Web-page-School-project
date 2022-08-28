<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="../Web-meni/Css/onama.css" rel="stylesheet"/>
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
                       <li class="<?php if($page=='kontakt') {echo 'active';} ?>"><a href="kontakt.php">Kontakt</a></li>
                       <li class="<?php if($page == 'recenzije') {echo 'active';} ?>"><a href="recenzije.php">Recenzije</a></li>
                     </ul>
                </div>
        </nav> 
        <p>Pekara Alić je osnovana 2002. godine sa sjedištem u Kaknju. <br>
        U početku je to bio mali porodični biznis proizvodnje hljeba i raznih peciva. <br>
        Danas "Pekar Alić" broji preko 50 zaposlenih radnika, koji se trude da svakodnevno proizvedu najkvalitetnija peciva. <br>
        2007. godine smo se odlučili na širenje svojih poslovnih obima, te smo otvorili poslovnicu u ulici Alije Izetbegovića bb. <br>
        U našem asortimanu možete pronaći razne vrste svježih hljebova, peciva, pita, tjestenine ali i slasne kolače kao što su tradicionalni 
        bosanski kolači i razne torte. <br>
        Dobitnici smo raznih priznanja i certifikata u oblasti pekarstva. <br>
        Naše proizvode možete pronaći u našim poslovnicama u Kaknju, poslovnici u Visokom, te trgovinama širom Kaknja. <br>
        Takođe proizvodimo razne pekarske proizvode shodno vašim potrebama te ih dostavljamo na adresu. <br>
        Mi smo pekara Alić, pekara sa tradicijom dobrog okusa! <br>
        </p>
        <video autoplay muted loop id="bgvideo">
            <source src="../Web-meni/video/onamaa.mp4" type="video/mp4">
        </video>
    </div>

</body>
</html>