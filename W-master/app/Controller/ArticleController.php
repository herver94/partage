<?php
namespace Controller;

use W\Controller\Controller;
use Model\Db\DBFactory;
use Model\Shortcut;

class ArticleController extends Controller
{
    /**
     * Affiche et Ajoute un Article dans la Base de Données
     */
    public function add() {
        
        # Connexion à la BDD
        DBFactory::start();
        
        # Vérification de $_POST
        if(!empty($_POST)) :
            
            // -- Récupération des Données POST
            extract($_POST);
        
            // -- Récupération de l'image
            $handle = new \upload($_FILES['PHOTOPARTAGE']);
            if ($handle->uploaded) {
                $handle->file_new_name_body   = Shortcut::generateSlug($TITREPARTAGE);
                $handle->image_resize         = true;
                $handle->image_x              = 1000;
                $handle->image_y              = 550;
                $handle->image_ratio_crop      = true;
                $handle->process('assets/img/');
                if ($handle->processed) {
                    $PHOTOPARTAGE = $handle->file_dst_name;
                    $handle->clean();
                } else {
                    $PHOTOPARTAGE = 'default.jpg';
                    echo 'error : ' . $handle->error;
                }
            }
            
            // -- Ajout en BDD
            $partages = \ORM::for_table('partages')->create();

            $partages->IDUSER                = $IDUSER;
            $partages->IDCATEGORIE           = $IDCATEGORIE;
            $partages->TITREPARTAGE          = $TITREPARTAGE;
            $partages->CONTENUPARTAGE        = $CONTENUPARTAGE;
            $partages->PHOTOPARTAGE          = $PHOTOPARTAGE;
            $partages->DATEPARTAGE           = $DATEPARTAGE;
            
            // -- Insertion
            $partages->save();
            
            // -- Redirection
            $this->redirectToRoute('default_article', ['id' => $article->IDPARTAGE, 'slug' => Shortcut::generateSlug($TITREPARTAGE)]);  
        
        endif;
        
        # Récupérer la Liste des Auteurs
        $user = \ORM::for_table('users')->find_result_set();
        
        # Récupérer les Catégories
        $categories = \ORM::for_table('categorie')->find_result_set();
        
        $this->show('article/add', ['users' => $users, 'categories' => $categories]);
    }
}


















