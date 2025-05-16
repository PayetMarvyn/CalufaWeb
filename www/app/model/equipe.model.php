<?php

/**
 * fonction permettant de récupérer tous les étudiants stockés
 * dans la base de données sous forme de tableau
 * 
 * @return array
 */


function getAllMembers () {
    $pdo = getDatabaseConnexion() ;
    $sql = "SELECT * FROM membres";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}
