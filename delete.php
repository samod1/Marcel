<?php
include "config.php";
<<<<<<< HEAD
if ($_GET["zmazat"] == "ano" && $_GET["id"] != "") {
=======
$zmaz=$_GET["zmazat"];
if ($zmaz == "ano" && $_GET["id"] != "") {
>>>>>>> Verzia 31.01.2021 22:05

    $id = $_GET["id"];
    $query = "DELETE FROM student WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:citaj.php");
}
?>