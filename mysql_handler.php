 <HTML>
 <BODY>
 
 Itt létrehozható az adatbázis a MySQL szerveren.</br>
 A legvégül megadott néven fog szerepelni az adatbázis, ezért</br>
 a későbbiekben a forrásfájlokban ezen a néven hivatkozzunk rá!</br>
 Itt: felhasznalok_kinyerese.php</br>
 
 A megadott adatbázisban a mysql_create_db.php</br>
 létrehozza az alábbi szerkezetet:</br></br>
 Tábla:felhasznalok</br>
 Mezők: 
 id INT; nev varchar(80); jelszo varchar(80)</br></br>
 Rekordok feltöltése:</br>
 Három rekordot visz be:</br>
 1 tudor tudor</br>
 2 vidor vidor</br>
 3 hapci hapci</br>
 
 
<form action="mysql_create_db.php" method="post">
<INPUT TYPE = "TEXT"
name = "mysql_server_name"
value = "MySQL szerver neve"
size = "30"
maxlength = "30">
</br>

<INPUT TYPE = "TEXT"
name = "mysql_user"
value = "MySQL-hez felhasználói név"
size = "30"
maxlength = "30">
</br>

<INPUT TYPE = "TEXT"
name = "mysql_password"
value = "MySQL-hez jelszó"
size = "30"
maxlength = "30">
</br>

<INPUT TYPE = "TEXT"
name = "database_name"
value = "Az adatbázis neve"
size = "30"
maxlength = "30">
</br>

<INPUT TYPE = "SUBMIT"
name = "name"
value = "OK">

</form>

<BODY>

</HTML>