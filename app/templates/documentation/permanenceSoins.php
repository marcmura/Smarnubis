<?php $this->layout('layoutType', ['title' => 'Permanence des soins - SMARNUBIS', 'description' => 'Retrouvez ici les textes rélementaires ainsi que les rapports liés à la permanence des soins.'])?>

<?php $this->start('main_content')?>

	<h1>Permanences des soins</h1>

	<section>

		<h2>Textes réglementaires et rapports</h2>
		<ul>
			<li><a href="<?= $this->assetUrl('pdf/contin-soins-6-7-06.pdf') ?>"target="_blank">Arrêté relatif à l’indemnisation des gardes et astreintes</a>
			6 juillet 2006</li>
			<li><a href="<?= $this->assetUrl('pdf/Lettre OBERLIS 2005.pdf') ?>"target="_blank">Lettre de la DHOS relative à l'indemnisation des astreintes et déplacements</a>
			15/11/2005</li>
			<li><a href="<?= $this->assetUrl('pdf/Conseil-d-Etat-SNPHAR.pdf') ?>"target="_blank">Arrêt du Conseil d’ Etat statuant sur certains problèmes d’application de l’arrêté sur la permanence des soins</a>
			4 février 2005</li>
			<li><a href="<?= $this->assetUrl('pdf/jo-14-7-05-permanences des soins.pdf') ?>"target="_blank">Modification de l’ arrêté du 30 avril 2003 sur la permanence des soins</a>
			14 juillet 2005</li>
		</ul>
		<h2>Permanence des soins / Relations ville-hopital</h2>
		<ul>
			<li><a href="<?= $this->assetUrl('pdf/Communique-du-18-4-05.pdf') ?>"target="_blank">Communiqué de Presse CHG après la signature du décret Permanence des soins en ville UNCAM-Médecins Libéraux</a>
			18 avril 2005</li>
		</ul>
	</section>

<?php $this->stop('main_content')?>
