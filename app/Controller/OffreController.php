<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\TypeDateManager;
use \Manager\BorneManager;
use \Manager\DonneurManager;
use \Manager\DonManager;
use \W\Manager\UserManager;


class OffreController extends Controller
{

  public function creationDon()
  {
    $liste_borne_manager = new BorneManager();
    $liste_borne_manager->setTable('bornes');
    $liste_borne = $liste_borne_manager->findAll();

    $liste_date_manager =  new TypeDateManager();
    $liste_date_manager->setTable('typeDates');
    $liste_date = $liste_date_manager->findAll();

    $donneur_manager = new DonneurManager();
    $donneur = $donneur_manager->findDonneurByUserId($_SESSION['user']['id']);


    $erreurs = [];
    if ( isset($_POST['donner']) ) {

      // Validation et Filtrage [myform]

      // titre
      if( empty( $_POST['myform']['titre']) || (strlen($_POST['myform']['titre']) < 5) || (strlen($_POST['myform']['titre']) > 500) ) {

        $erreurs[] = 'Le champ titre doit obligatoirement comporter entre 5 et 50 caractères et est requis';

      }

      if ( isset( $_POST['myform']['adresse_retrait'] ) ){

        $choix = $_POST['myform']['adresse_retrait'];

        // borne_id
        if( empty($_POST['myform']['borne_id']) ) {


          if ($choix == "borne"){

            if( empty($_POST['myform']['borne_id']) ) {

              $erreurs[] = 'Veuillez sélectionner une borne';
            }
          }
        } elseif ($choix== "adresse du donneur"){

            if( empty($_POST['myformd']['adresse_donneur']) || (strlen($_POST['myformd']['adresse_donneur']) <5) || (strlen($_POST['myformd']['adresse_donneur']) > 100)) {

              $erreurs[] = 'Le champ adresse doit comporter entre 5 et 100 caractères et est requis';
            }
          }

        // telephone
        if( (strlen($_POST['myformd']['telephone'] <> 10) ) ) {
          if( (strlen($_POST['myformd']['telephone'] <> 10) ) ) {
            $erreurs[] = 'Le champ numéro de téléphone doit comporte 10 chiffres';
          }
        }
      }

        // image
      if (empty($_FILES['myform']['image']) ) {
        $erreurs[] = "Veuillez ajouter une photo";
      }

        // type_id
      if (empty($_POST['myform']['type_id']) ) {
        $erreurs[] = "Veuillez sélectionner le type de date de consommation";
      }

        // date_consommation
      if (empty($_POST['myform']['date_consommation']) ) {
        $erreurs[] = "Veuillez indiquer une date de consommation";
      }

        // Si $erreurs vide, Validation OK
      if ( empty($erreurs)) {

        // Envoie de données vers la table dons
        $_POST['myform']['donneur_id'] = $_SESSION['user']['id'];

        $don = new DonManager();
        $don->insert($_POST['myform']);

          // Ici il faut recuperer l'id du donneur avec $_SESSION
          // $donneur = new DonneurManager();
          // $donneur->update($_POST['myformd']);


        $this->redirectToRoute('home');
      }

      $this->show('page/creation_don', ['erreurs' => $erreurs, 'liste_borne' => $liste_borne, 'liste_date' => $liste_date, 'donneur' => $donneur]);
        // Fin Validation et Filtrage

    } else {
      $this->show('page/creation_don', ['erreurs' => $erreurs, 'liste_borne' => $liste_borne, 'liste_date' => $liste_date, 'donneur' => $donneur]);
    }
  }

  public function listeOffres()
  {
    $data_dons = new DonManager();
    $dons = $data_dons->findDonsDisponibles();

    $this->show('page/listeOffres', ['dons' => $dons]);
  }

  public function detailOffre($id)
  {
    $data_dons = new DonManager();
    $don = $data_dons->findDonneesDon($id);

    $this->show('page/detail_offre', ['don' => $don]);
  }

}
