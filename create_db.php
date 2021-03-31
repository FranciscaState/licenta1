<?php



function databaseConnection(){
    if(!mysqli_connect('localhost','root','root','Francidb')){
        die("Conexiunea nu s-a putut efectua");

    }else{
        $connect= mysqli_connect('localhost','root','root','Francidb');

    }

    return $connect;

}

databaseConnection();

function create_db()
{

    $sql1 = "CREATE TABLE Clienti (
        Nume VARCHAR(50) NOT NULL, 
        Prenume VARCHAR(50) NOT NULL ,
        Email VARCHAR(50) NOT NULL ,
        Parola VARCHAR(50) NOT NULL ,
        CNP VARCHAR(13) NOT NULL ,
        Localitate VARCHAR(50) NOT NULL ,           
        Sector VARCHAR(50) NOT NULL             
)";

    $connect = databaseConnection();
    if ($connect->query($sql1) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $connect->error;
    }
}

create_db();
?>