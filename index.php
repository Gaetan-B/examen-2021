<?php

require_once("./data/liste_transactions.php");
$month = 06;
echo '<ul>';
foreach($transactions as $transaction) {
    $emetteur = intval($transaction['emetteur']);
    $emetteur -= 1;
    $destinataire = intval($transaction['destinataire']);
    $destinataire -= 1;
    $date = explode('/',$transaction['date']);
    if ($date[1] == $month) {
        echo '<li>date : '.$transaction['date'].'</li>';
        if ($transaction['montant'] > 0) {
            echo '<li>emetteur : <span style=text-transform:uppercase; >'.$contacts[$emetteur]['nom'].' '.$contacts[$emetteur]['prenom'].'</span></li>';
            echo '<li>compte : '.$contacts[$emetteur]['compte'].'</li>';
            echo '<li>montant : <span style="color:green">'.$transaction['montant'].'</span></li>';
        }
        else {
            echo '<li>destinataire : <span style=text-transform:uppercase; >'.$contacts[$destinataire]['nom'].' '.$contacts[$destinataire]['prenom'].'</span></li>';
            echo '<li>compte : '.$contacts[$destinataire]['compte'].'</li>';
            echo '<li>montant : <span style="color:gray">'.$transaction['montant'].'</span></li>';
        }
        
    }
}
echo '</ul>';
