<?php
namespace Model\Db;
use ORM;



class DBFactory
{

    public static function start(){
      // Récupération des Données de l'app
      $app = getApp();
      //initialisation de Idiorm
      ORM::configure('mysql:host='.$app->getConfig('db_host').';dbname='.$app->getConfig('db_name'));
      ORM::configure('username', $app->getConfig('db_user'));
      ORM::configure('password', $app->getConfig('db_pass'));
      // Cette configuration n'est necessaire que si les clés primaires sont différentes de 'id'
      ORM::configure('id_column_overrides', array(
        'article' => 'IDARTICLE',
        'auteur' => 'IDAUTEUR',
        'categorie' => 'IDCATEGORIE',
        'tags' => 'IDTAGS',
        'view_articles'=> 'IDARTICLE'
      ));
    }
}
