        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 align-left">
                        <div class="row">
                            <div class="col">
                                <p><img id="footer-brand" src="<?= get_site_url(); ?>/assets/svg/logo.svg" alt="<?= $config['title']['brand_name']; ?>" class="object-fit-contain"></p>
                                <p>Company Name is a trading name of Example Ltd.</p>
                                <p>Unit X, Example Street, Example City, Example Region, EX1 2MP, Country. Registered in Example Country. Company Number 12345678. VAT Number EX123456789</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <ul class="social-menu list-unstyled">
                                    <?php foreach ($social as $platform => $details) {
                                        if (count($details) === 5) {
                                            list($icon, $href, $title, $prettyLink, $targetBlank) = $details;
                                            $target = $targetBlank ? '_blank' : '_self';
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
                    <div class="col-12 col-md-6 offset-md-2">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <h5>Site map</h5>
                                <ul class="list-unstyled d-flex flex-column">
                                    <li><a href="<?= get_page_url('/page-slug/'); ?>" title="PAGE_TITLE_TO_COMPLETE">Homepage</a></li>
                                    <li><a href="<?= get_page_url('/page-slug/'); ?>" title="PAGE_TITLE_TO_COMPLETE">Page Link</a></li>
                                    <li><a href="<?= get_page_url('/page-slug/'); ?>" title="PAGE_TITLE_TO_COMPLETE">Page Link</a></li>
                                    <li><a href="<?= get_page_url('/page-slug/'); ?>" title="PAGE_TITLE_TO_COMPLETE">Page Link</a></li>
                                    <li><a href="<?= get_page_url('/page-slug/'); ?>" title="PAGE_TITLE_TO_COMPLETE">Page Link</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6">
                                <h5>Legal</h5>
                                <ul class="list-unstyled d-flex flex-column">
                                    <li><a href="<?= get_page_url('/page-slug/'); ?>" title="Terms of Use">Terms of Use</a></li>
                                    <li><a href="<?= get_page_url('/page-slug/'); ?>" title="Privacy Policy">Privacy Policy</a></li>
                                    <li><a href="<?= get_page_url('/page-slug/'); ?>" title="Cookie Policy">Cookie Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">

                        <p class="copyright align-center">&copy; Copyright <?= date('Y'); ?> - <?= $config['title']['brand_name']; ?>. All rights reserved.</p>
                        <p class="credit align-center">Made possible by <a href="https://georgeberesford.co.uk/" title="George Beresford Design - Website Design and Development Specialist"><icon><?= file_get_contents(__DIR__ . '/../assets/svg/george-beresford-design.svg'); ?></icon> GB Design</a></p>

                    </div>
                </div>
            </div>
        </footer>

        <?php require_once(__DIR__.'/body-close.php'); ?>
    </body>
</html>