<?php
namespace Model;
use ORM;



class DBFactory
{

    public static function start(){
      // Récupération des Données de l'app
      $app = getApp();

      //initialisation de Idiorm
      ORM::configure('driver_options', array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

      ORM::configure('mysql:host='.$app->getConfig('db_host').';dbname='.$app->getConfig('db_name'));
      ORM::configure('username', $app->getConfig('db_user'));

      ORM::configure('password', $app->getConfig('db_pass'));
      // Cette configuration n'est necessaire que si les clés primaires sont différentes de 'id'
      ORM::configure('id_column_overrides', array(
        'categories' => 'IDCATEGORIE',
        'commentaires' => 'IDCOMMENTAIRE',
        'partages' => 'IDPARTAGE',
        'users' => 'IDUSER',
        'view_partage' => 'IDPARTAGE',
        'modpartages' => 'MODIDPARTAGE'
      ));

    }

}
