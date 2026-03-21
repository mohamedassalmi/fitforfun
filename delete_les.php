<?php
/*
=========================================================
DELETE_LES.PHP

Doel:
Verwijderen van een les uit de session.

Werking:
- ID wordt via GET ontvangen
- Les wordt verwijderd uit array
- Daarna redirect naar overzicht
=========================================================
*/

session_start();

/*
Controle of ID bestaat
*/
if(isset($_GET['id'])){

    $id = $_GET['id'];

    /*
    Controle of les bestaat
    */
    if(isset($_SESSION['lessen'][$id])){

        unset($_SESSION['lessen'][$id]);

    }

}

/*
Redirect naar overzicht
*/
header("Location: read_lessen.php");
exit;
?>