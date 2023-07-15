<?php 

namespace App\Controllers;

use App\Core\Form;
use App\Models\UsersModel;

class DashboardController extends Controller
{
    public function index()
    {
        $this->render('/Views/templates/Dashboard');

    }

    /**
     * Méthode pour enregistrer un utilisateur
     * @return void
     */
    public function administration()
    {
        //On vérifie si le formulaire est valide
        if (Form::validate($_POST, ['email', 'password'])) {
            // Le formulaire est valide

            // On nettoie l'adresse mail
            $email = strip_tags($_POST['email']);

            // On chiffre le mot de passe
            $password = password_hash($_POST['password'], PASSWORD_ARGON2I);

            // On hydrate l'utilisateur en BDD
            $user = new UsersModel;

            $user->setEmail($email)
                ->setPasseWord($password);

            // On stock l'utilisateur en BDD
            $user->create();
        }


        // On veut afficher ses utilisateur qui sont en base de donnés.
        $usersModel = new UsersModel;
        $users = $usersModel->findAll();

        $this->render('/Views/templates/Dashboard', ['users' => $users]);

    }


}
