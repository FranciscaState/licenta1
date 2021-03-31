<?php

session_start();


function databaseConnection()
{
    if (!mysqli_connect('localhost', 'root', 'root', 'francidb')) {
        die("Conexiunea nu s-a putut efectua");
    } else {
        $connect = mysqli_connect('localhost', 'root', 'root', 'francidb');
    }
    return $connect;

}



include_once 'cont_nou.html';

function add_new_client()
{


    if (isset($_POST['nume']) && isset($_POST['prenume']) && isset($_POST['email']) && isset($_POST['parola']) && isset($_POST['psw']) && isset($_POST['psw-repeat']) && isset($_POST['cnp']) && isset($_POST['localitate']) && isset($_POST['sector'])) {
        $nume = $_POST['nume'];
        $prenume = $_POST['prenume'];
        $email = $_POST['email'];
        $parola = $_POST['psw'];
        $parolar = $_POST['psw-repeat'];
        $cnp = $_POST['cnp'];
        $localitate = $_POST['localitate'];
        $sector = $_POST['sector'];


        if ($parola != $parolar) {
            printf('Parolele nu coincid') ;
        }



        if ($nume && $prenume && $email && $parola && $parolar && $cnp && $localitate && $sector) {
            $connect = databaseConnection();

            $sql = "INSERT INTO clienti values ('".$nume."', '".$prenume."', '".$email."', '".$parola."', '".$cnp."', '".$localitate."','".$sector."' );";
            $result = mysqli_query($connect, $sql);

        }

        if ($result == true) {
            header("Location:http://localhost:81/test/franci/Login/login_good.html");
        } else {

            echo "Va sugerez sa incercati din nou !";
        }

    }


}

add_new_client();

?>
