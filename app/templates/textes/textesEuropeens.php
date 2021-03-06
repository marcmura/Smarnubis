<?php $this->layout('layoutType', ['title' => 'Textes européens - SMARNUBIS', 'description' => 'Retrouvez ici la liste des informations concernant les textes européens.']) ?>

<?php $this->start('main_content') ?>
	

<section>
	<h1>Textes européens</h1>

	<?php
		foreach ($articles as $article) : ?>

			<button class="accordion"><h2><?= $this->e($article['titre']) ?></h2></button>
				<div class="panel">
  					<p><?= $this->e($article['contenu']) ?></p>
  					<a href="<?= $this->assetUrl('uploads/'.$this->e($article['fichier']).''); ?>" target="_blank">Télécharger le PDF</a>
				</div>
			
		<?php endforeach ?>

	</section>
	
<?php $this->stop('main_content') ?>
