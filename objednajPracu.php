<?php
$conn="";
include "config.php";
if($_GET["praca"] == "ano")
{
    $idStudent=$_GET["idStud"];
    $idPraca=$_GET["idPrace"];

    echo $idStudent."".$idPraca;

    $query = "UPDATE student SET id_prace=? WHERE id=?";

    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $query);
    mysqli_stmt_bind_param($stmt, "ii", $idPraca,$idStudent);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_commit($conn);

    $query2="UPDATE zaverecna_praca SET autor=? WHERE id_prace=?";
    $stmt2 = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt2, $query);
    mysqli_stmt_bind_param($stmt2, "ii", $idStudent,$idPraca);
    mysqli_stmt_execute($stmt2);
    mysqli_stmt_close($stmt2);
    mysqli_commit($conn);


}
?>