<?php
    // Site-wide configuration array
    global $config;
    $config = [
        'language' => 'en',
        'url' => [
            'protocol' => isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://',
            'domain' => $_SERVER['HTTP_HOST'],
            'page' => get_current_page(),
        ],
        'meta' => [
            'charset'           => 'UTF-8',
            'viewport'          => 'width=device-width, initial-scale=1.0',
            'X-UA-Compatible'   => 'ie=edge',
            'description'       => 'A modern boilerplate template built with PHP, JavaScript, and Bootstrap 5 for rapid web development.',
            'author'            => 'George Beresford Design',
        ],
        'favicons' => [
            'favicon'           => 'assets/seo/favicon.ico',
            'favicon_16x16'     => '/assets/seo/favicon-16x16.png',
            'favicon_32x32'     => '/assets/seo/favicon-32x32.png',
            'apple_touch_icon'  => '/assets/seo/apple-touch-icon.png',
            // 'manifest'          => '/assets/seo/site.webmanifest',
            'mask_icon'         => '/assets/seo/safari-pinned-tab.svg',
            'msapplication_tile_color'  => '#FFFFFF',
            'theme_color'               => '#FFFFFF',
        ],
        'title' => [
            'brand_name'        => 'Full Brand Name', // The ACME Corporation
            'brand_abbrev'      => 'Short Name', // ACME Corp.
            'page_title'        => isset($config['title']['page_title']) ? $config['title']['page_title'] : '',
            'separator'         => ' · ',
            'formatted'         => '',
        ],
        'open_graph' => [
            'title'             => '',
            'description'       => '',
            'image'             => '/assets/seo/og-image.jpg',
            'url'               => 'https://example.com',
            'type'              => 'website',
        ],
        'twitter' => [
            'card'              => 'summary_large_image',
            'site'              => '@defaultsite',
            'creator'           => '@defaultcreator',
            'title'             => '',
            'description'       => '',
            'image'             => '/assets/seo/twitter-card.jpg',
        ],
    ];

    global $config;

    $config['title']['formatted']           = get_page_title($config['title']['separator'], 'left');
    $config['open_graph']['title']          = get_page_title($config['title']['separator'], 'left');
    $config['open_graph']['description']    = $config['meta']['description'];
    $config['twitter']['title']             = get_page_title($config['title']['separator'], 'left');
    $config['twitter']['description']       = $config['meta']['description'];

    // Function to generate and display all meta tags to 2025 web standards
    function generate_meta_tags($debug = false) {
        global $config;

        $metaTags = '<title>'.htmlspecialchars($config['title']['formatted'] ?? '').'</title>'.PHP_EOL;
        $errors = [];

        // Helper function to validate required keys
        function validate_keys($keys, $data, $type) {
            global $errors;
            foreach ($keys as $key) {
                if (empty($data[$key])) {
                    $errors[] = "Missing or invalid $type key: $key";
                }
            }
        }

        // Validate meta, Open Graph, and Twitter keys
        validate_keys(['charset', 'viewport', 'description', 'author'], $config['meta'], 'meta');
        if (!empty($config['open_graph'])) {
            validate_keys(['title', 'description', 'image', 'url', 'type'], $config['open_graph'], 'Open Graph');
        }
        if (!empty($config['twitter'])) {
            validate_keys(['card', 'site', 'creator', 'title', 'description', 'image'], $config['twitter'], 'Twitter');
        }

        // Display debug comments if enabled
        if ($debug && !empty($errors)) {
            foreach ($errors as $error) {
                echo "<!-- $error -->".PHP_EOL;
            }
            if (!empty($errors)) return; // Stop execution if errors exist
        }

        // Generate meta tags
        $metaTags .= '<meta charset="'.htmlspecialchars($config['meta']['charset'] ?? '').'">'.PHP_EOL;
        $metaTags .= '<meta name="viewport" content="'.htmlspecialchars($config['meta']['viewport'] ?? '').'">'.PHP_EOL;
        $metaTags .= '<meta http-equiv="X-UA-Compatible" content="'.htmlspecialchars($config['meta']['X-UA-Compatible'] ?? '').'">'.PHP_EOL;
        $metaTags .= '<meta name="description" content="'.htmlspecialchars($config['meta']['description'] ?? '').'">'.PHP_EOL;
        $metaTags .= '<meta name="author" content="'.htmlspecialchars($config['meta']['author'] ?? '').'">'.PHP_EOL;

        // Open Graph tags
        if (!empty($config['open_graph'])) {
            foreach (['title', 'description', 'image', 'url', 'type'] as $key) {
                $metaTags .= '<meta property="og:'.$key.'" content="'.htmlspecialchars($config['open_graph'][$key] ?? '').'">'.PHP_EOL;
            }
        }

        // Twitter Card tags
        if (!empty($config['twitter'])) {
            foreach (['card', 'site', 'creator', 'title', 'description', 'image'] as $key) {
                $metaTags .= '<meta name="twitter:'.$key.'" content="'.htmlspecialchars($config['twitter'][$key] ?? '').'">'.PHP_EOL;
            }
        }

        // Favicon links
        foreach ($config['favicons'] as $key => $value) {
            if (strpos($key, 'favicon') !== false && !empty($value)) {
                $metaTags .= '<link rel="icon" href="'.htmlspecialchars($value).'">'.PHP_EOL;
            } elseif ($key === 'apple_touch_icon' && !empty($value)) {
                $metaTags .= '<link rel="apple-touch-icon" href="'.htmlspecialchars($value).'">'.PHP_EOL;
            } elseif ($key === 'mask_icon' && !empty($value)) {
                $metaTags .= '<link rel="mask-icon" href="'.htmlspecialchars($value).'">'.PHP_EOL;
            }
        }

        echo $metaTags;
        generate_web_manifest();
    }

    // Function to format titles to combine Brand and Page Titles with separator
    function get_page_title($separator, $position = "left") {
        global $config;

        if (empty($config['title']['page_title'])) {
            return $config['title']['brand_name'];
        }

        $maxlen = 55;
        if ($position === "left") {
            // Default, we use `Page Title {separator} Brand Full Name`
            $title = $config['title']['page_title'].$config['title']['separator'].$config['title']['brand_name'];
            // If too long, use `Page Title {separator} Brand Abbreviation` instead
            return strlen($title) <= $maxlen ? $title : $config['title']['page_title'].$config['title']['separator'].$config['title']['brand_abbrev'];
        } else {
            // Default, we use `Brand Full Name {separator} Page Title`
            $title = $config['title']['brand_name'].$config['title']['separator'].$config['title']['page_title'];
            // If too long, use `Brand Abbreviation {separator} Page Title` instead
            return strlen($title) <= $maxlen ? $title : $config['title']['brand_abbrev'].$config['title']['separator'].$config['title']['page_title'];
        }
    }

    // Function to get current page from current URL
    function get_current_page() {
        $uri = $_SERVER['REQUEST_URI'];
        $path = parse_url($uri, PHP_URL_PATH);
        return basename($path, '.php');
    }

    // Generate inline web manifest JSON
    function generate_web_manifest() {
        global $config;
        $webManifest = [
            'name' => $config['title']['brand_name'],
            'short_name' => $config['title']['brand_abbrev'],
            'start_url' => '/',
            'display' => 'standalone',
            'background_color' => $config['favicons']['theme_color'],
            'theme_color' => $config['favicons']['theme_color'],
            'icons' => [
                [
                    'src' => '/assets/seo/android-chrome-192x192.png',
                    'sizes' => '192x192',
                    'type' => 'image/png'
                ],
                [
                    'src' => '/assets/seo/android-chrome-512x512.png',
                    'sizes' => '512x512',
                    'type' => 'image/png'
                ]
            ]
        ];
    
        // Output the inline web manifest as a script tag
        echo '<script type="application/manifest+json">'.json_encode($webManifest, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES).'</script>';
    }
?>