<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="../Web-meni/Css/recenzije.css" rel="stylesheet"/>
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
                                       <li class="<?php if($page == 'sendvici') {echo 'active';} ?>"><a href="sendvici.php">Sendviči</a></li>
                                       <li class="<?php if($page == 'tjestenine') {echo 'active';} ?>"><a href="tjestenine.php">Tjestenine</a></li>
                                    </ul>
                       </li>
                       <li class="<?php if($page=='certifikati') {echo 'active';}?>"><a href="certifikati.php">Certifikati</a></li>
                       <li class="<?php if($page=='kontakt') {echo 'active';} ?>"><a href="kontakt.php">Kontakt</a></li>
                     </ul>
                </div>
        </nav>
        <div class="frm">
            <form action="inp.php" method="POST" class="rec-form"  >
                <p>Vaše mišljenje nam je bitno, slobodno nam ostavite svoj dojam.</p>
                <label>Vaše ime: </label> <br>
                <input type="text" placeholder="Ime" name="ime"> <br>
                <label>Ocjena</label> <br>
                <select name="ocjena" id="ocjena">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5" selected>5</option>
                </select><br>
                <label>Komentar: </label> <br>
                <textarea name="komentar">
                </textarea> <br>
                <input type="submit" value="Pošalji" class="btn" name="submit">
            </form>
        </div>
        <div class="output">
                <?php 
                include 'outp.php';
                ?>
                 <h2>Recenzije:</h2>
                <table> 
                   <tr>
                       <th>Ime:</th>
                       <th>Ocjena:</th>
                       <th>Komentar:</th>
                   </tr>
                   <?php 
                   while ($rows=$result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $rows ['ime']; ?></td>
                        <td><?php echo $rows ['ocjena']; ?></td>
                        <td><?php echo $rows ['Komentar']; ?></td>
                    </tr>
                    <?php
                   }
                   ?>
                </table>
            </div>
    </div>
</body>
</html>