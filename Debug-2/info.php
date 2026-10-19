<?php
$pageTitle = 'Info | Nieuws App';
$activePage = 'info';

require_once 'includes/header.php';
?>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-8">
			<div class="card shadow-sm border-0">
				<div class="card-body p-4 p-lg-5">
					<h1 class="card-title mb-3">De problemen</h1>
                    <p class="card-text">
                        Op deze site vind je een aantal dingen die niet goed werken. <br>
                        <ul>
                            <li>De berichten worden niet weergegeven, ik zie alleen witte blokken.</li>
                            <li>Er moeten 5 verschillende berichten worden weergegeven, maar er wordt er maar 1 weergegeven.</li>
                            <li>De titels van de berichten zijn leeg, ik zie de teksten niet.</li>
                        </ul>
                    </p>
					<a class="btn btn-outline-primary" href="index.php">Terug naar home</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require_once 'includes/footer.php';
