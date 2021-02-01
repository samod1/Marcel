<?php
$conn="";
include "config.php";
?>
<form action="./edituj.php" method="POST" onsubmit="return confirm('Naozaj chces vykonat tieto zmeny ?');">

    <fieldset>
        <legend>Osobne udaje</legend>

        <input type="hidden" name="id" value="<?php echo $id;?>">
        <div class="form-group">
        <label for="meno">Meno:</label>
        <input  type="text" name="meno" value="<?php echo $meno;?>" required autofocus><br>
        </div>

        <div class="form-group">
        <label for="priezvisko">Priezvisko:</label>
        <input type="text" name="priezvisko" required autofocus
               value="<?php echo $priezvisko; ?>">
        </div>
    </fieldset>
    <label for="odbor">ODBOR</label>

    <br>
    <input class="btn btn-primary" type="submit" value="Uprav udaje"><br>
    <input type="hidden" name="uprav" value="ano">

</form>

