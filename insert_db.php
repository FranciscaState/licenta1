<?php

function databaseConnection()
{
    if (!mysqli_connect('localhost', 'root', 'root', 'Francidb')) {
        die("Conexiunea nu s-a putut efectua");
    } else {
        $connect = mysqli_connect('localhost', 'root', 'root', 'Francidb');
    }
    return $connect;
}


function addClient()
{
    $connect = databaseConnection();

    $sql = "INSERT INTO Clienti values('State', 'Francisca', 'francisca.state@gmail.com', 'franci', '2981201440021', 'Bucuresti', 'Sector 3');";
    $result = mysqli_query($connect, $sql);
    if ($result == true) {
        echo "Informatiile au fost adaugate";
    } else {

        echo "Va sugerez sa incercati din nou !";
    }
}

addClient();

?>
