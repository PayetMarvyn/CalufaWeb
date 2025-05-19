<?php

/**
 * fonction permettant de récupérer tous les étudiants stockés
 * dans la base de données sous forme de tableau
 */

function getAllBieres () {
    $pdo = getDatabaseConnexion() ;
    $sql = "SELECT * FROM bieres";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}

 function getBiere (int $id) {
    $pdo = getDatabaseConnexion() ;
    $sql = "SELECT * FROM bieres WHERE id=:id_biere";
    $stmt = $pdo->prepare("$sql") ;
    $stmt->bindParam(':id_biere', $id, PDO::PARAM_INT);
    //$stmt->execute() ;
    return $stmt->fetch();
}