<?php
$conn="";
include "config.php";
include "menu.php";
?>
<h3>Vkladanie udajov</h3>
<form action="vloz.php" method="POST">


    <input type="hidden" name="id" value="0">
    <label for="meno">MENO:</label>
    <input type="text" name="meno"><br>

    <label for="priezvisko">PRIEZVISKO:</label>
    <input type="text" name="priezvisko"><br>

    <label for="odbor">ODBOR:</label>
    <input type="text" name="odbor"><br>

    <input type="submit" value="vlozit">
    <input type="hidden" name="vlozit" value="ano">
</form>

<?php
    include "insertstud.php";
    mysqli_close($conn);
include "footer.php";
    ?>


