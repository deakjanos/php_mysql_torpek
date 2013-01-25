<?
$server = "$mysql_server_name"; // Server
$user = "$mysql_user"; // Felhasználó
$pass = "$mysql_password"; // Jelszó
$conn = mysql_connect($server,$user,$pass);
$sql="drop database"." "."$database_name";
$result=mysql_query($sql,$conn);
$sql="create database"." "."$database_name";
$result=mysql_query($sql,$conn);
mysql_select_db("$database_name",$conn);
$sql="create table felhasznalok (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, nev varchar(80) NOT NULL, jelszo varchar(80))";
$result=mysql_query($sql,$conn);
//1
$sql="insert into felhasznalok (nev,jelszo) values (\"tudor\", \"tudor\")";
$result=mysql_query($sql,$conn);
//2
$sql="insert into felhasznalok (nev,jelszo) values (\"vidor\", \"vidor\")";
$result=mysql_query($sql,$conn);
//3
$sql="insert into felhasznalok (nev,jelszo) values (\"hapci\", \"hapci\")";
$result=mysql_query($sql,$conn);

print("Adatbázis kész!");
?>