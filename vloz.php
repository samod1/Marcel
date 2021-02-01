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

    <label for="odbor">ODBOR</label>
    <select name="odbor">

        <?php
            $query="SELECT nazovOdb, id_odboru FROM odbor ORDER BY id_odboru ASC";
            $result=mysqli_query($conn,$query);
            if(!$result)
            {
                echo "chyba pri SQL dopyte";
            }

            while ($row=mysqli_fetch_assoc($result))
        {
        ?>
        <option value="<?php $row["nazov"] ?>"><?php echo $row["id_odboru"]?></option>
    </select><br>
    <?}?>
    <input type="submit" value="vlozit">
    <input type="hidden" name="vlozit" value="ano">
</form>

<?php
    include "insertstud.php";
    mysqli_close($conn);
    include "footer.php";
?>