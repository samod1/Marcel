<?php
$conn="";
include "config.php";
include "menu.php";

//middle content
echo"<h3>Zvol si zaverecnu pracu</h3>";
echo"<p>Komponent pre studentov na zvolenie zaverecnej prace</p>";

$query="SELECT nazov,veduci,druh_prace FROM zaverecna_praca WHERE Autor IS NULL";
$result=mysqli_query($conn,$query);

if(!$result)
{
    echo"Chyba v SQL dotaze".$query;
}
?>
<table>
    <tr>
        <th>Nazov</th>
        <th>Veduci</th>
        <th>Typ prace</th>
    </tr>

<?php

    while ($row=mysqli_fetch_assoc($result))
    {
?>
    <tr>
        <td><? echo $row["nazov"]; ?></td>
        <td><? echo $row["veduci"]; ?></td>
        <td><? echo $row["druh_prace"]; ?></td>
    </tr>
<?php
}
?>

</table>
<?php

include "footer.php";
mysqli_close($conn);
?>