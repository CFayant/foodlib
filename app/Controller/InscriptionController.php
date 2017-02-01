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

      // Pseudo
      if( empty( $_POST['myform']['username']) || (strlen($_POST['myform']['username']) <5) || (strlen($_POST['myform']['username']) > 100) ) {

      $erreurs['username'] = 'Le champ pseudo doit obligatoirement comporter entre 5 et 50 caractères';

      }

      // Password
      if (empty($_POST['myform']['password']) || strlen($_POST['myform']['password']) > 50) {
        $erreurs['password'] = "Le champ mot de passe doit obligatoirement comporter moins de 50 caractères";
      }


      // Confirm password
      if ($_POST['myform']['passwordConfirm'] != $_POST['myform']['password']) {
        $erreurs['passwordConfirm'] = "Le mot de passe ne correspond pas";
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

      // Pseudo
      if( empty( $_POST['myform']['username']) || (strlen($_POST['myform']['username']) < 5) || (strlen($_POST['myform']['username']) > 50) ) {

          $erreurs['username'] = 'Le champ pseudo doit obligatoirement comporter entre 5 et 50 caractères';

      }

      // nom
      if( empty($_POST['myformi']['nom']) || (strlen($_POST['myformi']['nom']) < 5) || (strlen($_POST['myformi']['nom']) > 50) ) {

            $erreurs['nom'] = 'Le champ Nom doit obligatoirement comporter entre 5 et 50 caractères et est requis';
      }

      // prenom
      if( empty($_POST['myformi']['prenom']) || (strlen($_POST['myformi']['prenom']) < 5) || (strlen($_POST['myformi']['prenom']) > 50) ) {

          $erreurs['prenom'] = 'Le champ prénom doit obligatoirement comporter entre 5 et 50 caractères et est requis';
      }

      // adresse_donneur
      if( (strlen($_POST['myformi']['adresse_donneur']) <5) || (strlen($_POST['myformi']['adresse_donneur']) > 100)) {

        $erreurs['adresse_donneur'] = 'Le champ adresse doit comporter entre 5 et 100 caractères';
      }

      // Email
      if ( empty($_POST['myformi']['mail']) || strlen($_POST['myformi']['mail']) > 255 || !filter_var($_POST['myformi']['mail'], FILTER_VALIDATE_EMAIL)) {
        $erreurs['mail'] = 'Votre email n\'est pas valide';
        //print_r("Votre email n'est pas valide");

      }
      elseif ($manager->emailExists($_POST['myformi']['mail'])) {
        $erreurs['mail'] = 'Cet email existe déja';
        //print_r("Cet email existe déja");

      }

      // telephone
      if( (strlen($_POST['myformi']['telephone']) < 10) || (strlen($_POST['myformi']['telephone']) > 10)) {

        $erreurs['telephone'] = 'Le champ numéro de téléphone doit comporte 10 chiffres';
      }

      // Moyen d'acces
      if( (strlen($_POST['myformi']['acces']) < 20) || (strlen($_POST['myformi']['acces']) > 100)) {

        $erreurs['acces'] = 'Le champ moyen d\'acces doit comporter entre 20 et 100';
      }

      // Horaires d'acces
      if( (strlen($_POST['myformi']['horaires']) < 20) || (strlen($_POST['myformi']['horaires']) > 100)) {

        $erreurs['horaires'] = 'Le champ horaires d\'acces doit comporter entre 20 et 100';
      }

      // Password
      if (empty($_POST['myform']['password']) ||
        strlen($_POST['myform']['password']) > 300) {
        $erreurs['password'] = 'Champ mot de passe requis';
      }

      // Confirm password
      if ($_POST['myform']['passwordConfirm'] != $_POST['myform']['password']) {
        $erreurs['passwordConfirm'] = 'Le mot de passe ne correspond pas';
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
        $_POST['myformi']['type_donneur_id'] = 1;

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
