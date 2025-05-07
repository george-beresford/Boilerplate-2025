<!DOCTYPE html>
<html lang="<?= $config['language']; ?>">
<head>
    <?php generate_meta_tags(); ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap-grid.min.css" integrity="sha512-i1b/nzkVo97VN5WbEtaPebBG8REvjWeqNclJ6AItj7msdVcaveKrlIIByDpvjk5nwHjXkIqGZscVxOrTb9tsMA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap-utilities.min.css" integrity="sha512-4ocAKAxnrkSm7MvkkF1D435kko3/HWWvoi/U9+7+ln94B/U01Mggca05Pm3W59BIv3abl0U3MPdygAPLo5aeqg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="<?= get_site_url(); ?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?= get_site_url(); ?>/assets/css/main.css">
</head>
<body class="boilerplate">
    <?php require_once(__DIR__.'/body-open.php'); ?>
    <?php require_once(__DIR__.'/nav.php'); ?>
