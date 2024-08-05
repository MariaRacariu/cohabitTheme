<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php get_site_icon_url(); ?>" type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body>
    <div id="navigation" class="navigationContainer">
        <header id="masterHead" class="siteHeader" role="banner">
            <?php get_template_part('/template-parts/header/nav'); ?>
        </header>
    </div>