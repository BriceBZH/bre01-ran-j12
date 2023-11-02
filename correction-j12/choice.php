<?php

if(!isset($_GET["eventNumber"]) && !isset($_GET["choice"])) // premiere arrivée devant le donjon
{
    $choiceShortSentence = "Comment allez-vous procéder ?";
    $eventDescription = "Vous vous trouvez devant la porte d'un donjon dont vous ne parvenez pas à voir le sommet, enfoui dans les nuages.";
    $eventImage = "tower.png";
    $choices = [
    "Vous poussez la lourde porte en bois.",
    "Vous faites le tour du donjon pour voir s'il n'existe pas une entrée plus discrète.",
    ];
    $eventNumber = 0;
    $color = "green";
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 0 && isset($_GET["choice"]) && $_GET["choice"] == 1) // j'ai tenté de trouver une autre entrée
{
    $choiceShortSentence = "Comment allez-vous procéder ?";
    $eventDescription = "Non, pas de porte dérobée. Vous vous trouvez devant la porte d'un donjon dont vous ne parvenez pas à voir le sommet, enfoui dans les nuages.";
    $eventImage = "tower.png";
    $choices = [
    "Vous poussez la lourde porte en bois.",
    ];
    $eventNumber = 0;
    $color = "green";
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 0 && $_GET["choice"] == 0) // j'arrive dans l'entrée du donjon
{
    $choiceShortSentence = "Quelle arme choisissez-vous ?";
    $eventDescription = "Vous pénétrez dans l'entrée du donjon. Face à vous se trouvent une masse, une épée et une hache.";
    $eventImage = "cross-swords.png";
    $choices = [
    "La hache",
    "L'épée",
    "La masse"
    ];
    $eventNumber = 1;
    $color = "grey-blue";
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 1 && $_GET["choice"] == 0) // j'ai choisi la hache
{
    $choiceShortSentence = "Par où allez vous commencer ?";
    $eventDescription = "Vous testez votre nouvelle hache <br>en donnant des coups dans l'air.<br> Lorsque vous êtes satisfait, <br>vous regardez autour de vous.";
    $eventImage = "axe.png";
    $choices = [
        "L'escalier qui monte à l'étage supérieur.",
        "L'escalier qui descend à l'étage inférieur."
    ];
    $eventNumber = 2;
    $color = "grey-blue";
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 1 && $_GET["choice"] == 1) // j'ai choisi l'épée
{
    $choiceShortSentence = "Par où allez vous commencer ?";
    $eventDescription = "Vous testez votre nouvelle épée <br>en donnant des coups dans l'air.<br> Lorsque vous êtes satisfait, <br>vous regardez autour de vous.";
    $eventImage = "sword.png";
    $choices = [
        "L'escalier qui monte à l'étage supérieur.",
        "L'escalier qui descend à l'étage inférieur."
    ];
    $eventNumber = 2;
    $color = "grey-blue";
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 1 && $_GET["choice"] == 2) // j'ai choisi la masse
{
    $choiceShortSentence = "Par où allez vous commencer ?";
    $eventDescription = "Vous testez votre nouvelle masse <br>en donnant des coups dans l'air.<br> Lorsque vous êtes satisfait, <br>vous regardez autour de vous.";
    $eventImage = "mace.png";
    $choices = [
        "L'escalier qui monte à l'étage supérieur.",
        "L'escalier qui descend à l'étage inférieur."
    ];
    $eventNumber = 2;
    $color = "grey-blue";
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 2 && $_GET["choice"] == 1) // j'ai pris l'escalier qui descend
{
    $choiceShortSentence = "Reposez en paix.";
    $eventDescription = "Lorsque vous posez le pied <br>sur la première dalle du palier <br>votre corps entier prend feu <br>et vous périssez dans les flammes.";
    $eventImage = "fire-spell.png";
    $choices = [
        "Retour à l'écran d'accueil",
    ];
    $eventNumber = 4;
    $color = "red";
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 2 && $_GET["choice"] == 0) // j'ai pris l'escalier qui monte
{
    $choiceShortSentence = "Quelle porte ouvrez-vous";
    $eventDescription = "Vous arrivez au premier palier, 3 portes se présentent à vous.";
    $eventImage = "mace.png";
    $choices = [
        "La porte rose",
        "La porte bleue",
        "La porte verte",
    ];
    $eventNumber = 3;
    $color = "grey-blue";
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 4 && $_GET["choice"] == 0) // je suis mort cramé dans le sous-sol
{
    header("Location: index.html");
    die;
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 3 && $_GET["choice"] == 0) // étage 1 porte rose
{
    $choiceShortSentence = "Que faites-vous ?";
    $eventDescription = "Sur une table au centre de la pièce se trouve une potion rose<br>. L'odeur qui s'en dégage est agréable et sucrée.";
    $eventImage = "potion.png";
    $choices = [
        "Vous buvez la potion puis poursuivez votre chemin",
        "Vous laissez la potion sur la table et continuez votre chemin",
        "Vous glissez la potion dans votre poche et poursuivez votre chemin",
    ];
    $eventNumber = 5;
    $color = "dark-pink";
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 3 && $_GET["choice"] == 1) // étage 1 porte bleue
{
    $choiceShortSentence = "Reposez en paix.";
    $eventDescription = "Vous entendez une foix stridente hurler <br> 'Vous pas prendre bougies'<br> Vous vous consummez intégralement de l'intérieur<br>";
    $eventImage = "fire-spell.png";
    $choices = [
        "Retour à l'écran d'accueil",
    ];
    $eventNumber = 6;
    $color = "dark-blue";
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 3 && $_GET["choice"] == 2) // étage 1 porte verte
{
    $choiceShortSentence = "Que faites-vous ?";
    $eventDescription = "Vous tombez sur un orc, à la mine déconfite.<br> Il sanglotte doucement.";
    $eventImage = "orc.png";
    $choices = [
        "Vous continuez discrètement votre chemin",
        "Vous lui demandez ce qui le rend si triste",
    ];
    $eventNumber = 7;
    $color = "green";
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 6 && $_GET["choice"] == 0) // je suis mort cramé par le fan des bougies
{
    header("Location: index.html");
    die;
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 5 && $_GET["choice"] == 0) // j'ai bu la potion
{
    $choiceShortSentence = "Que faites-vous ?";
    $eventDescription = "Vous entrez dans la pièce suivante et un loup garou très sexy garde la prochaine porte.";
    $eventImage = "werewolf.png";
    $choices = [
        "'Vous avez des jolies dents. Vous habitez chez vos parents ?'"
    ];
    $eventNumber = 8;
    $color = "dark-pink";
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 5 && $_GET["choice"] == 1) // j'ai laissé la potion
{
    $choiceShortSentence = "Que faites-vous ?";
    $eventDescription = "Vous entrez dans la pièce suivant et un loup garou garde la porte suivante. Il halète et semble assoiffé.";
    $eventImage = "werewolf.png";
    $choices = [
        "Vous retournez chercher la potion",
        "Vous tentez d'attaquer le loup garou"
    ];
    $eventNumber = 9;
    $color = "grey-blue";
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 5 && $_GET["choice"] == 2) // j'ai embarqué la potion
{
    $choiceShortSentence = "Que faites-vous ?";
    $eventDescription = "Vous entrez dans la pièce suivant et un loup garou garde la porte suivante. Il halète et semble assoiffé.";
    $eventImage = "werewolf.png";
    $choices = [
        "Vous buvez la potion",
        "Vous lui tendez la potion",
        "Vous tentez d'attaquer le loup garou"
    ];
    $eventNumber = 10;
    $color = "grey-blue";
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 8 && $_GET["choice"] == 0) // werewolf seduction denied
{
    $choiceShortSentence = "Hum. Mais qui m'a assommé ?";
    $eventDescription = "Vous vous réveillez à l'auberge <br> Un mot trône sur la table de chevet. 'Vous avez par mégarde bu un filtre d'amour.<br>Je vous ai ramené en lieu sûr.'";
    $eventImage = "werewolf.png";
    $choices = [
        "Retour à l'écran d'accueil",
    ];
    $eventNumber = 11;
    $color = "grey-blue";
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 11 && $_GET["choice"] == 0) // auberge
{
    header("Location: index.html");
    die;
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 9 && $_GET["choice"] == 0) // je retourne chercher la potion
{
    $choiceShortSentence = "Que faites-vous ?";
    $eventDescription = "Sur une table au centre de la pièce se trouve une potion rose<br>. L'odeur qui s'en dégage est agréable et sucrée.";
    $eventImage = "werewolf.png";
    $choices = [
        "Vous buvez la potion puis poursuivez votre chemin",
        "Vous glissez la potion dans votre poche et poursuivez votre chemin",
    ];
    $eventNumber = 12;
    $color = "dark-pink";
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 9 && $_GET["choice"] == 2) // j'attaque le loup garou
{
    $choiceShortSentence = "Reposez en paix";
    $eventDescription = "Vous avez à peine le temps de brandir votre arme <br>que le loup garou a arraché votre gorge d'un coup de griffe.";
    $eventImage = "werewolf.png";
    $choices = [
        "Retour à l'écran d'accueil",
    ];
    $eventNumber = 14;
    $color = "grey-blue";
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 9 && $_GET["choice"] == 1) // j'attaque le loup garou
{
    $choiceShortSentence = "Reposez en paix";
    $eventDescription = "Vous avez à peine le temps de brandir votre arme <br>que le loup garou a arraché votre gorge d'un coup de griffe.";
    $eventImage = "werewolf.png";
    $choices = [
        "Retour à l'écran d'accueil",
    ];
    $eventNumber = 14;
    $color = "grey-blue";
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 12 && $_GET["choice"] == 1) // je suis retourné chercher la potion
{
    $choiceShortSentence = "Que faites-vous ?";
    $eventDescription = "Vous entrez dans la pièce suivant et un loup garou garde la porte suivante. Il halète et semble assoiffé.";
    $eventImage = "werewolf.png";
    $choices = [
        "Vous buvez la potion",
        "Vous lui tendez la potion",
        "Vous tentez d'attaquer le loup garou"
    ];
    $eventNumber = 13;
    $color = "grey-blue";
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 10 && $_GET["choice"] == 0) // j'ai bu la potion
{
    $choiceShortSentence = "Que faites-vous ?";
    $eventDescription = "Vous entrez dans la pièce suivante et un loup garou très sexy garde la prochaine porte.";
    $eventImage = "werewolf.png";
    $choices = [
        "'Vous avez des jolies dents. Vous habitez chez vos parents ?'"
    ];
    $eventNumber = 15;
    $color = "dark-pink";
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 12 && $_GET["choice"] == 0) // j'ai bu la potion
{
    $choiceShortSentence = "Que faites-vous ?";
    $eventDescription = "Vous entrez dans la pièce suivante et un loup garou très sexy garde la prochaine porte.";
    $eventImage = "werewolf.png";
    $choices = [
        "'Vous avez des jolies dents. Vous habitez chez vos parents ?'"
    ];
    $eventNumber = 15;
    $color = "dark-pink";
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 13 && $_GET["choice"] == 0) // j'ai bu la potion
{
    $choiceShortSentence = "Que faites-vous ?";
    $eventDescription = "Vous entrez dans la pièce suivante et un loup garou très sexy garde la prochaine porte.";
    $eventImage = "werewolf.png";
    $choices = [
        "'Vous avez des jolies dents. Vous habitez chez vos parents ?'"
    ];
    $eventNumber = 15;
    $color = "dark-pink";
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 13 && $_GET["choice"] == 2) // j'attaque le loup garou
{
    $choiceShortSentence = "Reposez en paix";
    $eventDescription = "Vous avez à peine le temps de brandir votre arme <br>que le loup garou a arraché votre gorge d'un coup de griffe.";
    $eventImage = "werewolf.png";
    $choices = [
        "Retour à l'écran d'accueil",
    ];
    $eventNumber = 14;
    $color = "grey-blue";
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 10 && $_GET["choice"] == 2) // j'attaque le loup garou
{
    $choiceShortSentence = "Reposez en paix";
    $eventDescription = "Vous avez à peine le temps de brandir votre arme <br>que le loup garou a arraché votre gorge d'un coup de griffe.";
    $eventImage = "werewolf.png";
    $choices = [
        "Retour à l'écran d'accueil",
    ];
    $eventNumber = 14;
    $color = "grey-blue";
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 14 && $_GET["choice"] == 0) // mort loup garou
{
    header("Location: index.html");
    die;
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 15 && $_GET["choice"] == 0) // auberge
{
    header("Location: index.html");
    die;
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 13 && $_GET["choice"] == 1) // je donne la potion
{
    $choiceShortSentence = "Bravo vous êtes riche !";
    $eventDescription = "Le loup boit la potion<br> Il vous sourit avec une certaine douceur. <br> Fou d'amour et de gratitude <br>il vous propose de vous offrir le trésor du donjon.";
    $eventImage = "werewolf.png";
    $choices = [
        "Finir vos jours couronné d'or et de gloire.",
    ];
    $eventNumber = 16;
    $color = "grey-blue";
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 10 && $_GET["choice"] == 1) // je donne la potion
{
    $choiceShortSentence = "Bravo vous êtes riche !";
    $eventDescription = "Le loup boit la potion<br> Il vous sourit avec une certaine douceur. <br> Fou d'amour et de gratitude <br>il vous propose de vous offrir le trésor du donjon.";
    $eventImage = "werewolf.png";
    $choices = [
        "Finir vos jours couronné d'or et de gloire.",
    ];
    $eventNumber = 16;
    $color = "grey-blue";
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 16 && $_GET["choice"] == 0) // auberge
{
    header("Location: index.html");
    die;
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 7 && $_GET["choice"] == 1) // je parle à l'orc
{
    $choiceShortSentence = "Reposez en paix.";
    $eventDescription = "Vous avez à peine ouvert la bouche <br> que vous réalisez qu'il est en train de couper un oignon. <br> Il vous lance son couteau qui vous traverse <br> la gorge.";
    $eventImage = "orc.png";
    $choices = [
        "Retour à l'écran d'accueil",
    ];
    $eventNumber = 17;
    $color = "green";
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 17 && $_GET["choice"] == 0) // tué par l'orc
{
    header("Location: index.html");
    die;
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 7 && $_GET["choice"] == 0) // je contourne l'orc
{
    $choiceShortSentence = "Reposez en paix.";
    $eventDescription = "Vous parvenez à contourner l'orc qui découpe son oignon <br> Dans la pièce suivante vous tombez sur une elfe. <br> Elle s'apprête à rentrer dans un portail dimensionnel.";
    $eventImage = "elf.png";
    $choices = [
        "Vous décidez de la suivre.",
    ];
    $eventNumber = 18;
    $color = "green";
}
else if(isset($_GET["eventNumber"]) && $_GET["eventNumber"] == 18 && $_GET["choice"] == 0) // j'ai choisi la hache
{
    $choiceShortSentence = "Par où allez vous continuer ?";
    $eventDescription = "Vous voilà revenu au pied des escaliers. Plus de traces de l'elfe.";
    $eventImage = "portal.png";
    $choices = [
        "L'escalier qui monte à l'étage supérieur.",
        "L'escalier qui descend à l'étage inférieur."
    ];
    $eventNumber = 2;
    $color = "grey-blue";
}




require "templates/choice.phtml";

?>