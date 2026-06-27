<?php

function validerTelephone($telephone){
    $prefixesValides = ['77','78','76','70','75'];
    if(strlen($telephone) != 9) return 'invalide';
    if(!ctype_digit($telephone)) return 'invalide';
    $debut = substr($telephone, 0, 2);
    if(!in_array($debut, $prefixesValides)) return 'invalide';
    return 'valide';
}


function validerCode($code){
    if(strlen($code) != 4) return 'invalide';
    return 'valide';
}


function validerMontant($montant){
    if($montant <= 0) return 'invalide';
    return 'valide';
}


function validerSolde($solde){
    if($solde < 0) return 'invalide';
    return 'valide';
}
