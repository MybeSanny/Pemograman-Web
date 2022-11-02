<?php
$connection = mysqli_connect("localhost", "root",  "", "project1");
if(!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
}   echo "Connected Succesfully to Project1 <br>";
$query_insert = mysqli_query($connection, "INSERT INTO guru(ID, NAMA_LENGKAP, ALAMAT, TL, NIP,
JURUSAN) VALUES('', 'Nathaniell Jody Saputra', 'Gambirsari RT 03/RW 03,Joglo,Banjarsari', '2005-08-20', 'P12221', 'RPL')");
if(!$query_insert) {
    echo ("Error query " . mysqli_error($connection));
}
mysqli_close($connection);
?>