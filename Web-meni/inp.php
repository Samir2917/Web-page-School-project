<?php 
$connection = mysqli_connect('localhost', 'root', '', 'pekar');

if (isset($_POST['submit'])) {
    $ime = $_POST['ime'];
    $ocjena = $_POST['ocjena']; 
    $komentar = $_POST['komentar'];

    $sql = "INSERT INTO recenzije (ime, ocjena, komentar) VALUES ('$ime', '$ocjena', '$komentar')";

    mysqli_query($connection, $sql);

    header('location: recenzije.php'); 

    echo 'Uspješno!'; 
}
else {
    echo 'Niste uspjeli, molimo pokušajte ponovo!'; 
}

?>