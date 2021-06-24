<?php
require_once("./data/liste_transactions.php");
$today = date('d-m-Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <select name="destinataire" method="POST" action="index.php">
            <option value="">--Please choose an option--</option>
            <?php
            foreach ($contacts as $contact) {
                echo '<option value="'.$contact['id'].'">'.$contact['nom'].' '.$contact['prenom'].'</option>';
            }
            ?>
        
        </select>
        <br>
        <input type="number" name="montant">
        <br>
        <input type="date" value="<?= $today ?>">
        <br>
        <input type="hidden" value="1" name="emetteur">
        <input type="submit">
    </form>
</body>
</html>