<header>
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <a href="<?= get_site_url(); ?>/" title="<?= $config['title']['brand_name']; ?>">
                    <img id="brand" src="<?= get_site_url(); ?>/assets/svg/logo.svg" alt="<?= $config['title']['brand_name']; ?>" class="object-fit-contain">
                </a>
            </div>
            <div class="col align-right  d-none d-lg-block">
                <ul class="social-menu list-unstyled align-right">
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
            <div class="col d-block d-lg-none">
                <a href="#hamburger-menu" data-role="hamburger-menu" data-action="open" title="Expand hidden navigation menu">
                    <span class="visually-hidden">Expand menu</span>
                    <icon>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                            <path d="M4,10 44,10"></path>
                            <path d="M4,24 44,24"></path>
                            <path d="M4,38 44,38"></path>
                        </svg>
                    </icon>
                </a>
            </div>
        </div>
    </div>
    <nav id="hamburger-menu" class="close">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="list-unstyled d-flex flex-column flex-lg-row justify-content-between">
                        <?php $pages = [
                            // 'file.php'       => ['Text', 'Title', 'Target' _blank = true]
                            'index.php'         => ['Home', 'Home', null],
                            'about-us.php'      => ['About Us', 'Learn more about us', null],
                            'what-we-do.php'    => ['Our Services', 'What we do', null],
                            'contact-us.php'    => ['Contact Us', 'Get in touch', null],

                            '404.php'           => ['404', '404 - Page Not Found', null],
                        ]; ?>

                        <?php foreach($pages as $file => $link) {
                            $text = $link[0];
                            $title = $link[1];
                            $target = $link[2];

                            if (preg_match('/\.\w+$/', $file)) {
                                //$href = preg_replace('/\.php$/', '', $file);
                                $href = $file;
                                $href = $config['url']['protocol'].$config['url']['domain'].'/'.$href;
                            } else {
                                if($target === null || $target === false) {
                                    $target = "_blank";
                                }
                                $href = filter_var($file, FILTER_VALIDATE_URL) ? $file : '#';
                            }

                            $current_page = false;
                            if($config['url']['page'] === $file) {
                                $current_page = true;
                            }

                            ?>
                            <li><a <?= ($current_page)? 'class="current-page"': ''; ?> <?= ($target)? 'target="'.$target.'"': ''; ?> href="<?php echo $href; ?>" title="<?= $title; ?>"><?= $text; ?></a></li>
                            <?php
                        } ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>