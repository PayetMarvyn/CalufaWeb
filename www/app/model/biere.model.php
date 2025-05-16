<?php

/**
 * fonction permettant de récupérer tous les étudiants stockés
 * dans la base de données sous forme de tableau
 * 
 * @return array
 */

 function getBiere (int $id) {
    $pdo = getDatabaseConnexion() ;
    $sql = "SELECT * FROM bieres WHERE id=:id";
    $stmt = $pdo->prepare("$sql") ;
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute() ;
    return $stmt->fetch();
}