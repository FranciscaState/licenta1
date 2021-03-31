<?php
session_start();


$connect= mysqli_connect('localhost','root','root','Francidb') or die('Conexiunea nu s-a putut efectua'.mysqli_error());

include_once "index.html";




if(isset($_POST['email']) && isset($_POST['parola']))
{
    $email = $_POST['email'];
    $password=$_POST['parola'];



    if($email & $password)
    {
        $sql = "SELECT Email, Parola FROM Clienti WHERE Email='$email' AND Parola='$password'";
        $query = mysqli_query($connect,$sql);
        $numrows = mysqli_num_rows($query);

        if ($numrows !=0)
        {
            while ($row = mysqli_fetch_assoc($query)) {
                $dbemail = $row['Email'];
                $dbpassword = $row['Parola'];

            }


            if ($email == $dbemail && $password == $dbpassword) {
                header("location:login_good.html");


            } else {
                echo "Datele introdse nu sunt corecte";
               // header("location: login_good.html");
            }
        }
    }//   <input type='creare' class="btn btn-sm btn-primary" value='Creare cont nou'/></br></br>

}
    ?>