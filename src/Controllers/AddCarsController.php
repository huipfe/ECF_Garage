<?php

namespace App\Controllers;

use App\Models\CarsDetailsModel;
use App\Core\Form;

class AddCarsController extends Controller

{
    /**
     * Cette méthode me permettra d'ajouter une voiture
     * Ajoute une voiture
     * @return void
     */
    public function ajouter()
    {
        // Pour pouvoir ajouter une voiture, il faut être un employé ou un admin connecté
        // On vérifie si l'utilisateur est connecté
        if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
            // L'utilisateur est connecté

            // On vérifie si le formulaire est complet.
            if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)){
                // Le formulaire est complet

                // On se protège contre les failles XSS
                // htmlentities() permet de rendre inoffensives les balises HTML
                // htmlspecialchars() permet de rendre inoffensives les balises HTML
                // trim() permet de supprimer les espaces en début et fin de chaîne

                // strip_tags() permet de supprimer les balises HTML
                $marque = strip_tags($_POST['marque']);
                $modele = strip_tags($_POST['modele']);
                $annee = strip_tags($_POST['annee']);
                $kilometrage = strip_tags($_POST['kilometrage']);
                $prix = strip_tags($_POST['prix']);
                // $image = strip_tags($_POST['image']);
                $image = base64_encode(file_get_contents($_FILES['image']['tmp_name']));
                $description = strip_tags($_POST['description']);
                $id = strip_tags($_SESSION['user']['id']);
                $users_id = strip_tags($_SESSION['user']['id']);

                // On va enregister notre voiture dans la BDD
                // On instancie le modèle correspondant à la table "liste des voitures"
                $carsDetailsModel = new CarsDetailsModel(
                    $marque,
                    $modele,
                    $annee,
                    $kilometrage,
                    $prix,
                    $image,
                    $id,
                    $description,
                    $users_id
                );

                // On hydrate notre modèle
                $carsDetailsModel->setMarque($marque)
                    ->setModele($modele)
                    ->setAnnee($annee)
                    ->setKilometrage($kilometrage)
                    ->setPrix($prix)
                    ->setImage($image)
                    ->setDescription($description)
                    ->setUsersId($_SESSION['user']['id']);

                ;

                // Vérifier si un fichier a été téléchargé
                if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                    // Chemin temporaire du fichier téléchargé
                    $tmpFilePath = $_FILES['image']['tmp_name'];

                    // Lire le contenu du fichier
                    $imageData = file_get_contents($tmpFilePath);

                    // Enregistrer l'image dans la base de données en tant que format longblob
                    // (vous devez utiliser la méthode appropriée de votre modèle)
                    $carsDetailsModel->setImage($imageData);
                }

                // On enregistre notre voiture dans la BDD
                $carsDetailsModel->createCar([
                    "marque" => $marque,
                    "modele" => $modele,
                    "annee" => $annee,
                    "kilometrage" => $kilometrage,
                    "prix" => $prix,
                    "image" => $image,
                    "description" => $description,
                    "users_id" => $users_id
                ]);
                
                // On redirige l'utilisateur vers la liste des voitures
                $_SESSION['message'] = "Votre voiture a bien été ajoutée";
                header('Location: /ECF_Garage/public/cars');
                exit;
            }else {
                // Le formulaire n'est pas complet
                // On affiche un message d'erreur
                $_SESSION['error'] = "Le formulaire est incomplet";
                // echo "<p class='mx-2 alert alert-danger'>Le formulaire est incomplet</p>";
            }


            // Il a le droit d'ajouter une voiture
            $form = new Form;

            // On ajoute les champs de notre formulaire
            $form->debutForm()
                ->ajoutLabelFor("marque", "Marque de la voiture : ")
                ->ajoutInput("text", "marque", ['id' => 'marque', 'class' => 'form-control'])
                ->ajoutLabelFor("modele", "Modèle de la voiture : ")
                ->ajoutInput("text", "modele", ['id' => 'modele', 'class' => 'form-control'])
                ->ajoutLabelFor("annee", "Année de la voiture : ")
                ->ajoutInput("number", "annee", ['id' => 'annee', 'class' => 'form-control'])
                ->ajoutLabelFor("kilometrage", "Kilométrage de la voiture : ")
                ->ajoutInput("number", "kilometrage", ['id' => 'kilometrage', 'class' => 'form-control'])
                ->ajoutLabelFor("prix", "Prix de la voiture : ")
                ->ajoutInput("number", "prix", ['id' => 'prix', 'class' => 'form-control'])
                ->ajoutLabelFor("image", "Image de la voiture : ")
                ->ajoutInput("img", "image", ['id' => 'image', 'class' => 'form-control'])
                ->ajoutLabelFor("description", "Description de la voiture : ")
                ->ajoutTextarea("text", "", ['id' => 'description', 'class' => 'form-control'])
                ->ajoutBouton("Ajouter", ['class' => 'btn btn-primary'])
                ->finForm();

                // Une fois que le formulaire est terminés, ont l'envoie à notre vue.
                $this->render('Views/templates/AddCars', [
                    "form" => $form->create()
                ]);

        } else {
            // L'utilisateur n'est pas connecté
            // On le redirige vers la page de connexion
            $_SESSION['erreur'] = "Vous devez être connecté pour ajouter une annonce";
            header('Location: /ECF_Garage/public/login/Belogin');
            exit;
        }

    }

}
