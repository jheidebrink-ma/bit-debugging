<?php
error_reporting(E_ALL);
ini_set("display_errors", 0);

$pageTitle = $pageTitle ?? 'Nieuwsberichten';
$activePage = $activePage ?? 'home';
?><!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>
<body class="bg-body-tertiary">
<nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm">
	<div class="container">
		<a class="navbar-brand" href="index.php">Nieuws App</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavigation" aria-controls="mainNavigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="mainNavigation">
			<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link<?= $activePage === 'home' ? ' active' : ''; ?>" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link<?= $activePage === 'informatie' ? ' active' : ''; ?>" href="info.php">Info</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<main class="py-5">