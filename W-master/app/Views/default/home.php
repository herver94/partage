<?php $this->layout('layout', ['title' => 'tests']) ?>

<?php $this->start('contenu') ?>
	<h2>Let's code.</h2>
	<p>Vous avez atteint la page d'accueil. Bravo.</p>
	<p>Et maintenant, RTFM dans <strong><a href="../docs/tuto/" title="Documentation de W">docs/tuto</a></strong>.</p>
	<section class="spotlight-thumbs">
        		<div class="row">
        		<?php foreach($partages as $partage) : ?>
        			<div class="col-md-4 col-sm-4 col-xs-12">
        				<div class="spotlight-item-thumb">
        					<div class="spotlight-item-thumb-img">
        						
        					</div>
        					<h3><a href=""><?= $partage->TITREPARTAGE; ?></a></h3>
        					<div class="meta-post">
        						<a href="#">
        							<?= $partage->PRENOMUSER; ?> <?= $partage->NOMUSER; ?>
        						</a>
        						<em></em>
        						<span>
        							<?= $partage->DATEPARTAGE; ?>
        						</span>
        					</div>
        				</div>
        			</div>
        		<?php endforeach; ?>	
        		</div>
        	</section>

<?php $this->stop('contenu') ?>
