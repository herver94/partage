<?php $this->layout('layout', ['title' => 'Perdu ?']) ?>

<?php $this->start('main_content'); ?>
<h1>404. Perdu ?</h1>
<img src="<?= $this->assetUrl('img/perdu.jpg'); ?>"
<?php $this->stop('main_content'); ?>
