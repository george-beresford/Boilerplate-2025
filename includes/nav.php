<header>
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="" title="<?= $config['title']['brand_name']; ?>">
                    <img id="brand" src="assets/svg/logo.svg" alt="<?= $config['title']['brand_name']; ?>" class="object-fit-contain">
                </a>
            </div>
            <div class="col visible-xs visible-sm">
                <a href="#hamburger-menu" data-role="hamburger-menu" data-action="open" title="Expand menu">
                    <span class="visually-hidden">Expand menu</span>
                    <icon id="open">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                            <polyline points="4,10 44,10"></polyline>
                            <polyline points="4,24 44,24"></polyline>
                            <polyline points="4,38 44,38"></polyline>
                        </svg>
                    </icon>
                    <icon id="close">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                            <polyline points="4,44 24,24 44,44"></polyline>
                            <polyline points="44,4 24,24 4,4"></polyline>
                        </svg>
                    </icon>
                </a>
            </div>
        </div>
    </div>
</header>
<nav id="hamburger-menu">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="list-unstyled d-flex flex-column flex-lg-row">
                    <li><a href="" title="Link">Link</a></li>
                    <li><a href="" title="Link">Link</a></li>
                    <li><a href="" title="Link">Link</a></li>
                    <li><a href="" title="Link">Link</a></li>
                    <li><a href="" title="Link">Link</a></li>
                    <li><a href="" title="Link">Link</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>