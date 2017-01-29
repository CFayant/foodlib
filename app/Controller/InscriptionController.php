<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \Manager\WuserManager;



class InscriptionController extends Controller
{

  public function inscription()
  {
    $this->show('page/inscription');
  }


  public function inscription_b()
  {

    $erreurs = [];
    if ( isset($_POST['myform']['inscrire_b']) ) {

      $manager = new WuserManager();

      // Validation et Filtrage [myform]

      // Nom
      if( empty( $_POST['myform']['username']) ||
       (strlen($_POST['myform']['username']) <3) ||
       (strlen($_POST['myform']['username']) > 100) ) {

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

            $utilisateur = new WuserManager();
            $utilisateur->insert($_POST['myform']);

            $this->redirectToRoute('home');

      }

      $this->show('page/inscription_b', ['erreurs' => $erreurs]);
      // Fin Validation et Filtrage

    } else {
      $this->show('page/inscription_b',['erreurs' => $erreurs]);
    }

  }


  public function inscription_d()
  {

    $erreurs = [];
    if ( isset($_POST['sign-up']) ) {

      $manager = new WuserManager();

      // Validation et Filtrage [myform_i]

      // Nom
      if( empty( $_POST['myform']['username']) ||
       (strlen($_POST['myform']['username']) < 5) ||
       (strlen($_POST['myform']['username']) > 50) ) {

          $erreurs[] = 'Le champ pseudo doit obligatoirement comporter entre 5 et 50 caractères';

        }

        // last_name
        if( empty($_POST['myform_i']['last_name']) ||
          (strlen($_POST['myform_i']['last_name']) < 5) ||
            (strlen($_POST['myform_i']['last_name']) > 50) ) {

            $erreurs[] = 'Le champ Nom doit obligatoirement comporter entre 5 et 50 caractères et est requis';
        }


        // first_name
        if( empty($_POST['myform_i']['first_name']) ||
          (strlen($_POST['myform_i']['first_name']) < 5) ||
            (strlen($_POST['myform_i']['first_name']) > 50) ) {

            $erreurs[] = 'Le champ prénom doit obligatoirement comporter entre 5 et 50 caractères et est requis';
        }


        // adress
        if( (strlen($_POST['myform_i']['adress']) <5) ||
          (strlen($_POST['myform_i']['adress']) > 100)) {

          $erreurs[] = 'Le champ adresse doit comporter entre 5 et 100 caractères';
        }


        // phone
        if( !(strlen($_POST['myform_i']['phone'] == 10) ) ) {

          $erreurs[] = 'Le champ numéro de téléphone doit comporte 10 chiffres';
        }

        // Validation et Filtrage [myform_i]

        // Email
        if (empty($_POST['myform']['e_mail']) ||
           strlen($_POST['myform']['e_mail']) > 255 ||
           !filter_var($_POST['myform']['e_mail'], FILTER_VALIDATE_EMAIL)) {

          $erreurs[] = "Votre email n'est pas valide";

        }
        elseif ($manager->emailExists($_POST['myform_i']['e_mail'])) {

          $erreurs[] = "Cet email existe déja";

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

          $wuser = $manager->insert(['email' => $_POST['myform_i']['email'],
          // Hash le password pour crypter les données
          'password' => password_hash($_POST['myform_i']['password'], PASSWORD_DEFAULT)]);
          $_POST['myform_i']['user_id'] = $wuser['id'];

          $utilisateur = new UtilisateurManager();
          $utilisateur->insert($_POST['myform_i']);
          $this->redirectToRoute('login');

        }

        $this->show('user/register', ['erreurs' => $erreurs]);
        // Fin Validation et Filtrage

    } else {
    $this->show('user/register',['erreurs' => $erreurs]);
    }

  }
