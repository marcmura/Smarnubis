<?php $this->layout('layoutType', ['title' => 'R.T.T / C.E.T. - SMARNUBIS', 'description' => 'Retrouvez ici les informations concernant les rtt et les comptes épargne-temps.'])?>

<?php $this->start('main_content')?>
	<h1> Textes RTT / CET</h1>

	<section>

		<h2>Textes CET DE 2008</h2>
		
		<p><a href="<?= $this->assetUrl('pdf/decret-cet-2008-455-du-14-mai-2008.pdf') ?>"target="_blank">Décret n° 2008-455 du 14 mai 2008</a> relatif aux modalités d'indemnisation des jours accumulés sur le compte épargne-temps.</p>

		<p> <a href="<?= $this->assetUrl('pdf/arrete-cet-14-mai-2008.pdf') ?>"target="_blank">  Arrêté du 14 mai 2008</a> fixant le montant de l'indemnisation des jours accumulés sur leur compte épargne-temps par les personnels médicaux;
		</p>

		<h2>Textes règlementaires et rapports</h2>

		<p><a href="<?= $this->assetUrl('pdf/CadrageARTT-Final-22-10-01.pdf') ?>"target="_blank">Cadrage National</a>
		22 Octobre 2001</p>
		<p><a href="<?= $this->assetUrl('pdf/fiches-techniques-ARTT.pdf') ?>"target="_blank">Fiches Techniques du ministère sur l’ARTT</a>
		Novembre 2001</p>


	</section>
<?php $this->stop('main_content')?>
