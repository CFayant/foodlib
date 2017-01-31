<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \Manager\DonneurManager;
use \W\Security\AuthentificationManager;

class InscriptionController extends Controller
{

  public function inscription() {
    $this->show('page/inscription');
  }


  public function inscription_b() {

    $erreurs = [];
    if ( isset($_POST['inscrire_b']) ) {

      $manager = new UserManager();

      // Validation et Filtrage [myform]

      // Nom
      if( empty( $_POST['myform']['username']) || (strlen($_POST['myform']['username']) <3) || (strlen($_POST['myform']['username']) > 100) ) {

      $erreurs[] = 'Le champ pseudo doit obligatoirement comporter entre 3 et 50 caractères';

      }

      // Password
      if (empty($_POST['myform']['password']) || strlen($_POST['myform']['password']) > 50) {
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
          // $_POST['myform']['user_id'] = $wuser['id'];

      $auth = new AuthentificationManager();
      $userManager = new UserManager();

      if($auth->isValidLoginInfo($_POST['myform']['username'], $_POST['myform']['password'])) {
        $user = $userManager->getUserByUsernameOrEmail($_POST['myform']['username']);
        $auth->logUserIn($user);
        $this->redirectToRoute('home');
      }

    }

      $this->show('page/inscription_b', ['erreurs' => $erreurs]);

    } else {
      $this->show('page/inscription_b',['erreurs' => $erreurs]);
    }
  }

  public function inscription_d() {

    $erreurs = [];
    if ( isset($_POST['inscrire_d']) ) {

      $manager = new UserManager();

      // Nom
      if( empty( $_POST['myform']['username']) || (strlen($_POST['myform']['username']) < 5) || (strlen($_POST['myform']['username']) > 50) ) {

          $erreurs[] = 'Le champ pseudo doit obligatoirement comporter entre 5 et 50 caractères';

      }

      // last_name
      if( empty($_POST['myformi']['last_name']) || (strlen($_POST['myformi']['last_name']) < 5) || (strlen($_POST['myformi']['last_name']) > 50) ) {

            $erreurs[] = 'Le champ Nom doit obligatoirement comporter entre 5 et 50 caractères et est requis';
      }

      // first_name
      if( empty($_POST['myformi']['first_name']) || (strlen($_POST['myformi']['first_name']) < 5) || (strlen($_POST['myformi']['first_name']) > 50) ) {

          $erreurs[] = 'Le champ prénom doit obligatoirement comporter entre 5 et 50 caractères et est requis';
      }

      // adresse_donneur
      if( (strlen($_POST['myformi']['adresse_donneur']) <5) || (strlen($_POST['myformi']['adresse_donneur']) > 100)) {

        $erreurs[] = 'Le champ adresse doit comporter entre 5 et 100 caractères';
      }


        // telephone
        if( (strlen($_POST['myformi']['telephone']) < 10) || (strlen($_POST['myformi']['telephone']) > 10)) {

          $erreurs[] = 'Le champ numéro de téléphone doit comporte 10 chiffres';
        }

        // Email
        if ( empty($_POST['myformi']['email']) || strlen($_POST['myformi']['email']) > 255 || !filter_var($_POST['myformi']['email'], FILTER_VALIDATE_EMAIL)) {

          print_r("Votre email n'est pas valide");

        }
        elseif ($manager->emailExists($_POST['myformi']['email'])) {

          print_r("Cet email existe déja");

        }

      // Password
      if (empty($_POST['myform']['password']) ||
        strlen($_POST['myform']['password']) > 300) {
        $erreurs[] = "Champ mot de passe requis";
      }

      // Confirm password
      if ($_POST['myform']['passwordConfirm'] != $_POST['myform']['password']) {
        $erreurs[] = "Le mot de passe ne correspond pas";
      }

      // Si $erreurs vide, Validation OK
     if ( empty($erreurs)) {

        // Envoie de données vers la table Wusers
        $wuser = $manager->insert(['username' => $_POST['myform']['username'],
        // Hash le password pour crypter les données
        'password' => password_hash($_POST['myform']['password'], PASSWORD_DEFAULT)]);
        $_POST['myformi']['wuser_id'] = $wuser['id'];


        // Envoie de données vers la table donneurs
        $donneurs = new DonneurManager();
        $donneurs->insert($_POST['myformi']);

        $auth = new AuthentificationManager();
        $userManager = new UserManager();

      if($auth->isValidLoginInfo($_POST['myform']['username'], $_POST['myform']['password'])) {
        $user = $userManager->getUserByUsernameOrEmail($_POST['myform']['username']);
        $auth->logUserIn($user);
        $this->redirectToRoute('home');
      }

      }
        $this->show('page/inscription_d', ['erreurs' => $erreurs]);

    } else {

      $this->show('page/inscription_d', ['erreurs' => $erreurs]);
    }
  }

}
