<?php
    $config['title']['page_title'] = "404 - Page Not Found";
    require_once(__DIR__.'/includes/@site.config.php');
?>
<?php require __DIR__.'/includes/header.php'; ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>404 - Page Not Found</h2>
                <p class="lead">Sorry, the page you are looking for does not exist. It might have been moved or deleted.</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p><a href="<?= $config['url']['protocol'].$config['url']['domain']; ?>" class="btn btn-primary">Return Home</a></p>
            </div>
        </div>
    </div>
</section>
<?php require __DIR__.'/includes/footer.php'; ?>