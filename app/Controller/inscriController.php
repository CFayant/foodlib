<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Security\AuthentificationManager;
use \W\Manager\UserManager;


class UserController extends Controller
{

  public function inscription()
  {
    $this->show('page/inscription');
  }


  public function inscription_b()
  {

    $erreurs = [];
    if ( isset($_POST['sign-up']) ) {

      $manager = new UserManager();

      // Validation et Filtrage [myform]

      // Nom
      if( empty( $_POST['myform']['username']) ||
       (strlen($_POST['myform']['username']) <3) ||
       (strlen($_POST['myform']['username']) > 100) ||
       !preg_match('/^[a-zA-Z_]+$/', $_POST['myform']['username']) ) {

            $erreurs[] = 'Le champ pseudo doit obligatoirement comporter entre 3 et 50 caractères';

        }

        // Password
        if (empty($_POST['myform']['password']) ||
          strlen($_POST['myform']['password']) > 50) {
          $erreurs[] = "Le champ mot de passe doit obligatoirement comporter moins de 50 caractères";
        }

        // Confirm password
        if ($_POST['myform']['passwordConfirm'] != $_POST['myform']['password']) {
          $erreurs[] = "Le mot de passe ne correspond pas";
        }

        // Si $erreurs vide, Validation OK
       if ( empty($erreurs)) {

            $wuser = $manager->insert(['username' => $_POST['myform']['username'],
                    // Hash le password pour crypter les données
                    'password' => password_hash($_POST['myform']['password'], PASSWORD_DEFAULT)]);
            $_POST['myform']['user_id'] = $wuser['id'];

            $utilisateur = new WUsersManager();
            $utilisateur->insert($_POST['myform']);
            $this->redirectToRoute('home');

        }

        $this->show('page/inscription_b', ['erreurs' => $erreurs]);
        // Fin Validation et Filtrage

    } else {
      $this->show('page/inscription_b',['erreurs' => $erreurs]);
    }

  }

}
