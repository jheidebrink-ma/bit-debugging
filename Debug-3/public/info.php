<?php
$pageTitle = 'Info | Nieuws App';
$activePage = 'info';

require_once ROOT_PATH . 'includes/header.php';
?>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-8">
			<div class="card shadow-sm border-0">
				<div class="card-body p-4 p-lg-5">
					<h1 class="card-title mb-3">De info pagina</h1>
                    <p class="card-text">
                        Dit is mijn info pagina. <br>
                        Hier kan je informatie vinden over de website werkt. De maak gebruik van PHP, HTML, CSS en JavaScript. <br>
                        De site haalt nieuwsberichten op van de NOS via een RSS-feed en toont deze in een overzichtelijke lijst. <br>
                        Je kan op een nieuwsbericht klikken om meer details te zien.
                    </p>
					<a class="btn btn-outline-primary" href="index.php">Terug naar home</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require_once ROOT_PATH . 'includes/footer.php';
