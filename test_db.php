<?php
session_start();
$connect= mysqli_connect('localhost','root','root','Francidb') or die('Nu s-a putut conecta'.mysqli_error());



$sql = "SELECT Email, Parola FROM Clienti";
$query = mysqli_query($connect,$sql);
$numrows = mysqli_num_rows($query);

if ($numrows !=0) {
    while ($row = mysqli_fetch_assoc($query)) {
        $dbemail = $row['Email'];
        $dbpassword = $row['Parola'];
        echo $row['Email'];

    }

}