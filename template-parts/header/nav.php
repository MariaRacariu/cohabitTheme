<nav class="cohabitNavigationContainer" id="cohabitNavigationContainer">
    <div class="cohabitContainer" id="cohabitContainer">
        <div class="cohabitLogoContainer" id="cohabitLogoContainer">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid(get_theme_mod('custom_logo')),'_wp_attachment_image_alt', true) ?>" class="pageLogo">
            </a>
        </div>
        <!-- Need to add ACF to call the mobile menu icon -->
        <div class="menuContainer">
            <?php
                wp_nav_menu(
                    array(
                        'menu'=>'Desktop Primary Menu',
                        'menu_class'=>'cohabitNavigationOptionsContainer',
                        'menu_id'=>'cohabitNavigationOptionsContainer',
                    )
                )
            ?>
        </div>
        <div class="cohabitMobileMenuIconContainer">
            <img src="<?php echo get_theme_file_uri( 'assets/images/menuIcon.svg' ); ?>" alt="Three lines to indicate a mobile menu" class="cohabitMenuIcon" id="cohabitMenuIcon">
            <img src="<?php echo get_theme_file_uri( 'assets/images/menuCloseIcon.svg' ); ?>" alt="An X to indicate to close the mobile menu" class="cohabitMenuCloseIcon" id="cohabitMenuCloseIcon">
        </div>
    </div>
</nav>