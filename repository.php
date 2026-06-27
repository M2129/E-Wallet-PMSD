<?php

function trouverWallet($wallets, $telephone){
    foreach($wallets as $index => $wallet){
        if($wallet['telephone'] == $telephone) return $index;
    }
    return -1;
}


function telephoneExiste($wallets, $telephone){
    return trouverWallet($wallets, $telephone) !== -1;
}


function codeExiste($wallets, $code){
    foreach($wallets as $wallet){
        if($wallet['code'] == $code) return true;
    }
    return false;
}


function ajouterWallet(&$wallets, $newWallet){
    $wallets[] = $newWallet;
}


function mettreAJourSolde(&$wallets, $index, $nouveauSolde){
    $wallets[$index]['solde'] = $nouveauSolde;
}


function ajouterTransaction(&$transactions, $transaction){
    $transactions[] = $transaction;
}
