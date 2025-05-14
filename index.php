<?php
    // $config['title']['page_title'] = "Custom page title";
    require_once(__DIR__.'/includes/@site.config.php');
?>
<?php require __DIR__.'/includes/header.php'; ?>
<section class="hero hero-lg">
    <div class="background">
        <?php /* <video class="object-fit-cover w-100" poster="<?= get_site_url(); ?>/assets/video/1280x720-hero-video--first-frame.jpg" muted loop playsinline autoplay disablepictureinpicture disableremoteplayback nodownload>
            <source src="<?= get_site_url(); ?>/assets/video/1280x720-hero-video.webm" type='video/webm; codec="vp8, vorbis"'>
            <source src="<?= get_site_url(); ?>/assets/video/1280x720-hero-video--H264.mp4" type='video/mp4; codec="h.264"'> // Must ensure the video is encoded with H.264 codec for safari iOS autoplay
            <!-- Your browser does not support the video tag. -->
        </video> */ ?>
        
        <img class="object-fit-cover w-100" src="<?= get_site_url(); ?>/assets/img/hero/hero-image.jpg" alt="ALT_TEXT_TO_COMPLETE" />

    </div>
    <div class="container h-100 align-content-center">
        <div class="row">
            <div class="col">
                <h1>A modern boilerplate template built with PHP, JavaScript, and Bootstrap 5 for rapid web development.</h1>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="<?= get_page_url('/page-slug/'); ?>" title="PAGE_TITLE_TO_COMPLETE" class="btn btn-default btn-lg btn-pill">Button</a>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="waypoint" id="about"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>About</h2>
            </div>
        </div>
        <div class="row gy-4">
            <div class="col-12 col-md-6">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere illo cum eligendi a nisi necessitatibus quia temporibus dignissimos quisquam, quam soluta minima suscipit repellendus corrupti odit adipisci blanditiis laudantium unde?</p>
            </div>
            <div class="col-12 col-md-6">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere illo cum eligendi a nisi necessitatibus quia temporibus dignissimos quisquam, quam soluta minima suscipit repellendus corrupti odit adipisci blanditiis laudantium unde?</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="<?= get_page_url('/page-slug/'); ?>" title="PAGE_TITLE_TO_COMPLETE" class="btn btn-primary btn-pill">Button</a>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="waypoint" id="timeline"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Timeline</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="timeline d-flex flex-column flex-lg-row gap-0">
                    <div class="datapoint">
                        <div class="data">
                            <div class="h4">Step 1</div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae ratione laudantium eum quidem non odit, minus nulla itaque repellat aut doloremque, optio modi cum excepturi doloribus debitis iusto alias esse.</p>
                        </div>                        
                    </div>
                    <div class="datapoint">
                        <div class="data">
                            <div class="h4">Step 2</div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae ratione laudantium eum quidem non odit, minus nulla itaque repellat aut doloremque, optio modi cum excepturi doloribus debitis iusto alias esse.</p>
                        </div>                        
                    </div>
                    <div class="datapoint">
                        <div class="data">
                            <div class="h4">Step 3</div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae ratione laudantium eum quidem non odit, minus nulla itaque repellat aut doloremque, optio modi cum excepturi doloribus debitis iusto alias esse.</p>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="<?= get_page_url('/page-slug/'); ?>" title="PAGE_TITLE_TO_COMPLETE" class="btn btn-primary btn-pill">Button</a>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="waypoint" id="icons"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Icons</h2>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex d-column d-row-md flex-wrap gap-0">
                    <div class="stat">
                        <icon class="h1">
                            <?= file_get_contents(__DIR__.'/assets/svg/icons/star.svg'); ?>
                        </icon>
                        <div class="h4">Feature</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="stat">
                        <icon class="h1">
                            <?= file_get_contents(__DIR__.'/assets/svg/icons/star.svg'); ?>
                        </icon>
                        <div class="h4">Feature</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="stat">
                        <icon class="h1">
                            <?= file_get_contents(__DIR__.'/assets/svg/icons/star.svg'); ?>
                        </icon>
                        <div class="h4">Feature</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="stat">
                        <icon class="h1">
                            <?= file_get_contents(__DIR__.'/assets/svg/icons/star.svg'); ?>
                        </icon>
                        <div class="h4">Feature</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="stat">
                        <icon class="h1">
                            <?= file_get_contents(__DIR__.'/assets/svg/icons/star.svg'); ?>
                        </icon>
                        <div class="h4">Feature</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="<?= get_page_url('/page-slug/'); ?>" title="PAGE_TITLE_TO_COMPLETE" class="btn btn-primary btn-pill">Button</a>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="waypoint" id="cards"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Cards</h2>
            </div>
        </div>
        <div class="row gy-4">
            <div class="col col-12 col-lg-4">
                <div class="card h-100">
                    <div class="card-header align-content-end">
                        <div class="background">
                            <img class="object-fit-cover w-100" src="<?= get_site_url(); ?>/assets/img/cards/card-header.jpg" alt="ALT_TEXT_TO_COMPLETE">
                        </div>
                    </div>
                    <div class="card-body flex-fill">
                        <div class="card-content flex-fill">
                            <h3>Card Title</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis obcaecati hic eaque facilis, labore aperiam blanditiis animi dolorem placeat ipsum voluptas quisquam temporibus reiciendis iusto veniam delectus ullam? Veritatis, maxime?</p>
                        </div>
                        <div class="card-footer">
                            <a href="<?= get_page_url("/page-slug/"); ?> " class="btn btn-primary" title="PAGE_TITLE_TO_COMPLETE">Button</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-lg-4">
                <div class="card h-100">
                    <div class="card-header align-content-end">
                        <div class="background">
                            <img class="object-fit-cover w-100" src="<?= get_site_url(); ?>/assets/img/cards/card-header.jpg" alt="ALT_TEXT_TO_COMPLETE">
                        </div>
                    </div>
                    <div class="card-body flex-fill">
                        <div class="card-content flex-fill">
                            <h3>Card Title</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis obcaecati hic eaque facilis, labore aperiam blanditiis animi dolorem placeat ipsum voluptas quisquam temporibus reiciendis iusto veniam delectus ullam? Veritatis, maxime?</p>
                        </div>
                        <div class="card-footer">
                            <a href="<?= get_page_url("/page-slug/"); ?> " class="btn btn-primary" title="PAGE_TITLE_TO_COMPLETE">Button</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-lg-4">
                <div class="card h-100">
                    <div class="card-header align-content-end">
                        <div class="background">
                            <img class="object-fit-cover w-100" src="<?= get_site_url(); ?>/assets/img/cards/card-header.jpg" alt="ALT_TEXT_TO_COMPLETE">
                        </div>
                    </div>
                    <div class="card-body flex-fill">
                        <div class="card-content flex-fill">
                            <h3>Card Title</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis obcaecati hic eaque facilis, labore aperiam blanditiis animi dolorem placeat ipsum voluptas quisquam temporibus reiciendis iusto veniam delectus ullam? Veritatis, maxime?</p>
                        </div>
                        <div class="card-footer">
                            <a href="<?= get_page_url("/page-slug/"); ?> " class="btn btn-primary" title="PAGE_TITLE_TO_COMPLETE">Button</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus ipsum eius, aspernatur laboriosam fuga labore eveniet repellendus soluta ipsam neque expedita eligendi debitis inventore quam veniam natus in distinctio aperiam.</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="<?= get_page_url('/page-slug/'); ?>" title="PAGE_TITLE_TO_COMPLETE" class="btn btn-primary btn-pill">Button</a>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="waypoint" id="logos"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Logos</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php
                    $brands = array(
                        'logo.svg' => ['GB Design', 'https://georgeberesford.co.uk', '_blank'],
                        'logo.svg' => ['GB Design', 'https://georgeberesford.co.uk', '_blank'],
                        'logo.svg' => ['GB Design', 'https://georgeberesford.co.uk', '_blank'],
                        'logo.svg' => ['GB Design', 'https://georgeberesford.co.uk', '_blank'],
                        'logo.svg' => ['GB Design', 'https://georgeberesford.co.uk', '_blank'],
                        'logo.svg' => ['GB Design', 'https://georgeberesford.co.uk', '_blank'],
                    );
                    $path = __DIR__.'/assets/svg/';
                ?>
                <div class="row g-4">
                    <?php foreach($brands as $file => $meta):
                        $brand_name = $meta[0];
                        $brand_url = $meta[1];
                        $target = $meta[2];
                        
                        if (pathinfo($file, PATHINFO_EXTENSION) !== 'svg') {
                            continue; // Skip files that don't end with .svg
                        }
                        ?>
                        <div class="col-6 col-xs-4 col-sm-4 col-md-4 col-lg-2">
                            <a href="<?= $brand_url; ?>" title="<?= $brand_name; ?>" target="<?= $target; ?>">
                                <logo>
                                    <?= file_get_contents($path.$file); ?>
                                    <span class="visually-hidden"><?= $meta[0]; ?></span>
                                </logo>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit illum minima sunt debitis, aut numquam itaque voluptatibus doloremque, necessitatibus magnam nihil fuga totam, modi ullam voluptatem. Obcaecati dignissimos quidem magnam?</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="<?= get_page_url('/page-slug/'); ?>" title="PAGE_TITLE_TO_COMPLETE" class="btn btn-primary btn-pill">Button</a>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="waypoint" id="testimonials"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Quotes</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row gy-4">
                    <div class="col col-12 col-lg-4">
                        <div class="card h-100">
                            <div class="card-body flex-fill">
                                <blockquote class="blockquote h-100">
                                    <p class="h4">
                                        <q>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia asperiores veritatis suscipit ab culpa! Atque eum est doloremque assumenda provident molestiae beatae dolorem alias magni, porro blanditiis possimus modi nostrum.</q>
                                    </p>
                                    <cite>Name Surname, <em>Title,</em> <strong>Company</strong></cite>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-lg-4">
                        <div class="card h-100">
                            <div class="card-body flex-fill">
                                <blockquote class="blockquote h-100">
                                    <p class="h4">
                                        <q>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia asperiores veritatis suscipit ab culpa! Atque eum est doloremque assumenda provident molestiae beatae dolorem alias magni, porro blanditiis possimus modi nostrum.</q>
                                    </p>
                                    <cite>Name Surname, <em>Title,</em> <strong>Company</strong></cite>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-lg-4">
                        <div class="card h-100">
                            <div class="card-body flex-fill">
                                <blockquote class="blockquote h-100">
                                    <p class="h4">
                                        <q>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia asperiores veritatis suscipit ab culpa! Atque eum est doloremque assumenda provident molestiae beatae dolorem alias magni, porro blanditiis possimus modi nostrum.</q>
                                    </p>
                                    <cite>Name Surname, <em>Title,</em> <strong>Company</strong></cite>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="call-to-action align-content-center">
    <div class="waypoint" id="call-to-action"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Call to Action: 100%</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt temporibus quia, similique voluptas eveniet obcaecati tempora itaque impedit. Sint, delectus minima? Cupiditate in sed perspiciatis esse delectus corporis iste vitae!</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="d-flex flex-row gap-4 flex-wrap justify-content-center">
                    
                    <a href="<?= get_page_url('/page-slug/'); ?>" title="PAGE_TITLE_TO_COMPLETE" class="btn btn-default btn-lg btn-pill">Button</a>

                    <a href="<?= get_page_url('/page-slug/'); ?>" title="PAGE_TITLE_TO_COMPLETE" class="btn btn-default btn-lg btn-pill">Button</a>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="call-to-action align-content-center">
    <div class="waypoint" id="split-call-to-action"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Call to Action: 50% Split</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-5">
                <div class="h-100 align-center">
                    <div class="row">
                        <div class="col">
                            <h3>Option 1</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate mollitia dicta ea esse placeat numquam magnam, laborum ad id, deleniti, non velit aperiam architecto rem doloribus quae nesciunt sequi nemo.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex flex-row gap-4 flex-wrap justify-content-center">
                                <a href="<?= get_page_url('/page-slug/'); ?>" title="PAGE_TITLE_TO_COMPLETE" class="btn btn-default btn-lg btn-pill">Button</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-2">
                <div class="or"><i>or</i></div>
            </div>
            <div class="col-12 col-lg-5">
                <div class="h-100 align-center">
                    <div class="row">
                        <div class="col">
                            <h3>Option 2</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet inventore atque vel veniam provident molestias aliquam quaerat accusamus voluptatem, quae beatae laudantium quibusdam quidem pariatur ducimus nulla velit perspiciatis. Maxime!</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex flex-row gap-4 flex-wrap justify-content-center">
                                <a href="<?= get_page_url('/page-slug/'); ?>" title="PAGE_TITLE_TO_COMPLETE" class="btn btn-default btn-lg btn-pill">Button</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php require __DIR__.'/includes/footer.php'; ?>