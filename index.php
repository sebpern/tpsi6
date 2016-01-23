<?php
// inclusion de la page de configuration des constantes afin de rendre 
// code aisément portable
include("config.php");

//inclusion du haut de la page, en utilisant la constante définie dans config.php
include(VUES."header.php");

// test sur l'existance du paramètre action d'l'URL
if(isset($_GET["action"]))
{
	// récupartion de l'action passée dans l'url
	$action=$_GET["action"];
        // test de la valeur de la variable
	switch ($action) {
		case 'create':
                        // inclusion de la vue avec le formulaire de saisie
			include(VUES."create.php");
			break;
                case 'createPost':
                        // création d'une variable de type tableau associatif
                        $uneAnnonce["titre"]=$_POST["titre"];
                        $uneAnnonce["description"]=$_POST["description"];
                        // affichage de la variable : type et contenu
                        var_dump($uneAnnonce);
			// redirection commentée pour voir l'affichage
                        //header("Location: index.php?action=list");
			break;
		case 'list':
                        // création d'un tableau d'annonces
                        $lesAnnonces = array (
                                    array("titre" => "Trajet Lons - Dole ", "description" => "...."),
                                    array("titre" => "Bail à céder", "description" => "....."),
                                    array("titre" => "PC à vendre", "description" => "....")
                                );
			include(VUES."list.php");
			break;					
		default:
			include(VUES."home.php");
			break;
	}
	
}
//si pas d'action dans l'url
else
{
	include(VUES."home.php");
}
include(VUES."footer.php");
?>