<body>

<section id="content">
	<h2 class="content_title">L'ensemble de nos projets.</h2>

	<!-- Partie provisoire pour générer une galerie "test" -->

	<?php for($i=0;$i<10;$i++): ?>
		<a class="element" href="#">
			<span class="title">Titre</span>
			<span class="desc">A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse. [...]	
			</span>
			<span class="bg"></span>
			<img  src="ressources/galerie_projets/projet<?php echo $i%3; ?>.jpg" alt="" />
		</a>
	<?php endfor; ?>
</section>