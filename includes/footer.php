        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <h5>Heading</h5>
                                <ul class="list-unstyled d-flex flex-column">
                                    <li><a href="" title="">Link</a></li>
                                    <li><a href="" title="">Link</a></li>
                                    <li><a href="" title="">Link</a></li>
                                    <li><a href="" title="">Link</a></li>
                                    <li><a href="" title="">Link</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-4">
                                <h5>Heading</h5>
                                <ul class="list-unstyled d-flex flex-column">
                                    <li><a href="" title="">Link</a></li>
                                    <li><a href="" title="">Link</a></li>
                                    <li><a href="" title="">Link</a></li>
                                    <li><a href="" title="">Link</a></li>
                                    <li><a href="" title="">Link</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-4">
                                <h5>Heading</h5>
                                <ul class="list-unstyled d-flex flex-column">
                                    <li><a href="" title="">Link</a></li>
                                    <li><a href="" title="">Link</a></li>
                                    <li><a href="" title="">Link</a></li>
                                    <li><a href="" title="">Link</a></li>
                                    <li><a href="" title="">Link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 align-right">
                        <div class="row">
                            <div class="col">
                                <p><img id="footer-brand" src="assets/svg/logo.svg" alt="<?= $config['title']['brand_name']; ?>" class="object-fit-contain"></p>
                                <p>Company Name is a trading name of Example Ltd.</p>
                                <p>Unit X, Example Street, Example City, Example Region, EX1 2MP, Country. Registered in Example Country. Company Number 12345678. VAT Number EX123456789</p>
                                <p class="copyright">&copy; Copyright <?= date('Y'); ?>. All rights (and lefts) reserved.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <ul class="social-menu list-unstyled align-right">
                                    <?php foreach($social as $icon => $link) {
                                        // Check $icon is an SVG file with .svg extension
                                        if (preg_match('/\.svg$/', $icon)) {
                                            $href = $link[0];
                                            $title = $link[1];
                                            $target = isset($link[2]) && $link[2] ? '_blank' : '_self';
                                            ?>
                                            <li>
                                                <a href="<?= $href; ?>" title="<?= $title; ?>" target="<?= $target; ?>">
                                                    <icon class="solid-fill"><?= file_get_contents(__DIR__.'/../assets/svg/icons/social/'.$icon); ?></icon>
                                                </a>
                                            </li>
                                            <?php
                                        }
                                    } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <?php require_once(__DIR__.'/body-close.php'); ?>
    </body>
</html>