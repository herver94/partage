<?php
    # Layout utilisé pour la vue
    $this->layout('layout', ['title' => 'Accueil', 'current' => 'Accueil']);
    //use Model\Shortcut;
?>
<?php $this->start('contenu') ?>

<?php echo 'Salut' ;
?>

//Afficher les membres





<?php $this->stop('contenu') ?>
