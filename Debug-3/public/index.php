<?php
require_once '../config.php';

$pageTitle = 'Home | Nieuws App';
$activePage = 'home';

require_once ROOT_PATH . 'includes/MessageController.php';

$messageController = new MessageController();
$messages = $messageController->getLatestMessages();

require_once ROOT_PATH . 'includes/header.php';
?>
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-8 text-center">
                <h1 class="display-5 fw-bold">
                    Laatste 5 nieuwsberichten
                </h1>
                <p class="lead text-secondary mb-0">
                    Hier vind je de laatste nieuwsberichten van vandaag.
                </p>
            </div>
        </div>

        <div class="row g-4">
            <?php for ($i = 0; $i < 5; $i++): ?>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body d-flex flex-column">
                            <h2 class="card-title h5 rainbow-box">
                                <?= htmlspecialchars($message['title'], ENT_QUOTES, 'UTF-8'); ?>
                            </h2>

                            <?php if ($message['publishedAt'] !== ''): ?>
                                <p class="card-subtitle mb-3 text-body-secondary small">
                                    <?= htmlspecialchars($message['publishedAt'], ENT_QUOTES, 'UTF-8'); ?>
                                </p>
                            <?php endif; ?>

                            <p class="card-text flex-grow-1">
                                <?= htmlspecialchars($message['description'], ENT_QUOTES, 'UTF-8'); ?>
                            </p>

                            <a class="btn btn-primary mt-3 rainbow-box"
                               href="<?= htmlspecialchars($message['link'], ENT_QUOTES, 'UTF-8'); ?>"
                               target="_blank">
                                Lees meer
                            </a>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>

<?php require_once ROOT_PATH . 'includes/footer.php';