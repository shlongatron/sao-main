<?php
$email = $_POST["email"];
$nick = $_POST["nick"];
$haslo = $_POST["pass"];
$hasloRetry = $_POST["passRetry"];

if($hasloRetry == $haslo)
{
    echo $email . " " . $nick . " " . $haslo;
}
else
{
    echo "Nie poprawne hasło!";
    echo "<a href = 'UwU.html'>Wróć</a>";
}

#$connect = mysqli_connect('localhost', 'root', '', 'sao');
#$result = mysqli_query($connect, " kodzik tu UwU ");

#while($row = mysqli_fetch_assoc($result))
#{
    #echo "<li>" . $row['email'] . " " . $row['nick'] . "</li>";
#}

#mysqli_close($connect);
?>
