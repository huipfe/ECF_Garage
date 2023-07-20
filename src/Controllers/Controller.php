<?php 
namespace App\Controllers;
use App\Models\HorairesModel;

// Le controller principale de l'application
abstract class Controller
{
    // On va faire une fonction render, qui va prendre en paramètre le chemin de la vue,
    // et les données à afficher.

    /**
     * Cette méthode permet d'afficher une vue
     *
     * @param string $fichier
     * @param array $donnees
     * @return void
     */

    protected $template1 = 'Header';
    protected $template2 = 'Footer';

    public function render(string $fichier, array $donnees = [])
    {
        // On extrait les données du tableau $donnees
        extract($donnees);

        // On démarre le buffer de sortie
        ob_start();

        // Récupérer les horaires
        $horaires = $this->getHoraires();

        // Ajouter les horaires aux données à envoyer à la vue
        $donnees['horaires'] = $horaires;

        // On inclut le header
        require_once ROOT . '/src/Views/templates/' . $this->template1 . '.html.php';

        // On inclut la vue spécifique
        require_once ROOT . '/src/' . $fichier . '.html.php';


        require_once ROOT . '/src/Views/templates/' . $this->template2 . '.html.php';

        // Transfère le contenu du buffer dans $contenu
        $contenu = ob_get_clean();

        // Affiche le contenu
        echo $contenu;
    }

    protected function getHoraires()
    {
        $horairesModel = new HorairesModel();
        $horaires = $horairesModel->fetchAll();
        return $horaires;
    }


}
?>