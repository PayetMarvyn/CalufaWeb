<?php

/**
 * fonction permettant de récupérer tous partenaire stockés
 * 
 * @return array
 */


function getAllPartenaires () {
    $pdo = getDatabaseConnexion() ;
    $sql = "SELECT * FROM partenaires";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}