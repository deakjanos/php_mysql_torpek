<HTML>
<BODY>
<p>
Bejelentkezés:</br>
Ez a fájl végzi az adatbázissal való összevetést.</br>
Ha a felhasználói név és a jelszó megegyezik, akkor a</br>
felhasznalonev_index.php</br>
állományt tölti be.</br>

</br>
</br>
Tehát:
<?

$server = "localhost"; // Server
$user = "root"; // Felhasználó
$pass = "a jelszó"; // Jelszó
$conn = mysql_connect($server,$user,$pass);
mysql_select_db("torpek",$conn); // a létrehozott adatbázis neve
$sql="SELECT * FROM felhasznalok ORDER BY id ASC";
$result=mysql_query($sql,$conn);

while($row=mysql_fetch_row($result))
{
	if ($row[1] == $nev && $row[2] == $jelszo)
	{
	include("torpek_oldalai/".$nev."_index.php");
	}
}
?>
</p>

</BODY>
</HTML>