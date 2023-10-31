<?php
if(!empty($_GET['race'])) {
    $race = $_GET['race'];
    //$nom = $_GET['nom'];
    //header('Location: choix_vie_'.$race.'.phtml?race='.$race.'&nom='.$nom);
    header('Location: choix_vie_'.$race.'.phtml');
} if(!empty($_GET['fin'])) {
    $fin = $_GET['fin'];
    header('Location:'.$fin.'_orc.phtml');
} if(!empty($_GET['debut_vie'])) {
    $debut_vie = $_GET['debut_vie'];
	header('Location: '.$debut_vie.'_orc.phtml');
}


?>