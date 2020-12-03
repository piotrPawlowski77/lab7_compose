<?php

echo 'Wiitaj na stronie';

//nazwa serwisu w docker compose
$serverName = 'mysqlv1'; 

//dane do polaczenia sie z baza danych okreslone w pliku compose
$user = 'root';
$password = 'ryba123';

//ustanowienie polaczenia
$conn = mysqli_connect($serverName, $user, $password);

//jesli nie nawiazano polaczenia
if(!$conn)
{
	echo 'blad polaczenia'.mysqli_connect_error();
}

echo 'Polaczono z baza danych mysql';

phpinfo();

?>
